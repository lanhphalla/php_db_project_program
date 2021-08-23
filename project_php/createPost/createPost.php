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
  
  <form action="createPostModel.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <input type="text" class="form-control" placeholder="Title" name="title">
    </div>
    <div class="form-group">
      <textarea class="form-control" placeholder="Describtion" name="describtion"></textarea>
    </div>
    <div class="form-group">
      <input type="file" class="form-control" placeholder="Image" name="image">
    </div>
    <div class="form-group">
      <input type="number" class="form-control" placeholder="userID" name="user_id">
    </div>
    <div class="category">
        <label for="category">Choose category of post:</label>
        <select name="category" >
        <option value="vedio">Vedio</option>
        <option value="image">image</option>
        </select>
      </div>
    <div class="form-group">
      <button type="submit" class="btn btn-primary btn-block" name="submit" value="Upload">Post</button>
    </div>
  </form>
</div>   
</body>
</html>