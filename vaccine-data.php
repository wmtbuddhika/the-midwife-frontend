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
            <li class="active">Vaccine Data</li>
        </ul>

        <div class="page-title">
            <h2 class="text-uppercase">Vaccine Data</h2>
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

                    <form class="form-horizontal" method="post" id="vaccine-data">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><strong>Add Vaccine Data</strong></h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="hidden" id="user_id" name="user_id">

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">B. C. G.</label>
                                            <div class="col-md-2">
                                                <label class="switch">
                                                    <input type="checkbox" checked="" value="0" name="bcg1">
                                                    <span></span>
                                                </label>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                    <input type="text" class="form-control datepicker" placeholder="Date" id="bcg1_date" name="bcg1_date"/>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">B. C. G. (2nd Dose)</label>
                                            <div class="col-md-2">
                                                <label class="switch">
                                                    <input type="checkbox" checked="" value="0" name="bcg2">
                                                    <span></span>
                                                </label>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                <input type="text" class="form-control datepicker" placeholder="Date" id="bcg2_date" name="bcg2_date"/>
                                            </div>
                                            </div>
                                        </div>

                                        <hr>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Pentavalent 1</label>
                                            <div class="col-md-2">
                                                <label class="switch">
                                                    <input type="checkbox" checked="" value="0" name="pentavalent1">
                                                    <span></span>
                                                </label>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                <input type="text" class="form-control datepicker" placeholder="Date" id="pentavalent1_date" name="pentavalent1_date"/>
                                            </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">O. P. V. 1</label>
                                            <div class="col-md-2">
                                                <label class="switch">
                                                    <input type="checkbox" checked="" value="0" name="opv1">
                                                    <span></span>
                                                </label>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                <input type="text" class="form-control datepicker" placeholder="Date" id="opv1_date" name="opv1_date"/>
                                            </div>
                                            </div>
                                        </div>

                                        <hr>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Pentavalent 2</label>
                                            <div class="col-md-2">
                                                <label class="switch">
                                                    <input type="checkbox" checked="" value="0" name="pentavalent2">
                                                    <span></span>
                                                </label>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                <input type="text" class="form-control datepicker" placeholder="Date" id="pentavalent2_date" name="pentavalent2_date"/>
                                            </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">O. P. V. 2</label>
                                            <div class="col-md-2">
                                                <label class="switch">
                                                    <input type="checkbox" checked="" value="0" name="opv2">
                                                    <span></span>
                                                </label>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                <input type="text" class="form-control datepicker" placeholder="Date" id="opv2_date" name="opv2_date"/>
                                            </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">I. P. V.</label>
                                            <div class="col-md-2">
                                                <label class="switch">
                                                    <input type="checkbox" checked="" value="0" name="ipv">
                                                    <span></span>
                                                </label>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                <input type="text" class="form-control datepicker" placeholder="Date" id="ipv_date" name="ipv_date"/>
                                            </div>
                                            </div>
                                        </div>

                                        <hr>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Pentavalent 3</label>
                                            <div class="col-md-2">
                                                <label class="switch">
                                                    <input type="checkbox" checked="" value="0" name="pentavalent3">
                                                    <span></span>
                                                </label>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                <input type="text" class="form-control datepicker" placeholder="Date" id="pentavalent3_date" name="pentavalent3_date"/>
                                            </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">O. P. V. 3</label>
                                            <div class="col-md-2">
                                                <label class="switch">
                                                    <input type="checkbox" checked="" value="0" name="opv3">
                                                    <span></span>
                                                </label>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                <input type="text" class="form-control datepicker" placeholder="Date" id="opv3_date" name="opv3_date"/>
                                            </div>
                                            </div>
                                        </div>

                                        <hr>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">M. M. R. 1</label>
                                            <div class="col-md-2">
                                                <label class="switch">
                                                    <input type="checkbox" checked="" value="0" name="mmr1">
                                                    <span></span>
                                                </label>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                    <input type="text" class="form-control datepicker" placeholder="Date" id="mmr1_date" name="mmr1_date"/>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Live JE</label>
                                            <div class="col-md-2">
                                                <label class="switch">
                                                    <input type="checkbox" checked="" value="0" name="je">
                                                    <span></span>
                                                </label>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                <input type="text" class="form-control datepicker" placeholder="Date" id="je_date" name="je_date"/>
                                            </div>
                                            </div>
                                        </div>

                                        <hr>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">D. P. T.</label>
                                            <div class="col-md-2">
                                                <label class="switch">
                                                    <input type="checkbox" checked="" value="0" name="ddt">
                                                    <span></span>
                                                </label>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                <input type="text" class="form-control datepicker" placeholder="Date" id="ddt_date" name="ddt_date"/>
                                            </div>
                                            </div>
                                        </div>

                                        <hr>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">O. P. V. 4</label>
                                            <div class="col-md-2">
                                                <label class="switch">
                                                    <input type="checkbox" checked="" value="0" name="opv4">
                                                    <span></span>
                                                </label>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                <input type="text" class="form-control datepicker" placeholder="Date" id="opv4_date" name="opv4_date"/>
                                            </div>
                                            </div>
                                        </div>

                                        <hr>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">M. M. R. 2</label>
                                            <div class="col-md-2">
                                                <label class="switch">
                                                    <input type="checkbox" checked="" value="0" name="mmr2">
                                                    <span></span>
                                                </label>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                <input type="text" class="form-control datepicker" placeholder="Date" id="mmr2_date" name="mmr2_date"/>
                                            </div>
                                            </div>
                                        </div>

                                        <hr>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">D. T.</label>
                                            <div class="col-md-2">
                                                <label class="switch">
                                                    <input type="checkbox" checked="" value="0" name="dt">
                                                    <span></span>
                                                </label>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                <input type="text" class="form-control datepicker" placeholder="Date" id="dt_date" name="dt_date"/>
                                            </div>
                                            </div>
                                        </div>

                                        <hr>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">O. P. V. 5</label>
                                            <div class="col-md-2">
                                                <label class="switch">
                                                    <input type="checkbox" checked="" value="0" name="opv5">
                                                    <span></span>
                                                </label>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                <input type="text" class="form-control datepicker" placeholder="Date" id="opv5_date" name="opv5_date"/>
                                            </div>
                                            </div>
                                        </div>

                                        <hr>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">A. T. D.</label>
                                            <div class="col-md-2">
                                                <label class="switch">
                                                    <input type="checkbox" value="0" name="adt" id="adt" onclick="changeValue(this.id, this.value)">
                                                    <span></span>
                                                </label>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                <input type="text" class="form-control datepicker" placeholder="Date" id="adt_date" name="adt_date"/>
                                            </div>
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
        $("#vaccine-data").hide();
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
                                '<button id="' + r.data[i].user_id + '" value="' + r.data[i].date_of_birth + '" class="btn btn-default btn-rounded btn-condensed btn-sm view" onclick="addVaccineData(this.id);"><span class="fa fa-edit"></span></button>' +
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

    $('#vaccine-data').on('submit', function(e){
        e.preventDefault();
        swal({
            title: "Saved",
            text: "Vaccine Data Saved Successfully",
            icon: "success",
            buttons: [null,'OK'],
        }).then(function(isConfirm) {
            $("#vaccine-data").hide();
        });
        /*$.ajax({
            url : 'http://54.166.227.166:3000/api/save/vaccine',
            type : 'post',
            dataType: 'json',
            processData: false,
            data: JSON.stringify(getFormData($('#vaccine-data'))),

            error : function(e){
                console.log(e);
                if (e.status === 401) {

                }
            },
            success : function(r){
                if (r.status) {
                    if (r.data === "success") {

                    }
                } else {

                }
            }
        });*/
    });

    function addVaccineData(user_id) {
        $('#user_id').val(user_id);
        $("#vaccine-data").show();
    }

    function changeValue(id, value) {
        if (value == 1) {
            value = 0;
        } else if (value == 0) {
            value = 1;
        }
        $('#' + id).val(value);
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






