@extends('layouts.base')

@section('content')

        <div class="rightlist">
            <!-- 新增加右侧顶部三级菜单 -->
            <div class="right-titpos">
                <ul class="add-snav">
                    <li class="active"><a href="#">会员管理</a></li>
                    <li><a href="#">会员等级</a></li>
                </ul>
            </div>
            <!-- 新增加右侧顶部三级菜单结束 -->
            <form action="" method="post" onsubmit="return formcheck(this)">
                <div class='panel panel-default'>
                    <div class='panel-body'>
                        <table class="table">
                            <thead>
                            <tr>
                                <th>等级权重</th>
                                <th>等级名称</th>
                                <th>升级条件</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($levelList as $list)
                            <tr>
                                <td>{{ $list->level }}</td>
                                <td>{{ $list->level_name }}</td>
                                <td>
                                    @if(empty($shopSet))
                                        @if($list->order_money > 0)
                                            完成订单金额满{{ $list->order_money }}元
                                        @else
                                            不自动升级
                                        @endif
                                    @endif

                                    @if($shopSet['level_type'] == 1)
                                        @if($list->order_count > 0)
                                            完成订单数量满{{ $list->order_count }}个
                                        @else
                                            不自动升级
                                        @endif
                                    @endif

                                    @if($shopSet['level_type'] == 2)
                                        @if($list->goods_id)
                                        购买商品ID：[{{ $list->goods_id }}]升级
                                        @endif
                                    @endif
                                </td>
                                <td>
                                    <a class='btn btn-default' href="{{ yzWebUrl('member.member-level.update', array('id' => $list->id)) }}" title="编辑／查看"><i class='fa fa-edit'></i></a>
                                    <a class='btn btn-default' href="{{ yzWebUrl('member.member-level.destroy', array('id' => $list->id)) }}" onclick="return confirm('确认删除此等级吗？');return false;"><i class='fa fa-remove'></i></a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class='panel-footer'>
                        <a class='btn btn-primary' href="{{ yzWebUrl('member.member-level.store') }}"><i class="fa fa-plus"></i> 添加新等级</a>
                    </div>
                </div>
            </form>

        </div>


@endsection