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
    <script>
        $('#addHe').click(function () {
            addRowHe();
            addDataRowHe(rowHe);
        });

        $('#removeHe').click(function () {
            if (rowHe > 1) {
                rowHe--;
                $('#heId tr.rowHeButton:last-child').remove();
                $('#heId tr.rowHeFile:last-child').remove();
                $('#heId tr.rowHe:last-child').remove();
            }
        });

        var rowHe = 1;

        function addRowHe() {
            $('#heId').append('' +
                '<tr class="rowHe">\n' +
                '<th width="3%">' + rowHe++ + '.</th>\n' +
                '<td width="25%"><input type="text" class="form-control"></td>\n' +
                '<td width="12%"><input type="date" class="form-control"></td>\n' +
                '<td width="12%"><input type="date" class="form-control"></td>\n' +
                '<td width="10%"><input type="number" min="1" class="form-control"></td>\n' +
                '<td width="10%"><input type="text" class="form-control"></td>\n' +
                '<td width="10%"><input type="text" class="form-control"></td>\n' +
                '<td width="10%"><input type="text" class="form-control"></td>\n' +
                '</tr>' +
                '<tr class="rowHeFile">\n' +
                '<td colspan="6">' +
                '<div class="row">' +
                '<div class="col-sm-2" style="line-height: 35px"><b>Degree Obtained</b></div>' +
                '<div class="col-sm-5"><select class="form-control" id="degreeId' + rowHe + '"></select></div>' +
                '<div class="col-sm-5"><select class="form-control"></select></div>' +
                '</div>' +
                '</td>\n' +
                '<td colspan="2"><input type="file"></td>\n' +
                '</tr>' +
                '<tr class="rowHeButton">\n' +
                '<td colspan="8">' +
                '<div class="row">' +
                '<div class="col-sm-6"><button class="btn btn-warning" style="left: 50%;transform: translateX(-50%);position: relative">Update</div>' +
                '<div class="col-sm-6"><button class="btn btn-warning" style="left: 50%;transform: translateX(-50%);position: relative">Delete</div>' +
                '</div>' +
                '</td>\n' +
                '</tr>'
            );
        }

        function addDataRowHe(val) {
            for (var i = 0; i < arr1.length; i++) {
                $('#degreeId' + val + '').append(arr1[i])
            }
        }

        $(window).ready(function () {
            addRowHe();
            addDataRowHe(rowHe);
        });
    </script>
<?php
$this->load->view('examples/application/footer');
?>