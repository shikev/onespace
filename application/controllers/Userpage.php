<?php

class Userpage extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('user_model');
		$this->load->helper('url');
		define('MAX_EXPERIENCE', 7);
		define('MAX_PROJECTS', 7);
		define('MAX_EDUCATION', 3);
		define('MAX_SKILLS', 15);
	}

	public function test() {
		echo "HI";
	}

	public function initialize() {
		// make a form to set the domain
		echo "this is the initializer page. Form to set domain, name, and email are here";
	}

	public function manage(){
		//If a user tries to access this page without being logged in
		if(!$this->user_model->isLoggedIn()){
			echo "not logged in ";
		}
		else if(!$this->user_model->isInitialized()) {
			$this->initialize();
		}
		else {
			echo "hi";
		}
		// else{
		// 	$xmlstring = $this->user_model->getPageDescription();
		// 	$xml = simplexml_load_string($xmlstring);
		// 	$data['submitpath'] = base_url() . 'userpage/update';

		// 	if($xml == false){
		// 		$this->set_default_values($data);
		// 		$this->load->helper('form');
		// 		$this->load->helper('url');
		// 		$this->load->library('form_validation');
				
		// 		$headerData['pageTitle'] = " | Dashboard";

  //       		$this->load->view('templates/formheader', $headerData);
		// 		$this->load->view('templates/navbar');
		// 		$this->load->view('content/forminput',$data);
		// 		$this->load->view('templates/footer.php');
		// 	}
		// 	else{
		// 		$this->set_previous_values($xml, $data);
		// 		// $data['personName'] = $xml->name;
		// 		// $data['email'] = $xml->email;
		// 		// $data['linkedin'] = $xml->linkedin;
		// 		// $data['greeting'] = $xml->greeting;
		// 		// $data['description'] = $xml->description;
		// 		// $data['pagecolor'] = $xml->pagecolor;
		// 		// $data['userHeaderFont'] = $xml->userHeaderFont;
		// 		// $data['userContentFont'] = $xml->userContentFont;
		// 		// $data['fontcolor'] = $xml->fontcolor;
		// 		// $data['uploadimg'] = $xml->uploadimg;
		// 		// $data['profileimg'] = $xml->profileimg;
		// 		// $data['pagetheme'] = $xml->pagetheme;

		// 		// $data['secEduTitle'] = $xml->education->secEduTitle;

		// 		// $data['secEduSchool1'] = $xml->education->educationsection[0]->school;
		// 		// $data['secEduLoc1'] = $xml->education->educationsection[0]->loc;
		// 		// $data['secEduGrad1'] = $xml->education->educationsection[0]->grad;
		// 		// $data['secEduMajor1'] = $xml->education->educationsection[0]->major;
		// 		// $data['secEduClasses1'] = $xml->education->educationsection[0]->classes;
		// 		// //Education section2
		// 		// $data['secEduSchool2'] = $xml->education->educationsection[1]->school;
		// 		// $data['secEduLoc2'] = $xml->education->educationsection[1]->loc;
		// 		// $data['secEduGrad2'] = $xml->education->educationsection[1]->grad;
		// 		// $data['secEduMajor2'] = $xml->education->educationsection[1]->major;
		// 		// $data['secEduClasses2'] = $xml->education->educationsection[1]->classes;
		// 		// //Education section3
		// 		// $data['secEduSchool3'] = $xml->education->educationsection[2]->school;
		// 		// $data['secEduLoc3'] = $xml->education->educationsection[2]->loc;
		// 		// $data['secEduGrad3'] = $xml->education->educationsection[2]->grad;
		// 		// $data['secEduMajor3'] = $xml->education->educationsection[2]->major;
		// 		// $data['secEduClasses3'] = $xml->education->educationsection[2]->classes;

		// 		// $data['sec1title'] = $xml->infobody->section[0]->sectiontitle;
		// 		// $data['sec1title1'] = $xml->infobody->section[0]->subsection[0]->subsectiontitle;
		// 		// $data['sec1con1'] = $xml->infobody->section[0]->subsection[0]->subsectioncontent;
		// 		// $data['sec1title2'] = $xml->infobody->section[0]->subsection[1]->subsectiontitle;
		// 		// $data['sec1con2'] = $xml->infobody->section[0]->subsection[1]->subsectioncontent;
		// 		// $data['sec1title3'] = $xml->infobody->section[0]->subsection[2]->subsectiontitle;
		// 		// $data['sec1con3'] = $xml->infobody->section[0]->subsection[2]->subsectioncontent;
		// 		// //Custom section 2
		// 		// $data['sec2title'] = $xml->infobody->section[1]->sectiontitle;
		// 		// $data['sec2title1'] = $xml->infobody->section[1]->subsection[0]->subsectiontitle;
		// 		// $data['sec2con1'] = $xml->infobody->section[1]->subsection[0]->subsectioncontent;
		// 		// $data['sec2title2'] = $xml->infobody->section[1]->subsection[1]->subsectiontitle;
		// 		// $data['sec2con2'] = $xml->infobody->section[1]->subsection[1]->subsectioncontent;
		// 		// $data['sec2title3'] = $xml->infobody->section[1]->subsection[2]->subsectiontitle;
		// 		// $data['sec2con3'] = $xml->infobody->section[1]->subsection[2]->subsectioncontent;
		// 		// //Custom section 3a
		// 		// $data['sec3title'] = $xml->infobody->section[2]->sectiontitle;
		// 		// $data['sec3title1'] = $xml->infobody->section[2]->subsection[0]->subsectiontitle;
		// 		// $data['sec3con1'] = $xml->infobody->section[2]->subsection[0]->subsectioncontent;
		// 		// $data['sec3title2'] = $xml->infobody->section[2]->subsection[1]->subsectiontitle;
		// 		// $data['sec3con2'] = $xml->infobody->section[2]->subsection[1]->subsectioncontent;
		// 		// $data['sec3title3'] = $xml->infobody->section[2]->subsection[2]->subsectiontitle;
		// 		// $data['sec3con3'] = $xml->infobody->section[2]->subsection[2]->subsectioncontent;
		// 		$this->load->helper('form');
		// 		$this->load->helper('url');
		// 		$this->load->library('form_validation');
				
		// 		$headerData['pageTitle'] = " | Dashboard";

  //       		$this->load->view('templates/formheader', $headerData);
		// 		$this->load->view('templates/navbar');
		// 		$this->load->view('content/forminput',$data);
		// 		$this->load->view('templates/footer.php');
		// 	}
		// }
	}

	// public function update(){
	// 	$personName = htmlspecialchars($this->input->post('personName'),ENT_XML1);
	// 	$greeting = htmlspecialchars($this->input->post('greeting'),ENT_XML1);
	// 	$email = htmlspecialchars($this->input->post('email'),ENT_XML1);
	// 	$linkedin = htmlspecialchars($this->input->post('linkedin'),ENT_XML1);
	// 	$phone = htmlspecialchars($this->input->post('phone'),ENT_XML1);
	// 	$twitter = htmlspecialchars($this->input->post('twitter'),ENT_XML1);
	// 	$facebook = htmlspecialchars($this->input->post('facebook'),ENT_XML1);
	// 	$pagecolor = htmlspecialchars($this->input->post('pagecolor'),ENT_XML1);
	// 	$userHeaderFont = htmlspecialchars($this->input->post('userHeaderFont'), ENT_XML1);
	// 	$userContentFont = htmlspecialchars($this->input->post('userContentFont'), ENT_XML1);
	// 	$fontcolor = htmlspecialchars($this->input->post('fontcolor'), ENT_XML1);
	// 	$uploadimg = htmlspecialchars($this->input->post('uploadimg'), ENT_XML1);
	// 	$profileimg = htmlspecialchars($this->input->post('profileimg'), ENT_XML1);
	// 	$pagetheme = htmlspecialchars($this->input->post('pagetheme'),ENT_XML1);
	// 	$customCSS = htmlspecialchars($this->input->post('customCSS'), ENT_XML1);

	// 	$bioTitle = htmlspecialchars($this->input->post('bioTitle'), ENT_XML1);
	// 	$bioDescription = htmlspecialchars($this->input->post('bioDescription'), ENT_XML1);
		
	// 	//Getting the POST of all education stuff
	// 	$secEduTitle = htmlspecialchars($this->input->post('secEduTitle'),ENT_XML1);
	// 	$secEduSubTitle = htmlspecialchars($this->input->post('secEduSubTitle'),ENT_XML1);
	// 	for($i = 1; $i <= MAX_EDUCATION; $i++){
	// 		$temp = 'secEduSchool' . $i;
	// 		$$temp = htmlspecialchars($this->input->post('secEduSchool' . $i),ENT_XML1);
	// 		$temp = 'secEduLoc' . $i;
	// 		$$temp = htmlspecialchars($this->input->post('secEduLoc' . $i),ENT_XML1);
	// 		$temp = 'secEduGrad' . $i;
	// 		$$temp = htmlspecialchars($this->input->post('secEduGrad' . $i),ENT_XML1);
	// 		$temp = 'secEduMajor' . $i;
	// 		$$temp = htmlspecialchars($this->input->post('secEduMajor' . $i),ENT_XML1);
	// 		$temp = 'secEduClasses' . $i;
	// 		$$temp = htmlspecialchars($this->input->post('secEduClasses' . $i),ENT_XML1);
	// 	}
	// 	//Getting the POST of all experience stuff
	// 	$secExpTitle = htmlspecialchars($this->input->post('secExpTitle'),ENT_XML1);
	// 	$secExpSubTitle = htmlspecialchars($this->input->post('secExpSubTitle'),ENT_XML1);
	// 	for($i = 1; $i <= MAX_EXPERIENCE; $i++){
	// 		$temp = 'timeFrame' . $i;
	// 		$$temp = htmlspecialchars($this->input->post('timeFrame' . $i),ENT_XML1);
	// 		$temp = 'jobTitle' . $i;
	// 		$$temp = htmlspecialchars($this->input->post('jobTitle' . $i),ENT_XML1);
	// 		$temp = 'companyName' . $i;
	// 		$$temp = htmlspecialchars($this->input->post('companyName' . $i),ENT_XML1);
	// 		$temp = 'jobDescription' . $i;
	// 		$$temp = htmlspecialchars($this->input->post('jobDescription' . $i),ENT_XML1);
	// 	}
	// 	//Getting the POST of all project stuff
	// 	$secProjTitle = htmlspecialchars($this->input->post('secProjTitle'),ENT_XML1);
	// 	$secProjSubTitle = htmlspecialchars($this->input->post('secProjSubTitle'),ENT_XML1);
	// 	for($i = 1; $i <= MAX_PROJECTS; $i++){
	// 		$temp = 'projectName' . $i;
	// 		$$temp = htmlspecialchars($this->input->post('projectName' . $i),ENT_XML1);
	// 		$temp = 'projectDescription' . $i;
	// 		$$temp = htmlspecialchars($this->input->post('projectDescription' . $i),ENT_XML1);
	// 		$temp = 'projectLink' . $i;
	// 		$$temp = htmlspecialchars($this->input->post('projectLink' . $i),ENT_XML1);
	// 	}
	// 	//Getting the POST of all skills stuff
	// 	$secSkillsTitle = htmlspecialchars($this->input->post('secSkillsTitle'),ENT_XML1);
	// 	$secSkillsSubTitle = htmlspecialchars($this->input->post('secSkillsSubTitle'),ENT_XML1);
	// 	for($i = 1; $i <= MAX_SKILLS; $i++){
	// 		$temp = 'skill' . $i;
	// 		$$temp = htmlspecialchars($this->input->post('skill' . $i),ENT_XML1);
	// 	}
	// 	$toinsert = "<info>
	// 		<name>$personName</name>
	// 		<greeting>$greeting</greeting>
	// 		<email>$email</email>
	// 		<linkedin>$linkedin</linkedin>
	// 		<phone>$phone</phone>
	// 		<twitter>$twitter</twitter>
	// 		<facebook>$facebook</facebook>
	// 		<pagecolor>$pagecolor</pagecolor>
	// 		<uploadimg>$uploadimg</uploadimg>
	// 		<profileimg>$profileimg</profileimg>
	// 		<pagetheme>$pagetheme</pagetheme>
	// 		<userHeaderFont>$userHeaderFont</userHeaderFont>
	// 		<userContentFont>$userContentFont</userContentFont>
	// 		<fontcolor>$fontcolor</fontcolor>
	// 		<customCSS>$customCSS</customCSS>
	// 		<bio>
	// 			<bioTitle>$bioTitle</bioTitle>
	// 			<bioDescription>$bioDescription</bioDescription>
	// 		</bio>
	// 		<education>
	// 			<secEduTitle>$secEduTitle</secEduTitle>
	// 			<secEduSubTitle>$secEduSubTitle</secEduSubTitle>
	// 			<section>
	// 				<school>$secEduSchool1</school>
	// 				<loc>$secEduLoc1</loc>
	// 				<grad>$secEduGrad1</grad>
	// 				<major>$secEduMajor1</major>
	// 				<classes>$secEduClasses1</classes>
	// 			</section>
	// 			<section>
	// 				<school>$secEduSchool2</school>
	// 				<loc>$secEduLoc2</loc>
	// 				<grad>$secEduGrad2</grad>
	// 				<major>$secEduMajor2</major>
	// 				<classes>$secEduClasses2</classes>
	// 			</section>
	// 			<section>
	// 				<school>$secEduSchool3</school>
	// 				<loc>$secEduLoc3</loc>
	// 				<grad>$secEduGrad3</grad>
	// 				<major>$secEduMajor3</major>
	// 				<classes>$secEduClasses3</classes>
	// 			</section>
	// 		</education>
	// 		<experience>
	// 			<secExpTitle>$secExpTitle</secExpTitle>
	// 			<secExpSubTitle>$secExpSubTitle</secExpSubTitle>
	// 			<section>
	// 				<timeFrame>$timeFrame1</timeFrame>
	// 				<jobTitle>$jobTitle1</jobTitle>
	// 				<companyName>$companyName1</companyName>
	// 				<jobDescription>$jobDescription1</jobDescription>
	// 			</section>
	// 			<section>
	// 				<timeFrame>$timeFrame2</timeFrame>
	// 				<jobTitle>$jobTitle2</jobTitle>
	// 				<companyName>$companyName2</companyName>
	// 				<jobDescription>$jobDescription2</jobDescription>
	// 			</section>
	// 			<section>
	// 				<timeFrame>$timeFrame3</timeFrame>
	// 				<jobTitle>$jobTitle3</jobTitle>
	// 				<companyName>$companyName3</companyName>
	// 				<jobDescription>$jobDescription3</jobDescription>
	// 			</section>
	// 			<section>
	// 				<timeFrame>$timeFrame4</timeFrame>
	// 				<jobTitle>$jobTitle4</jobTitle>
	// 				<companyName>$companyName4</companyName>
	// 				<jobDescription>$jobDescription4</jobDescription>
	// 			</section>
	// 			<section>
	// 				<timeFrame>$timeFrame5</timeFrame>
	// 				<jobTitle>$jobTitle5</jobTitle>
	// 				<companyName>$companyName5</companyName>
	// 				<jobDescription>$jobDescription5</jobDescription>
	// 			</section>
	// 			<section>
	// 				<timeFrame>$timeFrame6</timeFrame>
	// 				<jobTitle>$jobTitle6</jobTitle>
	// 				<companyName>$companyName6</companyName>
	// 				<jobDescription>$jobDescription6</jobDescription>
	// 			</section>
	// 			<section>
	// 				<timeFrame>$timeFrame7</timeFrame>
	// 				<jobTitle>$jobTitle7</jobTitle>
	// 				<companyName>$companyName7</companyName>
	// 				<jobDescription>$jobDescription7</jobDescription>
	// 			</section>
	// 		</experience>
	// 		<projects>
	// 			<secProjTitle>$secProjTitle</secProjTitle> 	
	// 			<secProjSubTitle>$secProjSubTitle</secProjSubTitle>
	// 			<section>
	// 				<projectName>$projectName1</projectName>
	// 				<projectDescription>$projectDescription1</projectDescription>
	// 				<projectLink>$projectLink1</projectLink>
	// 			</section>
	// 			<section>
	// 				<projectName>$projectName2</projectName>
	// 				<projectDescription>$projectDescription2</projectDescription>
	// 				<projectLink>$projectLink2</projectLink>
	// 			</section>
	// 			<section>
	// 				<projectName>$projectName3</projectName>
	// 				<projectDescription>$projectDescription3</projectDescription>
	// 				<projectLink>$projectLink3</projectLink>
	// 			</section>
	// 			<section>
	// 				<projectName>$projectName4</projectName>
	// 				<projectDescription>$projectDescription4</projectDescription>
	// 				<projectLink>$projectLink4</projectLink>
	// 			</section>
	// 			<section>
	// 				<projectName>$projectName5</projectName>
	// 				<projectDescription>$projectDescription5</projectDescription>
	// 				<projectLink>$projectLink5</projectLink>
	// 			</section>
	// 			<section>
	// 				<projectName>$projectName6</projectName>
	// 				<projectDescription>$projectDescription6</projectDescription>
	// 				<projectLink>$projectLink6</projectLink>
	// 			</section>
	// 			<section>
	// 				<projectName>$projectName7</projectName>
	// 				<projectDescription>$projectDescription7</projectDescription>
	// 				<projectLink>$projectLink7</projectLink>
	// 			</section>
	// 		</projects>
	// 		<skills>
	// 			<secSkillsTitle>$secSkillsTitle</secSkillsTitle>
	// 			<secSkillsSubTitle>$secSkillsSubTitle</secSkillsSubTitle>
	// 			<skill>$skill1</skill>
	// 			<skill>$skill2</skill>
	// 			<skill>$skill3</skill>
	// 			<skill>$skill4</skill>
	// 			<skill>$skill5</skill>
	// 			<skill>$skill6</skill>
	// 			<skill>$skill7</skill>
	// 			<skill>$skill8</skill>
	// 			<skill>$skill9</skill>
	// 			<skill>$skill10</skill>
	// 			<skill>$skill11</skill>
	// 			<skill>$skill12</skill>
	// 			<skill>$skill13</skill>
	// 			<skill>$skill14</skill>
	// 			<skill>$skill15</skill>
	// 		</skills>
	// 	</info>";
	// 	$this->user_model->set_xml($this->tank_auth->get_username(), $toinsert);
	// 	$this->load->helper('url');
	// 	redirect(base_url() . $this->tank_auth->get_username(), 'refresh');
		
	// }

	// public function view($username = NULL){
	// 	$this->load->helper('url');
	// 	if($username != NULL){
	// 		//$username = $this->tank_auth->get_username();
	// 		$xmlstring = $this->user_model->get_xml($username);
	// 		$xml = simplexml_load_string($xmlstring);
            

	// 		if($xml != false){
	// 			$data = $this->prep_view($xml);

	// 			$pagetheme = $xml->pagetheme;
 //                if($pagetheme == null){
 //                	$pagetheme = 'theme1';
 //                }
                
 //                $data['MAX_EXPERIENCE'] = MAX_EXPERIENCE;
 //                $data['MAX_EDUCATION'] = MAX_EDUCATION;
 //                $data['MAX_SKILLS'] = MAX_SKILLS;
 //                $data['MAX_PROJECTS'] = MAX_PROJECTS;
 //                //var_dump($data);
 //                //$pagetheme = "theme5";
 //                //$this->load->view('test/viewtest',$data);
 //                //If the info in the entire section is left blank, we will not load the respective section.
 //               	 $this->load->view('usertemplates/'.$pagetheme.'/header', $data);
 //               	 if(!$this->is_blank($data, "bio")){
 //               	 	$this->load->view('usertemplates/'.$pagetheme.'/bio', $data);
 //               	 }
 //               	 if(!$this->is_blank($data, "education")){
 //               	 	$this->load->view('usertemplates/'.$pagetheme.'/education', $data);
 //               	 }
 //               	 if(!$this->is_blank($data, "experience")){
 //               	 	$this->load->view('usertemplates/'.$pagetheme.'/experience', $data);
 //               	 }
 //               	 if(!$this->is_blank($data, "projects")){
 //               	 	$this->load->view('usertemplates/'.$pagetheme.'/projects', $data);
 //               	 }
 //               	 if(!$this->is_blank($data, "skills")){
 //               	 	$this->load->view('usertemplates/'.$pagetheme.'/skills', $data);
 //               	 }
 //               	 if(!$this->is_blank($data, "contact")){
 //               	 	$this->load->view('usertemplates/'.$pagetheme.'/contact', $data);
 //               	 }
 //               	 $this->load->view('usertemplates/'.$pagetheme.'/footer', $data);

	// 		}
	// 		else if($this->tank_auth->is_logged_in() && $username == $this->tank_auth->get_username()){
	// 			$headerData['pageTitle'] = " | Empty Page";

	// 			$this->load->view('templates/header.php', $headerData);
	// 			$this->load->view('templates/navbar');
	// 			$this->load->view('content/nothing.php');
	// 			$this->load->view('templates/footer.php');
	// 		}
	// 		else{
	// 			$headerData['pageTitle'] = " | 404";
	// 	        $this->load->view('templates/header.php', $headerData);
	// 	        $this->load->view('templates/navbar');
	// 	        $this->load->view('content/error_404.php');
	// 	        $this->load->view('templates/footer.php');
	// 		}
	// 	}
	// 	else{
	// 		$headerData['pageTitle'] = " | 404";
	//         $this->load->view('templates/header.php', $headerData);
	//         $this->load->view('templates/navbar');
	//         $this->load->view('content/error_404.php');
	//         $this->load->view('templates/footer.php');
	// 	}
	// }
	// //set defaults for $data for forminput, if XML is empty. Passes by reference
	// private function set_default_values(&$data){
	// 	$data['personName'] = 'My Name';
	// 	$data['greeting'] = 'Welcome to my webpage.';
	// 	$data['email'] = '';
	// 	$data['linkedin'] = '';
	// 	$data['phone'] = '';
	// 	$data['twitter'] = '';
	// 	$data['facebook'] = '';
	// 	$data['pagecolor'] = '#ad4c4c';
	// 	$data['userHeaderFont'] = 'lato';
	// 	$data['userContentFont'] = 'lato';
	// 	$data['fontcolor'] = '#ffffff';
	// 	$data['uploadimg'] = '';
	// 	$data['profileimg'] = '';
	// 	$data['pagetheme'] = 'theme1';
	// 	$data['customCSS'] = '';

	// 	//BIO SECTION
	// 	$data['bioTitle'] = '';
	// 	$data['bioDescription'] = '';

	// 	//EDUCATION SECTION
	// 	$data['secEduTitle'] = 'Education';
	// 	$data['secEduSubTitle'] = '';

	// 	for($i = 1; $i <= MAX_EDUCATION; $i++){
	// 		$data['secEduSchool' . $i] = '';
	// 		$data['secEduLoc' . $i] = '';
	// 		$data['secEduGrad' . $i] = '';
	// 		$data['secEduMajor' . $i] = '';
	// 		$data['secEduClasses' . $i] = '';
	// 	}
	// 	//EXPERIENCE SECTION
	// 	$data['secExpTitle'] = 'Experience';
	// 	$data['secExpSubTitle'] = '';

	// 	for($i = 1; $i <= MAX_EXPERIENCE; $i++){
	// 		$data['timeFrame' . $i] = '';
	// 		$data['jobTitle' . $i] = '';
	// 		$data['companyName' . $i] = '';
	// 		$data['jobDescription' . $i] = '';
	// 	}

	// 	//PROJECT SECTION
	// 	$data['secProjTitle'] = 'Projects';
	// 	$data['secProjSubTitle'] = '';

	// 	for($i = 1; $i <= MAX_PROJECTS; $i++){
	// 		$data['projectName' . $i] = '';
	// 		$data['projectDescription' . $i] = '';
	// 		$data['projectLink' . $i] = '';
	// 	}

	// 	//SKILLS SECTION

	// 	$data['secSkillsTitle'] = 'Skills';
	// 	$data['secSkillsSubTitle'] = '';

	// 	for($i = 1; $i <= MAX_SKILLS; $i++){
	// 		$data['skill' . $i] = '';
	// 	}
	// }

	// private function set_previous_values($xml, &$data){
	// 	$data['personName'] = $xml->name;
	// 	$data['greeting'] = $xml->greeting;
	// 	$data['email'] = $xml->email;
	// 	$data['linkedin'] = $xml->linkedin;
	// 	$data['phone'] = $xml->phone;
	// 	$data['twitter'] = $xml->twitter;
	// 	$data['facebook'] = $xml->facebook;
	// 	$data['pagecolor'] = $xml->pagecolor;
	// 	$data['userHeaderFont'] = $xml->userHeaderFont;
	// 	$data['userContentFont'] = $xml->userContentFont;
	// 	$data['fontcolor'] = $xml->fontcolor;
	// 	$data['uploadimg'] = $xml->uploadimg;
	// 	$data['profileimg'] = $xml->profileimg;
	// 	$data['pagetheme'] = $xml->pagetheme;
	// 	$data['customCSS'] = $xml->customCSS;

	// 	//BIO SECTION
	// 	$data['bioTitle'] = $xml->bio->bioTitle;
	// 	$data['bioDescription'] = $xml->bio->bioDescription;

	// 	//EDUCATION SECTION
	// 	$data['secEduTitle'] = $xml->education->secEduTitle;
	// 	$data['secEduSubTitle'] = $xml->education->secEduSubTitle;
	// 	for($i = 1; $i <= MAX_EDUCATION; $i++){
	// 		$data['secEduSchool' . $i] = $xml->education->section[$i - 1]->school;
	// 		$data['secEduLoc' . $i] = $xml->education->section[$i - 1]->loc;
	// 		$data['secEduGrad' . $i] = $xml->education->section[$i - 1]->grad;
	// 		$data['secEduMajor' . $i] = $xml->education->section[$i - 1]->major;
	// 		$data['secEduClasses' . $i] = $xml->education->section[$i - 1]->classes;
	// 	}
	// 	//EXPERIENCE SECTION
	// 	$data['secExpTitle'] = $xml->experience->secExpTitle;
	// 	$data['secExpSubTitle'] = $xml->experience->secExpSubTitle;

	// 	for($i = 1; $i <= MAX_EXPERIENCE; $i++){
	// 		$data['timeFrame' . $i] = $xml->experience->section[$i - 1]->timeFrame;
	// 		$data['jobTitle' . $i] = $xml->experience->section[$i - 1]->jobTitle;
	// 		$data['companyName' . $i] = $xml->experience->section[$i - 1]->companyName;
	// 		$data['jobDescription' . $i] = $xml->experience->section[$i - 1]->jobDescription;
	// 	}

	// 	//PROJECT SECTION
	// 	$data['secProjTitle'] = $xml->projects->secProjTitle;
	// 	$data['secProjSubTitle'] = $xml->projects->secProjSubTitle;

	// 	for($i = 1; $i <= MAX_EXPERIENCE; $i++){
	// 		$data['projectName' . $i] = $xml->projects->section[$i - 1]->projectName;
	// 		$data['projectDescription' . $i] = $xml->projects->section[$i - 1]->projectDescription;
	// 		$data['projectLink' . $i] = $xml->projects->section[$i - 1]->projectLinke;
	// 	}

	// 	//SKILLS SECTION
	// 	$data['secSkillsTitle'] = $xml->skills->secSkillsTitle;
	// 	$data['secSkillsSubTitle'] = $xml->skills->secSkillsSubTitle;

	// 	for($i = 1; $i <= MAX_SKILLS; $i++){
	// 		$data['skill' . $i] = $xml->skills->skill[$i - 1];
	// 	}
	// }

	// private function prep_view($xml){
	// 	$data['personName'] = (string)$xml->name;
	// 	$data['greeting'] = (string)$xml->greeting;
	// 	$data['email'] = (string)$xml->email;
	// 	$data['linkedin'] = (string)$xml->linkedin;
	// 	$data['twitter'] = (string)$xml->twitter;
	// 	$data['facebook'] = (string)$xml->facebook;
	// 	$data['phone'] = (string)$xml->phone;
	// 	$data['pagecolor'] = (string)$xml->pagecolor;
	// 	$data['userHeaderFont'] = (string)$xml->userHeaderFont;
	// 	$data['userContentFont'] = (string)$xml->userContentFont;
	// 	$data['fontcolor'] = (string)$xml->fontcolor;
	// 	$data['uploadimg'] = (string)$xml->uploadimg;
	// 	$data['profileimg'] = (string)$xml->profileimg;
	// 	$data['customCSS'] = (string)$xml->customCSS;

	// 	$data['bioTitle'] = (string)$xml->bio->bioTitle;
	// 	$data['bioDescription'] = (string)$xml->bio->bioDescription;

	// 	//Preparing education
	// 	$data['secEduTitle'] = (string)$xml->education->secEduTitle;
	// 	$data['secEduSubTitle'] = (string)$xml->education->secEduSubTitle;
	// 	for($i = 1; $i <= MAX_EDUCATION; $i++){
	// 		$temp = 'secEduSchool' . $i;
	// 		$$temp = (string)$xml->education->section[$i - 1]->school;
	// 		$temp = 'secEduLoc' . $i;
	// 		$$temp = (string)$xml->education->section[$i - 1]->loc;
	// 		$temp = 'secEduGrad' . $i;
	// 		$$temp =(string) $xml->education->section[$i - 1]->grad;
	// 		$temp = 'secEduMajor' . $i;
	// 		$$temp = (string)$xml->education->section[$i - 1]->major;
	// 		$temp = 'secEduClasses' . $i;
	// 		$$temp = (string)nl2br($xml->education->section[$i - 1]->classes);
	// 	}
	// 	$data['secEduSchool'] = array($secEduSchool1, $secEduSchool2, $secEduSchool3);
	// 	$data['secEduLoc'] = array($secEduLoc1, $secEduLoc2, $secEduLoc3);
	// 	$data['secEduGrad'] = array($secEduGrad1, $secEduGrad2, $secEduGrad3);
	// 	$data['secEduMajor'] = array($secEduMajor1, $secEduMajor2, $secEduMajor3);
	// 	$data['secEduClasses'] = array($secEduClasses1, $secEduClasses2, $secEduClasses3);
	// 	//End preparing education

	// 	//Preparing experience
	// 	$data['secExpTitle'] = (string)$xml->experience->secExpTitle;
	// 	$data['secExpSubTitle'] = (string)$xml->experience->secExpSubTitle;
	// 	for($i = 1; $i <= MAX_EXPERIENCE; $i++){
	// 		$temp = 'timeFrame' . $i;
	// 		$$temp = (string)$xml->experience->section[$i - 1]->timeFrame;
	// 		$temp = 'jobTitle' . $i;
	// 		$$temp = (string)$xml->experience->section[$i - 1]->jobTitle;
	// 		$temp = 'companyName' . $i;
	// 		$$temp = (string)$xml->experience->section[$i - 1]->companyName;
	// 		$temp = 'jobDescription' . $i;
	// 		$$temp = (string)nl2br($xml->experience->section[$i - 1]->jobDescription);
	// 	}

	// 	$data['timeFrames'] = array($timeFrame1, $timeFrame2, $timeFrame3, $timeFrame4, $timeFrame5, $timeFrame6, $timeFrame7);
	// 	$data['jobTitles'] = array($jobTitle1, $jobTitle2, $jobTitle3, $jobTitle4, $jobTitle5, $jobTitle6, $jobTitle7);
	// 	$data['companyNames'] = array($companyName1, $companyName2, $companyName3, $companyName4, $companyName5, $companyName6, $companyName7);
	// 	$data['jobDescriptions'] = array($jobDescription1, $jobDescription2, $jobDescription3, $jobDescription4, $jobDescription5, $jobDescription6, $jobDescription7);
	// 	//End preparing experience

	// 	//Preparing projects
	// 	$data['secProjTitle'] = (string)$xml->projects->secProjTitle;
	// 	$data['secProjSubTitle'] = (string)$xml->projects->secProjSubTitle;
	// 	for($i = 1; $i <= MAX_PROJECTS; $i++){
	// 		$temp = 'projectName' . $i;
	// 		$$temp = (string)$xml->projects->section[$i - 1]->projectName;
	// 		$temp = 'projectDescription' . $i;
	// 		$$temp = (string)nl2br($xml->projects->section[$i - 1]->projectDescription);
	// 		$temp = 'projectLink' . $i;
	// 		$$temp = (string)$xml->projects->section[$i - 1]->projectLink;
	// 	}

	// 	$data['projectNames'] = array($projectName1, $projectName2, $projectName3, $projectName4, $projectName5, $projectName6, $projectName7);
	// 	$data['projectDescriptions'] = array($projectDescription1, $projectDescription2, $projectDescription3, $projectDescription4, $projectDescription5, $projectDescription6, $projectDescription7);
	// 	$data['projectLinks'] = array($projectLink1, $projectLink2, $projectLink3, $projectLink4, $projectLink5, $projectLink6, $projectLink7);
	// 	//End preparing projects

	// 	//Preparing skills
	// 	$data['secSkillsTitle'] = (string)$xml->skills->secSkillsTitle;
	// 	$data['secSkillsSubTitle'] = (string)$xml->skills->secSkillsSubTitle;
	// 	$data['skills'] = array();
	// 	for($i = 1; $i <= MAX_SKILLS; $i++){
	// 		//$temp = 'skill' . $i;
	// 		if($xml->skills->skill[$i - 1] != ''){
	// 			array_push($data['skills'], (string)$xml->skills->skill[$i - 1]);
	// 		}
	// 		// $temp = (string)$xml->skills->skill[$i - 1];
	// 	}
	// 	// $data['skills'] = array($skill1, $skill2, $skill3, $skill4, $skill5, $skill6, $skill7, $skill8, $skill9, $skill10, $skill11, $skill12, $skill13, $skill14, $skill15);
	// 	//End Preparing skills
 //        return $data;
	// }

	// private function is_blank(&$data, $category = ""){
	// 	if ($category == ""){
	// 		return true;
	// 	}
	// 	else if($category == "bio"){
	// 		if($data['bioTitle'] == '' && $data['bioDescription'] == ''){
	// 			return true;
	// 		}
	// 		else{
	// 			return false;
	// 		}
	// 	}
	// 	else if($category == "education"){
	// 		if($data['secEduTitle'] == '' && $data['secEduSubTitle'] == ''){
	// 			return true;
	// 		}
	// 		return false;
	// 	}
	// 	else if($category == "experience"){
	// 		if($data['secExpTitle'] == '' && $data['secExpSubTitle'] == ''){
	// 			return true;
	// 		}
	// 		return false;
	// 	}
	// 	else if($category == "projects"){
	// 		if($data['secProjTitle'] == '' && $data['secProjSubTitle'] == ''){
	// 			return true;
	// 		}
	// 		return false;

	// 	}
	// 	else if($category == "skills"){
	// 		if($data['secSkillsTitle'] == '' && $data['secSkillsSubTitle'] == ''){
	// 			return true;
	// 		}
	// 		return false;
	// 	}
	// 	else if($category == "contact"){
	// 		if($data['email'] == '' && $data['phone'] == '' && $data['linkedin'] == '' && $data['twitter'] == '' && $data['facebook'] == ''){
				
	// 			return true;
	// 		}
	// 		else{
	// 			return false;
	// 		}
	// 	}

	// }
}
