<?php
$this->load->view('examples/application/header');
?>
    <!--            Proficiency in Sinhala/ Tamil/ English-->
    <form action="<?= base_url('ApplicationController/saveUpdatePage7') ?>">
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
                <a href="<?= base_url('application_form/page6') ?>">
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
                (Page 7)
            </div>
        </div>
    </form>
<?php
$this->load->view('examples/application/footer');
?>