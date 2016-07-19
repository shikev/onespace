<?php
$button_attributes = array(
    'class' => 'btn btn-filled contact',
    'id' => 'btnContact',
    'name' => 'btnSubmit',
    'content' => 'Send',
    'type' => 'submit'
);
$name_attributes = array(
      'name'        => 'namebox',
      'id'          => 'namebox',
      'class' => 'form-control namebox',
      'placeholder' => 'My Name',
      'onblur' => 'checkEmpty(this);',
      'required' => 'required'
);
$email_attributes = array(
      'name'        => 'emailbox',
      'id'          => 'emailbox',
      'class' => 'form-control emailbox',
      'placeholder' => 'my.name@email.com',
      'onblur' => 'checkEmpty(this);',
      'required' => 'required'
);
$subject_options = array(
    'question' => 'I have a question',
    'comment' => 'I have a comment',
    'idea' => 'I have an idea',
    'bug' => 'I found a bug',
);
$msg_attributes = array(
    'name'        => 'msgbox',
    'id'          => 'msgbox',
    'class' => 'form-control',
    'placeholder' => 'I would like to let you know that...',
    'onblur' => 'checkEmpty(this);',
    'required' => 'required',
    'rows' => '2'
);
?>

<div id="content">
    <div class="container normal-section">
        <div class="row">
            <div class="col-md-5 col-md-offset-1 col-sm-6">
                <h1>Contact Us</h1>
                <h3>We listen.</h3>
                <p>If you have any questions, comments, bugs to report, or simply want us to add a feature you think is cool, feel free to use the form or email us at:</p>
                <h3 style="margin-top:0px;margin-bottom:20px;"><a href="mailto:contact.onespace@gmail.com">contact.onespace@gmail.com</a></h3>
                
                <?php if(isset($success)){
                  echo '<p>Your message has been sent! We\'ll try to get back to you as soon as we can.</p>';
                }
                else{
                  echo '<p>We\'ll try to get back to you as soon as we can.</p>';
                }?>
            </div>
            <div class="col-md-4 col-md-offset-1 col-sm-6">
                <form id="formContact" action="<?php echo base_url() . 'pages/contact'?>" method="post">
                    <div class="container form contact">
                        <div class="title">Send a Message</div>

                        <div class="heading">Name</div>
                        <div class="field" id="nameboxValidGroup">
                            <?php echo form_input($name_attributes); ?>
                        </div>
                        <div class="error">
                          <?php echo form_error('namebox')?>
                        </div>

                        <div class="heading">Email address</div>
                        <div class="field" id="emailboxValidGroup">
                            <?php echo form_input($email_attributes); ?>
                        </div>
                        <div class="error">
                          <?php echo form_error('emailbox')?>
                        </div>

                        <div class="heading">Subject</div>
                        <div class="field" id="subjectboxValidGroup">
                            <?php echo form_dropdown('subject',$subject_options,'question'); ?>
                        </div>
                        <div class="error">
                          <?php echo form_error('subject')?>
                        </div>

                        <div class="heading">Message</div>
                        <div class="field" id="msgboxValidGroup">
                            <?php echo form_textarea($msg_attributes); ?>
                        </div>
                        <div class="error">
                         <?php echo form_error('msgbox')?>
                        </div>

                    <!--        <button type="submit" class="btn btn-primary btn-donate"><img class="lock" src="white%20lock.png"> Donate</button>-->
                        <?php echo form_button($button_attributes); ?>

                    </div>
                <?php form_close(); ?>
            </div>
        </div>
    </div>
</div>