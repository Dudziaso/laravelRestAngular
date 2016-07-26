import {EmployeePageComponent} from './app/components/employee_page/employee_page.component';
import {GetPostsContainerComponent} from './app/components/get_posts_container/get_posts_container.component';
import {CreatePostFormComponent} from './app/components/create_post_form/create_post_form.component';
import {ResetPasswordComponent} from './app/components/reset-password/reset-password.component';
import {ForgotPasswordComponent} from './app/components/forgot-password/forgot-password.component';
import {LoginFormComponent} from './app/components/login-form/login-form.component';
import {RegisterFormComponent} from './app/components/register-form/register-form.component';

angular.module('app.components')
	.component('employeePage', EmployeePageComponent)
	.component('getPostsContainer', GetPostsContainerComponent)
	.component('createPostForm', CreatePostFormComponent)
	.component('resetPassword', ResetPasswordComponent)
	.component('forgotPassword', ForgotPasswordComponent)
	.component('loginForm', LoginFormComponent)
	.component('registerForm', RegisterFormComponent);

