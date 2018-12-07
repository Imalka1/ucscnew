<?php
include "login-screen-header.php";
?>

<div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class= "">
                    <a href="<?= base_url('login')?>">
                        <i class="material-icons">person_add</i>
                        Sign in
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
    <div class="wrapper wrapper-full-page">
            <div class="full-page login-page" filter-color="black" data-image="<?=base_url('assets/img/login.jpg')?>">
        <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                        <form method="#" action="<?=base_url('examples/dashboard.php')?>">
                            <div class="card card-login card-hidden" style="background-color: rgba(0,0,0,0.7);border: none">
                                <div class="card-header text-center" data-background-color="rose">
                                    <h4 class="card-title">Sign up</h4>
                                    <div class="social-line">
                                        <a href="https://www.facebook.com/" target="_blank"
                                           class="btn btn-just-icon btn-simple">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                        <a href="https://www.google.com/" target="_blank"
                                           class="btn btn-just-icon btn-simple">
                                            <i class="fa fa-google"></i>
                                        </a>
                                        <a href="#pablo" class="btn btn-just-icon btn-simple">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                    </div>
                                </div>
                               
                                <div class="card-content">

                                    
                              
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">email</i>
                                        </span>

                                        <div class="form-group label-floating">
                                            <label class="control-label">Email address</label>
                                            <input type="email" class="form-control"  style="color: white">
                                        </div>
                                    </div>

                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">lock_outline</i>
                                        </span>
                                        <div class="form-group label-floating">
                                            <label class="control-label">Password</label>
                                            <input type="password" class="form-control"  style="color: white">
                                        </div>
                                    </div>

                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">lock_outline</i>
                                        </span>
                                        <div class="form-group label-floating">
                                            <label class="control-label">Confirm Password</label>
                                            <input type="password" class="form-control"  style="color: white">
                                        </div>
                                    </div>
                                </div>
                               <div class="footer text-center">
                                     <button type="submit" class="btn btn-rose btn-simple btn-wd btn-lg" style="color: #e9b500">
                                         Sign Up
                                        </button>
                                    </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">

<?php
include "login-screen-footer.php";
?>