<?php
$this->load->view('examples/application/header');
?>
    <!--            Any Other Qualifications-->
    <form action="<?= base_url('application_form/page4') ?>">
        <div class="row" style="margin-top: 50px">
            <div class="col-sm-12" style="margin-bottom: 10px">
                <span style="font-weight: bold;margin-right: 10px">10.</span>
                Educational Qualifications
            </div>
            <div class="col-sm-12" style="margin-bottom: 15px">
                (a) Secondary Education
            </div>
            <div class="col-sm-12">
                <table class="table table-bordered">
                    <thead></thead>
                    <tbody id="seId"></tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <button class="btn btn-primary" id="addSe" type="button"
                        style="left: 50%;transform: translateX(-50%);position: relative">Add Field
                </button>
            </div>
            <div class="col-sm-6">
                <button class="btn btn-primary" id="removeSe" type="button"
                        style="left: 50%;transform: translateX(-50%);position: relative">Remove Field
                </button>
            </div>
        </div>

        <hr>

        <div class="row" style="margin-top: 100px;margin-bottom: 80px">
            <div class="col-sm-6">
                <a href="<?= base_url('application_form/page2') ?>">
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
                (Page 3)
            </div>
        </div>
    </form>

    <script src="<?= base_url('application/views/js/application/application3.js') ?>"></script>
    <script>
        <?php
        if (isset($applicantData)) {
            foreach ($applicantData as $row) {
                echo 'addRowSe("' . $row->seid . '","' . $row->seNameOfSchool . '","' . $row->seFrom . '","' . $row->seTo . '","' . $row->seExam . '","' . $row->seYear . '");';
            }
        }
        ?>

        function getUrlSubmit() {
            return "<?= base_url('ApplicationController/savePage3')?>";
        }

        function getUrlUpdate() {
            return "<?= base_url('ApplicationController/updatePage3')?>";
        }

        function getUrlDelete() {
            return "<?= base_url('ApplicationController/deletePage3')?>";
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