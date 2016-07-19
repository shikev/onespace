<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link rel="icon" href="assets/img/favicon.ico"> -->

    <title><?php echo $personName?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!--Styles for this site-->
    <link rel='stylesheet' type='text/css' href="<?php echo base_url()?>assets/css/usertemplates/theme2.css">
    
    <!--JavaScript-->
    <script language="javascript" type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.10.2.js"></script>
    <script language="javascript" type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
    
    <script src="https://use.fonticons.com/96b52f87.js"></script>

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
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

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
        .userfontcolor {
            color: <?php echo $fontcolor?>;
        }
        a {
            color: <?php echo $pagecolor?>;
        }
        .circlecolor {
            border: 2px solid <?php echo $pagecolor?>;
        }
        #sidebar a, #sidebar a:hover, #sidebar a:active, #sidebar a:focus {
            color: <?php echo $fontcolor?>;
        }
        #sidebar {
            <?php echo ($uploadimg == '')? 'background-color: ' . $pagecolor . ';' : 
            'background: url(' . $uploadimg . ') no-repeat center center fixed; 
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;'; ?>
        }
        #sidebutton {
            background-color: <?php echo $pagecolor?>;
        }
        #sidebutton .glyphicon {
            color: <?php echo $fontcolor?>;
        }
        
        <?php if($profileimg != '') {
                            echo '#nameback {
                            margin-top:-60px;
                            height: 350px;}';
                        }?>
/*
        @media screen and (max-width: 500px) {
            <?php if($profileimg != ''){
                    echo '.img-circle {
                            height: 100px;}';
                }?>
        }
*/
        
        <?php echo $customCSS;?>
    </style>

</head>

<body id="page-top" class="contentFont" onload="setUpSidebar(false)">
    
    <div id="sidebar" class="hidden">
        <?php if($profileimg != '') {
                echo '<img src="' . $profileimg . '" class="img-circle"></img>';
            }
        ?>
        <div class="headerFont">
        <h2 class="userfontcolor hcenter"><?php echo $personName?></h2>
        <?php if($greeting != '') {
                        echo '<p class="userfontcolor hcenter">' . $greeting . '</p>';
        }?>
        <div id="sidelinks">
            <?php if($bioTitle != '') {
                        echo '<p><a href="javascript:scrollTo(\'#bio\')">About Me</a></p>';
                    }?>
            <?php if($secEduTitle != '') {
                        echo '<p><a href="javascript:scrollTo(\'#education\')">Education</a></p>';
                    }?>
            <?php if($secExpTitle != '') {
                        echo '<p><a href="javascript:scrollTo(\'#experience\')">Experience</a></p>';
                    }?>
            <?php if($secProjTitle != '') {
                        echo '<p><a href="javascript:scrollTo(\'#projects\')">Projects</a></p>';
                    }?>
            <?php if($secSkillsTitle != '') {
                        echo '<p><a href="javascript:scrollTo(\'#skills\')">Skills</a></p>';
                    }?>
            <?php if($email != '' || $linkedin != '') {
                    echo '<p><a href="javascript:scrollTo(\'#contact\')">Contact</a><p>';
                }?>
            </div>
        </div>
    </div>
    
    <div id="sidebutton" class="hidden" onclick="toggleSidebar()">
        <span class ="glyphicon glyphicon glyphicon-menu-hamburger"></span>
    </div>
    
    <div id="rightside">
