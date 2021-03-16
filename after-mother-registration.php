<?php
session_start();

if(empty($_SESSION['user_id']) || $_SESSION['user_id'] == NULL){
    header ('Location: index.php');
    exit;
}
?>

<?php
if(isset($_POST["photo_nic_mother"]) && $_POST["photo_nic_mother"] != "" && !empty($_FILES['file']))
{
    $t = time();
    $uuid = date("Ymdhms",$t);
    $path = $_SERVER['DOCUMENT_ROOT'] . "/attendance/uploads/";
    $fileName = basename( $_FILES['file']['name']);
    $userId = $_SESSION['user_id'];
    $savedFileName = $uuid . "|" . $fileName;
    $path = $path . $uuid . "|" . $fileName;
    $nic = $_POST["photo_nic_mother"];
    $first_name = $_POST["photo_first_name_child"];
    $last_name = $_POST["photo_last_name_child"];

    if ($nic != null) {
        if (move_uploaded_file($_FILES['file']['tmp_name'], $path)) {
            require_once('./pages/database/local_db.php');
            $query = "INSERT INTO Face (uuid, file_name, file_path, status, nic_no, first_name, last_name) 
                VALUES ($uuid,'$fileName', '$savedFileName', 1, '$nic', '$first_name', '$last_name');";
            $query_execute = mysqli_query($con, $query);
        }
    }
    $_FILES['file'] = null;
}
?>

<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <?php require_once('pages/header.php'); ?>
    <?php require_once('pages/plugins.php'); ?>
</head>
<body>
<div class="page-container">

    <div class="page-sidebar">
        <?php require_once('pages/navigation/side-menu.php'); ?>
    </div>

    <div class="page-content">
        <?php require_once('pages/navigation/top-bar.php'); ?>

        <ul class="breadcrumb">
            <li><a href="/home.php">Home</a></li>
            <li class="active">New Registration - After Birth</li>
        </ul>

        <div class="page-title">
            <h2 class="text-uppercase">New Registration - After Birth</h2>
        </div>

        <div class="page-content-wrap">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><strong>Mother's Details</strong></h3>
                        </div>
                        <?php require_once('pages/after-birth/mother-details.php'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once('pages/footer.php'); ?>

<script>

    $('.mother_data').on('submit', function(e){
        e.preventDefault();
        $.ajax({
            url : 'http://54.166.227.166:3000/api/save/mother',
            type : 'post',
            dataType: 'json',
            processData: false,
            data: JSON.stringify(getFormData($('.mother_data'))),

            error : function(e){
                console.log(e);
                if (e.status === 401) {
                    // window.location.replace('index.php');
                }
            },
            success : function(r){
                if (r.status) {
                    $('#photo_nic_mother').val(r.data.nic_no);
                    $('#photo_first_name_mother').val(r.data.first_name);
                    $('#photo_last_name_mother').val(r.data.last_name);

                    swal({
                        title: "Success",
                        text: "Mother's Details Saved Successfully",
                        icon: "success",
                        buttons: [null,'OK'],
                    }).then(function(isConfirm) {
                        $('#photo_upload_mother').submit();
                    });
                }
            }
        });
    });
</script>

</body>
</html>






