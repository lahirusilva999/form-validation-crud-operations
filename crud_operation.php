<?php
//embed database file
require_once "db_connection.php";

/*
// Create database
$sql = "CREATE DATABASE my_web3";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}
*/

/*
// sql to create table
$sql = "CREATE TABLE members (
    member_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    password VARCHAR(200),
    reg_date_time DATETIME NOT NULL
    )";
    
    if ($conn->query($sql) === TRUE) {
      echo "Table members created successfully";
    } else {
      echo "Error creating table: " . $conn->error;
    }
*/

/*
//get datetime now
date_default_timezone_set("Asia/Colombo");
$date_time_now = date("Y-m-d H:i:s");

//encrypt password
$password = "1234";
$encrypt_password = md5($password);

//insert data into table
$sql = "INSERT INTO members (firstname, lastname, email, password, reg_date_time )
VALUES ('John', 'Doe', 'john@example.com', '$encrypt_password', '$date_time_now')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
*/

/*
$sql = "SELECT * FROM members";
$result = $conn->query($sql);

//print result
print_r($result);
die();

//print one by one data
print_r($result->fetch_assoc());
echo "<br>";
print_r($result->fetch_assoc());
die();


if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $member_id = $row['member_id'];
    $member_first_name = $row['firstname'];
    $member_last_name = $row['lastname'];
    $member_email = $row['email'];
    $member_password = $row['password'];
    $registration_date_time = $row['reg_date_time'];
    echo $member_id." ".$member_first_name." ".$member_last_name." ".$member_email." ".$registration_date_time. "<br>";

  }
} else {
  echo "0 results";
}
*/  

/*
//Update data in table
$sql = "UPDATE members SET firstname='Anura', lastname='Disanayake' WHERE member_id=1";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}
*/  


// sql to delete a record
$sql = "DELETE FROM members WHERE member_id =6";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}





$conn->close();

?>