<?php
session_start();

?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
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
                    login
                  
                </h4>
                </div>
                <div class="card-body">
                    
                    <form action="logincode.php" method="POST"> 
                        
                    <div class="form-group mb-3">
                        <label>Email Address</label>
                        <input type="text" name="email" class="form-control">    
                    </div>

                    <div class="form-group mb-3">
                        <label>password</label>
                        <input type="password" name="passwords" class="form-control">    
                    </div>
           
                  
                    <div class="form-group mb-3">
                        <button type="submit"   name="login_btn" class="btn btn-primary">login</button></div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

  <?php
include('includes/footer.php')
?>