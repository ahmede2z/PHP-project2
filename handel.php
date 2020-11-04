<?php
function cleanData($data)
{
    $data = htmlspecialchars($data);
    $data = trim($data);
    return $data;
}

session_start();

$userpass = $_POST['password'];
$useremail = $_POST['email'];

// clean the data

$userpass = cleanData($userpass);
$useremail = cleanData($useremail);

$_SESSION['isDAtaRight'] = true;
$_SESSION['isLoggedIn'] = false;

$_SESSION['is-userpass-valid'] = true;
$_SESSION['is-useremail-valid'] = true;

// VALIDATION the data


if (!preg_match('/([A-Z])+[\d\w]{5,9}$/', $userpass)) {
    $_SESSION['isDAtaRight'] = false;
    $_SESSION['is-userpass-valid'] = false;
}
if (!filter_var($useremail, FILTER_VALIDATE_EMAIL)) {
    $_SESSION['isDAtaRight'] = false;
    $_SESSION['is-useremail-valid'] = false;
}



if ($_SESSION['isDAtaRight'] == true) {
    $_SESSION['userpass'] = $userpass;
    $_SESSION['useremail'] = $useremail;
    $_SESSION['isLoggedIn'] = true;
    
    unset($_SESSION['notokay']);
    header('location: products.php');
} elseif ($_SESSION['isDAtaRight'] == false) {
    $_SESSION['notokay']=true;
    header('location: account.php');
}
