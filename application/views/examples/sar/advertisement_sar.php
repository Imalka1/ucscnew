<?php
$this->load->library('session');
if ($_SESSION["accountType"] != 'sar') {
    redirect(base_url() . "");
}
$confirmed = "";
if (!empty($_GET["confirmed"])) {
    $confirmed = $_GET["confirmed"];
}
$this->load->view('examples/header');
?>
<div class="content">
    <div class="container-fluid">
        <div class="row" style="margin-top: 30px;margin-bottom: 30px">
            <div class="col-sm-12">
                <?php
                if ($confirmed == "success") {
                    ?>
                    <div class="alert alert-success"
                         style="margin-left: 10px;margin-right: 10px;text-align: center;color: #17630a;font-weight: bold">
                        Advertisement has been confirmed
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
        <form method="post" action="<?= base_url('AdvertisementController/confirmAdvertisement') ?>">
            <div class="row" style="background-color: white;border: 2px solid #7a4d01;padding: 10px">
                <?php
                foreach ($advertisement as $row)
                    echo $row->message;
                ?>
            </div>
            <button type="submit" class="btn btn-fill"
                    style="left: 50%;transform: translateX(-50%);font-weight: bold;margin-top: 80px"
                    id="submitAdBtn">
                Confirm Advertisement
            </button>
        </form>
    </div>
</div>
<?php
$this->load->view('examples/footer');
?>
