<!DOCTYPE html>
<html>
<!-- header -->

<head>
  <!-- meta -->
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- title -->
  <title>Home</title>
  <!-- icon -->
  <link rel="icon" href="img/logo.png">
  <!-- CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/all.min.css">

  <style>
    body {
      background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url(img/bg.jpg);
      height: 100vh;
      background-position: center center;
      background-size: cover;
      background-repeat: no-repeat;
    }

    .header {
      width: 100%;
      height: 100%;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }

    h1 {
      color: #ff305b;
      font-size: 60px;
      font-weight: bold;
      text-transform: uppercase;
    }
  </style>
</head>
<!-- body -->
<?php
session_start();
?>

<body>
  <nav class="navbar fixed-top  navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <span class="navbar-brand">A-Z Store</span>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">


          <?php  if (isset($_SESSION['isLoggedIn'])){if ($_SESSION['isLoggedIn'] == true) { ?>
            <li class="nav-item">
              <a class="nav-link" href="products.php">All products</a>
            </li>
          <?php } }?>

          <li class="nav-item">
            <a class="nav-link" href="account.php">account</a>
          </li>

          <?php  if (isset($_SESSION['isLoggedIn'])){if ($_SESSION['isLoggedIn'] == true) { ?>
            <li class="nav-item">
              <a class="nav-link" href="logOut.php">Log out</a>
            </li>
          <?php } }?>
        </ul>
      </div>
    </div>
  </nav>
  
  <div class="header">
    <h1>welcome to our store</h1>
  </div>

  <!-- JS -->
  <script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>