<?php require_once "db_connection.php"; ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Members</title>
  </head>
  <body>
    
        <div class="container mt-5"> 
                <div class="row">
                    
                    <div class="col-md-12">

                    <?php
                    //Success msg        
                       if(isset($_GET['s_msg']) && $_GET['s_msg'] != ""){
                    ?>

                    <div class="alert alert-success" role="alert">
                    <?php echo $_GET['s_msg']; ?>
                   
                    </div>


                    <?php

                    }
                   
                    ?>

                    <a href="add_new_member.php"><button class="btn btn-success">Add New Member</button> </a>

                    <br> <br>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <th scope="col">Member ID</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Register Date</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT * FROM members";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                            $member_id = $row['member_id'];
                            $member_first_name = $row['firstname'];
                            $member_last_name = $row['lastname'];
                            $member_email = $row['email'];
                            $registration_date_time = $row['reg_date_time'];
                            ?>

                                <tr>
                                <td> <?php echo  $member_id; ?> </td>
                                <td> <?php echo  $member_first_name; ?> </td>
                                <td> <?php echo  $member_last_name; ?> </td>
                                <td> <?php echo  $member_email; ?> </td>
                                <td> <?php echo  $registration_date_time; ?> </td>
                                <td> 
                                <a href="edit_data.php?member=<?php echo $member_id; ?> "> <button class="btn btn-primary">Edit</button> </a>
                                <a href="delete_data.php?member=<?php echo $member_id; ?> "> <button class="btn btn-danger">Delete</button></a>

                                </td>
                                </tr>
                            


                            <?php
                            
                            }
                            } else {
                            echo "0 results";
                            }
                            $conn->close();
                            ?>
              




                            
                        </table>
                                        
                </div>

                    


                                          
        
                 
            </div>
        </div>      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
