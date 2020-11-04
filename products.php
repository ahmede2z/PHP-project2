<!DOCTYPE html>
<html>
<!-- header -->

<head>
    <!-- meta -->
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- title -->
    <title>products</title>
    <!-- icon -->
    <link rel="icon" href="img/logo.png">
    <!-- CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
</head>
<!-- body -->
<?php
session_start();
if ($_SESSION['isLoggedIn'] == false) {
    header('location: home.php');
}
$products = [
    'product 1' => ['price' => '1500', 'img' => 'img/1.jpg', 'desc' => '2y 7agh 1'],
    'product 2' => ['price' => '2500', 'img' => 'img/2.jpg', 'desc' => '2y 7agh 2'],
    'product 3' => ['price' => '3500', 'img' => 'img/3.jpg', 'desc' => '2y 7agh 3'],
    'product 4' => ['price' => '4500', 'img' => 'img/4.jpg', 'desc' => '2y 7agh 4'],
    'product 5' => ['price' => '5500', 'img' => 'img/5.jpg', 'desc' => '2y 7agh 5'],
    'product 6' => ['price' => '6500', 'img' => 'img/6.jpg', 'desc' => '2y 7agh 6'],
];

?>

<body style="background-color: #f1f1f1">

    <nav class="navbar  navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <span class="navbar-brand">A-Z Store</span>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="home.php">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="account.php">account</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="logOut.php">Log out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="my-5">
        <div class="container">
            <div class="row">
                <?php foreach ($products as $product => $values) { ?>
                    <div class="col-md-4  my-5 px-5">
                        <div class="card shadow-lg">
                            <img src=<?php echo $values['img'] ?> class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">Name: <?php echo $product ?></h5>
                                <p class="card-text">Desc: <?php echo $values['desc'] ?></p>
                                <p class="card-text">Price: <?php echo $values['price'] ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <!-- JS -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>