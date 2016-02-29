// passing the two modules as dependencies of the root module
    var rootApp = angular.module('rootApp', ['myHideApp','myNoteApp','myPagination']);

    var myHideApp = angular.module('myHideApp', ['ngAnimate','ui.bootstrap']);
    myHideApp.controller('CollapseCtrl', function ($scope) {
	  $scope.isCollapsed = true;
	});

    var myNoteApp = angular.module('myNoteApp', ['ui.bootstrap']);
	myNoteApp.controller('NoteCtrl', function($scope) {
	    $scope.message = "";
	    $scope.left  = function() {return 100 - $scope.message.length;};
	    $scope.clear = function() {$scope.message = "";};
	}); 

	var myPagination = angular.module('myPagination', ['ngAnimate', 'ui.bootstrap']);
	myPagination.controller('PaginationCtrl', function ($scope, $log) {
	$scope.totalItems = 64;
	$scope.currentPage = 4;
	$scope.maxSize = 5;
	$scope.bigTotalItems = 175;
	$scope.bigCurrentPage = 1;
	});  