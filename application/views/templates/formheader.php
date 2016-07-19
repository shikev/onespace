
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Onespace<?php echo $pageTitle ?></title>

    <link rel="icon" href="<?=base_url()?>assets/img/favicon.png" type="image/png">

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Vertical Tabs CSS -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.vertical-tabs.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>assets/css/custom-styles.css" rel="stylesheet" />

    <!-- Javascript -->
    <script language="javascript" type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.10.2.js"></script>
    <script language="javascript" type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>


    <!-- SweetAlert JS + CSS-->
    <script language="javascript" type="text/javascript" src="<?php echo base_url(); ?>assets/js/sweetalert.min.js"></script>
    <link href="<?php echo base_url(); ?>assets/css/sweetalert.css" rel="stylesheet" />

    <!-- Colorpicker JS + CSS -->
    <script language="javascript" type="text/javascript" src="<?php echo base_url(); ?>assets/js/spectrum.js"></script>
    <link href="<?php echo base_url(); ?>assets/css/spectrum.css" rel="stylesheet" />

    <script>
    $(document).ready(function(){
        $('.btnSave').click(function(event){
            event.preventDefault();
            var link = "<?php echo base_url()?>";
            if(validate()){
                $.post(link + 'userpage/update', $('#form1').serialize(), function(data) {
                        swal({title: "Success!",   text: "Your page has been saved!", confirmButtonColor: "#ad4c4c", type:"success"})});
            }
        });
    }); 

    </script>

    <script type="text/javascript">
        var subCounters = {};
        
        //Opens the colorpicker
        $("#flatpicker").spectrum({
            flat: true,
            showInput: true
        });

        function clearFields(divID){
            var fields = document.getElementById(divID).getElementsByClassName('form-control');

            for(var i = 0; i < fields.length; i++){
                fields[i].value = '';
            }
        }
        //type is the type of submit we want (save or save/view)
        

        // Called when the element's focus is lost (onblur)
        // Note: Whenever a check is desired, add checkEmpty() to the control's "onblur", and name it's parent id as for example: personNameValidGroup
        function checkEmpty(element) {
            if (!element.value) {
                document.getElementById(element.id + "ValidGroup").classList.add("has-error");
            }
            else {
                document.getElementById(element.id + "ValidGroup").classList.remove("has-error");
            }
        }

        // Set up form by making the first section and it's first subsection visible
        function setup() {
            document.getElementById("secEdusub1").style.display = 'block';
            document.getElementById("experience1").style.display = 'block';
            document.getElementById("project1").style.display = 'block';
            for(var i = 2; i <= 3; i++){
                if(document.getElementById("secEduSchool" + i.toString()).value != ''
                || document.getElementById("secEduLoc" + i.toString()).value != ''
                || document.getElementById("secEduMajor" + i.toString()).value != ''
                || document.getElementById("secEduClasses" + i.toString()).value != ''
                || document.getElementById("secEduGrad" + i.toString()).value != ''){
                    document.getElementById("secEdusub" + i.toString()).style.display = 'block';
                }
            }
            for(var i = 2; i <= 7; i++){
                if(document.getElementById("jobTitle" + i.toString()).value != ''
                || document.getElementById("companyName" + i.toString()).value != ''
                || document.getElementById("jobDescription" + i.toString()).value != ''
                || document.getElementById("timeFrame" + i.toString()).value != ''){
                    document.getElementById("experience" + i.toString()).style.display = 'block';
                }
            }
            for(var i = 2; i <= 7; i++){
                if(document.getElementById("projectName" + i.toString()).value != ''
                || document.getElementById("projectDescription" + i.toString()).value != ''
                || document.getElementById("projectLink" + i.toString()).value != ''){
                    document.getElementById("project" + i.toString()).style.display = 'block';
                }
            }

            // This is the next subsection to be revealed
            subCounters["edu"] = 2;
            subCounters["exp"] = 2;
            subCounters["proj"] = 2;

            // Set focus to the name field
            document.getElementById('personName').focus();
        }

        function showSub(fullname, shortname, max) {
            if (subCounters[shortname] > max)
                return;

            document.getElementById(fullname + subCounters[shortname]).style.display = 'block';
            subCounters[shortname] = subCounters[shortname] + 1;

            if (subCounters[shortname] > max)
                document.getElementById("btnAddSub" + shortname).style.display = 'none';
        }

        // Checks if form elements are left blank, and if so, activates the Information tab
        function validate() {
            var nameVal = document.getElementById("personName").value;
            if (!nameVal) {
                $('.nav-tabs a[href="#cover"]').tab('show');

                return false;
            }

            return true;
        }

        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-65900408-1', 'auto');
        ga('send', 'pageview');
    </script>
    <!-- Custom Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Dosis' rel='stylesheet' type='text/css'>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body onload="setup()">
