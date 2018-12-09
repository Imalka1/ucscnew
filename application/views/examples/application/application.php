<?php
$this->load->library('session');
?>
    <!doctype html>
    <html lang="en">

    <!-- Mirrored from demos.creative-tim.com/bs3/material-dashboard-pro/examples/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Jul 2018 13:04:37 GMT -->
    <!-- Added by HTTrack -->
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/><!-- /Added by HTTrack -->
    <head>
        <meta charset="utf-8"/>
        <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png"/>
        <link rel="icon" type="image/png" href="<?= base_url('assets/images/ucscLogo.jpg') ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

        <title>UCSC</title>

        <!-- Bootstrap core CSS     -->
        <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet"/>

        <!--  CSS for Demo Purpose, don't include it in your project     -->
        <link href="<?= base_url('assets/css/demo.css') ?>" rel="stylesheet"/>


        <!--     Fonts and icons     -->
        <link href="<?= base_url('assets/font-awesome/latest/css/font-awesome.min.css') ?>" rel="stylesheet">
        <link rel="stylesheet" type="text/css"
              href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons"/>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
              rel="stylesheet">
        <style>
            hr {
                display: block;
                margin-top: 25px;
                margin-bottom: 25px;
                margin-left: auto;
                margin-right: auto;
                border-style: inset;
                /*border-width: 1px;*/
            }
        </style>
    </head>


    <body>

    <div class="wrapper" style="background-color: #f5f5f5;padding-bottom: 5px">


        <!--        <div style="background-color: #f5f5f5">-->
        <div style="text-align: center;font-size: 40px">
            <div style="padding-top: 60px">Application Form</div>
        </div>
        <div style="background-color: white;border: 2px solid #666666;margin: 50px;padding: 10px">
            <div class="row" style="margin-bottom: 30px">
                <div class="col-sm-4" style="font-weight: bold;font-size: 20px">University of Colombo School of
                    Computing
                </div>
                <div class="col-sm-4" style="text-align: center;margin-top: 10px">Application No : <span
                            id="appNo"></span></div>
                <div class="col-sm-4" style="text-align: center;margin-top: 10px">Date issued : <span
                            id="appDate"></span></div>
            </div>

            <hr>

            <div class="row" style="margin-bottom: 20px">
                <div class="col-sm-12" style="font-weight: bold">
                    Posts applied for
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    Lecturer (Probationary)<input type="checkbox"
                                                  style="margin-left: 30px;-ms-transform: scale(2); /* IE */-moz-transform: scale(2); /* FF */-webkit-transform: scale(2); /* Safari and Chrome */-o-transform: scale(2); /* Opera */">
                </div>
                <div class="col-sm-6">
                    Senior Lecturer Gr. II<input type="checkbox"
                                                 style="margin-left: 30px;-ms-transform: scale(2); /* IE */-moz-transform: scale(2); /* FF */-webkit-transform: scale(2); /* Safari and Chrome */-o-transform: scale(2); /* Opera */">
                </div>
            </div>

            <hr>

            <div class="row" style="margin-bottom: 20px">
                <div class="col-sm-12" style="font-weight: bold">
                    Areas of Specialization
                </div>
                <div class="col-sm-12">
                    (Please indicate the subject arrears of specialization based on your qualification and work
                    experience)
                </div>
            </div>
            <div class="row" id="aosId">
                <div class="col-sm-6"><span>1.</span> <input type="text" class="form-control"></div>
                <div class="col-sm-6"><span>2.</span> <input type="text" class="form-control"></div>
            </div>
            <div class="row" style="margin-top: 20px">
                <div class="col-sm-6">
                    <button class="btn btn-primary" id="addAos"
                            style="left: 50%;transform: translateX(-50%);position: relative">Add Field
                    </button>
                </div>
                <div class="col-sm-6">
                    <button class="btn btn-primary" id="removeAos"
                            style="left: 50%;transform: translateX(-50%);position: relative">Remove Field
                    </button>
                </div>
            </div>

            <hr>

            <div class="row">
                <div class="col-sm-12" style="font-weight: bold;margin-bottom: 10px">1.</div>
                <div class="col-sm-6">Full Name of the applicant (in block capitals)</div>
                <div class="col-sm-6">Surname with initials (in block capitals)</div>
                <div class="col-sm-6"><input type="text" class="form-control"></div>
                <div class="col-sm-6"><input type="text" class="form-control"></div>
                <div class="col-sm-12">NIC No./ Passport No./ Driving License No</div>
                <div class="col-sm-6"><input type="text" class="form-control"></div>
            </div>

            <hr>

            <div class="row">
                <div class="col-sm-4" style="margin-bottom: 10px">
                    <span style="font-weight: bold;margin-right: 10px">2.</span>
                    Gender
                </div>
                <div class="col-sm-4">
                    Male<input type="checkbox"
                               style="margin-left: 45px;-ms-transform: scale(2); /* IE */-moz-transform: scale(2); /* FF */-webkit-transform: scale(2); /* Safari and Chrome */-o-transform: scale(2); /* Opera */">
                </div>
                <div class="col-sm-4">
                    Female<input type="checkbox"
                                 style="margin-left: 47px;-ms-transform: scale(2); /* IE */-moz-transform: scale(2); /* FF */-webkit-transform: scale(2); /* Safari and Chrome */-o-transform: scale(2); /* Opera */">
                </div>
            </div>
            <div class="row" style="margin-top: 40px">
                <div class="col-sm-4" style="margin-bottom: 10px">
                    <span style="font-weight: bold;margin-right: 10px">3.</span>
                    Civil Status
                </div>
                <div class="col-sm-4">
                    Married<input type="checkbox"
                                  style="margin-left: 30px;-ms-transform: scale(2); /* IE */-moz-transform: scale(2); /* FF */-webkit-transform: scale(2); /* Safari and Chrome */-o-transform: scale(2); /* Opera */">
                </div>
                <div class="col-sm-4">
                    Unmarried<input type="checkbox"
                                    style="margin-left: 30px;-ms-transform: scale(2); /* IE */-moz-transform: scale(2); /* FF */-webkit-transform: scale(2); /* Safari and Chrome */-o-transform: scale(2); /* Opera */">
                </div>
            </div>

            <hr>

            <div class="row">
                <div class="col-sm-12" style="margin-bottom: 10px">
                    <span style="font-weight: bold;margin-right: 10px">4.</span>
                    Address
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    Postal Address
                </div>
                <div class="col-sm-6">
                    Permanent Address (if different from postal address)
                </div>
                <div class="col-sm-6">
                    <input type="text" class="form-control">
                </div>
                <div class="col-sm-6">
                    <input type="text" class="form-control">
                </div>
            </div>

            <hr>

            <div class="row">
                <div class="col-sm-12" style="margin-bottom: 10px">
                    <span style="font-weight: bold;margin-right: 10px">5.</span>
                    Contact Numbers
                </div>
                <div class="col-sm-4">
                    Mobile
                </div>
                <div class="col-sm-4">
                    Home
                </div>
                <div class="col-sm-4">
                    Office
                </div>
                <div class="col-sm-4">
                    <input type="text" class="form-control">
                </div>
                <div class="col-sm-4">
                    <input type="text" class="form-control">
                </div>
                <div class="col-sm-4">
                    <input type="text" class="form-control">
                </div>
            </div>

            <hr>

            <div class="row">
                <div class="col-sm-12" style="margin-bottom: 10px">
                    <span style="font-weight: bold;margin-right: 10px">6.</span>
                    Email Address
                </div>
                <div class="col-sm-6">
                    Personal
                </div>
                <div class="col-sm-6">
                    Official
                </div>
                <div class="col-sm-6">
                    <input type="email" class="form-control">
                </div>
                <div class="col-sm-6">
                    <input type="email" class="form-control">
                </div>
            </div>

            <hr>

            <div class="row">
                <div class="col-sm-12" style="margin-bottom: 10px">
                    <span style="font-weight: bold;margin-right: 10px">7.</span>
                </div>
                <div class="col-sm-6">
                    Date of birth
                </div>
                <div class="col-sm-6" style="text-align: center">
                    Age as at closing date of the application
                </div>
                <div class="col-sm-6">
                    <input type="date" class="form-control">
                </div>
                <div class="col-sm-6" style="margin-top: 5px;text-align: center">
                    0 Years / 0 Months / 0 Days
                    <input type="hidden" id="txtClosingDate">
                </div>
            </div>

            <hr>

            <div class="row">
                <div class="col-sm-12" style="margin-bottom: 10px">
                    <span style="font-weight: bold;margin-right: 10px">8.</span>
                </div>
                <div class="col-sm-12">
                    (a) Applicants citizenship
                </div>
                <div class="col-sm-12">
                    <input type="text" class="form-control">
                </div>
                <div class="col-sm-12">
                    (b) If a Citizen of Sri Lanka How obtained (Tick Relevant Cage)
                </div>
                <div class="col-sm-12" style="margin-top: 20px">
                    <div class="col-sm-6">
                        By descent<input type="checkbox"
                                         style="margin-left: 30px;-ms-transform: scale(2); /* IE */-moz-transform: scale(2); /* FF */-webkit-transform: scale(2); /* Safari and Chrome */-o-transform: scale(2); /* Opera */">
                    </div>
                    <div class="col-sm-6">
                        By registration<input type="checkbox"
                                              style="margin-left: 30px;-ms-transform: scale(2); /* IE */-moz-transform: scale(2); /* FF */-webkit-transform: scale(2); /* Safari and Chrome */-o-transform: scale(2); /* Opera */">
                    </div>
                </div>
            </div>

            <hr>

            <div class="row">
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
                            <th width="30%">Name of the School</th>
                            <th width="20%">From</th>
                            <th width="20%">To</th>
                            <th width="15%">Examination passed</th>
                            <th width="15%">Year</th>
                        </tr>
                        </thead>
                        <tbody id="seId"></tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <button class="btn btn-primary" id="addSe"
                            style="left: 50%;transform: translateX(-50%);position: relative">Add Field
                    </button>
                </div>
                <div class="col-sm-6">
                    <button class="btn btn-primary" id="removeSe"
                            style="left: 50%;transform: translateX(-50%);position: relative">Remove Field
                    </button>
                </div>
            </div>

            <!--            (b) Higher Education (*Graduate & Postgraduate Qualifications)-->

            <hr>

            <div class="row" style="margin-top: 50px">
                <div class="col-sm-12" style="margin-bottom: 15px">
                    (b) Higher Education (<b>*Graduate & Postgraduate Qualifications</b>)
                </div>
                <div class="col-sm-12">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th width="25%">Name of the University / Institution</th>
                            <th width="12%">From</th>
                            <th width="12%">To</th>
                            <th width="10%">Degree Obtained</th>
                            <th width="10%">Duration of the Course (No. of years)</th>
                            <th width="10%">Class</th>
                            <th width="10%">Awarding Year</th>
                            <th width="11%">Index No</th>
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
                    <button class="btn btn-primary" id="addHe"
                            style="left: 50%;transform: translateX(-50%);position: relative">Add Field
                    </button>
                </div>
                <div class="col-sm-6">
                    <button class="btn btn-primary" id="removeHe"
                            style="left: 50%;transform: translateX(-50%);position: relative">Remove Field
                    </button>
                </div>
            </div>

            <!--            Any Other Qualifications-->

            <hr>

            <div class="row" style="margin-top: 50px">
                <div class="col-sm-12" style="margin-bottom: 10px">
                    <span style="font-weight: bold;margin-right: 10px">10.</span>
                    **Any Other Qualifications
                </div>
                <div class="col-sm-12">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
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
                    <button class="btn btn-primary" id="addAoq"
                            style="left: 50%;transform: translateX(-50%);position: relative">Add Field
                    </button>
                </div>
                <div class="col-sm-6">
                    <button class="btn btn-primary" id="removeAoq"
                            style="left: 50%;transform: translateX(-50%);position: relative">Remove Field
                    </button>
                </div>
            </div>

            <!--            Professional Qualifications-->
            <hr>

            <div class="row" style="margin-top: 50px">
                <div class="col-sm-12" style="margin-bottom: 10px">
                    <span style="font-weight: bold;margin-right: 10px">11.</span>
                    Professional Qualifications
                </div>
                <div class="col-sm-4">
                    Institution
                </div>
                <div class="col-sm-2">
                    From
                </div>
                <div class="col-sm-2">
                    To
                </div>
                <div class="col-sm-2">
                    Duration
                </div>
                <div class="col-sm-2">
                    Type of Qualification
                </div>
                <div id="pqId">
                    <div class="col-sm-12 pqRow" style="padding-left: 0px">
                        <div class="col-sm-4">
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 20px">
                <div class="col-sm-6">
                    <button class="btn btn-primary" id="addPq"
                            style="left: 50%;transform: translateX(-50%);position: relative">Add Field
                    </button>
                </div>
                <div class="col-sm-6">
                    <button class="btn btn-primary" id="removePq"
                            style="left: 50%;transform: translateX(-50%);position: relative">Remove Field
                    </button>
                </div>
            </div>
        </div>
    </div>
<?php
$this->load->view('examples/footer');
?>