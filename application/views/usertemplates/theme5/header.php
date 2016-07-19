<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Tiberiu Vilcu</title>
    <meta name="description" content=<?php echo '"' . $personName . '"'?>>
    <meta name="author" content=<?php echo '"' . $personName . '\'s personal website"'?>>



    <title><?php echo $personName?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!--Styles for this site-->
    <link rel='stylesheet' type='text/css' href="<?php echo base_url()?>assets/css/usertemplates/theme5.css">
    <link rel='stylesheet' type='text/css' href="<?php echo base_url()?>assets/css/jquery-ui.min.css">
    
    <!--JavaScript-->
    <script language="javascript" type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.10.2.js"></script>
    <script language="javascript" type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script language="javascript" type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>


    <script src="https://use.fonticons.com/96b52f87.js"></script>

    <script>
        <?php
            if($bioTitle != ''){
                echo 'var currentDiv = \'#bio\';';
            }
            else if($secEduTitle != ''){
                echo 'var currentDiv = \'#education\';';
            }
            else if($secExpTitle != ''){
                echo 'var currentDiv = \'#experience\';';
            }
            else if($secProjTitle != ''){
                echo 'var currentDiv = \'#projects\';';
            }
            else if($secSkillsTitle != ''){
                echo 'var currentDiv = \'#skills\';';
            }
            else{
                echo 'var currentDiv = \'contact\';';
            }
        ?>
        $(document).ready(function(){
            $(currentDiv).fadeIn("slow");
        });


        $(document).ready(function(){
            $("#biohex").click(function(){
                if(currentDiv != "#bio"){
                    $(currentDiv).fadeOut("normal", function(){
                        currentDiv = "#bio";
                        $("#bio").fadeIn("normal");
                    });
                }
                
            });
            $("#eduhex").click(function(){
                if(currentDiv != "#education"){
                    $(currentDiv).fadeOut("normal", function(){
                        currentDiv = "#education";
                        $("#education").fadeIn("normal");
                    });
                }
                
            });
            $("#exphex").click(function(){
                if(currentDiv != "#experience"){
                    $(currentDiv).fadeOut("normal", function(){
                        currentDiv = "#experience";
                        $("#experience").fadeIn("normal");
                    });
                }
            });
            $("#projhex").click(function(){
                if(currentDiv != "#projects"){
                    $(currentDiv).fadeOut("normal", function(){
                        currentDiv = "#projects";
                        $("#projects").fadeIn("normal");
                    });
                }
            });
            $("#skillshex").click(function(){
                if(currentDiv != "#skills"){
                    $(currentDiv).fadeOut("normal", function(){
                        currentDiv = "#skills";
                        $("#skills").fadeIn("normal");
                    });
                }
            });
        });
        
        function isOverflowed(element){
            return element.scrollHeight > element.clientHeight || element.scrollWidth > element.clientWidth;
        }

        
    </script>

    <?php
        if ($userHeaderFont == 'lato' || $userContentFont == 'lato') {
            echo "<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>";
        }
        if ($userHeaderFont == 'roboto' || $userContentFont == 'roboto') {
            echo "<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>";
        }
        if ($userHeaderFont == 'opensans' || $userContentFont == 'opensans') {
            echo "<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>";
        }
        if ($userHeaderFont == 'lora' || $userContentFont == 'lora') {
            echo "<link href='http://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>";
        }
        if ($userHeaderFont == 'dosis' || $userContentFont == 'dosis') {
            echo "<link href='http://fonts.googleapis.com/css?family=Dosis' rel='stylesheet' type='text/css'>";
        }
        
    ?>

    <style>
        <?php if ($userHeaderFont == 'variane' || $userContentFont == 'variane') {
            echo '@font-face{
            font-family: \'variane\';
            src: url(\'' . base_url() . 'assets/fonts/Variane-Script.ttf\')}';

        }?>
        .headerFont {
            font-family: '<?php echo $userHeaderFont?>', sans-serif;
        }
        .contentFont {
            font-family: '<?php echo $userContentFont?>', sans-serif;
        }
        <?php 
            if($profileimg == ''){
                echo '#nameback{
                    height:300px;
                }';
            }

        ?>
        /*NAME*/
        <?php if($profileimg == ''){
            echo '#personName{
                margin-top: -20px;
            }';
        }?>
        
        /*HEXAGON OVERRIDES*/
        .hex{
            color: <?php echo $fontcolor;?>
        }
        .hex .top {
            border-bottom: 30px solid <?php echo $pagecolor;?>;
        }
        .hex .middle {
            width: 104px;
            height: 60px;
            background: <?php echo $pagecolor;?>;
        }
        .hex .bottom {
            border-top: 30px solid <?php echo $pagecolor;?>;
        }
        #topback{
            background-color: <?php echo $pagecolor?>
        }
        .icon{
            color: <?php echo $fontcolor;?>
        }
        #contact .hex .middle{
            background: <?php if($fontcolor == '#ffffff'){echo '#000000';} else {echo '#ffffff';}?>
        }
        #contact .hex .top{
            border-bottom: 30px solid <?php if($fontcolor == '#ffffff'){echo '#000000';} else {echo '#ffffff';}?>
        }
        #contact .hex .bottom{
            border-top: 30px solid <?php if($fontcolor == '#ffffff'){echo '#000000';} else {echo '#ffffff';}?>
        }

        body{
            <?php if($uploadimg != ''){ echo 'background-image: linear-gradient(to bottom, rgba(30, 30, 30, 0.5) 0%, rgba(30, 30, 30, 0.5) 100%), url(' . $uploadimg . ')';}?>;
        }
    </style>
</head>

<body>
    <div class="headerFont">
    <div id="topback">
    </div>

    <div id="nameback">
    <?php if($profileimg != ''){
        echo '<img class="profile-pic" src="' . $profileimg . '"></img>';
    }?>
        <h1 id="personName"><?php echo $personName?></h1>
    


        <div class="nav-row">
           <div class="hex-row">
           <?php
               if($bioTitle != ''){
                echo '<div id="biohex" class="hex"><div class="top"></div><div class="middle text-center">Bio</div><div class="bottom"></div></div>';
               }
               if($secEduTitle != ''){
                echo '<div id="eduhex" class="hex"><div class="top"></div><div class="middle text-center">Education</div><div class="bottom"></div></div>';
               }
               if($secExpTitle != ''){
                echo '<div id="exphex" class="hex"><div class="top"></div><div class="middle text-center">Experience</div><div class="bottom"></div></div>';
               }
               if($secProjTitle != ''){
                echo '<div id="projhex" class="hex"><div class="top"></div><div class="middle text-center">Projects</div><div class="bottom"></div></div>';
               }
               if($secSkillsTitle != ''){
                echo '<div id="skillshex" class="hex"><div class="top"></div><div class="middle text-center">Skills</div><div class="bottom"></div></div>';
               }
           ?>
           </div>
        </div>
    </div>
    </div>

<div id="allcontent" class="contentFont">