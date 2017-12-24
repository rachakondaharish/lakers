    var Lakers = angular.module('Lakers', ["ui.router"])
    Lakers.config(function($stateProvider, $urlRouterProvider){
      
      // For any unmatched url, send to /route1
      $urlRouterProvider.otherwise("/home")
      $stateProvider
        .state('home', {
            url: "/home",
            templateUrl: "Views/home.html"
        })
      .state('inventory', {
            url: "/inventory",
            templateUrl: "Views/inventory.php"
        })
        .state('aboutus', {
            url: "/aboutus",
            templateUrl: "Views/aboutus.html"
        })
       .state('warranty', {
            url: "/warranty",
            templateUrl: "Views/warranty.html"
        })
        .state('contactus', {
            url: "/contactus",
            templateUrl: "contactform/contact.php"
        })
        .state('cars', {
            url: "/cars",
            templateUrl: "Views/cars.php"
        })
    })
