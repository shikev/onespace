<?php
if ($use_username) {
	$username = array(
		'name'	=> 'username',
		'id'	=> 'username',
		'value' => set_value('username'),
		'maxlength'	=> $this->config->item('username_max_length', 'tank_auth'),
		'size'	=> 30,
		'class' => 'form-control login',
		'onblur' => 'checkEmpty(this);'
	);
}
$email = array(
	'name'	=> 'email',
	'id'	=> 'email',
	'value'	=> set_value('email'),
	'maxlength'	=> 80,
	'size'	=> 30,
	'class' => 'form-control login',
	'onblur' => 'checkEmpty(this);'
);
$password = array(
	'type' => 'password',
	'name'	=> 'password',
	'id'	=> 'password',
	'value' => set_value('password'),
	'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
	'size'	=> 30,
	'class' => 'form-control login',
	'onblur' => 'checkEmpty(this);'
);
$confirm_password = array(
	'type' => 'password',
	'name'	=> 'confirm_password',
	'id'	=> 'confirm_password',
	'value' => set_value('confirm_password'),
	'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
	'size'	=> 30,
	'class' => 'form-control login',
	'onblur' => 'checkEmpty(this);'
);
$captcha = array(
	'name'	=> 'captcha',
	'id'	=> 'captcha',
	'maxlength'	=> 8,
);
?>

    <div id="content">
        <div class="container-fluid home-section">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3 visible-sm" style="margin-top:-30px; margin-bottom:15px;">
                    <img src="<?php echo base_url();?>/assets/img/onespace_logo.png" class="img-responsive"></img>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 visible-xs" style="margin-top:-75px;">
                    <img src="<?php echo base_url();?>/assets/img/onespace_logo.png" class="img-responsive col-xs-12"></img>
                    <img src="<?php echo base_url();?>/assets/img/theme2macbook.png" class="img-responsive col-xs-12" style="margin-top:30px; margin-bottom:15px;"></img>
                    <h1>Your professional webpage crafted in minutes.</h1>
                    <p>Unlike other website builders, Onespace is designed with one goal in mind - to make it as fast and as easy as possible for you to generate a professional webpage.</p>
                    <h3>Sign up now to try it out!</h3>
                </div>
                <div class="col-md-6 col-md-offset-1 col-sm-6 hidden-xs computerimg">
                    <img src="<?php echo base_url();?>/assets/img/theme2macbook.png" class="img-responsive"></img>
                    <!--
            <div id="imageCarousel" class="carousel slide" data-ride="carousel">
                 Indicators 
                <ol class="carousel-indicators">
                    <li data-target="#imageCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#imageCarousel" data-slide-to="1"></li>
                    <li data-target="#imageCarousel" data-slide-to="2"></li>
                </ol>

                 Wrapper for slides 
                <div class="carousel-inner" role="listbox">
                     MAKE SURE ALL IMAGES ARE THE SAME SIZE
                    <div class="item">
                        <img src="<?php echo base_url();?>/assets/img/themedefault.png" alt="Default Theme">
                    </div>

                    <div class="item">
                        <img src="<?php echo base_url();?>/assets/img/theme2.png" alt="Theme 2">
                    </div>

                    <div class="item active">
                        <img src="<?php echo base_url();?>/assets/img/theme4.png" alt="Theme 4">
                    </div>
                </div>

                 Left and right controls 
                <a class="left carousel-control" href="#imageCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#imageCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
