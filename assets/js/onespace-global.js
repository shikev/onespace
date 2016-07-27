var onespace = {
	// put all global functions in here

	checkEmpty: function(element) {
		 if (!element.value) {
            document.getElementById(element.id).classList.add("has-error");
        }
        else {
            document.getElementById(element.id).classList.remove("has-error");
        }
	},
}