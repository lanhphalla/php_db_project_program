<?php
    include_once('../partial/header.php');
    include_once('../partial/nav.php');
    include_once('../partial/style.php');
?>
<?php 
    require_once('../database/database.php');
    $myPost = "";
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $myPost = searchInfo($_POST);
    }else{
      $myPost = getPost();
    }
    if ($myPost->num_rows > 0):
    foreach($myPost as $post):
    ?>
    <?php if ($post['category'] == "vedio") {?>
    <div class="row ml-4 mr-4 mt-4">
        <div class="col img">
            <div class="card mt-3" style="width: 18rem">
                <img src="../createPost/image/<?=$post['image'] ?>">
            </div>
        </div>
        <div class="col text">
            <h1><?=$post['title'] ?></h1>
            <p><?=$post['describtion'] ?></p>
            <p><?=$post['date'] ?></p>
        </div>
        <div class="col ">
            <a href="../updatePost/updatePost.php?id=<?=$post['post_id'] ?>" class="btn btn-primary mr-2"><i class="fa fa-pencil"></i></a>
            <a href="../deletePost/deletePost.php?id=<?=$post['post_id'] ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
        </div>
    </div>
    <?php }?>
<?php endforeach; 
else:
?>
<h1>No result</h1>
<?php 
    endif;
    include_once('../partial/footer.php');
?>