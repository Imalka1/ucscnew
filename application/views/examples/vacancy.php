<?php
$this->load->library('session');
if ($_SESSION["accountType"] != 'sar') {
    redirect(base_url() . "main");
}
$sent = "";
if (!empty($_GET["email"])) {
    $sent = $_GET["email"];
}
include "header.php";
?>
    <div class="content" style="margin-top: 0px;padding-top: 50px;">
        <div class="container-fluid">
            <div class="row" style="margin-top: 40px">
                <div class="col-sm-12">
                    <?php
                    if ($sent == "success") {
                        ?>
                        <div class="alert alert-success"
                             style="margin-left: 10px;margin-right: 10px;text-align: center;color: #17630a;font-weight: bold">
                            Email has been sent successfully
                        </div>
                        <?php
                    } else if ($sent == "failed") {
                        ?>
                        <div class="alert alert-danger"
                             style="margin-left: 10px;margin-right: 10px;text-align: center;color: #870c00;font-weight: bold">
                            Email failed
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
            <div class="row" style="margin-top: 30px">
                <div class="col-md-12 col-12">
                    <div class="card">
                        <form class="form-horizontal" method="post" action="<?= base_url('Email/send_mail') ?>">
                            <div class="card-header card-header-text" data-background-color="rose">
                                <h4 class="card-title" style="font-weight: lighter">VACANCY DETAILS</h4>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-content" style="padding-right: 20px">
                                <div class="row" style="font-weight: bold;font-size: 16px;margin-top: 40px">
                                    <div class="col-12"><textarea name="txtDetails" id="txtDetails"
                                                                  style="width: 100%"></textarea></div>
                                </div>
                                <div class="row" style="margin-top: 60px">
                                    <div class="col-sm-2" style="font-size: 18px;height: 60px;line-height: 65px">
                                        Operator
                                    </div>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="operatorEmail" id="operatorEmail">
                                            <?php
                                            foreach ($operators as $row) {
                                                ?>
                                                <option><?= $row->title . '.' . $row->name . ' - (' . $row->email . ')' ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-fill"
                                    style="left: 50%;transform: translateX(-50%);font-weight: bold"
                                    id="submitEmailBtn">
                                Send to operator
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        CKEDITOR.replace('txtDetails');
        CKEDITOR.plugins.registered['save']=
            {
                init : function( editor )
                {
                    var command = editor.addCommand( 'save',
                        {
                            modes : { wysiwyg:1, source:1 },
                            exec : function( editor ) {
                                var fo=editor.element.$.form;
                                editor.updateElement();
                                // rxsubmit(fo);
                                console.log($('#txtDetails').val())
                            }
                        }
                    );
                    editor.ui.addButton( 'Save',{label : 'My Save',command : 'save'});
                }
            }
    </script>
<?php
include "footer.php";
?>