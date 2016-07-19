<div id="experience" class="info-section">

    <div class="container">
        <div class="row">
            <div class="col-md-3 col-md-offset-1">
                <div id="secExpTitle" class="title">
                    <?php echo $secExpTitle;?><br>
                </div>
                <div id="secExpSubTitle" class="sub-title">
                    <?php echo $secExpSubTitle;?>
                </div>
            </div>
        
        

            <div class="col-md-7 col-md-offset-1">

            <?php $rowBlank = true;
                for($i = 0; $i < $MAX_EXPERIENCE; $i++){
                    $rowBlank = true;
                    if($jobTitles[$i] != ''){
                        $rowBlank = false;
                        echo "<div id=\"jobTitle$i\" class=\"job-title\">
                                 $jobTitles[$i]<br>
                              </div>";
                    }
                    if($companyNames[$i] != ''){
                        $rowBlank = false;
                        echo "<div id=\"companyName$i\" class=\"company-name\">";
                        echo       $companyNames[$i];
                        if($timeFrames[$i] != ''){
                            echo ", $timeFrames[$i]";
                        }
                        echo "      </div>";
                    }
                    
                    if($jobDescriptions[$i]){
                        $rowBlank = false;
                        echo "<div id=\"jobDescriptions$i\" class=\"job-description\">
                                $jobDescriptions[$i]
                                </div>";
                    }
                    if(!$rowBlank){
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