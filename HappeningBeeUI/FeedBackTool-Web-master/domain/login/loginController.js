/**
 * Created by SMIT on 21-11-2015.
 */
'use strict';

feedbackControllers.controller('loginController', ['$scope', '$window', '$http', 'login', 'addSession',
    function ($scope, $window, $http, login, addSession) {
        $scope.myLogin = function(){

            login.get({username : $scope.username, password : $scope.password}, function(response){
                addSession.save(response,function(){
                    $window.location.href = "#/home";
                });

            });
        };
    }]);