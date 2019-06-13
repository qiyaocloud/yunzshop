<?php
/**
 * Created by PhpStorm.
 * Author: 芸众商城 www.yunzshop.com
 * Date: 17/2/23
 * Time: 上午11:20
 */

namespace app\frontend\modules\member\services;

use app\common\exceptions\AppException;
use app\common\helpers\Client;
use app\common\models\MemberGroup;
use app\common\services\Session;
use app\frontend\modules\member\models\MemberMiniAppModel;
use app\frontend\modules\member\models\MemberUniqueModel;
use app\frontend\modules\member\models\McMappingFansModel;
use app\frontend\modules\member\models\SubMemberModel;
use Illuminate\Contracts\Encryption\DecryptException;

class MemberMiniAppService extends MemberService
{
    const LOGIN_TYPE    = 2;  //小程序

    public function __construct()
    {}

    public function login()
    {
        include dirname(__FILE__ ) . "/../vendors/wechat/wxBizDataCrypt.php";

        $uniacid = \YunShop::app()->uniacid;

        $min_set = \Setting::get('plugin.min_app');

        if (is_null($min_set) || 0 == $min_set['switch']) {
            return show_json(0,'未开启小程序');
        }

        $para = \YunShop::request();

        $data = array(
            'appid' => $min_set['key'],
            'secret' => $min_set['secret'],
            'js_code' => $para['code'],
            'grant_type' => 'authorization_code',
        );

        $url = 'https://api.weixin.qq.com/sns/jscode2session';

        $user_info = \Curl::to($url)
            ->withData($data)
            ->asJsonResponse(true)
            ->get();
        
        $data = '';  //json

        if (!empty($para['info'])) {
            $json_data = json_decode($para['info'], true);

            $pc = new \WXBizDataCrypt($min_set['key'], $user_info['session_key']);
            $errCode = $pc->decryptData($json_data['encryptedData'], $json_data['iv'], $data);
        }

        if ($errCode == 0) {
            $json_user = json_decode($data, true);
        } else {
            return show_json(0,'登录认证失败');
        }

        if (!empty($json_user)) {
            if (isset($json_user['unionId'])) {
                $json_user['unionid']     = $json_user['unionId'];
            }

            $json_user['openid']     = $json_user['openId'];
            $json_user['nickname']   = $json_user['nickName'];
            $json_user['headimgurl'] = $json_user['avatarUrl'];
            $json_user['sex']        = $json_user['gender'];

            $token_url = 'https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=' . $min_set['key'] . '&secret=' . $min_set['secret'];

            $token_info = \Curl::to($token_url)
                ->asJsonResponse(true)
                ->get();

            $token_info['refresh_token'] = '';

            $json_user = array_merge($json_user, $token_info);

            //Login
            $member_id = $this->memberLogin($json_user);

            setcookie('Yz-Token', encrypt($json_user['access_token'] . ':' . $member_id . ':' . $json_user['openid']));

            $random = $this->wx_app_session($user_info);

            $result = array('session' => $random, 'wx_token' =>session_id(), 'uid' => $member_id);

            return show_json(1, $result);
        } else {
            return show_json(0, '获取用户信息失败');
        }
    }

    /**
     * 小程序登录态
     *
     * @param $user_info
     * @return string
     */
    function wx_app_session($user_info)
    {
        if (empty($user_info['session_key']) || empty($user_info['openid'])) {
            return show_json(0,'用户信息有误');
        }

        $random = md5(uniqid(mt_rand()));

        $_SESSION['wx_app'] = array($random => iserializer(array('session_key'=>$user_info['session_key'], 'openid'=>$user_info['openid'])));

        return $random;
    }

    public function createMiniMember($json_user, $arg)
    {
        $user_info = MemberMiniAppModel::getUserInfo($json_user['openid']);

        if (!empty($user_info)) {
            MemberMiniAppModel::updateUserInfo($json_user['openid'],array(
                'nickname' => $json_user['nickname'],
                'avatar' => $json_user['headimgurl'],
                'gender' => $json_user['sex'],
            ));
        } else {
            MemberMiniAppModel::insertData(array(
                'uniacid' => $arg['uniacid'],
                'member_id' => $arg['member_id'],
                'openid' => $json_user['openid'],
                'nickname' => $json_user['nickname'],
                'avatar' => $json_user['headimgurl'],
                'gender' => $json_user['sex'],
            ));
        }
    }

    /**
     * 公众号开放平台授权登陆
     *
     * @param $uniacid
     * @param $userinfo
     * @return array|int|mixed
     */
    public function unionidLogin($uniacid, $userinfo, $upperMemberId = NULL)
    {
        $member_id = parent::unionidLogin($uniacid, $userinfo, $upperMemberId = NULL, self::LOGIN_TYPE);

        return $member_id;
    }

    public function updateMemberInfo($member_id, $userinfo)
    {
        parent::updateMemberInfo($member_id, $userinfo);

        $record = array(
            'openid' => $userinfo['openid'],
            'nickname' => stripslashes($userinfo['nickname'])
        );

        MemberMiniAppModel::updateData($member_id, $record);
    }

