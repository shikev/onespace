<?php if($secExpTitle != '') {
        echo '
        <div id="experience" class="container section">
            <div class="row">
                <div class="col-sm-3 col-sm-offset-1">';
                echo '<h2 class="sectiontitle">' . $secExpTitle . '</h2>';
                echo '<p>' . $secExpSubTitle . '</p>';
                echo '</div><div class="col-sm-6 col-sm-offset-1">';
    
                for($i = 0; $i < $MAX_EXPERIENCE; $i++) {
                    if($jobTitles[$i] != ''){
                        echo '<h4 class="rowentry">' . $jobTitles[$i] . '</h4>';
                    }
                    if($companyNames[$i] != '') {
                        echo '<h5>' . $companyNames[$i];
                        if($timeFrames[$i] != '') {
                            echo ' | ' . $timeFrames[$i];
                        }
                        echo '</h5>';
                    }
                    else if($timeFrames[$i] != '') {
                            echo '<h5>' . $timeFrames[$i] . '<h5>';
                    }
                    if($jobDescriptions[$i]) {
                        echo '<p>' . $jobDescriptions[$i] . '</p>';
                    }
                }
                echo '
                </div>
            </div>
            <div class="row"><div class="col-sm-10 col-sm-offset-1"><hr class="sectionhr"></div></div>
        </div>';
    }?>
