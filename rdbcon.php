<?php
session_start();
include('Adbcon.php');


if(isset($_POST['Register_btn']))

{
    $fullname =$_POST['Full_name'];
    $phone =$_POST['Phone'];
    $email=$_POST['Email'];
    $password =$_POST['passwords'];


    $userProperties = [
        'Email' => $email,
        'emailVerified' => false,
        'phoneNumber' => '+63'. $phone,
        'passwords' => $password,
        'displayName' => $fullname,
       
    ];
    
    $createdUser = $auth->createUser($userProperties);

    if($createdUser)
    {
        $_SESSION['status'] ="User Created Successfully";
        header('Location: register.php');
        exit();
    }
    else{
        $_SESSION['status'] ="User not registered";
        header('Location: register.php');
        exit();
    }
}
?>