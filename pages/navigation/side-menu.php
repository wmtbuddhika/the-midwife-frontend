<?php
require("vendor/autoload.php");

use \Firebase\JWT\JWT;
use \Firebase\JWT\SignatureInvalidException;
use \Firebase\JWT\BeforeValidException;
use \Firebase\JWT\ExpiredException;

$userType = $_SESSION['user_type'];
$key = 'mid-wife-login-auth';

try {
    $decoded = JWT::decode($_SESSION['token'], $key, array('HS256'));
} catch (SignatureInvalidException $e) {
    header ('Location: index.php');
    exit;
} catch (BeforeValidException $e) {
    header ('Location: index.php');
    exit;
} catch (ExpiredException $e) {
    header ('Location: index.php');
    exit;
}

if($userType == 1) {
    require_once('pages/navigation/side-menu-officer.php');
} else if($userType == 2) {
    require_once('pages/navigation/side-menu-mother.php');
} else if($userType == 5) {
    require_once('pages/navigation/side-menu-officer.php');
}