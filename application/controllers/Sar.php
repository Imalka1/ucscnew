<?php

class Sar extends CI_Controller
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
        $data['detailed_criteria_headings'] = $this->MarkingCriteria->getDetailedHeadings();
        $data['detailed_criteria'] = $this->MarkingCriteria->getDetailedCriteria();

        $this->load->view('examples/sar', $data);
    }
}
