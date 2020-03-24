<?php
session_start();

    if(!isset($_SESSION['username'])){
      header("Location: index1.php?access_denied");
    }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title>User Page</title>

    <style>
    body{
      background: #d7fffd;
    }
    .welcome{
      color: #11bb22;
      font-size: 35pt;
      font-weight: 900;
    }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <a href="#" class="navbar-brand"<i class="fas fa-book-reader">Beranda</i></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav">
          <a href="buku/tampil_buku.php" class="nav-item nav-link">Book</a>
          <a href="#" class="nav-item nav-link">Profile</a>
       </div>
       <form class="form-inline ml-auto">
        <div class="navbar-nav">
          <a href="logout.php" <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Logout</button></a>
        </div>
       </form>
    </div>
  </nav>
    <h1 class="welcome"> Selamat Datang <?php echo $_SESSION['username'];?></h1>
  </body>
</html>
