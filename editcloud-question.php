<?php
include('includes/header.php')
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
            <div class="card-header">
                <h4>
                    edit cloud Question
                    <a href="index.php" class="btn btn-danger float-end">back</a>
                </h4>
                </div>
                <div class="card-body">


                <?php
                include('dbcon.php');
                if(isset($_GET['id']))
                {
                    $key_child =$_GET['id'];
                    $ref_table ='Cloud';
                    $getdata = $database->getReference($ref_table)->getChild($key_child)->getValue();

                    if($getdata >0)
                    {
                        ?>
                        
                 <form action="codec.php" method="POST">
                    <input type="hidden" name="key" value="<?=$key_child?>">

                    <div class="form-group mb-3">
                        <label>Question</label>
                        <input type="text" name="Quetion" value="<?=$getdata['Quetion'];?> " class="form-control">    
                    </div>

                    <div class="form-group mb-3">
                        <label>OptionA</label>
                        <input type="text" name="oA" value="<?=$getdata['oA'];?> " class="form-control">    
                    </div>

                    <div class="form-group mb-3">
                        <label>OptionB</label>
                        <input type="text" name="oB" value="<?=$getdata['oB'];?> " class="form-control">    
                    </div>

                    <div class="form-group mb-3">
                        <label>OptionC</label>
                        <input type="text" name="oC" value="<?=$getdata['oC'];?> " class="form-control">    
                    </div>

                    <div class="form-group mb-3">
                        <label>OptionD</label>
                        <input type="text" name="oD" value="<?=$getdata['oD'];?> " class="form-control">    
                    </div>

                    <div class="form-group mb-3">
                        <label>Answer Copy the text of the correct answer</label>
                        <input type="text" name="ans" value="<?=$getdata['ans'];?> " class="form-control">    
                    </div>


                    <div class="form-group mb-3">
                        <button type="submit"   name="update_question" class="btn btn-primary">update</button></div>


                </form>
                <?php
                        }
                        else
                        {

                        $_SESSION['status'] ="invalid ID";
                        header('Location: cloud.php');
                        exit();
                        }
                        }
                        else
                        {

                        $_SESSION['status'] ="no found";
                        header('Location: cloud.php');
                        exit();
                        }
                        $key_child = $_GET['id'];

                        ?>



                    </div>
            </div>
        </div>
    </div>
</div>

  <?php
include('includes/footer.php')
?>