<?php
function database() {
    return new mysqli('localhost', 'root', '', 'project_php');
}
function getPostUPdate($id) {
    return database()->query("SELECT * FROM post WHERE post_id = $id");
}

//Pagination-----------
function getPost() {
    
    $result = 3;

    $page = 0;
    isset($_GET['page']) ? $page = $_GET['page'] : $page = 0;
    
    if($page > 1) {
        $start = ($page * $result) - $result;
    }else{
        $start = 0;
    }

    $data = database()->query("SELECT * FROM post LIMIT $start, $result");

    return $data;
    return database()->query("SELECT * FROM post INNER JOIN user");
}


function getTotalPage() {
    
    $result = 5;

    $page = 0;
    isset($_GET['page']) ? $page = $_GET['page'] : $page = 0;

    if($page > 1) {
        $start = ($page * $result) - $result;
    }else {
        $start = 0;
    }
    $data = database()->query("SELECT post_id FROM post");

    
    $numRow = $data->num_rows;
    $totalPage = $numRow / $result;
    return $totalPage;
}

function getUser() {
    return database()->query("SELECT * FROM user");
}

function createPost($value) {
    $title = $value['title'];
    $describtion = $value['describtion'];
    $image = $_FILES['image'];
    $imageNmae = $image['name'];
    $userId = $value['user_id'];
    $imageTmp = $image['tmp_name'];
    $imageSize = $image['size'];
    $category = $value['category'];
    if ($imageSize > 300000){
        header('Localhost: http://localhost/project_php/createPost/createPost.php');
    }else{
        $ex = pathinfo($imageNmae, PATHINFO_EXTENSION);
        $exSmall = strtolower($ex);
        $allEx = array('jpg', 'jpeg', 'png');
        if(in_array($exSmall, $allEx)) {
            $newImgName = uniqid('img-', true) . '.' . $exSmall;
            $imagePart = 'image/'. $newImgName;
            move_uploaded_file($imageTmp, $imagePart);
            return database()->query("INSERT INTO post(title, describtion, image, category,user_id) VALUES ('$title', '$describtion', '$newImgName', '$category','$userId')");
        }else{
            header('Localhost: http://localhost/project_php/createPost/createPost.php');
        }
    }
}
//---------------------

function updatePost($value) {
    $title = $value['title'];
    $describtion = $value['describtion'];
    $id = $value['post_id'];
    return database()->query("UPDATE post SET title = '$title', describtion = '$describtion' WHERE post_id = $id");
}
function deletePost($id) {
    return database()->query("DELETE FROM post WHERE post_id = $id");
} 
function logout() {
    return database()->query("DELETE FROM user ");  
}

function searchInfo($value) {
    $title = $value['search'];
    return database()->query("SELECT * FROM post WHERE post.title like '%$title%' ");
}

//Login


function login($value){
   $username=$value['username'];
   $password = $value['password'];
   $password = md5($password);
   $role = $value['role'];
   return database()->query("INSERT INTO user(username, password, role) VALUES ('$username', '$password', '$role')");
}
?>