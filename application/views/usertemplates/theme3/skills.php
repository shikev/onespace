<div id="education" class="info-section">
<div class="container-fluid">
<div class="row title-row">
<div class="col-md-4 col-md-offset-4 text-center">
    <div id="secEduTitle" class="title">
        <?php echo $secSkillsTitle;?><br>
    </div>
    <div id="secEduSubTitle" class="sub-title">
        <?php echo $secSkillsSubTitle;?>
    </div>
</div>
</div>





<div class="multi-item-carousel">
    <?php 
     for($i = 0; $i < $MAX_SKILLS; $i++){
        if($skills[$i] != ''){
          echo '<div>';
          echo "<div id=\"skill$i\">
                    <div class=\"skill-item text-center\">
                      <div class=\"skill-text\">
                        $skills[$i]
                      </div>
                    </div>
                  </div>";
          echo '</div>';
        }
        
    }?>
</div>


</div>

</div>
