//angular-route路由设置
// angular.module('routingDemoApp',['ngRoute'])
// .config(['$routeProvider', function($routeProvider){
//     $routeProvider
//     .when('/',{templateUrl:'view/home.html'})
//     .when('/second',{templateUrl:'view/second.html'})
//     .when('/third',{templateUrl:'view/third.html'})
//     .otherwise({redirectTo:'/'});
// }]);



//angualr-ui-route 路由设置
angular.module('uirouterdemo', ['ui.router'])
.config(function($stateProvider) {
	var homeState = {
		name: 'home',
		url: '',
		templateUrl: 'view/home.html'
	}

	var secondState = {
		name: 'second',
		url: '/second',
		templateUrl: 'view/second.html'
	}

	var thirdState = {
		name: 'third',
		url: '/third',
		templateUrl: 'view/third.html'
	}

	$stateProvider.state(homeState);
	$stateProvider.state(secondState);
	$stateProvider.state(thirdState);
})










$("ul.nav li").click(function(){
    $('ul.nav li').removeClass("on"); 
    $(this).addClass("on"); 
})
$(".context-mod").click(function(){
    $('ul.nav li').removeClass("on"); 
    $(this).addClass("on"); 
})
