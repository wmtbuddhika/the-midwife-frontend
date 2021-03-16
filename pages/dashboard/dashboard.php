<?php
$userType = $_SESSION['user_type'];

if ($userType == 1) {
    require_once('pages/dashboard/dashboard-officer.php');
}