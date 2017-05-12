//angular路由设置
angular.module('routingDemoApp',['ngRoute'])
.config(['$routeProvider', function($routeProvider){
    $routeProvider
    .when('/',{templateUrl:'home.html'})
    .when('/second',{templateUrl:'second.html'})
    .when('/third',{templateUrl:'third.html'})
    .otherwise({redirectTo:'/'});
}]);


$("ul.nav li").click(function(){
    $('ul.nav li').removeClass("on"); 
    $(this).addClass("on"); 
})

var url = top.location.href;

var urlMsg = url.split("=")[1];

console.log(urlMsg)

