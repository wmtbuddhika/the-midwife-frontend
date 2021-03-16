<?php
session_start();

if(empty($_SESSION['user_id']) || $_SESSION['user_id'] == NULL){
    header ('Location: index.php');
    exit;
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
                            <h3 class="panel-title"><strong>Father's Details</strong></h3>
                        </div>
                        <?php require_once('pages/after-birth/father-details.php'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once('pages/footer.php'); ?>

<script>

    $('.father_data').on('submit', function(e){
        e.preventDefault();
        $.ajax({
            url : 'http://54.166.227.166:3000/api/pre/registration/save',
            type : 'post',
            dataType: 'json',
            processData: false,
            data: JSON.stringify({"user_data" : getFormData($('.father_data'))}),

            error : function(e){
                console.log(e);
                if (e.status === 401) {
                    // window.location.replace('index.php');
                }
            },
            success : function(r){
                if (r.status) {

                    $('#photo_nic').val(r.data);
                    $('#cp_upload').submit();
                } else {
                    // window.location.replace('index.php');
                }
            }
        });
    });
</script>

</body>
</html>






