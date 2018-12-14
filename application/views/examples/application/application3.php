<?php
$this->load->view('examples/application/header');
?>
    <form action="<?= base_url('application_form/page4') ?>">
        <div class="row" style="margin-top: 50px">
            <div class="col-sm-12" style="margin-bottom: 10px">
                <span style="font-weight: bold;margin-right: 10px">9.</span>
                Educational Qualifications
            </div>
            <div class="col-sm-12" style="margin-bottom: 15px">
                (b) Higher Education (<b>*Graduate & Postgraduate Qualifications</b>)
            </div>
            <div class="col-sm-12">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th width="3%"></th>
                        <th width="25%">Name of the University / Institution</th>
                        <th width="12%">From</th>
                        <th width="12%">To</th>
                        <th width="10%">Duration of the Course (No. of years)</th>
                        <th width="10%">Class</th>
                        <th width="10%">Awarding Year</th>
                        <th width="15%">Index No</th>
                    </tr>
                    </thead>
                    <tbody id="heId"></tbody>
                </table>
            </div>
        </div>
        <div class="row" style="margin-top: 20px">
            <div class="col-sm-12">
                <b>*Note:</b> Certified copies of the certificates and transcripts should be attached
            </div>
        </div>
        <div class="row" style="margin-top: 20px">
            <div class="col-sm-6">
                <button class="btn btn-primary" id="addHe" type="button"
                        style="left: 50%;transform: translateX(-50%);position: relative">Add Field
                </button>
            </div>
            <div class="col-sm-6">
                <button class="btn btn-primary" id="removeHe" type="button"
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
<?php
$this->load->view('examples/application/footer');
?>