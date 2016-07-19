<div id="experience" class="info-section">
<div class="container-fluid">
<div class="row title-row">
<div class="col-md-4 col-md-offset-4 text-center">
    <div id="secEduTitle" class="title">
        <?php echo $secExpTitle;?><br>
    </div>
    <div id="secEduSubTitle" class="sub-title">
        <?php echo $secExpSubTitle;?>
    </div>
</div>
</div>

  <div class="single-item-carousel">
                <?php 
                for($i = 0; $i < $MAX_EXPERIENCE; $i++){
                    if($jobTitles[$i] != ''){
                      echo '<div>';
                        $rowBlank = false;
                        echo "<div id=\"jobTitle$i\" class=\"job-title\">
                                 $jobTitles[$i]<br>
                              </div>";
                      if($companyNames[$i] != ''){
                        echo "<div id=\"companyName$i\" class=\"company-name\">";
                        echo       $companyNames[$i];
                        if($timeFrames[$i] != ''){
                            echo ", $timeFrames[$i]";
                        }
                        echo "      </div>";
                      }
                      if($jobDescriptions[$i]){
                        echo "<div id=\"jobDescriptions$i\" class=\"job-description\">
                                $jobDescriptions[$i]
                                </div>";

                      }
                      echo '</div>';
                      }
                    }?>
  </div>               
                    
                    
                    
               
</div>

</div>
