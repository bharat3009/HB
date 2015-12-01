/**
 * Created by SMIT on 23-11-2015.
 */
'use strict';

feedbackControllers.controller('homeController', ['$scope', '$window', '$http', 'getSession', 'fileUploadsAndComments',
    function ($scope, $window, $http, getSession, fileUploadsAndComments) {
        $scope.userId = "";

        getSession.get(function (response) {
            $scope.userId = response.data.userId;

        });
        $('body').on('click', '#submitClick', function (e) {
            e.preventDefault();
            var formData = new FormData($(this).parents('form')[0]);
            $.ajax({
                url: 'phpLibrary/uploadImages.php',
                type: 'POST',
                xhr: function () {
                    var myXhr = $.ajaxSettings.xhr();
                    return myXhr;
                },
                success: function (data) {
                    var obj = JSON.parse(data);
                    var filePath = obj.path;

                    fileUploadsAndComments.save({
                        filePath: filePath,
                        comments: $scope.commentsData,
                        userId: $scope.userId
                    }, function () {
                        $window.location.href = "#/comments";
                    });

                },
                error: function (data) {
                    alert("Error");
                },
                data: formData,
                cache: false,
                contentType: false,
                processData: false
            });

            return false;
        });
    }]);