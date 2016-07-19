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
            $('html, body').animate({scrollTop: $(idname).offset().top - 16}, 500);
        }
    }
    
    function setUpSidebar(resized) {
        if ($(window).width() < 768) {
            $('#sidebar').css('width', '45%');
            $('#sidebutton').removeClass('hidden');
            $('#rightside').css('padding-left', '0px');
            if (resized) {
                $('#sidebar').addClass('hidden');
                $('#sidebutton').css('left', '0%');
                sidebarVisible = false;
            }
            else {
                $('#sidebar').removeClass('hidden');
            }
        }
        else {
            $('#sidebar').css('width', '20%');
            $('#sidebutton').addClass('hidden');
            $('#rightside').css('padding-left', '20%');
            $('#sidebar').removeClass('hidden');
        }
    }
    
    var sidebarVisible = true;
    function toggleSidebar() {
        if (sidebarVisible) {
            $('#sidebar').addClass('hidden');
            $('#sidebutton').css('left', '0%');
            sidebarVisible = false;
        }
        else {
            $('#sidebar').removeClass('hidden');
            $('#sidebutton').css('left', '45%');
            sidebarVisible = true;
        }
    }
    
    $(window).on('resize', function(){
       setUpSidebar(true);
    });
</script>

</body>
</html>