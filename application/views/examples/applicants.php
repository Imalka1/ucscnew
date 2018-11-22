<?php
include "header.php";
?>
    <div class="content" style="padding-left: 0px;">
        <nav class="navbar navbar-transparent">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 col-12">

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
                                        </tr>
                                        </thead>
                                        <tfoot>
                                        <tr>
                                            <th>Applicant ID</th>
                                            <th>Applicant Name</th>
                                            <th>Email Address</th>
                                            <th>Marks</th>
                                            <!--                                            <th class="text-right">Remove</th>-->
                                        </tr>
                                        </tfoot>
                                        <tbody>
                                        <tr style="font-size: 16px;background-color: white;height: 50px;cursor: pointer"
                                        <td></td>
                                        <td>abc</td>
                                        <td>bcd</td>
                                        <td>efg</td>
                                        <td>0 / 100</td>
                                        <!--                                        <td class="text-right">-->
                                        <!--                                            <a href="#" class="btn btn-simple btn-danger btn-icon remove"><i-->
                                        <!--                                                        class="material-icons">close</i></a>-->
                                        <!--                                        </td>-->
                                        </tr>
                                        <tr style="font-size: 16px;background-color: white;height: 50px;cursor: pointer"
                                        <td></td>
                                        <td>abcd</td>
                                        <td>bcdd</td>
                                        <td>efg</td>
                                        <td>2 / 100</td>
                                        <!--                                        <td class="text-right">-->
                                        <!--                                            <a href="#" class="btn btn-simple btn-danger btn-icon remove"><i-->
                                        <!--                                                        class="material-icons">close</i></a>-->
                                        <!--                                        </td>-->
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row" style="padding-top: 100px">
                                    <div class="col-md-12 col-12" style="text-align: center"><h4 class="card-title"
                                                                                                 style="color: #4e4e4e;font-size: 17px;font-weight: bold">
                                            MARKING CRITERIA</h4></div>
                                </div>
                                <div class="row" style="padding-top: 20px;font-size: 18px">
                                    <div class="form-horizontal">
                                        <div class="col-sm-2 label-on-left">Applicant ID</div>
                                        <div class="col-sm-10">
                                            <div class="form-group label-floating is-empty">
                                                <label class="control-label"></label>
                                                <input id="txtId" type="text" class="form-control" name="txtId"
                                                       disabled>
                                            </div>
                                        </div>
                                        <div class="col-sm-2 label-on-left">Applicant Name</div>
                                        <div class="col-sm-10">
                                            <div class="form-group label-floating is-empty">
                                                <label class="control-label"></label>
                                                <input id="txtName" type="text" class="form-control" name="txtName"
                                                       disabled>
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
                                                       style="font-size: 16px" value="0">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="material-datatables">
                                    <table id="tblMarks"
                                           class="table table-striped table-no-bordered table-hover"
                                           cellspacing="0"
                                           width="100%" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th>Marking Criteria</th>
                                            <th style="text-align: center">Marks</th>
                                        </tr>
                                        </thead>
                                        <tfoot>
                                        <tr>
                                            <th>Marking Criteria</th>
                                            <th style="text-align: center">Marks</th>
                                        </tr>
                                        </tfoot>
                                        <tbody>
                                        <?php
                                        $value = 0;
                                        foreach ($criteria_headings as $row) {
                                            $value++;
                                            ?>
                                            <tr style="font-size: 16px;background-color: white;height: 50px;cursor: pointer"
                                            <td></td>
                                            <td><?= $row->name ?></td>
                                            <td><input type="number" class="form-control txtMarks" min="0"
                                                       id="txtMarks<?= $value ?>" name="txtCount" value="0"
                                                       style="font-size: 16px;text-align: center"></td>
                                            </tr>
                                            <?php
                                        }
                                        ?>
                                        <tr style="font-size: 16px;background-color: white;height: 50px;cursor: pointer"
                                        <td></td>
                                        <td style="font-weight: 400">Total Marks</td>
                                        <td><input type="text" class="form-control" disabled id="txtTotal"
                                                   name="txtTotal" placeholder="0 / 100" style="font-size: 16px;text-align: center"></td>
                                        </tr>
                                        <tr style="font-size: 16px;background-color: white;height: 50px;cursor: pointer"
                                        <td></td>
                                        <td>Referees Report</td>
                                        <td><input type="text" class="form-control" id="txtReport"
                                                   name="txtReport" style="font-size: 16px;text-align: center"></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div style="height: 50px"></div>
                                <div class="row">
                                    <div class="form-horizontal"></div>
                                </div>
                                <div class="row" style="padding-top: 10px">
                                    <div class="form-horizontal">
                                        <div class="col-sm-12" style="padding-top: 80px">

                                            <button type="submit" class="btn btn-fill"
                                                    style="left: 50%;transform: translateX(-50%);font-weight: bold" id="submitBtn">
                                                Submit Marks
                                            </button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- end content-->
                </div>
            </div>
        </nav>
    </div>

<?php
include "footer.php";
?>