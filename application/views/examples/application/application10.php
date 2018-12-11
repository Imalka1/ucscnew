<?php
$this->load->view('examples/application/header');
?>
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

    <hr>

    <div class="row">
        <div class="col-sm-6">
            <a href="<?= base_url('application_form/page9') ?>">
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
            (Page 10)
        </div>
    </div>
<?php
$this->load->view('examples/application/footer');
?>