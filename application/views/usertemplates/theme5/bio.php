<?php if($bioDescription != '' || $bioTitle != '') {
                echo '<div id="bio" class="info-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">';
                    echo '<h1>';
                    echo $bioTitle;
                    echo '</h1>';
                    echo '<p>';
                    echo $bioDescription;
                    echo '</p>
                </div>
            </div>
        </div>
    </div>';
    }?>