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
        $this->load->model('MarkingCriteria');
        $data['criteria_headings'] = $this->MarkingCriteria->getHeadings();
        $this->load->view('examples/applicants', $data);
    }
}

?>