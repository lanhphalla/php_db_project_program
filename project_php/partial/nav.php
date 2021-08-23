
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <img src="../picture/proLogo.png" alt="" class="rounded-circle  m-4" style="width: 3rem">
  <a class="navbar-brand" href="allpost.php">All post</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="image.php">Image<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="vedio.php">Vedio</a>
      </li>
      <form class="form-inline my-2 my-lg-0" method="post">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" name = "search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>  
      </form>
      <div class="log">
        <a href="../logOuts.php"><button class="btn btn-inline-success my-2 my-sm-0" type="submit">Logout</button></a>
      </div>
    </ul>
  </div>
</nav>