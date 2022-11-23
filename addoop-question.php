<?php
include('includes/header.php')
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
            <div class="card-header">
                <h4>
                    add OOP Question
                    <a href="oop.php" class="btn btn-danger float-end">back</a>
                </h4>
                </div>
                <div class="card-body">
                    <form action="codeoop.php" method="POST">

                    <div class="form-group mb-3">
                        <label>Question</label>
                        <input type="text" name="Quetion" class="form-control">    
                    </div>

                    <div class="form-group mb-3">
                        <label>OptionA</label>
                        <input type="text" name="oA" class="form-control">    
                    </div>

                    <div class="form-group mb-3">
                        <label>OptionB</label>
                        <input type="text" name="oB" class="form-control">    
                    </div>

                    <div class="form-group mb-3">
                        <label>OptionC</label>
                        <input type="text" name="oC" class="form-control">    
                    </div>
                    <div class="form-group mb-3">
                        <label>OptionD</label>
                        <input type="text" name="oD" class="form-control">    
                    </div>
                    <div class="form-group mb-3">
                        <label>Answer Copy the text of the correct answer</label>
                        <input type="text" name="ans" class="form-control">    
                    </div>


                    <div class="form-group mb-3">
                        <button type="submit"   name="save_question" class="btn btn-primary">Save</button></div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

  <?php
include('includes/footer.php')
?>