<?php
session_start();

$_SESSION['token'] = $_REQUEST['token'];
$_SESSION['user_id'] = $_REQUEST['data']['id'];
$_SESSION['user_name'] = $_REQUEST['data']['nic'];
$_SESSION['user_type'] = $_REQUEST['data']['user_type_id'];

session_write_close();
$response['result'] = "success";
echo json_encode($response);