<?php
session_start();
include('includes/header.php')
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">

             <?php
            if(isset($_SESSION['status']))
            {
                echo"<h5 class='alert alert-success'>".$_SESSION['status']."</h5>";
                unset($_SESSION['status']);
            }
            ?>
            <div class="card">
            <div class="card-header">
                <h4>
                    regester
                    <a href="index.php" class="btn btn-danger float-end">back</a>
                </h4>
                </div>
                <div class="card-body">
                    <form action="rdbcon.php" method="POST">

                    <div class="form-group mb-3">
                        <label>full Name</label>
                        <input type="text" name="Full_name" class="form-control">    
                    </div>

                    <div class="form-group mb-3">
                        <label>Phone Number</label>
                        <input type="text" name="Phone" class="form-control">    
                
                    <div class="form-group mb-3">
                        <label>Email Address</label>
                        <input type="text" name="Email" class="form-control">    
                    </div>

                    <div class="form-group mb-3">
                        <label>password</label>
                        <input type="password" name="passwords" class="form-control">    
                    </div>

                  
                    <div class="form-group mb-3">
                        <button type="submit"   name="Register_btn" class="btn btn-primary">Register</button></div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

  <?php
include('includes/footer.php')
?>