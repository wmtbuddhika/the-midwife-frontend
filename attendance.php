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
            <li class="active">All Attendance</li>
        </ul>

        <div class="page-title">
            <h2 class="text-uppercase">All Attendance</h2>
        </div>

        <div class="page-content-wrap">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><strong>Mothers</strong></h3>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive" id="mothers">
                                <table class="table table-bordered" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>NIC No</th>
                                        <th>Date Time</th>
                                        <th>Attendance</th>
                                    </tr>
                                    </thead>
                                    <tbody id="all-mothers">
                                    <?php
                                    require_once('pages/database/local_db.php');

                                    $now = new DateTime();
                                    $now = $now->format('Y-m-d');

                                    $query = "SELECT f.first_name, f.last_name, f.nic_no, a.status, a.date_time
                                        FROM Face f LEFT JOIN Attendance a ON f.id = a.face_id AND DATE(date_time) = '$now';";
                                    $execute = mysqli_query($con, $query);
                                    while($attendance = mysqli_fetch_assoc($execute)){
                                        ?>

                                        <tr>
                                            <td><strong><?php echo $attendance['first_name']; ?></strong></td>
                                            <td><strong><?php echo $attendance['last_name']; ?></strong></td>
                                            <td><strong><?php echo $attendance['nic_no']; ?></strong></td>
                                            <td><strong><?php echo $attendance['date_time']; ?></strong></td>
                                            <td>
                                                <?php
                                                if ($attendance['status'] == 1) {
                                                    ?>
                                                    <strong>Attended</strong>
                                                    <?php
                                                } else {
                                                    ?>
                                                    <strong>Absent</strong>
                                                    <?php
                                                }
                                                ?>
                                            </td>
                                        </tr>

                                        <?php
                                    }
                                    mysqli_close($con);
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once('pages/footer.php'); ?>

</body>
</html>






