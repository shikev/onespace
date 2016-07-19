<?php 
class Test extends CI_Controller 
{
    public function __construct() 
    {
        parent::__construct(); 

        $this->load->helper('url');
        $this->load->library('tank_auth');
    } 

    public function index() 
    { 
        echo shell_exec("java -jar test.jar");
    } 

    public function linkedinlink(){
        $this->load->view('test/linkedinlink');
    }

    public function linkedintest(){

        define('API_KEY',      '77en98pd8z31xk'                                          );
        define('API_SECRET',   '0qtb9kcQM9FMAV93'                                       );
        // You must pre-register your redirect_uri at https://www.linkedin.com/secure/developer
        define('REDIRECT_URI', 'http://localhost/maroon/test/linkedintest');
        define('SCOPE',        'r_basicprofile r_emailaddress'                              );
        define('UNIQUESTATE', 'DCEeFWf45A53sdfKef424');
         
        // You'll probably use a database
        session_name('linkedin');
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }  
         
        // OAuth 2 Control Flow
        if (isset($_GET['error'])) {
            // LinkedIn returned an error
            print $_GET['error'] . ': ' . $_GET['error_description'];
            exit;
        } elseif (isset($_GET['code'])) {
            // User authorized your application
            if (UNIQUESTATE == $_GET['state']) {
                //Get token so you can make API calls
                $this->getAccessToken();
            } else {
                // CSRF attack? Or did you mix up your states?
                show404();
            }
        } else { 
            if ((empty($_SESSION['expires_at'])) || (time() > $_SESSION['expires_at'])) {
                // Token has expired, clear the state
                $_SESSION = array();
            }
            if (empty($_SESSION['access_token'])) {
                // Start authorization process
                $this->getAuthorizationCode();
            }
        }
        // Congratulations! You have a valid token. Now fetch your profile 
        $user = $this->fetch('GET', '/v1/people/~');
        var_dump($user);
        exit;
 


        //set parameters
        // $data = array('grant_type' => 'authorization_code', 'code' => $_GET['code'], 'redirect_uri' => 'http%3A%2F%2Flocalhost%2Fmaroon%2Ftest%2Flinkedintest', 'client_id' => '77en98pd8z31xk', 'client_secret' => '0qtb9kcQM9FMAV93');
        // $query = http_build_query($data);
        //  $url = 'https://www.linkedin.com/uas/oauth2/accessToken?' . $query;
        //  echo $url;
        // //use key 'http' even if you send the request to https://...
        // $options = array(
        //     'http' => array(
        //         'header'  => "Content-type: application/x-www-form-urlencoded\r\nContent-length: ".strlen($query)."\r\nHost: www.linkedin.com",
        //         'method'  => 'POST'
        //     ),
        // );
        // $context  = stream_context_create($options);
    
        //  $result = file_get_contents($url);
        //     var_dump($result);
        //         echo "poop";
    }
    function getAuthorizationCode() {
        $params = array(
            'response_type' => 'code',
            'client_id' => API_KEY,
            'scope' => SCOPE,
            'state' => uniqid('', true), // unique long string
            'redirect_uri' => REDIRECT_URI,
        );
     
        // Authentication request
        $url = 'https://www.linkedin.com/uas/oauth2/authorization?' . http_build_query($params);
         
        // Needed to identify request when it returns to us
        $_SESSION['state'] = $params['state'];
     
        // Redirect user to authenticate
        header("Location: $url");
        exit;
    }
     
    function getAccessToken() {
        $params = array(
            'grant_type' => 'authorization_code',
            'client_id' => API_KEY,
            'client_secret' => API_SECRET,
            'code' => $_GET['code'],
            'redirect_uri' => REDIRECT_URI,
        );
         
        // Access Token request
        $url = 'https://www.linkedin.com/uas/oauth2/accessToken?' . http_build_query($params);
         
        // Tell streams to make a POST request
        $context = stream_context_create(
            array('http' => 
                array('method' => 'POST',
                )
            )
        );
     
        // Retrieve access token information
        $response = file_get_contents($url, false, $context);
     
        // Native PHP object, please
        $token = json_decode($response);
     
        // Store access token and expiration time
        $_SESSION['access_token'] = $token->access_token; // guard this! 
        $_SESSION['expires_in']   = $token->expires_in; // relative time (in seconds)
        $_SESSION['expires_at']   = time() + $_SESSION['expires_in']; // absolute time
         
        return true;
    }
 
    function fetch($method, $resource, $body = '') {
        
     
        $opts = array(
            'http'=>array(
                'method' => $method,
                'header' => "Authorization: Bearer " . $_SESSION['access_token'] . "\r\n" . "x-li-format: json\r\n"
            )
        );
     
        // Need to use HTTPS
        $url = 'https://api.linkedin.com' . $resource;
     
        // Append query parameters (if there are any)
        //if (count($params)) { $url .= '?' . http_build_query($params); }
     
        // Tell streams to make a (GET, POST, PUT, or DELETE) request
        // And use OAuth 2 access token as Authorization
        $context = stream_context_create($opts);
     
        // Hocus Pocus
        $response = file_get_contents($url, false, $context);
     
        // Native PHP object, please
        return json_decode($response);
    } 
     
} 
?> 