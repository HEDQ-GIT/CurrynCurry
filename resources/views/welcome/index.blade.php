<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
		<link rel="shortcut icon" href="http://gourmet.arenaofthemes.com/favicon.ico">

		<title>Curry & Curry</title>

		<link href="fonts/css" rel="stylesheet" type="text/css">
		{{--<link rel="stylesheet" href="http://www.cssvillain.com/hungry/css/animate.mod.min.css" media="all">--}}
		<link rel="stylesheet" href="/css/bootstrap.min.css">
		<link rel="stylesheet" href="/css/index.css" media="all">
		<link rel="stylesheet" href="/css/animate.css">
		{{--<link rel="stylesheet" href="/css/wheelmenu.css">--}}
		{{--<link rel="stylesheet" href="/fa/css/font-awesome.min.css">--}}


		<script src="/js/jquery-2.1.1.min.js"></script>
		<script src="/js/responsiveslides.min.js"></script>
		{{--<script src="/js/jquery.wheelmenu.min.js"></script>--}}

		<script type="text/javascript">
        $(function () {
            $(".rslides").responsiveSlides({
				   speed: 2000
				});

			    var cw = $('div.food').width();
			    $('div.food-img').css('width', cw - 30);
				$('div.food-img').css('height', 3 * cw / 4);

				new WOW().init();

//				$(".wheel-button").wheelmenu({
//					trigger: "hover",
//					animation: "fly",
//					animationSpeed: "fast"
//				});
		    });
		</script>
	</head>

	<body>
	{{--nav start--}}
	{{--<a id="toggle-menu" class="fa fa-bars fa-4x wheel-button" href="#wheel"></a>--}}
	{{--<ul id="wheel" data-angle="SW" class="wheel">--}}
		{{--<li class="item"><a href="">Contact</a></li>--}}
		{{--<li class="item"><a href="">Order</a></li>--}}
		{{--<li class="item"><a href="">Menu</a></li>--}}
		{{--<li class="item"><a href="">Home</a></li>--}}
	{{--</ul>--}}
	{{--nav end--}}

	@include('common.nav')
		<section id="slider">
			<div class="single-page-header-text">
				<div class="tlt">
					<ul class="header-texts" style="display: none;">
						<li class="current">Dine with us!</li>
						<li class="">Try the Wine!</li>
						<li class="">Bring the Family!</li>
						<li class="">Enjoy our Food!</li>
						<li class="">Have a Great Time!</li>
					</ul>
				</div>
			</div>

			<ul id="slider" class="rslides">
		        <li>
		        	<div class="image" style="background-image: url('/img/slider1_bg.jpg');"/>
		        </li>
		        <li>
		        	<div class="image" style="background-image: url('/img/slider2_bg.jpg');"/>
		        </li>
		        <li>
		        	<div class="image" style="background-image: url('/img/slider3_bg.jpg');"/>
		        </li>
		    </ul>
		</section>

		<section id="story" class="row wow fadeInDown">
            <img id="story-img" class="col-lg-4 col-md-4 col-sm-4" src="/img/herb.jpg" alt="">
            <div id="story-content" class="col-lg-8 col-md-8 col-sm-8">
                <h1>Restaurant Story</h1>
                <p>No one would have believed in the last years of the nine-teenth century that this world was
                being watched keenly and closely by intelligences greater than man’s and yet as mor- tal as his own;
                that as men busied themselves about their vari- ous concerns they were scrutinised and studied,
                perhaps al- most as narrowly as a man with a microscope might scrutinise the transient creatures that
                swarm and multiply in a drop of water.With infinite complacency men went to and fro over this
                globe about their little affairs, serene in their assurance of their empire over matter.
It is possible that the infusoria under the microscope do the same. No one gave a thought to the older.
                </p>
            </div>
        </section>

        <section id="saying" class="row wow fadeInDown">
        	 <div id="saying-content" class="col-lg-8 col-md-8 col-sm-8">
                <p class="symbol-1"></p>
                <p>
