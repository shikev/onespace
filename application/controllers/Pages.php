<?php
class Pages extends CI_Controller{
	public function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		define('MAX_EXPERIENCE',      '77en98pd8z31xk'                                          );
	}

	public function index()
	{
		// $this->load->library('user_agent');

		// $this->load->library('form_validation');

		// $headerData['pageTitle'] = "";

  //       $this->load->view('templates/homeheader.php', $headerData);
		// $this->load->view('templates/navbar', $data);
		// $this->load->view('content/home', $data);
		// $this->load->view('templates/footer.php');
		echo "fuck";
	}

	public function tutorial(){
		$headerData['pageTitle'] = " | Domain Tutorial";
		$this->load->view('templates/header.php', $headerData);
		$this->load->view('templates/navbar');
		$this->load->view('content/tutorial.php');
		$this->load->view('templates/footer.php');
	}

	public function imgtutorial() {
		$headerData['pageTitle'] = " | Image Tutorial";
		$this->load->view('templates/header.php', $headerData);
		$this->load->view('templates/navbar');
		$this->load->view('content/img_tutorial.php');
		$this->load->view('templates/footer.php');
	}
    
    public function updates() {
		$headerData['pageTitle'] = " | What's New";
		$this->load->view('templates/header.php', $headerData);
		$this->load->view('templates/navbar');
		$this->load->view('content/updates.php');
		$this->load->view('templates/footer.php');
	}

	//load the donate page
	public function donate(){
		$this->load->helper('form');
		$this->load->library('form_validation');

		$headerData['pageTitle'] = " | Donate";

        $this->load->view('templates/header.php', $headerData);
		$this->load->view('templates/navbar');
		$this->load->view('content/donations.php');
		$this->load->view('templates/footer.php');
	}
    
    //load the contact page
	public function contact(){
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		$headerData['pageTitle'] = " | Contact";

		$this->form_validation->set_rules('namebox', 'Name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('emailbox', 'Email', 'trim|required|xss_clean|callback_is_valid_email');
		$this->form_validation->set_rules('subject', 'Subject', 'trim|required|xss_clean');
		$this->form_validation->set_rules('msgbox', 'Message', 'trim|required|xss_clean');

        $data['success'] = false;
        
		if ($this->form_validation->run()) {
			$to = 'prjctmaroon@gmail.com';
			$name = $this->input->post('namebox');
	        $email =  $this->input->post('emailbox');
	        $message = $this->input->post('msgbox');
	        $message = $name . '\'s message:\n' . $message;
	        $subject = $this->input->post('subject');
			mail ($to, $subject, $message);
			$data['success'] = true;
		}
        $this->load->view('templates/header.php', $headerData);
		$this->load->view('templates/navbar');
		$this->load->view('content/contact.php',$data);
		$this->load->view('templates/footer.php');
	}

	//redirect to venmo
	public function receive_donation(){
		$money = $this->input->post('moneybox');
		$note = $this->input->post('notebox');
		$venmoLink = "https://venmo.com/?txn=pay&recipients=Project-Maroon&amount=";
		$venmoLink = $venmoLink. $money . "&note=" . $note . "&audience=public";
		$venmoLink = str_replace(array("\n", "\r"), '', $venmoLink);
		redirect($venmoLink, 'refresh');
	}

	public function redirect(){
		$this->load->view('content/redirect.php');
		$this->load->view('templates/footer.php');
	}

	public function error404(){
		$this->load->view('content/error_404.php');
	}
	public function send_message(){
	    if ($_POST["submit"]) {
	        $name = $_POST['name'];
	        $email = $_POST['email'];
	        $message = $_POST['message'];
	        $from = 'Contact Form'; 
	        $to = 'kevinni@umich.edu'; 
	        $subject = 'Message from Website Form';
	        
	        $body = "From: $name\n E-Mail: $email\n Message:\n $message";
	 
	        // Check if name has been entered
	        if (!$_POST['name']) {
	            $errName = 'Please enter your name';
	        }
	        
	        // Check if email has been entered and is valid
	        if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
	            $errEmail = 'Please enter a valid email address';
	        }
	        
	        //Check if message has been entered
	        if (!$_POST['message']) {
	            $errMessage = 'Please enter a message';
	        }
	 
	        // If there are no errors, send the email
	        if (!$errName && !$errEmail && !$errMessage) {
	            if (mail ($to, $subject, $body, $from)) {
	                $result="<div class='alert alert-success'>Thank you! You'll hear a reply from me shortly!</div>";
	                unset($_POST['name'], $_POST['email'], $_POST['message']); 
	            } else {
	                $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
	            }
	        }
	    }
	}



	//form validation callbacks
	public function is_valid_email($email){
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			$this->form_validation->set_message('is_valid_email', 'Please enter a valid email');
			return false;
		}
		else{
			return true;
		}
	}
    

}
