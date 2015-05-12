<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Curry and Curry</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/bootstrap.min.css" media="all">
    <link rel="stylesheet" href="/css/order.css" media="all">
    <link href="/css/bootstrap-datetimepicker.min.css" rel="stylesheet">

    <script src="/js/jquery-2.1.1.min.js"></script>
    <script src="/js/moment.js" type="text/javascript"></script>
    <script src="/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="/js/jquery.validate.min.js" type="text/javascript"></script>
    <script>
        $(function(){
            $('.date-wraper').datetimepicker();

            $("#order-form").validate({
                ignore:':hidden',
                rules: {
                    name:{
                        minlength: 3,
                        maxlength: 30,
                        required:true
                    },
                    phone:{
                        required:true,
                        digits: true
                    },
                    consumeTime:{
                        required: true,
                        date: true,
                        largerToday: true
                    }
                },
                highlight: function (element) {
                    $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
                },
                unhighlight: function (element) {
                    $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
                },
                submitHandler: function(form) {

                }
            });

            $.validator.addMethod("largerToday", function(value, element) {
                return new Date() <= Date.parse(value) || value == "";
            }, "The date must be after today");
        });
    </script>
</head>
<body>
@include('common.nav')

<form id="order-form">
    <div class="form-group">
        <div class="form-label">
            <label for="consume-time">Consuming time:</label>
        </div>
        <div class="date-wraper form-input">
            <input type="text" id="consume-time" class="form-control" name="consumeTime" placeholder="Consuming time" value="" data-date-format="YYYY-MM-DD HH:MM:SS">
        </div>
    </div>
    <div class="form-group">
        <div class="form-label">
            <label for="name">Your name:</label>
        </div>
        <div class="name-wraper form-input">
            <input type="text" id="name" class="form-control" name="name" placeholder="Your name">
        </div>
    </div>
    <div class="form-group">
        <div class="form-label">
            <label for="phone">Phone:</label>
        </div>
        <div class="name-wraper form-input">
            <input type="text" id="phone" class="form-control" name="phone" placeholder="Your phone ">
        </div>
    </div>
