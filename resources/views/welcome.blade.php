<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>


    <div>

        <div class="layui-form">
            <table class="layui-table">
                <colgroup>
                    <col width="150">
                    <col width="150">
                    <col>
                </colgroup>
                <thead>
                <tr>
                    <th>编码</th>
                    <th>字符</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>ISO-8859-1</td>
                    <td>包括德法两国的字母</td>
                </tr>
                <tr>
                    <td>ISO-8859-2</td>
                    <td>收集了东欧字符</td>
                </tr>
                <tr>
                    <td>ISO-8859-3</td>
                    <td>收集了南欧字符</td>
                </tr>
                <tr>
                    <td>ISO-8859-4</td>
                    <td>收集了北欧字符</td>
                </tr>
                <tr>
                    <td>ISO-8859-5</td>
                    <td>收集了斯拉夫语系字符</td>
                </tr>
                <tr>
                    <td>ISO-8859-6</td>
                    <td>收集了阿拉伯语系字符</td>
                </tr>
                <tr>
                    <td>ISO-8859-7</td>
                    <td>收集了希腊字符</td>
                </tr>
                <tr>
                    <td>ISO-8859-8</td>
                    <td>收集了西伯莱 (犹太人) 字符</td>
                </tr>
                <tr>
                    <td>ISO-8859-9</td>
                    <td>收集了土耳其字符</td>
                </tr>
                <tr>
                    <td>ISO-8859-10</td>
                    <td>收集了北欧 (主要指斯堪地那维亚半岛) 的字符</td>
                </tr>
                <tr>
                    <td>ISO-8859-11</td>
                    <td>从泰国的 TIS620 标准字符集演化而来</td>
                </tr>
                <tr>
                    <td>ISO-8859-12</td>
                    <td>目前尚未定义</td>
                </tr>
                <tr>
                    <td>ISO-8859-13</td>
                    <td>主要函盖波罗的海(Baltic) 诸国的文字符号</td>
                </tr>
                <tr>
                    <td>ISO-8859-14</td>
                    <td>将 ISO-8859-1 中的某些符号换成塞尔特语 (Celtic) 的字符</td>
                </tr>
                <tr>
                    <td>ISO-8859-15</td>
                    <td> - </td>
                </tr>
                <tr>
                    <td>ISO-8859-16</td>
                    <td> - </td>
                </tr>
                </tbody>
            </table>
        </div>











    </div>
    </body>
</html>
