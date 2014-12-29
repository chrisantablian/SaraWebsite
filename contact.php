<!DOCTYPE html>
<html>
<head>
	<!-- Background patterns from subtlepatterns.com -->
	<title> Sara Antablian, Realtor </title>
	<meta name="viewport" content="width=device-width, initital-scale=1.0">
	<link href='http://fonts.googleapis.com/css?family=Goudy+Bookletter+1911' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Rokkitt' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Tangerine' rel='stylesheet' type='text/css'>
	<link type="text/css" rel="stylesheet" href="main.css"/>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="script.js"></script>
	<link rel="shortcut icon" href="images/icon.ico" type="image/x-icon"/>
</head>

<body>
<div id="wrapper">

		<header>
			<div id="agentinfo">
				<a href="index.html"><img id="agentpic" src="images/SmallPic.jpg"/></a>
					<p> <span> Sara Antablian</span> <br/>
					Cell: (818) 726-5443 <br/>
					CalBRE#: 01265049<br/>
				<a href="mailto:saralistshomes@gmail.com">saralistshomes@gmail.com <br/></a>
				</p>
				<img id="agentlogo" src="images/Hall-Chambers.png"/>
			</div>
		</header>

		<nav>
		<div id="navwrap">
		<div id="row1">
			<a href="index.html"><div class="row"><img src="images/HomeIcon.png"/><p> Home </p></div></a>
			<a href="about.html"><div class="row"><img src="images/AboutIcon.png"/><p> About </p></div></a>
			<a href="properties.html"><div class="row"><img src="images/PropertiesIcon.png"/><p> Properties </p></div></a>
		</div>
		<div id="row2">
			<a href="testimonials.html"><div class="row"><img src="images/TestimonialsIcon.png"/><p> Testimonials </p></div></a>
			<a href="updates.html"><div class="row"><img src="images/UpdatesIcon.png"/><p> Updates </p></div></a>
			<a href="contact.php"><div class="row"><img src="images/ContactIcon.png"/><p> Contact </p></div></a>
		</div>
		</div>
		</nav>

<?php
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];
		$submit = $_POST['submit'];
		$to = 'saralistshomes@gmail.com';
	
		$body = "From: $email\n Name: $name\n Message: $message";
		
		mail($to, $subject, $body);
	};
?>
		
	<!-- CONTACT FORM -->
		<form id="form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
			<div id="formheader">
				<h1> Contact Me </h1>
			</div>
		
			<div id="formbody">
				<label>Name</label><br/>
				<input type="text" name="name" required autofocus><br/>
			
				<label>Email</label><br/>
				<input type="email" name="email" required><br/>
			
				<label>Subject</label><br/>
				<input type="text" name="subject" required><br/>
			
				<label>Message</label><br/>
				<textarea type="text" name="message" required></textarea><br/>
				
				<input id="submit" type="submit" name="submit">
			</div>
		</form>	
	
<div class="push"></div>
</div>
	<footer>
		<div id="footerwrap">
		<a href="index.html"> <p> Home | </p> </a>
		<a href="about.html"> <p> About | </p> </a>
		<a href="properties.html"> <p> Properties | </p> </a>
		<a href="testimonials.html"> <p> Testimonials | </p> </a>
		<a href="updates.html"> <p> Updates |</p> </a>
		<a href="contact.php"> <p> Contact</p> </a>
		</div>
	</footer>

</body>
</html>
