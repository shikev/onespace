<?php
class User_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        public function isLoggedIn($email, $sessionIdentifier, $login_token) {
            $query = $this->db->get_where('users', array('session_identifier' => $sessionIdentifier, 'login_token' => $login_token));
            $matches = false;
            $row = $query->row();
            if(isset($row)) {
                // If the password matches
                $matches = true;
            }

            if ($matches) {
                // Generate a new login token to prevent prolonged exposure in the case of a security breach
                $newLoginToken = $token = bin2hex(openssl_random_pseudo_bytes(16));

                // Update the login token in the db
                $this->db->set('login_token', $newLoginToken);
                $this->db->where('session_identifier', $sessionIdentifier);
                $this->db->update('users'); // gives UPDATE `users` SET `login_token` = $newLoginToken WHERE `session_identifier` = $sessionIdentifier

                // Set the cookies. Expires after a month of inactivity (this is arbitrary and does not really matter)

                // TODO: flip this based on local/prod (we want secure flag = true on prod)
                setcookie("lt", $newLoginToken, time() + 2592000, "/", "", false, true);

            }
            // User is not logged in
            else {
                $this->logout($email);
            }

        }

        public function logout($email) {
            $this->db->set('login_token', '');
            $this->db->set('session_identifier', '');
            $this->db->where('email', $email);
            $this->db->update('users');
        }

        public function createPassword($email, $password) {
            $hashedPassword = password_hash($password);
            $this->db->set('password', $password);
            $this->db->where('email', $email);
            $this->db->replace('users');
        }

        public function checkPassword($email, $passwordIn) {
            $hashedPassword = password_hash($passwordIn);
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

        // Returns the blob that holds the page information
        public function getPageDescription($email) {
            // Do a join on userpages. Not sure if this is efficient at all (probs not), maybe I'll know after 485
            $this->db->select('domain');
            $this->db->from('users');
            $this->db->where(array('email' => $email));
            $this->db->join('user_pages', 'user_pages.domain = users.domain', 'right');
            $query = $this->db->get();
            $row = $query->row();
            $pageDescription = null;
            if(isset($row)) {
                $pageDescription = $row->page_description;
            }
            return $pageDescription;
        }

        public function setPageDescription($email, $pageDescription) {
            // Get the domain from the users table. There should be a way to do this in one query, but idk how yet
            // But who cares about performance amirite
            $this->db->select('domain');
            $this->db->from('users');
            $this->db->where(array('email' => $email));
            $query = $this->db->get();
            $row = $query->row();
            $domain = null;
            if(isset($row)) {
                $domain = $row->domain;
            }

            // Update the user_pages table
            $this->db->set('page_description', $pageDescription);
            $this->db->where(array('domain' => $domain));
            $this->db->update('user_pages');
        }


        // public function get_xml($username = null){
        //         if($username == false){
        //                return null;
        //         }

        //         $query = $this->db->query("SELECT `xmlinfo` FROM `userpages` WHERE `username` = '$username'");
        //         if($query->num_rows() == 0){
        //                 //creates a user profile if one doesn`t exist
        //                 // $this->db->query("INSERT INTO `userpages`(`username`, `xmlinfo`) VALUES('$username', '')");
        //                 // $query = $this->db->query("SELECT `xmlinfo` FROM `userpages` WHERE `username` = '$username'");
        //                 return false;
        //         }
        //         $row = $query->row_array();
        //         return $row['xmlinfo'];
        // }

        // public function set_xml($username, $xmlIn){

        //     $query = $this->db->query("SELECT `xmlinfo` FROM `userpages` WHERE `username` = '$username'");
        //     if($query->num_rows() == 0){
        //                 //creates a user profile if one doesn`t exist
        //                  $this->db->query("INSERT INTO `userpages`(`username`, `xmlinfo`) VALUES('$username', '$xmlIn')");
        //     }
        //     else{
        //         $data = array(
        //             'xmlinfo' => $xmlIn
        //         );
        //         $where = array('username'=>$this->tank_auth->get_username());
        //         $this->db->update('userpages', $data, $where);
        //     }

        // }
}
