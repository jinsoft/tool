@extends('layout.base')

@section('content')
    <div class="layui-container">
        <div class="layui-row">
            <div class="site-title">
                <fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
                    <legend><a name="use">自定义二维码</a></legend>
                </fieldset>
                <form class="layui-form layui-form-pane">
                    {{csrf_field()}}
                    <div class="layui-form-item">
                        <label class="layui-form-label">内容</label>
                        <div class="layui-input-block">
                            <input type="text" name="content" lay-verify="required" autocomplete="off"
                                   value="https://tool.ainiok.com" placeholder="请输入内容" class="layui-input">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">大小</label>
                        <div class="layui-input-inline">
                            <input type="text" name="size" lay-verify="required|number" value="100" placeholder="请输入大小"
                                   autocomplete="off" class="layui-input">
                        </div>
                    </div>

                    <div class="layui-form-item">
                        <label class="layui-form-label">边距</label>
                        <div class="layui-input-inline">
                            <input type="text" name="size" lay-verify="required|number" value="25" placeholder="请输入边距"
                                   autocomplete="off" class="layui-input">
                        </div>
                    </div>

                    <div class="layui-form-item">
                        <div class="layui-inline">
                            <label class="layui-form-label">颜色</label>
                            <div class="layui-input-inline">
                                <input type="text" name="color" value="0,0,0" placeholder="请选择颜色" autocomplete="off"
                                       class="layui-input">
                            </div>
                            <div class="layui-inline" style="left: -11px;">
                                <div id="color"></div>
                            </div>
                        </div>
                        <div class="layui-inline">
                            <label class="layui-form-label">背景色</label>
                            <div class="layui-input-inline">
                                <input type="text" name="bgcolor" value="255,255,255" placeholder="请选择背景色"
                                       autocomplete="off"
                                       class="layui-input">
                            </div>
                            <div class="layui-inline" style="left: -11px;">
                                <div id="bgcolor"></div>
                            </div>
                        </div>
                    </div>

                    <div class="layui-form-item">
                        <label class="layui-form-label">编码</label>
                        <div class="layui-input-inline">
                            <select name="encode" lay-filter="aihao">
                                <option value=""></option>
                                <option value="ISO-8859-1">ISO-8859-1</option>
                                <option value="UTF-8" selected="">UTF-8</option>
                                <option value="UTF-16BE">UTF-16BE</option>
                                <option value="ASCII">ASCII</option>
                                <option value="GBK">GBK</option>
                            </select>
                        </div>
                        <div class="layui-form-mid layui-word-aux" id="choose">如何选择?</div>
                    </div>

                    <div class="layui-form-item">
                        <label class="layui-form-label">容错级别</label>
                        <div class="layui-input-block">
                            <input type="radio" name="correction" value="H" title="高(30%)" checked="">
                            <input type="radio" name="correction" value="Q" title="四分位数(25%)">
                            <input type="radio" name="correction" value="M" title="中(15%)">
                            <input type="radio" name="correction" value="L" title="低(7%)">
                        </div>
                    </div>

                    {{--<div class="layui-form-item">--}}
                        {{--<label class="layui-form-label">透明度</label>--}}
                        {{--<div class="layui-input-block slider">--}}
                            {{--<input type="hidden" name="opacity" value="">--}}
                            {{--<div id="opacity" style="width: 40%;margin-left:20px;padding-top:20px;padding-top:20px;"></div>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    <div class="layui-form-item">
                        <button type="button" class="layui-btn" lay-submit="" lay-filter="generate">生成二维码</button>
                    </div>
                </form>
            </div>
            <div id="qrcode">
                <img src="" alt="">
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        layui.use(['layer', 'form', 'colorpicker', 'slider'], function () {
            var form = layui.form
                , layer = layui.layer
                , colorpicker = layui.colorpicker
                , slider = layui.slider;

            colorpicker.render({
                elem: '#color'
                , color: 'rgb(0,0,0)'
                , done: function (color) {
                    choose = hex2rgb(color);
                    $("input[name='color']").val(choose);
                }
            });
            colorpicker.render({
                elem: '#bgcolor'
                , color: 'rgb(255，255，255)'
                , done: function (color) {
                    choose = hex2rgb(color);
                    $("input[name='bgcolor']").val(choose);
                }
            });

            $('#choose').on('click', function () {
                layer.open({
                    title: '编码字符集',
                    area: ['420px', '800px'], //宽高
                    content: '<div class="layui-form">\n' +
                    '            <table class="layui-table">\n' +
                    '                <colgroup>\n' +
                    '                    <col width="150">\n' +
                    '                    <col width="150">\n' +
                    '                    <col>\n' +
                    '                </colgroup>\n' +
                    '                <thead>\n' +
                    '                <tr>\n' +
                    '                    <th>编码</th>\n' +
                    '                    <th>字符</th>\n' +
                    '                </tr>\n' +
                    '                </thead>\n' +
                    '                <tbody>\n' +
                    '                <tr>\n' +
                    '                    <td>ISO-8859-1</td>\n' +
                    '                    <td>包括德法两国的字母</td>\n' +
                    '                </tr>\n' +
                    '                <tr>\n' +
                    '                    <td>ISO-8859-2</td>\n' +
                    '                    <td>收集了东欧字符</td>\n' +
                    '                </tr>\n' +
                    '                <tr>\n' +
                    '                    <td>ISO-8859-3</td>\n' +
                    '                    <td>收集了南欧字符</td>\n' +
                    '                </tr>\n' +
                    '                <tr>\n' +
                    '                    <td>ISO-8859-4</td>\n' +
                    '                    <td>收集了北欧字符</td>\n' +
                    '                </tr>\n' +
                    '                <tr>\n' +
                    '                    <td>ISO-8859-5</td>\n' +
                    '                    <td>收集了斯拉夫语系字符</td>\n' +
                    '                </tr>\n' +
                    '                <tr>\n' +
                    '                    <td>ISO-8859-6</td>\n' +
                    '                    <td>收集了阿拉伯语系字符</td>\n' +
                    '                </tr>\n' +
                    '                <tr>\n' +
                    '                    <td>ISO-8859-7</td>\n' +
                    '                    <td>收集了希腊字符</td>\n' +
                    '                </tr>\n' +
                    '                <tr>\n' +
                    '                    <td>ISO-8859-8</td>\n' +
                    '                    <td>收集了西伯莱 (犹太人) 字符</td>\n' +
                    '                </tr>\n' +
                    '                <tr>\n' +
                    '                    <td>ISO-8859-9</td>\n' +
                    '                    <td>收集了土耳其字符</td>\n' +
                    '                </tr>\n' +
                    '                <tr>\n' +
                    '                    <td>ISO-8859-10</td>\n' +
                    '                    <td>收集了北欧 (主要指斯堪地那维亚半岛) 的字符</td>\n' +
                    '                </tr>\n' +
                    '                <tr>\n' +
                    '                    <td>ISO-8859-11</td>\n' +
                    '                    <td>从泰国的 TIS620 标准字符集演化而来</td>\n' +
                    '                </tr>\n' +
                    '                <tr>\n' +
                    '                    <td>ISO-8859-12</td>\n' +
                    '                    <td>目前尚未定义</td>\n' +
                    '                </tr>\n' +
                    '                <tr>\n' +
                    '                    <td>ISO-8859-13</td>\n' +
                    '                    <td>主要函盖波罗的海(Baltic) 诸国的文字符号</td>\n' +
                    '                </tr>\n' +
                    '                <tr>\n' +
                    '                    <td>ISO-8859-14</td>\n' +
                    '                    <td>将 ISO-8859-1 中的某些符号换成塞尔特语 (Celtic) 的字符</td>\n' +
                    '                </tr>\n' +
                    '                <tr>\n' +
                    '                    <td>ISO-8859-15</td>\n' +
                    '                    <td> 它将 ISO-8859-1 中较少用到的符号删除，换成当初遗漏的法文和芬兰字母；还有，把英镑和日元之间的金钱符号，换成了欧盟货币符号 </td>\n' +
                    '                </tr>\n' +
                    '                <tr>\n' +
                    '                    <td>ISO-8859-16</td>\n' +
                    '                    <td> 这个字符集设计来涵盖阿尔巴尼亚语、克罗地亚语、匈牙利语、意大利语、波兰语、罗马尼亚语及斯洛文尼亚语等东南欧国家语言 </td>\n' +
                    '                </tr>\n' +
                    '                </tbody>\n' +
                    '            </table>\n' +
                    '        </div>'
                });
            });

            // slider.render({
            //     elem: '#opacity'
            //     ,value:30
            //     ,input: true //输入框
            //     ,change:function(value){
            //         $("input[name='opacity']").val(value);
            //     }
            // });

            //监听提交
            form.on('submit(generate)', function (data) {
                // layer.alert(JSON.stringify(data.field), {
                //     title: '最终的提交信息'
                // })
                $.post("{{route('qrcode')}}",data.field,function(res){
                    console.log(res);
                },'json');
            });


            function hex2rgb(color) {
                console.log('from:' + color);
                if (color.substr(0, 1) == "#") color = color.substring(1);
                if (color.length != 6) layer.msg("请输入正确的十六进制颜色码！", {icon: 5});
                color = color.toLowerCase();
                b = new Array();
                for (var i = 0; i < 3; i++) {
                    b[3] = "0123456789abcdef";
                    b[0] = color.substr(i * 2, 2)
                    b[1] = b[0].substr(0, 1)
                    b[2] = b[0].substr(1, 1)
                    b[20 + i] = b[3].indexOf(b[1]) * 16 + b[3].indexOf(b[2])
                }
                return b[20] + "," + b[21] + "," + b[22];
            }

        });
    </script>
@endsection