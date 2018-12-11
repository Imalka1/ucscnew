<?php
$this->load->view('examples/application/header');
?>
    <form action="<?= base_url('application_form/page3') ?>">
        <div class="row">
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

        <!--            (b) Higher Education (*Graduate & Postgraduate Qualifications)-->

        <hr>

        <div class="row" style="margin-top: 50px">
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

        <!--            Any Other Qualifications-->

        <hr>

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

        <!--            Professional Qualifications-->
        <hr>

        <div class="row" style="margin-top: 50px">
            <div class="col-sm-12" style="margin-bottom: 10px">
                <span style="font-weight: bold;margin-right: 10px">11.</span>
                Professional Qualifications
            </div>
            <div class="col-sm-12">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th width="3%"></th>
                        <th width="30%">Institution</th>
                        <th width="15%">From</th>
                        <th width="15%">To</th>
                        <th width="20%">Duration</th>
                        <th width="20%">Type of Qualification</th>
                    </tr>
                    </thead>
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

        <!--            Proficiency in Sinhala/ Tamil/ English-->

        <div class="row" style="margin-top: 50px">
            <div class="col-sm-12" style="margin-bottom: 10px">
                <span style="font-weight: bold;margin-right: 10px">12.</span>
                Proficiency in Sinhala/ Tamil/ English
            </div>
            <div class="col-sm-12">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th width="10%">Language</th>
                        <th width="45%" colspan="4">***Ability to Work</th>
                        <th width="45%" colspan="4">***Ability to Teach</th>
                    </tr>
                    <tr>
                        <th width="10%"></th>
                        <th width="11.25%">Very Good</th>
                        <th width="11.25%">Good</th>
                        <th width="11.25%">Fair</th>
                        <th width="11.25%">No Knowledge</th>
                        <th width="11.25%">Very Good</th>
                        <th width="11.25%">Good</th>
                        <th width="11.25%">Fair</th>
                        <th width="11.25%">No Knowledge</th>
                    </tr>
                    </thead>
                    <tbody id="psteId">
                    <tr class="rowPste">
                        <td width="10%">Sinhala</td>
                        <td width="11.25%"><input type="radio" style="margin-left: 65px" name="workS"></td>
                        <td width="11.25%"><input type="radio" style="margin-left: 65px" name="workS"></td>
                        <td width="11.25%"><input type="radio" style="margin-left: 65px" name="workS"></td>
                        <td width="11.25%"><input type="radio" style="margin-left: 65px" name="workS"></td>
                        <td width="11.25%"><input type="radio" style="margin-left: 65px" name="teachS"></td>
                        <td width="11.25%"><input type="radio" style="margin-left: 65px" name="teachS"></td>
                        <td width="11.25%"><input type="radio" style="margin-left: 65px" name="teachS"></td>
                        <td width="11.25%"><input type="radio" style="margin-left: 65px" name="teachS"></td>
                    </tr>
                    <tr class="rowPste">
                        <td width="10%">English</td>
                        <td width="11.25%"><input type="radio" style="margin-left: 65px" name="workE"></td>
                        <td width="11.25%"><input type="radio" style="margin-left: 65px" name="workE"></td>
                        <td width="11.25%"><input type="radio" style="margin-left: 65px" name="workE"></td>
                        <td width="11.25%"><input type="radio" style="margin-left: 65px" name="workE"></td>
                        <td width="11.25%"><input type="radio" style="margin-left: 65px" name="teachE"></td>
                        <td width="11.25%"><input type="radio" style="margin-left: 65px" name="teachE"></td>
                        <td width="11.25%"><input type="radio" style="margin-left: 65px" name="teachE"></td>
                        <td width="11.25%"><input type="radio" style="margin-left: 65px" name="teachE"></td>
                    </tr>
                    <tr class="rowPste">
                        <td width="10%">Tamil</td>
                        <td width="11.25%"><input type="radio" style="margin-left: 65px" name="workT"></td>
                        <td width="11.25%"><input type="radio" style="margin-left: 65px" name="workT"></td>
                        <td width="11.25%"><input type="radio" style="margin-left: 65px" name="workT"></td>
                        <td width="11.25%"><input type="radio" style="margin-left: 65px" name="workT"></td>
                        <td width="11.25%"><input type="radio" style="margin-left: 65px" name="teachT"></td>
                        <td width="11.25%"><input type="radio" style="margin-left: 65px" name="teachT"></td>
                        <td width="11.25%"><input type="radio" style="margin-left: 65px" name="teachT"></td>
                        <td width="11.25%"><input type="radio" style="margin-left: 65px" name="teachT"></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row" style="margin-top: 20px">
            <div class="col-sm-12">
                <b>***Note:</b> indicate your level based on self-evaluation of your ability
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