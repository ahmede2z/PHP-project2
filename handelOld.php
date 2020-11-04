<?php
function cleanData($data)
{
    $data = htmlspecialchars($data);
    $data = trim($data);
    return $data;
}

session_start();

$username = $_POST['name'];
$userpass = $_POST['password'];
$useremail = $_POST['email'];
$userphone = $_POST['phone'];
$faceUrl = $_POST['faceUrl'];
$twitUrl = $_POST['twitUrl'];
$instUrl = $_POST['instUrl'];

// clean the data

$username = cleanData($username);
$userpass = cleanData($userpass);
$useremail = cleanData($useremail);
$userphone = cleanData($userphone);
$faceUrl = cleanData($faceUrl);
$twitUrl = cleanData($twitUrl);
$instUrl = cleanData($instUrl);

$_SESSION['isDAtaRight'] = true;

$_SESSION['is-username-valid'] = true;
$_SESSION['is-userpass-valid'] = true;
$_SESSION['is-useremail-valid'] = true;
$_SESSION['is-userphone-valid'] = true;
$_SESSION['is-faceUrl-valid'] = true;
$_SESSION['is-twitUrl-valid'] = true;
$_SESSION['is-instUrl-valid'] = true;

// VALIDATION the data

if (!preg_match('/^[A-Z]([a-z]{3,8})$/', $username)) {
    $_SESSION['isDAtaRight'] = false;
    $_SESSION['is-username-valid'] = false;
}
if (!preg_match('/([A-Z])+[\d\w]{5,9}$/', $userpass)) {
    $_SESSION['isDAtaRight'] = false;
    $_SESSION['is-userpass-valid'] = false;
}
if (!filter_var($useremail, FILTER_VALIDATE_EMAIL)) {
    $_SESSION['isDAtaRight'] = false;
    $_SESSION['is-useremail-valid'] = false;
}
if (!preg_match('/^(002)?(\+2)?(01)[0125][0-9]{8}$/', $userphone)) {
    $_SESSION['isDAtaRight'] = false;
    $_SESSION['is-userphone-valid'] = false;
}
if (!filter_var($faceUrl, FILTER_VALIDATE_URL)) {
    $_SESSION['isDAtaRight'] = false;
    $_SESSION['is-faceUrl-valid'] = false;
}
if (!filter_var($twitUrl, FILTER_VALIDATE_URL)) {
    $_SESSION['isDAtaRight'] = false;
    $_SESSION['is-twitUrl-valid'] = false;
}
if (!filter_var($instUrl, FILTER_VALIDATE_URL)) {
    $_SESSION['isDAtaRight'] = false;
    $_SESSION['is-instUrl-valid'] = false;
}


if ($_SESSION['isDAtaRight'] == true) {
    $_SESSION['username'] = $username;
    $_SESSION['userpass'] = $userpass;
    $_SESSION['useremail'] = $useremail; 
    $_SESSION['userphone'] = $userphone;
    $_SESSION['faceUrl'] = $faceUrl;
    $_SESSION['twitUrl'] = $twitUrl;
    $_SESSION['instUrl'] = $instUrl;
    $_SESSION['isLoggedIn'] = true;

    header('location: products.php');

} elseif ($_SESSION['isDAtaRight'] == false) {
    $_SESSION['ehdh'] = true;
    header('location: account.php');
}

