<div id="projects" class="info-section">

    <div class="container">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
                <h1 id="secProjTitle"><?php echo $secProjTitle;?></h1><br>
                <h3 id="secProjSubTitle"><?php echo $secProjSubTitle;?></h3>

            <?php 
                for($i = 0; $i < $MAX_PROJECTS; $i++){
                    $rowblank = true;
                    if($projectNames[$i] != ''){
                        $rowblank = false;
                        echo "<div id=\"projectName\"$i class=\"project-name\">
                                 $projectNames[$i]<br>
                              </div>";
                    }
                    if($projectDescriptions[$i] != ''){
                        $rowblank = false;
                        echo "<div id=\"projectDescription\"$i class=\"project-description\">
                                $projectDescriptions[$i]
                                </div>";
                    }
                    if($projectLinks[$i] != ''){
                        $rowblank = false;
                        echo "<div id=\"projectLink\"$i class=\"project-link\">
                                <a href=\"$projectLinks[$i]\">Learn More</a>
                                </div>";
                    }
                    if(!$rowblank){
                        echo '<br><br>';
                    }
                    
                }?>
      </div>



                
               <!--  <div id="edu-school">
                    U of M, Ann Arbor, MI, 2014-2017<br>
                </div>
                <div id="edu-courses">
                    <u>Courses</u><br>
                    ENGR100<br>
                    ENGR151<br>
                    EECS281<br>
                </div> -->

                
          </div>
      </div>
  </div>
