<?php
/**
 * Created by IntelliJ IDEA.
 * User: Imalka Gunawardana
 * Date: 2018-12-09
 * Time: 1:00 AM
 */

class ApplicationController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {

    }

    public function page1()
    {
        $this->load->view('examples/application/application1');
    }

    public function page2()
    {
        $this->load->view('examples/application/application2');
    }

    public function page3()
    {
        $this->load->view('examples/application/application3');
    }
}