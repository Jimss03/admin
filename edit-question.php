<?php
include('includes/header.php')
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
            <div class="card-header">
                <h4>
                    edit
                    <a href="index.php" class="btn btn-danger float-end">back</a>
                </h4>
                </div>
                <div class="card-body">


                <?php
                include('dbcon.php');
                if(isset($_GET['id']))
                {
                    $key_child =$_GET['id'];
                    $ref_table ='python';
                    $getdata = $database->getReference($ref_table)->getChild($key_child)->getValue();

                    if($getdata >0)
                    {
                        ?>
                        
                 <form action="code.php" method="POST">
                    <input type="hidden" name="key" value="<?=$key_child?>">

                    <div class="form-group mb-3">
                        <label>Question</label>
                        <input type="text" name="Quetion" value="<?=$getdata['Quetion'];?> " class="form-control">    
                    </div>

                    <div class="form-group mb-3">
                        <label>OptionA</label>
                        <input type="radio" name="option" value="oA"> 
                        <input type="text" name="oA" value="<?=$getdata['oA'];?> " class="form-control">    
                    </div>

                    <div class="form-group mb-3">
                        <label>OptionB</label>
                        <input type="radio" name="option" value="oB">

                        <input type="text" name="oB" value="<?=$getdata['oB'];?> " class="form-control">    
                    </div>

                    <div class="form-group mb-3">
                        <label>OptionC</label>
                        <input type="radio" name="option" value="oC">

                        <input type="text" name="oC" value="<?=$getdata['oC'];?> " class="form-control">    
                    </div>

                    <div class="form-group mb-3">
                        <label>OptionD</label>
                        <input type="radio" name="option" value="oD">
                        <input type="text" name="oD" value="<?=$getdata['oD'];?> " class="form-control">    
                    </div>

                    <div class="form-group mb-3">
                        <label>Answer Copy the text of the correct answer</label>
                        <input type="text" id="ans" name="ans" value="<?=$getdata['ans'];?> " class="form-control">    
                    </div>


                    <div class="form-group mb-3">
                        <button type="submit"   name="update_question" class="btn btn-primary">update</button></div>


                </form>
                <?php
                        }
                        else
                        {

                        $_SESSION['status'] ="invalid ID";
                        header('Location: index.php');
                        exit();
                        }
                        }
                        else
                        {

                        $_SESSION['status'] ="no found";
                        header('Location: index.php');
                        exit();
                        }
                        $key_child = $_GET['id'];

                        ?>



                    </div>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script>
   $('input[type=radio][name=option]').change(function() {
        if (this.value == 'oA') {
            $val = $('input[type=text][name=oA]').val();
            $('#ans').val($val);
        }
        else if (this.value == 'oB') {
            $val = $('input[type=text][name=oB]').val();
            $('#ans').val($val);
        }
        else if (this.value == 'oC') {
            $val = $('input[type=text][name=oC]').val();
            $('#ans').val($val);
        }
        else if (this.value == 'oD') {
            $val = $('input[type=text][name=oD]').val();
            $('#ans').val($val);
        }
    });
</script>


  <?php
include('includes/footer.php')
?>