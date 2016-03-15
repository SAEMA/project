<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::resource('index','WebScraperController@getIndex');

Route::get('/', function () {
    return view('home');
});

Route::get('/testa', function () {
    echo "dsfsd";
});


Route::get('my_calendar',  function () {
    return view('my_calendar');
});
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/



Route::group(['middleware' => 'web'], function () {
	
	#handles authentication at login time-----------------------------------------------
    Route::auth();																		#
    #-----------------------------------------------------------------------------------

    //Route::get('/home', 'HomeController@index')->middleware('isActive');

    Route::get('/home', 'HomeController@index');
    #registration page -----------------------------------------------------------------
    #																					#
    #getting the registration page view-------------------------------------			#
	Route::get('registration_form', 'RegistrationController@return_view');	#			#
	#-----------------------------------------------------------------------			#
	#																					#
	#posting data of the registration page ----------------------------------			#
	Route::post('registration_form', 'RegistrationController@insert_data'); #			#
	#------------------------------------------------------------------------			#
	#																					#
	#-----------------------------------------------------------------------------------


    #profile page ----------------------------------------------------------------------
    #																					#
	# profile returns the profile page view --------------------------------			#
	Route::get('profile','ProfileController@view_user');						#		#
	#-----------------------------------------------------------------------			#
	#																					#
	#-----------------------------------------------------------------------------------


	#edit page -------------------------------------------------------------------------
    #																					#
	#then go for the edit page return the view -----------------------------			#
	Route::get('edit', 'EditController@return_view');						#			#
	#-----------------------------------------------------------------------			#
	#																					#
	#posting data from the edit page----------------------------------------			#
	Route::post('edit', 'EditController@update_data'); 						#			#
	#-----------------------------------------------------------------------			#
	#																					#
	#-----------------------------------------------------------------------------------


	#admin jqgrid------------------------------------------------------------------------
	#																					 #
	#displaying jqgrid-------------------------------------------------------- 		 	 #
	Route::get('jqgrid', 'AdminController@return_view')->middleware('isAdmin');# 		 #	
	#-------------------------------------------------------------------------			 #	
	#																					 #
	#------------------------------------------------------------------------			 #
	Route::get('make_table', 'AdminController@make_table');					#			 #
	#------------------------------------------------------------------------			 #
	#																					 #
	#------------------------------------------------------------------------			 #
	Route::get('make_subgrid', 'AdminController@make_subgrid');				#  			 #
	#------------------------------------------------------------------------			 #
	#																					 #
	#----------------------------------------------------------------------- 			 #
	Route::post('edit_table', 'AdminController@edit_table');				#			 #	
	#-----------------------------------------------------------------------			 #
	#																					 #
	#------------------------------------------------------------------------------------#


	#for roles---------------------------------------------------------------------------
	#																					#
	#---------------------------------------------------------------------				#
	Route::get('roles', 'RolesController@return_view');					  #				#
	#---------------------------------------------------------------------				#
	#																					#
	#---------------------------------------------------------------------				#	
	Route::post('roles', 'RolesController@update_roles');				  #				#
	#--------------------------------------------------------------------				#
	#																					#
	#------------------------------------------------------------------------------------


	#for add_delete roles ,resources and operations--------------------------------------
	#																					#
	#---------------------------------------------------------------------				#
	Route::get('add_delete', 'Add_DeleteController@return_view');		#				#
	#---------------------------------------------------------------------				#
	#																					#
	#---------------------------------------------------------------------				#
	Route::post('add_delete', 'Add_DeleteController@add_new_or_delete');#				#
	#--------------------------------------------------------------------				#
	#																					#
	#------------------------------------------------------------------------------------


	#for roles for each type of user-----------------------------------------------------
	#																					#
	#--------------------------------------------------------------------				#
	Route::get('privilege', 'PrivilegeController@return_view');			#				#
	#--------------------------------------------------------------------				#
	#																					#
	#--------------------------------------------------------------------				#
	Route::post('send_data' , 'PrivilegeController@send_data');			#				#
	#--------------------------------------------------------------------				#
	#																					#
	#--------------------------------------------------------------------				#
	Route::post('update_data' , 'PrivilegeController@update_data');		#				#
	#--------------------------------------------------------------------				#
	#																					#
	#------------------------------------------------------------------------------------	


	#for twitter page--------------------------------------------------------------------
	#																					#
	#-----------------------------------------------------------------------			#
	Route::get('tweet', 'TweetController@return_view');					#			#
	#-----------------------------------------------------------------------			#
	#																					#
	#-----------------------------------------------------------------------			#
	Route::post('send_twitter_data', 'TweetController@send_data');		#			#
	#-----------------------------------------------------------------------			#
	#																					#
	#------------------------------------------------------------------------------------
	Route::post('fetch_data', 'TweetController@posting_find_data');	


$s = 'social.';
Route::get('/social/redirect/{provider}',   ['as' => $s . 'redirect',   'uses' => 'Auth\AuthController@getSocialRedirect']);

Route::get('/social/handle/{provider}',     ['as' => $s . 'handle',     'uses' => 'Auth\AuthController@getSocialHandle']);



Route::get('register/verify/{confirmationCode}', [
    'as' => 'confirmation_path',
    'uses' => 'RegistrationController@confirm'
]);


    //return Twitter::getMentionsTimeline(['count' => 20, 'format' => 'json']);


// Route::get('password/email', 'Auth\PasswordController@getEmail');
// Route::post('password/email', 'Auth\PasswordController@postEmail');

// // Password reset routes...
// Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
// Route::post('password/reset', 'Auth\PasswordController@postReset');

});

	Route::group(array('before' => 'auth'), function()
	{

	});