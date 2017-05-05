<!-- mylink start -->
<div id="modal-mylink" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" style="width: 720px;">
        <div class="modal-content">
            <div class="modal-header" style="padding: 5px;">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <ul class="nav nav-pills" role="tablist">
                    <li role="presentation" class="active" style="display: block;"><a aria-controls="link_system" role="tab" data-toggle="tab" href="#link_system" aria-expanded="true">系统页面</a></li>
                    <li role="presentation" style="display: block;"><a aria-controls="link_goods" role="tab" data-toggle="tab" href="#link_goods" aria-expanded="false">商品链接</a></li>
                    <li role="presentation" style="display: block;"><a aria-controls="link_cate" role="tab" data-toggle="tab" href="#link_cate" aria-expanded="false">商品分类</a></li>
                   {{--  {!! my_link_extra('nav') !!} --}}
                    <li role="presentation" style="display: block;"><a aria-controls="link_other" role="tab" data-toggle="tab" href="#link_other" aria-expanded="false">自定义链接</a></li>
                </ul>
            </div>
            <div class="modal-body tab-content">
                <div role="tabpanel" class="tab-pane link_system active" id="link_system">
                    <div class="mylink-con">

                        <div class="page-header">
                            <h4><i class="fa fa-folder-open-o"></i> 商城页面链接</h4>
                        </div>

                        <div id="fe-tab-link-li-11" class="btn btn-default mylink-nav" ng-click="chooseLink(1, 11)" data-href="{{ ('home') }}">商城首页</div>
                        <div id="fe-tab-link-li-12" class="btn btn-default mylink-nav" ng-click="chooseLink(1, 12)" data-href="{{ yzAppFullUrl('category') }}">分类导航</div>
                        {{--<div id="fe-tab-link-li-13" class="btn btn-default mylink-nav" ng-click="chooseLink(1, 13)" data-href="{php echo $this->createMobileUrl('shop/list')}">全部商品</div>--}}
                        {{--<div id="fe-tab-link-li-14" class="btn btn-default mylink-nav" ng-click="chooseLink(1, 14)" data-href="{php echo $this->createMobileUrl('shop/notice')}">公告页面</div>--}}

                        <div class="page-header">
                            <h4><i class="fa fa-folder-open-o"></i> 会员中心链接</h4>
                        </div>

                        <div id="fe-tab-link-li-21" class="btn btn-default mylink-nav" ng-click="chooseLink(1, 21)" data-href="{{ yzAppFullUrl('member') }}">会员中心</div>
                        <div id="fe-tab-link-li-22" class="btn btn-default mylink-nav" ng-click="chooseLink(1, 22)" data-href="{{ yzAppFullUrl('member/orderList/0')}}">我的订单</div>
                        <div id="fe-tab-link-li-23" class="btn btn-default mylink-nav" ng-click="chooseLink(1, 23)" data-href="{{ yzAppFullUrl('cart') }}">我的购物车</div>
                        <div id="fe-tab-link-li-24" class="btn btn-default mylink-nav" ng-click="chooseLink(1, 24)" data-href="{{ yzAppFullUrl('member/collection') }}">我的收藏</div>
                        <div id="fe-tab-link-li-25" class="btn btn-default mylink-nav" ng-click="chooseLink(1, 25)" data-href="{{ yzAppFullUrl('member/footprint') }}">我的足迹</div>
                        <div id="fe-tab-link-li-26" class="btn btn-default mylink-nav" ng-click="chooseLink(1, 26)" data-href="{{ yzAppFullUrl('member/balance') }}">会员充值</div>
                        <div id="fe-tab-link-li-27" class="btn btn-default mylink-nav" ng-click="chooseLink(1, 27)" data-href="{{ yzAppFullUrl('member/detailed') }}">余额明细</div>
                        <div id="fe-tab-link-li-28" class="btn btn-default mylink-nav" ng-click="chooseLink(1, 28)" data-href="{{ yzAppFullUrl('member/balance') }}">余额提现</div>
                        <div id="fe-tab-link-li-29" class="btn btn-default mylink-nav" ng-click="chooseLink(1, 29)" data-href="{{ yzAppFullUrl('member/address') }}">我的收货地址</div>
