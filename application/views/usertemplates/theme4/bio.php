<?php if($bioDescription != '' || $bioTitle != '') {
                echo '<div id="bio" class="info-section">
        <div class="container">
            <div class="col-md-8 col-md-offset-2">
                <div class="row">';
                    
                    echo '<h1>';
                    echo $bioTitle;
                    echo '</h1>';
                    if($profileimg != '') {
                                echo '<img class="img-circle" height=200 src="';
                                echo $profileimg;
                                echo '">';
                            }
                echo '
                    <div id="bioDescription" class="col-sm-8 col-sm-offset-2">
                        <p>';
                    echo $bioDescription;
                    echo '</p>
                    </div>
                </div>
            </div>
        </div>
    </div>';
    }?>