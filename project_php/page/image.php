<?php
    include_once('../partial/header.php');
    include_once('../partial/style.php');
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
    foreach ($myPost as $post):
    ?>
    <?php if ($post['category'] == "image"){?>
    <div class="row picture ml-4 mr-4 mt-4">
        <div class="card m-3 mt-3">
            <div class="card" style="width: 18rem">
                <img src="../createPost/image/<?=$post['image'] ?>">
                <small><?=$post['describtion'] ?></small>
                <small><?=$post['date'] ?></small>
                <div class="d-flex justify-content-end">
                    <a href="../deletePost/deletePost.php?id=<?=$post['post_id'] ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                </div>
            </div>
        </div>
    </div>
    <?php }?>
    <?php endforeach ;
    else:
    ?>
    <h1>No result</h1>
<?php 
    endif;
    include_once('../partial/footer.php');
?>