<!-- ======================================================================= -->
            <!-- 页面新增链接 -->
                        <div class="page-header">
                            <h4><i class="fa fa-folder-open-o"></i> webapp链接</h4>
                        </div>
                        <div id="fe-tab-link-li-31" class="btn btn-default mylink-nav" ng-click="chooseLink(1, 31)" data-href="{{ yzAppFullUrl('member') }}">会员中心</div>

                        <div id="fe-tab-link-li-32" class="btn btn-default mylink-nav" ng-click="chooseLink(1, 32)" data-href="{{ yzAppFullUrl('member/tabs') }}">tabs</div>

                        <div id="fe-tab-link-li-33" class="btn btn-default mylink-nav" ng-click="chooseLink(1, 33)" data-href="{{ yzAppFullUrl('member/po') }}">po</div>

                        <div id="fe-tab-link-li-34" class="btn btn-default mylink-nav" ng-click="chooseLink(1, 34)" data-href="{{ yzAppFullUrl('member/info') }}">会员信息</div>

                        <div id="fe-tab-link-li-35" class="btn btn-default mylink-nav" ng-click="chooseLink(1, 35)" data-href="{{ yzAppFullUrl('member/editmobile') }}">修改手机</div>

                        <div id="fe-tab-link-li-36" class="btn btn-default mylink-nav" ng-click="chooseLink(1, 36)" data-href="{{ yzAppFullUrl('member/balance/:balance_value') }}">余额</div>

                        <div id="fe-tab-link-li-37" class="btn btn-default mylink-nav" ng-click="chooseLink(1, 37)" data-href="{{ yzAppFullUrl('member/detailed') }}">余额明细</div>

                        <div id="fe-tab-link-li-38" class="btn btn-default mylink-nav" ng-click="chooseLink(1, 38)" data-href="{{ yzAppFullUrl('member/screen') }}">余额筛选</div>

                        <div id="fe-tab-link-li-39" class="btn btn-default mylink-nav" ng-click="chooseLink(1, 39)" data-href="{{ yzAppFullUrl('member/details/:item') }}">余额详情</div>

                        <div id="fe-tab-link-li-40" class="btn btn-default mylink-nav" ng-click="chooseLink(1, 40)" data-href="{{ yzAppFullUrl('member/integral') }}">积分</div>

                        <div id="fe-tab-link-li-41" class="btn btn-default mylink-nav" ng-click="chooseLink(1, 41)" data-href="{{ yzAppFullUrl('member/income') }}">收入</div>

                        <div id="fe-tab-link-li-42" class="btn btn-default mylink-nav" ng-click="chooseLink(1, 42)" data-href="{{ yzAppFullUrl('member/balance_recharge/:balance') }}">充值</div>

                        <div id="fe-tab-link-li-43" class="btn btn-default mylink-nav" ng-click="chooseLink(1, 43)" data-href="{{ yzAppFullUrl('member/balance_transfer/:balance') }}">转账</div>

                        <div id="fe-tab-link-li-43" class="btn btn-default mylink-nav" ng-click="chooseLink(1, 43)" data-href="{{ yzAppFullUrl('member/balance_withdrawals/:balance') }}">提现</div>

                        <div id="fe-tab-link-li-44" class="btn btn-default mylink-nav" ng-click="chooseLink(1, 44)" data-href="{{ yzAppFullUrl('member/withdrawal') }}">收入提现</div>

                        <div id="fe-tab-link-li-45" class="btn btn-default mylink-nav" ng-click="chooseLink(1, 45)" data-href="{{ yzAppFullUrl('member/incomedetails') }}">收入明细</div>

                        <div id="fe-tab-link-li-46" class="btn btn-default mylink-nav" ng-click="chooseLink(1, 46)" data-href="{{ yzAppFullUrl('member/member_income_incomedetails_info') }}">收入明细详情</div>

                        <div id="fe-tab-link-li-47" class="btn btn-default mylink-nav" ng-click="chooseLink(1, 47)" data-href="{{ yzAppFullUrl('member/integraldetail') }}">积分明细</div>

                        <div id="fe-tab-link-li-48" class="btn btn-default mylink-nav" ng-click="chooseLink(1, 48)" data-href="{{ yzAppFullUrl('member/presentationRecord') }}">提现记录</div>

                        <div id="fe-tab-link-li-49" class="btn btn-default mylink-nav" ng-click="chooseLink(1, 49)" data-href="{{ yzAppFullUrl('member/presentationDetails') }}">提现详情</div>

                        <div id="fe-tab-link-li-50" class="btn btn-default mylink-nav" ng-click="chooseLink(1, 50)" data-href="{{ yzAppFullUrl('member/address') }}">收货地址</div>

                        <div id="fe-tab-link-li-51" class="btn btn-default mylink-nav" ng-click="chooseLink(1, 51)" data-href="{{ yzAppFullUrl('member/alterAddress/:model') }}">修改收货地址</div>

                        <div id="fe-tab-link-li-52" class="btn btn-default mylink-nav" ng-click="chooseLink(1, 52)" data-href="{{ yzAppFullUrl('member/appendAddress') }}">添加收货地址</div>

                        <div id="fe-tab-link-li-53" class="btn btn-default mylink-nav" ng-click="chooseLink(1, 53)" data-href="{{ yzAppFullUrl('member/distributionCommission') }}">未提现分销佣金</div>

                        <div id="fe-tab-link-li-54" class="btn btn-default mylink-nav" ng-click="chooseLink(1, 54)" data-href="{{ yzAppFullUrl('member/footprint') }}">我的足记</div>

                        <div id="fe-tab-link-li-55" class="btn btn-default mylink-nav" ng-click="chooseLink(1, 55)" data-href="{{ yzAppFullUrl('member/collection') }}">我的收藏</div>

                        <div id="fe-tab-link-li-56" class="btn btn-default mylink-nav" ng-click="chooseLink(1, 56)" data-href="{{ yzAppFullUrl('member/myrelationship') }}">我的关系</div>

                        <div id="fe-tab-link-li-57" class="btn btn-default mylink-nav" ng-click="chooseLink(1, 57)" data-href="{{ yzAppFullUrl('member/offlineSearch') }}">下线搜索</div>

                        <div id="fe-tab-link-li-58" class="btn btn-default mylink-nav" ng-click="chooseLink(1, 58)" data-href="{{ yzAppFullUrl('member/myEvaluation') }}">我的评价</div>

                        <div id="fe-tab-link-li-59" class="btn btn-default mylink-nav" ng-click="chooseLink(1, 59)" data-href="{{ yzAppFullUrl('member/comment') }}">多商品评价</div>

                        <div id="fe-tab-link-li-60" class="btn btn-default mylink-nav" ng-click="chooseLink(1, 60)" data-href="{{ yzAppFullUrl('member/evaluationDetails') }}">评价详情</div>

                        <div id="fe-tab-link-li-61" class="btn btn-default mylink-nav" ng-click="chooseLink(1, 61)" data-href="{{ yzAppFullUrl('member/extension') }}">我的推广</div>

                        <div id="fe-tab-link-li-62" class="btn btn-default mylink-nav" ng-click="chooseLink(1, 62)" data-href="{{ yzAppFullUrl('extension/distribution') }}">分销商</div>

                        <div id="fe-tab-link-li-63" class="btn btn-default mylink-nav" ng-click="chooseLink(1, 63)" data-href="{{ yzAppFullUrl('extension/commission') }}">预计佣金</div>

                        <div id="fe-tab-link-li-64" class="btn btn-default mylink-nav" ng-click="chooseLink(1, 64)" data-href="{{ yzAppFullUrl('extension/commissionDetails') }}">预计佣金详情</div>

                        <div id="fe-tab-link-li-65" class="btn btn-default mylink-nav" ng-click="chooseLink(1, 65)" data-href="{{ yzAppFullUrl('extension/unsettled') }}">未结算佣金</div>

                        <div id="fe-tab-link-li-66" class="btn btn-default mylink-nav" ng-click="chooseLink(1, 66)" data-href="{{ yzAppFullUrl('extension/unsettledDetails') }}">未结算佣金详情</div>

                        <div id="fe-tab-link-li-67" class="btn btn-default mylink-nav" ng-click="chooseLink(1, 67)" data-href="{{ yzAppFullUrl('extension/alreadySettled') }}">已结算佣金</div>

                        <div id="fe-tab-link-li-68" class="btn btn-default mylink-nav" ng-click="chooseLink(1, 68)" data-href="{{ yzAppFullUrl('extension/alreadySettledDetails') }}">已结算佣金详情</div>

                        <div id="fe-tab-link-li-69" class="btn btn-default mylink-nav" ng-click="chooseLink(1, 69)" data-href="{{ yzAppFullUrl('extension/notPresent') }}">未提现佣金</div>

                        <div id="fe-tab-link-li-70" class="btn btn-default mylink-nav" ng-click="chooseLink(1, 70)" data-href="{{ yzAppFullUrl('extension/notPresentDetails') }}">未提现佣金详情</div>

                        <div id="fe-tab-link-li-71" class="btn btn-default mylink-nav" ng-click="chooseLink(1, 71)" data-href="{{ yzAppFullUrl('extension/present') }}">已提现佣金</div>

                        <div id="fe-tab-link-li-72" class="btn btn-default mylink-nav" ng-click="chooseLink(1, 72)" data-href="{{ yzAppFullUrl('extension/presentDetails') }}">已提现佣金详情</div>

                        <div id="fe-tab-link-li-73" class="btn btn-default mylink-nav" ng-click="chooseLink(1, 73)" data-href="{{ yzAppFullUrl('extension/distributionOrder') }}">分销订单</div>

                        <div id="fe-tab-link-li-74" class="btn btn-default mylink-nav" ng-click="chooseLink(1, 74)" data-href="{{ yzAppFullUrl('member/orderList/:status') }}">订单</div>

                        <div id="fe-tab-link-li-75" class="btn btn-default mylink-nav" ng-click="chooseLink(1, 75)" data-href="{{ yzAppFullUrl('member/orderdetail/:order_data') }}">订单详情</div>

                        <div id="fe-tab-link-li-76" class="btn btn-default mylink-nav" ng-click="chooseLink(1, 76)" data-href="{{ yzAppFullUrl('member/logistics') }}">物流详情</div>

                        <div id="fe-tab-link-li-77" class="btn btn-default mylink-nav" ng-click="chooseLink(1, 77)" data-href="{{ yzAppFullUrl('member/evaluate') }}">评价</div>

                        <div id="fe-tab-link-li-78" class="btn btn-default mylink-nav" ng-click="chooseLink(1, 78)" data-href="{{ yzAppFullUrl('member/replyEvaluate') }}">回复评价</div>

                        <div id="fe-tab-link-li-79" class="btn btn-default mylink-nav" ng-click="chooseLink(1, 79)" data-href="{{ yzAppFullUrl('member/addevaluate') }}">追加评价</div>

                        <div id="fe-tab-link-li-80" class="btn btn-default mylink-nav" ng-click="chooseLink(1, 80)" data-href="{{ yzAppFullUrl('member/refund') }}">申请售后</div>

                        <div id="fe-tab-link-li-81" class="btn btn-default mylink-nav" ng-click="chooseLink(1, 81)" data-href="{{ yzAppFullUrl('member/aftersaleslist') }}">售后列表</div>

                        <div id="fe-tab-link-li-82" class="btn btn-default mylink-nav" ng-click="chooseLink(1, 82)" data-href="{{ yzAppFullUrl('member/aftersales/:refund_id') }}">售后详情</div>

                        <div id="fe-tab-link-li-83" class="btn btn-default mylink-nav" ng-click="chooseLink(1, 83)" data-href="{{ yzAppFullUrl('member/orderpay/:order_id') }}">订单支付</div>

                        <div id="fe-tab-link-li-84" class="btn btn-default mylink-nav" ng-click="chooseLink(1, 84)" data-href="{{ yzAppFullUrl('coupon/coupon_index') }}">优惠券</div>

                        <div id="fe-tab-link-li-85" class="btn btn-default mylink-nav" ng-click="chooseLink(1, 85)" data-href="{{ yzAppFullUrl('coupon/coupon_store') }}">领券中心</div>

                        <div id="fe-tab-link-li-86" class="btn btn-default mylink-nav" ng-click="chooseLink(1, 86)" data-href="{{ yzAppFullUrl('coupon/coupon_info') }}">详情</div>

                        <div id="fe-tab-link-li-87" class="btn btn-default mylink-nav" ng-click="chooseLink(1, 87)" data-href="{{ yzAppFullUrl('member/marketing') }}">营销工具</div>

                        <div id="fe-tab-link-li-88" class="btn btn-default mylink-nav" ng-click="chooseLink(1, 88)" data-href="{{ yzAppFullUrl('member/messageSettings') }}">消息提醒设置</div>

                        <div id="fe-tab-link-li-89" class="btn btn-default mylink-nav" ng-click="chooseLink(1, 89)" data-href="{{ yzAppFullUrl('search') }}">搜索</div>

                        <div id="fe-tab-link-li-90" class="btn btn-default mylink-nav" ng-click="chooseLink(1, 90)" data-href="{{ yzAppFullUrl('ogin/:object_id') }}">登录</div>

                        <div id="fe-tab-link-li-91" class="btn btn-default mylink-nav" ng-click="chooseLink(1, 91)" data-href="{{ yzAppFullUrl('register') }}">注册</div>

                        <div id="fe-tab-link-li-92" class="btn btn-default mylink-nav" ng-click="chooseLink(1, 92)" data-href="{{ yzAppFullUrl('category') }}">分类</div>

                        <div id="fe-tab-link-li-93" class="btn btn-default mylink-nav" ng-click="chooseLink(1, 93)" data-href="{{ yzAppFullUrl('catelist/:id') }}">分类列表</div>

                        <div id="fe-tab-link-li-94" class="btn btn-default mylink-nav" ng-click="chooseLink(1, 94)" data-href="{{ yzAppFullUrl('brand') }}">品牌</div>

                        <div id="fe-tab-link-li-95" class="btn btn-default mylink-nav" ng-click="chooseLink(1, 95)" data-href="{{ yzAppFullUrl('brandgoods') }}">品牌商品</div>

                        <div id="fe-tab-link-li-96" class="btn btn-default mylink-nav" ng-click="chooseLink(1, 96)" data-href="{{ yzAppFullUrl('cart') }}">购物车</div>

                        <div id="fe-tab-link-li-97" class="btn btn-default mylink-nav" ng-click="chooseLink(1, 97)" data-href="{{ yzAppFullUrl('cart/settlement') }}">结算</div>

                        <div id="fe-tab-link-li-98" class="btn btn-default mylink-nav" ng-click="chooseLink(1, 98)" data-href="{{ yzAppFullUrl('goods/:id') }}">商品详情</div>

                        <div id="fe-tab-link-li-99" class="btn btn-default mylink-nav" ng-click="chooseLink(1, 99)" data-href="{{ yzAppFullUrl('goodsorder') }}">填写订单</div>

                        <div id="fe-tab-link-li-100" class="btn btn-default mylink-nav" ng-click="chooseLink(1, 100)" data-href="{{ yzAppFullUrl('goods/goodstabs/:id/:goods') }}">商品详情内容</div>
            <!-- 新增链接结束 -->
