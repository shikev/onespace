<div id="contact">
    <div class="container">
    <hr class="col-md-8 col-md-offset-2">
        <div class="row">

            <div class="col-sm-4 col-sm-offset-4 text-center">
                <?php if($email != '') {
                    echo '<a id="email-icon" href="mailto:';
                    echo $email;
                    echo '"><i class="footer-icon icon icon-envelope icon-2x icon-fw"></i></a>';
                }?>
                <?php if($linkedin != '') {
                    echo '<a id="linkedin-icon" href="';
                    echo $linkedin;
                    echo '" target="_blank"><i class="footer-icon icon icon-linkedin icon-2x icon-fw"></i></a>';
                }?>
                <?php if($facebook != '') {
                    echo '<a id="facebook-icon" href="';
                    echo $facebook;
                    echo '" target="_blank"><i class="footer-icon icon icon-facebook icon-2x icon-fw"></i></a>';
                }?>
                <?php if($twitter != '') {
                    echo '<a id="twitter-icon" href="';
                    echo $twitter;
                    echo '" target="_blank"><i class="footer-icon icon icon-twitter icon-2x icon-fw"></i></a>';
                }?>
            </div>
        </div>
    </div>
</div>