<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Curry and Curry</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="http://gourmet.arenaofthemes.com/favicon.ico">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="http://gourmet.arenaofthemes.com/css/animate.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css" media="all">
    <link rel="stylesheet" href="/css/menu.css">
    <script src="/js/jquery-2.1.1.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="http://cdn.bootcss.com/angular.js/1.4.0-rc.1/angular.min.js"></script>
    <script>
        var addToCartishUrl = "{{ URL('adddish') }}";
    </script>
    <script src="/js/menu.js"></script>

</head>
<body ng-app="app" ng-controller="MainCtrl">
@include('common.nav')
@include('flash::message')

<header class="main-header" id="top">
    <div class="top-banner-container top-banner-container-style">
        <div class="top-banner-bg custom-bg parallax" data-stellar-background-ratio="0.5" style="background-position: -30%;"></div>
        <div class="top-banner" style="opacity: 1;">
            <div class="top-image animated fadeInDown">
                <h1>Our Food Menu</h1>
            </div><!-- /top-image -->
            <div class="bottom-image animated fadeInDown">
                <img src="/img/cooking-since2001.png" alt="Marine Food About">
            </div><!-- /bottom-image -->
        </div><!-- /top-banner -->
        <div class="header-bottom-bar">
            <div class="row">
                <ul class="category-filter store-category-filter">
                    <li class="filter active" data-filter="all"></li>
                    <li class="filter" data-filter=".main"></li>
                    <li class="filter" data-filter=".salad"></li>
                    <li class="filter" data-filter=".starter"></li>
                </ul>
            </div><!-- /row -->
        </div><!-- /header-bottom-bar -->
    </div><!-- /top-banner-container -->
</header>
<!-- End main-header -->

<section class="food-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-6 wow fadeInLeft" style="visibility: hidden; -webkit-animation-name: none;">
                <div class="banner features-right features-active">
                    <div class="image-container">
                        <div class="banner-image" style="background-image:url('/img/food1.jpg')" alt="Marine Food Banner">
                        </div>
                    </div>
                    <div class="banner-features">
                        <div class="banner-features-inner">
                            <div class="food-price">
                                <p><sup>$</sup>22 - <sup>$</sup>24</p>
                            </div><!-- /food-price -->
                            <ul>
                                <li>
                                    <h6>Old School</h6>
                                    <p>2 farm fresh eggs, 2 bacon or 1 house made sausage, fresh greens</p>
                                </li>
                                <li>
                                    <h6>Chilaquiles</h6>
                                    <p>tortilla chips, fire roasted tomatillo salsa, 2 sunny side farm fresh eggs</p>
                                </li>
                                <li>
                                    <h6>Pancakes</h6>
                                    <p>seasonal toppings</p>
                                </li>
                            </ul>
                            {{--<a class="addspecial fa fa-plus-circle fa-3x" href="javascript:void(0)" ></a>--}}

                            {{--<span class="addspecial">+</span>--}}
                        </div><!-- /banner-features-inner -->
                    </div><!-- /banner-features -->
                </div><!-- /banner -->
            </div><!-- /col-md-5 -->
            <div class="col-lg-5 col-md-6 col-lg-offset-2 wow fadeInRight" style="visibility: hidden; -webkit-animation-name: none;">
                <div class="banner features-left">
                    <div class="image-container">
                        <div class="banner-image" style="background-image:url('/img/food2.jpg')" alt="Marine Food Banner"></div>
                    </div>
                </div><!-- /banner -->
            </div><!-- /col-md-5 -->
        </div><!-- /row -->
    </div><!-- /container -->
</section>


