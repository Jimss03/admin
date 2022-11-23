<?php

use Lcobucci\JWT\Signer\InvalidKeyProvided;

session_start();
include('Adbcon.php');

if(isset($_POST['login_btn']))
{
   
    $email =$_POST['email'];
    $clearTextPassword =$_POST['passwords'];


    try {

        $user = $auth->getUserByEmail("$email");
        try{
            $signInResult = $auth->signInWithEmailAndPassword($email, $clearTextPassword);
            $idTokenString =  $signInResult->idToken();

            try {
                $verifiedIdToken = $auth->verifyIdToken($idTokenString);
                $uid = $verifiedIdToken->claims()->get('sub');

                $_SESSION['verified_user_id']=$idTokenString;
                $_SESSION['idTokenString']=$idTokenString;

                $_SESSION['status'] ="login in success";
                header('Location: index.php');
                exit();

            } catch (InvalidKeyProvided  $e) {
                echo 'The token is invalid: '.$e->getMessage();
            }
        }

        catch(Exception $e)
        {
            $_SESSION['status'] ="wrong password";
            header('Location: login.php');
            exit();

        }
        catch(Exception $e)
        {
            $_SESSION['status'] ="wrong key";
            header('Location: login.php');
            exit();

        }
       

    } catch (\Kreait\Firebase\Exception\Auth\UserNotFound $e) {
        //echo $e->getMessage();
        $_SESSION['status'] ="invalid Email";
        header('Location: login.php');
        exit();
    }
}
else
{
     $_SESSION ="Not allowed";
     header('Location: login.php');
     exit();
}


?>