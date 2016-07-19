<div id="content">
    <div class="site-wrapper">
        <div class="site-wrapper-inner">
            <div class="cover-container">
                <div class="inner cover">
                    <div class="intro-message">
                        <div><img class="img-responsive" src="<?php echo base_url();?>/assets/img/onespace_logo.png" ></img></div>
                        <h4>A Personal Webpage Crafted From Your Resume</h4>
                        <hr class="intro-divider">
                        <h4>(This site works best on a computer!)</h4>
                        <ul class="list-inline intro-social-buttons">
                            <?php if(!$this->tank_auth->is_logged_in()) {
                                echo "<li><a href=";
                                echo base_url();
                                echo " class=\"btn btn-filled btn-intro\"><span class=\"network-name\">Examples</span></a></li>";

                                echo "<li><a href=";
                                echo base_url();
                                echo "auth/register class=\"btn btn-hollow btn-intro\"><span class=\"network-name\">Sign Up</span></a></li>";
                            } else {
                                echo "<li><a href=";
                                echo base_url();
                                echo "userpage/manage class=\"btn btn-filled btn-intro\"><span class=\"network-name\">Dashboard</span></a></li>";

                                echo "<li><a href=";
                                echo base_url();
                                echo $this->tank_auth->get_username();
                                echo "/ target=\"_blank\" class=\"btn btn-hollow btn-intro\"><span class=\"network-name\">Webpage</span></a></li>";
                                echo "</li>";
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="home-section dark-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <img class="img-responsive" src="<?php echo base_url();?>/assets/img/macbookpro.png" ></img>
                </div>
                <div class="col-sm-6">
                    <h2>Your Webpage In Minutes</h2>
                    <p>Unlike other website builders, Onespace is designed with one goal in mind - to make it as fast and as easy 
                        as possible for you to generate a professional webpage. You don’t have to spend hours to build your webpage. 
                        Simply tell Onespace the content you want to use, select a theme and color, and it will take care of the rest.</p>
                    <h3>Getting Started</h3>
                    <p>If you want to see what it’s all about, try out a demo and view a fully-equipped preview with your own content. 
                        Like what you see? Make an account to keep and share your professional webpage!</p>
                </div>
            </div>
        </div>
    </div>
    <div class="home-section bottom-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2>How It All Works</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <h3>Will I need to host the webpage myself?</h3>
                    <p>You can choose to, however, your Onespace account includes all hosting services. 
                        Once your webpage is generated, you can copy and share your unique URL however you’d like.</p>
                    <h3>How much does it cost?</h3>
                    <p>Nothing! Onespace and all of its features are and will be free.
                        If you'd like to support us, feel free to <a href="<?php echo base_url();?>pages/donate">donate</a>.</p>
                    <h3>Can I get my own domain name?</h3>
                    <p>We currently do not provide domain name services, however we will provide a comprehensive guide 
                         on how to link your personal domains to your Onespace webpage. 
                     </p>
                    <h3>How many webpages can I build?</h3>
                    <p>Since we identify your webpage by your account’s username, it’s currently only possible to associate 
                        one webpage with each account. You can edit the theme, color scheme, or content at anytime.</p>
                </div>
                <div class="col-sm-6">
                    <h3>Who can view my webpage?</h3>
                    <p>Anyone who you share your personal link with can view the webpage on any device. 
                        Onespace generates your responsive, mobile-first webpage and ensures that you are 
                        represented professionally regardless of who views your page - from friends to recruiters.</p>
                    <h3>Is the auto-generated page truly my own?</h3>
                    <p>Yes. We wouldn’t have it any other way. You are free to download your page’s source code and modify 
                        it or host it as you wish.</p>
                    <h3>I have questions/ideas about Onespace. Who can I talk to?</h3>
                    <p>We would love to hear from you! Shoot us an email at 
                        <a href="mailto:contact.onespace@gmail.com">contact.onespace@gmail.com.</a></p>
                </div>
            </div>
        </div>
    </div>
</div>