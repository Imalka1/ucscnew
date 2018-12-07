<?php
/**
 * Created by IntelliJ IDEA.
 * User: Imalka Gunawardana
 * Date: 2018-12-06
 * Time: 12:51 AM
 */

class Landing extends CI_Controller
{
    public function index()
    {
        $this->load->view('examples/landing-page');
    }
}