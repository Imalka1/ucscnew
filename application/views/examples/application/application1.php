<?php
$this->load->view('examples/application/header');
?>
<?php
if ($_SESSION['applicationNo'] == '') {
    ?>
    <form method="post" action="<?= base_url('ApplicationController/setIdSaveUpdatePage1') ?>">
    <?php
} else {
    ?>
    <form method="post" action="<?= base_url('ApplicationController/updatePage1') ?>">
    <?php
}
?>
    <div class="row" style="margin-bottom: 20px">
        <div class="col-sm-12" style="font-weight: bold">
            Posts applied for
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            Lecturer (Probationary)<input class="chkPostFor" name="postFor" type="checkbox"
                                          required <?= isset($post1) ? $post1 : '' ?>>
        </div>
        <div class="col-sm-6">
            Senior Lecturer Gr. II<input class="chkPostFor" name="postFor" type="checkbox"
                                         required <?= isset($post1) ? $post1 : '' ?>>
        </div>
    </div>

    <hr>

    <div class="row">
        <div class="col-sm-12" style="font-weight: bold;margin-bottom: 10px">1.</div>
        <div class="col-sm-6">Full Name of the applicant (in block capitals)</div>
        <div class="col-sm-6">Surname with initials (in block capitals)</div>
        <div class="col-sm-6"><input type="text" class="form-control" required></div>
        <div class="col-sm-6"><input type="text" class="form-control" required></div>
        <div class="col-sm-12" style="margin-top: 10px">NIC No./ Passport No./ Driving License No</div>
        <div class="col-sm-6"><input type="text" class="form-control" required></div>
    </div>

    <hr>

    <div class="row">
        <div class="col-sm-4" style="margin-bottom: 10px">
            <span style="font-weight: bold;margin-right: 10px">2.</span>
            Gender
        </div>
        <div class="col-sm-4">
            Male<input type="radio" name="gender" style="margin-left: 47px" required>
        </div>
        <div class="col-sm-4">
            Female<input type="radio" name="gender" style="margin-left: 47px" required>
        </div>
    </div>
    <div class="row" style="margin-top: 40px">
        <div class="col-sm-4" style="margin-bottom: 10px">
            <span style="font-weight: bold;margin-right: 10px">3.</span>
            Civil Status
        </div>
        <div class="col-sm-4">
            Married<input type="radio" name="civilStatus" required>
        </div>
        <div class="col-sm-4">
            Unmarried<input type="radio" name="civilStatus" required>
        </div>
    </div>

    <hr>

    <div class="row">
        <div class="col-sm-12" style="margin-bottom: 10px">
            <span style="font-weight: bold;margin-right: 10px">4.</span>
            Address
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            Postal Address
        </div>
        <div class="col-sm-6">
            Permanent Address (if different from postal address)
        </div>
        <div class="col-sm-6">
            <input type="text" class="form-control" required>
        </div>
        <div class="col-sm-6">
            <input type="text" class="form-control">
        </div>
    </div>

    <hr>

    <div class="row">
        <div class="col-sm-12" style="margin-bottom: 10px">
            <span style="font-weight: bold;margin-right: 10px">5.</span>
            Contact Numbers
        </div>
        <div class="col-sm-4">
            Mobile
        </div>
        <div class="col-sm-4">
            Home
        </div>
        <div class="col-sm-4">
            Office
        </div>
        <div class="col-sm-4">
            <input type="text" class="form-control" required>
        </div>
        <div class="col-sm-4">
            <input type="text" class="form-control">
        </div>
        <div class="col-sm-4">
            <input type="text" class="form-control">
        </div>
    </div>

    <hr>

    <div class="row">
        <div class="col-sm-12" style="margin-bottom: 10px">
            <span style="font-weight: bold;margin-right: 10px">6.</span>
            Email Address
        </div>
        <div class="col-sm-6">
            Personal
        </div>
        <div class="col-sm-6">
            Official
        </div>
        <div class="col-sm-6">
            <input type="email" class="form-control" required name="personalEmail"
                   value="<?= isset($personalEmail) ? $personalEmail : '' ?>">
        </div>
        <div class="col-sm-6">
            <input type="email" class="form-control" name="officialEmail"
                   value="<?= isset($officialEmail) ? $officialEmail : '' ?>">
        </div>
    </div>

    <hr>

    <div class="row">
        <div class="col-sm-12" style="margin-bottom: 10px">
            <span style="font-weight: bold;margin-right: 10px">7.</span>
        </div>
        <div class="col-sm-6">
            Date of birth
        </div>
        <div class="col-sm-6" style="text-align: center">
            Age as at closing date of the application
        </div>
        <div class="col-sm-6">
            <input type="date" class="form-control" id="dateId" required>
        </div>
        <div class="col-sm-6" style="margin-top: 5px;text-align: center" id="ageId">
            <!--            <input type="hidden" id="txtClosingDate">-->
        </div>
    </div>

    <hr>

    <div class="row">
        <div class="col-sm-12" style="margin-bottom: 10px">
            <span style="font-weight: bold;margin-right: 10px">8.</span>
        </div>
        <div class="col-sm-12">
            (a) Applicants citizenship
        </div>
        <div class="col-sm-12">
            <input type="text" class="form-control" required>
        </div>
        <div class="col-sm-12" style="margin-top: 20px">
            (b) If a Citizen of Sri Lanka How obtained (Tick Relevant Cage)
        </div>
        <div class="col-sm-12" style="margin-top: 20px">
            <div class="col-sm-6">
                By descent<input type="radio" name="citizen" required>
            </div>
            <div class="col-sm-6">
                By registration<input type="radio" name="citizen" required>
            </div>
        </div>
    </div>

    <hr>

    <div class="row" style="margin-top: 100px;margin-bottom: 80px">
        <div class="col-sm-12">
            <button class="btn btn-primary" type="submit"
                    style="left: 50%;transform: translateX(-50%);position: relative">Next Page
            </button>
        </div>
        <div class="col-sm-12" style="margin-top: 50px;text-align: center;font-weight: bold">
            (Page 1)
        </div>
    </div>
    </form>

    <script src="<?= base_url('application/views/js/application/application1.js') ?>"></script>
<?php
$this->load->view('examples/application/footer');
?>