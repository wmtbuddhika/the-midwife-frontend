<?php
$dob = $_REQUEST['dob'];
$age = "";

if((!empty($dob) && $dob != NULL)){
    $date = new DateTime($dob);
    $now = new DateTime();

    if ($date > $now) {
        $date = $now;
    }
    $interval = $now->diff($date);
    $age = $interval->y . " Y, " . $interval->m . " M, " . $interval->d . " D";
}

$response['age'] = $age;
echo json_encode($response);