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
}