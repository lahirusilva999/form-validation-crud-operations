<?php
//embed database file
require_once "db_connection.php";

$member_id = $_POST['member_id'];

$first_name = $_POST['fname'];
$last_name = $_POST['lname'];
$user_mail = $_POST['umail'];
$reg_date = $_POST['regdate'];
$user_password = $_POST['upassword'];
$user_cpassword = $_POST['cpassword'];

if($first_name != "" && $last_name != "" && $user_mail != "" && $reg_date != "" && $user_password != "" && $user_cpassword != "" ){
    /*
    //check whether all data save in database
    echo "All Data are Received";
    */
if($user_password==$user_cpassword){

    //encrypt password
    $encrypt_password = md5($user_password);

    $sql = "UPDATE members SET firstname ='$first_name', lastname='$last_name', email='$user_mail', password='$user_password', reg_date_time='$reg_date'  WHERE
    member_id='$member_id'";
    if ($conn->query($sql) === TRUE) {

        header("location:member.php?s_msg=Record updated successfully");
    
    } else {
        header("location:edit_data.php?e_msg=Error updating record: & member=$member_id");    
    
    }
    $conn->close();



} 

else{

    header("location:edit_data.php?w_msg=Password and Confirm Password doesn't match! & member=$member_id");

}

}

else{
header("location:edit_data.php?w_msg=All data are required ! & member=$member_id");

}
    


/*
//check whether print value
echo $first_name. "<br>";
echo $last_name. "<br>";
echo $user_mail. "<br>";
echo $reg_date. "<br>";
echo $user_password. "<br>";
echo $user_password. "<br>";
*/



$conn->close();
?>