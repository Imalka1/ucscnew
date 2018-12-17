<?php
$this->load->view('examples/application/header');
?>
    <!--            Employment Records (from present to past)-->
    <form action="<?= base_url('application_form/page8') ?>">
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
    <script>
        $('#addEr').click(function () {
            addRowEr();
        });

        $('#removeEr').click(function () {
            if (rowEr > 1) {
                rowEr--;
                $('#erId tr.rowEr:last-child').remove();
            }
        });

        var rowEr = 1;

        function addRowEr() {
            $('#erId').append('' +
                '<tr class="rowEr">\n' +
                '<th width="3%">' + rowEr++ + '</th>\n' +
                '<td width="15%"><input type="text" class="form-control"></td>\n' +
                '<td width="20%"><input type="text" class="form-control"></td>\n' +
                '<td width="15%"><input type="number" min="1" class="form-control"></td>\n' +
                '<td width="15%"><input type="text" class="form-control"></td>\n' +
                '<td width="15%"><input type="text" class="form-control"></td>\n' +
                '<td width="20%"><input type="text" class="form-control"></td>\n' +
                '</tr>'
            );
        }

        $(window).ready(function () {
            addRowEr();
        });
    </script>
<?php
$this->load->view('examples/application/footer');
?>