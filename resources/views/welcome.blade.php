<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <script src="http://code.jquery.com/jquery-latest.min.js"></script>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
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
                font-size: 13px;
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

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>
                    <button onclick="aa();">본인 인증하기</button>
                    <form id="myform" method='post' action="https://kreator.co.kr/develops/auth"  target="popup_window">
                        @csrf
                        <input type="hidden" class="textfield" name='return_url' value="http://hyun-test.localhost/test"><i class="bg_text"></i>
                    </form>
            </div>
        </div>

    <script>
        var d = "";
        var a;
        function aa() {
            a = window.open("", "popup_window", "width=500, height=300, scrollbars=no");
            $("#myform").submit();
        }

        function openerCallback(__data) {
            console.log(1);
            d = __data;
            a.close();
            alert(d);
        }

        @if (isset($ci)) {
            var c = '{{ $ci }}';
            // d = '{{ $ci }}';
            window.opener.openerCallback(c);
        }
        @endif
    </script>
    </body>
</html>
