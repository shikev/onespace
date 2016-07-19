<?php if($secSkillsTitle != '') {
        echo '
        <div id="skills" class="container-fluid section">
            <div class="row">
                <div class="col-sm-3 col-sm-offset-1">';
                echo '<h3 class="sectiontitle">' . $secSkillsTitle . '</h3>';
                echo '<p>' . $secSkillsSubTitle . '</p>';
                echo '</div><div class="col-sm-6 col-sm-offset-1">';
                echo '<h5><ul class="rowentry">';
                for($i = 0; $i < count($skills); $i++) {
                    if($skills[$i] != ''){
                        echo '<li>' . $skills[$i] . '</li>';
                    }
                }
                echo '</ul><h5>
                </div>
            </div>
            <div class="row"><div class="col-sm-10 col-sm-offset-1"><hr class="sectionhr"></div></div>
        </div>';
    }?>
