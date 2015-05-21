var module = angular.module("myApp", []);

module.controller('theController', function ($scope, $http) {
    $scope.firstName="Michael";
    $scope.lastName="";
    
    
    $scope.contacts={};
    var data= $http.get("main.json").
    success(function(response,status,headers,config){
        $scope.contacts =response.details;
        }).
    error(function(response,status, headers, config){
        alert(response+" : "+status);
        });
    
   $scope.sendData= function(){
    $http.post('main.json', { "details.firstName" : $scope.firstName, 'details.lastName':$scope.lastName, 'details.email':$scope.email, 'details.telephone':$scope.telephone }).
   success(function(response,status,headers,config){
        alert("pass  "+response.details.firstName[0]);
        alert($scope.firstName);
    }).
   error(function(response,status,headers,config){
        alert("pass  "+response.firstName);
    });
   };

});