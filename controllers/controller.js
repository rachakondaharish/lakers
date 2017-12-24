    CustomerAppModule.controller('customersController', function ($scope){
            $scope.sortBy="name";
        $scope.reverse=false;
    $scope.customerFilter = {name:""}; 
    $scope.doSort = function(proname){
        //alert('called');
        $scope.sortBy=proname;
        $scope.reverse=!$scope.reverse;
    
    }
    
    $scope.customers = [
    {name:"Hari",joined:"1768-14-26",city:"newyork",orderTotal:40},
    {name:"Amy",joined:"1998-18-17",city:"Fremont",orderTotal:50},
    {name:"Gerry",joined:"2009-07-09",city:"Dallas",orderTotal:60},
    {name:"John",joined:"2000-06-14",city:"Eden",orderTotal:70}];


});
