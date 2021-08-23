<?php
    require_once('database/database.php');
    $userPrepare = getUser($_POST);
    $haveUser = FALSE;
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $_SESSION['username']=$_POST['username'];
        $_SESSION['password']=$_POST['passowrd'];
        foreach($userPrepare as $user){
            if ($user['username'] == $_POST['username']){
                $haveUser = TRUE;
            }
        }   
    }
    if(!$haveUser){
        $newUserLog = login($_POST);
        header('location: page/allpost.php');

    }else{
        header("location:login.php");
    }
?>

