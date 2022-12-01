<?php
include('includes/header.php')
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
            <div class="card-header">
                <h4>
                    add python Question
                    <a href="index.php" class="btn btn-danger float-end">back</a>
                </h4>
                </div>
                <div class="card-body">
                    <form action="code.php" method="POST">

                    <div class="form-group mb-3">
                        <label>Question</label>
                        <input type="text" name="Quetion" class="form-control">    
                    </div>

                    <div class="form-group mb-3">
                        <label>OptionA</label>
                       <input type="radio" name="option" value="oA"> 
                       <input type="text" name="oA" class="form-control">    
                    </div>

                    <div class="form-group mb-3">
                        <label>OptionB</label>
                        <input type="radio" name="option" value="oB">
                        <input type="text" name="oB" class="form-control">    
                    </div>

                    <div class="form-group mb-3">
                        <label>OptionC</label>
                        <input type="radio" name="option" value="oC">
                        <input type="text" name="oC" class="form-control">    
                    </div>
                    <div class="form-group mb-3">
                        <label>OptionD</label>
                        <input type="radio" name="option" value="oD">
                        <input type="text" name="oD" class="form-control">    
                    </div>
                    <div class="form-group mb-3">
                        <label>Answer Copy the text of the correct answer</label>
                        <input type="text" id="ans" name="ans" class="form-control">    
                    </div>
                    <div class="form-group mb-3">
                        <button type="submit"   name="save_question" class="btn btn-primary">Save</button></div>


                    </form>
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