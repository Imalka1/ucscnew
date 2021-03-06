<?php
$this->load->view('examples/application/header');
?>
    <!--            Any Other Qualifications-->
    <form action="<?= base_url('application_form/page3') ?>">
        <div class="row" style="margin-top: 50px">
            <div class="col-sm-12">
                <span style="font-weight: bold;margin-right: 10px">9.</span>
                Areas of Specialization
            </div>
            <div class="col-sm-12" style="margin-bottom: 20px">
                (Please indicate the subject arrears of specialization based on your qualification and work
                experience)
            </div>
        </div>
        <div class="row" id="aosId"></div>
        <div class="row" style="margin-top: 20px">
            <div class="col-sm-6">
                <button class="btn btn-primary" id="addAos" type="button"
                        style="left: 50%;transform: translateX(-50%);position: relative">Add Field
                </button>
            </div>
            <div class="col-sm-6">
                <button class="btn btn-primary" id="removeAos" type="button"
                        style="left: 50%;transform: translateX(-50%);position: relative">Remove Field
                </button>
            </div>
        </div>

        <hr>

        <div class="row" style="margin-top: 100px;margin-bottom: 80px">
            <div class="col-sm-6">
                <a href="<?= base_url('application_form/page1') ?>">
                    <button class="btn btn-primary" type="button"
                            style="left: 50%;transform: translateX(-50%);position: relative">Previous Page
                    </button>
                </a>
            </div>
            <div class="col-sm-6">
                <button class="btn btn-primary" type="submit"
                        style="left: 50%;transform: translateX(-50%);position: relative">Next Page
                </button>
            </div>
            <div class="col-sm-12" style="margin-top: 50px;text-align: center;font-weight: bold">
                (Page 2)
            </div>
        </div>
    </form>

    <script src="<?= base_url('application/views/js/application/application2.js') ?>"></script>
    <script>
        <?php
        if (isset($applicantData)) {
            foreach ($applicantData as $row) {
                echo 'addRowAos("' . $row->aosid . '","' . $row->description . '");';
            }
        }
        ?>

        function getUrlSubmit() {
            return "<?= base_url('ApplicationController/savePage2')?>";
        }

        function getUrlUpdate() {
            return "<?= base_url('ApplicationController/updatePage2')?>";
        }

        function getUrlDelete() {
            return "<?= base_url('ApplicationController/deletePage2')?>";
        }

        function dataExists() {
            <?php
            if (isset($applicantData)) {
                if ($applicantData != null) {
                    echo 'return true;';
                } else {
                    echo 'return false;';
                }
            } else {
                echo 'return false;';
            }
            ?>
        }
    </script>
<?php
$this->load->view('examples/application/footer');
?>