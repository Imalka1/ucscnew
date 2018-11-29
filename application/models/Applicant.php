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
        $this->db->query("update applicant set interviewers_count=?,marks=marks+? where aid=?", array($this->input->post('txtCount'), $val[0], $this->input->post('txtId')));
        $this->db->query("insert into comment (iid,aid,description) values (?,?,?)", array($this->input->post('txtInterviewerId'), $this->input->post('txtId'), $this->input->post('txtReport')));
    }

    public function getComments()
    {
        $this->load->database();
        $sql = $this->db->query("SELECT name,description FROM comment c,interviewer i where i.iid=c.iid && aid=?", array($this->input->post('aid')));
        return $sql->result();
    }
}