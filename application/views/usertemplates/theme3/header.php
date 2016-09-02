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

    <!--Styles for this site-->
    <link rel='stylesheet' type='text/css' href="<?php echo base_url()?>assets/css/usertemplates/theme3.css">
   <!--  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/slick-theme.css"/> -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/slick.css"/>

    
    <!-- Bootstrap Core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Javascript -->
    <script language="javascript" type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script language="javascript" type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script language="javascript" type="text/javascript" src="<?php echo base_url(); ?>assets/js/slick.min.js"></script>

    <script src="https://use.fonticons.com/96b52f87.js"></script>

    <script>
    $(document).ready(function(){
      $('.single-item-carousel').slick();
    });
    $(document).ready(function(){
      $('.multi-item-carousel').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1
      });
    });
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
        if($userHeaderFont == 'variane'){
            echo '<style>';
            echo '@font-face{
            font-family: \'variane\';
            src: url(\'' . base_url() . 'assets/fonts/Variane-Script.ttf\')';
            echo '</style>';
            //echo '<link rel=\'stylesheet\' type=\'text/css\' href="' . base_url() . 'assets/css/usertemplates/customfonts/variane.css">';
        }
    ?>
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
        .titlerow{
            background-color: <?php echo $pagecolor?>;
            color: <?php echo $fontcolor?>;
        }
        .headerFont {
            font-family: '<?php echo $userHeaderFont?>', sans-serif;
        }
        .contentFont {
            font-family: '<?php echo $userContentFont?>', sans-serif;
        }
        .userfontcolor {
            color: <?php echo $fontcolor?>;
        }

        /*COVER*/
        .site-wrapper {
            <?php echo ($uploadimg == '')? 'background-color: ' . $pagecolor . ';' : 
            'background: url(' . $uploadimg . ') no-repeat center center fixed; 
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;'; ?>
        }
        
        /*NAVBAR*/
        .navbar-default .navbar-brand {
            color:<?php echo $pagecolor?>;
        }
        .navbar-default .navbar-brand:hover,
        .navbar-default .navbar-brand:focus {
            color: <?php echo $pagecolor?>;
        }
        .navbar-default .navbar-nav > li > a:hover,
        .navbar-default .navbar-nav > li > a:focus {
            color: <?php echo $pagecolor?>;
        }
        .navbar-default .navbar-nav > li > .dropdown-menu > li > a:hover,
        .navbar-default .navbar-nav > li > .dropdown-menu > li > a:focus {
            color: <?php echo $pagecolor?>;
        }
        .navbar-default .navbar-nav > .active > a,
        .navbar-default .navbar-nav > .active > a:hover,
        .navbar-default .navbar-nav > .active > a:focus {
            color: <?php echo $pagecolor?>;
        }
        .navbar-default .navbar-nav > .open > a,
        .navbar-default .navbar-nav > .open > a:hover,
        .navbar-default .navbar-nav > .open > a:focus {
            color: <?php echo $pagecolor?>;
        }
        .navbar-default .navbar-link:hover {
            color: <?php echo $pagecolor?>;
        }
    </style>

</head>

<body id="page-top" class="contentFont">

    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand topnav" href="javascript:scrollTo('#cover')">
                    <?php echo $personName?>
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="javascript:scrollTo('#cover')">Cover</a></li>
                    <?php if($bioTitle != '') {
                    echo '<li><a href="javascript:scrollTo(\'#bio\')">About Me</a></li>';
                    }?>
                    <?php if($secEduTitle != '') {
                        echo '<li><a href="javascript:scrollTo(\'#education\')">Education</a></li>';
                    }?>
                    <?php if($secExpTitle != '') {
                        echo '<li><a href="javascript:scrollTo(\'#experience\')">Experience</a></li>';
                    }?>
                    <?php if($secProjTitle != '') {
                        echo '<li><a href="javascript:scrollTo(\'#projects\')">Projects</a></li>';
                    }?>
                    <?php if($secSkillsTitle != '') {
                        echo '<li><a href="javascript:scrollTo(\'#skills\')">Skills</a></li>';
                    }?>
                    <?php if($email != '' || $phone != '' || $linkedin != '') {
                        echo '<li><a href="javascript:scrollTo(\'#contact\')">Contact</a></li>';
                    }?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div id="cover" class="site-wrapper">
        <div class="site-wrapper-inner">
            <div class="cover-container">
                <div class="inner cover">
                    <?php if($profileimg != '') {
                echo '<img class="img-circle" height=200 width=200 src="' . $profileimg . '">';
                    }?>
                    <h1 class="userfontcolor"><?php echo $personName?></h1>
                    <h3 class="userfontcolor"><?php echo $greeting;?></h3>
                </div>
            </div>
        </div>
    </div>