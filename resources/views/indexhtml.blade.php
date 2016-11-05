<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
    <title>I-Shop тЭхники АррлЭ</title>
    <link href="http://localhost/laravel/template/css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="http://localhost/laravel/template/js/jquery.min.js"></script>
    <script src="http://localhost/laravel/template/js/functions.js"></script>
    <script src="{{asset("http://localhost/laravel/template/js/jquery.cookie.js")}}"></script>
    <!-- Custom Theme files -->
    <!--theme-style-->
    <link href="http://localhost/laravel/template/css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <!--//theme-style-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="I wear Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design"/>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);
        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <script type="text/javascript" src="http://localhost/laravel/template/js/move-top.js"></script>
    <script type="text/javascript" src="http://localhost/laravel/template/js/easing.js"></script>
    <!--fonts-->
    <link href='//fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Montez' rel='stylesheet' type='text/css'>
    <!--//fonts-->
    <!-- start menu -->
    <!--//slider-script-->
    <script src="http://localhost/laravel/template/js/easyResponsiveTabs.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#horizontalTab').easyResponsiveTabs({
                type: 'default', //Types: default, vertical, accordion
                width: 'auto', //auto or any width like 600px
                fit: true   // 100% fit in a container
            });
        });

    </script>
    <!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- js -->
    <script src="http://localhost/laravel/template/js/bootstrap.js"></script>
    <!-- js -->
    <script src="http://localhost/laravel/template/js/simpleCart.min.js"></script>
    <!-- start menu -->
    <link href="http://localhost/laravel/template/css/memenu.css" rel="stylesheet" type="text/css" media="all"/>
    <script type="text/javascript" src="http://localhost/laravel/template/js/memenu.js"></script>
    <script>$(document).ready(function () {
            $(".memenu").memenu();
        });</script>
    <!-- /start menu -->
</head>
<body>
<!--header-->
<div class="header-info">
    <div class="container">
        <div class="header-top-in">

            <ul class="support">
                <li><a href="mailto:info@example.com"><i class="glyphicon glyphicon-envelope"> </i>info@ishop.com</a>
                </li>
                <li><span><i class="glyphicon glyphicon-earphone" class="tele-in"> </i>044 555 22 31</span></li>
            </ul>
            <ul class=" support-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Войти</a></li>
                    <li><a href="{{ url('/register') }}">Зарегистрироватся</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>


                        <ul class="dropdown-menu" role="menu">
                            @if( Auth::user()->is_admin == 1)
                                <li><a href="http://localhost/laravel/public/adminzone/main"><i
                                                class="fa fa-btn fa-sign-out"></i>Админка</a></li>
                            @endif
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Выйти</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
            <div class="clearfix"></div>
        </div>
    </div>
</div>


<div class="header @if(Request::url() !== 'http://localhost/laravel/public')
        header5
    @endif"


>
    <div class="header-top">

        <div class="header-bottom">
            <div class="container">
                <div class="logo">
                    <h1><a href="http://localhost/laravel/public/"><img
                                    src="http://ishop.lviv.ua/wp-content/uploads/2015/10/2.png" width="200"
                                    alt="Пример"></a></h1>
                </div>
                <!---->

                <div class="top-nav">
                    <ul class="memenu skyblue">
                        <li class="active"><a href="http://localhost/laravel/public/">Главная</a></li>
                        <li class="grid"><a href="http://localhost/laravel/public/shop">Магазин</a>
                                                    </li>

                    </ul>
                    <div class="clearfix"></div>
                </div>
                <!---->

                <div class="cart box_1">

                    <a href="http://localhost/laravel/public/checkout">
                        <h3>
                            <div class="total">Корзина
                                <span style="font-size:1.5em;" class="glyphicon glyphicon-shopping-cart basket"> </span>
                                <span id="simpleCart_quantity" class="badge pull-right count_order"> </span></div>
                        </h3>
                    </a>
                    <div class="clearfix"></div>
                </div>

                <div class="clearfix"></div>
                <!---->
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    @if(Request::url() !== 'http://localhost/laravel/public')
        <div class="back">
            <h2></h2>
        </div>



    @else
        <div class="banner">
            <div class="banner-top">
                <h2>THIS IS I-SHOP</h2>
                <p>An iPod, a phone, an internet mobile communicator... these are NOT three separate devices! And we are
                    calling it iPhone! Today Apple is going to reinvent the phone. And here it is.</p>
            </div>
            <div class="now">
                <a class="morebtn" href="http://localhost/laravel/public/">На главную</a>
                <a class="morebtn at-in" href="http://localhost/laravel/public/shop">В магазин</a>

                <div class="clearfix"></div>
            </div>
        </div>

    @endif

    <div class="clearfix"></div>
</div>
<!---->
<!---->

<!--start-shoes-->


@yield('content')


<div class="footer">
    <div class="container">


        <div class="clearfix"></div>
        <p class="footer-class">Copyrights © 2016 I Shop. All rights reserved </p>
    </div>
</div>
<!---->
<script type="text/javascript">
    $(document).ready(function () {
        /*
         var defaults = {
         containerID: 'toTop', // fading element id
         containerHoverID: 'toTopHover', // fading element hover id
         scrollSpeed: 1200,
         easingType: 'linear'
         };
         */
        $().UItoTop({easingType: 'easeOutQuart'});
    });
</script>
<a href="#to-top" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!---->
<!-- JavaScripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js"
        integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"
        integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
        crossorigin="anonymous"></script>
{{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
<!---->
</body>
</html>