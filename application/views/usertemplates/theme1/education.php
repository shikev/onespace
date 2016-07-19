<?php if($secEduTitle != '') {
        echo '
        <div id="education" class="container section">
            <div class="row">
                <div class="col-sm-3 col-sm-offset-1">';
                echo '<h2 class="sectiontitle">' . $secEduTitle . '</h2>';
                echo '<p>' . $secEduSubTitle . '</p>';
    
                echo '</div><div class="col-sm-6 col-sm-offset-1">';
    
                for($i = 0; $i < $MAX_EDUCATION; $i++){
                    if($secEduSchool[$i] != ''){
                        echo '<h4 class="rowentry">' . $secEduSchool[$i];
                        if ($secEduLoc[$i] != ''){
                            echo '<span class="smalltitle">' . $secEduLoc[$i] . '</span>';
                        }
                        echo '</h4>';
                    }
                    if($secEduMajor[$i] != ''){
                        echo '<h5>' . $secEduMajor[$i];
                        if($secEduGrad[$i] != ''){
                            echo ' | ' . $secEduGrad[$i];
                        }
                        echo '</h5>';
                    }
                    else if($secEduGrad[$i] != ''){
                            echo '<h5>' . $secEduGrad[$i]. '</h5>';
                    }
                    if($secEduClasses[$i] != ''){
                        echo '<p>' . $secEduClasses[$i] . '</p>';
                    }
                }
                echo '
                </div>
            </div>
            <div class="row"><div class="col-sm-10 col-sm-offset-1"><hr class="sectionhr"></div></div>
        </div>';
    }?>
