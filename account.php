<!DOCTYPE html>
<html>
<!-- header -->

<head>
    <!-- meta -->
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- title -->
    <title>account</title>
    <!-- icon -->
    <link rel="icon" href="img/logo.png">
    <!-- CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
</head>
<!-- body -->
<?php
session_start();


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

                    <?php  if (isset($_SESSION['isLoggedIn'])){if ($_SESSION['isLoggedIn'] == true) { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="products.php">All products</a>
                        </li>
                    <?php }}?>

                    <?php if (isset($_SESSION['isLoggedIn'])){ if ($_SESSION['isLoggedIn'] == true) { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="logOut.php">Log out</a>
                        </li>
                    <?php }} ?>
                </ul>
            </div>
        </div>
    </nav>

    <!-- new user -->
    <?php if (isset($_SESSION['isLoggedIn'])==false||isset($_SESSION['notokay'])==true) { ?>

        <section class="my-5">
            <div class="container">
                <form action="handel.php" method="POST">

                    <div class="form-group">
                        <label>E-mail:</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter your E-mail" required>
                        <?php if (isset($_SESSION['isLoggedIn'])){ if ($_SESSION['is-useremail-valid'] == false) { ?>
                            <div class="alert alert-danger">
                                your E-mail is invalid! Ex: xyz@abc.com
                            </div>
                        <?php }} ?>
                    </div>

                    <div class="form-group">
                        <label>Password:</label>
                        <input type="password" name="password" class="form-control" placeholder="Enter your password" required>
                        <?php if (isset($_SESSION['isLoggedIn'])){if ($_SESSION['is-userpass-valid'] == false) { ?>
                            <div class="alert alert-danger">
                                your password is invalid! EX: Asdfghj
                            </div>
                        <?php }} ?>
                    </div>

                    <button class="btn btn-primary" type="submit">Submit</button>


                </form>
            </div>
        </section>

    <?php } else { ?>   

        <!-- old user -->
        <section class="my-5">
            <div class="container">
                <form action="handelOld.php" method="POST">

                    <div class="form-group">
                        <label>user name:</label>
                        <input type="text" name="name" class="form-control" value="<?php  if ($_SESSION['isLoggedIn']==true&&isset($_SESSION['username'])==true){echo $_SESSION['username'];} ?>" placeholder="Enter your name" required>
                        <?php if (isset($_SESSION['ehdh'])){ if ($_SESSION['is-username-valid'] == false) { ?>
                            <div class="alert alert-danger">
                                your name is invalid! Ex: Ahmed
                            </div>
                        <?php }} ?>
                    </div>

                    <div class="form-group">
                        <label>Password:</label>
                        <input type="password" name="password" class="form-control" value="<?php  if ($_SESSION['isLoggedIn']==true&&isset($_SESSION['userpass'])==true){echo $_SESSION['userpass']; }?>" required>
                        <?php if (isset($_SESSION['ehdh'])){ if ($_SESSION['is-userpass-valid'] == false) { ?>
                            <div class="alert alert-danger">
                                your password is invalid! EX: Asdfghj
                            </div>
                        <?php }} ?>
                    </div>

                    <div class="form-group">
                        <label>E-mail:</label>
                        <input type="email" name="email" class="form-control" value="<?php  if ($_SESSION['isLoggedIn']==true&&isset($_SESSION['useremail'])==true){echo $_SESSION['useremail'];} ?>" required>
                        <?php  if (isset($_SESSION['ehdh'])){if ($_SESSION['is-useremail-valid'] == false) { ?>
                            <div class="alert alert-danger">
                                your E-mail is invalid! EX: ahmedezman@gmail.com
                            </div>
                        <?php }} ?>
                    </div>

                    <div class="form-group">
                        <label>phone-number:</label>
                        <input type="text" name="phone" class="form-control" value="<?php  if ($_SESSION['isLoggedIn']==true&&isset($_SESSION['userphone'])==true){echo $_SESSION['userphone'];} ?>" placeholder="Enter your phone-number" required>
                        <?php  if (isset($_SESSION['ehdh'])){if ($_SESSION['is-userphone-valid'] == false) { ?>
                            <div class="alert alert-danger">
                                your phone-number is invalid! EX: 01140364636
                            </div>
                        <?php }} ?>
                    </div>

                    <div class="form-group">
                        <label>facebook account url:</label>
                        <input type="text" name="faceUrl" class="form-control" value="<?php  if ($_SESSION['isLoggedIn']==true&&isset($_SESSION['faceUrl'])==true){echo $_SESSION['faceUrl'];} ?>" placeholder="Enter your facebook account url" required>
                        <?php if (isset($_SESSION['ehdh'])){ if ($_SESSION['is-faceUrl-valid'] == false) { ?>
                            <div class="alert alert-danger">
                                your facebook account url is invalid! EX: https://www.facebook.com/Ahmed.E2z.2001
                            </div>
                        <?php }} ?>
                    </div>

                    <div class="form-group">
                        <label>twitter account url:</label>
                        <input type="text" name="twitUrl" class="form-control" value="<?php  if ($_SESSION['isLoggedIn']==true&&isset($_SESSION['twitUrl'])==true){echo $_SESSION['twitUrl'];} ?>" placeholder="Enter your twitter account url" required>
                        <?php  if (isset($_SESSION['ehdh'])){if ($_SESSION['is-twitUrl-valid'] == false) { ?>
                            <div class="alert alert-danger">
                                your twitter account url is invalid! EX: https://mobile.twitter.com/Ahmed_E2z
                            </div>
                        <?php }} ?>
                    </div>

                    <div class="form-group">
                        <label>instagram account url:</label>
                        <input type="text" name="instUrl" class="form-control" value="<?php  if ($_SESSION['isLoggedIn']==true&&isset($_SESSION['instUrl'])==true){echo $_SESSION['instUrl'];} ?>" placeholder="Enter your instagram account url" required>
                        <?php  if (isset($_SESSION['ehdh'])){if ($_SESSION['is-instUrl-valid'] == false) { ?>
                            <div class="alert alert-danger">
                                your instagram account url is invalid! EX: https://www.instagram.com/ahmed.e2z/
                            </div>
                        <?php } }?>
                    </div>


                    <button class="btn btn-primary" type="submit">Submit</button>

                </form>
            </div>
        </section>

    <?php } ?>


    <!-- JS -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>