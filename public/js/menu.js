function init() {
    var amount = 0;
    $(".quan-input").each(function(i){
        n = $(this).html();
        m = $(this).parent().parent().next('.price-td').children('.price').html();
        //alert(m);
        amount += n*m;
    });
    $('#amount').html(amount.toFixed(2));
}

$(function() {
    init();
    $('.quan-input').change( function() {
        init();

    });
})

function flyInCart(imgUrl) {
    var endtop = $(window).height() * 0.25;
    var endleft = $(window).width();

    //var addcar = $(this);
    //var img = addcar.parent().parent().find('.store-image').css('background-image');
    //var src = img.replace('url(','').replace(')','');
    var flyer = $('<img class="u-flyer" src="' + imgUrl + '">');
    flyer.fly({
        start: {
            left: event.clientX, //开始位置（必填）
            top: event.clientY - 200 //开始位置（必填）
        },
        end: {
            left: endleft, //结束位置（必填）
            top: endtop, //结束位置（必填）
            width: 0, //结束时宽度
            height: 0 //结束时高度
        },
        speed: 1,
        onEnd: function () { //结束回调
//                    $("#msg").show().animate({width: '250px'}, 200).fadeOut(1000); //提示信息
//                    addcar.css("cursor","default").removeClass('orange').unbind('click');
            old = $('#itemno').html();
            itemno = Number(old)+1;
            $('#itemno').html(itemno);
            //        this.destory(); //移除dom
        }
    });
}

var app = angular.module('app', []);

app.controller('MainCtrl', function ($scope, $http) {
    $scope.addToCart = function ($event, dish, bfly) {
        if (bfly) {
            imgUrl = '/img/' + dish.imgUrl;
            flyInCart(imgUrl);
        }
        else {
            var ele = angular.element($event.target).parent().siblings('.quan-input');
            old = ele.html();
            //alert(old);
            newval = Number(old) + 1;
            ele.html(newval);
            //alert(ele.val());
            init();
        }
        requesturl = addToCartishUrl;
        data = {dishId: dish.id};
        //alert(data);
        $http({
            method: 'POST',
            url: requesturl,
            data: $.param(data),  // pass in data as strings
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}  // set the headers so angular passing info as form data (not request payload)
        }).success(function (data, status) {
            //alert(data);
        }).error(function (data, status) {
            //alert('fail');
        });
    }

    $scope.removeDish = function ($event, dish, ball) {
        if (ball){
            trele = angular.element($event.target).parent().parent();
            trele.fadeOut(1000);
            trele.remove();
        }
        else {
            var ele = angular.element($event.target).parent().siblings('.quan-input');
            old = ele.html();
            //alert(old);
            newval = Number(old) - 1;
            if (newval == 0) {
                trele = angular.element($event.target).parent().parent().parent().parent();
                trele.fadeOut(1000);
                trele.remove();
            }
            else
                ele.html(newval);
            //alert(ele.val());
            //init();
        }
        init();

        requesturl = removeDishUrl;
        data = {dishId: dish.id, ball: ball};
        $http({
            method: 'POST',
            url: requesturl,
            data: $.param(data),  // pass in data as strings
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}  // set the headers so angular passing info as form data (not request payload)
        }).success(function (data, status) {
            //if (ball){
            //    trele = angular.element($event.target).parent().parent();
            //    trele.fadeOut('slow');
            //    trele.remove();
            //}
            //else {
            //    var ele = angular.element($event.target).parent().siblings('.quan-input');
            //    old = ele.html();
            //    //alert(old);
            //    newval = Number(old) - 1;
            //    ele.html(newval);
            //    //alert(ele.val());
            //    init();
            //}

        }).error(function (data, status) {
            //alert('fail');
        });
    }

    $scope.formData = {};

    $scope.submitOrder = function() {
        $('#order-form').submit();
        if (bSubmit == false) {
            return;
        }
        consumeTime = $('#consume-time').val();
        $scope.formData.consumeTime = consumeTime;
        //if (($scope.formData.consumeTime == null) || ($scope.formData.name == null) || ($scope.formData.phone == null)) {
        //    alert('fill');
        //    return;
        //}

        amount = $('#amount').html();
        $scope.formData.amount = amount;
        //alert($.param($scope.formData));
        var msg = "";
        //alert(msg);
        $http({
            method: 'POST',
            url: emailUrl,
            data    : $.param($scope.formData),  // pass in data as strings
            headers : { 'Content-Type': 'application/x-www-form-urlencoded' }  // set the headers so angular passing info as form data (not request payload)
        }).success(function (data, status) {
            //alert(data);
            $http({
                method: 'GET',
                url: "https://api.clicksend.com/http/v2/send.php?method=rest&username=niu2yue@gmail.com&key=D2B4BAEC-E688-CE09-A906-15FE86367A8B&to=+6590121194&senderid=ekoolab&message=" + data,
                //data    : $.param($scope.formData),  // pass in data as strings
                headers : { 'Content-Type': 'application/x-www-form-urlencoded' }  // set the headers so angular passing info as form data (not request payload)
            }).success(function (data, status){
                //alert(data);
            }).error(function (data, status) {
                //alert(data);
            });
        }).error(function (data, status) {
            //alert(data);
        });
        alert("We are waiting for you!");
    }
})