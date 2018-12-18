<div class="row">
    <div class="col-sm-12" style="color: #af0000">
        <b>Note:-</b>&nbsp;&nbsp;Your application number will display after the page 1 submission.<br>
        <span style="margin-left: 47px"></span>You will receive an email with an application number and a password to your personal email after the page 1 submission.<br>
        <span style="margin-left: 47px">If you need to complete the rest of submissions later(since page 2) or view completed form, you should get login to the system with your personal email and the password that you received.</span><br>
    </div>
</div>
</div>
</div>

<script>

    var arr1 = new Array();
    var arr2 = new Array();
    arr1.push(<?php
        echo "'<option>BSc</option>'";
        ?>);
    arr1.push(<?php
        echo "'<option>MSc</option>'";
        ?>);
</script>

<footer class="footer">
    <div class="container-fluid">

        <p class="copyright pull-right">
            &copy;
            <script>document.write(new Date().getFullYear())</script>
            - University of Colombo School of Computing
        </p>
    </div>
</footer>


</div>
</div>
<div class="fixed-plugin">

</div>

</body>

<!--   Core JS Files   -->

<script src="<?= base_url('assets/js/bootstrap.min.js') ?>" type="text/javascript"></script>
<script src="<?= base_url('assets/js/material.min.js') ?>" type="text/javascript"></script>
<script src="<?= base_url('assets/js/perfect-scrollbar.jquery.min.js') ?>" type="text/javascript"></script>

<!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
<script src="<?= base_url('assets/ajax/libs/core-js/2.4.1/core.js') ?>"</script>

// <!-- Library for adding dinamically elements -->
//<script src = "<?//= base_url('assets/js/arrive.min.js') ?>//" type = "text/javascript" ></script>

<!-- Forms Validations Plugin -->
<script src="<?= base_url('assets/js/jquery.validate.min.js') ?>"></script>

<!--edit-->
<script src="<?= base_url('application/views/js/applicantController.js') ?>"></script>
<script src="<?= base_url('application/views/js/applicationController.js') ?>"></script>


<!-- Mirrored from demos.creative-tim.com/bs3/material-dashboard-pro/examples/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Jul 2018 13:04:37 GMT -->
</html>
