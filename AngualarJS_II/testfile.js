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
        expect($scope.contacts.name[0]).toBe("Michael");
        
        $scope.newcontact.name= "leonard";
        $scope.newcontact.email = "leonard@gmail.com";
        $scope.newcontact.phone = "0711390664";
        
       expect($scope.saveContact()).toBe(true);
       
       expect($scope.delete(0)).toBe(true);
    });
    });
