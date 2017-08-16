<?php
/****************************************************************
 * Author:  libaojia
 * Date:    2017/7/21 上午10:51
 * Email:   livsyitian@163.com
 * QQ:      995265288
 * User:    芸众商城 www.yunzshop.com
 ****************************************************************/

return [
    'index'  => [
        'name' => '控制面板',
        'url' => 'index.index',         // url 可以填写http 也可以直接写路由
        'urlParams' => '',              //如果是url填写的是路由则启用参数否则不启用
        'permit' => 0,                  //如果不设置则不会做权限检测
        'menu' => 0,                    //如果不设置则不显示菜单，子菜单也将不显示
        'icon' => '',                   //菜单图标
        'parents' => [],                //
        'child' => [],
    ],

    'system' => [
        'name'          => '系统管理',
        'url'           => '',
        'url_params'    => '',
        'permit'        => 1,
        'menu'          => 1,
        'icon'          => 'fa-cogs',
        'sort'          => 1,
        'item'          => 'system',
        'parents'       => [],
        'child'         => [

            'Setting'       => [
                'name'          => '商城设置',
                'url'           => 'setting.shop.shop',
                'url_params'    => '',
                'permit'        => 1,
                'menu'          => 1,
                'icon'          => 'fa-cog',
                'sort'          => 0,
                'item'          => 'Setting',
                'parents'       => ['system'],
                'child'         => [

                    'setting_shop'  => [
                        'name'          => '基础设置',
                        'url'           => 'setting.shop.index',
                        'url_params'    => '',
                        'permit'        => 1,
                        'menu'          => 1,
                        'icon'          => 'fa-sliders',
                        'sort'          => 0,
                        'item'          => 'setting_shop',
                        'parents'       => ['system', 'Setting'],
                    ],

                    'setting_member' => [
                        'name'          => '会员设置',
                        'url'           => 'setting.shop.member',
                        'url_params'    => '',
                        'permit'        => 1,
                        'menu'          => 0,
                        'icon'          => '',
                        'sort'          => '3',
                        'item'          => 'setting_member',
                        'parents'       => ['system', 'Setting', 'setting_shop'],
                    ],

                    'setting_category' => [
                        'name'          => '分类层级',
                        'url'           => 'setting.shop.category',
                        'url_params'    => '',
                        'permit'        => 1,
                        'menu'          => 0,
                        'icon'          => '',
                        'sort'          => '4',
                        'item'          => 'setting_category',
                        'parents'       => ['system', 'Setting', 'setting_shop',],
                    ],

                    'setting_contact' => [
                        'name'          => '联系方式',
                        'url'           => 'setting.shop.contact',
                        'url_params'    => '',
                        'permit'        => 1,
                        'menu'          => 0,
                        'icon'          => '',
                        'sort'          => '5',
                        'item'          => 'setting_contact',
                        'parents'       => ['system', 'Setting', 'setting_shop'],
                    ],

                    'setting_sms'   => [
                        'name'          => '短信设置',
                        'url'           => 'setting.shop.sms',
                        'url_params'    => '',
                        'permit'        => 1,
                        'menu'          => 0,
                        'icon'          => '',
                        'sort'          => '6',
                        'item'          => 'setting_sms',
                        'parents'       => ['system', 'Setting', 'setting_shop'],
                    ],



                    'setting_slide' => [
                        'name'          => '幻灯片',
                        'url'           => 'setting.slide.index',
                        'url_params'    => '',
                        'permit'        => 1,
                        'menu'          => 0,
                        'icon'          => '',
                        'sort'          => '7',
                        'item'          => 'setting_slide',
                        'parents'       => ['system', 'Setting', 'setting_shop'],
                        'child'         => [

                            'setting_slide_index' => [
                                'name'          => '浏览列表',
                                'url'           => 'setting.slide.index',
                                'url_params'    => '',
                                'permit'        => 1,
                                'menu'          => 0,
                                'icon'          => '',
                                'sort'          => '6',
                                'item'          => 'setting_slide_index',
                                'parents'       => ['system', 'Setting', 'setting_shop', 'setting_slide'],
                            ],

                            'setting_slide_create' => [
                                'name'          => '创建幻灯片',
                                'url'           => 'setting.slide.create',
                                'url_params'    => '',
                                'permit'        => 1,
                                'menu'          => 0,
                                'icon'          => '',
                                'sort'          => '6',
                                'item'          => 'setting_slide_create',
                                'parents'       => ['system', 'Setting', 'setting_shop', 'setting_slide'],
                            ],

                            'setting_slide_edit' => [
                                'name'          => '编辑幻灯片',
                                'url'           => 'setting.slide.edit',
                                'url_params'    => '',
                                'permit'        => 1,
                                'menu'          => 0,
                                'icon'          => '',
                                'sort'          => '6',
                                'item'          => 'setting_slide_edit',
                                'parents'       => ['system', 'Setting', 'setting_shop', 'setting_slide'],
                            ],

                            'setting_slide_deleted' => [
                                'name'          => '删除幻灯片',
                                'url'           => 'setting.slide.deleted',
                                'url_params'    => '',
                                'permit'        => 1,
                                'menu'          => 0,
                                'icon'          => '',
                                'sort'          => '6',
                                'item'          => 'setting_slide_deleted',
                                'parents'       => ['system', 'Setting', 'setting_shop', 'setting_slide'],
                            ],
                        ],
                    ],

                    'setting_shop_trade' => [
                        'name'              => '交易设置',
                        'url'               => 'setting.shop.trade',
                        'url_params'        => '',
                        'permit'            => 1,
                        'menu'              => 1,
                        'icon'              => 'fa-compress',
                        'sort'              => '3',
                        'item'              => 'setting_shop_trade',
                        'parents'           => ['system', 'Setting',],
                    ],

                    'setting_shop_pay'  => [
                        'name'              => '支付方式',
                        'url'               => 'setting.shop.pay',
                        'url_params'        => '',
                        'permit'            => 1,
                        'menu'              => 1,
                        'icon'              => 'fa-facebook-square',
                        'sort'              => '3',
                        'item'              => 'setting_shop_pay',
                        'parents'           => ['system', 'Setting',],
                    ],

                    'setting_shop_share' => [
                        'name'              => '分享引导',
                        'url'               => 'setting.shop.share',
                        'url_params'        => '',
                        'permit'            => 1,
                        'menu'              => 1,
                        'icon'              => 'fa-link',
                        'sort'              => '5',
                        'item'              => 'setting_shop_share',
                        'parents'           => ['system', 'Setting',],
                    ],

                    'setting_shop_notice' => [
                        'name'              => '消息提醒',
                        'url'               => 'setting.shop.notice',
                        'url_params'        => '',
                        'permit'            => 1,
                        'menu'              => 1,
                        'icon'              => 'fa-bell-o',
                        'sort'              => '6',
                        'item'              => 'setting_shop_notice',
                        'parents'           => ['system', 'Setting',],
                    ],
                ],
            ],

            'shop'          => [
                'name'          => '商城入口',
                'url'           => 'setting.shop.entry',
                'url_params'    => '',
                'permit'        => 1,
                'menu'          => 1,
                'icon'          => 'fa-hand-o-right',
                'sort'          => 0,
                'item'          => 'shop',
                'parents'       => ['system',],
            ],

            'role'          => [
                'name'          => '角色管理',
                'url'           => 'user.role.index',
                'url_params'    => '',
                'permit'        => 1,
                'menu'          => 1,
                'icon'          => 'fa-gamepad',
                'sort'          => 0,
                'item'          => 'role',
                'parents'       => ['system',],
                'child'         => [

                    'role_see'          => [
                        'name'              => '浏览角色',
                        'url'               => 'user.role.index',
                        'url_params'        => '',
                        'permit'            => 1,
                        'menu'              => 0,
                        'icon'              => '',
                        'sort'              => 0,
                        'item'              => 'role_see',
                        'parents'           => ['system', 'role',],
                    ],

                    'role_store'        => [
                        'name'              => '添加角色',
                        'url'               => 'user.role.store',
                        'url_params'        => '',
                        'permit'            => 1,
                        'menu'              => 0,
                        'icon'              => '',
                        'sort'              => 0,
                        'item'              => 'role_store',
                        'parents'           => ['system', 'role',],
                    ],

                    'role_update'       => [
                        'name'              => '修改角色',
                        'url'               => 'user.role.update',
                        'url_params'        => '',
                        'permit'            => 1,
                        'menu'              => 0,
                        'icon'              => '',
                        'sort'              => 0,
                        'item'              => 'role_update',
                        'parents'           => ['system', 'role',],
                    ],

                    'role_destroy'          => [
                        'name'              => '删除角色',
                        'url'               => 'user.role.destory',
                        'url_params'        => '',
                        'permit'            => 1,
                        'menu'              => 0,
                        'icon'              => '',
                        'sort'              => 0,
                        'item'              => 'role_destroy',
                        'parents'           => ['system', 'role'],
                    ],
                ],
            ],

            'user'          => [
                'name'          => '操作员',
                'url'           => 'user.user.index',
                'url_params'    => '',
                'permit'        => 1,
                'menu'          => 1,
                'icon'          => 'fa-list-ul',
                'sort'          => 0,
                'item'          => 'user',
                'parents'       => ['system',],
                'child'         => [

                    'user_see'      => [
                        'name'          => '浏览操作员',
                        'url'           => 'user.user.index',
                        'url_params'    => '',
                        'permit'        => 1,
                        'menu'          => 0,
                        'icon'          => '',
                        'sort'          => 0,
                        'item'          => 'user_see',
                        'parents'       => ['system', 'user',],
                    ],

                    'user_store'    => [
                        'name'          => '添加操作员',
                        'url'           => 'user.user.store',
                        'url_params'    => '',
                        'permit'        => 1,
                        'menu'          => 0,
                        'icon'          => '',
                        'sort'          => 0,
                        'item'          => 'user_store',
                        'parents'       => ['system', 'user',],
                    ],

                    'user_update'   => [
                        'name'          => '修改操作员',
                        'url'           => 'user.user.update',
                        'url_params'    => '',
                        'permit'        => 1,
                        'menu'          => 0,
                        'icon'          => '',
                        'sort'          => 0,
                        'item'          => 'user_update',
                        'parents'       => ['system', 'user',],
                    ],

                    'user_destroy'  => [
                        'name'          => '删除操作员',
                        'url'           => 'user.user.destroy',
                        'url_params'    => '',
                        'permit'        => 1,
                        'menu'          => 0,
                        'icon'          => 'fa-remove',
                        'sort'          => 0,
                        'item'          => 'user_destroy',
                        'parents'       => ['system', 'user',],
                    ],
                ],
            ],
        ],
    ],

    'Goods'  => [
        'name'          => '商品管理',
        'url'           => '',
        'url_params'    => '',
        'permit'        => 1,
        'menu'          => 1,
        'icon'          => 'fa-archive',
        'sort'          => '2',
        'item'          => 'Goods',
        'parents'       => [],
        'child'         => [
            //添加白名单
            'goods_no_permission' => [
                'name'              => '白名单（不控制权限）',
                'url'               => '',
                'url_params'        => '',
                'permit'            => 0,
                'menu'              => 0,
                'icon'              => '',
                'sort'              => 0,
                'item'              => 'goods_no_permission',
                'parents'           => ['Goods', 'goods_dispatch',],
                'child'             => [

                    'area_area_select_city' => [
                        'name'              => '白名单（选择城市）',
                        'url'               => 'area.area.select-city',
                        'url_params'        => '',
                        'permit'            => 0,
                        'menu'              => 0,
                        'icon'              => '',
                        'sort'              => 0,
                        'item'              => 'area_area_select_city',
                        'parents'           => ['Goods', 'goods_no_permission',],
                    ],

                    'member_member_get_search_member' => [
                        'name'              => '白名单（选择通知人）',
                        'url'               => 'member.member.get-search-member',
                        'url_params'        => '',
                        'permit'            => 0,
                        'menu'              => 0,
                        'icon'              => '',
                        'sort'              => 0,
                        'item'              => 'member_member_get_search_member',
                        'parents'           => ['Goods', 'goods_no_permission',],
                    ],

                    'coupon_coupon_get_search_coupons' => [
                        'name'              => '白名单（选择优惠卷）',
                        'url'               => 'coupon.coupon.get-search-coupons',
                        'url_params'        => '',
                        'permit'            => 0,
                        'menu'              => 0,
                        'icon'              => '',
                        'sort'              => 0,
                        'item'              => 'coupon_coupon_get_search_coupons',
                        'parents'           => ['Goods', 'goods_no_permission',],
                    ],

                    //优惠卷白名单
                    'coupon_no_permission'  => [
                        'name'              => '白名单（指定商品）',
                        'url'               => 'coupon.coupon.add-param',
                        'url_params'        => '',
                        'permit'            => 0,
                        'menu'              => 0,
                        'icon'              => '',
                        'sort'              => '2',
                        'item'              => 'coupon_no_permission',
                        'parents'           => ['Goods', 'coupon',],
                    ],

                    'goods_category_get_search_category'  => [
                        'name'              => '白名单（选择分类）',
                        'url'               => 'goods.category.get-search-categorys',
                        'url_params'        => '',
                        'permit'            => 0,
                        'menu'              => 0,
                        'icon'              => '',
                        'sort'              => '2',
                        'item'              => 'goods_category_get_search_category',
                        'parents'           => ['Goods', 'coupon',],
                    ],

                    'comment_no_permission'  => [
                        'name'                  => '白名单（搜索商品）',
                        'url'                   => 'goods.goods.get-search-goods',
                        'url_params'            => '',
                        'permit'                => 0,
                        'menu'                  => 0,
                        'icon'                  => '',
                        'sort'                  => 0,
                        'item'                  => 'comment_no_permission',
                        'parents'               => ['Goods', 'comment',],
                    ],
                ],
            ],

            'goods_goods'   => [
                'name'          => '商品列表',
                'url'           => 'goods.goods.index',
                'url_params'    => '',
                'permit'        => 1,
                'menu'          => 1,
                'icon'          => 'fa-cubes',
                'sort'          => 0,
                'item'          => 'goods_goods',
                'parents'       => ['Goods',],
                'child'         => [

                    'goods_goods_see' => [
                        'name'          => '浏览列表',
                        'url'           => 'goods.goods.index',
                        'url_params'    => '',
                        'permit'        => 1,
                        'menu'          => 0,
                        'icon'          => '',
                        'sort'          => '22',
                        'item'          => 'goods_goods_see',
                        'parents'       => ['Goods', 'goods_goods'],
                    ],

                    'goods_goods_display_order' => [
                        'name'          => '修改排序',
                        'url'           => 'goods.goods.displayorder',
                        'url_params'    => '',
                        'permit'        => 1,
                        'menu'          => 0,
                        'icon'          => 'fa-circle',
                        'sort'          => '23',
                        'item'          => 'goods_goods_display_order',
                        'parents'       => ['Goods', 'goods_goods'],
                    ],

                    'goods_goods_add'  => [
                        'name'          => '添加商品',
                        'url'           => 'goods.goods.create',
                        'url_params'    => '',
                        'permit'        => 1,
                        'menu'          => 0,
                        'icon'          => '',
                        'item'          => 'goods_goods_add',
                        'parents'       => ['Goods', 'goods_goods'],
                    ],

                    'goods_goods_copy'  => [
                        'name'          => '复制商品',
                        'url'           => 'goods.goods.copy',
                        'url_params'    => '',
                        'permit'        => 1,
                        'menu'          => 0,
                        'icon'          => '',
                        'sort'          => 0,
                        'item'          => 'goods_goods_copy',
                        'parents'       => ['Goods', 'goods_goods',],
                    ],

                    'goods_goods_edit'  => [
                        'name'          => '编辑商品',
                        'url'           => 'goods.goods.edit',
                        'url_params'    => '',
                        'permit'        => 1,
                        'menu'          => 0,
                        'icon'          => '',
                        'sort'          => 0,
                        'item'          => 'goods_goods_edit',
                        'parents'       => ['Goods', 'goods_goods',],
                    ],

                    'goods_goods_destroy'  => [
                        'name'          => '删除商品',
                        'url'           => 'goods.goods.destroy',
                        'url_params'    => '',
                        'permit'        => 1,
                        'menu'          => 0,
                        'icon'          => '',
                        'sort'          => 0,
                        'item'          => 'goods_goods_destroy',
                        'parents'       => ['Goods', 'goods_goods',],
                    ],

                    'goods_goods_change'  => [
                        'name'          => '快捷改名称、价格、库存',
                        'url'           => 'goods.goods.change',
                        'url_params'    => '',
                        'permit'        => 1,
                        'menu'          => 0,
                        'icon'          => '',
                        'sort'          => 0,
                        'item'          => 'goods_goods_change',
                        'parents'       => ['Goods', 'goods_goods',],
                    ],
                ],
            ],

            'goods_category'    => [
                'name'              => '商品分类',
                'url'               => 'goods.category.index',
                'url_params'        => '',
                'permit'            => 1,
                'menu'              => 1,
                'icon'              => 'fa-sitemap',
                'sort'              => '2',
                'item'              => 'goods_category',
                'parents'           => ['Goods',],
                'child'             => [

                    'goods_category_see' => [
                        'name'              => '浏览分类',
                        'url'               => 'goods.category.index',
                        'url_params'        => '',
                        'permit'            => 1,
                        'menu'              => 0,
                        'icon'              => 'fa-plus',
                        'sort'              => 0,
                        'item'              => 'goods_category_see',
                        'parents'           => ['Goods', 'goods_category',],
                    ],

                    'goods_category_add' => [
                        'name'              => '添加分类',
                        'url'               => 'goods.category.add-category',
                        'url_params'        => '',
                        'permit'            => 1,
                        'menu'              => 1,
                        'icon'              => 'fa-plus',
                        'sort'              => 0,
                        'item'              => 'goods_category_add',
                        'parents'           => ['Goods', 'goods_category',],
                    ],

                    'goods_category_edit' => [
                        'name'              => '修改分类',
                        'url'               => 'goods.category.edit-category',
                        'url_params'        => '',
                        'permit'            => 1,
                        'menu'              => 0,
                        'icon'              => 'fa-edit',
                        'sort'              => '2',
                        'item'              => 'goods_category_edit',
                        'parents' => ['Goods', 'goods_category',]
                    ],

                    'goods_category_delete' => [
                        'name'              => '删除分类',
                        'url'               => 'goods.category.deleted-category',
                        'url_params'        => '',
                        'permit'            => 1,
                        'menu'              => 0,
                        'icon'              => 'fa-sliders',
                        'sort'              => '3',
                        'item'              => 'goods_category_delete',
                        'parents'           => ['Goods', 'goods_category',],
                    ],
                ],
            ],

            'goods_brand'   => [
                'name'              => '品牌管理',
                'url'               => 'goods.brand.index',
                'url_params'        => '',
                'permit'            => 1,
                'menu'              => 1,
                'icon'              => 'fa-briefcase',
                'sort'              => '3',
                'item'              => 'goods_brand',
                'parents'           => ['Goods','goods_brand'],
                'child'             => [
                    'goods_brand_see'   => [
                        'name'              => '浏览品牌',
                        'url'               => 'goods.brand.index',
                        'url_params'        => '',
                        'permit'            => 1,
                        'menu'              => 1,
                        'icon'              => '',
                        'sort'              => '3',
                        'item'              => 'goods_brand',
                        'parents'           => ['Goods',],
                    ],

                    'goods_brand_add' => [
                        'name'              => '添加品牌',
                        'url'               => 'goods.brand.add',
                        'url_params'        => '',
                        'permit'            => 1,
                        'menu'              => 1,
                        'icon'              => '',
                        'sort'              => 0,
                        'item'              => 'goods_brand_add',
                        'parents'           => ['Goods', 'goods_brand',],
                    ],

                    'goods_brand_edit' => [
                        'name'              => '修改品牌',
                        'url'               => 'goods.brand.edit',
                        'url_params'        => '',
                        'permit'            => 1,
                        'menu'              => 0,
                        'icon'              => '',
                        'sort'              => '2',
                        'item'              => 'goods_brand_edit',
                        'parents'           => ['Goods', 'goods_brand',],
                    ],

                    'goods_brand_delete' => [
                        'name'              => '删除品牌',
                        'url'               => 'goods.brand.deleted-brand',
                        'url_params'        => '',
                        'permit'            => 1,
                        'menu'              => 0,
                        'icon'              => '',
                        'sort'              => '3',
                        'item'              => 'goods_brand_delete',
                        'parents'           => ['Goods', 'goods_brand',],
                    ],
                ],
            ],

            'goods_dispatch' => [
                'name'              => '配送模板',
                'url'               => 'goods.dispatch.index',
                'url_params'        => '',
                'permit'            => 1,
                'menu'              => 1,
                'icon'              => 'fa-truck',
                'sort'              => '4',
                'item'              => 'goods_dispatch.index',
                'parents'           => ['Goods',],
                'child'             => [

                    'goods_dispatch_see' => [
                        'name'              => '浏览列表',
                        'url'               => 'goods.dispatch.index',
                        'url_params'        => '',
                        'permit'            => 1,
                        'menu'              => 0,
                        'icon'              => '',
                        'sort'              => '4',
                        'item'              => 'goods_dispatch_see',
                        'parents'           => ['Goods','goods_dispatch']
                    ],

                    'goods_dispatch_sort' => [
                        'name'              => '修改排序',
                        'url'               => 'goods.dispatch.sort',
                        'url_params'        => '',
                        'permit'            => 1,
                        'menu'              => 0,
                        'icon'              => '',
                        'sort'              => '4',
                        'item'              => 'goods_dispatch_sort',
                        'parents'           => ['Goods','goods_dispatch']
                    ],

                    'goods_dispatch_add_one' => [
                        'name'              => '添加模板',
                        'url'               => 'goods.dispatch.add',
                        'url_params'        => '',
                        'permit'            => 1,
                        'menu'              => 0,
                        'icon'              => '',
                        'sort'              => 0,
                        'item'              => 'goods_dispatch_add_one',
                        'parents'           => ['Goods', 'goods_dispatch',],
                    ],

                    'goods_dispatch_alter' => [
                        'name'              => '修改模板',
                        'url'               => 'goods.dispatch.edit',
                        'url_params'        => '',
                        'permit'            => 1,
                        'menu'              => 0,
                        'icon'              => '',
                        'sort'              => 0,
                        'item'              => 'goods_dispatch_alter',
                        'parents'           => ['Goods', 'goods_dispatch',],
                    ],

                    'goods_dispatch_delete' => [
                        'name'              => '删除模板',
                        'url'               => 'goods.dispatch.delete',
                        'url_params'        => '',
                        'permit'            => 1,
                        'menu'              => 0,
                        'icon'              => '',
                        'sort'              => 0,
                        'item'              => 'goods_dispatch_delete',
                        'parents'           => ['Goods', 'goods_dispatch',],
                    ],
                ],
            ],

            'comment' => [
                'name'              => '评论管理',
                'url'               => 'goods.comment.index',
                'url_params'        => '',
                'permit'            => 1,
                'menu'              => 1,
                'icon'              => 'fa-columns',
                'sort'              => '5',
                'item'              => 'comment',
                'parents'           => ['Goods',],
                'child' => [

                    'goods_comment_add'     => [
                        'name'                  => '添加评价',
                        'url'                   => 'goods.comment.add-comment',
                        'url_params'            => '',
                        'permit'                => 1,
                        'menu'                  => 0,
                        'icon'                  => '',
                        'sort'                  => 0,
                        'item'                  => 'goods_comment_add',
                        'parents'               => ['Goods', 'comment',],
                    ],

                    'goods_comment_reply'   => [
                        'name'                  => '回复评价',
                        'url'                   => 'goods.comment.reply',
                        'url_params'            => '',
                        'permit'                => 1,
                        'menu'                  => 0,
                        'icon'                  => '',
                        'sort'                  => 0,
                        'item'                  => 'goods_comment_reply',
                        'parents'               => ['Goods','comment',],
                    ],

                    'goods_comment_delete'  => [
                        'name'                  => '删除评价',
                        'url'                   => 'goods.comment.deleted',
                        'url_params'            => '',
                        'permit'                => 1,
                        'menu'                  => 0,
                        'icon'                  => '',
                        'sort'                  => 0,
                        'item'                  => 'goods_comment_delete',
                        'parents'               => ['Goods', 'comment',],
                    ],
                ],
            ],

            'coupon'    => [
                'name'              => '优惠券管理',
                'url'               => '',
                'url_params'        => '',
                'permit'            => 1,
                'menu'              => 1,
                'icon'              => 'fa-tags',
                'sort'              => '6',
                'item'              => 'coupon',
                'parents'           => ['Goods',],
                'child'             => [

                    'coupon_coupon_create' => [
                        'name'              => '创建优惠券',
                        'url'               => 'coupon.coupon.create',
                        'url_params'        => '',
                        'permit'            => 1,
                        'menu'              => 1,
                        'icon'              => 'fa-ticket',
                        'sort'              => '2',
                        'item'              => 'coupon_coupon_create',
                        'parents'           => ['Goods', 'coupon',],
                    ],

                    'coupon_coupon_edit' => [
                        'name'              => '编辑优惠券',
                        'url'               => 'coupon.coupon.edit',
                        'url_params'        => '',
                        'permit'            => 1,
                        'menu'              => 0,
                        'icon'              => '',
                        'sort'              => 0,
                        'item'              => 'coupon_coupon_edit',
                        'parents'           => ['Goods', 'coupon',],
                    ],

                    'coupon_coupon_destroy' => [
                        'name'              => '删除优惠券',
                        'url'               => 'coupon.coupon.destory',
                        'url_params'        => '',
                        'permit'            => 1,
                        'menu'              => 0,
                        'icon'              => '',
                        'sort'              => 0,
                        'item'              => 'coupon_coupon_destory',
                        'parents'           => ['Goods', 'coupon',],
                    ],

                    'coupon_send_coupon' => [
                        'name'              => '发放优惠券',
                        'url'               => 'coupon.send-coupon.index',
                        'url_params'        => '',
                        'permit'            => 1,
                        'menu'              => 0,
                        'icon'              => '',
                        'sort'              => 0,
                        'item'              => 'coupon_send_coupon',
                        'parents'           => ['Goods', 'coupon'],
                    ],

                    'coupon_coupon_index' => [
                        'name'              => '优惠券列表',
                        'url'               => 'coupon.coupon.index',
                        'url_params'        => '',
                        'permit'            => 1,
                        'menu'              => 1,
                        'icon'              => 'fa-list-ul',
                        'sort'              => 1,
                        'item'              => 'coupon_coupon_index',
                        'parents'           => ['Goods', 'coupon',],
                    ],

                    'coupon_coupon_log' => [
                        'name'              => '领取发放记录',
                        'url'               => 'coupon.coupon.log',
                        'url_params'        => '',
                        'permit'            => 1,
                        'menu'              => 1,
                        'icon'              => 'fa-pencil',
                        'sort'              => '3',
                        'item'              => 'coupon_coupon_log',
                        'parents'           => ['Goods', 'coupon',],
                    ],
                ],
            ],
        ],
    ],

    'Member' => [
        'name' => '会员管理',
        'url' => '',
        'url_params' => '',
        'permit' => 1,
        'menu' => 1,
        'icon' => 'fa-users',
        'sort' => '3',
        'item' => 'Member',
        'parents' => [],

        'child' => [
            'member_all' => [
                'name' => '全部会员',
                'url' => 'member.member.index',
                'url_params' => '',
                'permit' => 1,
                'menu' => 1,
                'icon' => 'fa-users',
                'sort' => 0,
                'item' => 'member_all',
                'parents' =>
                    [
                        'Member',
                    ],

                'child' => [
                    'member_export' => [
                        'name' => '会员导出',
                        'url' => 'member.member.export',
                        'url_params' => '',
                        'permit' => 1,
                        'menu' => 0,
                        'icon' => 'fa-circle-o',
                        'sort' => 0,
                        'item' => 'member_export',
                        'parents' =>
                            [
                                'Member',
                                'member_all',
                            ],

                    ],

                    'member_detail' => [
                        'name' => '会员详情',
                        'url' => 'member.member.detail',
                        'url_params' => '',
                        'permit' => 1,
                        'menu' => 0,
                        'icon' => 'fa-circle-o',
                        'sort' => 0,
                        'item' => 'member_detail',
                        'parents' =>
                            [
                                'Member',
                                'member_all',
                            ],

                    ],

                    'order_list_indent' => [
                        'name' => '会员订单',
                        'url' => 'order.list',
                        'url_params' => '',
                        'permit' => 1,
                        'menu' => 0,
                        'icon' => 'fa-circle-o',
                        'sort' => 0,
                        'item' => 'order_list_indent',
                        'parents' =>
                            [
                                'Member',
                                'member_all',
                            ],

                    ],

                    'finance_point_recharge' => [
                        'name' => '积分充值',
                        'url' => 'finance.point-recharge',
                        'url_params' => '',
                        'permit' => 1,
                        'menu' => 0,
                        'icon' => 'fa-circle-o',
                        'sort' => 0,
                        'item' => 'finance_point_recharge',
                        'parents' =>
                            [
                                'Member',
                                'member_all',
                            ],

                    ],
                    'finance_balance' => [
                        'name' => '余额充值',
                        'url' => 'finance.balance.recharge',
                        'url_params' => '',
                        'permit' => 1,
                        'menu' => 0,
                        'icon' => 'fa-circle-o',
                        'sort' => 0,
                        'item' => 'finance_balance',
                        'parents' =>
                            [
                                'Member',
                                'member_all',
                            ],

                    ],

                    'member_member_agent' => [
                        'name' => '推广下线',
                        'url' => 'member.member.agent',
                        'url_params' => '',
                        'permit' => 1,
                        'menu' => 0,
                        'icon' => 'fa-circle-o',
                        'sort' => 0,
                        'item' => 'member_member_agent',
                        'parents' =>
                            [
                                'Member',
                                'member_all',
                            ],

                    ],

                    'member_member_agent_blacklist' => [
                        'name' => '加入黑名单',
                        'url' => 'member.member.agent',
                        'url_params' => '',
                        'permit' => 1,
                        'menu' => 0,
                        'icon' => 'fa-circle-o',
                        'sort' => 0,
                        'item' => 'member_member_agent_blacklist',
                        'parents' =>
                            [
                                'Member',
                                'member_all',
                            ],

                    ],

                    'member_member_delete' => [
                        'name' => '删除会员',
                        'url' => 'member.member.delete',
                        'url_params' => '',
                        'permit' => 1,
                        'menu' => 0,
                        'icon' => 'fa-circle-o',
                        'sort' => 0,
                        'item' => 'member_member_delete',
                        'parents' =>
                            [
                                'Member',
                                'member_all',
                            ],

                    ],

                ],

            ],

            'member_level' => [
                'name' => '会员等级',
                'url' => 'member.member-level.index',
                'url_params' => '',
                'permit' => 1,
                'menu' => 1,
                'icon' => 'fa-sort-amount-asc',
                'sort' => 0,
                'item' => 'member_level',
                'parents' =>
                    [
                        'Member',
                    ],

                'child' => [
                    'member_member_level_store' => [
                        'name' => '添加会员等级',
                        'url' => 'member.member-level.store',
                        'url_params' => '',
                        'permit' => 1,
                        'menu' => 1,
                        'icon' => 'fa-plus',
                        'sort' => 0,
                        'item' => 'member_member_level_store',
                        'parents' =>
                            [
                                'Member',
                                'member_level',
                            ],

                    ],

                    'member_member_level_update' => [
                        'name' => '编辑会员等级',
                        'url' => 'member.member-level.update',
                        'url_params' => '',
                        'permit' => 1,
                        'menu' => 0,
                        'icon' => 'fa-edit',
                        'sort' => 0,
                        'item' => 'member_member_level_update',
                        'parents' =>
                            [
                                'Member',
                                'member_level',
                            ],

                    ],

                    'member_member_level_destroy' => [
                        'name' => '删除会员等级',
                        'url' => 'member.member-level.destroy',
                        'url_params' => '',
                        'permit' => 1,
                        'menu' => 0,
                        'icon' => 'fa-remove',
                        'sort' => 0,
                        'item' => 'member_member_level_destroy',
                        'parents' =>
                            [
                                'Member',
                                'member_level',
                            ],

                    ],

                ],

            ],

            'member_group'  => [
                'name'          => '会员分组',
                'url'           => 'member.member-group.index',
                'url_params'    => '',
                'permit'        => 1,
                'menu'          => 1,
                'icon'          => 'fa-sort-alpha-asc',
                'sort'          => 0,
                'item'          => 'member_group',
                'parents'       => ['Member',],
                'child'         => [

                    'member_member_group_see' => [
                        'name'          => '浏览会员分组',
                        'url'           => 'member.member-group.store',
                        'url_params'    => '',
                        'permit'        => 1,
                        'menu'          => 1,
                        'icon'          => '',
                        'sort'          => 0,
                        'item'          => 'member_member_group_see',
                        'parents'       => ['Member', 'member_group',],
                    ],

                    'member_member_group_look' => [
                        'name'          => '查看分组会员',
                        'url'           => 'member.member.index',
                        'url_params'    => '',
                        'permit'        => 1,
                        'menu'          => 1,
                        'icon'          => '',
                        'sort'          => 0,
                        'item'          => 'member_member_group_look',
                        'parents'       => ['Member', 'member_group',],
                    ],

                    'member_member_group_store' => [
                        'name'          => '添加会员分组',
                        'url'           => 'member.member-group.store',
                        'url_params'    => '',
                        'permit'        => 1,
                        'menu'          => 1,
                        'icon'          => 'fa-plus',
                        'sort'          => 0,
                        'item'          => 'member_member_group_store',
                        'parents'       => ['Member', 'member_group',],
                    ],

                    'member_member_group_update' => [
                        'name'          => '修改会员分组',
                        'url'           => 'member.member-group.update',
                        'url_params'    => '',
                        'permit'        => 1,
                        'menu'          => 0,
                        'icon'          => 'fa-pencil-square-o',
                        'sort'          => 0,
                        'item'          => 'member_member_group_update',
                        'parents'       => ['Member', 'member_group',],
                    ],

                    'member_member_group_destroy' => [
                        'name'          => '删除会员分组',
                        'url'           => 'member.member-group.destroy',
                        'url_params'    => '',
                        'permit'        => 1,
                        'menu'          => 0,
                        'icon'          => 'fa-remove',
                        'sort'          => 0,
                        'item'          => 'member_member_group_destroy',
                        'parents'       => ['Member', 'member_group',],
                    ],

                ],

            ],

            'member_relation' => [
                'name' => '会员关系',
                'url' => '',
                'url_params' => '',
                'permit' => 1,
                'menu' => 1,
                'icon' => 'fa-crosshairs',
                'sort' => 0,
                'item' => 'member_relation',
                'parents' =>
                    [
                        'Member',
                    ],

                'child' => [
                    'user_relation' => [
                        'name' => '会员关系设置',
                        'url' => 'member.member-relation.index',
                        'url_params' => '',
                        'permit' => 1,
                        'menu' => 1,
                        'icon' => 'fa-sliders',
                        'sort' => 0,
                        'item' => 'user_relation',
                        'parents' =>
                            [
                                'Member',
                                'member_relation',
                            ],

                        'child' => [
                            'user_relation_save' => [
                                'name' => '保存设置',
                                'url' => 'member.member-relation.save',
                                'url_params' => '',
                                'permit' => 1,
                                'menu' => 0,
                                'icon' => 'fa-sliders',
                                'sort' => 0,
                                'item' => 'user_relation_save',
                                'parents' =>
                                    [
                                        'Member',
                                        'member_relation',
                                        'user_relation'
                                    ],
                                ]
                        ],

                    ],

                    'agent_apply' => [
                        'name' => '资格申请',
                        'url' => 'member.member-relation.apply',
                        'url_params' => '',
                        'permit' => 1,
                        'menu' => 1,
                        'icon' => 'fa-sliders',
                        'sort' => 0,
                        'item' => 'agent_apply',
                        'parents' =>
                            [
                                'Member',
                                'member_relation',
                            ],

                        'child' => [
                            'agent_apply_chkApply' => [
                                'name' => '审查申请',
                                'url' => 'member.member-relation.chkApply',
                                'url_params' => '',
                                'permit' => 1,
                                'menu' => 0,
                                'icon' => 'fa-sliders',
                                'sort' => 0,
                                'item' => 'agent_apply_chkApplye',
                                'parents' =>
                                    [
                                        'Member',
                                        'member_relation',
                                        'agent_apply'
                                    ],
                            ],

                            'agent_apply_export' => [
                                'name' => '导出申请',
                                'url' => 'member.member-relation.export',
                                'url_params' => '',
                                'permit' => 1,
                                'menu' => 0,
                                'icon' => 'fa-sliders',
                                'sort' => 0,
                                'item' => 'agent_apply_export',
                                'parents' =>
                                    [
                                        'Member',
                                        'member_relation',
                                        'agent_apply'
                                    ],
                            ]
                        ],

                    ],

                    'relation_base' => [
                        'name' => '基础设置',
                        'url' => 'member.member-relation.base',
                        'url_params' => '',
                        'permit' => 1,
                        'menu' => 1,
                        'icon' => 'fa-circle-o',
                        'sort' => 0,
                        'item' => 'relation_base',
                        'parents' =>
                            [
                                'Member',
                                'member_relation',
                            ],

                    ],

                ],

            ],

        ],

    ],

    'Order'  => [
        'name'          => '订单管理',
        'url'           => 'order.list',
        'url_params'    => '',
        'permit'        => 1,
        'menu'          => 1,
        'icon'          => 'fa-shopping-cart',
        'sort'          => '4',
        'item'          => 'Order',
        'parents'       => [],
        'child'         => [
            'order_list'    => [
                'name'          => '全部订单',
                'url'           => 'order.list.index',
                'url_params'    => '',
                'permit'        => 1,
                'menu'          => 1,
                'icon'          => 'fa-clipboard',
                'sort'          => 0,
                'item'          => 'order_list',
                'parents'       => ['Order'],
                'child'         => [
                    'order_list_see' => [
                        'name'              => '浏览',
                        'url'               => 'order.list.index',
                        'url_params'        => '',
                        'permit'            => 1,
                        'menu'              => 0,
                        'icon'              => '',
                        'sort'              => 1,
                        'item'              => 'order_list_see',
                        'parents'           => ['Order','order_list'],
                        'child' => [],
                    ],

                    //订单操作所有订单的共同操作
                    'order_handel'          => [
                        'name'              => '订单操作',
                        'url'               => 'order.handel',
                        'url_params'        => '',
                        'permit'            => 1,
                        'menu'              => 0,
                        'icon'              => '',
                        'sort'              => 1,
                        'item'              => 'order_handel',
                        'parents'           => ['Order', 'order_list'],
                        'child'             => [
                            'order_list_index' => [
                                'name'              => '查看详情',
                                'url'               => 'order.detail.index',
                                'url_params'        => '',
                                'permit'            => 1,
                                'menu'              => 0,
                                'icon'              => 'fa-file-text',
                                'sort'              => 1,
                                'item'              => 'order_list_index',
                                'parents'           => ['Order', 'order_list'],
                            ],
                            'change_order_price_index' => [
                                'name'              => '修改价格跳转路由',
                                'url'               => 'order.change-order-price.index',
                                'url_params'        => '',
                                'permit'            => 0,
                                'menu'              => 0,
                                'icon'              => '',
                                'sort'              => 1,
                                'item'              => 'change_order_price_index',
                                'parents'           => ['Order', 'order_list'],
                            ],
                            'change_order_price_store' => [
                                'name'              => '订单改价',
                                'url'               => 'order.change-order-price.store',
                                'url_params'        => '',
                                'permit'            => 1,
                                'menu'              => 0,
                                'icon'              => 'fa-file-text',
                                'sort'              => 1,
                                'item'              => 'change_order_price_store',
                                'parents'           => ['Order', 'order_list'],
                            ],
                            'order_operation_pay' => [
                                'name'              => '确认付款',
                                'url'               => 'order.operation.pay',
                                'url_params'        => 'order.operation.send',
                                'permit'            => 1,
                                'menu'              => 0,
                                'icon'              => '',
                                'sort'              => 1,
                                'item'              => 'order_operation_pay',
                                'parents'           => ['Order', 'order_list', 'order_handel'],
                            ],
                            'order_operation_send' => [
                                'name'              => '确认发货',
                                'url'               => 'order.operation.send',
                                'url_params'        => '',
                                'permit'            => 1,
                                'menu'              => 0,
                                'icon'              => 'fa-file-text',
                                'sort'              => 1,
                                'item'              => 'order_operation_send',
                                'parents'           => ['Order', 'order_list', 'order_handel'],
                            ],
                            'order_operation_cancel_send' => [
                                'name'              => '取消发货',
                                'url'               => 'order.operation.cancel-send',
                                'url_params'        => '',
                                'permit'            => 1,
                                'menu'              => 0,
                                'icon'              => '',
                                'sort'              => 1,
                                'item'              => 'order_operation_cancel_send',
                                'parents'           => ['Order', 'order_list', 'order_handel'],
                            ],
                            'order_operation_receive' => [
                                'name'              => '确认收货',
                                'url'               => 'order.operation.receive',
                                'url_params'        => '',
                                'permit'            => 1,
                                'menu'              => 0,
                                'icon'              => '',
                                'sort'              => 1,
                                'item'              => 'order_operation_receive',
                                'parents'           => ['Order', 'order_list', 'order_handel'],
                            ],


                            'order_operation_close' => [
                                'name'              => '关闭订单',
                                'url'               => 'order.operation.close',
                                'url_params'        => '',
                                'permit'            => 1,
                                'menu'              => 0,
                                'icon'              => '',
                                'sort'              => 1,
                                'item'              => 'order_operation_close',
                                'parents'           => ['Order', 'order_list'],
                            ],
                        ],
                    ],
                ],

            ],

            'order_list_waitPay' => [
                'name'              => '待支付订单',
                'url'               => 'order.list.waitPay',
                'url_params'        => '',
                'permit'            => 1,
                'menu'              => 1,
                'icon'              => 'fa-credit-card',
                'sort'              => 1,
                'item'              => 'order_list_waitPay',
                'parents'           => ['Order'],
                'child' => [
                    'order_list_waitPay_see' => [
                        'name'              => '浏览',
                        'url'               => 'order.list.waitPay',
                        'url_params'        => '',
                        'permit'            => 1,
                        'menu'              => 0,
                        'icon'              => 'fa-circle-o',
                        'sort'              => 1,
                        'item'              => 'order_list_waitPay',
                        'parents'           => ['Order','order_list_waitPay'],
                        'child' => [],
                    ],
                ],
            ],

            'order_list_waitSend' => [
                'name'              => '待发货订单',
                'url'               => 'order.list.waitSend',
                'url_params'        => '',
                'permit'            => 1,
                'menu'              => 1,
                'icon'              => 'fa-truck',
                'sort'              => '2',
                'item'              => 'order_list_waitSend',
                'parents'           => ['Order'],
                'child' => [
                    'order_list_waitSend_see' => [
                        'name'              => '浏览',
                        'url'               => 'order.list.waitSend',
                        'url_params'        => '',
                        'permit'            => 1,
                        'menu'              => 0,
                        'icon'              => '',
                        'sort'              => 1,
                        'item'              => 'order_list_waitSend_see',
                        'parents'           => ['Order','order_list_waitSend'],
                        'child' => [],
                    ],
                ],
            ],
            'order_list_waitReceive' => [
                'name'              => '待收货订单',
                'url'               => 'order.list.waitReceive',
                'url_params'        => '',
                'permit'            => 1,
                'menu'              => 1,
                'icon'              => 'fa-dropbox',
                'sort'              => '3',
                'item'              => 'order_list_waitReceive',
                'parents'           => ['Order'],
                'child' => [
                    'order_list_waitReceive_see' => [
                        'name'              => '浏览',
                        'url'               => 'order.list.waitReceive',
                        'url_params'        => '',
                        'permit'            => 1,
                        'menu'              => 0,
                        'icon'              => '',
                        'sort'              => 1,
                        'item'              => 'order_list_waitReceive_see',
                        'parents'           => ['Order','order_list_waitReceive'],
                        'child' => [],
                    ],
                ],
            ],
            'order_list_completed' => [
                'name'              => '已完成订单',
                'url'               => 'order.list.completed',
                'url_params'        => '',
                'permit'            => 1,
                'menu'              => 1,
                'icon'              => 'fa-check-square-o',
                'sort'              => '5',
                'item'              => 'order_list_completed',
                'parents'           => ['Order'],
                'child' => [
                    'order_list_completed_see' => [
                        'name'              => '浏览',
                        'url'               => 'order.list.completed',
                        'url_params'        => '',
                        'permit'            => 1,
                        'menu'              => 0,
                        'icon'              => '',
                        'sort'              => 1,
                        'item'              => 'order_list_completed_see',
                        'parents'           => ['Order','order_list_completed'],
                        'child' => [],
                    ],
                ],
            ],
            'order_list_cancelled' => [
                'name'              => '已关闭订单',
                'url'               => 'order.list.cancelled',
                'url_params'        => '',
                'permit'            => 1,
                'menu'              => 1,
                'icon'              => 'fa-bitbucket',
                'sort'              => '5',
                'item'              => 'order_list_cancelled',
                'parents'           => ['Order'],
                'child' => [
                    'order_list_cancelled_see' => [
                        'name'              => '浏览',
                        'url'               => 'order.list.completed',
                        'url_params'        => '',
                        'permit'            => 1,
                        'menu'              => 0,
                        'icon'              => '',
                        'sort'              => 1,
                        'item'              => 'order_list_cancelled_see',
                        'parents'           => ['Order','order_list_cancelled'],
                        'child' => [],
                    ],
                ],
            ],
            'refund_list_refund' => [
                'name'              => '退换货订单',
                'url'               => 'refund.list',
                'url_params'        => '',
                'permit'            => 1,
                'menu'              => 1,
                'icon'              => 'fa-refresh',
                'sort'              => '6',
                'item'              => 'refund_list_refund',
                'parents'           => ['Order'],
                'child' => [
                    'refund_order_handel'          => [
                        'name'              => '退换货操作',
                        'url'               => 'order.handel',
                        'url_params'        => '',
                        'permit'            => 1,
                        'menu'              => 0,
                        'icon'              => '',
                        'sort'              => 1,
                        'item'              => 'refund_order_handel',
                        'parents'           => ['Order', 'refund_list_refund'],
                        'child'             => [
                            'refund_detail_index' => [
                                'name'              => '查看详情',
                                'url'               => 'order.detail.index',
                                'url_params'        => '',
                                'permit'            => 1,
                                'menu'              => 0,
                                'icon'              => 'fa-file-text',
                                'sort'              => 1,
                                'item'              => 'order_list_index',
                                'parents'           => ['Order', 'refund_list_refund'],
                            ],

                            'refund_operation_reject' => [
                                'name'              => '驳回申请',
                                'url'               => 'refund.operation.reject',
                                'url_params'        => '',
                                'permit'            => 1,
                                'menu'              => 0,
                                'icon'              => '',
                                'sort'              => '4',
                                'item'              => 'refund_operation_reject',
                                'parents'           => ['Order', 'refund_list_refund'],
                                'child' => []
                            ],
                            'refund_pay_index' => [
                                'name'              => '同意退款',
                                'url'               => 'refund.pay.index',
                                'url_params'        => '',
                                'permit'            => 1,
                                'menu'              => 0,
                                'icon'              => '',
                                'sort'              => '4',
                                'item'              => 'refund_pay_index',
                                'parents'           => ['Order', 'refund_list_refund'],
                                'child' => []
                            ],
                            'refund_operation_consensus' => [
                                'name'              => '手动退款',
                                'url'               => 'refund.operation.consensus',
                                'url_params'        => '',
                                'permit'            => 1,
                                'menu'              => 0,
                                'icon'              => '',
                                'sort'              => '4',
                                'item'              => 'refund_operation_consensus',
                                'parents'           => ['Order', 'refund_list_refund'],
                                'child' => []
                            ],
                            'refund_operation_pass' => [
                                'name'              => '通过申请(需要客户寄回商品)',
                                'url'               => 'refund.operation.pass',
                                'url_params'        => '',
                                'permit'            => 1,
                                'menu'              => 0,
                                'icon'              => 'fa-circle-o',
                                'sort'              => '4',
                                'item'              => 'refund_operation_pass',
                                'parents'           => ['Order', 'refund_list_refund'],
                                'child' => []
                            ],
                            'refund_operation_receive_return_goods' => [
                                'name'              => '商家确认收货',
                                'url'               => 'refund.operation.receiveReturnGoods',
                                'url_params'        => '',
                                'permit'            => 1,
                                'menu'              => 0,
                                'icon'              => 'fa-circle-o',
                                'sort'              => '4',
                                'item'              => 'refund_operation_receive_return_goods',
                                'parents'           => ['Order', 'refund_list_refund'],
                                'child' => []
                            ],
                            'refund_operation_resend' => [
                                'name'              => '商家重新发货',
                                'url'               => 'refund.operation.resend',
                                'url_params'        => '',
                                'permit'            => 1,
                                'menu'              => 0,
                                'icon'              => 'fa-circle-o',
                                'sort'              => '4',
                                'item'              => 'refund_operation_resend',
                                'parents'           => ['Order', 'refund_list_refund'],
                                'child' => []
                            ],
                            'refund_operation_close' => [
                                'name'              => '关闭申请(换货完成)',
                                'url'               => 'refund.operation.close',
                                'url_params'        => '',
                                'permit'            => 1,
                                'menu'              => 0,
                                'icon'              => '',
                                'sort'              => '4',
                                'item'              => 'refund_operation_close',
                                'parents'           => ['Order', 'refund_list_refund'],
                                'child' => []
                            ],
                        ],
                    ],
                    'refund_list_refund_all' => [
                        'name'              => '全部',
                        'url'               => 'refund.list.refund',
                        'url_params'        => '',
                        'permit'            => 1,
                        'menu'              => 1,
                        'icon'              => 'fa-file',
                        'sort'              => 1,
                        'item'              => 'refund_list_refund_all',
                        'parents'           => ['Order', 'refund_list_refund'],
                        'child' => []
                    ],
                    'refund_list_refundMoney' => [
                        'name'              => '仅退款',
                        'url'               => 'refund.list.refundMoney',
                        'url_params'        => '',
                        'permit'            => 1,
                        'menu'              => 1,
                        'icon'              => 'fa-money',
                        'sort'              => '2',
                        'item'              => 'refund_list_refundMoney',
                        'parents'           => ['Order', 'refund_list_refund'],
                        'child' => []
                    ],
                    'refund_list_returnGoods' => [
                        'name'              => '退货退款',
                        'url'               => 'refund.list.returnGoods',
                        'url_params'        => '',
                        'permit'            => 1,
                        'menu'              => 1,
                        'icon'              => 'fa-location-arrow',
                        'sort'              => '3',
                        'item'              => 'refund_list_returnGoods',
                        'parents'           => ['Order', 'refund_list_refund'],
                        'child' => []
                    ],
                    'refund_list_exchangeGoods' => [
                        'name'              => '换货',
                        'url'               => 'refund.list.exchangeGoods',
                        'url_params'        => '',
                        'permit'            => 1,
                        'menu'              => 1,
                        'icon'              => 'fa-codepen',
                        'sort'              => '4',
                        'item'              => 'refund_list_exchangeGoods',
                        'parents'           => ['Order', 'refund_list_refund'],
                        'child' => []
                    ],
                ],
            ],

            'refund_list_refunded' => [
                'name'              => '已退款',
                'url'               => 'refund.list.refunded',
                'url_params'        => '',
                'permit'            => 1,
                'menu'              => 1,
                'icon'              => 'fa-share-square-o',
                'sort'              => '7',
                'item'              => 'refund_list_refunded',
                'parents'           => ['Order'],
                'child' => [

                    'refund_list_refunded_see' => [
                        'name'              => '浏览',
                        'url'               => 'refund.list.refunded',
                        'url_params'        => '',
                        'permit'            => 1,
                        'menu'              => 0,
                        'icon'              => '',
                        'sort'              => 1,
                        'item'              => 'refund_list_refunded_see',
                        'parents'           => ['Order','refund_list_refunded'],
                        'child' => [],
                    ],
                ],
            ],
        ],
    ],

    'finance'=> [
        'name'              => '财务管理',
        'url'               => '',
        'url_params'        => '',
        'permit'            => 1,
        'menu'              => 1,
        'icon'              => 'fa-rmb',
        'parent_id'         => 0,
        'sort'              => '5',
        'item'              => 'finance',
        'parents'           => [],
        'child'             => [

            'balance'           => [
                'name'              => '余额管理',
                'url'               => 'balance',
                'url_params'        => '',
                'permit'            => 1,
                'menu'              => 1,
                'icon'              => 'fa-list-alt',
                'sort'              => 0,
                'item'              => 'balance',
                'parents'           => ['finance',],
                'child'             => [

                    'balance_set'       => [
                        'name'              => '基础设置',
                        'url'               => 'finance.balance.index',
                        'url_params'        => '',
                        'permit'            => 1,
                        'menu'              => 1,
                        'icon'              => 'fa-gear',
                        'sort'              => 0,
                        'item'              => 'balance_set',
                        'parents'           => ['finance', 'balance'],
                    ],

                    'finance_balance_member'    => [
                        'name'              => '余额管理',
                        'url'               => 'finance.balance.member',
                        'url_params'        => '',
                        'permit'            => 1,
                        'menu'              => 1,
                        'icon'              => 'fa-book',
                        'sort'              => 0,
                        'item'              => 'finance_balance_member',
                        'parents'           => ['finance', 'balance'],
                        'child'             => [

                            'finance_balance_member_see'  => [
                                'name'              => '浏览记录',
                                'url'               => 'finance.balance.member',
                                'url_params'        => '',
                                'permit'            => 1,
                                'menu'              => 0,
                                'icon'              => '',
                                'sort'              => 0,
                                'item'              => 'finance_balance_member_see',
                                'parents'           => ['finance', 'balance', 'finance_balance_member'],
                            ],

                            'finance_balance_member_recharge'  => [
                                'name'              => '余额充值',
                                'url'               => 'finance.balance.recharge',
                                'url_params'        => '',
                                'permit'            => 1,
                                'menu'              => 0,
                                'icon'              => '',
                                'sort'              => 0,
                                'item'              => 'finance_balance_member_recharge',
                                'parents'           => ['finance', 'balance', 'finance_balance_member'],
                            ],
                        ],
                    ],

                    'finance_balance_rechargeRecord' => [
                        'name'              => '充值记录',
                        'url'               => 'finance.balance.rechargeRecord',
                        'url_params'        => '',
                        'permit'            => 1,
                        'menu'              => 1,
                        'icon'              => 'fa-download',
                        'sort'              => 0,
                        'item'              => 'finance_balance_rechargeRecord',
                        'parents'           => ['finance', 'balance',],
                    ],

                    'finance_balance_tansferRecord' => [
                        'name'              => '转让记录',
                        'url'               => 'finance.balance.transferRecord',
                        'url_params'        => '',
                        'permit'            => 1,
                        'menu'              => 1,
                        'icon'              => 'fa-external-link',
                        'sort'              => 0,
                        'item'              => 'finance_balance_tansferRecord',
                        'parents'           => ['finance', 'balance'],
                    ],

                    'finance_balance_records' => [
                        'name'              => '余额明细',
                        'url'               => 'finance.balance-records.index',
                        'url_params'        => '',
                        'permit'            => 1,
                        'menu'              => 1,
                        'icon'              => 'fa-file-text-o',
                        'sort'              => 0,
                        'item'              => 'finance_balance_balanceDetail',
                        'parents'           => ['finance', 'balance'],
                        'child'             => [

                            'finance_balance_records_see'  => [
                                'name'              => '浏览记录',
                                'url'               => 'finance.balance-records.index',
                                'url_params'        => '',
                                'permit'            => 1,
                                'menu'              => 0,
                                'icon'              => '',
                                'sort'              => 0,
                                'item'              => 'finance_balance_records_see',
                                'parents'           => ['finance', 'balance', 'finance_balance_records'],
                            ],

                            'finance_balance_records_export'  => [
                                'name'              => '导出 EXCEL',
                                'url'               => 'finance.balance-records.export',
                                'url_params'        => '',
                                'permit'            => 1,
                                'menu'              => 0,
                                'icon'              => '',
                                'sort'              => 0,
                                'item'              => 'finance_balance_records_export',
                                'parents'           => ['finance', 'balance', 'finance_balance_records'],
                            ],

                            'finance_balance_records_detail'  => [
                                'name'              => '明细详情',
                                'url'               => 'finance.balance.lookBalanceDetail',
                                'url_params'        => '',
                                'permit'            => 1,
                                'menu'              => 0,
                                'icon'              => '',
                                'sort'              => 0,
                                'item'              => 'finance_balance_records_detail',
                                'parents'           => ['finance', 'balance', 'finance_balance_records'],
                            ],
                        ],
                    ],
                ],

            ],
            'withdraw'          => [
                'name'              => '收入提现',
                'url'               => '',
                'url_params'        => '',
                'permit'            => 0,
                'menu'              => 1,
                'icon'              => 'fa-money',
                'sort'              => 0,
                'item'              => 'withdraw',
                'parents'           => ['finance'],
                'child'             => [

                    'withdraw_set'  => [
                        'name'              => '提现设置',
                        'url'               => 'finance.withdraw.set',
                        'url_params'        => '',
                        'permit'            => 1,
                        'menu'              => 1,
                        'icon'              => 'fa-gear',
                        'sort'              => 0,
                        'item'              => 'withdraw_set',
                        'parents'           => ['finance','withdraw'],
                        'child'             => [
                            'withdraw_set'      => [
                                'name'              => '编辑保存',
                                'url'               => 'finance.withdraw.set',
                                'url_params'        => '',
                                'permit'            => 1,
                                'menu'              => 0,
                                'icon'              => '',
                                'sort'              => '0',
                                'item'              => 'withdraw_set',
                                'parents'           => ['finance','withdraw','withdraw_set'],
                            ],
                        ],
                    ],

                    'withdraw_records'  => [
                        'name'              => '提现记录',
                        'url'               => 'finance.withdraw',
                        'url_params'        => '',
                        'permit'            => 1,
                        'menu'              => 1,
                        'icon'              => 'fa-pencil',
                        'sort'              => 0,
                        'item'              => 'withdraw_records',
                        'parents'           => ['finance','withdraw'],
                        'child'             => [

                            'withdraw_records_see' => [
                                'name'              => '浏览记录',
                                'url'               => 'finance.withdraw.index',
                                'url_params'        => "",
                                'permit'            => 1,
                                'menu'              => 0,
                                'icon'              => '',
                                'sort'              => 0,
                                'item'              => 'withdraw_records_see',
                                'parents'           => ['finance','withdraw','withdraw_records'],
                            ],

                            'withdraw_records_balance_detail' => [
                                'name'              => '余额提现详情',
                                'url'               => 'finance.balance-withdraw.detail',
                                'url_params'        => "",
                                'permit'            => 1,
                                'menu'              => 0,
                                'icon'              => '',
                                'sort'              => 0,
                                'item'              => 'withdraw_records_balance_detail',
                                'parents'           => ['finance','withdraw','withdraw_records'],
                            ],
                            'withdraw_records_balance_examine' => [
                                'name'              => '余额审核打款',
                                'url'               => 'finance.balance-withdraw.examine',
                                'url_params'        => "",
                                'permit'            => 1,
                                'menu'              => 0,
                                'icon'              => '',
                                'sort'              => 0,
                                'item'              => 'withdraw_records_balance_examine',
                                'parents'           => ['finance','withdraw','withdraw_records'],
                            ],

                            'withdraw_records_detail' => [
                                'name'              => '收入提现详情',
                                'url'               => 'finance.withdraw.info',
                                'url_params'        => "",
                                'permit'            => 1,
                                'menu'              => 0,
                                'icon'              => '',
                                'sort'              => 0,
                                'item'              => 'withdraw_records_detail',
                                'parents'           => ['finance','withdraw','withdraw_records'],
                            ],

                            'withdraw_records_examine' => [
                                'name'              => '收入审核打款',
                                'url'               => 'finance.withdraw.dealt',
                                'url_params'        => "",
                                'permit'            => 1,
                                'menu'              => 0,
                                'icon'              => '',
                                'sort'              => 0,
                                'item'              => 'withdraw_records_examine',
                                'parents'           => ['finance','withdraw','withdraw_records'],
                            ],

                            'withdraw_status_wait_audit' => [
                                'name'              => '待审核提现',
                                'url'               => 'finance.withdraw.index',
                                'url_params'        => "&search[status]=0",
                                'permit'            => 0,
                                'menu'              => 1,
                                'icon'              => 'fa-clock-o',
                                'sort'              => 0,
                                'item'              => 'withdraw_status_wait_audit',
                                'parents'           => ['finance','withdraw','withdraw_records'],
                            ],

                            'withdraw_status_wait_pay' => [
                                'name'              => '待打款提现',
                                'url'               => 'finance.withdraw',
                                'url_params'        => "&search[status]=1",
                                'permit'            => 0,
                                'menu'              => 1,
                                'icon'              => 'fa-inbox',
                                'sort'              => 0,
                                'item'              => 'withdraw_status_wait_pay',
                                'parents'           => ['finance','withdraw','withdraw_records'],
                            ],

                            'withdraw_status_pay' => [
                                'name'              => '已打款提现',
                                'url'               => 'finance.withdraw',
                                'url_params'        => "&search[status]=2",
                                'permit'            => 0,
                                'menu'              => 1,
                                'icon'              => 'fa-check-circle-o',
                                'sort'              => 0,
                                'item'              => 'withdraw_status_pay',
                                'parents'           => ['finance','withdraw','withdraw_records'],
                            ],

                            'withdraw_status_arrival' => [
                                'name'              => '已到账提现',
                                'url'               => 'finance.withdraw',
                                'url_params'        => "&search[status]=3",
                                'permit'            => 0,
                                'menu'              => 1,
                                'icon'              => 'fa-stack-overflow',
                                'sort'              => 0,
                                'item'              => 'withdraw_status_arrival',
                                'parents'           => ['finance','withdraw','withdraw_records'],
                            ],

                            'withdraw_status_invalid' => [
                                'name'              => '无效提现',
                                'url'               => 'finance.withdraw',
                                'url_params'        => "&search[status]=-1",
                                'permit'            => 0,
                                'menu'              => 1,
                                'icon'              => 'fa-times-circle',
                                'sort'              => 0,
                                'item'              => 'withdraw_status_invalid',
                                'parents'           => ['finance','withdraw','withdraw_records'],
                            ],


                        ],
                    ],
                ],
            ],

            'finance_point'     => [
                'name'              => '积分管理',
                'url'               => '',
                'url_params'        => '',
                'permit'            => 1,
                'menu'              => 1,
                'icon'              => 'fa-database',
                'sort'              => 0,
                'item'              => 'finance_point',
                'parents'           => ['finance',],
                'child'             => [

                    'point_set'         => [
                        'name'              => '基础设置',
                        'url'               => 'finance.point-set.index',
                        'url_params'        => '',
                        'permit'            => 1,
                        'menu'              => 1,
                        'icon'              => 'fa-gear',
                        'sort'              => 0,
                        'item'              => 'point_set',
                        'parents'           => ['finance', 'finance_point',],
                    ],

                    'point_member'      => [
                        'name'              => '会员积分',
                        'url'               => 'finance.point-member.index',
                        'url_params'        => '',
                        'permit'            => 1,
                        'menu'              => 1,
                        'icon'              => 'fa-database',
                        'sort'              => 0,
                        'item'              => 'point_member',
                        'parents'           => ['finance', 'finance_point',],
                    ],
                    'point_recharge'             => [
                        'name'              => '积分充值',
                        'url'               => 'finance.point-recharge.index',
                        'url_params'        => '',
                        'permit'            => 1,
                        'menu'              => 0,
                        'icon'              => '',
                        'sort'              => 0,
                        'item'              => 'point_recharge',
                        'parents'           => ['finance', 'finance_point',],
                    ],

                    'point_log'             => [
                        'name'              => '积分明细',
                        'url'               => 'finance.point-log.index',
                        'url_params'        => '',
                        'permit'            => 1,
                        'menu'              => 1,
                        'icon'              => 'fa-file-text-o',
                        'sort'              => 0,
                        'item'              => 'point_log',
                        'parents'           => ['finance', 'finance_point',],
                    ],
                ],
            ],



        ],

    ],


];

