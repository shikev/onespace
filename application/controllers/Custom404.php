<?php 
class Custom404 extends CI_Controller 
{
    public function __construct() 
    {
        parent::__construct(); 

        $this->load->helper('url');
    } 

    public function index() 
    { 
        $headerData['pageTitle'] = " | 404";
        $headerData['baseURL'] = base_url();
        $this->load->view('templates/header.php', $headerData);
        $this->load->view('templates/navbar');
        $this->load->view('content/error_404.php');
        $this->load->view('templates/footer.php');
    } 
} 
?> 