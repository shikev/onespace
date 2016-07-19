<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Onespace<?php echo $pageTitle ?></title>

    <link rel="icon" href="<?php echo base_url();?>assets/img/favicon.png" type="image/png">

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>assets/css/custom-styles.css" rel="stylesheet" />
    
    <!-- Font -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>

    <!-- Javascript -->
    <script language="javascript" type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.10.2.js"></script>
    <script language="javascript" type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
    <script language="javascript" type="text/javascript" src="<?php echo base_url(); ?>assets/js/respond.js"></script>

    <!-- SweetAlert JS + CSS-->
    <script language="javascript" type="text/javascript" src="<?php echo base_url(); ?>assets/js/sweetalert.min.js"></script>
    <link href="<?php echo base_url(); ?>assets/css/sweetalert.css" rel="stylesheet" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script>
        // Called when the element's focus is lost (onblur)
        // Note: Whenever a check is desired, add checkEmpty() to the control's "onblur", and name it's parent id as for example: moneyboxValidGroup
        function checkEmpty(element) {
            if (!element.value) {
                document.getElementById(element.id + "ValidGroup").classList.add("has-error");
            }
            else {
                document.getElementById(element.id + "ValidGroup").classList.remove("has-error");
            }
        }
        <?php 
            
            if(isset($message)){
            echo '$(document).ready(function(){
                swal({title: "Your password has been successfully changed!", timer: 3000, showConfirmButton: false);
            });';
        }?>
    </script>
</head>
<body>
