describe("app", function(){
    var $scope;
    var cntl;
    
    beforeEach(function() {
        module('app');
        
        inject(function($rootScope, $controller){
            $scope = $rootScope.$new();
            cntl = $controller("myCtrl", {$scope: $scope});
        });
    });
    it("pass the test", function(){
        $scope.firsName= "michael";
        $scope.lastName = "wamae";
        
        expect($scope.fullName()).toBe("michaelwamae");
    });
    });