-->
                </div>
                <div class="col-md-4 col-sm-6 hidden-xs">
                    <img src="<?php echo base_url();?>/assets/img/onespace_logo.png" class="img-responsive hidden-sm"></img>
                    <h1>Your professional webpage crafted in minutes.</h1>
                    <p>Unlike other website builders, Onespace is designed with one goal in mind - to make it as fast and easy as possible for you to create your personal, professional webpage.</p>
                    <h3>Sign up now to get started!</h3>
                </div>
            </div>
        </div>

        <?php if($this->tank_auth->is_logged_in()){
                }
                else {
                    echo '<div class="container-fluid home-form"><div class="row">';
                            echo form_open(base_url() . 'auth/register');
                            if($use_username) {
                                echo '<div class="col-md-2 col-md-offset-1 col-sm-2 col-xs-6"><div class="heading" id="username">Username</div>
                                <div class="input-group field login" id="usernameValidGroup">';
                                    echo form_input($username);
                                echo '</div></div>
                                <div class="error">';
                                    echo form_error($username['name']);
                                        echo isset($errors[$username['name']])?$errors[$username['name']]:'';
                                echo '</div>';
                                }
                                    echo '<div class="col-md-2 col-sm-2 col-xs-6"><div class="heading" id="email">Email address</div>
                                    <div class="input-group field login" id="emailValidGroup">';
                                        echo form_input($email);
                                    echo '</div></div>
                                    <div class="error">';
                                        echo form_error($email['name']);
                                            echo isset($errors[$email['name']])?$errors[$email['name']]:'';
                                    echo '</div>
                                    <div class="col-md-2 col-sm-3 col-xs-6"><div class="heading" id="password">Password</div>
                                    <div class="input-group field login" id="passwordValidGroup">';
                                        echo form_input($password);
                                    echo '</div></div>
                                    <div class="error">';
                                        echo form_error($password['name']);
                                    echo '</div>
                                    <div class="col-md-2 col-sm-3 col-xs-6"><div class="heading" id="confirm_password">Confirm password</div>
                                    <div class="input-group field login" id="confirm_passwordValidGroup">';
                                        echo form_input($confirm_password);
                                    echo '</div></div>
                                    <div class="error">';
                                        echo form_error($confirm_password['name']);
                                    echo '</div><div class="col-md-2 col-sm-2" style="text-align:center;">
                                    <button type="submit" value="register" name="register" class="btn btn-hollow btn-form login">Sign me up!</button></div>';

                                    echo form_close();
                    echo '</div></div>';
        }?>

        <div id="image-container" class="home-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-5 col-md-offset-1 col-sm-6">
                        <h2><span class="bolder">Simple. Mobile friendly. Free.</span></h2>
                        <p>Onespace generates your responsive, mobile-friendly webpage and ensures that you are represented professionally regardless of who views your page - from friends to recruiters.</p>
                        <p>Anyone who you share your personal link with can view your webpage on any device. And it's all yours. You are free to get a custom domain and download your page's source code and host it as you wish.</p>
                    </div>
                    <div class="col-md-4 col-md-offset-1 col-sm-6">
                        <h2><span class="bolder">No-nonsense editor.</span></h2>
                        <p>We don't believe in laggy animations, ridiculous point systems, or paying to unlock certain features. That's why Onespace's dashboard is very clean and easy to use.</p>
                        <p>All you have to do is fill out your information, pick some stlyes, and let us do the rest of the work for you.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container home-section center-text">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
                    <h1>Four steps to get you up and running.</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 col-md-offset-2 col-sm-3">
                    <h3>Enter your content.</h3>
                    <img src="<?php echo base_url();?>/assets/img/circle-form.png" class="img-responsive circlesteps"></img>
                    <p>Simply use your résumé information.</p>
                </div>
                <div class="col-md-2 col-sm-3">
                    <h3>Style your webpage.</h3>
                    <img src="<?php echo base_url();?>/assets/img/circle-layout.png" class="img-responsive circlesteps"></img>
                    <p>Select from four unique themes.</p>
                </div>
                <div class="col-md-2 col-sm-3">
                    <h3>Publish your webpage.</h3>
                    <img src="<?php echo base_url();?>/assets/img/circle-published.png" class="img-responsive circlesteps"></img>
                    <p>Customize it with advanced settings.</p>
                </div>
                <div class="col-md-2 col-sm-3">
                    <h3>Host it here for free.</h3>
                    <img src="<?php echo base_url();?>/assets/img/circle-internet.png" class="img-responsive circlesteps"></img>
                    <p>View your page at <span class="small-text os-darkgray">onespace.io/username</span>.</p>
                </div>
            </div>
        </div>
    </div>