<div id="education" class="info-section">
    <div class="container">
        <div class="row">
        <div class="col-md-8 col-md-offset-2">

                <h1>
                    <?php echo $secEduTitle;?><br>
                </h1>
                <h3>
                    <?php echo $secEduSubTitle;?>
                </h3>
                <?php 
                for($i = 0; $i < $MAX_EDUCATION; $i++){
                    $rowBlank = true;
                        if($secEduMajor[$i] != ''){
                            $rowBlank = false;
                            echo "<div id=\"edu-major\" class=\"school-major\">
                                     $secEduMajor[$i]<br>
                                  </div>";
                        }
                        if($secEduSchool[$i] != ''){
                            $rowBlank = false;
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
                            $rowBlank = false;
                            echo '<div class="school-courses">';
                            echo $secEduClasses[$i];
                            echo '</div>';
                        }
                        if(!$rowBlank){
                            echo '<br><br>';
                        }
                        
                    }?>
              </div>
          </div>
      </div>
  </div>