<div id="footer" class="container-fluid">
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
            <p>Copyright &copy; <?php echo $personName?> 2015. All rights reserved.
                <?php if($email != '') {
                    echo '<br>' . $email;
                    if($phone != ''){
                        echo ' | ' . $phone;
                    }
                }
                else if($phone != ''){
                    echo '<br>' . $phone;
                }
                ?>
            </p>
        </div>
    </div>
</div>

</div>

<script>
    function scrollTo(idname) {
    if (idname == 'cover') {
        $('html, body').animate({scrollTop: 0}, 500);
    }
    else {
        $('html, body').animate({scrollTop: $(idname).offset().top - 48}, 500);
    }
}
</script>

</body>
</html>