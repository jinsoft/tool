@extends('layout.base')

@section('content')
    <div class="layui-container">
        <div class="layui-row layui-col-space10">
            <fieldset class="layui-elem-field site-list" style="margin-top: 30px;">
                <legend>程序开发</legend>
                <div class="layui-col-lg4 layui-col-md6 text-center">
                    <div class="item">
                        <div class="item-block">
                            <h4 class="item-title">json</h4>
                            <p class="item-text">
                                <a style="float:left;margin-left:10px;" class="sb-preview-img" href="#" target="_blank">
                                    <img class="card-img-top img-fluid" src="/images/json.png">
                                </a>
                                JSON 编辑器，支持 JOSN 的导入导出、校验、压缩、格式化以及转 XML。
                            </p>
                        </div>
                        <div class="item-footer"><a href="{{route('json')}}" class="layui-btn layui-btn-primary">开始使用</a></div>
                    </div>
                </div>
                <div class="layui-col-lg4 layui-col-md6 text-center">
                    <div class="item">
                        <div class="item-block">
                            <h4 class="item-title">json</h4>
                            <p class="item-text">
                                <a style="float:left;margin-left:10px;" class="sb-preview-img" href="#" target="_blank">
                                    <img class="card-img-top img-fluid" src="/images/json.png">
                                </a>
                                sfjsdklfjsdlkfjsdlfkj
                            </p>
                        </div>
                        <div class="item-footer"><a href="{{route('json')}}" class="layui-btn layui-btn-primary">开始使用</a></div>
                    </div>
                </div>
                <div class="layui-col-lg4 layui-col-md6 text-center">
                    <div class="item">
                        <div class="item-block">
                            <h4 class="item-title">json</h4>
                            <p class="item-text">
                                <a style="float:left;margin-left:10px;" class="sb-preview-img" href="#" target="_blank">
                                    <img class="card-img-top img-fluid" src="/images/json.png">
                                </a>
                                sfjsdklfjsdlkfjsdlfkj
                            </p>
                        </div>
                        <div class="item-footer"><a href="#" class="layui-btn layui-btn-primary">开始使用</a></div>
                    </div>
                </div>
            </fieldset>
        </div>
        <div class="layui-row layui-col-space10" id="network">
            <fieldset class="layui-elem-field site-list" style="margin-top: 30px;">
                <legend>网络工具</legend>
                <div class="layui-col-lg4 layui-col-md6 text-center">
                    <div class="item">
                        <div class="item-block">
                            <h4 class="item-title">json</h4>
                            <p class="item-text">
                                <a style="float:left;margin-left:10px;" class="sb-preview-img" href="#" target="_blank">
                                    <img class="card-img-top img-fluid" src="/images/json.png">
                                </a>
                                JSON 编辑器，支持 JOSN 的导入导出、校验、压缩、格式化以及转 XML。
                            </p>
                        </div>
                        <div class="item-footer"><a href="{{route('json')}}" class="layui-btn layui-btn-primary">开始使用</a></div>
                    </div>
                </div>
                <div class="layui-col-lg4 layui-col-md6 text-center">
                    <div class="item">
                        <div class="item-block">
                            <h4 class="item-title">json</h4>
                            <p class="item-text">
                                <a style="float:left;margin-left:10px;" class="sb-preview-img" href="#" target="_blank">
                                    <img class="card-img-top img-fluid" src="/images/json.png">
                                </a>
                                sfjsdklfjsdlkfjsdlfkj
                            </p>
                        </div>
                        <div class="item-footer"><a href="{{route('json')}}" class="layui-btn layui-btn-primary">开始使用</a></div>
                    </div>
                </div>
                <div class="layui-col-lg4 layui-col-md6 text-center">
                    <div class="item">
                        <div class="item-block">
                            <h4 class="item-title">json</h4>
                            <p class="item-text">
                                <a style="float:left;margin-left:10px;" class="sb-preview-img" href="#" target="_blank">
                                    <img class="card-img-top img-fluid" src="/images/json.png">
                                </a>
                                sfjsdklfjsdlkfjsdlfkj
                            </p>
                        </div>
                        <div class="item-footer"><a href="#" class="layui-btn layui-btn-primary">开始使用</a></div>
                    </div>
                </div>
            </fieldset>
        </div>
        <div class="layui-row layui-col-space10" id="picture">
            <fieldset class="layui-elem-field site-list" style="margin-top: 30px;">
                <legend>图片工具</legend>
                <div class="layui-col-lg4 layui-col-md6 text-center">
                    <div class="item">
                        <div class="item-block">
                            <h4 class="item-title">二维码</h4>
                            <p class="item-text">
                                <a style="float:left;margin-left:10px;" class="sb-preview-img" href="#" target="_blank">
                                    <img class="card-img-top img-fluid" src="/images/json.png">
                                </a>
                                在线艺术二维码生成工具。
                            </p>
                        </div>
                        <div class="item-footer"><a href="{{route('picture')}}" class="layui-btn layui-btn-primary">开始使用</a></div>
                    </div>
                </div>
            </fieldset>
        </div>
    </div>
@endsection


@section('script')
    <script>
        layui.use(['layer'],function(){
        })
    </script>
@endsection