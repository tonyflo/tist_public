<?php
include "helpers/header.php";
?>
<!DOCTYPE html>
<html>
<head>
<title>The Tist</title>
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="main-wrapper">
	<div class="main-banner">
		<h1>Featured Scientist of the Day</h1>
		<h3>Profile Name</h3> <p>from the </p> <h3> Lab Name</h3><br>
		<h3>Project Name</h3><br>
		<p><a href="#List">List</a>, <a href="#Of">Of</a>, <a href="#Scientific">Scientific</a>, <a href="#Discipline">Disciplines</a> </p> 

	</div>
	
	
	<div class="below-banner">
		<form action="wizard.php" method="">
			<button type="submit">Get Involved</button>
		</form>
	</div>
	
	
	<div class="content-row group">
		<div class="extra-content col">
			<h3>Topics</h3>
			<hr>
				<form action="">
				<input type="radio" name="topic_selector" value="topic#1" checked>Topic #1
				<br>
				<input type="radio" name="topic_selector" value="topic#2" checked>Topic #2
				<br>
				<input type="radio" name="topic_selector" value="topic#3" checked>Topic #3
				<br>
				<input type="radio" name="topic_selector" value="topic#4" checked>Topic #4
				<br>
				<input type="radio" name="topic_selector" value="topic#5" checked>Topic #5
				<br>
				<input type="radio" name="topic_selector" value="topic#6" checked>Topic #6
				<br>
				</form>
		</div>
		<div class="primary-content col">
			<h3>News Feed</h3>

			<hr>
			<a href="profile.php"><img src="img/nick.jpg" alt="Nick's Face"></a>
		<a href="profile.php"><h4>Profile Name</h4></a> <p>from the </p> <a href="lab.php"><h4> Lab Name</h4></a>
		<a href="project.php"><h4>Project Name</h4></a>
		<br>
		<p><a href="#List">List</a>, <a href="#Of">Of</a>, <a href="#Scientific">Scientific</a>, <a href="#Discipline">Disciplines</a> </p> 
		<br>
			<p>The first part of the post goes here......</p>
		<br>
			<p>posted at this time if today or this date if not today</p>
			
		
			<hr>

		</div>
		<div class="secondary-content col">
			<h3>Your Pages</h3>
			<hr>
			<a href="profile.php"><img src="img/nick.jpg" alt="Nick's Face"><h4>Your Profile</h4></a>
			<hr>
		</div>
	</div>
<?php include "helpers/footer.html"; ?>

	</div>
</body>
</html>
