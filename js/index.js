angular.module('routingDemoApp',['ngRoute'])
.config(['$routeProvider', function($routeProvider){
    $routeProvider
    .when('/',{templateUrl:'/'})
    .when('/index-2',{templateUrl:'/index-2.html'})
    .when('/index-3',{templateUrl:'/index-3.html'})
    .otherwise({redirectTo:'/'});
}]);