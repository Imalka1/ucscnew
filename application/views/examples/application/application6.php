<?php
$this->load->view('examples/application/header');
?>
    <!--            Professional Qualifications-->
    <form action="<?= base_url('application_form/page7') ?>">
        <div class="row" style="margin-top: 50px">
            <div class="col-sm-12" style="margin-bottom: 10px">
                <span style="font-weight: bold;margin-right: 10px">12.</span>
                Professional Qualifications
            </div>
            <div class="col-sm-12">
                <table class="table table-bordered">
                    <thead></thead>
                    <tbody id="pqId"></tbody>
                </table>
            </div>
        </div>
        <div class="row" style="margin-top: 20px">
            <div class="col-sm-6">
                <button class="btn btn-primary" id="addPq" type="button"
                        style="left: 50%;transform: translateX(-50%);position: relative">Add Field
                </button>
            </div>
            <div class="col-sm-6">
                <button class="btn btn-primary" id="removePq" type="button"
                        style="left: 50%;transform: translateX(-50%);position: relative">Remove Field
                </button>
            </div>
        </div>

        <hr>

        <div class="row" style="margin-top: 100px;margin-bottom: 80px">
            <div class="col-sm-6">
                <a href="<?= base_url('application_form/page5') ?>">
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
                (Page 6)
            </div>
        </div>
    </form>

    <script src="<?= base_url('application/views/js/application/application6.js') ?>"></script>
    <script>
        <?php
        if (isset($applicantData)) {
            foreach ($applicantData as $row) {
                echo 'addRowPq("' . $row->pqid . '","' . $row->pqInstitution . '","' . $row->pqFrom . '","' . $row->pqTo . '","' . $row->pqDuration . '","' . $row->pqQualification . '");';
            }
        }
        ?>

        function getUrlSubmit() {
            return "<?= base_url('ApplicationController/savePage6')?>";
        }

        function getUrlUpdate() {
            return "<?= base_url('ApplicationController/updatePage6')?>";
        }

        function getUrlDelete() {
            return "<?= base_url('ApplicationController/deletePage6')?>";
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