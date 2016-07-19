<footer>
	<div class="container">
        <div class="row">
            <div class="col-sm-12">
                <p class="copyright" style="font-size:1em;">Copyright &copy; <?php echo $personName?> 2015. All rights reserved.
                    <?php if($email != '') {
                        echo '<br>Contact me at ';
                        echo $email;
                    }?>
                </p>
            </div>
        </div>
	</div>
</footer>

<script>
    function scrollTo(idname) {
    if (idname == 'cover') {
        $('html, body').animate({scrollTop: 0}, 500);
    }
    else {
        $('html, body').animate({scrollTop: $(idname).offset().top - 60}, 500);
    }
}
</script>

</body>
</html>