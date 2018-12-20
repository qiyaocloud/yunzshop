@extends('layouts.base')
@section('title', '折扣全局设置')
@section('content')

     <style>
        #app{padding:30px 0;}
        .el-form-item__label{padding-right:30px;}
    </style>

    <div class="w1200 m0a">
        @include('layouts.tabs')
        <div class="rightlist">
            <div id="app"  v-loading="submit_loading">
                <template>
                    <el-form ref="form" :model="form" :rules="rules" label-width="15%">
                        <el-form-item label="折扣类型" prop="type">
                            <el-radio v-model.number="form.type" :label="1">商品现价</el-radio>
                            <el-radio v-model.number="form.type" :label="0">商品原价</el-radio>
                        </el-form-item>
                        <el-form-item>
                            <a href="#">
                                <el-button type="success" @click="submitForm('form')">
                                    提交
                                </el-button>
                            </a>
                        </el-form-item>
                    </el-form>
                </template>
            </div>
        </div>
    </div>
    
    <script>
        var vm = new Vue({
        el:"#app",
        delimiters: ['[[', ']]'],
            data() {
                return{
                    form:{
                        type:0,
                    },
                    submit_loading:false,
                    rules: {
                        
                    },
                }
            },
            methods: {
                submitForm(formName) {
                    this.$refs[formName].validate((valid) => {
                        if (valid) {
                            this.submit_loading = true;
                            delete(this.form['thumb_url']);
                            this.$http.post("{!! yzWebUrl('#') !!}",{'form_data':this.form}).then(response => {
                                console.log(this.form);
                                console.log(response);
                                if (response.data.result) {
                                    this.$message({type: 'success',message: '操作成功!'});
                                    // window.location.href='{!! yzWebFullUrl('from.batch-discount.allSet') !!}';
                                } else {
                                    this.$message({message: response.data.msg,type: 'error'});
                                    this.submit_loading = false;
                                }
                            },response => {
                                this.submit_loading = false;
                            });
                        }
                        else {
                            console.log('error submit!!');
                            return false;
                        }
                    });
                },
                
            },
        });
    </script>
@endsection




