<?php
  include_once('../partial/header.php');
  include_once('../partial/nav.php');
  include_once('../partial/style.php')
?>
<div class="d-flex justify-content-end p-4">
  <a href="../createPost/createPost.php" class="btn btn-primary">Add post</a>
</div>
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
  
  <?php if ($post['category'] == "image") {?>
    <div class="row picture ml-4 mr-4">
      <div class="card m-3">
        <div class="card" style="width: 18rem">
          <img src="../createPost/image/<?= $post['image']?>">
          <small><?=$post['describtion'] ?></small>
          <small><?=$post['date'] ?></small>
          <div class="d-flex justify-content-end">           
            <a href="../deletePost/deletePost.php?id=<?=$post['post_id'] ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
          </div>
        </div>
      </div>
    </div>
  <?php }?>
  <?php if ($post['category'] != "image") {?>
  <div class="row ml-4 mr-4">
    <div class="col img mt-3">
      <div class="card" style="width: 18rem">
        <img src="../createPost/image/<?=$post['image'] ?>" alt="lll">
      </div>
    </div>
    <?php }?>
    <?php if ($post['category'] != "image") {?>
    <div class="col text mt-3">
      <h1><?=$post['title']       ?></h1>
      <p><?=$post['describtion']  ?></p>
      <p><?=$post['date']         ?></p>
    </div>
    <div class="col mt-3">
      <a href="../updatePost/updatePost.php?id=<?=$post['post_id'] ?>" class="btn btn-primary mr-2"><i class="fa fa-pencil"></i></a>
      <a href="../deletePost/deletePost.php?id=<?=$post['post_id'] ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
    </div>
  </div>
  <?php }?>
  
  <?php endforeach;?>
  <div class="d-flex justify-content-center">
  
    <ul class="pagination">
      <?php  
        $pages = getTotalPage();
        for($i = 1; $i <= $pages + 1; $i++):
      ?>
      <li class="page-item"><a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a></li>
      <?php endfor ?> 
    </ul>
    </div>
  <?php else: ?> 
  <h1>No result</h1>
<?php 
  endif;
  include_once ('../partial/footer.php');
?>