<?php
$this->load->library('session');
if ($_SESSION["accountType"] != 'sar') {
    redirect(base_url() . "main");
}
include "header.php";
?>
    <div class="content" style="padding-left: 0px;">
        <nav class="navbar navbar-transparent">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 col-12">
                        <form id="formSubmit" method="post" action="<?= base_url('Applicants/submitData') ?>"
                              enctype="application/x-www-form-urlencoded">
                            <div class="card">
                                <div class="card-header card-header-icon" data-background-color="purple">
                                    <i class="material-icons">assignment</i>
                                </div>
                                <div class="card-content">
                                    <h4 class="card-title" style="color: #4e4e4e;font-size: 17px;font-weight: bold">
                                        APPLICANT DETAILS</h4>
                                    <div class="toolbar">
                                        <!--        Here you can write extra buttons/actions for the toolbar              -->
                                    </div>
                                    <div class="material-datatables">
                                        <table id="tblApplicants"
                                               class="table table-striped table-no-bordered table-hover datatables"
                                               cellspacing="0"
                                               width="100%" style="width:100%">
                                            <thead>
                                            <tr>
                                                <th>Applicant ID</th>
                                                <th>Applicant Name</th>
                                                <th>Email Address</th>
                                                <th>Marks</th>
                                                <th>Date</th>
                                            </tr>
                                            </thead>
                                            <tfoot>
                                            <tr>
                                                <th>Applicant ID</th>
                                                <th>Applicant Name</th>
                                                <th>Email Address</th>
                                                <th>Marks</th>
                                                <th>Date</th>
                                                <!--                                            <th class="text-right">Remove</th>-->
                                            </tr>
                                            </tfoot>
                                            <tbody>
                                            <script>
                                                var applicants = new Array();
                                            </script>
                                            <?php
                                            $value = 0;
                                            foreach ($applicants as $row) {
                                                ?>
                                                <tr style="font-size: 16px;background-color: white;height: 50px;cursor: pointer"
                                                    id="tr<?= $value ?>"
                                                <td></td>
                                                <td><?= $row->aid ?></td>
                                                <td><?= $row->name ?></td>
                                                <td><?= $row->email ?></td>
                                                <td><?= $row->marks / $row->interviewers_count ?> / 100</td>
                                                <td><?= $row->registered_date ?></td>
                                                </tr>
                                                <script>
                                                    <?php
                                                    echo "
                                                    applicants.push({
                                                        interviewers_count: '$row->interviewers_count'
                                                      });
                                                    ";
                                                    ?>
                                                </script>
                                                <?php
                                                $value++;
                                            }
                                            ?>
                                            </tbody>
                                        </table>
                                    </div>

                                    <hr>

                                    <div class="row" style="padding-top: 100px">
                                        <div class="col-md-12 col-12" style="text-align: center"><h4 class="card-title"
                                                                                                     style="color: #4e4e4e;font-size: 17px;font-weight: bold">
                                                APPLICANT DETAILS</h4></div>
                                    </div>
                                    <div class="row" style="padding-top: 20px;font-size: 18px">
                                        <div class="form-horizontal">
                                            <div class="col-sm-2 label-on-left">Applicant ID</div>
                                            <div class="col-sm-10">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input id="txtId" type="text" class="form-control" name="txtId"
                                                           readonly>
                                                </div>
                                            </div>
                                            <div class="col-sm-2 label-on-left">Applicant Name</div>
                                            <div class="col-sm-10">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input id="txtName" type="text" class="form-control" name="txtName"
                                                           readonly>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="padding-bottom: 50px">
                                        <div class="form-horizontal">
                                            <div class="col-sm-2 label-on-left">Interviewers Count</div>
                                            <div class="col-sm-10">
                                                <div class="form-group label-floating is-empty">
                                                    <input type="number" class="form-control" name="txtCount"
                                                           id="txtCount"
                                                           style="font-size: 16px" value="1" min="1">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="height: 50px"></div>
                                    <div class="row">
                                        <div class="form-horizontal"></div>
                                    </div>
                                    <div class="row" style="padding-top: 10px">
                                        <div class="form-horizontal">
                                            <div class="col-sm-12" style="padding-top: 80px">
                                                <input type="hidden" name="txtInterviewerId"
                                                       value="<?= $_SESSION["id"] ?>">
                                                <button type="submit" class="btn btn-fill"
                                                        style="left: 50%;transform: translateX(-50%);font-weight: bold"
                                                        id="submitBtn">
                                                    Submit Marks
                                                </button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    </form>
                </div><!-- end content-->
            </div>
        </nav>
    </div>

    <script>
        function getComments(aid) {
            $.ajax(
                {
                    type: "post",
                    url: "<?= base_url('Applicants/getComments') ?>",
                    data: {aid: aid},
                    success: function (response) {
                        var fields = response.split('~');
                        var comment = '';
                        for (var i = 0; i < fields.length; i++) {
                            comment += fields[i] + '\n';
                        }
                        $('#txtReport').val(comment);
                    }
                    // error: function () {
                    //     alert("Invalide!");
                    // }
                }
            );
        }
    </script>
<?php
include "footer.php";
?>