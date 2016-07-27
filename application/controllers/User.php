<?php
class User extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('user_model');
	}

	public function setInformation()
	{
		if ($this->user_model->isLoggedIn()) {
			$email = $this->input->post('email');
			$name = $this->input->post('name');
			$domain = $this->input->post('domain');

			// if email is missing @ sign or domain contains non alphanumerics
			if (strpos($email, '@') == false) {
			    echo "Please enter a valid email.";
			}
			else if (!ctype_alnum($domain)) {
				echo "Domains can only contain numbers and letters.";
			}
			else if($this->user_model->isInitialized()) {
				echo "You're already registered!";
			}
			else if ($this->user_model->domainExists($domain)) {
				echo "Domain already exists!";
			}
			else {
				try {
					$this->user_model->setDomain($domain);
					echo "true";
				} catch (Exception $e) {
					echo "An unknown error occurred! Try again later.";
				}
				
			}
		} 
		else {
			echo "You are not logged in.";
		}
	}

}
