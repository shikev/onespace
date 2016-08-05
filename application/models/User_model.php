<?php
class User_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
                $this->load->helper('cookie');
        }

        // creates a user
        public function create($uid, $name, $email = null) {
            $data = array(
                'uid' => $uid,
                'name' => $name
            );
            if($email) {
                $data['email'] = $email;
            }
            $this->db->insert('users', $data);
        }

        public function login($uid) {
            // gets new login token and SID
            $this->generateNewToken($uid);
        }

        public function logout() {
            $this->db->set('login_token', '');
            $this->db->set('session_identifier', '');
            $sessionIdentifier = get_cookie('s');
            $loginToken = get_cookie('lt');
            setcookie("lt", null, time() + 2592000, "/", "", false, true);
            setcookie("s", null, time() + 2592000, "/", "", false, true);
            $this->db->where(array('session_identifier' => $sessionIdentifier, 'login_token' => $loginToken));
            $this->db->update('users');
        }

        public function isInitialized() {
            $sessionIdentifier = get_cookie('s');
            $query = $this->db->get_where('users', array('session_identifier' => $sessionIdentifier));
            $row = $query->row();
            if(isset($row)) {
                if (!$row->domain) {
                    return false;
                }
                else {
                    return true;
                }
            }
            else {
                return false;
            }
        }

        public function exists($uid) {
            $query = $this->db->get_where('users', array('uid' => $uid));
            $row = $query->row();
            if(isset($row)) {
                return true;
            }
            else {
                return false;
            }
        }

        public function getInfo() {
            $sessionIdentifier = get_cookie('s');
            $query = $this->db->get_where('users', array('session_identifier' => $sessionIdentifier));
            $row = $query->row();
            if(isset($row)) {
                return $row;
            }
            else {
                return null;
            }
        }

        public function setInfo($emailIn, $nameIn, $domainIn) {
            $sessionIdentifier = get_cookie('s');
            $this->db->set('domain', $emailIn);
            $this->db->set('domain', $nameIn);
            $this->db->set('domain', $domainIn);
            $this->db->where(array('session_identifier' => $sessionIdentifier));
            $this->db->update('users');
        }

        public function getName() {
            $sessionIdentifier = get_cookie('s');
            $query = $this->db->get_where('users', array('session_identifier' => $sessionIdentifier));
            $row = $query->row();
            if(isset($row)) {
                return $row->name;
            }
            else {
                return null;
            }
        }

        public function getDomain() {
            $sessionIdentifier = get_cookie('s');
            $query = $this->db->get_where('users', array('session_identifier' => $sessionIdentifier));
            $row = $query->row();
            if(isset($row)) {
                return $row->domain;
            }
            else {
                return null;
            }
        }

        // sets the domain of the account (what onespace domain they want)
        public function setDomain($domainIn) {
            $sessionIdentifier = get_cookie('s');
            $this->db->set('domain', $domainIn);
            $this->db->where(array('session_identifier' => $sessionIdentifier));
            $this->db->update('users');
        }

        public function domainExists($domainToCheck) {
            $query = $this->db->get_where('users', array('domain' => $domainToCheck));
            $row = $query->row();
            if(isset($row)) {
                return true;
            }
            else {
                return false;
            }
        }

        public function getEmail() {
            $sessionIdentifier = get_cookie('s');
            $query = $this->db->get_where('users', array('session_identifier' => $sessionIdentifier));
            $row = $query->row();
            if(isset($row)) {
                return $row->email;
            }
            else {
                return null;
            }
        }

        public function getUID() {
            $sessionIdentifier = get_cookie('s');
            $query = $this->db->get_where('users', array('session_identifier' => $sessionIdentifier));
            $row = $query->row();
            if(isset($row)) {
                return $row->uid;
            }
            else {
                return null;
            }
        }

        public function isLoggedIn() {
            // if one of them isn't set
            $sessionIdentifier = get_cookie('s');
            $loginToken = get_cookie('lt');

            // var_dump($sessionIdentifier);
            // var_dump($loginToken);
            if (!$sessionIdentifier || !$loginToken) {
                return false;
            }
            $query = $this->db->get_where('users', array('session_identifier' => $sessionIdentifier));
            $row = $query->row();
            if(isset($row)) {
                // If SID exists

                $hashedToken = $row->login_token;
                $matches = password_verify($loginToken, $hashedToken); // If tokens match, do a swap refresh
            } 
            else {
                // No SID 
                return false;
            }
            if ($matches) {
                // Generate a new login token to prevent prolonged exposure in the case of a security breach
                $this->swapToken($sessionIdentifier);
                return true;
            }
            // User is not logged in
            else {
                return false;
            }

        }

        public function createPassword($email, $password) {
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            $this->db->set('password', $password);
            $this->db->where('email', $email);
            $this->db->replace('users');
        }

        public function checkPassword($email, $passwordIn) {
            $hashedPassword = password_hash($passwordIn, PASSWORD_DEFAULT);
            $query = $this->db->get_where('users', array('email' => $email, 'password' => $hashedPassword));
            $matches = false;
            $row = $query->row();
            if(isset($row)) {
                // If the password matches
                $matches = true;
            }
            return $matches;
        }

        public function changePassword($email, $oldPassword, $newPassword) {
            if ($this->checkPassword($email, $oldPassword)) {
                $this->createPassword($email, $newPassword);
            }
        }

        // TODO: Implement a change password link
        public function getChangePasswordLink($email) {

        }

        // HELPER FUNCTIONS //

        // gets a new login token for input email. If no SID is given, one will be generated
        private function swapToken($sessionIdentifier) {
            
            $newLoginToken = bin2hex(openssl_random_pseudo_bytes(16));
            $hashedToken = password_hash($newLoginToken, PASSWORD_DEFAULT);

            // Update the login token in the db
            $this->db->set('login_token', $hashedToken);
            $this->db->where('session_identifier', $sessionIdentifier);
            $this->db->update('users'); 

            // Set the cookies. Expires after a month of inactivity (this is arbitrary and does not really matter)

            // TODO: flip this based on local/prod (we want secure flag = true on prod)
            setcookie("lt", $newLoginToken, time() + 2592000, "/", "", false, true);
            setcookie("s", $sessionIdentifier, time() + 2592000, "/", "", false, true);
        }

        private function generateNewToken($uid) {
            $newLoginToken = bin2hex(openssl_random_pseudo_bytes(16));
            $hashedToken = password_hash($newLoginToken, PASSWORD_DEFAULT);

            $sessionIdentifier = bin2hex(openssl_random_pseudo_bytes(16));

            // Update the login token in the db
            $this->db->set('login_token', $hashedToken);
            $this->db->set('session_identifier', $sessionIdentifier);
            $this->db->where('uid', $uid);
            $this->db->update('users'); 

            echo $hashedToken . '\n';
            echo $sessionIdentifier . '\n';
            echo $uid;


            // Set the cookies. Expires after a month of inactivity (this is arbitrary and does not really matter)

            // TODO: flip this based on local/prod (we want secure flag = true on prod)
            setcookie("lt", $newLoginToken, time() + 2592000, "/", "", false, true);
            setcookie("s", $sessionIdentifier, time() + 2592000, "/", "", false, true);
        }
}
