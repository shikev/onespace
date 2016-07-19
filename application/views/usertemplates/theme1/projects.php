<?php if($secProjTitle != '') {
        echo '
        <div id="projects" class="container section">
            <div class="row">
                <div class="col-sm-3 col-sm-offset-1">';
                echo '<h2 class="sectiontitle">' . $secProjTitle . '</h2>';
                echo '<p>' . $secProjSubTitle . '</p>';
                echo '</div><div class="col-sm-6 col-sm-offset-1">';
    
                for($i = 0; $i < $MAX_PROJECTS; $i++) {
                    if($projectNames[$i] != ''){
                        echo '<h4 class="rowentry">' . $projectNames[$i] . '</h4>';
                    }
                    if($projectDescriptions[$i]) {
                        echo '<p>' . $projectDescriptions[$i] . '</p>';
                    }
                    if($projectLinks[$i] != ''){
                        echo '<p><a href="' . $projectLinks[$i] . '">More information.</a></p>';
                    }
                }
                echo '
                </div>
            </div>
            <div class="row"><div class="col-sm-10 col-sm-offset-1"><hr class="sectionhr"></div></div>
        </div>';
    }?>
