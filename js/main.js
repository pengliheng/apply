//angular-route路由设置
// angular.module('routingDemoApp',['ngRoute'])
// .config(['$routeProvider', function($routeProvider){
//     $routeProvider
//     .when('/',{templateUrl:'view/home.html'})
//     .when('/second',{templateUrl:'view/second.html'})
//     .when('/third',{templateUrl:'view/third.html'})
//     .otherwise({redirectTo:'/'});
// }]);




// 如何为其添加on元素
// $("ul.nav li .slide").click(function(){
//     $('ul.nav li .title').removeClass("on"); 
//     $(this).siblings(".title").addClass("on");
// })
// $(".context-mod").click(function(){
//     $('ul.nav li').removeClass("on"); 
//     $(this).addClass("on"); 
// })


//angualr-ui-route 路由设置
angular.module('uirouterdemo', [
		'ui.router',
		'me-pageloading'
	])
.config(['$stateProvider', '$urlRouterProvider', 'mePageLoadingProvider', function($stateProvider, $urlRouterProvider, mePageLoadingProvider) {
	$stateProvider
	.state('index',{
		name: 'index',
		url: '',
		templateUrl: 'view/home.html',
		//controller: 'home',
		resolve: {
		    data: ['$q', function($q){
		        var defer = $q.defer();
		        setTimeout(function(){
		            defer.resolve('index');
		        }, 500);
		        return defer.promise;
		    }]
		}
	})
	.state('home',{
		name: 'home',
		url: '/home',
		templateUrl: 'view/home.html',
		//controller: 'home',
		resolve: {
		    data: ['$q', function($q){
		        var defer = $q.defer();
		        setTimeout(function(){
		            defer.resolve('home');
		        }, 500);
		        return defer.promise;
		    }]
		}
	})
	.state('about',{
		name: 'about',
		url: '/about',
		templateUrl: 'view/second.html',
		//controller: 'about',
		resolve: {
		    data: ['$q', function($q){
		        var defer = $q.defer();
		        setTimeout(function(){
		            defer.resolve('about');
		        }, 500);
		        return defer.promise;
		    }]
		}
	})
	.state('service',{
		name: 'service',
		url: '/service',
		templateUrl: 'view/service.html',
		//controller: 'service',
		resolve: {
		    data: ['$q', function($q){
		        var defer = $q.defer();
		        setTimeout(function(){
		            defer.resolve('service');
		        }, 500);
		        return defer.promise;
		    }]
		}
	})
	.state('serviceSystem',{
		name: 'serviceSystem',
		url: '/serviceSystem',
		templateUrl: 'view/second.html',
		//controller: 'serviceSystem',
		resolve: {
		    data: ['$q', function($q){
		        var defer = $q.defer();
		        setTimeout(function(){
		            defer.resolve('serviceSystem');
		        }, 500);
		        return defer.promise;
		    }]
		}
	})
	.state('case',{
		name: 'case',
		url: '/case',
		templateUrl: 'view/second.html',
		//controller: 'case',
		resolve: {
		    data: ['$q', function($q){
		        var defer = $q.defer();
		        setTimeout(function(){
		            defer.resolve('case');
		        }, 500);
		        return defer.promise;
		    }]
		}
	})
	.state('contact',{
		name: 'contact',
		url: '/contact',
		templateUrl: 'view/second.html',
		//controller: 'contact',
		resolve: {
		    data: ['$q', function($q){
		        var defer = $q.defer();
		        setTimeout(function(){
		            defer.resolve('contact');
		        }, 500);
		        return defer.promise;
		    }]
		}
	})
	.state('brand',{
		name: 'brand',
		url: '/brand',
		templateUrl: 'view/third.html',
		//controller: 'brand',
		resolve: {
		    data: ['$q', function($q){
		        var defer = $q.defer();
		        setTimeout(function(){
		            defer.resolve('brand');
		        }, 500);
		        return defer.promise;
		    }]
		}
	})
	.state('logo',{
		name: 'logo',
		url: '/logo',
		templateUrl: 'view/third.html',
		//controller: 'logo',
		resolve: {
		    data: ['$q', function($q){
		        var defer = $q.defer();
		        setTimeout(function(){
		            defer.resolve('logo');
		        }, 500);
		        return defer.promise;
		    }]
		}
	})
	.state('brochure',{
		name: 'brochure',
		url: '/brochure',
		templateUrl: 'view/third.html',
		//controller: 'brochure',
		resolve: {
		    data: ['$q', function($q){
		        var defer = $q.defer();
		        setTimeout(function(){
		            defer.resolve('brochure');
		        }, 500);
		        return defer.promise;
		    }]
		}
	})
	.state('package',{
		name: 'package',
		url: '/package',
		templateUrl: 'view/third.html',
		//controller: 'package',
		resolve: {
		    data: ['$q', function($q){
		        var defer = $q.defer();
		        setTimeout(function(){
		            defer.resolve('package');
		        }, 500);
		        return defer.promise;
		    }]
		}
	});
	$urlRouterProvider.otherwise('/home');
}])




