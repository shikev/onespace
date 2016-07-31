<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');

	}

	private function getSignInURLs() {
		$signInURLs = [];

		// Get the google sign in url
		require_once APPPATH . 'libraries/googleAPI/vendor/autoload.php';
		$scriptURI = base_url('auth/googleSignIn');
		$client = new Google_Client();
		$client->setApplicationName('Onespace Page Manager');
		$client->setClientId('449516604176-huv86108vpvqdeafsvckemke9gaq2on2.apps.googleusercontent.com');
		$client->setClientSecret('O1YSEBCSoXVxC8d4OfHXuowY');
		$client->setRedirectUri($scriptURI);
		$client->setScopes('email', 'profile');
		$client->setDeveloperKey('AIzaSyBNCGK_QeKBH4aTmtWtUtdIQXIbJhvCOXg'); // API key
		$signInURLs[] = $client->createAuthUrl();
		// end google

		// Get the linked in sign in url

		return $signInURLs;
	}


	// Controller function for the login page
	public function login() {

		$data['signInURLs'] = $this->getSignInURLs();
		$this->load->view('test/login', $data);
	}

	public function googleSignIn() {

		// First determine what type of auth we're using (google, fb, linkedin)
		//unset($_SESSION['access_token']);
		require_once APPPATH . 'libraries/googleAPI/vendor/autoload.php';
		$scriptURI = base_url('auth/signin');
		$client = new Google_Client();
		$client->setApplicationName('Onespace Page Manager');
		$client->setClientId('449516604176-huv86108vpvqdeafsvckemke9gaq2on2.apps.googleusercontent.com');
		$client->setClientSecret('O1YSEBCSoXVxC8d4OfHXuowY');
		$client->setRedirectUri($scriptURI);
		$client->setScopes('email', 'profile');
		$client->setDeveloperKey('AIzaSyBNCGK_QeKBH4aTmtWtUtdIQXIbJhvCOXg'); // API key

		//Send Client Request
		$loginObj = new Google_Service_Oauth2($client);

		//Authenticate code from Google OAuth Flow
		//Add Access Token to Session
		if (isset($_GET['code'])) {
		  $client->authenticate($_GET['code']);
		  $accessToken = $client->getAccessToken();
		  if ($accessToken) {
		  	$client->setAccessToken($accessToken);
		  	$userData = $loginObj->userinfo->get();
		  	var_dump($userdata);
		  }
		  else {
		  	// failed redirect to login page
		  }
		}
		else {
			// failed, redirect to login page
		}

		//Set Access Token to make Request
		if (isset($_SESSION['access_token']) && $_SESSION['access_token']) {
		  $client->setAccessToken($_SESSION['access_token']);
		}

		//Get User Data from Google Plus

		if ($client->getAccessToken()) {
			// echo '<pre>';
		 //  var_dump($client->getAccessToken());
		 //  echo '</pre';
		  $userData = $loginObj->userinfo->get();
		  // echo '<pre>';
		  // var_dump($userData);
		  // echo '</pre';
		} else {
		  $authUrl = $client->createAuthUrl();
		  header('Location: ' . filter_var($authUrl, FILTER_SANITIZE_URL));
		}

	}

	function oauth2callback() {
		require_once APPPATH . 'libraries/google_api/vendor/autoload.php';
		$client = new Google_Client();
		$scriptURI = base_url('auth/oauth2callback');
		$client->setClientId('449516604176-huv86108vpvqdeafsvckemke9gaq2on2.apps.googleusercontent.com');
		$client->setClientSecret('O1YSEBCSoXVxC8d4OfHXuowY');
		$client->setDeveloperKey('AIzaSyBNCGK_QeKBH4aTmtWtUtdIQXIbJhvCOXg'); // API key
		$client->setRedirectUri($scriptURI);
		if(isset($_GET['code'])) {
			$client->authenticate($_GET['code']);
			echo '<pre>';
			print_r($client->getAccessToken());
			echo '</pre>';
		}

		//var_dump($client->getAccessToken());
	}
	/**
	 * Login user on the site
	 *
	 * @return void
	 */
}