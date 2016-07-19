<?php if($secEduTitle != '') {
        echo '
        <div id="education" class="container-fluid section">
            <div class="row titlerow">
                <div class="col-sm-6 col-sm-offset-3">';
            echo '<h2 class="userfontcolor sectiontitle">' . $secEduTitle . '</h2>';
            echo '<h3 class="userfontcolor">' . $secEduSubTitle . '</h3>';
            echo '</div></div>';
            echo '<div class="row><div class="col-sm-10 col-sm-offset-1">
            <div class="single-item-carousel">';
                for($i = 0; $i < $MAX_EDUCATION; $i++){
                    if($secEduSchool[$i] != '' || $secEduMajor[$i] != '' || $secEduClasses[$i] != ''){
                    echo '<div>';
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
                    if($secEduClasses[$i] != ''){
                        echo '<p>' . $secEduClasses[$i] . '</p>';
                    }
                    echo '</div>';
                    }
                }
                echo '</div>
                </div>
                </div>
                </div>';
    }?>


<div id="education" class="info-section">
<div class="container-fluid">
<div class="row title-row">
<div class="col-md-4 col-md-offset-4 text-center">
    <div id="secEduTitle" class="title">
        <?php echo $secEduTitle;?><br>
    </div>
    <div id="secEduSubTitle" class="sub-title">
        <?php echo $secEduSubTitle;?>
    </div>
</div>
</div>

              <div class="single-item-carousel">

                <?php 
                 for($i = 0; $i < $MAX_EDUCATION; $i++){
                    if($secEduSchool[$i] != '' || $secEduMajor[$i] != '' || $secEduClasses[$i] != ''){
                      echo '<div>';

                      if($secEduMajor[$i] != ''){
                        $rowBlank = false;
                        echo "<div id=\"edu-major\" class=\"school-major\">
                                 $secEduMajor[$i]<br>
                              </div>";
                      }
                      if($secEduSchool[$i] != ''){
                          echo "<div id=\"edu-school\" class=\"school-details\">
                                  $secEduSchool[$i]";
                          if($secEduLoc[$i] != ''){
                              echo ", $secEduLoc[$i]";
                          }
                          if($secEduGrad[$i] != ''){
                              echo ", $secEduGrad[$i]";
                          }
                          echo '<br></div>';
                      }
                      if($secEduClasses[$i] != ''){
                          echo '<div class="school-courses">';
                          echo $secEduClasses[$i];
                          echo '</div>';
                      }
                      echo '</div>';
                    }
                    
                }?>
            </div>

</div>


</div>

</div>
