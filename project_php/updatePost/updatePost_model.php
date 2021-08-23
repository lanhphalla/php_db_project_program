<?php 
    require_once('../database/database.php');
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $isUpdate = updatePost($_POST);
        if ($isUpdate){
            header('Location: ../page/allpost.php');
        }else{
            echo "Cannot update";
        }
    }