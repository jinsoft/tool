@extends('layout.base')
@section('css')
    <link rel="stylesheet" href="{{asset('static/lib/numberedtextarea/jquery.numberedtextarea.css')}}">
@endsection

@section('content')
    <div class="layui-container" style="margin-top: 30px;">
        <div class="layui-row">
            <div class="layui-col-md5" style="padding:0px;height:100%;">
                <textarea id="json-src" class="form-control layui-textarea" placeholder="在此输入" style="height:100%;height: 87vh;min-height:520px;padding:10px 10px 10px 10px;
                border:0px;border-right:solid 1px #E5EBEE;border-bottom:solid 1px #eee;border-radius:0;resize: none; outline:none;font-size:10px;"></textarea>
            </div>
            <div class="layui-col-md7" style="padding:0;position:relative;height:100%;">
                <div class="tool" style="position:absolute;">
                    <a href="#" class="tip zip" title="压缩"  data-placement="bottom"><i class="fa fa-database"></i></a>
                    <a href="#" class="tip xml" title="转XML"  data-placement="bottom"><i class="fa fa-file-excel-o"></i></a>
                    <a href="#" class="tip shown"  title="显示行号"  data-placement="bottom"><i class="fa fa-list-ol"></i></a>
                    <a href="#" class="tip clear" title="清空"  data-placement="bottom"><i class="fa fa-trash"></i></a>
                    <a href="#" class="tip save" title="保存"  data-placement="bottom"><i class="fa fa-download"></i></a>
                    <a href="#" class="tip copy" title="复制" data-clipboard-target="#json-target"  data-placement="bottom"><i class="fa fa-copy"></i></a>
                    <a href="#" class="tip compress" title="折叠"  data-placement="bottom"><i class="fa fa-compress"></i></a>
                </div>
                <div id="right-box"  style="width:100%;height: 83vh;min-height:520px;border:solid 1px #f6f6f6;border-radius:0;resize: none;overflow-y:scroll; outline:none;position:relative;font-size:12px;padding-top:40px;">
                    <div id="line-num" style="background-color:#fafafa;padding:0px 8px;float:left;border-right:dashed 1px #E5EBEE;display:none;z-index:-1;color:#999;position:absolute;text-align:center;over-flow:hidden;">
                        <div>0</div>
                    </div>
                    <div class="ro" id="json-target" style="padding:0px 25px;white-space: pre-line;">
                    </div>
                </div>
                <form id="form-save" method="POST"><input type="hidden" value="" id="txt-content" name="content"></form>
            </div>
        </div>
    </div>
@endsection


