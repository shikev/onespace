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

    public function setPageDescription($domain, $pageDescription) {
        $query = $this->db->get_where('user_pages', array('domain' => $domain));
        $row = $query->row();
        if(isset($row)) {
            // update the page in the sites table
            $this->db->set('page_description', $pageDescription);
            $this->db->where(array('domain' => $domain));
            $this->db->update('user_pages');
        }
        else {
            $data = array(
                'domain' => $domain,
                'page_description' => $pageDescription
            );
            $this->db->insert('user_pages', $data);
        }
        echo $pageDescription;
    }

    public function getPageDescription($domain) {
        $this->db->select('page_description');
        $this->db->from('user_pages');
        $this->db->where(array('domain' => $domain));
        $query = $this->db->get();
        $row = $query->row();
        $pageDescription = null;
        if(isset($row)) {
            $pageDescription = $row->page_description;
        }
        return $pageDescription;
    }
       
}
