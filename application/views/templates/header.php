<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Onespace<?php echo $pageTitle ?></title>

    <link rel="icon" href="<?php echo $baseURL;?>assets/img/favicon.png" type="image/png">

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo $baseURL; ?>assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Custom CSS -->
    <link href="<?php echo $baseURL; ?>assets/css/custom-styles.css" rel="stylesheet" />
    
    <!-- Font -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>

    <!-- Javascript -->
    <script language="javascript" type="text/javascript" src="<?php echo $baseURL; ?>assets/js/jquery-1.10.2.js"></script>
    <script language="javascript" type="text/javascript" src="<?php echo $baseURL; ?>assets/js/bootstrap.js"></script>
    <script language="javascript" type="text/javascript" src="<?php echo $baseURL; ?>assets/js/respond.js"></script>

    <!-- SweetAlert JS + CSS-->
    <script language="javascript" type="text/javascript" src="<?php echo $baseURL; ?>assets/js/sweetalert.min.js"></script>
    <link href="<?php echo $baseURL; ?>assets/css/sweetalert.css" rel="stylesheet" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script language="javascript" type="text/javascript" src="<?php echo $baseURL; ?>assets/js/onespace-global.js"></script>
    <script>
    <?php echo 'onespace["baseURL"] = ' . '"' . $baseURL . '";';?>
    </script>

    <?php 
        if(isset($scripts)) {
            foreach($scripts as $scriptSource) {
                $scriptTemplate = '<script language="javascript" type="text/javascript" src=scriptSourceToReplace></script>';
                $scriptElement = str_replace('scriptSourceToReplace', $scriptSource, $scriptTemplate);
                echo $scriptElement;
            }
        }
    ?>
</head>
<body>
