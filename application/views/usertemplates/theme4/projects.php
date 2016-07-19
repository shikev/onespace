<div id="projects" class="info-section">

    <div class="container">
        <div class="row">
            <div class="col-md-3 col-md-offset-1">
                <div id="secProjTitle" class="title">
                    <?php echo $secProjTitle;?><br>
                </div>
                <div id="secProjSubTitle" class="sub-title">
                    <?php echo $secProjSubTitle;?>
                </div>
            </div>
        
        

            <div class="col-md-7 col-md-offset-1">

            <?php $rowblank = true;
                for($i = 0; $i < $MAX_PROJECTS; $i++){
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
</div>

<hr class="col-md-8 col-md-offset-2">