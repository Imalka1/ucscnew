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
    <script>
        $('#addAoq').click(function () {
            addRowAoq()
        });

        $('#removeAoq').click(function () {
            if (rowAoq > 1) {
                rowAoq--;
                <?php
                if (isset($applicantData)) {
                ?>
                $('#aoqId tr.rowAoqFile:last-child').remove();
                $('#aoqId tr.rowAoq:last-child').remove();
                <?php
                } else {
                ?>
                $('#aoqId tr.rowAoq:last-child').remove();
                <?php
                }
                ?>
            }
        });

        var rowAoq = 1;

        function addRowAoq() {
            $('#aoqId').append(
                <?php
                if (isset($applicantData)) {
                    echo 'getText2()';
                } else {
                    echo 'getText1()';
                }
                ?>
            );
        }

        function getText1() {
            return '<tr class="rowAoq">\n' +
                '<th width="3%">' + rowAoq++ + '</th>\n' +
                '<td width="25%"><input type="text" class="form-control"></td>\n' +
                '<td width="25%"><input type="text" class="form-control"></td>\n' +
                '<td width="25%"><input type="number" min="1" class="form-control"></td>\n' +
                '<td width="25%"><input type="text" class="form-control"></td>\n' +
                '</tr>' +
                '<tr class="rowAoqFile">\n' +
                '<td colspan="5">' +
                '<div class="row">' +
                '<div class="col-sm-12"><input type="file"></div>' +
                '</div>' +
                '</td>\n' +
                '</tr>';
        }

        function getText2() {
            return '<tr class="rowAoq">\n' +
            '<th width="3%">' + rowAoq++ + '</th>\n' +
            '<td width="25%"><input type="text" class="form-control"></td>\n' +
            '<td width="25%"><input type="text" class="form-control"></td>\n' +
            '<td width="25%"><input type="number" min="1" class="form-control"></td>\n' +
            '<td width="25%"><input type="text" class="form-control"></td>\n' +
            '</tr>' +
            '<tr class="rowAoqFile">\n' +
            '<td colspan="5">' +
            '<div class="row">' +
            '<div class="col-sm-4"><input type="file"></div>' +
            '<div class="col-sm-4"><button class="btn btn-warning" style="left: 50%;transform: translateX(-50%);position: relative">Update</div>' +
            '<div class="col-sm-4"><button class="btn btn-warning" style="left: 50%;transform: translateX(-50%);position: relative">Delete</div>' +
            '</div>' +
            '</td>\n' +
            '</tr>';
        }

        $(window).ready(function () {
            addRowAoq();
        });
    </script>
<?php
$this->load->view('examples/application/footer');
?>