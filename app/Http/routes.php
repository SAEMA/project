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
// "pingpong/facebook": "~2.0",--------------imp composer.json

Route::get('/', function () {
    return view('home');
});

Route::get('/testas', function () {
    echo "dsfsd";
});

Route::get('my_calendar',  function () {
    return view('my_calendar');
});

Route::get('search', 'My_FlightController@search_page');

Route::post('search', 'My_FlightController@my_flight_book');

Route::get('mail_page', 'My_ThunderController@my_page');

Route::post('mail_page', 'My_ThunderController@show_mails');

Route::post('get_auto_mail', 'My_ThunderController@get_mails');
//Route::post('search', 'My_ThunderController@my_flight_book');



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

	Route::get('auth/facebook', 'Auth\AuthController@redirectToProvider');
	Route::get('auth/facebook/callback', 'Auth\AuthController@handleProviderCallback');
	
	Route::get('facebook_welcome',  function () {
    return view('facebook_welcome');
	});


    Route::get('/home', 'HomeController@index')->middleware('isActive');

  	Route::get('home', array('as' => 'home', 'uses' => function(){	
  	return view('facebook_welcome'); 
	}))->middleware('isActive');

	Route::post('home', 'Reset_pwdController@reset_pwd');
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

});

	Route::group(array('before' => 'auth'), function()
	{

	});



	// Generate a login URL
Route::get('/facebook/login', function(SammyK\LaravelFacebookSdk\LaravelFacebookSdk $fb)
{session_start();
    // Send an array of permissions to request
    $login_url = $fb->getLoginUrl(['email']);

    // Obviously you'd do this in blade :)
    echo '<a href="' . $login_url . '">Login with Facebook</a>';
    echo '<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">';
});

// Endpoint that is redirected to after an authentication attempt
Route::get('/facebook/callback', function(SammyK\LaravelFacebookSdk\LaravelFacebookSdk $fb)
{
	print_r($fb);
    // Obtain an access token.
    try {
        $token = $fb->getAccessTokenFromRedirect();
    } catch (Facebook\Exceptions\FacebookSDKException $e) {
    	echo $token;
    	echo "hit";
        dd($e->getMessage());
    }

    // Access token will be null if the user denied the request
    // or if someone just hit this URL outside of the OAuth flow.
    if (! $token) {
        // Get the redirect helper
        $helper = $fb->getRedirectLoginHelper();

        if (! $helper->getError()) {
            abort(403, 'Unauthorized action.');
        }

        // User denied the request
        dd(
            $helper->getError(),
            $helper->getErrorCode(),
            $helper->getErrorReason(),
            $helper->getErrorDescription()
        );
    }

    if (! $token->isLongLived()) {
        // OAuth 2.0 client handler
        $oauth_client = $fb->getOAuth2Client();

        // Extend the access token.
        try {
            $token = $oauth_client->getLongLivedAccessToken($token);
        } catch (Facebook\Exceptions\FacebookSDKException $e) {

            dd($e->getMessage());
        }
    }

    $fb->setDefaultAccessToken($token);

    // Save for later
    Session::put('fb_user_access_token', (string) $token);

    // Get basic info on the user from Facebook.
    try {
        $response = $fb->get('/me?fields=id,name,email');
    } catch (Facebook\Exceptions\FacebookSDKException $e) {

        dd($e->getMessage());
    }

    // Convert the response to a `Facebook/GraphNodes/GraphUser` collection
    $facebook_user = $response->getGraphUser();

    // Create the user if it does not exist or update the existing entry.
    // This will only work if you've added the SyncableGraphNodeTrait to your User model.
    $user = App\User::createOrUpdateGraphNode($facebook_user);

    // Log the user into Laravel
    Auth::login($user);

    return redirect('/')->with('message', 'Successfully logged in with Facebook');
});