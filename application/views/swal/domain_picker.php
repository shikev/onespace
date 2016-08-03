swal({
    title: "Choose your domain!",
    text: "Your site will be accessible by onespace.io/yourdomain",
    inputType: "text",
    inputPlaceholder: "yourdomain",
    closeOnConfirm: false,
    animation: "slide-from-top",
}, function(inputValue) {
	var param = "domain=" + inputValue;
    $.post("<?php echo $domainCheckerAddress;?>", param, function(response) {
       	if(response) {
       		swal("Domain Registered!", "Your domain is " + response, "success");
    	}
    	else {
    		swal.showInputError("Domain already taken!");
        	return false;
    	}
    })
});