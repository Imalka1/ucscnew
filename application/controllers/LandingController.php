<?php
/**
 * Created by IntelliJ IDEA.
 * UserModel: Imalka Gunawardana
 * Date: 2018-12-06
 * Time: 12:51 AM
 */

class LandingController extends CI_Controller
{
    public function index()
    {
        $this->load->view('examples/landing-page');
    }
}