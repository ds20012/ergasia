<!DOCTYPE html>

<html  lang="eng">
	<head>
		<title>Announcements system website</title>
		<link rel = "stylesheet" href = "front/style.css">
		<script src = "front/StudentPageJS.js"></script>
	</head>
	<body>
		<div class="container">
		  <header class="header">
			<h3>Welcome to Students annoucements site</h3>
			<p> Here you can read all teachers announcements </p>
		  </header>
		  <section class="content">
			<div class="content-body">
			  Students page
			  <div id = "filter-body">
				<b>Select teacher announcement</b>
				<br><br>

					<?php include 'back/Teachers.php';?>	
			  </div>
			  <br>
			  <div id = "Announcements">
				<?php include 'back/allAnnouncements.php';?>
			  </div>
			</div>
		  </section>
		  <footer class="footer">
			<p>Εργασία Ανάπτυξη εφαρμογών 2021</p>
		  </footer>
		</div>
	</body>
</html>