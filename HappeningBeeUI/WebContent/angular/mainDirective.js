/**
 * Created by SMIT on 21-11-2015.
 */

feedbackApp.directive('feedbackHeader', function () {
    return {
        restrict: 'E',
        templateUrl: 'domainLibrary/header.php',
        scope:{
        },
        controller: ['$scope', '$window', 'getSession', 'removeSession',
            function ($scope, $window, getSession, removeSession) {
                $scope.userId = "";
                getSession.get(function (response) {
                    $scope.userProfile = true;
                    if (response.SESSION != "NOSESSION") {
                        $scope.userId = response.data.userId;
                        $scope.userName = response.data.userName;
                        if ($scope.userId != null) {

                        } else {

                        }
                    }
                    else {
                    }

                });

                $scope.logout = function () {
                    removeSession.save(function () {
                        $scope.userId = "";
                        $window.location.href = "#/login";
                    });
                };
            }
        ]
    }
});

feedbackApp.directive('feedbackFooter', function(){
    return{
        restrict: 'E',
        templateUrl: 'domainLibrary/footer.php'
    }
});