<?php
$this->load->library('session');
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


        <!--  Material Dashboard CSS    -->
        <link href="<?= base_url('assets/css/material-dashboard98f3.css?v=1.3.0') ?>" rel="stylesheet"/>

        <!--  CSS for Demo Purpose, don't include it in your project     -->
        <link href="<?= base_url('assets/css/demo.css') ?>" rel="stylesheet"/>


        <!--     Fonts and icons     -->
        <link href="<?= base_url('assets/font-awesome/latest/css/font-awesome.min.css') ?>" rel="stylesheet">
        <link rel="stylesheet" type="text/css"
              href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons"/>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
              rel="stylesheet">
    </head>


<body>

<div class="wrapper" style="background-color: #f5f5f5">


    <div style="background-color: #f5f5f5">
        <div style="text-align: center;font-size: 40px">
            <div style="padding-top: 60px">University of Colombo School of Computing</div>
            <div style="padding-top: 50px">Academic Staff Recruitment</div>
        </div>
        <div class="row" style="background-color: white;border: 2px solid #7a4d01;margin: 50px;padding: 10px">
            <div style="text-align: center;font-size: 30px;color: green;font-weight: bold;padding-bottom: 60px;text-decoration: underline">ADVERTISEMENT</div>
            <?php
            foreach ($advertisement as $row)
                echo $row->message;
            ?>
        </div>
    </div>
</div>
<?php
include "footer.php";
?>