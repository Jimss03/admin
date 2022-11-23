<?php
session_start();
include('dbcon.php');



if(isset($_POST['delete_btn']))
{
    $del_id = $_POST['delete_btn'];
    $ref_table= 'javaquiz/'.$del_id;
    $deletequery_result = $database->getReference($ref_table)->remove();

    if($deletequery_result)
    {
        $_SESSION['status'] ="deleted";
        header('Location: javaq.php');
    }
    else
    {
        $_SESSION['status'] ="delete error";
        header('Location: javaq.php');
    }
}


    if(isset($_POST['update_question']))
    {
        $key = $_POST['key'];
        $Quetion = $_POST['Quetion'];
        $oA = $_POST['oA'];
        $oB = $_POST['oB'];
        $oC = $_POST['oC'];
        $oD = $_POST['oD'];
        $ans = $_POST['ans'];
    
        $updateData = [
            'Quetion'=>$Quetion,
            'oA'=>$oA,
            'oB'=>$oB,
            'oC'=>$oC,
            'oD'=>$oD,
            'ans'=>$ans,
        ];
        $ref_table='javaquiz/'.$key;
        $updatequery_result = $database->getReference($ref_table)->update($updateData);

        if($updatequery_result)
        {
            $_SESSION['status'] ="updated";
            header('Location: javaq.php');
        }
        else
        {
            $_SESSION['status'] ="update error";
            header('Location: javaq.php');
        }
    }





if(isset($_POST['save_question']))
{
    $Quetion = $_POST['Quetion'];
    $oA = $_POST['oA'];
    $oB = $_POST['oB'];
    $oC = $_POST['oC'];
    $oD = $_POST['oD'];
    $ans = $_POST['ans'];

    $postData = [
        'Quetion'=>$Quetion,
        'oA'=>$oA,
        'oB'=>$oB,
        'oC'=>$oC,
        'oD'=>$oD,
        'ans'=>$ans,
    ];
    $ref_table= "javaquiz";
    $postRef_result = $database->getReference($ref_table)->push($postData);

    if($postRef_result)
    {
        $_SESSION['status'] ="add Question success";
        header('Location: javaq.php');
    }
    else
    {
        $_SESSION['status'] ="add Question success";
        header('Location: javaq.php');
    }
}

?>