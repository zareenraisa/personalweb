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
$sql = "UPDATE my_info SET ";
if(!empty($_POST))
{
    $name= $_POST['name'];
 
    $age= $_POST['age'];
    $sex= $_POST['sex'];
    $address= $_POST['address'];
    $email=$_POST['email'];
    $phone= $_POST['phone'];
    $ssc= $_POST['ssc'];
    $hsc= $_POST['hsc'];
    $undergraduation= $_POST['undergraduation'];
    $major= $_POST['major'];
    
    $array=array('name'=>$name,'age'=>$age,'sex'=>$sex,'address'=>$address,'email'=>$email,'phone'=>$phone,'ssc'=>$ssc,'hsc'=>$hsc,'undergraduation'=>$undergraduation,'major'=>$major);
    $columns="";
    $values="";
    
    
     
    foreach($array as $key=>$value){
        if(!empty($value)){
           $sql.=$key."="."'$value',";
        }
    }
    $sql.=" ";
    $sql=rtrim($sql,", ");
    $sql.=" WHERE admin_id=0";
    
    if (!mysqli_query($conn, $sql)) {
    
    echo "Error updating record: " . mysqli_error($conn);
    }

mysqli_close($conn);
     header("Location: resume.php");
    
    
}
