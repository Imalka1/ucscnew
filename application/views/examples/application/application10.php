<?php
$this->load->view('examples/application/header');
?>
    <form action="<?= base_url('application_form/page11') ?>">
        <div class="row" style="margin-top: 50px">
            <div class="col-sm-12" style="margin-bottom: 10px">
                <span style="font-weight: bold;margin-right: 10px">17.</span>
                Referees
            </div>
            <div class="col-sm-12">
                <table class="table table-bordered">
                    <thead></thead>
                    <tbody id="refId"></tbody>
                </table>
            </div>
        </div>
        <div class="row" style="margin-top: 20px">
            <div class="col-sm-6">
                <button class="btn btn-primary" id="addRef" type="button"
                        style="left: 50%;transform: translateX(-50%);position: relative">Add Field
                </button>
            </div>
            <div class="col-sm-6">
                <button class="btn btn-primary" id="removeRef" type="button"
                        style="left: 50%;transform: translateX(-50%);position: relative">Remove Field
                </button>
            </div>
        </div>

        <div class="row" style="margin-top: 50px">
            <div class="col-sm-12" style="margin-bottom: 10px">
                <b>N.B.</b> When applying for the Academic Posts, one of the referees should be either the Professor
                or a Senior Lecturer of the Department of Study in which the applicant had his/her University
                Education or the Head of the Institutions in which the candidate works
            </div>
        </div>

        <hr>

        <div class="row" style="margin-top: 100px;margin-bottom: 80px">
            <div class="col-sm-6">
                <a href="<?= base_url('application_form/page9') ?>">
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
                (Page 10)
            </div>
        </div>
    </form>

    <script src="<?= base_url('application/views/js/application/application10.js') ?>"></script>
    <script>
        function getUrl() {
            return "<?=base_url('')?>";
        }

        function dataExists() {
            <?php
            if (isset($applicantData)) {
                echo 'return true;';
            } else {
                echo 'return false;';
            }
            ?>
        }
    </script>
<?php
$this->load->view('examples/application/footer');
?>