</form>
<div id="order-tb">
    <table class="table table-striped">
        <thead>
        <tr class="row">
            <th>#</th>
            <th>Food</th>
            <th>Available</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>State</th>
            <th>Remove</th>
        </tr>
        </thead>
        <tbody>
        <tr class="row">
            <th class="col-xs-1 col-sm-1 col-md-1 col-lg-1" scope="row">1</th>
            <td class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <div class="food-wraper row">
                    <img class="image col-sm-4 col-md-4 col-lg-4" src="/img/food2.jpg" alt="Curry chicken with chesse"/>
                    <div class="summary col-sm-8 col-md-8 col-lg-8">
                        <h5 class="title">Curry fish head</h5>
                        <p class="content">It will not be possible for the Singapore Armed Forces (SAF) to be a modern integrated force today</p>
                    </div>
                </div>
            </td>
            <td class="col-xs-1 col-sm-1 col-md-1 col-lg-1"><span class="avail-sign glyphicon glyphicon-ok-sign"></span></td>
            <td class="col-xs-1 col-sm-1 col-md-1 col-lg-1"><input class="quan-input form-control" type="text" value="3"></input></td>
            <td class="col-xs-1 col-sm-1 col-md-1 col-lg-1">S$32</td>
            <td class="col-xs-1 col-sm-1 col-md-1 col-lg-1">New</td>
            <td class="col-xs-2 col-sm-2 col-md-2 col-lg-2"><a class="btn btn-warning">Remove</a></td>
        </tr>

        <tr class="row">
            <th class="col-xs-1 col-sm-1 col-md-1 col-lg-1" scope="row">2</th>
            <td class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <div class="food-wraper row">
                    <img class="image col-sm-4 col-md-4 col-lg-4" src="/img/food2.jpg" alt="Curry chicken with chesse"/>
                    <div class="summary col-sm-8 col-md-8 col-lg-8">
                        <h5 class="title">Curry fish head</h5>
                        <p class="content">It will not be possible for the Singapore Armed Forces (SAF) to be a modern integrated force today</p>
                    </div>
                </div>
            </td>
            <td class="col-xs-1 col-sm-1 col-md-1 col-lg-1"><span class="avail-sign glyphicon glyphicon-ok-sign"></span></td>
            <td class="col-xs-1 col-sm-1 col-md-1 col-lg-1"><input class="quan-input form-control" type="text" value="3"></input></td>
            <td class="col-xs-1 col-sm-1 col-md-1 col-lg-1">S$32</td>
            <td class="col-xs-1 col-sm-1 col-md-1 col-lg-1">Received</td>
            <td class="col-xs-2 col-sm-2 col-md-2 col-lg-2"><a class="btn btn-warning">Remove</a></td>
        </tr>

        <tr class="row">
            <th class="col-xs-1 col-sm-1 col-md-1 col-lg-1" scope="row">3</th>
            <td class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <div class="food-wraper row">
                    <img class="image col-sm-4 col-md-4 col-lg-4" src="/img/food2.jpg" alt="Curry chicken with chesse"/>
                    <div class="summary col-sm-8 col-md-8 col-lg-8">
                        <h5 class="title">Curry fish head</h5>
                        <p class="content">It will not be possible for the Singapore Armed Forces (SAF) to be a modern integrated force today</p>
                    </div>
                </div>
            </td>
            <td class="col-xs-1 col-sm-1 col-md-1 col-lg-1"><span class="avail-sign glyphicon glyphicon-ok-sign"></span></td>
            <td class="col-xs-1 col-sm-1 col-md-1 col-lg-1"><input class="quan-input form-control" type="text" value="3"></input></td>
            <td class="col-xs-1 col-sm-1 col-md-1 col-lg-1">S$32</td>
            <td class="col-xs-1 col-sm-1 col-md-1 col-lg-1">Sent</td>
            <td class="col-xs-2 col-sm-2 col-md-2 col-lg-2"><a class="btn btn-warning">Remove</a></td>
        </tr>

        <tr class="row">
            <th class="col-xs-1 col-sm-1 col-md-1 col-lg-1" scope="row">4</th>
            <td class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <div class="food-wraper row">
                    <img class="image col-sm-4 col-md-4 col-lg-4" src="/img/food2.jpg" alt="Curry chicken with chesse"/>
                    <div class="summary col-sm-8 col-md-8 col-lg-8">
                        <h5 class="title">Curry fish head</h5>
                        <p class="content">It will not be possible for the Singapore Armed Forces (SAF) to be a modern integrated force today</p>
                    </div>
                </div>
            </td>
            <td class="col-xs-1 col-sm-1 col-md-1 col-lg-1"><span class="avail-sign glyphicon glyphicon-ok-sign"></span></td>
            <td class="col-xs-1 col-sm-1 col-md-1 col-lg-1"><input class="quan-input form-control" type="text" value="3"></input></td>
            <td class="col-xs-1 col-sm-1 col-md-1 col-lg-1">S$32</td>
            <td class="col-xs-1 col-sm-1 col-md-1 col-lg-1">Ready</td>
            <td class="col-xs-2 col-sm-2 col-md-2 col-lg-2"><a class="btn btn-warning">Remove</a></td>
        </tr>
        </tbody>
    </table>

    <div id="tb-footer">
        <p class="total"><span>Total:&nbsp;&nbsp;</span>S$ 100.40</p>
        <a class="send btn btn-success">Send new orders</a>
    </div>

    <nav class="pager-nav">
        <ul class="pagination">
            <li class=" active "><a href="#">1</a></li>
        </ul>
    </nav>
</div>
<div class="copy">© 2014 Restaurant Curry &amp; Curry<br>Designed by <a id="designby-link">Ekoo Lab</a></div>

<script src="/js/bootstrap-datetimepicker.js" type="text/javascript"></script>
</body>
</html>