<div id="pagewrapper">
    <nav class="navbar navbar-default navbar-static-top" role="navigation">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 col-sm-12 navbottomborder">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="<?php echo base_url();?>"><img src="<?php echo base_url();?>assets/img/favicon.png"></img></a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="navbar">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="centerheight">
                                <a class="centerheight" href="<?php echo base_url();?>">Home</a>
                            </li>
<!--
                            <li>
                                <a class="centerheight" href="<?php echo base_url();?>donate">Donate</a>
                            </li>
-->
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