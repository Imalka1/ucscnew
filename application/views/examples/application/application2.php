<?php
$this->load->view('examples/application/header');
?>
    <!--            Any Other Qualifications-->
    <form action="<?= base_url('application_form/page3') ?>">
        <div class="row" style="margin-top: 50px">
            <div class="col-sm-12" style="margin-bottom: 10px">
                <span style="font-weight: bold;margin-right: 10px">9.</span>
                Educational Qualifications
            </div>
            <div class="col-sm-12" style="margin-bottom: 15px">
                (a) Secondary Education
            </div>
            <div class="col-sm-12">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th width="3%"></th>
                        <th width="30%">Name of the School</th>
                        <th width="20%">From</th>
                        <th width="20%">To</th>
                        <th width="15%">Examination passed</th>
                        <th width="15%">Year</th>
                    </tr>
                    </thead>
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
<?php
$this->load->view('examples/application/footer');
?>