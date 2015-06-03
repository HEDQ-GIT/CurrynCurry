<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Curry and Curry</title>
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="/css/contact.css" />

    <script src="/js/jquery-2.1.1.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>
    <script>
        $(function () {
            $('#slide-menu-btn').click(function(){
                $('body').toggleClass('menu-active');
            });

            var cw = $('#map-canvas').width();
            $('#map-canvas').css('height', 1 * cw / 2);
        });

        function initialize() {
            var mapOptions = {
                zoom: 16,
                center: new google.maps.LatLng(1.35852,103.884676)
            }
            var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

            var image = '/img/pin.png';
            var myLatLng = new google.maps.LatLng(1.35852,103.884676);
            var beachMarker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                icon: image
            });
        }

        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
</head>
<body>
@include('common.nav')

<section id="summary">
    <h1>Want to know more?</h1>
    <p class="subheader">
        We are available to discuss your requirement.
    </p>
</section>

<div id="map-canvas"></div>

<section id="contact-sec" class="row">
    <div id="contact-form" class="col-sm-8 col-md-8 col-lg-8">
        <h2 id="form-tilte">Contact us</h2>
        <p>We’re happy to answer any questions you have or provide you with an estimate. Just send us a message in the form below.</p>
        <form>
            <div class="form-group">
                <label for="form-name">Your name:</label>
                <input id="form-name" type="text" name="name" class="form-control" placeholder="Your name">
            </div>

            <div class="form-group">
                <label for="form-email">Password:</label>
                <input id="form-email" type="email" name="email" class="form-control" placeholder="Email">
            </div>

            <div class="form-group">
                <label for="form-title">Title:</label>
                <input id="form-title" type="text" name="title" class="form-control" placeholder="title">
            </div>

            <div class="form-group">
                <label for="message">Message:</label>
                <textarea id="message" class="form-control" name="message" rows="4" placeholder="Message"></textarea>
            </div>

            <button id="send-btn" class="btn btn-success">Send</button>
        </form>
    </div>
    <div id="contact-info" class="col-sm-4 col-md-4 col-lg-4">
        <div id="email">
            <p class="info-title">EMAIL</p>
            <p class="info-content">curryncurrysg@yahoo.com</p>
        </div>

        <div id="phone">
            <p class="info-title">PHONE</p>
            <p class="info-content">+65 81219561</p>
        </div>

        <div id="addr">
            <p class="info-title">ADDRESS</p>
            <p class="info-content">Block 203 HouGang Street 21 #01-45 <br/> Singapore 530203</p>
        </div>
    </div>
</section>
</body>
</html>
