<!DOCTYPE html>

<html>
	<head>
		<title>Announcements system website</title>
		<link rel = "stylesheet" href = "../front/style.css">
		<script src = "../front/TeacherPageJS.js"> </script>
	</head>
	
	<body>
		<div class="container">
		  <header class="header">
			<h3>
				Welcome to Students annoucements site
				this is the Teacher's Page and you can create 
				Announcements
			</h3>
			<p> 
				Welcome mr/mrs 
				<span id = "teacher">
					<?php echo $_GET["teacher"]; ?>
				</span>
			</p>
		  </header>
		  <section class="content">
			<div class="content-body">
				Enter your Announcement : <br><br>
				<textarea id = "annTXT" rows="10" cols="25" placeholder="Type your Announcement here">
				</textarea>
				<br><br>
				<button type = "button" onclick = "AnnouncementSubmit()"> Submit announcement </button>
			</div>
		  </section>
		  <footer class="footer">
			<p>Εργασία Ανάπτυξη εφαρμογών 2021</p>
		  </footer>
		</div>
	</body>
</html>