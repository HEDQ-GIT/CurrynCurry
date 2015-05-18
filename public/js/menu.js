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

            $('#itemno').html(itemno);
            //        this.destory(); //移除dom
        }
    });

}

var app = angular.module('app', []);

app.controller('MainCtrl', function ($scope, $http) {
    $scope.addToCart = function (dish) {
        imgUrl = '/img/' + dish.imgUrl;
        flyInCart(imgUrl);
        requesturl = addDishUrl;
        data = {dishId: dish.id};
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


    //$http({
    //    method: 'POST',
    //    url: 'prepareorder'
    //}).success(function (data, status) {
    //    $scope.dishes = data;
    //}).error(function (data, status) {
    //    alert('fail');
    //});

    $scope.removeDish = function ($event, dish) {
        requesturl = removeDishUrl;
        data = {dishId: dish.id};
        $http({
            method: 'POST',
            url: requesturl,
            data: $.param(data),  // pass in data as strings
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}  // set the headers so angular passing info as form data (not request payload)
        }).success(function (data, status) {
            //alert(data);
            trele = angular.element($event.target).parent().parent();
            trele.fadeOut('slow');
        }).error(function (data, status) {
            alert('fail');
        });
    }

})