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
        $data['detailed_criteria_headings'] = $this->MarkingCriteria->getDetailedHeadings();
        $data['detailed_criteria'] = $this->MarkingCriteria->getDetailedCriteria();

        $this->load->view('examples/applicants', $data);
    }

    public function submitData()
    {
        $this->load->model('Applicant');
        $this->Applicant->submitApplicantMarks();
        redirect(base_url() . "main/applicants");
    }

    public function getComments()
    {
        $this->load->model('Applicant');
        $comments = $this->Applicant->getComments();
        foreach ($comments as $row) {
            echo $row->title . '.' . $row->name . ' = ' . $row->description . '~';
        }
    }
}

?>