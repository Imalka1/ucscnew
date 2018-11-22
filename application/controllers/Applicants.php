<?php

class Applicants extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->model('Applicant');
        $data['applicants'] = $this->Applicant->getApplicants();

        $this->load->model('MarkingCriteria');
        $data['criteria_headings'] = $this->MarkingCriteria->getHeadings();
        $this->load->view('examples/applicants', $data);
    }

    public function submitData()
    {
        echo "hg";
//        $this->load->view('examples/applicants');
//        redirect(base_url() . "main");
    }
}

?>