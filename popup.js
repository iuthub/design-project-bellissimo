// Get the modal
var modal = document.getElementById('popup');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "block";
    }
}

// eye-> to make the password visible
function show() {
    var p = document.getElementById('pwd');
    p.setAttribute('type', 'text');
}

function hide() {
    var p = document.getElementById('pwd');
    p.setAttribute('type', 'password');
}
var pwShown = 0;
var NAME = document.getElementById("eye");
document.getElementById("eye").addEventListener("click", function () {
     var currentClass = NAME.className;
    if (currentClass == "fa fa-eye-slash") { // Check the current class name
        NAME.className = "fa fa-eye";   // Set other class name
    } else {
        NAME.className = "fa fa-eye-slash";  // Otherwise, use `second_name`
    }
    if (pwShown == 0) {
        pwShown = 1;
        show();
    } else {
        pwShown = 0;
        hide();
    	
    }
}, false);

// scroll down to the top///////////////////////////////////////////////////////////////////
 $(window).scroll(function() {
    var height = $(window).scrollTop();
    if (height > 100) {
        $('#back2Top').fadeIn();
    } else {
        $('#back2Top').fadeOut();
    }
});
$(document).ready(function() {
    $("#back2Top").click(function(event) {
        event.preventDefault();
        $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
    });

});