@extends('layout.base')

@section('content')
    <div class="layui-container">
        <div class="layui-row">
            <div class="site-title">
                <fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
                    <legend><a name="use">RGB颜色值与十六进制颜色码转换工具</a></legend>
                </fieldset>
                <div class="layui-tab layui-tab-brief">
                    <form class="layui-form" action="">
                        <div class="layui-form-item">
                            <label class="layui-form-label">RGB颜色值</label>
                            <div class="layui-input-inline rle">
                                <input type="password" name="rle" maxlength="3" required lay-verify="required" autocomplete="off" class="layui-input">
                            </div>
                            <div class="layui-input-inline rle">
                                <input type="password" name="rle" maxlength="3" required lay-verify="required" autocomplete="off" class="layui-input">
                            </div>
                            <div class="layui-input-inline rle">
                                <input type="password" name="rle" maxlength="3" required lay-verify="required" autocomplete="off" class="layui-input">
                            </div>
                            <div class="layui-form-mid layui-input-inline show-color" bgcolor="#FFB400"></div>
                        </div>

                        <div class="layui-form-item">
                            <div class="layui-input-block">
                                <button class="layui-btn" lay-submit onclick="showRGB()">转换</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        layui.use(['layer', 'form'], function () {
            //
        });
    </script>
@endsection