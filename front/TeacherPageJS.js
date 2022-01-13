var xhttp = new XMLHttpRequest();

function AnnouncementSubmit() {
	var announcement = document.getElementById("annTXT");
	var teacher = document.getElementById("teacher");
	xhttp.open("GET", "../back/AnnController.php?ann="+announcement.value+"&teacher="+teacher.innerHTML, true);
	xhttp.send();
	announcement.value = "";
	alert("Done !");
}
