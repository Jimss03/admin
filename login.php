<?php
session_start();

?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

<div class="container clearfix width-full text-center">
    <a class="header-logo" href="login.php" aria-label="Homepage" data-ga-click="(Logged out) Header, go to homepage, icon:logo-wordmark">
      <svg height="48" aria-hidden="true" viewBox="0 0 16 16" version="1.1" width="48" data-view-component="true" class="octicon octicon-mark-github">
    <path fill-rule="evenodd" d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0016 8c0-4.42-3.58-8-8-8z"></path>
</svg>
    </a>
  </div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">

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