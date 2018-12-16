<?php

/**
 * Created by IntelliJ IDEA.
 * User: Imalka Gunawardana
 * Date: 2018-12-09
 * Time: 1:00 AM
 */
include 'EmailController.php';

class ApplicationController extends CI_Controller
{
    private $data;

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
    }

    public function index()
    {

    }

    private function setData()
    {
        $this->data['applicationNo'] = '';
        if (isset($_SESSION['applicationNo'])) {
            $this->data['applicationNo'] = $_SESSION['applicationNo'];
        }
        $this->data['year'] = '2019';
    }

    public function startPage1()
    {
        $_SESSION['applicationNo'] = '';
        $this->data['applicationNo'] = $_SESSION['applicationNo'];
        redirect(base_url() . "application_form/page1");
    }

    public function page1()
    {
        $this->setData();
        if (isset($_SESSION['applicationNo'])) {
            if ($_SESSION['applicationNo'] != '') {
                $this->data['personalEmail'] = 'imalkagunawardana1@gmail.com';
            }
        }
        $this->load->view('examples/application/application1', $this->data);
    }

    public function startPage2()
    {
        $this->load->model('ApplicationModel');
        $this->data = $this->ApplicationModel->submitApplicantAndGetAppNumber();
        $_SESSION['applicationNo'] = $this->data['id'];
        $this->data['applicationNo'] = $_SESSION['applicationNo'];
        $this->data['year'] = '2019';
        $email = new EmailController();
        $this->load->library('email');
//        $email->sendMailToApplicant($this->email, $this->input->post('personalEmail'), $data);
        redirect(base_url() . "application_form/page2");
    }

    public function page2()
    {
        $this->setData();
        $this->load->view('examples/application/application2', $this->data);
    }

    public function page3()
    {
        $this->setData();
        $this->load->view('examples/application/application3', $this->data);
    }

    public function page4()
    {
        $this->setData();
        $this->load->view('examples/application/application4', $this->data);
    }

    public function page5()
    {
        $this->setData();
        $this->load->view('examples/application/application5', $this->data);
    }

    public function page6()
    {
        $this->setData();
        $this->load->view('examples/application/application6', $this->data);
    }

    public function page7()
    {
        $this->setData();
        $this->load->view('examples/application/application7', $this->data);
    }

    public function page8()
    {
        $this->setData();
        $this->load->view('examples/application/application8', $this->data);
    }

    public function page9()
    {
        $this->setData();
        $this->load->view('examples/application/application9', $this->data);
    }

    public function page10()
    {
        $this->setData();
        $this->load->view('examples/application/application10', $this->data);
    }
}