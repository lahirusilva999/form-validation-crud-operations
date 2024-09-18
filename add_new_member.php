
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
                    <div class="col-md-3"> </div>
                    <div class="col-md-6">

                    <?php 
                    //Error msg       
                       if(isset($_GET['e_msg']) && $_GET['e_msg'] != ""){
                    ?>

                    <div class="alert alert-danger" role="alert">
                    <?php echo $_GET['e_msg']; ?>
                   
                </div>


                <?php
                    }   
                ?>

                    <?php
                    //Warning msg        
                       if(isset($_GET['w_msg']) && $_GET['w_msg'] != ""){
                    ?>

                    <div class="alert alert-warning" role="alert">
                    <?php echo $_GET['w_msg']; ?>
                   
                </div>


                <?php

                    }
                   
                ?>

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


                <form action="/my_web3/save_data.php" method="post">
                    <div class="mb-3">
                        <label for="fname" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter First Name">
                    </div>

                    <div class="mb-3">
                        <label for="lname" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="lname" name="lname" placeholder="Enter Last Name">
                    </div>

                    <div class="mb-3">
                        <label for="umail" class="form-label">Email</label>
                        <input type="text" class="form-control" id="umail" name="umail" placeholder="Enter Email">
                    </div>

                    <div class="mb-3">
                        <label for="regdate" class="form-label">Registration Date</label>
                        <input type="date" class="form-control" id="regdate" name="regdate">
                    </div>


                    <div class="mb-3">
                        <label for="upassword" class="form-label">Password</label>
                        <input type="password" class="form-control" id="upassword" name="upassword" placeholder="Enter Password">
                    </div>

                    <div class="mb-3">
                        <label for="cpassword" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Enter Confirm Password">
                    </div>
                   
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>                              
        </div>
                <div class="col-md-3"> </div>  
            </div>
        </div>      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
