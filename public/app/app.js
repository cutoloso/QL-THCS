var app = angular.module('my-app',[],function($interpolateProvider){
	$interpolateProvider.startSymbol('<%');
	$interpolateProvider.endSymbol('%>');
}).constant('URL_Main', 'http://localhost/QL-THCS/public/quan-tri/');

// var app = angular.module('my-app',[],function($interpolateProvider){
// 	$interpolateProvider.startSymbol('<%');
// 	$interpolateProvider.endSymbol('%>');
// }).constant('URL_Main', 'http://192.168.1.25:1000/quan-tri/');