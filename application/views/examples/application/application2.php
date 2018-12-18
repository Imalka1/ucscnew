<?php
$this->load->view('examples/application/header');
$feedback = "";
if (!empty($_GET["feedback"])) {
    $feedback = $_GET["feedback"];
}
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
                        <th width="15%">From</th>
                        <th width="15%">To</th>
                        <th width="25%">Examination passed</th>
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

    <script>
        $('#addSe').click(function () {
            addNewRowSe();
        });

        $('#removeSe').click(function () {
            if (rowSe > 1) {
                rowSe--;
                <?php
                if (isset($applicantData)) {
                ?>
                $('#seId tr.rowSeButton:last-child').remove();
                $('#seId tr.rowSe:last-child').remove();
                <?php
                } else {
                ?>
                $('#seId tr.rowSe:last-child').remove();
                <?php
                }
                ?>
            }
        });

        function addRowSe() {
            $('#seId').append(
                <?php
                if (isset($applicantData)) {
                    echo 'getTextMain()+getTextUpdateDelete("")';
                }
                ?>
            );
        }

        function addNewRowSe() {
            $('#seId').append(
                <?php
                echo 'getTextMain()+getTextSubmit("")';
                ?>
            );
        }

        var rowSe = 1;

        function getTextMain() {
            return '<tr class="rowSe">\n' +
                '<th width="3%">' + rowSe++ + '<input type="hidden"></th>\n' +
                '<td width="30%"><input type="text" class="form-control"></td>\n' +
                '<td width="15%"><input type="text" class="form-control"></td>\n' +
                '<td width="15%"><input type="text" class="form-control"></td>\n' +
                '<td width="25%"><input type="text" class="form-control"></td>\n' +
                '<td width="15%"><input type="text" class="form-control"></td>\n' +
                '</tr>';
        }

        var textSubmit = '<span style="left: 87%;position: relative;color: green;font-weight: bold"><i class="fa fa-check"></i> Submitted</span>';
        var textUpdate = '<span style="left: 75%;position: relative;color: green"><i class="fa fa-check"></i> Updated</span>';
        var textDelete = '<span style="left: 75%;position: relative;color: red"><i class="fa fa-times"></i> Deleted</span>';
        var textWarning = '<span style="left: 77%;position: relative;color: #b58500;font-weight: bold"><i class="fa fa-exclamation-triangle"></i> Error</span>';

        function getTextSubmit(textSubmit) {
            return '<tr class="rowSeButton">\n' +
                '<td colspan="6">' +
                '<div class="row">' +
                '<div class="col-sm-12">' +
                '<button type="button" class="btn btn-warning rowSeButtonS" style="left: 50%;transform: translateX(-50%);position: relative">Submit</button>' +
                textSubmit +
                '</div>' +
                '</div>' +
                '</td>\n' +
                '</tr>';
        }

        function getTextUpdateDelete(textUpdateDelete) {
            return '<tr class="rowSeButton">\n' +
                '<td colspan="6">' +
                '<div class="row">' +
                '<div class="col-sm-6"><button type="button" class="btn btn-warning rowSeButtonU" style="left: 50%;transform: translateX(-50%);position: relative">Update</button></div>' +
                '<div class="col-sm-6">' +
                '<button type="button" class="btn btn-warning rowSeButtonD" style="left: 50%;transform: translateX(-50%);position: relative">Delete</button>' +
                textUpdateDelete +
                '</div>' +
                '</div>' +
                '</td>\n' +
                '</tr>';
        }

        $('#seId').on('click', '.rowSeButtonS', function () {
            var colCount = $(this).parents('tr').parent().children("tr:nth-child(" + $(this).parents('tr').index() + ")").children().children().length;
            for (var i = 0; i < colCount; i++) {
                console.log($(this).parents('tr').parent().children("tr:nth-child(" + $(this).parents('tr').index() + ")").children().children().eq(i).val())
            }
        })

        $('#seId').on('click', '.rowSeButtonU', function () {

        })

        $('#seId').on('click', '.rowSeButtonD', function () {

        })

        $(window).ready(function () {
            addRowSe();
        });
    </script>
<?php
$this->load->view('examples/application/footer');
?>