<?php 
require_once('database/database.php');

$user = $_POST['username'];
$pass = $_POST['password'];
$userPrepare = getUser($_POST);
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    foreach($userPrepare as $userlog){
        if($userlog['username'] == $user){
            header('Location: page/allpost.php');
        }
    }
}
?>
<h1>Login not found!</h1>
<button><a href="login.php">Please login again!</a></button>