{{--cart start--}}
<div class="shopping-cart wow bounceInRight" data-wow-delay="3s" data-wow-duration="3s">
{{--<div class="shopping-cart">--}}
    <div class="cart-container clearfix">
        <i id="end"></i>
        <a href="{{ url('order') }}" class="cart-link"><span id="itemno">{{ $itemno }}</span></a>
        {{--<div class="cart-items">--}}
            {{--<div class="cart-counter">--}}
                {{--<h5><span><span>2</span> Items</span> In Cart</h5>--}}
            {{--</div><!-- /cart-counter -->--}}
            {{--<a href="" class="remove-items"><i class="fa fa-times-circle"></i></a>--}}
            {{--<ul>--}}
                {{--<li>--}}
                    {{--<div class="item-container clearfix">--}}
                    {{--<figure><img src="img/gallery/gallery20.jpg" alt="Marine Food Items"></figure>--}}
                    {{--<p class="food-name"><a href="#">Black Pasta with Meat</a></p>--}}
                    {{--<p class="food-price">$27</p>--}}
                    {{--</div><!-- /item-contaeinr -->--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<div class="item-container clearfix">--}}
                        {{--<figure><img src="img/gallery/gallery20.jpg" alt="Marine Food Items"></figure>--}}
                        {{--<p class="food-name"><a href="#">Black Pasta with Meat</a></p>--}}
                        {{--<p class="food-price">$27</p>--}}
                    {{--</div><!-- /item-contaeinr -->--}}
                {{--</li>--}}
            {{--</ul>--}}
            {{--<a href="store-checkout.html" class="button checkout-btn">Checkout</a>--}}
        {{--</div><!-- /cart-items -->--}}
    </div><!-- /cart-container -->
</div>
{{--cart end--}}

