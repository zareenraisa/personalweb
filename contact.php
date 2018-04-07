<!DOCTYPE html>
<html>
<head>
	<title>contact</title>
	<!-- bootstrap -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- mobile meta tech -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- font awesome -->
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<!-- google font -->
<link href="https://fonts.googleapis.com/css?family=Shrikhand" rel="stylesheet">
    <!-- stylesheet -->
<link rel="stylesheet" type="text/css" href="contact.css">

</head>
<body>

<div class="footer_body">
<nav>
  <a href="resume.php">MY RESUME</a> |
  <a href="workandskills.php">MY WORKS & SKILLS </a> |
  <a href="contact.php">CONTACT</a> |
  <a href="index.php">PROFILE</a>
</nav>
		
 <div class="footer_content">
 	<div class="container-fluid text-center">
 	<div class="row">
 		<div class="col-sm-12">
		<div class="footer_title">
			<h1>Let's Get in Touch!</h1>
			<hr>
			<p>Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>
		</div>
        </div>
    </div>
<div class="row">
    <div class="col-sm-12">
        
<div class="contact_form">
<form name="update" method="post" action="post_message.php">	
<input type="text" name="name" class="form_item" placeholder="Name *" required="true">
<input type="text" name="email" class="form_item" placeholder="Email *" required="">
<textarea name="message" placeholder="Message *" required=""></textarea>

<!--<input class="submit_btn" type="submit" name="submit" value="POST"/>-->
<input type="submit" class="btn btn-info" value="Post"> 
	
</form>
    </div>
    </div>
</div>
 	</div>
 </div>
 </div>



</body>
</html>