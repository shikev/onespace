<?php if($bioDescription != '' || $bioTitle != '') {
                echo '
        <div id="bio" class="container section">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">';
                echo '<h2 class="biotitle">' . $bioTitle . '</h2>';
                echo '<p>' . $bioDescription . '</p>';
                echo '
                </div>
            </div>
            <div class="row"><div class="col-sm-10 col-sm-offset-1"><hr class="sectionhr"></div></div>
        </div>';
    }?>
