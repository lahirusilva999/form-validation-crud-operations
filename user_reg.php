<?php

$First_name = $_POST['f_name'];
// echo "First Name is " . $First_name;//
$Last_name = $_POST['l_name'];
$User_mail = $_POST['user_email'];
$User_password = $_POST['pw'];
$User_confirm_password = $_POST['cpw'];

/*
echo $First_name. "<br>";
echo $Last_name. "<br>";
echo $User_mail. "<br>";
echo $User_password. "<br>";
echo $User_confirm_password. "<br>";
*/


if($First_name == "") {
header("location:home.php?msg=First Name is Required! & f_name=$First_name & l_name=$Last_name & user_email=$User_mail");
}
    else if($Last_name == "") {
header("location:home.php?msg=Last Name is Required! & f_name=$First_name & l_name=$Last_name & user_email=$User_mail"); 
    }
    else if($User_mail == "") {
header("location:home.php?msg=Email is Required! & f_name=$First_name & l_name=$Last_name & user_email=$User_mail");  
    }
    else if($User_password == "") {
header("location:home.php?msg=Password is Required! & f_name=$First_name & l_name=$Last_name & user_email=$User_mail");   
    }
    else if($User_confirm_password == "") {
header("location:home.php?msg=Confirm Password is Required! & f_name=$First_name & l_name=$Last_name & user_email=$User_mail");  
    } 
    else if($User_password != $User_confirm_password) {
header("location:home.php?msg=Password and Confirm Password doesn't match! & f_name=$First_name & l_name=$Last_name & user_email=$User_mail ");   
    } 
    else{
header("location:wall.php?msg=Ragistration is Sucessfull!");
    }  
       


?>