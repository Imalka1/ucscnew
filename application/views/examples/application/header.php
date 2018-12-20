<?php
$this->load->library('session');
if (isset($applicationNo)) {
    if (basename($_SERVER['PHP_SELF']) != 'page1' && $applicationNo == '') {
        redirect(base_url() . 'application_form/page1');
    }
}
?>
<!doctype html>
<html lang="en">

<!-- Mirrored from demos.creative-tim.com/bs3/material-dashboard-pro/examples/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Jul 2018 13:04:37 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8"/><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8"/>
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png"/>
    <link rel="icon" type="image/png" href="<?= base_url('assets/images/ucscLogo.jpg') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

    <title>UCSC</title>

    <!-- Bootstrap core CSS     -->
    <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?= base_url('assets/css/demo.css') ?>" rel="stylesheet"/>


    <!--     Fonts and icons     -->
    <link href="<?= base_url('assets/font-awesome/latest/css/font-awesome.min.css') ?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">
    <style>
        hr {
            display: block;
            margin-top: 25px;
            margin-bottom: 25px;
            margin-left: auto;
            margin-right: auto;
            border-style: inset;
            /*border-width: 1px;*/
        }

        input[type=checkbox] {
            margin-left: 30px;
            -ms-transform: scale(2); /* IE */
            -moz-transform: scale(2); /* FF */
            -webkit-transform: scale(2); /* Safari and Chrome */
            -o-transform: scale(2); /* Opera */
        }

        input[type=radio] {
            margin-left: 30px;
            -ms-transform: scale(2); /* IE */
            -moz-transform: scale(2); /* FF */
            -webkit-transform: scale(2); /* Safari and Chrome */
            -o-transform: scale(2); /* Opera */
        }
    </style>
    <script src="<?= base_url('assets/js/jquery.min.js') ?>" type="text/javascript"></script>
</head>


<body>

<div class="wrapper" style="background-color: #f5f5f5;padding-bottom: 5px">


    <!--        <div style="background-color: #f5f5f5">-->
    <div style="text-align: center;font-size: 40px">
        <div style="padding-top: 60px">Application Form</div>
    </div>
    <div style="background-color: white;border: 2px solid #666666;margin: 50px;padding: 10px">
        <div class="row" style="margin-bottom: 10px">
            <div class="col-sm-4" style="font-weight: bold;font-size: 21px">University of Colombo School of
                Computing
            </div>
            <div class="col-sm-4"
                 style="text-align: center;margin-top: 10px;font-size: 16px;color: red;font-weight: 600">Application No
                : <span
                        id="appNo"><?= $applicationNo != '' ? $applicationNo : '(not yet)' ?></span>
            </div>
            <div class="col-sm-4" style="text-align: center;margin-top: 10px;font-size: 16px;font-weight: 600">Date
                issued : <span
                        id="appDate"></span>
            </div>
            <div class="col-sm-12"
                 style="font-weight: bold;font-size: 20px;text-align: center;margin-top: 20px"><?= $year ?>
                Intake
            </div>
        </div>

        <script>
            var today = new Date();
            var dd = today.getDate();
            var mm = today.getMonth() + 1; //January is 0!
            var yyyy = today.getFullYear();
            if (dd < 10) {
                dd = '0' + dd
            }
            if (mm < 10) {
                mm = '0' + mm
            }
            today = dd + '/' + mm + '/' + yyyy;
            $('#appDate').text(today);
        </script>

        <hr style="margin-top: 5px">