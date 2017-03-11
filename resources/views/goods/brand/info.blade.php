<div class="w1200 m0a">
    {template 'web/shop/tabs'}
    <div class="main rightlist">
        <!-- 新增加右侧顶部三级菜单 -->
        <div class="right-titpos">
            <ul class="add-snav">
                <li class="active"><a href="#">商品品牌</a></li>
            </ul>
        </div>
        <!-- 新增加右侧顶部三级菜单结束 -->
        <form   action="" method="post" class="form-horizontal form" enctype="multipart/form-data" >
        {if isset($brandModel->id) && !empty($brandModel->id)}
        <input type="hidden" name="id" class="form-control" value="{php echo $brandModel->id}" />
        {/if}
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span>品牌名称</label>
                    <div class="col-sm-9 col-xs-12">
                        {ife 'shop.brand' $brandModel}
                        <input type="text" name="brand[name]" class="form-control" value="{php echo $brandModel->name}" />
                        {else}
                        <div class='form-control-static'>{php echo $brandModel->name}</div>
                        {/if}
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">品牌别名</label>
                    <div class="col-sm-9 col-xs-12">
                        {ife 'shop.brand' $brandModel}
                        <input type="text" name="brand[alias]" class="form-control" value="{php echo $brandModel->alias}" />
                        {else}
                        <div class='form-control-static'>{php echo $brandModel->alias}</div>
                        {/if}
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">LOGO</label>
                    <div class="col-sm-9 col-xs-12">
                        {ife 'shop.brand' $brandModel}
                        {php echo app\common\helpers\ImageHelper::tplFormFieldImage('brand[logo]', $brandModel->logo)}
                        <span class="help-block">建议尺寸: 100*100，或正方型图片 </span>
                        {else}
                        {if !empty($brandModel->logo)}
                        <a href='{php echo tomedia($brandModel->logo)}' target='_blank'>
                        <img src="{php echo tomedia($brandModel->logo)}" style='width:100px;border:1px solid #ccc;padding:1px' />
                        </a>
                        {/if}
                        {/if}
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">品牌描述</label>
                    <div class="col-sm-9 col-xs-12">
                        {ife 'shop.brand' $brandModel}
                        <textarea name="brand[desc]" class="form-control" cols="70">{php echo $brandModel->desc}</textarea>
                        {else}
                        <div class='form-control-static'>{php echo $brandModel->desc}</div>
                        {/if}

                    </div>
                </div>



                <div class="form-group"></div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label"></label>
                    <div class="col-sm-9 col-xs-12">

                        {ife 'shop.brand' $brandModel}
                        <input type="submit" name="submit" value="提交" class="btn btn-primary col-lg-1" onclick="return formcheck()" />
                        {/if}
                        <input type="button" name="back" onclick='history.back()' {ifp 'shop.brand.add|shop.brand.edit'}style='margin-left:10px;'{/if} value="返回列表" class="btn btn-default col-lg-1" />
                    </div>
                </div>

            </div>
        </div>

        </form>
    </div>
    <script language='javascript'>
        require(['bootstrap'],function ($) {
            $('form').submit(function(){
                if($(':input[name=brand[name]]').isEmpty()){
                    Tip.focus(':input[name=brand[name]]','请输入分类名称!');
                    return false;
                }
                return true;
            });
        });

    </script>
    {template 'web/_footer'}

