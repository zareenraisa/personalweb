<?php
session_start();
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Admin Panel</title>
        <meta charset="UTF-8">
        <!-- bootstrap -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- mobile meta tech -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- font awesome -->
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<!-- google font -->
<link href="https://fonts.googleapis.com/css?family=Shrikhand" rel="stylesheet">
        <!--style sheet-->
        <link rel="stylesheet" type="text/css" href="admin_panel.css">
    </head>
    
    <body>
        <div class="content"
        <div class="container-fluid">
        <div class="row">
        <div class="col-sm-12">
            
            <h1> Welcome Admin !!</h1>
		<hr>
        </div>
        </div>   
             
            
        <div class="row">
        <div class="col-sm-12">     
        <form name="update" method="post" action="update.php">        
        <table border="0px">
        	<th colspan="2">Personal Info</th>
        	<tr>
        		<td>Name:</td>
                        <td><input type="text" name="name"></td>
        	</tr>
             <tr>
             	<td>Age</td>
             	<td><input type="text" name="age"></td>
             </tr>
              <tr>
             	<td>Sex</td>
             	<td><input type="text" name="sex"></td>
             </tr>
              <tr>
             	<td>Address</td>
             	<td><input type="text" name="address"></td>
             </tr>
              <tr>
             	<td>Email</td>
             	<td><input type="text" name="email"></td>
             </tr>
              <tr>
             	<td>phone</td>
             	<td><input type="text" name="phone"></td>
             </tr>
             <tr>
             	<td>SSC</td>
             	<td><input type="text" name="ssc"></td>
             </tr>
             <tr>
             	<td>HSC</td>
             	<td><input type="text" name="hsc"></td>
             </tr>
             <tr>
             	<td>Undergradutation</td>
             	<td><input type="text" name="undergraduation"></td>
             </tr>
             <tr>
             	<td>Major</td>
             	<td><input type="text" name="major"></td>
             </tr>
        </table>
            <input type="submit" class="btn btn-info" value="Update" style="width: 10%;">
          <a href="logout.php" class=" btn btn-info" role="button" style="width: 10%;">Log Out</a>
            </form> 
            
        </div>
        </div>   
        </div>
    </div>
    </body>
</html>