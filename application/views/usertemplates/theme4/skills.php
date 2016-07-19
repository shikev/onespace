<div id="skills" class="info-section">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-md-offset-1">
                <div id="secSkillsTitle" class="title">
                    <?php echo $secSkillsTitle;?><br>
                </div>
                <div id="secSkillsSubTitle" class="sub-title">
                    <?php echo $secSkillsSubTitle;?>
                </div>
            </div>
        
        

            <div class="col-md-7 col-md-offset-1">

            <?php 
                for($i = 0; $i < $MAX_SKILLS; $i++){
                    if($skills[$i] != ''){
                        
                        echo "<div id=\"skill$i\">
                                <li class=\"skill-item\">$skills[$i]</li>
                              </div>";
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
                <br><br>
                
            </div>
        </div>
    </div>
</div>

