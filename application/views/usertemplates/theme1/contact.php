<?php if($email != '' || $linkedin != '' || $twitter != '' || $facebook != '') {
        echo '
        <div id="contact" class="container section">
            <div class="row">
                <div class="col-sm-3 col-sm-offset-1"><h2 class="sectiontitle">Contact</h2></div>
                <div class="col-sm-6 col-sm-offset-1" style="position:relative">';
                if($email != '') {
                    echo '<a href="mailto:';
                    echo $email;
                    echo '"><i class="icon icon-envelope icon-3x rowentry linkcircletop circlecolor"></i></a>';
                }
                if($linkedin != '') {
                    echo '<a href="';
                    echo $linkedin;
                    echo '" target="_blank"><i class="icon icon-linkedin icon-3x rowentry linkcircletop circlecolor"></i></a>';
                }
                if($facebook != '') {
                    echo '<a href="';
                    echo $facebook;
                    echo '" target="_blank"><i class="icon icon-facebook icon-3x rowentry linkcircle circlecolor"></i></a>';
                }
                if($twitter != '') {
                    echo '<a href="';
                    echo $twitter;
                    echo '" target="_blank"><i class="icon icon-twitter icon-3x rowentry linkcircle circlecolor"></i></a>';
                }
                echo '
                </div>
            </div>
            <div class="row"><div class="col-sm-10 col-sm-offset-1"><hr class="sectionhr"></div></div>
        </div>';
    }?>