We needed a new Singapore web developer for our website and didn’t want an in-house development
(as it gave major challenges in updating the website). We compare a couple of website developers
	                on cost and example sites and FutureWorkz scored well on both!
                <span class="symbol-2"></span>
                </p>
                <p id="author">Peter Kloprogge - CEO at PointLogic</p>
            </div>
            <img id="saying-peo" class="col-lg-4 col-md-4 col-sm-4" src="/img/avatar.png" alt="">
        </section>

        <section id="food-gallery">
        	<h1>Dishes for You to Try</h1>
        	<div class="row">
        		<div class="food col-lg-4 col-md-4 col-sm-4 wow fadeInDown">
        			<figure class="effect-chico">
						<div class="food-img" style="background-image: url('/img/food1.jpg');" alt="img15"></div>
						<figcaption>
							<h2>Curry <span>Fish</span></h2>
							<p>Chico's main fear was missing the morning bus.</p>
							<a href="#">View more</a>
						</figcaption>
					</figure>
				</div>
				<div class="food col-lg-4 col-md-4 col-sm-4 wow fadeInDown" data-wow-delay="0.2s">
					<figure class="effect-chico">
						<div class="food-img" style="background-image: url('/img/food2.jpg');" alt="img15"></div>
						<figcaption>
							<h2>Curry <span>Fish</span></h2>
							<p>Chico's main fear was missing the morning bus.</p>
							<a href="#">View more</a>
						</figcaption>
					</figure>
        		</div>
        		<div class="food col-lg-4 col-md-4 col-sm-4 wow fadeInDown" data-wow-delay="0.4s">
					<figure class="effect-chico">
						<div class="food-img" style="background-image: url('/img/food3.jpg');" alt="img15"></div>
						<figcaption>
							<h2>Curry <span>Fish</span></h2>
							<p>Chico's main fear was missing the morning bus.</p>
							<a href="#">View more</a>
						</figcaption>
					</figure>
        		</div>
        		<div class="food col-lg-4 col-md-4 col-sm-4 wow fadeInDown">
					<figure class="effect-chico">
						<div class="food-img" style="background-image: url('/img/food4.jpg');" alt="img15"></div>
						<figcaption>
							<h2>Curry <span>Fish</span></h2>
							<p>Chico's main fear was missing the morning bus.</p>
							<a href="#">View more</a>
						</figcaption>
					</figure>
        		</div>
        		<div class="food col-lg-4 col-md-4 col-sm-4 wow fadeInDown" data-wow-delay="0.2s">
					<figure class="effect-chico">
						<div class="food-img" style="background-image: url('/img/food5.png');" alt="img15"></div>
						<figcaption>
							<h2>Curry <span>Fish</span></h2>
							<p>Chico's main fear was missing the morning bus.</p>
							<a href="#">View more</a>
						</figcaption>
					</figure>
        		</div>
        		<div class="food col-lg-4 col-md-4 col-sm-4 wow fadeInDown" data-wow-delay="0.4s">
					<figure class="effect-chico">
						<div class="food-img" style="background-image: url('/img/food6.jpg');" alt="img15"></div>
						<figcaption>
							<h2>Curry <span>Fish</span></h2>
							<p>Chico's main fear was missing the morning bus.</p>
							<a href="#">View more</a>
						</figcaption>
					</figure>
        		</div>
        	</div>
        </section>

        <section id="contact">
	        <div class="row">
	            <div class="col-md-8  col-md-offset-2" id="contact-us">
	                <h1 class="wow zoomIn">Pleasure with Curry & Curry, SG</h1>

	                <p>Feel free to contact us with any questions, to provide some feedback or if you just want to say
	                    hello!</p>

	                <p><a href="">contact@tanglong.com</a></p>

<ul class="list-inline banner-social-buttons">
    <li><a href="" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="">TWITTER</span></a></li>
    <li><a class="btn btn-default btn-lg"><i class="fa fa-facebook fa-fw"></i> <span class="">FACEBOOK</span></a></li>
</ul>
<div class="copy">© 2014 Restaurant Curry & Curry<br/>Designed by <a id="designby-link">Ekoo Lab</a></div>
</div>
</div>
</section>

<script type="text/javascript" src="js/jquery-main.js"></script>
<script type="text/javascript" src="js/jquery-custom.js"></script>
<script src="js/wow.min.js"></script>
</body>

</html>