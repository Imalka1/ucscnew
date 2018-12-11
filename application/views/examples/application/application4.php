<?php
$this->load->view('examples/application/header');
?>
    <!--            (b) Higher Education (*Graduate & Postgraduate Qualifications)-->
    <form action="<?= base_url('application_form/page5') ?>">
        <div class="row" style="margin-top: 50px">
            <div class="col-sm-12" style="margin-bottom: 10px">
                <span style="font-weight: bold;margin-right: 10px">10.</span>
                **Any Other Qualifications
            </div>
            <div class="col-sm-12">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th width="3%"></th>
                        <th width="25%">Institution</th>
                        <th width="25%">Diploma etc</th>
                        <th width="25%">Duration</th>
                        <th width="25%">Year</th>
                    </tr>
                    </thead>
                    <tbody id="aoqId"></tbody>
                </table>
            </div>
        </div>
        <div class="row" style="margin-top: 20px">
            <div class="col-sm-12">
                <b>*Note:</b> Certified copies of the certificates should be attached
            </div>
        </div>
        <div class="row" style="margin-top: 20px">
            <div class="col-sm-6">
                <button class="btn btn-primary" id="addAoq" type="button"
                        style="left: 50%;transform: translateX(-50%);position: relative">Add Field
                </button>
            </div>
            <div class="col-sm-6">
                <button class="btn btn-primary" id="removeAoq" type="button"
                        style="left: 50%;transform: translateX(-50%);position: relative">Remove Field
                </button>
            </div>
        </div>

        <hr>

        <div class="row" style="margin-top: 100px;margin-bottom: 80px">
            <div class="col-sm-6">
                <a href="<?= base_url('application_form/page3') ?>">
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
                (Page 4)
            </div>
        </div>
    </form>
<?php
$this->load->view('examples/application/footer');
?>