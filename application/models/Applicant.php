<?php

class Applicant extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getApplicants()
    {
        $this->load->database();
        $sql = $this->db->query("SELECT * FROM applicant where year(registered_date)>=year(curdate())-1");
        return $sql->result();
    }

    public function submitApplicantMarks()
    {
        $this->load->database();
        $val = explode('/', $this->input->post('txtTotal'));
        $this->db->query("update applicant set interviewers_count=?,marks=marks+?,comment=? where aid=?", array($this->input->post('txtCount'), $val[0], $this->input->post('txtReport'), $this->input->post('txtId')));
    }
}