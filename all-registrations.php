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
            <li class="active">All Registrations</li>
        </ul>

        <div class="page-title">
            <h2 class="text-uppercase">All Registrations</h2>
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
                                        <th>View</th>
                                    </tr>
                                    </thead>
                                    <tbody id="all-mothers"></tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><strong>Children</strong></h3>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive" id="mothers">
                                <table class="table table-bordered" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Mother NIC No</th>
                                        <th>View</th>
                                    </tr>
                                    </thead>
                                    <tbody id="all-children"></tbody>
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

<script>

    $(function(){
        getAllMothers();
        getAllChildren();
    });

    function getAllMothers() {
        $.ajax({
            url: 'http://54.166.227.166:3000/api/get/all/mothers',
            method: 'post',
            dataType: 'json',

            error: function (e) {
                console.log(e);
            },
            success: function (r) {
                if (r.status) {
                    loadMothersTable(r);
                }
            }
        });
    }


    function loadMothersTable(results) {
        console.log("Record Count = " + results.data.length);
        var content = "";

        if (results.data.length === 0) {
            content += "<tr><td colspan='4'>No Data Available</td></tr>";
        }

        for(i=0; i<results.data.length; i++){
            content += "<tr><td>" + results.data[i].first_name + "</td>";
            content += "<td>" + results.data[i].last_name + "</td>";
            content += "<td>" + results.data[i].nic_no + "</td>";
            content += "<td><a href='#' onclick='viewMotherDetails(" + results.data[i].user_id + ")' class='btn btn-info btn-circle'><i class='fa fa-eye'></i></a></td></tr>";
        }

        $('#all-mothers').append(content);
    }

    function getAllChildren() {
        $.ajax({
            url: 'http://54.166.227.166:3000/api/get/all/children',
            method: 'post',
            dataType: 'json',

            error: function (e) {
                console.log(e);
            },
            success: function (r) {
                if (r.status) {
                    loadChildrenTable(r);
                }
            }
        });
    }

    function loadChildrenTable(results) {
        console.log("Record Count = " + results.data.length);
        var content = "";

        if (results.data.length === 0) {
            content += "<tr><td colspan='4'>No Data Available</td></tr>";
        }

        for(i=0; i<results.data.length; i++){
            content += "<tr><td>" + results.data[i].first_name + "</td>";
            content += "<td>" + results.data[i].last_name + "</td>";
            content += "<td>" + results.data[i].mother_nic_no + "</td>";
            content += "<td><a href='#' onclick='viewChildDetails(" + results.data[i].user_id + ")' class='btn btn-info btn-circle'><i class='fa fa-eye'></i></a></td></tr>";
        }

        $('#all-children').append(content);
    }

</script>

</body>
</html>






