var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope){
        count = 0;
        $scope.data = [];
        $scope.data.firstName = "";
        $scope.data.lastName = "";
        $scope.data.cellPhone = "";
        $scope.submitForm = function(){
             $scope.data.push({firstName:$scope.firstName, lastName:$scope.lastName, cellPhone: $scope.cellPhone, index:(count++).toString()});
        };
        
        $scope.remove = function(index) {
        $scope.data.splice(index, 1);
        
    };
});
