<?php

class SarController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {

    }

    public function viewApplicants()
    {
        $this->load->model('ApplicantModel');
        $data['applicants'] = $this->ApplicantModel->getApplicants();

        $this->load->view('examples/sar/applicants', $data);
    }

    public function viewAdvertisement()
    {
        $this->load->model('AdvertisementModel');
        $this->AdvertisementModel->setNotifyTo0();
        $this->load->library('session');
        $_SESSION["notify_count"] = 0;

        $data['advertisement'] = $this->AdvertisementModel->getAdvertisement();

        $this->load->view('examples/sar/advertisement', $data);
    }

    public function viewVacancy()
    {
        $this->load->model('UserModel');
        $data['operators'] = $this->UserModel->getOperators();

        $this->load->view('examples/sar/vacancy', $data);
    }

    public function confirmAdvertisement()
    {
        $this->load->model('AdvertisementModel');
        $this->AdvertisementModel->confirmAdvertisement();
        redirect(base_url() . "sar/advertisement?confirmed=success");
    }
}
