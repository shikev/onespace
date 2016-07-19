	<div id="contact" class="contact-row">
           <div class="hex-row">
           <?php
               if($email != ''){
                echo '<div id="email" class="hex"><div class="top"></div><div class="middle text-center">';
                echo '<a href="mailto:';
                echo $email;
                echo '"><i class="icon icon-envelope icon-3x rowentry linkcircletop circlecolor"></i></a>';
                echo '</div><div class="bottom"></div></div>';
               }
               if($linkedin != ''){
                echo '<div id="linkedin" class="hex"><div class="top"></div><div class="middle text-center">';
				echo '<a href="';
                echo $linkedin;
                echo '" target="_blank"><i class="icon icon-linkedin icon-3x rowentry linkcircletop circlecolor"></i></a>';
                echo '</div><div class="bottom"></div></div>';
               }
               if($twitter != ''){
                echo '<div id="projhex" class="hex"><div class="top"></div><div class="middle text-center">';
                echo '<a href="';
                echo $twitter;
                echo '" target="_blank"><i class="icon icon-twitter icon-3x rowentry linkcircle circlecolor"></i></a>';
                echo '</div><div class="bottom"></div></div>';
               }
               if($facebook != ''){
                echo '<div id="skillshex" class="hex"><div class="top"></div><div class="middle text-center">';
                echo '<a href="';
                echo $facebook;
                echo '" target="_blank"><i class="icon icon-facebook icon-3x rowentry linkcircle circlecolor"></i></a>';
                echo '</div><div class="bottom"></div></div>';
               }
           ?>
           </div>
        </div>