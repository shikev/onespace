<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content=<?php echo '"' . $personName . '"'?>>
    <meta name="author" content=<?php echo '"' . $personName . '\'s personal website"'?>>
    <!-- <link rel="icon" href="assets/img/favicon.ico"> -->

    <title><?php echo $personName?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!--Styles for this site-->
    <link rel='stylesheet' type='text/css' href="<?php echo base_url()?>assets/css/usertemplates/theme4.css">
    
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
        .headerFont {
            font-family: '<?php echo $userHeaderFont?>', sans-serif;
        }
        .contentFont {
            font-family: '<?php echo $userContentFont?>', sans-serif;
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
        <?php echo $customCSS;?>
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
                <a class="navbar-brand" href="javascript:scrollTo('#cover')">
                    <?php echo $personName?>
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav">
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

    <!-- COVER -->
    <div class="site-wrapper headerFont" id="cover">
        <div class="site-wrapper-inner">
            <div class="cover-container">
                <div class="inner cover">
                    <h1 style="font-size:6em;margin-top:20px;margin-right:0;color: <?php echo $fontcolor?>;"><?php echo $personName?></h1>
                    <h2 style="color:<?php echo $fontcolor?>"><?php echo $greeting;?></h2>
                </div>
            </div>
        </div>
    </div>
    
    <div id="bottombar">
        <?php if($bioDescription != '') {
            echo '<a href="javascript:scrollTo(\'#bio\')">';
        } else {
            echo '<a href="javascript:scrollTo(\'#education\')">';
        }?>
            <i class="icon icon-caret-down icon-3x icon-fw" style="margin-bottom:0px"></i></a>
    </div>