<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');

	}

	// Controller function for the login page (we gotta make the js/css for this)
	public function login() {
		$this->load->model('auth_model');
		$signInURLs = $this->auth_model->getSignInURLs();
		$data['googleSignInLink'] = $signInURLs['google'];
		$data['facebookSignInLink'] = $signInURLs['facebook'];
		$data['baseURL'] = base_url();
		$headerData['baseURL'] = base_url();
		$headerData['pageTitle'] = "Login";

		// Load these style sheets

		$headerData['CSSSources'][] = base_url() . 'assets/css/login-styles.css';
		$headerData['CSSSources'][] = base_url() . 'assets/css/navbar-styles.css';

		$this->load->view('templates/header.php', $headerData);
		$this->load->view('templates/navbar', $data);
		$this->load->view('auth/login', $data);
		$this->load->view('templates/footer.php');
	}

	public function register() {
		$this->load->model('auth_model');
		$signInURLs = $this->auth_model->getSignInURLs();
		$data['googleSignInLink'] = $signInURLs['google'];
		$data['facebookSignInLink'] = $signInURLs['facebook'];
		$data['baseURL'] = base_url();
		$headerData['baseURL'] = base_url();

		// Load stylesheets

		$headerData['CSSSources'][] = base_url() . 'assets/css/login-styles.css';
		$headerData['CSSSources'][] = base_url() . 'assets/css/navbar-styles.css';

		$this->load->view('templates/header.php', $headerData);
		$this->load->view('templates/navbar', $data);
		$this->load->view('auth/register', $data);
		$this->load->view('templates/footer.php');
	}

	public function logout() {
		$this->load->model('user_model');
		$this->user_model->logout();
		redirect('', 'Refresh');
	}

	////// OAUTH2 CALLBACKS //////

	public function googleSignIn() {
		require_once APPPATH . 'libraries/googleAPI/vendor/autoload.php';
		$scriptURI = base_url('auth/googleSignIn');
		$client = new Google_Client();
		$client->setApplicationName('Onespace Page Manager');
		$client->setClientId('449516604176-huv86108vpvqdeafsvckemke9gaq2on2.apps.googleusercontent.com');
		$client->setClientSecret('O1YSEBCSoXVxC8d4OfHXuowY');
		$client->setRedirectUri($scriptURI);
		$client->setScopes('email', 'profile');
		$client->setDeveloperKey('AIzaSyBNCGK_QeKBH4aTmtWtUtdIQXIbJhvCOXg'); // API key
		$redirect_uri = base_url('auth/googleSignIn');
		//Send Client Request
		$loginObj = new Google_Service_Oauth2($client);

		if (isset($_GET['code'])) { // we received the positive auth callback, get the token and store it in session
		    $client->authenticate($_GET['code']);
		    $accessToken = $client->getAccessToken();
		    if ($accessToken) {
		    	$client->setAccessToken($accessToken);
			    $userData = $loginObj->userinfo->get();
			    $email = $userData["email"];
			    $name = $userData["givenName"] . " " . $userData["familyName"];
			    $uid = $email;
			    $this->initialize($uid, $name, $email);
		    }
		    else {
		    	// failure, redirect to sign in page w/ message
		    }
		}
		else {
			// failure, redirect to to sign in page w/ message
		}

	}

	public function facebookSignIn() {
		require_once APPPATH . 'libraries/facebookAPI/src/Facebook/autoload.php';
		$fb = new Facebook\Facebook([
		  'app_id' => '142858186150115',
		  'app_secret' => '69d0832b495bbb7a1f3fa2c194ad1e4c',
		  'default_graph_version' => 'v2.5',
		]);
		$helper = $fb->getRedirectLoginHelper();
		try {
		  $accessToken = (string) $helper->getAccessToken();
		} catch(Facebook\Exceptions\FacebookResponseException $e) {
		  // When Graph returns an error
		  echo 'Graph returned an error: ' . $e->getMessage();
		  exit;
		} catch(Facebook\Exceptions\FacebookSDKException $e) {
		  // When validation fails or other local issues
		  echo 'Facebook SDK returned an error: ' . $e->getMessage();
		  exit;
		}

		$fb->setDefaultAccessToken($accessToken);

		try {
		  $response = $fb->get('/me?locale=en_US&fields=name,email');
		  $userNode = $response->getGraphUser();
		} catch(Facebook\Exceptions\FacebookResponseException $e) {
		  // When Graph returns an error
		  echo 'Graph returned an error: ' . $e->getMessage();
		  exit;
		} catch(Facebook\Exceptions\FacebookSDKException $e) {
		  // When validation fails or other local issues
		  echo 'Facebook SDK returned an error: ' . $e->getMessage();
		  exit;
		}

		$uid = $userNode->getField('id');
		$name = $userNode->getField('name');
		$this->initialize($uid, $name);
		// redirect to manage page

	}

	////// END CALLBACKS //////

	////// HELPERS //////

	// Loads the page that initializes the user 
	private function initialize($uid, $name, $email = null) {
		$this->load->model('user_model');
		// If the user doesn't exist, create them
		if (!$this->user_model->exists($uid)) {
			$this->user_model->create($uid, $name, $email);
			$this->user_model->login($uid);
			redirect('userpage/initialize');
		}
		else {
			$this->user_model->login($uid);
			redirect('userpage/manage');
		}

	}

	////// END HELPERS //////
}