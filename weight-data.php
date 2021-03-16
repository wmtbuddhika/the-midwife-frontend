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
            <li class="active">Weight Data</li>
        </ul>

        <div class="page-title">
            <h2 class="text-uppercase">Weight Data</h2>
        </div>

        <div class="page-content-wrap">

            <div class="row">
                <div class="col-md-12">

                    <form class="form-horizontal" method="post" id="mother-data">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><strong>Mother's Details</strong></h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">NIC No</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="nic_no"/>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <div class="panel-footer">
                                <button class="btn btn-primary pull-right">Submit</button>
                            </div>
                        </div>
                    </form>

                    <div class="panel panel-default" id="children-details" >
                        <div class="panel-heading">
                            <h3 class="panel-title"><strong>Children Details</strong></h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12`">
                                    <?php require_once('all-children.php'); ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <form class="form-horizontal" method="post" id="weight-data">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><strong>Add Weight Data</strong></h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-6">

                                        <input type="hidden" id="user_id" name="user_id">
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Month *</label>
                                            <div class="col-md-9">
                                                <input type="number" class="form-control" value="" id="month" name="month"/>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Weight *</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" value="" id="weight" name="weight"/>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <div class="panel-footer">
                                <button class="btn btn-primary pull-right">Submit</button>
                            </div>
                        </div>
                    </form>

                    <div class="panel panel-default" id="weight-details">
                        <div class="panel-heading">
                            <h3 class="panel-title">Weight against Age</h3>
                        </div>
                        <div class="panel-body">
                            <div id="chart-1" style="height: 600px;"><svg></svg></div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

<?php require_once('pages/footer.php'); ?>

<script>
    window.onload = function() {
        $("#children-details").hide();
        $("#weight-details").hide();
        $("#weight-data").hide();
    };

    $('#mother-data').on('submit', function(e){
        e.preventDefault();
        $.ajax({
            url : 'http://54.166.227.166:3000/api/get/children',
            type : 'post',
            dataType: 'json',
            processData: false,
            data: JSON.stringify(getFormData($('#mother-data'))),

            error : function(e){
                console.log(e);
                if (e.status === 401) {

                }
            },
            success : function(r){
                if (r.status) {
                    if (r.data != null && r.data.length > 0) {
                        $("#children-details").show();
                        $("#children").find("tr:gt(0)").remove();
                        for (var i = 0; i < r.data.length; i++) {
                            $('#children > tbody:last-child').append('<tr>' +
                                '<td>' + r.data[i].first_name + '</td>' +
                                '<td>' + r.data[i].last_name + '</td>' +
                                '<td>' + r.data[i].date_of_birth + '</td>' +
                                '<td>' +
                                '<button id="' + r.data[i].user_id + '" class="btn btn-default btn-rounded btn-condensed btn-sm view" onclick="nvd3Charts.init(this.id);"><span class="fa fa-eye"></span></button> ' +
                                '<button id="' + r.data[i].user_id + '" value="' + r.data[i].date_of_birth + '" class="btn btn-default btn-rounded btn-condensed btn-sm view" onclick="addWeightData(this.id);getAge(this)"><span class="fa fa-edit"></span></button>' +
                                '</td>' +
                                '</tr>');
                        }
                    } else {
                        $("#children-details").hide();
                        $("#weight-details").hide();
                    }
                } else {

                }
            }
        });
    });

    $('#weight-data').on('submit', function(e){
        e.preventDefault();
        $.ajax({
            url : 'http://54.166.227.166:3000/api/save/weight',
            type : 'post',
            dataType: 'json',
            processData: false,
            data: JSON.stringify(getFormData($('#weight-data'))),

            error : function(e){
                console.log(e);
                if (e.status === 401) {

                }
            },
            success : function(r){
                if (r.status) {
                    if (r.data === "success") {
                        swal({
                            title: "Saved",
                            text: "Weight Data Saved Successfully",
                            icon: "success",
                            buttons: [null,'OK'],
                        }).then(function(isConfirm) {
                            $('#month').val('');
                            $('#weight').val('');
                            $("#weight-data").hide();
                        });
                    }
                } else {

                }
            }
        });
    });

    function addWeightData(user_id) {
        $('#user_id').val(user_id);
        $("#weight-data").show();
        $('html, body').animate({
            scrollTop: $("#weight-data").offset().top
        }, 2000);
    }

    function getAge(elem) {
        calculateAgeInMonths(elem.value);
    }
</script>
</body>
</html>

<style>
    .form-control[readonly] {
        color: black;
        font-weight: bolder;
    }
</style>






