<?php
session_start();
include('includes/header.php');

?>


<div class="container">
    <div class="row">
        <div class="col-md-12">
            
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
                    Python Question
                    <a href="add-question.php" class="btn btn-primary float-end">add question</a>
                </h4>
                </div>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                                <th>ID</th>
                                <th>Question</th>
                                <th>OptionA</th>
                                <th>OptionB</th>
                                <th>OptionC</th>
                                <th>OptionD</th>
                                <th>ANSWER</th>
                                <th>Edite</th>
                                <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include('dbcon.php');

                        $ref_table = 'python';
                        $fetchdata = $database->getReference($ref_table)->getValue();

                        if($fetchdata > 0)
                        {
                            $i=1;
                            foreach($fetchdata as $key=> $row)
                            {
                                ?>
                                <tr>
                                    <td><?= $i++; ?></td>
                                    <td><?= $row['Quetion']; ?></td>
                                    <td><?= $row['oA']; ?></td>
                                    <td><?= $row['oB']; ?></td>
                                    <td><?= $row['oC']; ?></td>
                                    <td><?= $row['oD']; ?></td>
                                    <td><?= $row['ans']; ?></td>
                                    <td>
                                        <a href="edit-question.php?id=<?=$key;?>" class="btn btn-primary btn-sm">EDIT</a>
                                </td>
                                <td>
                                        
                                        <form action="code.php" method="POST">
                                            <button type="submit" name="delete_btn" value="<?=$key?>" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                </td>
                                </tr>
                                <?php

                            }

                        }
                        else
                        {
                            ?>
                            <tr>
                                <td colspan="9">No Record Found</td>
                            </tr>


                            <?php
                        }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

  <?php
include('includes/footer.php')
?>