<!-- ========================================================================= -->
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane link_goods" id="link_goods">
                    <div class="input-group">
                        <input type="text" class="form-control" name="keyword" value="" id="select-good-kw" placeholder="请输入商品名称进行搜索 (多规格商品不支持一键下单)">
                        <span class="input-group-btn"><button type="button" class="btn btn-default" id="select-good-btn">搜索</button></span>
                    </div>
                    <div class="mylink-con" id="select-goods" style="height:266px;"></div>
                </div>
                <div role="tabpanel" class="tab-pane link_cate" id="link_cate">
                    <div class="mylink-con">
                        @foreach (\app\backend\modules\goods\models\Category::getAllCategory() as $goodcate_parent)
                            @if (empty($goodcate_parent['parentid']))
                                <div class="mylink-line">
                                    {{ $goodcate_parent['name'] }}
                                    <div class="mylink-sub">
                                        <a href="javascript:;" class="mylink-nav" data-href="{php echo $this->createMobileUrl('shop/list',array('pcate'=>$goodcate['id']))}">选择</a>
                                    </div>
                                </div>

                                @foreach (\app\backend\modules\goods\models\Category::getAllCategory() as $goodcate_chlid)
                                    @if ($goodcate_chlid['parentid'] == $goodcate_parent['id'])
                                        <div class="mylink-line">
                                            <span style='height:10px; width: 10px; margin-left: 10px; margin-right: 10px; display:inline-block; border-bottom: 1px dashed #ddd; border-left: 1px dashed #ddd;'></span>
                                            {{ $goodcate_chlid['name'] }}
                                            <div class="mylink-sub">
                                                <a href="javascript:;" class="mylink-nav" data-href="{php echo $this->createMobileUrl('shop/list',array('pcate'=>$goodcate['id'],'ccate'=>$goodcate2['id']))}">选择</a>
                                            </div>
                                        </div>
                                        @foreach (\app\backend\modules\goods\models\Category::getAllCategory() as $goodcate_third)
                                            @if ($goodcate_third['parentid'] == $goodcate_chlid['id'])
                                                <div class="mylink-line">
                                                    <span style='height:10px; width: 10px; margin-left: 30px; margin-right: 10px; display:inline-block; border-bottom: 1px dashed #ddd; border-left: 1px dashed #ddd;'></span>
                                                    {{ $goodcate_third['name'] }}
                                                    <div class="mylink-sub">
                                                        <a href="javascript:;" class="mylink-nav" data-href="{php echo $this->createMobileUrl('shop/list',array('pcate'=>$goodcate['id'],'ccate'=>$goodcate2['id'],'tcate'=>$goodcate3['id']))}">选择</a>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </div>
                </div>

                {!! my_link_extra('content') !!}


                <div role="tabpanel" class="tab-pane link_cate" id="link_other">
                    <div class="mylink-con" style="height: 150px;">
                        <div class="form-group" style="overflow: hidden;">
                            <label class="col-xs-12 col-sm-3 col-md-2 control-label" style="line-height: 34px;">链接地址</label>
                            <div class="col-sm-9 col-xs-12">
                                <textarea name="mylink_href" class="form-control" style="height: 90px; resize: none;" placeholder="请以http://开头"></textarea>
                            </div>
                        </div>
                        <div class="form-group" style="overflow: hidden; margin-bottom: 0px;">
                            <label class="col-xs-12 col-sm-3 col-md-2 control-label" style="line-height: 34px;"></label>
                            <div class="col-sm-9 col-xs-12">
                                <div class="btn btn-primary col-lg-1 mylink-nav2" style="margin-left: 20px; width: auto; overflow: hidden; margin-left: 0px;"> 插入 </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!-- mylink end -->
