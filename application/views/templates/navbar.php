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
                        <a class="navbar-brand" href="<?php echo $baseURL;?>"><img src="<?php echo $baseURL;?>assets/img/favicon.png"></img></a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="navbar">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="centerheight">
                                <a class="centerheight" href="<?php echo $baseURL;?>">Home</a>
                            </li>
                             <li><form action="<?php echo $baseURL;?>auth/login"><button class="btn btn-hollow btn-nav">Login</button></form></li>
                            <li><form action="<?php echo $baseURL;?>auth/register"><button class="btn btn-filled btn-nav">Sign Up</button></form></li>

                        </ul>
                    </div>
                </div>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>