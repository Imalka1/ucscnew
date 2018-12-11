<?php
$this->load->view('examples/application/header');
?>
    <!--            Employment Records (from present to past)-->
    <form action="<?= base_url('application_form/page2') ?>">
        <div class="row" style="margin-top: 50px">
            <div class="col-sm-12" style="margin-bottom: 10px">
                <span style="font-weight: bold;margin-right: 10px">13.</span>
                Employment Records (from present to past)
            </div>
            <div class="col-sm-12">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th width="3%"></th>
                        <th width="15%">Post</th>
                        <th width="20%">Institution / Company</th>
                        <th width="15%">Duration</th>
                        <th width="15%">From</th>
                        <th width="15%">To</th>
                        <th width="20%">Last drawn Monthly Salary (Rs.)</th>
                    </tr>
                    </thead>
                    <tbody id="erId"></tbody>
                </table>
            </div>
        </div>
        <div class="row" style="margin-top: 20px">
            <div class="col-sm-6">
                <button class="btn btn-primary" id="addEr" type="button"
                        style="left: 50%;transform: translateX(-50%);position: relative">Add Field
                </button>
            </div>
            <div class="col-sm-6">
                <button class="btn btn-primary" id="removeEr" type="button"
                        style="left: 50%;transform: translateX(-50%);position: relative">Remove Field
                </button>
            </div>
        </div>

        <hr>

        <div class="row" style="margin-top: 50px">
            <div class="col-sm-12" style="margin-bottom: 10px">
                <span style="font-weight: bold;margin-right: 10px">14.</span>
                Experience relevant to the post applied for (Please indicate the tasks handled with the duration)
            </div>
            <div class="col-sm-12">
                <textarea name="" id="" rows="7" class="form-control"></textarea>
            </div>
        </div>

        <div class="row" style="margin-top: 50px">
            <div class="col-sm-12" style="margin-bottom: 10px">
                <span style="font-weight: bold;margin-right: 10px">15.</span>
                Details of research and publications
            </div>
            <div class="col-sm-12">
                <textarea name="" id="" rows="7" class="form-control"></textarea>
            </div>
        </div>

        <hr>

        <div class="row" style="margin-top: 50px">
            <div class="col-sm-12" style="margin-bottom: 10px">
                <span style="font-weight: bold;margin-right: 10px">16.</span>
                Referees
            </div>
            <div class="col-sm-12">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th width="3%"></th>
                        <th width="20%">Name</th>
                        <th width="20%">Designation</th>
                        <th width="20%">Address</th>
                        <th width="20%">Email Address</th>
                        <th width="20%">Contact Number</th>
                    </tr>
                    </thead>
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

        <div class="row" style="margin-top: 50px">
            <div class="col-sm-12" style="margin-bottom: 10px">
                <span style="font-weight: bold;margin-right: 10px">17.</span>
                Any other information that you would like to indicate
            </div>
            <div class="col-sm-12">
                <textarea name="" id="" rows="7" class="form-control"></textarea>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12" style="margin-top: 50px;margin-bottom: 10px">
                <b>Note:-</b>&nbsp;&nbsp;Please make sure that you have completed all required fields with correct
                details.
            </div>
        </div>

        <div class="row" style="margin-top: 50px">
            <div class="col-sm-12" style="margin-bottom: 10px">
                I hereby declare that the particulars furnished by me in the application are true and accurate. I am
                also aware that if any particulars contained herein are found to be false or incorrect I am liable
                to disqualification if the inaccuracy is discovered before the selection and dismissal without any
                compensation if the inaccuracy is discovered after the appointment.
            </div>
        </div>

        <div class="row" style="margin-top: 50px;margin-bottom: 10px">
            <div class="col-sm-12">
                <label><input type="checkbox" id="chkAgreement"><span style="margin-left: 30px">I agree to the terms and conditions</span></label>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <a href="<?= base_url('application_form/page2') ?>">
                    <button class="btn btn-primary" type="button"
                            style="left: 50%;transform: translateX(-50%);position: relative;margin-top: 80px;">Previous Page
                    </button>
                </a>
            </div>
            <div class="col-sm-6">
                <button class="btn btn-primary" id="submitBtn" type="submit"
                        style="left: 50%;transform: translateX(-50%);position: relative;margin-top: 80px;">
                    Submit the form
                </button>
            </div>
            <div class="col-sm-12" style="margin-top: 50px;margin-bottom: 80px;text-align: center;font-weight: bold">
                (Page 3)
            </div>
        </div>
    </form>
<?php
$this->load->view('examples/application/footer');
?>