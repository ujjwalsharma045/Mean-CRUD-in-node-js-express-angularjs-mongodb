<html>
  <head>
     <script src="//code.angularjs.org/1.2.20/angular.js"></script>
	 <script src="//code.angularjs.org/1.2.20/angular-route.js"></script>
	 <script src="//code.angularjs.org/1.2.13/angular-cookies.js"></script>
	 <script src="js/angular-local-storage.min.js"></script>
	 <!-- <script src="js/angular-ckeditor.js"></script>
	 <script src="js/angular-ckeditor.min.js"></script> -->	 
	 <!-- <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/angular-i18n/1.4.6/angular-locale_es.js"></script> -->
	 
     <script type="text/javascript" src="js/angular-datepicker.js"></script>
	 <script src="//cdn.ckeditor.com/4.5.6/standard/ckeditor.js"></script>
	 <script src="https://s3-ap-southeast-1.amazonaws.com/naveensingh/posts_data/ckeditor_example/ng-ckeditor.min.js"></script>
	 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/0.14.3/ui-bootstrap-tpls.js"></script>
     <script type="text/javascript" src="https://rawgit.com/rzajac/angularjs-slider/master/dist/rzslider.js"></script>
	 <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css">
     <link rel="stylesheet" type="text/css" href="css/angular-datepicker.css">
     <link rel="stylesheet" type="text/css" href="https://raw.githubusercontent.com/rzajac/angularjs-slider/master/dist/rzslider.css">
	 <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	 <script type="text/javascript" src="http://cdn.jsdelivr.net/angular.checklist-model/0.1.3/checklist-model.min.js"></script>
	 
	 <script type="text/javascript">
	    var app = angular.module('apimodule', ['ngRoute',  'ngCookies' , 'LocalStorageModule','720kb.datepicker' , 'ngCkeditor' , 'rzModule', 'ui.bootstrap','checklist-model']);
		
	    app.config(function($routeProvider){
			
			$routeProvider.when('/' , {
				controller:'users',
				templateUrl:'views/users/users.html',
                type:'list'				
			}).when('/add' , {
				controller:'users',
				templateUrl:'views/users/add.html',
				type:'add'
			}).when('/view/:id' , {
				controller:'users',
				templateUrl:'views/users/view.html',
				type:'view'
			}).when('/edit/:id' , {
				controller:'users',
				templateUrl:'views/users/edit.html',
				type:'edit'
			}).when('/login' , {
				controller:'users',
				templateUrl:'views/users/login.html',
				type:'login'
			});					
		});				
	 </script>
	 <script src="services/authenticate.js"></script>
	 <script src="controllers/users.js"></script>
  </head>
  <body>
     <div ng-app="apimodule">
	    <div ng-view></div>
	 </div>
  </body>
</html>
