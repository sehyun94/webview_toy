<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>WEB VIEW</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- 합쳐지고 최소화된 최신 CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
        <!-- 부가적인 테마 -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
        <script  src="http://code.jquery.com/jquery-latest.min.js"></script>
        <!-- 합쳐지고 최소화된 최신 자바스크립트 -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
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
                font-size: 30px;
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

            .img_wrap {
                width: 300px;
                margin-top: 50px;
            }

            .img_wrap img {
                max-width: 100%;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    App_Toy
                    <br>
                    By_hyun
                </div>
                <div style="padding:3%">               
                <form id="myform" method='post' action="https://kreator.co.kr/develops/auth"  target="popup_window">
                    @csrf
                    <input type="hidden" class="textfield" name='return_url' value="{{ route('main.page') }}"><i class="bg_text"></i>
                </form>
                <button onclick="popup_open()"; class="btn btn-default btn-lg">
                    <span>본인 인증하기</span> 
                </button>
                </div>

                <div class="custom-file" style="border:1px solid black">
                    <input type="file" class="custom-file-input" id="input_img">
                </div>
                <div class="img_wrap">
                    <img id="img_preview" />
                </div>                
            </div>

           
                <!-- <a href="#" class="btn btn-default btn-lg">                    
                </a> -->
        </div>

        <script>
            var identity_code = "";
            var popup_selector;
            function popup_open() {
                popup_selector = window.open("", "popup_window", "width=500, height=300, scrollbars=no");
                $("#myform").submit();
            }
            function openerCallback(__ci, __result) {
                identity_code = __ci;
                if (__result) {
                    popup_selector.close();
                    alert(identity_code);
                }
                
            }
            @if (isset($ci) && $ci != "") {
                window.opener.openerCallback('{{ $ci }}', true);
            }
            @endif
            $(document).ready(function () {
                $('#input_img').on("change", handleImgFileSelect);
            });

            function handleImgFileSelect() 
            {
                
                if ($('#input_img')[0].files) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        console.log(e);
                        $('#img_preview').attr('src', e.target.result);  
                    }
                    reader.readAsDataURL($('#input_img')[0].files[0]);
                }
                
            }

        </script>
    </body>


</html>
 