<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

session_start();
if(!empty($_POST))
{
    $username= $_POST['username'];
    $password= $_POST['password'];
    
    if($username=='user' && $password=='pass')
    {
        $_SESSION['login'] = true;
        header("Location: admin_panel.php");
    }
    else{
        echo "Wrong Password! Try Again";
    }
}