<section class="store-items" id="MixItUp09871A">
    <div class="container">
        <div class="row">

            @foreach($dishes as $idx => $dish)
            {{--dish start--}}
            <div class="col-md-4 col-sm-6 col-xs-12 mix" style="display: inline-block;">
                <div class="store-item wow fadeInDown"
                     @if($idx%3 ==1)
                        data-wow-delay="0.2s"
                     @elseif($idx%3 == 2 )
                        data-wow-delay="0.4s"
                     @endif
                     style="visibility: hidden; -webkit-animation-name: none;">

                {{--@if($idx%3 == 0 )--}}
                    {{--<div class="store-item wow fadeInDown" style="visibility: hidden; -webkit-animation-name: none;">--}}
                {{--@elseif($idx%3 == 1 )--}}
                    {{--<div class="store-item wow fadeInDown" data-wow-delay="0.2s" style="visibility: hidden; -webkit-animation-name: none;">--}}
                {{--@elseif($idx%3 == 2 )--}}
                    {{--<div class="store-item wow fadeInDown" data-wow-delay="0.4s" style="visibility: hidden; -webkit-animation-name: none;">--}}
                {{--@endif--}}
                            <figure>
                        {{--<a href="">--}}
                            <div class="store-image" style="background-image:url('/img/{{ $dish->imgUrl }}');"></div>
                        {{--</a>--}}
                    </figure>
                    <div style="overflow: hidden; height: 25px; font-size: 1.2em; margin-bottom: 12px;">
                    {{ $dish->name }}
                    </div>
                    {{--<h3 class="food-name" style="display: inline; overflow: hidden">{{ $dish->name }}</h3>--}}
                    <ul class="food-category">
                        @foreach($dish->tags as $tag)
                        <li>{{ $tag->name }}</li>
                        @endforeach
                    </ul>
                    <div class="food-order">
                        <p class="food-price">S${{ $dish->price }}</p>
                        {{--<a href="javascript:void(0);" class="add-to-cart-link">Add To Cart</a>--}}
                        <a href="javascript:void(0);" ng-click="addToCart($event, {{ $dish }}, true)" class="add-to-cart-link">Add To Cart</a>
                    </div><!-- /food-order -->
                </div><!-- /store-item -->
            </div><!-- /col-md-4 -->
            {{--dish end--}}
            @endforeach

            {{--<div class="col-md-4 col-sm-6 col-xs-12 mix" style="display: inline-block;">--}}
                {{--<div class="store-item wow fadeInDown" data-wow-delay="0.2s" style="visibility: hidden; -webkit-animation-delay: 0.2s; -webkit-animation-name: none;">--}}
                    {{--<figure>--}}
                        {{--<a href="">--}}
                            {{--<div class="store-image" style="background-image:url('/img/food4.jpg');"></div>--}}
                        {{--</a>--}}
                    {{--</figure>--}}
                    {{--<h3 class="food-name"><a href="">Grilled Meat with Fruits</a></h3>--}}
                    {{--<ul class="food-category">--}}
                        {{--<li>Local</li>--}}
                        {{--<li>Fruits</li>--}}
                        {{--<li>Meat</li>--}}
                    {{--</ul>--}}
                    {{--<div class="food-order">--}}
                        {{--<p class="food-price">$34.95</p>--}}
                        {{--<a href="" class="add-to-cart-link">Add To Cart</a>--}}
                    {{--</div><!-- /food-order -->--}}
                {{--</div><!-- /store-item -->--}}
            {{--</div><!-- /col-md-4 -->--}}
            {{--<div class="col-md-4 col-sm-6 col-xs-12 mix" style="display: inline-block;">--}}
                {{--<div class="store-item wow fadeInDown" data-wow-delay="0.4s" style="visibility: hidden; -webkit-animation-delay: 0.4s; -webkit-animation-name: none;">--}}
                    {{--<figure>--}}
                        {{--<a href="">--}}
                            {{--<div class="store-image" style="background-image:url('/img/food5.jpg');"></div>--}}
                        {{--</a>--}}
                    {{--</figure>--}}
                    {{--<h3 class="food-name"><a href="">Black Pasta with Meat</a></h3>--}}
                    {{--<ul class="food-category">--}}
                        {{--<li>Italian</li>--}}
                        {{--<li>Pasta</li>--}}
                        {{--<li>Meat</li>--}}
                    {{--</ul>--}}
                    {{--<div class="food-order">--}}
                        {{--<p class="food-price">$27.99</p>--}}
                        {{--<a href="" class="add-to-cart-link">Add To Cart</a>--}}
                    {{--</div><!-- /food-order -->--}}
                {{--</div><!-- /store-item -->--}}
            {{--</div><!-- /col-md-4 -->--}}
            {{--<div class="col-md-4 col-sm-6 col-xs-12 mix" style="display: inline-block;">--}}
                {{--<div class="store-item wow fadeInDown" style="visibility: hidden; -webkit-animation-name: none;">--}}
                    {{--<figure>--}}
                        {{--<a href="">--}}
                            {{--<div class="store-image" style="background-image:url('/img/food5.jpg');"></div>--}}
                        {{--</a>--}}
                    {{--</figure>--}}
                    {{--<h3 class="food-name"><a href="">Chips with Sour Cream </a></h3>--}}
                    {{--<ul class="food-category">--}}
                        {{--<li>Local</li>--}}
                        {{--<li>Greens</li>--}}
                        {{--<li>Chips</li>--}}
                    {{--</ul>--}}
                    {{--<div class="food-order">--}}
                        {{--<p class="food-price">$13.99</p>--}}
                        {{--<a href="" class="add-to-cart-link">Add To Cart</a>--}}
                    {{--</div><!-- /food-order -->--}}
                {{--</div><!-- /store-item -->--}}
            {{--</div><!-- /col-md-4 -->--}}

            {{--<div class="col-md-4 col-sm-6 col-xs-12 mix" style="display: inline-block;">--}}
                {{--<div class="store-item wow fadeInDown" data-wow-delay="0.2s" style="visibility: hidden; -webkit-animation-delay: 0.2s; -webkit-animation-name: none;">--}}
                    {{--<figure>--}}
                        {{--<a href="">--}}
                            {{--<div class="store-image" style="background-image:url('/img/food6.jpg');"></div>--}}
                        {{--</a>--}}
                    {{--</figure>--}}
                    {{--<h3 class="food-name"><a href="">Taco with Meat &amp; Avocado</a></h3>--}}
                    {{--<ul class="food-category">--}}
                        {{--<li>mexican</li>--}}
                        {{--<li>fruits</li>--}}
                        {{--<li>meat</li>--}}
                        {{--<li>taco</li>--}}
                    {{--</ul>--}}
                    {{--<div class="food-order">--}}
                        {{--<p class="food-price">$11.89</p>--}}
                        {{--<a href="" class="add-to-cart-link">Add To Cart</a>--}}
                    {{--</div><!-- /food-order -->--}}
                {{--</div><!-- /store-item -->--}}
            {{--</div><!-- /col-md-4 -->--}}
            {{--<div class="col-md-4 col-sm-6 col-xs-12 mix" style="display: inline-block;">--}}
                {{--<div class="store-item wow fadeInDown" data-wow-delay="0.4s" style="visibility: hidden; -webkit-animation-delay: 0.4s; -webkit-animation-name: none;">--}}
                    {{--<figure>--}}
                        {{--<a href="">--}}
                            {{--<div class="store-image" style="background-image:url('/img/food7.jpg');"></div>--}}
                        {{--</a>--}}
                    {{--</figure>--}}
                    {{--<h3 class="food-name"><a href="">Spring Fruit Salad</a></h3>--}}
                    {{--<ul class="food-category">--}}
                        {{--<li>Spanish</li>--}}
                        {{--<li>Fruits</li>--}}
                        {{--<li>Salad</li>--}}
                    {{--</ul>--}}
                    {{--<div class="food-order">--}}
                        {{--<p class="food-price">$24.95</p>--}}
                        {{--<a href="" class="add-to-cart-link">Add To Cart</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="col-md-4 col-sm-6 col-xs-12 mix" style="display: inline-block;">--}}
                {{--<div class="store-item wow fadeInDown" style="visibility: hidden; -webkit-animation-name: none;">--}}
                    {{--<figure>--}}
                        {{--<a href="">--}}
                            {{--<div class="store-image" style="background-image:url('/img/food8.jpg');"></div>--}}
                        {{--</a>--}}
                    {{--</figure>--}}
                    {{--<h3 class="food-name"><a href="">Spicy Baked Eggs</a></h3>--}}
                    {{--<ul class="food-category">--}}
                        {{--<li>Local</li>--}}
                        {{--<li>Greens</li>--}}
                        {{--<li>Eggs</li>--}}
                    {{--</ul>--}}
                    {{--<div class="food-order">--}}
                        {{--<p class="food-price">$19.99</p>--}}
                        {{--<a href="" class="add-to-cart-link">Add To Cart</a>--}}
                    {{--</div><!-- /food-order -->--}}
                {{--</div><!-- /store-item -->--}}
            {{--</div><!-- /col-md-4 -->--}}

            {{--<div class="col-md-4 col-sm-6 col-xs-12 mix" style="display: inline-block;">--}}
                {{--<div class="store-item wow fadeInDown" data-wow-delay="0.2s" style="visibility: hidden; -webkit-animation-delay: 0.2s; -webkit-animation-name: none;">--}}
                    {{--<figure>--}}
                        {{--<a href="">--}}
                            {{--<div class="store-image" style="background-image:url('/img/food9.jpg');"></div>--}}
                        {{--</a>--}}
                    {{--</figure>--}}
                    {{--<h3 class="food-name"><a href="">Grilled Meat with Fruits</a></h3>--}}
                    {{--<ul class="food-category">--}}
                        {{--<li>Local</li>--}}
                        {{--<li>Fruits</li>--}}
                        {{--<li>Meat</li>--}}
                    {{--</ul>--}}
                    {{--<div class="food-order">--}}
                        {{--<p class="food-price">$34.95</p>--}}
                        {{--<a href="" class="add-to-cart-link">Add To Cart</a>--}}
                    {{--</div><!-- /food-order -->--}}
                {{--</div><!-- /store-item -->--}}
            {{--</div><!-- /col-md-4 -->--}}

            {{--<div class="col-md-4 col-sm-6 col-xs-12 mix" style="display: inline-block;">--}}
                {{--<div class="store-item wow fadeInDown" data-wow-delay="0.4s" style="visibility: hidden; -webkit-animation-delay: 0.4s; -webkit-animation-name: none;">--}}
                    {{--<figure>--}}
                        {{--<a href="">--}}
                            {{--<div class="store-image" style="background-image:url('/img/food10.jpg');"></div>--}}
                        {{--</a>--}}
                    {{--</figure>--}}
                    {{--<h3 class="food-name"><a href="">Black Pasta with Meat</a></h3>--}}
                    {{--<ul class="food-category">--}}
                        {{--<li>Italian</li>--}}
                        {{--<li>Pasta</li>--}}
                        {{--<li>Meat</li>--}}
                    {{--</ul>--}}
                    {{--<div class="food-order">--}}
                        {{--<p class="food-price">$27.99</p>--}}
                        {{--<a href="" class="add-to-cart-link">Add To Cart</a>--}}
                    {{--</div><!-- /food-order -->--}}
                {{--</div><!-- /store-item -->--}}
            {{--</div><!-- /col-md-4 -->--}}

            {{--<div class="col-md-4 col-sm-6 col-xs-12 mix" style="display: inline-block;">--}}
                {{--<div class="store-item wow fadeInDown" style="visibility: hidden; -webkit-animation-name: none;">--}}
                    {{--<figure>--}}
                        {{--<a href="">--}}
                            {{--<div class="store-image" style="background-image:url('/img/food11.jpg');"></div>--}}
                        {{--</a>--}}
                    {{--</figure>--}}
                    {{--<h3 class="food-name"><a href="">Spicy Baked Eggs</a></h3>--}}
                    {{--<ul class="food-category">--}}
                        {{--<li>Local</li>--}}
                        {{--<li>Greens</li>--}}
                        {{--<li>Eggs</li>--}}
                    {{--</ul>--}}
                    {{--<div class="food-order">--}}
                        {{--<p class="food-price">$19.99</p>--}}
                        {{--<a href="" class="add-to-cart-link">Add To Cart</a>--}}
                    {{--</div><!-- /food-order -->--}}
                {{--</div><!-- /store-item -->--}}
            {{--</div><!-- /col-md-4 -->--}}

            {{--<div class="col-md-4 col-sm-6 col-xs-12 mix" style="display: inline-block;">--}}
                {{--<div class="store-item wow fadeInDown" data-wow-delay="0.2s" style="visibility: hidden; -webkit-animation-delay: 0.2s; -webkit-animation-name: none;">--}}
                    {{--<figure>--}}
                        {{--<a href="">--}}
                            {{--<div class="store-image" style="background-image:url('/img/food12.jpg');"></div>--}}
                        {{--</a>--}}
                    {{--</figure>--}}
                    {{--<h3 class="food-name"><a href="">Grilled Meat with Fruits</a></h3>--}}
                    {{--<ul class="food-category">--}}
                        {{--<li>Local</li>--}}
                        {{--<li>Fruits</li>--}}
                        {{--<li>Meat</li>--}}
                    {{--</ul>--}}
                    {{--<div class="food-order">--}}
                        {{--<p class="food-price">$34.95</p>--}}
                        {{--<a href="" class="add-to-cart-link">Add To Cart</a>--}}
                    {{--</div><!-- /food-order -->--}}
                {{--</div><!-- /store-item -->--}}
            {{--</div><!-- /col-md-4 -->--}}

            {{--<div class="col-md-4 col-sm-6 col-xs-12 mix" style="display: inline-block;">--}}
                {{--<div class="store-item wow fadeInDown" data-wow-delay="0.4s" style="visibility: hidden; -webkit-animation-delay: 0.4s; -webkit-animation-name: none;">--}}
                    {{--<figure>--}}
                        {{--<a href="">--}}
                            {{--<div class="store-image" style="background-image:url('/img/food13.jpg');"></div>--}}
                        {{--</a>--}}
                    {{--</figure>--}}
                    {{--<h3 class="food-name"><a href="">Black Pasta with Meat</a></h3>--}}
                    {{--<ul class="food-category">--}}
                        {{--<li>Italian</li>--}}
                        {{--<li>Pasta</li>--}}
                        {{--<li>Meat</li>--}}
                    {{--</ul>--}}
                    {{--<div class="food-order">--}}
                        {{--<p class="food-price">$27.99</p>--}}
                        {{--<a href="" class="add-to-cart-link">Add To Cart</a>--}}
                    {{--</div><!-- /food-order -->--}}
                {{--</div><!-- /store-item -->--}}
            {{--</div><!-- /col-md-4 -->--}}

            {{--<div class="col-md-4 col-sm-6 col-xs-12 mix" style="display: inline-block;">--}}
                {{--<div class="store-item wow fadeInDown" style="visibility: hidden; -webkit-animation-name: none;">--}}
                    {{--<figure>--}}
                        {{--<a href="">--}}
                            {{--<div class="store-image" style="background-image:url('/img/food14.jpg');"></div>--}}
                        {{--</a>--}}
                    {{--</figure>--}}
                    {{--<h3 class="food-name"><a href="">Spicy Baked Eggs</a></h3>--}}
                    {{--<ul class="food-category">--}}
                        {{--<li>Local</li>--}}
                        {{--<li>Greens</li>--}}
                        {{--<li>Eggs</li>--}}
                    {{--</ul>--}}
                    {{--<div class="food-order">--}}
                        {{--<p class="food-price">$19.99</p>--}}
                        {{--<a href="" class="add-to-cart-link">Add To Cart</a>--}}
                    {{--</div><!-- /food-order -->--}}
                {{--</div><!-- /store-item -->--}}
            {{--</div><!-- /col-md-4 -->--}}

            {{--<div class="col-md-4 col-sm-6 col-xs-12 mix" style="display: inline-block;">--}}
                {{--<div class="store-item wow fadeInDown" data-wow-delay="0.2s" style="visibility: hidden; -webkit-animation-delay: 0.2s; -webkit-animation-name: none;">--}}
                    {{--<figure>--}}
                        {{--<a href="">--}}
                            {{--<div class="store-image" style="background-image:url('/img/food15.jpg');"></div>--}}
                        {{--</a>--}}
                    {{--</figure>--}}
                    {{--<h3 class="food-name"><a href="">Grilled Meat with Fruits</a></h3>--}}
                    {{--<ul class="food-category">--}}
                        {{--<li>Local</li>--}}
                        {{--<li>Fruits</li>--}}
                        {{--<li>Meat</li>--}}
                    {{--</ul>--}}
                    {{--<div class="food-order">--}}
                        {{--<p class="food-price">$34.95</p>--}}
                        {{--<a href="" class="add-to-cart-link">Add To Cart</a>--}}
                    {{--</div><!-- /food-order -->--}}
                {{--</div><!-- /store-item -->--}}
            {{--</div><!-- /col-md-4 -->--}}

            {{--<div class="col-md-4 col-sm-6 col-xs-12 mix" style="display: inline-block;">--}}
                {{--<div class="store-item wow fadeInDown" data-wow-delay="0.4s" style="visibility: hidden; -webkit-animation-delay: 0.4s; -webkit-animation-name: none;">--}}
                    {{--<figure>--}}
                        {{--<a href="">--}}
                            {{--<div class="store-image" style="background-image:url('/img/food16.jpg');"></div>--}}
                        {{--</a>--}}
                    {{--</figure>--}}
                    {{--<h3 class="food-name"><a href="">Black Pasta with Meat</a></h3>--}}
                    {{--<ul class="food-category">--}}
                        {{--<li>Italian</li>--}}
                        {{--<li>Pasta</li>--}}
                        {{--<li>Meat</li>--}}
                    {{--</ul>--}}
                    {{--<div class="food-order">--}}
                        {{--<p class="food-price">$27.99</p>--}}
                        {{--<a href="" class="add-to-cart-link">Add To Cart</a>--}}
                    {{--</div><!-- /food-order -->--}}
                {{--</div><!-- /store-item -->--}}
            {{--</div><!-- /col-md-4 -->--}}

        </div>
    </div>
