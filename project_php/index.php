
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<title>Welcome to Finance Portal</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="assests/css/style.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</head>
<?php
?>
<body>
<div class="signup-form">
    <form action="sigUnProcess.php" method="POST">
		<h2>Sign UP</h2>
		<p class="hint-text">Enter Sign UP Details</p>
        <div class="form-group">
        	<input type="text" class="form-control" name="username" placeholder="username" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" required="required">
        </div>
        <div class="role">
        <label for="role">Choose Role:</label>
        <select name="role">
        <option value="Admin">Admin</option>
        <option value="user">User</option>
        </select>
      </div>
		<div class="form-group">
            <button type="submit" name="submit" class="btn btn-success btn-lg btn-block">Sign Ub</button>
        </div>
        <div class="text-center">Don't have an account? <a href="login.php">Register Here</a></div>
    </form>
</div>
</body>
</html>