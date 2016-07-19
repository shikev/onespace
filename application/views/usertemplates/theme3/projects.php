<div id="education" class="info-section">
<div class="container-fluid">
<div class="row title-row">
<div class="col-md-4 col-md-offset-4 text-center">
    <div id="secEduTitle" class="title">
        <?php echo $secProjTitle;?><br>
    </div>
    <div id="secEduSubTitle" class="sub-title">
        <?php echo $secProjSubTitle;?>
    </div>
</div>
</div>

<div class="single-item-carousel">
                <?php 
                 for($i = 0; $i < $MAX_PROJECTS; $i++){
                    if($projectNames[$i] != ''){
                      echo '<div>';
                      if($projectNames[$i] != ''){
                        echo "<div id=\"projectName\"$i class=\"project-name\">
                                 $projectNames[$i]<br>
                              </div>";
                      }
                      if($projectDescriptions[$i] != ''){
                          echo "<div id=\"projectDescription\"$i class=\"project-description\">
                                  $projectDescriptions[$i]
                                  </div>";
                      }
                      if($projectLinks[$i] != ''){
                          echo "<div id=\"projectLink\"$i class=\"project-link\">
                                  $projectLinks[$i]
                                  </div>";
                      }
                      echo '</div>';
                    }
                    
                }?>
</div>
            







</div>

</div>

