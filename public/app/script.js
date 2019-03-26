// var app = angular.module('my-app',[],function($interpolateProvider){
//   $interpolateProvider.startSymbol('<%');
//   $interpolateProvider.endSymbol('%>');
// }).constant('URL_Main', 'http://localhost/QL-THCS/public/quan-tri/');
app.controller('TodoController',function($scope,$http,URL_Main){
   $scope.filteredTodos = []
  ,$scope.currentPage = 1
  ,$scope.numPerPage = 10
  ,$scope.maxSize = 5;
  
  $scope.makeTodos = function() {
    $scope.todos = [];
    for (i=1;i<=1000;i++) {
      $scope.todos.push({ text:'todo '+i, done:false});
    }
  };
  $scope.makeTodos(); 
  
  $scope.$watch('currentPage + numPerPage', function() {
    var begin = (($scope.currentPage - 1) * $scope.numPerPage)
    , end = begin + $scope.numPerPage;
    
    $scope.filteredTodos = $scope.todos.slice(begin, end);
  });
});

