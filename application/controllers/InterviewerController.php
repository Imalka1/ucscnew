<?php
/**
 * Created by IntelliJ IDEA.
 * User: Imalka Gunawardana
 * Date: 2018-12-08
 * Time: 7:29 PM
 */

class InterviewerController extends CI_Controller
{
    public function viewInterviewPanel()
    {
        $this->load->model('ApplicantModel');
        $data['applicants'] = $this->ApplicantModel->getApplicants();

        $this->load->model('MarkingCriteriaModel');
        $data['criteria_headings'] = $this->MarkingCriteriaModel->getHeadings();
        $data['detailed_criteria_headings'] = $this->MarkingCriteriaModel->getDetailedHeadings();
        $data['detailed_criteria'] = $this->MarkingCriteriaModel->getDetailedCriteria();

        $this->load->view('examples/interview/interview_panel', $data);
    }

    public function submitData()
    {
        $this->load->model('ApplicantModel');
        $this->ApplicantModel->submitApplicantMarks();
        redirect(base_url() . "interview/interview_panel");
    }

    public function getComments()
    {
        $this->load->model('ApplicantModel');
        $comments = $this->ApplicantModel->getComments();
        foreach ($comments as $row) {
            echo $row->title . '.' . $row->name . ' = ' . $row->description . '~';
        }
    }
}