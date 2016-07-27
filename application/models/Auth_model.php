<?php
class Auth_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
                $this->load->helper('cookie');
        }

        public function getSignInURLs() {
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
            $signInURLs['google'] = $client->createAuthUrl();
            // end google



            // Get the facebook sign in url
            require_once APPPATH . 'libraries/facebookAPI/src/Facebook/autoload.php';
            $fb = new Facebook\Facebook([
              'app_id' => '142858186150115',
              'app_secret' => '69d0832b495bbb7a1f3fa2c194ad1e4c',
              'default_graph_version' => 'v2.5',
            ]); 

            $helper = $fb->getRedirectLoginHelper();
            $permissions = ['email', 'public_profile']; // optional
            $loginURL = $helper->getLoginUrl(base_url('auth/facebookSignIn'), $permissions);
            $signInURLs['facebook'] = $loginURL;
            // end facebook

            return $signInURLs;
        }
}
