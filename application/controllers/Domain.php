<?php
class Domain extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	public function setDomain()
	{
		$this->load->model('domain_model');
		$this->load->model('user_model');
		if ($this->user_model->isLoggedIn()) {
			$domain = $this->input->post('domain');
			if($this->domain_model->isDomainAvailable($domain)) {
				$this->user_model->setDomain($domain);
				echo "true";
			}
			else {
				echo "false";
			}
		} 
		else {
			echo "false";
		}
		
	}

}
