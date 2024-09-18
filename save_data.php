<?php
//embed database file
require_once "db_connection.php";

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

$sql = "SELECT * FROM members where email = '$user_mail' ";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
header("location:add_new_member.php?e_msg=This email is used.Please enter another email");   
    

} else {     
    //encrypt password
    $encrypt_password = md5($user_password);

    //insert data into table
    $sql = "INSERT INTO members (firstname, lastname, email, password, reg_date_time )
    VALUES ('$first_name', '$last_name', '$user_mail', '$encrypt_password', '$reg_date')";

    if ($conn->query($sql) === TRUE) {
    header("location:member.php?s_msg=New record add successfully");
    } else {
    header("location:add_new_member.php?w_msg=Something went wrong, Please try again");
    }
}

} 

else{

    header("location:add_new_member.php?w_msg=Password and Confirm Password doesn't match!");

}

}

else{
header("location:add_new_member.php?w_msg=All data are required !");

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