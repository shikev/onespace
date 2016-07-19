<?php
$button_attributes = array(
    'class' => 'btn btn-filled donate',
    'name' => 'btnSubmit',
    'content' => 'Donate',
    'type' => 'submit'
);
$money_attributes = array(
      'name'        => 'moneybox',
      'id'          => 'moneybox',
      'maxlength'   => '6',
      'class' => 'form-control moneybox',
      'placeholder' => '4.54',
      'onblur' => 'checkEmpty(this);',
      'required' => 'required'
);
$note_attributes = array(
    'name'        => 'notebox',
    'id'          => 'notebox',
    'class' => 'form-control',
    'placeholder' => 'Leave a note for us!',
    'onblur' => 'checkEmpty(this);',
    'required' => 'required',
    'rows' => '2'
);
?>
<div id="content">
    <?php echo form_open('pages/receive_donation'); ?>
        <div class="container form donate">
            <div class="title">Make a Donation</div>

            <div class="heading">Amount:</div>
            <div class="input-group field" id="moneyboxValidGroup">
                <div class="input-group-addon">$</div>
                <?php echo form_input($money_attributes); ?>
            </div>

            <div class="heading">Message:</div>
            <div class="field" id="noteboxValidGroup">
                <?php echo form_textarea($note_attributes); ?>
            </div>

        <!--        <button type="submit" class="btn btn-primary btn-donate"><img class="lock" src="white%20lock.png"> Donate</button>-->
            <?php echo form_button($button_attributes); ?>


            <div class="icon-holder">
                Powered by
                <img class="venmo-icon" src="<?php echo base_url(); ?>assets/img/venmo icon.png">
            </div>
        </div>
    <?php form_close(); ?>
</div>
