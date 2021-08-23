<?php
    require_once('../database/database.php');
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $isPost = createPost($_POST);
        if($isPost){
            header('location: ../page/allpost.php');
        }
    }