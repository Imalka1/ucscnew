<?php
$this->load->view('examples/header');
?>

<div class="content">
    <div class="container-fluid">
        <div class="row" style="text-align: center;font-weight: 400;font-size: 35px">
            <p>University of Colombo School of Computing</p>
            <p style="padding-top: 40px">Academic Staff Recruitment</p>
        </div>
        <div class="row">
            <div style="padding-right: 50px;font-weight: 400;font-size: 35px;top: 320px;color: #352c24;margin-top:0px;background-color: #e9b500;padding:20px;border-radius: 30px;display: inline-block;left: 50%;transform:translateX(-50%);position: absolute">
                <?php
                if ($_SESSION["accountType"] == 'interview_panel') {
                    ?>
                    Interviewer Portal
                    <?php
                }
                ?>
                <?php
                if ($_SESSION["accountType"] == 'sar') {
                    ?>
                    SAR Portal
                    <?php
                }
                if ($_SESSION["accountType"] == 'applicant') {
                    ?>
                    Applicant Portal
                    <?php
                }
                ?>
            </div>
            <?php
            if ($_SESSION["accountType"] == 'applicant') {
                ?>
                <div class="row">
                    <a href="<?= base_url('ApplicationController/viewApplication') ?>" target="_blank">
                        <div style="padding-right: 50px;font-weight: 500;font-size: 20px;top: 450px;color: #352c24;margin-top:0px;background-color: #797f6e;padding:20px;border-radius: 30px;display: inline-block;left: 50%;transform:translateX(-50%);position: absolute">
                            View Application
                        </div>
                    </a>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</div>


<?php
$this->load->view('examples/footer');
?>
        			
