<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="refresh" content="3;url=<?php echo base_url(); ?>auth/login/" />
    <title>Onespace</title>



    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>assets/css/custom-styles.css" rel="stylesheet" />

    <!-- Javascript -->
    <script language="javascript" type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.10.2.js"></script>
    <script language="javascript" type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
    <script language="javascript" type="text/javascript" src="<?php echo base_url(); ?>assets/js/respond.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <div id="pagewrapper">
        <nav class="navbar navbar-default navbar-static-top" role="navigation">
            <div class="container">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1 navbottomborder">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="<?php echo base_url();?>"><img src="<?php echo base_url();?>assets/img/favicon.png" height="50"></img></a>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="centerheight">
                                    <a class="centerheight" href="<?php echo base_url();?>">Home</a>
                                </li>
                                <li>
                                    <a class="centerheight" href="<?php echo base_url();?>pages/donate">Donate</a>
                                </li>
                                <?php
                        if($this->tank_auth->is_logged_in()){
                        }
                        else{
                            echo "<li><form action=";
                                echo base_url();
                                echo "auth/login><button class=\"btn btn-hollow btn-nav\">Login</button></form></li>";
                            echo "<li><form action=";
                                echo base_url();
                                echo "auth/register><button class=\"btn btn-filled btn-nav\">Sign Up</button></form></li>";
                        }
                    ?>
                                    <?php
                        if($this->tank_auth->is_logged_in()){
                            echo "<li class=\"dropdown\">";
                                echo "<a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Account 
                                    <span class=\"caret\"></span></a>";
                                echo "<ul class=\"dropdown-menu\">";
                                    echo "<li><a href=\"";
                                    echo base_url();
                                    echo "auth/change_password\">Change Password</a></li>";
                                    echo "<li><a href=\"";
                                    echo base_url();
                                    echo "auth/logout\">Logout</a></li>";
                                echo "</ul>";
                            echo "</li>";

                            echo "<li><form action=";
                                echo base_url();
                                echo $this->tank_auth->get_username();
                                echo " target=\"_blank\"><button class=\"btn btn-hollow btn-nav\">Webpage</button></form></li>";
                            
                            echo "<li><form action=";
                                echo base_url();
                                echo "userpage/manage><button class=\"btn btn-filled btn-nav\">Dashboard</button></form></li>";
                        }
                    ?>

                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>
        <div id="content">
            <div class="container normal-section">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1 form dialogbox center-text">
                        <h3><?php echo $message;?></h3>
                    </div>
                </div>
            </div>
        </div>
</body>