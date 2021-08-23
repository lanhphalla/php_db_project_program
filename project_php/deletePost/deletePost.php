<?php 
    require_once('../database/database.php');
    $id = $_GET['id'];
    $isdeleted = deletePost($id);
    if ($isdeleted) {
        header("Location: ../page/allpost.php");
    }