@section('script')
    <script src="{{asset('static/lib/numberedtextarea/jquery.numberedtextarea.js')}}"></script>
    <script src="{{asset('static/lib/clipboard/clipboard.min.js')}}"></script>
    <script src="{{asset('static/lib/jquery.json2xml.js')}}"></script>
    <script src="{{asset('static/lib/jquery.xml2json.js')}}"></script>
    <script src="{{asset('static/lib/FileSaver.min.js')}}"></script>
    <script src="{{asset('static/lib/jquery.json.js')}}"></script>
    <script src="{{asset('static/lib/jsonlint.js')}}"></script>
    <script>
        layui.use('layer',function(){
            var layer = layui.layer;
            $('textarea').numberedtextarea();
            var current_json = '';
            var current_json_str = '';
            var xml_flag = false;
            var zip_flag = false;
            var shown_flag = false;
            var compress_flag = false;
            function init(){
                xml_flag = false;
                zip_flag = false;
                shown_flag = false;
                compress_flag = false;
                renderLine();
                $('.xml').attr('style','color:#999;');
                $('.zip').attr('style','color:#999;');
            }
            $('#json-src').keyup(function(){
                init();
                var content = $.trim($(this).val());
                var result = '';
                if (content!='') {
                    //如果是xml,那么转换为json
                    if (content.substr(0,1) === '<' && content.substr(-1,1) === '>') {
                        try{
                            var json_obj = $.xml2json(content);
                            content = JSON.stringify(json_obj);
                        }catch(e){
                            result = '解析错误：<span style="color: #f1592a;font-weight:bold;">' + e.message + '</span>';
                            current_json_str = result;
                            $('#json-target').html(result);
                            return false;
                        }

                    }
                    try{
                        current_json = jsonlint.parse(content);
                        current_json_str = JSON.stringify(current_json);
                        //current_json = JSON.parse(content);
                        result = new JSONFormat(content,4).toString();
                    }catch(e){
                        result = '<span style="color: #f1592a;font-weight:bold;">' + e + '</span>';
                        current_json_str = result;
                    }

                    $('#json-target').html(result);
                }else{
                    $('#json-target').html('');
                }
            });
            $('.xml').click(function(){
                if (xml_flag) {
                    $('#json-src').keyup();
                }else{
                    var result = $.json2xml(current_json);
                    $('#json-target').html('<textarea style="width:100%;position:absolute;height: 80vh;min-height:480px;border:0;resize:none;">'+result+'</textarea>');
                    xml_flag = true;
                    $(this).attr('style','color:#15b374;');
                }

            });
            $('.shown').click(function(){
                if (!shown_flag) {
                    renderLine();
                    $('#line-num').show();
                    $('.numberedtextarea-line-numbers').show();
                    shown_flag = true;
                    $(this).attr('style','color:#15b374;');
                }else{
                    $('#line-num').hide();
                    $('.numberedtextarea-line-numbers').hide();
                    shown_flag = false;
                    $(this).attr('style','color:#999;');
                }
            });
            function renderLine(){
                var line_num = $('#json-target').height()/20;
                $('#line-num').html("");
                var line_num_html = "";
                for (var i = 1; i < line_num+1; i++) {
                    line_num_html += "<div>"+i+"<div>";
                }
                $('#line-num').html(line_num_html);
            }
            $('.zip').click(function(){
                if (zip_flag) {
                    $('#json-src').keyup();
                }else{
                    $('#json-target').html(current_json_str);
                    zip_flag = true;
                    $(this).attr('style','color:#15b374;');
                }

            });
            $('.compress').click(function(){
                if(!compress_flag){
                    $(this).attr('style','color:#15b374;');
                    //$(this).attr('title','取消折叠').tooltip('fixTitle').tooltip('show');
                    $($(".fa-minus-square-o").toArray().reverse()).click();
                    compress_flag = true;
                }else{
                    while($(".fa-plus-square-o").length>0){
                        $(".fa-plus-square-o").click();
                    }
                    compress_flag = false;
                    $(this).attr('style','color:#555;');
                    $(this).attr('title','折叠');
                    layer.tips('折叠',$(this),{
                        tips:1
                    })
                }
            });
            $('.clear').click(function(){
                $('#json-src').val('');
                $('#json-target').html('');
            });
            (function($){
                $.fn.innerText = function(msg) {
                    if (msg) {
                        if (document.body.innerText) {
                            for (var i in this) {
                                this[i].innerText = msg;
                            }
                        } else {
                            for (var i in this) {
                                this[i].innerHTML.replace(/&amp;lt;br&amp;gt;/gi,"n").replace(/(&amp;lt;([^&amp;gt;]+)&amp;gt;)/gi, "");
                            }
                        }
                        return this;
                    } else {
                        if (document.body.innerText) {
                            return this[0].innerText;
                        } else {
                            return this[0].innerHTML.replace(/&amp;lt;br&amp;gt;/gi,"n").replace(/(&amp;lt;([^&amp;gt;]+)&amp;gt;)/gi, "");
                        }
                    }
                };
            })(jQuery);
            $('.save').click(function(){
                // var content = JSON.stringify(current_json);
                // $('#txt-content').val(content);
                //var text = "hell world";
                var html = $('#json-target').html().replace(/\n/g,'<br/>').replace(/\n/g,'<br>');
                var text = $('#json-target').innerText().replace('　　', '    ');
                var blob = new Blob([text], {type: "application/json;charset=utf-8"});
                var timestamp=new Date().getTime();
                saveAs(blob, "format."+timestamp+".json");
            });
            var clipboard = new ClipboardJS('.copy');
            clipboard.on('success',function(){
                layer.msg('复制成功');
            });
            clipboard.on('error',function(){
                layer.msg('复制失败',{icon:5});
            });
            // $('.copy').click(function(){
            //     //$.msg("成功复制到粘贴板","color:#00D69C;");
            //     // $(this).tooltip('toggle')
            //     //       .attr('data-original-title', "复制成功！")
            //     //       .tooltip('fixTitle')
            //     //       .tooltip('toggle');
            // });
            // var clipboard = new Clipboard('.copy');
            $('#json-src').keyup();
        });
    </script>
@endsection