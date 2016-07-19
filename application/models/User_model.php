<?php
class User_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
                $this->load->library('tank_auth');
        }

        public function get_xml($username = null){
                if($username == false){
                       return null;
                }

                $query = $this->db->query("SELECT `xmlinfo` FROM `userpages` WHERE `username` = '$username'");
                if($query->num_rows() == 0){
                        //creates a user profile if one doesn`t exist
                        // $this->db->query("INSERT INTO `userpages`(`username`, `xmlinfo`) VALUES('$username', '')");
                        // $query = $this->db->query("SELECT `xmlinfo` FROM `userpages` WHERE `username` = '$username'");
                        return false;
                }
                $row = $query->row_array();
                return $row['xmlinfo'];
        }

        public function set_xml($username, $xmlIn){

            $query = $this->db->query("SELECT `xmlinfo` FROM `userpages` WHERE `username` = '$username'");
            if($query->num_rows() == 0){
                        //creates a user profile if one doesn`t exist
                         $this->db->query("INSERT INTO `userpages`(`username`, `xmlinfo`) VALUES('$username', '$xmlIn')");
            }
            else{
                $data = array(
                    'xmlinfo' => $xmlIn
                );
                $where = array('username'=>$this->tank_auth->get_username());
                $this->db->update('userpages', $data, $where);
            }

        }
}
