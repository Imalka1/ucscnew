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

    private function getData(){
        $data['applicationNo'] = '19L002';
        $data['year'] = '2019';
        return $data;
    }

    public function page1()
    {

        $this->load->view('examples/application/application1', $this->getData());
    }

    public function page2()
    {
        $this->load->view('examples/application/application2', $this->getData());
    }

    public function page3()
    {
        $this->load->view('examples/application/application3', $this->getData());
    }

    public function page4()
    {
        $this->load->view('examples/application/application4', $this->getData());
    }

    public function page5()
    {
        $this->load->view('examples/application/application5', $this->getData());
    }

    public function page6()
    {
        $this->load->view('examples/application/application6', $this->getData());
    }

    public function page7()
    {
        $this->load->view('examples/application/application7', $this->getData());
    }

    public function page8()
    {
        $this->load->view('examples/application/application8', $this->getData());
    }

    public function page9()
    {
        $this->load->view('examples/application/application9', $this->getData());
    }

    public function page10()
    {
        $this->load->view('examples/application/application10', $this->getData());
    }
}