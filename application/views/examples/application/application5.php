<?php
$this->load->view('examples/application/header');
?>
    <!--            Professional Qualifications-->
    <form action="<?= base_url('application_form/page6') ?>">
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

        <div class="row" style="margin-top: 100px;margin-bottom: 80px">
            <div class="col-sm-6">
                <a href="<?= base_url('application_form/page4') ?>">
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
                (Page 5)
            </div>
        </div>
    </form>
    <script>
        $('#addPq').click(function () {
            addRowPq();
        });

        $('#removePq').click(function () {
            if (rowPq > 1) {
                rowPq--;
                <?php
                if (isset($applicantData)) {
                ?>
                $('#pqId tr.rowPqButton:last-child').remove();
                $('#pqId tr.rowPq:last-child').remove();
                <?php
                } else {
                ?>
                $('#pqId tr.rowPq:last-child').remove();
                <?php
                }
                ?>
            }
        });

        var rowPq = 1;

        function addRowPq() {
            $('#pqId').append(
                <?php
                if (isset($applicantData)) {
                    echo 'getText1()+getText2()';
                } else {
                    echo 'getText1()';
                }
                ?>
            );
        }

        function getText1() {
            return '<tr class="rowPq">\n' +
                '<th width="3%">' + rowPq++ + '</th>\n' +
                '<td width="30%"><input type="text" class="form-control"></td>\n' +
                '<td width="15%"><input type="text" class="form-control"></td>\n' +
                '<td width="15%"><input type="text" class="form-control"></td>\n' +
                '<td width="20%"><input type="number" min="1" class="form-control"></td>\n' +
                '<td width="20%"><input type="text" class="form-control"></td>\n' +
                '</tr>';
        }

        function getText2() {
            return '<tr class="rowPqButton">\n' +
                '<td colspan="6">' +
                '<div class="row">' +
                '<div class="col-sm-6"><button class="btn btn-warning" style="left: 50%;transform: translateX(-50%);position: relative">Update</div>' +
                '<div class="col-sm-6"><button class="btn btn-warning" style="left: 50%;transform: translateX(-50%);position: relative">Delete</div>' +
                '</div>' +
                '</td>\n' +
                '</tr>';
        }

        $(window).ready(function () {
            addRowPq();
        });
    </script>
<?php
$this->load->view('examples/application/footer');
?>