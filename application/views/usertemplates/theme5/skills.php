<div id="skills" class="info-section">
    <div class="container">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
                <h1><?php echo $secSkillsTitle;?></h1><br>
                <h3><?php echo $secSkillsSubTitle;?></h3>
            
                <div class="skill-wrapper">
            <?php 
                $firstrow = false;
                $onlyfirst = true;
                $secondrow = false;
                $onlysecond = true;
                $thirdrow = false;
                for($i = 0; $i < count($skills); $i++){
                    if($skills[$i] != ''){
                        if($i < 5){
                          if(!$firstrow){
                            echo '<div class="hex-row-list">';
                            $firstrow = true;
                          }
                          echo "<div id=\"skill$i\" class=\"skill-item\">
                                <div class=\"hex\" style=\"cursor:auto\"><div class=\"top\"></div><div class=\"middle text-center\">$skills[$i]</div><div class=\"bottom\"></div></div>";
                        }
                        else if($i >= 5 && $i < 10){
                          $onlyfirst = false;
                          if(!$secondrow){
                            echo '</div>
                            <div class="hex-row-list even">';
                            $secondrow = true;
                          }
                          echo "<div id=\"skill$i\" class=\"skill-item\">
                                <div class=\"hex\" style=\"cursor:auto\"><div class=\"top\"></div><div class=\"middle text-center\">$skills[$i]</div><div class=\"bottom\"></div></div>";
                        }
                        else{
                          $onlysecond = false;
                          if(!$thirdrow){
                            echo '</div>
                            <div class="hex-row-list">';
                            $thirdrow = true;
                          }
                          echo "<div id=\"skill$i\" class=\"skill-item\">
                                <div class=\"hex\" style=\"cursor:auto\"><div class=\"top\"></div><div class=\"middle text-center\">$skills[$i]</div><div class=\"bottom\"></div></div>";
                        }
                    }
                  echo '</div>';
                }?>
                </div>
              </div>
  
            
        </div>
    </div>
</div>

</div>
