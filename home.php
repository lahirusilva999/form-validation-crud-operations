<!DOCTYPE html>
    <head>
        <title> Form Validate</title>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>

<body>

<div class="container">
 <div class="row">
        <div class="col-md-3"> </div>
        <div class="col-md-6"  style="margin:10px" > 

        <center>
        <?php        
        if(isset($_GET['msg'])){
                if($_GET['msg'] != ""){
        ?>

        <div class="alert alert-danger" role="alert">
        <?php
                $msg = $_GET['msg'];
                echo $msg;
        ?>
        </div>


        <?php

                }
        }

        ?>

        </center>

        <form action="user_reg.php" method="POST">
  <div class="form-group">
    <label for="f_name">First Name</label>
          <input type="text" class="form-control" id="f_name"  name="f_name" 
          value="<?php if(isset($_GET['f_name']) && $_GET['f_name'] != "") {echo $_GET['f_name'];}?>" 
          placeholder="Enter Your First Name plz">
  </div>
  <div class="form-group">
    <label for="l_name">Last Name</label>
          <input type="text" class="form-control" id="l_name"  name="l_name" 
          value="<?php if(isset($_GET['l_name']) && $_GET['l_name'] != "") {echo $_GET['l_name'];}?>"
          placeholder="Enter Your Last Name plz">
  </div>

  <div class="form-group">
    <label for="user_email">Email</label>
          <input type="email" class="form-control" id="user_email"  name="user_email" 
          value="<?php if(isset($_GET['user_email']) && $_GET['user_email'] != "") {echo $_GET['user_email'];}?>"   
          placeholder="Enter Your Email Address plz">
  </div>

  <div class="form-group">
    <label for="pw">Password</label>
          <input type="password" class="form-control" id="pw" name="pw" placeholder="Enter Your Password plz">
  </div>

  <div class="form-group">
    <label for="cpw"> Confirm Password</label>
          <input type="password" class="form-control" id="cpw" name="cpw" placeholder="Enter Your Password Again plz">
  </div>

  <button type="submit" class="btn btn-primary" style="width:100%">Submit</button>
</form>


        </div>
        <div class="col-md-3"> </div>

 </div>


</div>






<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js" integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>