    public function addMemberInfo($uniacid, $userinfo)
    {
        $uid = parent::addMemberInfo($uniacid, $userinfo);

        //$this->addMcMemberFans($uid, $uniacid, $userinfo);
        $this->addFansMember($uid, $uniacid, $userinfo);

        return $uid;
    }

    public function addMcMemberFans($uid, $uniacid, $userinfo)
    {
        McMappingFansModel::insertData($userinfo, array(
            'uid' => $uid,
            'acid' => $uniacid,
            'uniacid' => $uniacid,
            'salt' => Client::random(8),
        ));
    }

    public function addFansMember($uid, $uniacid, $userinfo)
    {
        MemberMiniAppModel::insertData(array(
            'uniacid' => $uniacid,
            'member_id' => $uid,
            'openid' => $userinfo['openid'],
            'nickname' => $userinfo['nickname'],
            'avatar' => $userinfo['headimgurl'],
            'gender' => $userinfo['sex'],
        ));
    }

    public function getFansModel($openid)
    {
        $model = MemberMiniAppModel::getUId($openid);

        if (!is_null($model)) {
            $model->uid = $model->member_id;
        }

        return $model;
    }

    /**
     * 会员关联表操作
     *
     * @param $uniacid
     * @param $member_id
     * @param $unionid
     */
    public function addMemberUnionid($uniacid, $member_id, $unionid)
    {
        MemberUniqueModel::insertData(array(
            'uniacid' => $uniacid,
            'unionid' => $unionid,
            'member_id' => $member_id,
            'type' => self::LOGIN_TYPE
        ));
    }

    /**
     * 商城会员
     *
     * @param $uniacid
     * @param $member_id
     * @param $userinfo
     */
    public function addSubMemberInfoV2($uniacid, $member_id, $userinfo)
    {
        //添加yz_member表
        $default_sub_group_id = MemberGroup::getDefaultGroupId()->first();

        if (!empty($default_sub_group_id)) {
            $default_subgroup_id = $default_sub_group_id->id;
        } else {
            $default_subgroup_id = 0;
        }

        SubMemberModel::insertData(array(
            'member_id' => $member_id,
            'uniacid' => $uniacid,
            'group_id' => $default_subgroup_id,
            'level_id' => 0,
            'pay_password' => '',
            'salt' => '',
            'yz_openid' => $userinfo['openid'],
        ));
    }

    /**
     * 更新会员
     *
     * @param $uid
     * @param $userinfo
     */
    private function updateSubMemberInfoV2($uid, $userinfo)
    {
        SubMemberModel::updateOpenid(
            $uid, ['yz_openid' => $userinfo['openid']]
        );
    }

    /**
     * 验证登录状态
     *
     * @return bool
     */
    public function isLogged()
    {
        $uniacid  = \YunShop::app()->uniacid;
        $token = \request()->getPassword();
        $ids   = \request()->getUser();
        $ids   = explode('=', $ids);

        if ($_COOKIE['access'] && (!is_null($ids) || $ids != 'null')) {
            if (MemberMiniAppModel::getMemberByTokenAndUid($token, $ids[0])) {
                return true;
            }
        }

        if (isset($_COOKIE['Yz-Token'])) {
            try {
                $decrypt = decrypt($_COOKIE['Yz-Token']);
                $decrypt = explode(':', $decrypt);

                $data = [
                    'token' => $decrypt[0],
                    'uid'   => $decrypt[1] . '=' . $decrypt[2]
                ];
            } catch (DecryptException $e) {
                return $this->successJson('登录失败', $e->getMessage());
            }

            if (is_null($token) || is_null($ids) || $ids == 'null' || $token == 'null'
                || ($token != $data['token'])) {
                $yz_token = decrypt($_COOKIE['Yz-Token']);
                $yz_token = explode(':', $yz_token);

                $token = $yz_token[0];
                $ids   =  [
                    $yz_token[1],
                    $yz_token[2]
                ];
            }
        }

        if (isset($ids[0]) && isset($ids[1])) {
            $uid   = $ids[0];
            $openid = $ids[1];

            $member = MemberMiniAppModel::getMemberByTokenAndUid($token, $uid);

            if (!is_null($member) && !empty($token) && !empty($uid)) {
                $min_set = \Setting::get('plugin.min_app');

                $auth_url = $this->_tokenAuth($token, $openid);

                $auth_info = \Curl::to($auth_url)
                    ->asJsonResponse(true)
                    ->get();

                if (!isset($auth_info['errcode'])) {
                    setcookie('access', true, time() + 7000);

                    return true;
                } else {
                    // TODO refreshToken

                    $account = '';
                    $appId = $account->key;
                    $refreshToken = $member->refresh_token_1;

                    $refresh_url = $this->_refreshAuth($appId, $refreshToken);

                    $refresh_info = \Curl::to($refresh_url)
                        ->asJsonResponse(true)
                        ->get();

                    if (!isset($refresh_info['errcode'])) {
                        if ($token != $refresh_info['access_token']) {
                            $member->access_token_1 = $refresh_info['access_token'];
                            $member->access_expires_in_1 = time() + 7200;

                            $member->save();
                        }

                        setcookie('access', true, time() + 7000);

                        return true;
                    }
                }
            }
        }

        return false;
    }
}
