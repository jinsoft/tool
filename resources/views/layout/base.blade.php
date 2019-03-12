<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>在线工具| @yield('title')</title>
    <link rel="stylesheet" href="{{asset('static/lib/pace/themes/orange/pace-theme-minimal.css')}}">
    <link rel="stylesheet" href="{{asset('static/lib/layui/css/layui.css')}}">
    <link rel="stylesheet" href="{{asset('css/tool.css')}}">
    <link rel="stylesheet" href="{{asset('static/lib/font-awesome/css/font-awesome.css')}}">
    @yield('css')
    <script src="{{asset('static/lib/pace/pace.min.js')}}"></script>
</head>
<body>
<div class="layui-layout-admin">
    <div class="layui-header">
        <div class="layui-logo">
            <a href="/"><img src="{{asset('images/logo.png')}}" alt=""></a>
        </div>
        <ul class="layui-nav layui-layout-left layui-hide-xs">
            <li class="layui-nav-item"><a href="/"><i class="layui-icon layui-icon-app"></i>程序开发</a></li>
            <li class="layui-nav-item"><a href="/#network"><i class="layui-icon layui-icon-website"></i>网络工具</a></li>
            <li class="layui-nav-item"><a href="/#picture"><i class="layui-icon layui-icon-picture"></i>图片工具</a></li>
        </ul>
        <ul class="layui-nav layui-layout-right">
            <li class="layui-nav-item">
                <a href="javascript:;">快速导航<span class="layui-nav-more"></span></a>
                <dl class="layui-nav-child">
                    <dd><a href="">1</a></dd>
                    <dd><a href="">2</a></dd>
                    <dd><a href="">3</a></dd>
                </dl>
            </li>
        </ul>
    </div>
</div>
<ul class="layui-fixbar">
    <li class="layui-icon" lay-type="bar1" style=""></li>
    <li class="layui-icon layui-fixbar-top" lay-type="top" style="display: list-item;"></li>
</ul>
@yield('content')
<script src="{{asset('static/lib/jquery/jquery.min.js')}}"></script>
<script src="{{asset('js/tool.js')}}"></script>
<script src="{{asset('static/lib/layui/layui.js')}}"></script>
<script src="{{asset('js/func.js')}}"></script>
<script>
    layui.use('element');
</script>
@yield('script')
</body>
</html>