function init() {
    var amount = 0;
    $(".quan-input").each(function(i){
        n = $(this).val();
        m = $(this).parent().next('.price-td').children('.price').html();
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
            var ele = angular.element($event.target).siblings('.quan-input');
            old = ele.val();
            //alert(old);
            newval = Number(old) + 1;
            ele.val(newval);
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
            alert('fail');
        });
    }

    $scope.removeDish = function ($event, dish, ball) {
        requesturl = removeDishUrl;
        data = {dishId: dish.id, ball: ball};
        $http({
            method: 'POST',
            url: requesturl,
            data: $.param(data),  // pass in data as strings
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}  // set the headers so angular passing info as form data (not request payload)
        }).success(function (data, status) {
            if (ball){
                trele = angular.element($event.target).parent().parent();
                trele.fadeOut('slow');
                trele.remove();
            }
            else {
                var ele = angular.element($event.target).siblings('.quan-input');
                old = ele.val();
                //alert(old);
                newval = Number(old) - 1;
                ele.val(newval);
                //alert(ele.val());
                init();
            }
            init();

        }).error(function (data, status) {
            alert('fail');
        });
    }

    $scope.formData = {};

    $scope.submitOrder = function() {
        alert($.param($scope.formData));
        $http({
            method: 'POST',
            url: emailUrl,
            data    : $.param($scope.formData),  // pass in data as strings
            headers : { 'Content-Type': 'application/x-www-form-urlencoded' }  // set the headers so angular passing info as form data (not request payload)
        }).success(function (data, status) {
            alert(data);
        }).error(function (data, status) {
            alert(data);
        });
    }
})