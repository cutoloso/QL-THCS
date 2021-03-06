<!DOCTYPE html>
<html ng-app="my-app">

  <head>
    <link data-require="bootstrap-css@*" data-semver="3.3.1" rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />
    <script data-require="angular.js@*" data-semver="1.3.15" src="https://code.angularjs.org/1.3.15/angular.js"></script>
    <script data-require="ui-bootstrap@*" data-semver="0.12.1" src="http://angular-ui.github.io/bootstrap/ui-bootstrap-tpls-0.12.1.min.js"></script>
    <link rel="stylesheet" href="style.css" />
    <script type="text/javaScript" src="{{asset('app/app.js')}}"></script>
    <script src="{{asset('app/script.js')}}"></script>

  </head>

  <body ng-controller="TodoController">
    <h1>Todos</h1>
    <h4><% todos.length %> total</h4>
    <ul>
      <li ng-repeat="todo in filteredTodos"><% todo.text %></li>
    </ul>
    <pagination 
      ng-model="currentPage"
      total-items="todos.length"
      max-size="maxSize"  
      boundary-links="true">
    </pagination>
  </body>

</html>
