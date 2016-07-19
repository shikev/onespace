    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 col-sm-12 footer-border">
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-md-offset-1 col-sm-3">
                    <h4>Learn more</h4>
                    <p>
<!--                        <a href="<?php echo base_url();?>updates">What's new</a>-->
<!--                        <br><a href="<?php echo base_url();?>donate">Donate</a>
                        <br>--><a href="<?php echo base_url();?>contact">Contact</a>
                    </p>
                </div>
                <div class="col-md-3 col-sm-3">
                    <h4>Tutorials</h4>
                    <p>
                        <a href="<?php echo base_url();?>tutorial">Personal domain</a>
                        <br><a href="<?php echo base_url();?>imgtutorial">Custom images</a>
                    </p>
                </div>
                <div class="col-md-4 col-sm-6">
                    <h5>Copyright &copy; Onespace 2015.</h5>
                    <h5>All rights reserved.</h5>
                    <p>Last updated September 26, 2015.</p>
                </div>
            </div>
    	</div>
    </footer>
</div><!-- CLOSES PAGEWRAPPER DIV -->

<script>
    function scrollTo(idname) {
    if (idname == 'cover') {
        $('html, body').animate({scrollTop: 0}, 500);
    }
    else {
        $('html, body').animate({scrollTop: $(idname).offset().top}, 500);
    }
}
	$(document).ready(function () {
		$('#linkedin').tooltip({'trigger':'focus', 'title': 'Please paste the full URL that includes https://.'});
        $('#twitter').tooltip({'trigger':'focus', 'title': 'Please paste the full URL that includes https://.'});
        $('#facebook').tooltip({'trigger':'focus', 'title': 'Please paste the full URL that includes https://.'});
        $('#profileimg').tooltip({'trigger':'focus', 'title': 'Please use a square image.'});
	});
</script>

</body>

</html>