

function mydisp() {
	var modal = document.getElementById('myModal');
    modal.style.display = "block";
	
	window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
}




function validateForm() {
    var x = document.forms["signup"]["email"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert("Not a valid e-mail address");
        return false;
    }
}
