@extends('indexhtml')
@section('content')

    <div class="product">
        <div class="container">
            <div class="col-md-3 product-price">

                <div class=" rsidebar span_1_of_left">
                    <div class="of-left">
                        <h3 class="cate">Категории</h3>
                    </div>
                    <ul class="menu">
                        @foreach ($categories as $category)
                            <li><a href="/laravel/public/category/{{ $category->id }}">{{ $category->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="product-middle">

                    <div class="fit-top">
                        <h6 class="shop-top">LOREM IPSUM</h6>
                        <a href="#" class="shop-now">SHOP NOW</a>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="sellers">
                    <div class="of-left-in">
                        <h3 class="tag">Тэги</h3>
                    </div>
                    <div class="tags">
                        <ul>
                            <li><a href="#">Iphone</a></li>
                            <li><a href="#">4s</a></li>
                            <li><a href="#">3gs</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">Apple</a></li>

                            <div class="clearfix"></div>
                        </ul>

                    </div>

                </div>
                <!---->


            </div>
            <!---->
            <div class="col-md-9 product-price1">
                <div class="col-md-5 single-top">


                    <div class="flexslider">
                        <ul class="slides">
                            <li data-thumb="images/si.jpg">
                                <img style="padding: 0px;margin-top:0px; " src="{{$goods->img}}"/>
                            </li>

                        </ul>
                    </div>
                    <!-- FlexSlider -->
                    <script defer src="http://localhost/laravel/template/js/jquery.flexslider.js"></script>
                    <link rel="stylesheet" href="http://localhost/laravel/template/css/flexslider.css" type="text/css"
                          media="screen"/>

                    <script>
                        // Can also be used with $(document).ready()
                        $(window).load(function () {
                            $('.flexslider').flexslider({
                                animation: "slide",
                                controlNav: "thumbnails"
                            });
                        });
                    </script>


                </div>
                <div class="col-md-7 single-top-in simpleCart_shelfItem">
                    <div class="single-para ">
                        <h4>{{$goods->name}}</h4>
                        <div class="star-on">
                            <ul class="star-footer">
                                <li><a href="#"><i> </i></a></li>
                                <li><a href="#"><i> </i></a></li>
                                <li><a href="#"><i> </i></a></li>
                                <li><a href="#"><i> </i></a></li>
                                <li><a href="#"><i> </i></a></li>
                            </ul>

                            <div class="clearfix"></div>
                        </div>

                        <h5 class="price">₴ {{$goods->price}}</h5>
                        <div class="available">
                            <ul>
                                <li>Цвет
                                    <select>
                                        <option>Белый</option>
                                        <option>Черный</option>
                                    </select></li>

                                <div class="clearfix"></div>
                            </ul>
                        </div>
                        <ul class="tag-men">
                            {{$goods->description}}
                        </ul>
                        <br /><a href="#" class="btn btn-primary buy-btn" id="{{$goods->id}}" role="button">Добавить в корзину</a>

                    </div>
                </div>
                <div class="clearfix"></div>
                <!---->
                <div class="cd-tabs">
                    <nav>
                        <ul class="cd-tabs-navigation">

                            <li><a data-content="television" href="#0" class="selected ">Коментарии</a></li>

                        </ul>
                    </nav>
                    <ul class="cd-tabs-content">
                        <li data-content="fashion">
                            <div class="facts">
                                <p> There are many variations of passages of Lorem Ipsum available, but the majority
                                    have suffered alteration in some form, by injected humour, or randomised words which
                                    don't look even slightly believable. If you are going to use a passage of Lorem
                                    Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of
                                    text. All the Lorem Ipsum generators on the Internet tend to repeat predefined
                                    chunks as necessary, making this the first true generator on the Internet. It uses a
                                    dictionary of over 200 Latin words, combined </p>
                                <ul>
                                    <li>Research</li>
                                    <li>Design and Development</li>
                                    <li>Porting and Optimization</li>
                                    <li>System integration</li>
                                    <li>Verification, Validation and Testing</li>
                                    <li>Maintenance and Support</li>
                                </ul>
                            </div>

                        </li>
                        <li data-content="cinema">
                            <div class="facts1">

                                <div class="color"><p>Color</p>
                                    <span>Blue, Black, Red</span>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="color">
                                    <p>Size</p>
                                    <span>S, M, L, XL</span>
                                    <div class="clearfix"></div>
                                </div>

                            </div>

                        </li>
                        <li data-content="television" class="selected">
                            <div class="comments-top-top">

                                <div class="top-comment-right">
                                    @foreach ($coments as $coment)
                                                                               <h6><a href="#">{{$coment->name}}</a> Коментарий оставлен - {{$coment->created_at}}</h6>
                                        <p>{{$coment->text}}</p>

                                    @endforeach



                                </div>
                                <div class="clearfix"></div>
                                <form method="post">
                                    @if (Auth::guest())
                                        <p>Введите ваше имя:</p>
                                        <p><input type="text" name='name'></p>
                                    @elseif (Auth::user())
                                        <p><input type="hidden" name='name' value="{{ Auth::user()->name }}"></p>
                                    @endif
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="hidden" name="goods_id" value="{{ $goods->id  }}">
                                    <p>Ваш коментарий :</p>
                                    <p><textarea rows="10" cols="45" name="text"></textarea></p>
                                    <p><input type="submit" value="Добавить коментарий"></p>
                                </form>
                            </div>

                        </li>
                        <div class="clearfix"></div>
                    </ul>
                </div>
                <!---->


            </div>


            <div class="clearfix"></div>
        </div>


    </div>
    <div class="clearfix"></div>
    </div>
    </div>

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
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                        (i[r].q = i[r].q || []).push(arguments)
                    }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-48014931-1', 'codyhouse.co');
        ga('send', 'pageview');

        jQuery(document).ready(function ($) {
            $('.close-carbon-adv').on('click', function () {
                $('#carbonads-container').hide();
            });
        });
    </script>
    <script src="http://localhost/laravel/template/js/simpleCart.min.js"></script>
    <!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- js -->
    <script src="http://localhost/laravel/template/js/bootstrap.js"></script>
    <script type="text/javascript" src="http://localhost/laravel/template/js/move-top.js"></script>
    <script type="text/javascript" src="http://localhost/laravel/template/js/easing.js"></script>


    <script type="text/javascript" src="http://localhost/laravel/template/js/memenu.js"></script>
    <script>$(document).ready(function () {
            $(".memenu").memenu();
        });</script>
    <!-- /start menu -->
    <!--//slider-script-->
    <script src="http://localhost/laravel/template/js/main.js"></script> <!-- Resource jQuery -->
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);
        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
@endsection
