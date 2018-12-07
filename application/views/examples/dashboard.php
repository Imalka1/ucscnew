<?php
include "header.php";
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
                ?>
            </div>
        </div>
    </div>
</div>


<?php
include "footer.php";
?>
        			
