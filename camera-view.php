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
            <li class="active">Camera View</li>
        </ul>

        <div class="page-title">
            <h2 class="text-uppercase">Camera View</h2>
        </div>

        <div class="page-content-wrap">

            <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><strong>Camera 01</strong></h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6`">
                                    <video autoplay="true" id="videoElement">

                                    </video>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><strong>Camera 02</strong></h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6`">
                                    <div autoplay="true" id="videoElement">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<?php require_once('pages/footer.php'); ?>
<style>
    #container {
        margin: 0px auto;
        width: 500px;
        height: 375px;
        border: 10px #333 solid;
    }
    #videoElement {
        width: 500px;
        height: 375px;
        background-color: #666;
    }
</style>

<script>
    var video = document.querySelector("#videoElement");

    if (navigator.mediaDevices.getUserMedia) {
        navigator.mediaDevices.getUserMedia({ video: true })
            .then(function (stream) {
                video.srcObject = stream;
            })
            .catch(function (err0r) {
                console.log("Something went wrong!");
            });
    }

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






