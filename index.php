<!DOCTYPE html>
<html lang="en" class="body-full-height">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <?php require_once('pages/header.php'); ?>
    <?php require_once('pages/plugins.php'); ?>
</head>

<body>

<div class="login-container lightmode">
    <div class="login-box animated fadeInDown">
        <div class="login-logo"></div>
        <div class="login-body">
            <div class="login-title"><strong>Log In</strong> to your account</div>
            <form class="form-horizontal" id="main-form" method="post">
                <div class="form-group">
                    <div class="col-md-12">
                        <input name="nic" id="nic" type="text" class="form-control" placeholder="NIC"/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <input name="password" id="password" type="password" class="form-control" placeholder="Password"/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6">
                        <a href="#" class="btn btn-link btn-block" onclick="forgotPassword()">Forgot your password ?</a>
                    </div>
                    <div class="col-md-6">
                        <button type="button" id="login-btn" class="btn btn-info btn-block">Log In</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="login-footer">
            <div class="pull-left">
            </div>
            <div class="pull-right">
                &copy; 2020 - The Midwife
            </div>
        </div>
    </div>
</div>
<?php require_once('pages/plugins.php'); ?>

<script type="text/javascript">

    $('#login-btn').on('click', function(e){
        e.preventDefault();

        $.ajax({
            url : 'http://54.166.227.166:3000/auth/login',
            data : JSON.stringify(getFormData($('#main-form'))),
            method : 'post',
            dataType: 'json',

            error : function(e){
                if (e.status == 401) {
                    swal ('Incorrect', 'Username or Password is Incorrect', 'error');
                }
            },
            success : function(r){
                if (r.data.user_type_id == 1) {
                    $.ajax({
                        url: 'pages/common/session.php',
                        data: r,
                        method: 'post',
                        dataType: 'json',

                        error: function (e) {
                            console.log(e);
                        },
                        success: function (r) {
                            if (r.result === "success") {
                                window.location.replace('home.php');
                            }
                        }
                    });
                } else {
                    swal ('Not Authorized', 'You are not authorized to access the system.', 'error');
                }
            }
        });
    });

    function forgotPassword() {
        swal({
            icon: "warning",
            title: "Confirmation",
            text: 'Are you want to retrieve your password ? \n\n Please enter registered NIC No',
            inputPlaceholder: "Please enter registered NIC No",
            content: "input",
            buttons: true,
        }).then((value) => {
            if (value != null) {
                sendEmail(value)
            }
        });
    }

    function sendEmail(value) {
        $.ajax({
            url: 'http://54.166.227.166:3000/auth/forgot',
            data: JSON.stringify({'nic': value}),
            method : 'post',
            dataType: 'json',

            error: function (e) {
                console.log(e);
            },
            success: function (r) {
                if (r.status) {
                    swal("Request Sent", 'Please check your registered email', 'success');
                }
            }
        });
    }

</script>

<noscript><div><img src="https://mc.yandex.ru/watch/25836617" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
</body>

</html>