<script language="javascript">
    require(['jquery'],function(){
    $(function() {
        $("#chkoption").click(function() {
            var obj = $(this);
            if (obj.get(0).checked) {
                $("#tboption").show();
                $(".trp").hide();
            }
            else {
                $("#tboption").hide();
                $(".trp").show();
            }
        });
    })

    $(document).on("click",".nav-link",function(){
        var id = $(this).data("id");
        if(id){
            $("#modal-mylink").attr({"data-id":id});
            $("#modal-mylink").modal();
        }
    });
    $(document).on("click",".mylink-nav",function(){
        var href = $(this).data("href");
        var id = $("#modal-mylink").attr("data-id");
        if(id){
            $("input[data-id="+id+"]").val(href);
            $("#modal-mylink").attr("data-id","");
        }else{
            console.log(href);
            ue.execCommand('link', {href:href});
        }
        $("#modal-mylink .close").click();
    });
    $(".mylink-nav2").click(function(){
        var href = $("textarea[name=mylink_href]").val();
        if(href){
            var id = $("#modal-mylink").attr("data-id");
            if(id){
                $("input[data-id="+id+"]").val(href);
                $("#modal-mylink").attr("data-id","");
            }else{
                ue.execCommand('link', {href:href});
            }
            $("#modal-mylink .close").click();
            $("textarea[name=mylink_href]").val("");
        }else{
            $("textarea[name=mylink_href]").focus();
            alert("链接不能为空!");
        }
    });
    // ajax 选择商品
    $("#select-good-btn").click(function(){
        var kw = $("#select-good-kw").val();
        $.ajax({
            type: 'POST',
            url: "{!! yzWebUrl('goods.goods.getMyLinkGoods') !!}",
            data: {kw:kw},
            dataType:'json',
            success: function(data){
                console.log(data);
                $("#select-goods").html("");
                if(data){
                    $.each(data,function(n,value){
                        var html = '<div class="good">';
                        html+='<div class="img"><img src="'+value.thumb+'"/></div>'
                        html+='<div class="choosebtn">';
                        html+='<a href="javascript:;" class="mylink-nav" data-href="'+"{php echo $this->createMobileUrl('shop/detail')}&id="+value.id+'">详情链接</a><br>';
                        if(value.hasoption==0){
                            html+='<a href="javascript:;" class="mylink-nav" data-href="'+"{php echo $this->createMobileUrl('order/confirm')}&id="+value.id+'">下单链接</a>';
                        }
                        html+='</div>';
                        html+='<div class="info">';
                        html+='<div class="info-title">'+value.title+'</div>';
                        html+='<div class="info-price">原价:￥'+value.market_price+' 现价￥'+value.price+'</div>';
                        html+='</div>'
                        html+='</div>';
                        $("#select-goods").append(html);
                    });
                }
            }
        });
    });

    })
</script>