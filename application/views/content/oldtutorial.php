<div id="content">
    <div class="container normal-section">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <h1>How to get a custom domain name for your Onespace webpage.</h1>
            </div>
        </div>
        <!-- Step 1 -->
        <div class="row">
            <div class="col-sm-5 col-sm-offset-1">
                <h3>Step 1: Set up Github Pages</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-5 col-sm-offset-1">
                <p>1. Go to <a href="http://github.com">github.com</a>. Skip steps 1 and 2 if you already have a Github account.</p>
                <p>2. Sign up for an account</p>
                <p>3. Go to the upper right and click on the dropdown menu. Click "Your profile." Alternatively you can go to github.com/yourusername, where 'yourusername' is replaced by your github username.</p>
            </div>
            <div class="col-sm-5">
                <img src="<?php echo base_url() . 'assets/img/tutorial1.png'?>" class="img-responsive tut-img">
            </div>
            <div class="col-sm-5 col-sm-offset-1">
                <p>4. Select the "Repositories" tab.</p>
            </div>
            <div class="col-sm-5">
                <img src="<?php echo base_url() . 'assets/img/tutorial2.png'?>" class="img-responsive tut-img">
            </div>
            <div class="col-sm-5 col-sm-offset-1">
                <p>5. Create a new repository. The name of this reposity MUST be 'yourusername.github.io', where 'yourusername' is replaced by your github username. You can make it public or private (it doesn't this functionality).</p>
            </div>
            <div class=" col-sm-5">
                <img src="<?php echo base_url() . 'assets/img/tutorial3.png'?>" class="img-responsive tut-img">
            </div>
            <div class="col-sm-5 col-sm-offset-1">
                <p>6. Go to the newly created repository at github.com/yourusername/yourusername.github.io (you can also navigate to it by going to your profile under the repositories tab).</p>
                <p>7. Select "Settings" on the right side of the navigation.</p>
            </div>
            <div class=" col-sm-5">
                <img src="<?php echo base_url() . 'assets/img/tutorial4.png'?>" class="img-responsive tut-img">
            </div>

            <div class="col-sm-5 col-sm-offset-1">
                <p>8. Scroll down to the "Github Pages" section, and click Launch Automatic Page Generator.</p>
                <p>9. Select "Continue to layout." It'll take you to a page where you can select layouts, but just ignore these and click publish.</p>
                <p>10. You should be at a page that appears like the one to the right. Keep this tab open, we will come back to it later. </p>
            </div>
            <div class="col-sm-10 col-sm-offset-1">
                <hr>
            </div>
        </div>
        <!-- Step 2 -->
        <div class="row">
            <div class="col-sm-5 col-sm-offset-1">
                <h3>Step 2: Buy and configure a domain</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-5 col-sm-offset-1">
                <p>1. Go to <a href="http://namecheap.com">namecheap.com</a></p>
                <p>2. In the search box search for the domain name that you want.</p>
                <p>3. From the list of names that appear, select the one you want and add it to cart.</p>
                <p>4. Select View Cart and Confirm Order. </p>
                <p>5. Make an account to proceed with checkout.</p>
                <p>6. Fillout payment information and click "Pay Now" at the bottom of the form</p>
                <p>7. Once purchased, select “Menu” in the top right corner and select “Manage Domains”</p>
            </div>
            <div class="col-sm-5">
                <img src="<?php echo base_url() . 'assets/img/tutorial5.png'?>" class="img-responsive tut-img">
            </div>
            <div class="col-sm-5 col-sm-offset-1">
                <p>8. Check the checkbox next to your domain and click "Edit Selected".</p>
            </div>
            <div class="col-sm-5">
                <img src="<?php echo base_url() . 'assets/img/tutorial6.png'?>" class="img-responsive tut-img">
            </div>
            <div class="col-sm-5 col-sm-offset-1">
                <p>9. Select “All Host Records” from the left side navigation. There will already be information there, but we're going to edit it.</p>
            </div>
            <div class="col-sm-5">
                <img src="<?php echo base_url() . 'assets/img/tutorial7.png'?>" class="img-responsive tut-img">
            </div>
            <div class="col-sm-5 col-sm-offset-1">
                <p>10. Refer to the image and copy paste the following into the form that you see. Replace yourusername with your actual username. Make sure that "Record Types" are correct.</p>
                <p>11. Make sure all “TTL” fields are set to 1800, and save changes.</p>
            </div>
            <div class="col-sm-5">
                <img src="<?php echo base_url() . 'assets/img/tutorial8.png'?>" class="img-responsive tut-img">
            </div>
            <div class="col-sm-10 col-sm-offset-1">
                <hr>
            </div>
        </div>
        <!-- Step 3 -->
        <div class="row">
            <div class="col-sm-5 col-sm-offset-1">
                <h3>Step 3: Configuring Github Pages</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-5 col-sm-offset-1">
                <p>1. Go to the repository that you created earlier. You can get to it by https://github.com/yourusername/yourusername.github.io.</p>
                <p>2. Add a new file.</p>
            </div>
            <div class="col-sm-5">
                <img src="<?php echo base_url() . 'assets/img/tutorial9.png'?>" class="img-responsive tut-img">
            </div>
            <div class="col-sm-5 col-sm-offset-1">
                <p>3. Title it "CNAME" and put the your domain in the content of the file. Do not include "www". Hit commit changes to save the file.</p>
            </div>
            <div class="col-sm-5">
                <img src="<?php echo base_url() . 'assets/img/tutorial10.png'?>" class="img-responsive tut-img">
            </div>
            <div class="col-sm-5 col-sm-offset-1">
                <p>4. Click on index.html</p>
                <p>5. Click on the pencil to edit the contents of the file. Replace the content of the file with the following text and be sure to replace "username" in the "frame src=" part with your Onespace username.</p>
                <textarea class="form-control" readonly rows="24">
                    <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">
                    <html>

                    <head>
                        <meta http-equiv='content-type' content='text/html; charset=UTF-8'>
                        <meta name="VERSION" content="">
                        <link href=" " rel="shortcut icon" type="image/x-icon">
                        <title></title>
                    </head>
                    <frameset rows='100%, *' frameborder=no framespacing=0 border=0>
                        <frame src="http://www.onespace.io/username" name=mainwindow frameborder=no framespacing=0 marginheight=0 marginwidth=0></frame>
                    </frameset>
                    <noframes>
                        <h2>Your browser does not support frames. We recommend upgrading your browser.</h2>
                        <br>
                        <br>
                        <center>Click <a href="http://www.onespace.io/username">here</a> to enter the site.</center>
                    </noframes>

                    </html>
                </textarea>
                <p><br>6. Hit "Commit Changes" to save this file.</p>
            </div>
            <div class="col-sm-5">
                <img src="<?php echo base_url() . 'assets/img/tutorial11.png'?>" class="img-responsive tut-img">
            </div>
            <div class="col-sm-10 col-sm-offset-1">
                <hr>
            </div>
        </div>
        <!-- Finished -->
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <h1>That's it!</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <p>You can go to yourdomainname.com and it will load the webpage you created through Onespace. If it does not load, please allow 24 hours for the changes to occur. If you still continue to have problems, please don't hesitate contact us at <a href="mailto:contact.onespace@gmail.com">contact.onespace@gmail.com</a>.</p>
            </div>
        </div>
    </div>
</div>