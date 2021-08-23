<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>

<div class="container p-4">
    <?php 
        require_once('../database/database.php');
        $id = $_GET['id'];
        $dataPost = getPostUPdate($id);
        foreach($dataPost as $post):
        ?>
        <form action="updatePost_model.php" method="post">
            <input  type="hidden" 
                    value="<?=$post['post_id'] ?>" 
                    name = 'post_id'>
            <div    class="form-group">
                <input type="text" 
                    class="form-control" 
                    placeholder="Title" 
                    name="title" 
                    value="<?=$post['title'] ?>">
            </div>
            <div    class="form-group">
                <textarea class="form-control" 
                    placeholder="Describtion" 
                    name="describtion" 
                    value=""><?=$post['describtion'] ?></textarea>
            </div>
            <div    class="form-group">
                <button type="submit" 
                    class="btn btn-primary btn-block">Update</button>
            </div>
        </form>
        <?php endforeach; ?>
</body>
</html>