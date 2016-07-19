</div> 

<footer>
	<div class="container">
        <div class="row">
            <div class="col-sm-12">
                <p class="copyright" style="font-size:1em;">Copyright &copy; <?php echo $personName?> 2015. All rights reserved.
                    <?php if($email != '') {
                            echo '<br>' . $email;
                            if($phone != ''){
                                echo ' | ' . $phone;
                            }
                        }
                        else if($phone != ''){
                            echo '<br>Phone:' . $phone;
                        }
                    ?>
                </p>
            </div>
        </div>
	</div>
</footer>


</body>
</html>