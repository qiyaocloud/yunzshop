{template 'web/_header'}
<div class="w1200 m0a">
    {template 'web/shop/tabs'}
    <script language="javascript" src="../addons/sz_yi/static/js/dist/nestable/jquery.nestable.js"></script>
    <link rel="stylesheet" type="text/css" href="../addons/sz_yi/static/js/dist/nestable/nestable.css" />
    <style type='text/css'>
        .dd-handle { height: 40px; line-height: 30px}
    </style>
    <div class="main rightlist">
        <!-- 新增加右侧顶部三级菜单 -->
        <div class="right-titpos">
            <ul class="add-snav">
                <li class="active"><a href="{php echo $this->createWebUrl('goods.brand.index');}">商品品牌 </a></li>
            </ul>
        </div>
        <!-- 新增加右侧顶部三级菜单结束 -->
        <div class="category">
            <div class="panel panel-default">
                <div class="panel-body table-responsive">
                    <div class="dd" id="div_nestable">
                        <ol class="dd-list">
                            {loop $list['data'] $brand}
                            <li class="dd-item" data-id="{$brand['id']}">
                                <div class="dd-handle"  style='width:100%;'>
                                    <img src="{php echo tomedia($brand['logo']);}" width='30' height="30"  style='padding:1px;border: 1px solid #ccc;float:left;' /> &nbsp;
                                    [ID: {php echo $brand['id'];}] {php echo $brand['name'];}
                                        <span class="pull-right">

                                            {ifp 'shop.brand.edit|shop.brand.view'}
                                             <a class='btn btn-default btn-sm' href="{php echo $this->createWebUrl('goods.brand.edit', ['id'=>$brand['id']]);}" title="{ifp 'shop.brand.edit'}修改{else}查看{/if}" >
                                                 <i class="fa fa-edit"></i>
                                             </a>
                                            {/if}
                                            {if $this->can('goods.brand.deleted')}
                                                <a class='btn btn-default btn-sm' href="{php echo $this->createWebUrl('goods.brand.deleted-brand', ['id'=>$brand['id']]);}" title='删除' onclick="return confirm('确认删除此品牌吗？');return false;">
                                                    <i class="fa fa-remove"></i>
                                                </a>
                                            {/if}
                                        </span>
                                </div>
                            </li>
                            {/loop}
                        </ol>
                        {$pager}
                        <table class='table'>
                            <tr>
                                <td>
                                    {if $this->can('goods.brand.add')}
                                    <a href="{php echo $this->createWebUrl('goods.brand.add');}" class="btn btn-primary"><i class="fa fa-plus"></i> 添加新品牌</a>
                                    {/if}
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {template 'web/_footer'}