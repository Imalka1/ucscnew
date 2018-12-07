<?php
$this->load->library('session');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="<?= base_url('assets/images/ucscLogo.jpg') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>UCSC</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('assets/landing/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="<?= base_url('assets/landing/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet"
          type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet'
          type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="<?= base_url('assets/landing/css/agency.min.css') ?>" rel="stylesheet">

</head>

<body id="page-top">

<header class="masthead">
    <div class="container">
        <div class="intro-text" style="font-weight: 400;font-size: 45px;padding-top: 200px;padding-bottom: 300px">
            <div>University of Colombo School of Computing</div>
            <div style="padding-top: 10px">Academic Staff Recruitment</div>
            <a href="<?= base_url('login') ?>" style="color: inherit">
                <div style="font-weight: bold;color: #352c24;background-color: #e9b500;padding:20px;padding-left: 50px;padding-right: 50px;border-radius: 40px;display: inline-block;cursor: pointer;margin-top: 100px;font-size: 25px">
                    <?php
                    if (!isset($_SESSION["accountType"])) {
                        ?>
                        Sign In
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
            </a>
            <?php
            if (isset($_SESSION["accountType"])) {
                ?>
                <div class="row">
                    <div class="col-sm-12" style="font-size: 14px;font-weight: 100;padding-top: 10px">
                        (Click to continue)
                    </div>
                </div>
                <?php
            }
            ?>
            <!--            <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Tell Me More</a>-->
        </div>
    </div>
</header>

<!-- Services -->
<section id="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase">Services</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
            </span>
                <h4 class="service-heading">Apply For Vacancies</h4>
                <p class="text-muted">Apply for vacancies via system.</p>
            </div>
            <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
            </span>
                <h4 class="service-heading">Staff Services</h4>
                <p class="text-muted">Automatically categorize applicants for relevant positions and further stuff for
                    authorized logins.</p>
            </div>
            <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
            </span>
                <h4 class="service-heading">Applicant Login</h4>
                <p class="text-muted">Keep a track of data of respective applicants.</p>
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-4" style="padding-top: 80px;cursor: pointer">
                <div>
                    <a href="<?= base_url('main/advertisement') ?>" style="color: inherit;text-decoration: none;" target="_blank">
                    <span class="fa-stack fa-4x">
                      <i class="fas fa-circle fa-stack-2x" style="color: #cb941e"></i>
                      <i class="fas fa-book-open fa-stack-1x fa-inverse"></i>
                    </span>
                        <h4 class="service-heading">Advertisement</h4>
                        <p class="text-muted">Click here to view advertisements.</p>
                    </a>
                </div>
            </div>
            </a>
            <div class="col-md-4"></div>
        </div>
    </div>
</section>

<section id="contact" style="padding-bottom: 20px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase" style="color: #70706c">Contact Us</h2>
                <h3 class="section-subheading text-muted">
                    <div style="color: #babab3;font-size: 17px;padding-top: 50px">
                        <div style="padding: 10px;font-weight: bold;color: white">Mailing Address</div>
                        <div>University of Colombo School of Computing</div>
                        <div>UCSC Building Complex,</div>
                        <div>35, Reid Avenue, Colombo 7</div>
                        <div>SRI LANKA</div>

                        <div style="padding: 10px;font-weight: bold;color: white;padding-top: 30px">Telephone</div>
                        <div>+94 -11- 2581245/ 7</div>

                        <div style="padding: 10px;font-weight: bold;color: white;padding-top: 30px">Fax</div>
                        <div>+94-11-2587239</div>

                        <div style="padding: 10px;font-weight: bold;color: white;padding-top: 30px">Email</div>
                        <div>info[at]ucsc.cmb.ac.lk</div>
                    </div>
                </h3>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <ul class="list-inline social-buttons">
                    <li class="list-inline-item">
                        <a href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-8">
                <span class="copyright">Copyright &copy; <script>document.write(new Date().getFullYear())</script> - University of Colombo School of Computing</span>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src="<?= base_url('assets/landing/vendor/jquery/jquery.min.js') ?>"></script>
<script src="<?= base_url('assets/landing/endor/bootstrap/js/bootstrap.bundle.min.js') ?>v"></script>

<!-- Plugin JavaScript -->
<script src="<?= base_url('assets/landing/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

<!-- Contact form JavaScript -->
<script src="<?= base_url('assets/landing/js/jqBootstrapValidation.js') ?>"></script>
<script src="<?= base_url('assets/landing/js/contact_me.js') ?>"></script>

<!-- Custom scripts for this template -->
<script src="<?= base_url('assets/landing/js/agency.min.js') ?>"></script>

</body>

</html>