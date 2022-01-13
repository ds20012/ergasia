
var xhttp = new XMLHttpRequest();

function FilterTeacher() {
	var teacher = document.getElementById("teachers");
	xhttp.open("GET", "back/allAnnouncements.php?teacher="+teacher.value, true);
	xhttp.onreadystatechange = resp;
	xhttp.send();
}


function resp() {
	var ann = document.getElementById("Announcements");
	if (xhttp.readyState == 4 && xhttp.status == 200) {
		ann.innerHTML = xhttp.responseText;
	}
}
