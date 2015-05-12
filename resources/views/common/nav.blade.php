<link rel="stylesheet" href="/fa/css/font-awesome.min.css">
<link rel="stylesheet" href="/css/wheelmenu.css">

<style>
    #toggle-menu {
        position: absolute;
        top: 1%;
        right: 4%;
        z-index: 999 !important;

        color: #F8E8D8;
        background-color: #B2A092;

        padding: 10px 15px;
    }

    #toggle-menu:hover {
        text-decoration: none;
        color: #000000;
        background-color: #F9E9D9;
    }

    #wheel {
        padding: 30px;
    }
    .wheel li a{
        background: #F9E9D9;
        font-family: 'Cookie';
        font-weight: bold;
        font-size: 1.8em;
        padding: 5px;
        text-align: center;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.25), inset 0 1px 1px rgba(255, 255, 255, 0.5);
        -moz-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.25), inset 0 1px 1px rgba(255, 255, 255, 0.5);
        -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.25), inset 0 1px 1px rgba(255, 255, 255, 0.5);
        color: #8E4535;
        -moz-transition: all 0.25s ease;
        -webkit-transition: all 0.25s ease;
        -o-transition: all 0.25s ease;
        transition: all 0.25s ease;
    }

    .wheel li a:hover {
        background: #ffffff;
        text-decoration: none;
    }
</style>
<script src="/js/jquery.wheelmenu.min.js"></script>

<script>
    $(function () {

        $(".wheel-button").wheelmenu({
            trigger: "hover",
            animation: "fly",
            animationSpeed: "fast"
        });
    })
</script>

<a id="toggle-menu" class="fa fa-bars fa-4x wheel-button" href="#wheel"></a>
<ul id="wheel" data-angle="SW" class="wheel">
    <li class="item"><a href="{{url('contact')}}">Contact</a></li>
    <li class="item"><a href="{{url('order')}}">Order</a></li>
    <li class="item"><a href="{{url('menu')}}">Menu</a></li>
    <li class="item"><a href="{{url('/')}}">Home</a></li>
</ul>