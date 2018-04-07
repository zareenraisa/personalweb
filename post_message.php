<h1>Test</h1>


<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "personal_site";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


if(!empty($_POST))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];
    
    $sql = "INSERT INTO messages (from_name, from_email, message)
VALUES ('$name' , '$email' , '$message')";
    
   print( $sql); 
   if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
    header("Location: index.php");
    
    
}