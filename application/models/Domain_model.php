<?php
class Domain_model extends CI_Model {

    public function __construct()
    {
            $this->load->database();
            $this->load->helper('cookie');
    }

    public function isDomainAvailable($domain) {
        if(!$domain) {
            return false;
        }
        $query = $this->db->get_where('users', array('domain' => $domain));
        $row = $query->row();
        if(isset($row)) {
            return false;
        }
        else {
            return true;
        }
    }
       
}
