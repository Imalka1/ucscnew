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

    public function page4()
    {
        $this->load->view('examples/application/application4');
    }

    public function page5()
    {
        $this->load->view('examples/application/application5');
    }

    public function page6()
    {
        $this->load->view('examples/application/application6');
    }

    public function page7()
    {
        $this->load->view('examples/application/application7');
    }

    public function page8()
    {
        $this->load->view('examples/application/application8');
    }

    public function page9()
    {
        $this->load->view('examples/application/application9');
    }

    public function page10()
    {
        $this->load->view('examples/application/application10');
    }
}