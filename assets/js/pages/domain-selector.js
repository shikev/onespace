$(document).ready(function(){
    $('.btn-form').click(function(event){
        event.preventDefault();
        if($('#email') == '' || $('#email') == '' || $('#email') == '') {
        	swal({title: "Try Again!", text: "Please fill out all fields!", type:"error"});
        }
        else {
        	var link = onespace.baseURL;
	        $.post(link + 'user/setInformation', $('#defaultForm').serialize(), function(data) {
	        	if(data === "true") {
	        		swal({title: "Domain Registered!", text: "You will now be redirected to the management console.", showConfirmButton: false, type:"success"});
	        		setTimeout(function(){ window.location.replace(onespace.baseURL + "manage") }, 2000);
	        	}
	            else {
	            	swal({title: "Try again!", text: data, type:"error"});
	            }
	    	});
        }
        
    });
}); 