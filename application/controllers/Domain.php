<?php
class Domain extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	public function isDomainAvailable()
	{
		$this->load->model('domain_model');
		$domain = $this->input->post('domain');
		return $this->domain_model->isDomainAvailable($domain);
	}

}
