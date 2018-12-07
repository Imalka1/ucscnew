<?php
$this->load->library('session');
//echo $_SESSION["accountType"];
if (!isset($_SESSION["accountType"])) {
    redirect(base_url() . "main");
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

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
    <meta name="viewport" content="width=device-width"/>

    <link rel="canonical" href="http://www.creative-tim.com/product/material-dashboard-pro"/>

    <!--  Social tags      -->
    <meta name="keywords"
          content="material dashboard, bootstrap material admin, bootstrap material dashboard, material design admin, material design, creative tim, html dashboard, html css dashboard, web dashboard, freebie, free bootstrap dashboard, css3 dashboard, bootstrap admin, bootstrap dashboard, frontend, responsive bootstrap dashboard, premiu material design admin">

    <meta name="description"
          content="Material Dashboard PRO is a Premium Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design.">

    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="Material Dashboard PRO by Creative Tim | Premium Bootstrap Admin Template">
    <meta itemprop="description"
          content="Material Dashboard PRO is a Premium Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design.">
    <meta itemprop="image" content="../../../../s3.amazonaws.com/creativetim_bucket/products/51/opt_mdp_thumbnail.jpg">

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@creativetim">
    <meta name="twitter:title" content="Material Dashboard PRO by Creative Tim | Premium Bootstrap Admin Template">
    <meta name="twitter:description"
          content="Material Dashboard PRO is a Premium Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design.">
    <meta name="twitter:creator" content="@creativetim">
    <meta name="twitter:image"
          content="../../../../s3.amazonaws.com/creativetim_bucket/products/51/opt_mdp_thumbnail.jpg">

    <!-- Open Graph data -->
    <meta property="fb:app_id" content="655968634437471">
    <meta property="og:title" content="Material Dashboard PRO by Creative Tim | Premium Bootstrap Admin Template"/>
    <meta property="og:type" content="article"/>
    <meta property="og:url" content="http://www.creative-tim.com/product/material-dashboard-pro"/>
    <meta property="og:image"
          content="../../../../s3.amazonaws.com/creativetim_bucket/products/51/opt_mdp_thumbnail.jpg"/>
    <meta property="og:description"
          content="Material Dashboard PRO is a Premium Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design."/>
    <meta property="og:site_name" content="Creative Tim"/>

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

    <!--    <script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script>-->
    <!--    <script type="text/javascript">-->
    <!--        //<![CDATA[-->
    <!--        bkLib.onDomLoaded(function () {-->
    <!--            new nicEditor({fullPanel: true}).panelInstance('txtDetails');-->
    <!--        });-->
    <!--        //]]>-->
    <!--    </script>-->
    <!--    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>-->
    <!--    <script>tinymce.init({ selector:'textarea' });</script>-->
    <script src="<?= base_url('assets/ckeditor/ckeditor.js') ?>"></script>
</head>


<body>

<div class="wrapper" style="background-color: #eeeeee">

    <div class="sidebar" data-active-color="rose" data-background-color="black"
         data-image="<?= base_url('assets/img/catrin-johnson-486188-unsplash.jpg') ?>">
        <!--
            Tip 1: You can change the color of active element of the sidebar using: data-active-color="purple | blue | green | orange | red | rose"
            Tip 2: you can also add an image using data-image tag
            Tip 3: you can change the color of the sidebar with data-background-color="white | black"
        -->


        <div class="sidebar-wrapper">

            <ul class="nav">
                <li>
                    <?php
                    if (!isset($_SESSION["accountType"])) {
                        ?>
                        <a href="<?= base_url('SignIn') ?>">
                            <i class="fa fa-power-off fa-3x" style="color: #E9B500"></i>
                            <p style="color: #E9B500;font-weight: 500"> Sign In </p>
                        </a>
                        <?php
                    } else {
                        ?>
                        <a href="<?= base_url('SignIn/logout') ?>">
                            <i class="fa fa-power-off fa-3x" style="color: #E9B500"></i>
                            <p style="color: #E9B500;font-weight: 500"> Sign Out </p>
                        </a>
                        <?php
                    }
                    ?>
                </li>
            </ul>
            <div class="user" style="padding-bottom: 8px;margin-top: 0px"></div>
            <ul class="nav">
                <li>
                    <a href="<?= base_url('main') ?>">
                        <i class="material-icons">home</i>
                        <p> Home </p>
                    </a>
                </li>

                <li
                    <?php
                    if (basename($_SERVER['PHP_SELF']) == "dashboard") {
                        echo "class='active'";
                    }
                    ?>
                >
                    <a href="<?= base_url('main/dashboard') ?>">
                        <i class="material-icons">dashboard</i>
                        <p> About </p>
                    </a>
                </li>

                <?php
                if (isset($_SESSION["accountType"])) {
                    if ($_SESSION["accountType"] == "Applicant") {
                        ?>
                        <li>
                            <a data-toggle="collapse" href="#tablesExamples">
                                <i class="material-icons">assignment</i>
                                <p> Application
                                    <b class="caret"></b>
                                </p>
                            </a>

                            <div class="collapse" id="tablesExamples">
                                <ul class="nav">
                                    <li>
                                        <a href="tables/regular.html">
                                            <span class="sidebar-mini"> FA </span>
                                            <span class="sidebar-normal"> Fill Application </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="tables/extended.html">
                                            <span class="sidebar-mini"> EA </span>
                                            <span class="sidebar-normal"> Edit Application </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="tables/datatables.net.html">
                                            <span class="sidebar-mini"> UD </span>
                                            <span class="sidebar-normal"> Upload Documents </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <?php
                    }
                }
                ?>

                <?php
                if (isset($_SESSION["accountType"])) {
                    if ($_SESSION["accountType"] == "interview_panel" || $_SESSION["accountType"] == "sar") {
                        ?>
                        <li
                            <?php
                            if (basename($_SERVER['PHP_SELF']) == "applicants" || basename($_SERVER['PHP_SELF']) == "sar") {
                                echo "class='active'";
                            }
                            ?>
                        >
                            <a href="
                            <?php
                            if ($_SESSION["accountType"] == "interview_panel") {
                                ?>
                                <?= base_url('main/applicants') ?>
                                <?php
                            } else if ($_SESSION["accountType"] == "sar") {
                                ?>
                                <?= base_url('main/sar') ?>
                                <?php
                            }
                            ?>">
                                <i class="material-icons">group</i>
                                <p> Applicants </p>
                            </a>
                        </li>
                        <?php
                    }
                }
                ?>

                <?php
                if (isset($_SESSION["accountType"])) {
                    if ($_SESSION["accountType"] == "sar") {
                        ?>
                        <li
                            <?php
                            if (basename($_SERVER['PHP_SELF']) == "vacancy") {
                                echo "class='active'";
                            }
                            ?>
                        >
                            <a href="
                            <?php
                            if ($_SESSION["accountType"] == "sar") {
                                ?>
                                <?= base_url('main/vacancy') ?>
                                <?php
                            }
                            ?>">
                                <i class="material-icons">comment</i>
                                <p> Vacancy Details </p>
                            </a>
                        </li>
                        <?php
                    }
                }
                ?>



                <?php
                if (isset($_SESSION["accountType"])) {
                    if ($_SESSION["accountType"] == "interview_panel") {
                        ?>
                        <li>
                            <a data-toggle="collapse" href="#notificationExamples">
                                <i class="material-icons">notifications</i>
                                <p> Notifications
                                    <b class="caret"></b>
                                </p>
                            </a>

                            <div class="collapse" id="notificationExamples">
                                <ul class="nav">
                                    <li
                                        <?php
                                        if (basename($_SERVER['PHP_SELF']) == "advertisement-sar") {
                                            echo "class='active'";
                                        }
                                        ?>
                                    >
                                        <a href="<?= base_url('main/advertisement-sar') ?>">
                                            <span class="sidebar-mini"> AD </span>
                                            <span class="sidebar-normal"> Advertisement </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <?php
                    }
                }
                ?>

                <?php
                if (isset($_SESSION["accountType"])) {
                    if ($_SESSION["accountType"] == "sar") {
                        ?>
                        <li>
                            <a data-toggle="collapse" href="#notificationExamples">
                                <i class="material-icons">notifications</i>
                                <p> Notifications
                                    <?php
                                    if (isset($_SESSION["notify_count"])) {
                                        echo '(' . $_SESSION["notify_count"] . ')';
                                    }
                                    ?>
                                    <b class="caret"></b>
                                </p>
                            </a>

                            <div class="collapse" id="notificationExamples">
                                <ul class="nav">
                                    <li
                                        <?php
                                        if (basename($_SERVER['PHP_SELF']) == "advertisement_sar") {
                                            echo "class='active'";
                                        }
                                        ?>
                                    >
                                        <a href="<?= base_url('main/advertisement_sar') ?>">
                                            <span class="sidebar-mini"> AD </span>
                                            <span class="sidebar-normal"> Advertisement </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <?php
                    }
                }
                ?>
            </ul>
        </div>
    </div>


    <div class="main-panel" style="background-color: #f5f5f5">

        <nav class="navbar navbar-transparent navbar-absolute">
            <div class="container-fluid">
                <div style="right: 15px;position: absolute;padding-right: 50px;font-weight: bold;top: 20px;color: #352c24;margin-top:0px;background-color: #e9b500;padding:9px;border-radius: 18px;display: inline-block">
                    <?php
                    if (!isset($_SESSION["accountType"])) {
                        ?>
                        Currently Offline
                        <?php
                    } else {
                        ?>
                        Online -
                        <?php
                        if (isset($_SESSION["username"])) {
                            echo $_SESSION["username"];
                        }
                    }
                    ?>
                </div>
                <div class="navbar-minimize">
                    <button id="minimizeSidebar" class="btn btn-round btn-white btn-fill btn-just-icon">
                        <i class="material-icons visible-on-sidebar-regular">more_vert</i>
                        <i class="material-icons visible-on-sidebar-mini">view_list</i>
                    </button>
                </div>
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <?php
                    if (basename($_SERVER['PHP_SELF']) == "dashboard") {
                        ?>
                        <div class="navbar-brand" href="#"> About</div>
                        <?php
                    }
                    ?>
                    <?php
                    if (basename($_SERVER['PHP_SELF']) == "applicants" || basename($_SERVER['PHP_SELF']) == "sar") {
                        ?>
                        <div class="navbar-brand" href="#"> Applicants</div>
                        <?php
                    }
                    ?>
                    <?php
                    if (basename($_SERVER['PHP_SELF']) == "contact") {
                        ?>
                        <div class="navbar-brand" href="#"> Contact</div>
                        <?php
                    }
                    ?>
                    <?php
                    if (basename($_SERVER['PHP_SELF']) == "vacancy") {
                        ?>
                        <div class="navbar-brand" href="#"> Vacany Details</div>
                        <?php
                    }
                    ?>
                    <?php
                    if (basename($_SERVER['PHP_SELF']) == "advertisement_sar") {
                        ?>
                        <div class="navbar-brand" href="#"> Advertisement</div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </nav>