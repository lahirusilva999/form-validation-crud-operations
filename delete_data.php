<?php
//embed database file
require_once "db_connection.php";

$member_id = $_GET['member'];

// sql to delete a record
$sql = "DELETE FROM members WHERE member_id =$member_id";
if ($conn->query($sql) === TRUE) {
    header("location:member.php?s_msg=Record deleted successfully");
} else {
    header("location:member.php?e_msg=Error deleting record:");
}



?>