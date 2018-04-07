
<?php  require_once("connection.php");?>
<?php    session_start();
    if($_SESSION['login']){
        header("Location: admin_panel.php");
    }
?>


<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>login</title>
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
<link rel="stylesheet" type="text/css" href="login_form.css">
    </head>
    <body>
     <div class="l_body">

<nav>
  <a href="resume.php">MY RESUME</a> |
  <a href="workandskills.php">MY WORKS & SKILLS </a> |
  <a href="contact.php">CONTACT</a>
</nav>
     <div class="container-fluid">
<div class="row">
  <div class="col-sm-12">   
<div class="login_body">
<h1>Please Log In Here!</h1>
<hr>
    <form action="login.php" method="post">
            <table border="1">
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username"/></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password"/></td>
                </tr>
                <tr>
                    <td class="th" colspan="2"><div class="bttn"><button class="btn info">Login</button></div></td>
                </tr>
            </table>
        </form>

</div>

</div>
</div>
</div>
</div>