export function RoutesConfig($stateProvider, $urlRouterProvider) {
	'ngInject';

	let getView = (viewName) => {
		return `./views/app/pages/${viewName}/${viewName}.page.html`;
	};

	$urlRouterProvider.otherwise('/');

	$stateProvider
		.state('app', {
			abstract: true,
            data: {},//{auth: true} would require JWT auth
			views: {
				header: {
					templateUrl: getView('header')
				},
				footer: {
					templateUrl: getView('footer')
				},
				main: {}
			}
		})
		.state('app.landing', {
            url: '/',
            views: {
                'main@': {
                    templateUrl: getView('landing')
                }
            }
        })
        .state('app.login', {
			url: '/login',
			views: {
				'main@': {
					templateUrl: getView('login')
				}
			}
		})
        .state('app.register', {
            url: '/register',
            views: {
                'main@': {
                    templateUrl: getView('register')
                }
            }
        })
        .state('app.forgot_password', {
            url: '/forgot-password',
            views: {
                'main@': {
                    templateUrl: getView('forgot-password')
                }
            }
        })
        .state('app.reset_password', {
            url: '/reset-password/:email/:token',
            views: {
                'main@': {
                    templateUrl: getView('reset-password')
                }
            }
        })
        .state('app.create_post', {                 //to dodalem
            url: '/create-post',
            //data: {auth: true},//{auth: true} would require JWT auth                        //to dodalem
            views: {                                    //to dodalem
              'main@': {                                //to dodalem
                templateUrl: getView('create_post')     //to dodalem
              }                                         //to dodalem
            }                                              //to dodalem
        })
        .state('app.get_posts', {                 //to dodalem
            url: '/get-posts',
            //data: {auth: true},//{auth: true} would require JWT auth                        //to dodalem
            views: {                                    //to dodalem
              'main@': {                                //to dodalem
                templateUrl: getView('get_posts')     //to dodalem
              }                                         //to dodalem
            }
        })
        .state('app.employee_page', {                 //to dodalem
            url: '/employeeCards',
            //data: {auth: true},//{auth: true} would require JWT auth                        //to dodalem
            views: {                                    //to dodalem
              'main@': {                                //to dodalem
                templateUrl: getView('employee_page')     //to dodalem
              }                                         //to dodalem
            }
        });
}
