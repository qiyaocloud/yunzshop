<?php
if (!defined('IN_IA')) {
    exit('Access Denied');
}
if (!class_exists('SaleModel')) {
    function sort_recharges($a, $b)
    {
        $enough1 = floatval($a['enough']);
        $enough2 = floatval($b['enough']);
        if ($enough1 == $enough2) {
            return 0;
        } else {
            return ($enough1 < $enough2) ? 1 : -1;
        }
    }
    class SaleModel extends PluginModel
    {
		public function getEnoughs()
		{
			$set = $this->getSet();
			$allenoughs = array();
			$timeout = $set['timeout'];
			if (floatval($set['enoughmoney']) > 0 && floatval($set['enoughdeduct']) > 0) {
				$allenoughs[] = array('enough' => floatval($set['enoughmoney']), 'money' => floatval($set['enoughdeduct']));
			}
			if (is_array($timeout)) {
				foreach ($timeout as $val) {
					if (floatval($val['enough']) > 0 && floatval($val['give']) > 0) {
						$allenoughs[] = array('enough' => floatval($val['enough']), 'money' => floatval($val['give']));
					}
				}
			}
			@usort($allenoughs, 'sort_enoughs');
			return $allenoughs;
		}
        public function perms()
        {
            return array(
                'sale' => array(
                    'text' => $this->getName(),
                    'isplugin' => true,
                    'child' => array(
                        'deduct' => array(
                            'text' => '抵扣设置',
                            'view' => '查看',
                            'save' => '保存-log'
                        ),
                        'enough' => array(
                            'text' => '满额优惠设置',
                            'view' => '查看',
                            'save' => '保存-log'
                        ),
                        'recharge' => array(
                            'text' => '充值优惠设置',
                            'view' => '查看',
                            'save' => '保存-log'
                        )
                    )
                )
            );
        }
        public function setRechargeActivity($log)
        {
            $set       = $this->getSet();
            $recharges = iunserializer($set['recharges']);
            $credit2   = 0;
            $enough    = 0;
            $give      = '';
            if (is_array($recharges)) {
                usort($recharges, "sort_recharges");
                foreach ($recharges as $r) {
                    if (empty($r['enough']) || empty($r['give'])) {
                        continue;
                    }
                    if ($log['money'] >= floatval($r['enough'])) {
                        if (strexists($r['give'], '%')) {
                            $credit2 = round(floatval(str_replace('%', '', $r['give'])) / 100 * $log['money'], 2);
                        } else {
                            $credit2 = round(floatval($r['give']), 2);
                        }
                        $enough = floatval($r['enough']);
                        $give   = $r['give'];
                        break;
                    }
                }
            }
            if ($credit2 > 0) {
                $shopset = m('common')->getSysset('shop');
                m('member')->setCredit($log['openid'], 'credit2', $credit2, array(
                    '0',
                    $shopset['set'] . '充值满' . $enough . '赠送' . $give,
                    '现金活动'
                ));
                pdo_update('sz_yi_member_log', array(
                    'gives' => $credit2
                ), array(
                    'id' => $log['id']
                ));
            }
        }
    }
}
