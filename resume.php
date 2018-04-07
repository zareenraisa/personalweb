<?php

$connection = mysqli_connect('localhost', 'root', '',"personal_site"); //The Blank string is the password


// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$query = "SELECT name,age,sex,address,phone,email,ssc,hsc,undergraduation,major FROM my_info"; //You don't need a ; like you do in SQL
$result = mysqli_query($connection,$query);


?>
<!DOCTYPE html>
<html>
<head>
	<title>resume</title>
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
<link rel="stylesheet" type="text/css" href="resume.css">

</head>
<body>

<div class="r_body">
<nav>
  <a href="resume.php">MY RESUME</a> |
  <a href="workandskills.php">MY WORKS & SKILLS </a> |
  <a href="contact.php">CONTACT</a> |
  <a href="index.php">PROFILE</a>
</nav>
		
 <div class="r_content">
 	<div class="container-fluid text-center">
 	<div class="row">
 		<div class="col-sm-12">

		<h1>CV of Zareen Tasnim Raisa</h1>
		<hr>
        <?php
        
            echo "<table border=\"2px\">
        	<th colspan=\"2\">Personal Info</th>"; // start a table tag in the HTML

            while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                foreach ($row as $key => $value) {
                   echo "<tr><td>" . $key . "</td><td>" . $value . "</td></tr>";  //$row['index'] the index here is a field name
                    } 
                }//Creates a loop to loop through results
                    

                echo "</table>"; //Close the table in HTML

                   mysqli_close($connection); //Make sure to close out the database connection
        
                              
                    mysqli_free_result($result);  // Free result set
        
        
        
        
        ?>
        




</div>
</div>
</div>
</div>
</div>



</body>
</html>

