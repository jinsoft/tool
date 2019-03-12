@extends('layout.base')

@section('content')
    <div class="layui-container">
        <div class="layui-row">
            <div class="site-title">
                <fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
                    <legend><a name="use">自定义二维码</a></legend>
                </fieldset>
                <div class="layui-tab layui-tab-brief" lay-filter="qrcode">
                    <ul class="layui-tab-title">
                        <li class="layui-this">二维码</li>
                        <li>E-Mail</li>
                        <li>位置</li>
                        <li>手机号</li>
                        <li>短信</li>
                        <li>WIFI</li>
                        <li>电子名片</li>
                    </ul>
                    <div class="layui-tab-content">
                        <div class="layui-tab-item layui-show">
                            <form class="layui-form layui-form-pane" method="post">
                                {{csrf_field()}}
                                <div class="layui-form-item">
                                    <label class="layui-form-label">内容</label>
                                    <div class="layui-input-block">
                                        <input type="text" name="content" autocomplete="off"
                                               value="https://tool.ainiok.com" placeholder="请输入内容" class="layui-input">
                                    </div>
                                </div>
                                <div class="layui-form-item">
                                    <label class="layui-form-label">大小</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="size" lay-verify="required|number" value="200"
                                               placeholder="请输入大小"
                                               autocomplete="off" class="layui-input">
                                    </div>
                                </div>

                                {{--<div class="layui-form-item">--}}
                                {{--<label class="layui-form-label">边距</label>--}}
                                {{--<div class="layui-input-inline">--}}
                                {{--<input type="text" name="margin" lay-verify="required|number" value="25" placeholder="请输入边距"--}}
                                {{--autocomplete="off" class="layui-input">--}}
                                {{--</div>--}}
                                {{--</div>--}}

                                <div class="layui-form-item">
                                    <div class="layui-inline">
                                        <label class="layui-form-label">颜色</label>
                                        <div class="layui-input-inline">
                                            <input type="text" name="color" value="0,0,0" placeholder="请选择颜色"
                                                   autocomplete="off"
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
                                    <button type="button" class="layui-btn" lay-submit="" lay-filter="generate">生成二维码
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="layui-tab-item">
                            <form class="layui-form" action="">
                                {{csrf_field()}}
                                <div class="layui-form-item">
                                    <label class="layui-form-label">地址</label>
                                    <div class="layui-input-block">
                                        <input type="text" name="url" value="763303918@qq.com" required
                                               lay-verify="required" placeholder="请输入地址" autocomplete="off"
                                               class="layui-input">
                                    </div>
                                </div>
                                <div class="layui-form-item">
                                    <label class="layui-form-label">输入框</label>
                                    <div class="layui-input-block">
                                        <input type="text" name="title" value="test" required lay-verify="required"
                                               placeholder="请输入标题" autocomplete="off" class="layui-input">
                                    </div>
                                </div>
                                <div class="layui-form-item layui-form-text">
                                    <label class="layui-form-label">内容</label>
                                    <div class="layui-input-block">
                                        <textarea name="content" placeholder="请输入内容"
                                                  class="layui-textarea">test content</textarea>
                                    </div>
                                </div>
                                <div class="layui-form-item">
                                    <div class="layui-input-block">
                                        <button type="button" class="layui-btn" lay-submit lay-filter="email">立即提交
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="layui-tab-item">
                            <form class="layui-form" action="">
                                {{csrf_field()}}
                                <div class="layui-form-item">
                                    <label class="layui-form-label">经度</label>
                                    <div class="layui-input-block">
                                        <input type="text" name="longitude" value="114.037238" required
                                               lay-verify="required" placeholder="经度" autocomplete="off"
                                               class="layui-input">
                                    </div>
                                </div>
                                <div class="layui-form-item">
                                    <label class="layui-form-label">纬度</label>
                                    <div class="layui-input-block">
                                        <input type="text" name="latitude " value="22.616716" required
                                               lay-verify="required"
                                               placeholder="纬度" autocomplete="off" class="layui-input">
                                    </div>
                                </div>
                                <div class="layui-form-item">
                                    <div class="layui-input-block">
                                        <button type="button" class="layui-btn" lay-submit lay-filter="geo">立即提交
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="layui-tab-item">
                            <form class="layui-form" action="">
                                {{csrf_field()}}
                                <div class="layui-form-item">
                                    <label class="layui-form-label">手机号</label>
                                    <div class="layui-input-block">
                                        <input type="text" name="phone" value="16666666666" required
                                               lay-verify="required" placeholder="手机号" autocomplete="off"
                                               class="layui-input">
                                    </div>
                                </div>
                                <div class="layui-form-item">
                                    <div class="layui-input-block">
                                        <button type="button" class="layui-btn" lay-submit lay-filter="phone">立即提交
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="layui-tab-item">
                            <form class="layui-form" action="">
                                {{csrf_field()}}
                                <div class="layui-form-item">
                                    <label class="layui-form-label">手机号</label>
                                    <div class="layui-input-block">
                                        <input type="text" name="phone" value="16666666666" required
                                               lay-verify="required" placeholder="请输入手机号" autocomplete="off"
                                               class="layui-input">
                                    </div>
                                </div>
                                <div class="layui-form-item layui-form-text">
                                    <label class="layui-form-label">内容</label>
                                    <div class="layui-input-block">
                                        <textarea name="content" placeholder="请输入内容"
                                                  class="layui-textarea">test content</textarea>
                                    </div>
                                </div>
                                <div class="layui-form-item">
                                    <div class="layui-input-block">
                                        <button type="button" class="layui-btn" lay-submit lay-filter="sms">立即提交
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="layui-tab-item">WIFI</div>
                        <div class="layui-tab-item">
                            <form class="layui-form" action="">
                                {{csrf_field()}}
                                <div class="layui-form-item">
                                    <div class="layui-input-block">
                                        <button type="button" class="layui-btn" lay-submit lay-filter="vcard">生成
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="layui-container">
        <div class="layui-row">
            <div id="qrcode" class="hidden">
                <img src="" alt="" class="buildqrcode">
                <a href="" id="save"></a>
                <button type="button" class="layui-btn layui-btn-radius save"><i
                            class="layui-icon layui-icon-download-circle"></i> 保存图片
                </button>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{asset('static/lib/html2canvas.min.js')}}"></script>
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
                    let choose = hex2rgb(color);
                    $("input[name='color']").val(choose);
                }
            });
            colorpicker.render({
                elem: '#bgcolor'
                , color: 'rgb(255，255，255)'
                , done: function (color) {
                    let choose = hex2rgb(color);
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
                data.field.type = 'qrcode';
                $.post("{{route('qrcode')}}", data.field, function (res) {
                    if (res.code == 0) {
                        var src = "data:image/png;base64," + res.src;
                        $('#qrcode').show();
                        $('#qrcode img').attr('src', src);
                    }
                }, 'json');
            });

            form.on('submit(email)', function (data) {
                data.field.type = 'email';
                $.post("{{route('qrcode')}}", data.field, function (res) {
                    if (res.code == 0) {
                        var src = "data:image/png;base64," + res.src;
                        $('#qrcode').show();
                        $('#qrcode img').attr('src', src);
                    }
                }, 'json')
            })

            form.on('submit(geo)', function (data) {
                data.field.type = 'geo';
                $.post("{{route('qrcode')}}", data.field, function (res) {
                    if (res.code == 0) {
                        var src = "data:image/png;base64," + res.src;
                        $('#qrcode').show();
                        $('#qrcode img').attr('src', src);
                    }
                }, 'json')
            })
            form.on('submit(phone)', function (data) {
                data.field.type = 'phone';
                $.post("{{route('qrcode')}}", data.field, function (res) {
                    if (res.code == 0) {
                        var src = "data:image/png;base64," + res.src;
                        $('#qrcode').show();
                        $('#qrcode img').attr('src', src);
                    }
                }, 'json')
            })
            form.on('submit(sms)', function (data) {
                data.field.type = 'sms';
                $.post("{{route('qrcode')}}", data.field, function (res) {
                    if (res.code == 0) {
                        var src = "data:image/png;base64," + res.src;
                        $('#qrcode').show();
                        $('#qrcode img').attr('src', src);
                    }
                }, 'json')
            })
            form.on('submit(vcard)', function (data) {
                data.field.type = 'vcard';
                $.post("{{route('qrcode')}}", data.field, function (res) {
                    if (res.code == 0) {
                        var src = "data:image/png;base64," + res.src;
                        $('#qrcode').show();
                        $('#qrcode img').attr('src', src);
                    }
                }, 'json')
            })

            $(".save").on('click', function () {
                var src = $('#qrcode img').attr('src');
                var a = document.createElement('a')
                var event = new MouseEvent('click')
                a.download = new Date().getTime() + ".png"
                a.href = src
                a.dispatchEvent(event)
                return false;
            });
        });
    </script>
@endsection