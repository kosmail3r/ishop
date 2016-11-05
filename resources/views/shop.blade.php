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
                        <form method="post">
                            <p><input type="text" name='key' placeholder="Что Вы ищите?">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input class="morebtn at-in" type="submit" value="Найти"></p>
                        </form>
                        <div class="clearfix"></div>
                    </div>
                </div>


                <div class="sellers">
                    <div class="of-left-in">

                        <h3 class="tag"></h3>
                    </div>
                    <div class="tags">
                        <h3 class="cate">Отфильтровать по стоимости</h3>
                        <form method="post">
                            Цена
                            <p>от
                                <input type="text" name='from'></p>
                            <p>до
                                <input type="text" name='to'></p>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input class="morebtn at-in" type="submit" value="Найти"></p>
                        </form>

                        <div class="clearfix"></div>
                        </ul>

                    </div>

                </div>

                <div class="sellers">
                    <div class="fit-top">

                        <ul>
                            <li>
                                <img src="http://www.laovaev.net/wp-content/uploads/2016/07/mesto_dlja_vashej_reklamy.gif"
                                     width="190"/></li>
                            <br/>
                            <li>
                                <img src="http://www.laovaev.net/wp-content/uploads/2016/07/mesto_dlja_vashej_reklamy.gif"
                                     width="190"/></li>
                            <br/>
                            <li>
                                <img src="http://www.laovaev.net/wp-content/uploads/2016/07/mesto_dlja_vashej_reklamy.gif"
                                     width="190"/></li>
                            <br/>
                            <li>
                                <img src="http://www.laovaev.net/wp-content/uploads/2016/07/mesto_dlja_vashej_reklamy.gif"
                                     width="190"/></li>
                            <br/>
                            <li>
                                <img src="http://www.laovaev.net/wp-content/uploads/2016/07/mesto_dlja_vashej_reklamy.gif"
                                     width="190"/></li>
                            <br/>
                            <div class="clearfix"></div>
                        </ul>


                    </div>
                </div>
                <!---->


            </div>
            <!---->
            <div class="product-right-top">
                @if (Request::url() == 'http://localhost/laravel/public/shop')
                    <span>  {!! $goods->render() !!} </span>
                @endif
                <div class="top-product">

                    @foreach ($goods as $row)
                        <div class="col-md-3 product-left">
                            <div class="p-one simpleCart_shelfItem">
                                <a href="good/{{$row->id}}">
                                    <img src="{{$row->img}}" width="190"/>
                                    <div class="mask">
                                        <span>Просмотр</span>
                                    </div>
                                </a>
                                <h4>{{$row->name}}</h4>
                                <p><a class="btn btn-primary buy-btn" id="{{$row->id}}" role="button" href="#"><i></i>
                                        <span class="price">{{$row->price}} ₴</span></a></p>
                            </div>
                        </div>
                    @endforeach

                </div>
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


