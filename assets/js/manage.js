$(document).ready(function() {
    $('.btnSave').click(function(event) {
        event.preventDefault();
        var link = "<?php echo base_url()?>";
        if (validate()) {
            $.post(link + 'userpage/update', $('#form1').serialize(), function(data) {
                swal({
                    title: "Success!",
                    text: "Your page has been saved!",
                    confirmButtonColor: "#ad4c4c",
                    type: "success"
                })
            });
        }
    });
    setup();
});

var subCounters = {};

//Opens the colorpicker
$("#flatpicker").spectrum({
    flat: true,
    showInput: true
});

function clearFields(divID) {
    var fields = document.getElementById(divID).getElementsByClassName('form-control');

    for (var i = 0; i < fields.length; i++) {
        fields[i].value = '';
    }
}
//type is the type of submit we want (save or save/view)


// Called when the element's focus is lost (onblur)
// Note: Whenever a check is desired, add checkEmpty() to the control's "onblur", and name it's parent id as for example: personNameValidGroup
function checkEmpty(element) {
    if (!element.value) {
        document.getElementById(element.id + "ValidGroup").classList.add("has-error");
    } else {
        document.getElementById(element.id + "ValidGroup").classList.remove("has-error");
    }
}

// Set up form by making the first section and it's first subsection visible
function setup() {
    document.getElementById("secEdusub1").style.display = 'block';
    document.getElementById("experience1").style.display = 'block';
    document.getElementById("project1").style.display = 'block';
    for (var i = 2; i <= 3; i++) {
        if (document.getElementById("secEduSchool" + i.toString()).value != '' ||
            document.getElementById("secEduLoc" + i.toString()).value != '' ||
            document.getElementById("secEduMajor" + i.toString()).value != '' ||
            document.getElementById("secEduClasses" + i.toString()).value != '' ||
            document.getElementById("secEduGrad" + i.toString()).value != '') {
            document.getElementById("secEdusub" + i.toString()).style.display = 'block';
        }
    }
    for (var i = 2; i <= 7; i++) {
        if (document.getElementById("jobTitle" + i.toString()).value != '' ||
            document.getElementById("companyName" + i.toString()).value != '' ||
            document.getElementById("jobDescription" + i.toString()).value != '' ||
            document.getElementById("timeFrame" + i.toString()).value != '') {
            document.getElementById("experience" + i.toString()).style.display = 'block';
        }
    }
    for (var i = 2; i <= 7; i++) {
        if (document.getElementById("projectName" + i.toString()).value != '' ||
            document.getElementById("projectDescription" + i.toString()).value != '' ||
            document.getElementById("projectLink" + i.toString()).value != '') {
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