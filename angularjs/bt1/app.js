// Muốn định nghĩa 1 Controller thì phải định nghĩa 1 module
var exampleApp = angular.module('exampleApp', []);
exampleApp.controller('ViduCtrl', function($scope) {
	$scope.a = 'Hello Word';
});

exampleApp.controller('ViduCtrl2', function($scope) {
	$scope.b = 10 + 5;
})