</section>


{{--<script src='http://libs.baidu.com/jquery/1.9.1/jquery.min.js'></script>--}}

<script src="/js/imagesloaded.pkgd.min.js"></script>
<script src="/js/jquery.nav.js"></script>
<script src="/js/wow.min.js"></script>
<script src="/js/main.js"></script>
<script src="/js/fly.min.js"></script>
<script src='https://rawgit.com/amibug/fly/master/src/requestAnimationFrame.js'></script>
{{--<script src='https://rawgit.com/amibug/fly/master/dist/jquery.fly.min.js'></script>--}}
<script type="text/javascript">
    $(function () {
        var cw = $('div.image-container').width();
        $('div.banner-image').css('width', cw);
        $('div.banner-image').css('height', 3 * cw / 4);

        var storecw = $('.store-item').width();
        $('.store-image').css('width', storecw);
        $('.store-image').css('height', storecw);

//        cart start
//        var itemno = $('#itemno').html();
//        $(".add-to-cart-link").click(function(event){
//            itemno++;
//            var endtop = $(window).height() * 0.25;
//            var endleft = $(window).width();
//
//            var addcar = $(this);
//            var img = addcar.parent().parent().find('.store-image').css('background-image');
//            var src = img.replace('url(','').replace(')','');
//            var flyer = $('<img class="u-flyer" src="'+src+'">');
//            flyer.fly({
//                start: {
//                    left: event.clientX, //开始位置（必填）
//                    top: event.clientY-200 //开始位置（必填）
//                },
//                end: {
//                    left: endleft, //结束位置（必填）
//                    top: endtop, //结束位置（必填）
//                    width: 0, //结束时宽度
//                    height: 0 //结束时高度
//                },
//                speed: 1,
//                onEnd: function(){ //结束回调
////                    $("#msg").show().animate({width: '250px'}, 200).fadeOut(1000); //提示信息
////                    addcar.css("cursor","default").removeClass('orange').unbind('click');
////                    this.destory(); //移除dom
//
//                    $('#itemno').html(itemno);
//                }
//            });
//        });
//        cart end
    });
</script>

</body></html>