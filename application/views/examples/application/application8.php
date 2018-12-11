<?php
$this->load->view('examples/application/header');
?>
    <form action="<?= base_url('application_form/page9') ?>">
        <div class="row" style="margin-top: 50px">
            <div class="col-sm-12" style="margin-bottom: 10px">
                <span style="font-weight: bold;margin-right: 10px">14.</span>
                Experience relevant to the post applied for (Please indicate the tasks handled with the duration)
            </div>
            <div class="col-sm-12">
                <textarea name="" id="" rows="7" class="form-control"></textarea>
            </div>
        </div>

        <div class="row" style="margin-top: 50px">
            <div class="col-sm-12" style="margin-bottom: 10px">
                <span style="font-weight: bold;margin-right: 10px">15.</span>
                Details of research and publications
            </div>
            <div class="col-sm-12">
                <textarea name="" id="" rows="7" class="form-control"></textarea>
            </div>
        </div>

        <hr>

        <div class="row" style="margin-top: 100px;margin-bottom: 80px">
            <div class="col-sm-6">
                <a href="<?= base_url('application_form/page7') ?>">
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
                (Page 8)
            </div>
        </div>
    </form>
<?php
$this->load->view('examples/application/footer');
?>