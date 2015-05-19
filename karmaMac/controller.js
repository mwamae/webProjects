var app = angular.module ('app', []);
app.controller('myCtrl', function($scope) {
    $scope.firstName = "Michael Alex";
    $scope.lastName = "Wamae";
     $scope.fullName = function() {
        return $scope.firstName+$scope.lastName;
    }
});
