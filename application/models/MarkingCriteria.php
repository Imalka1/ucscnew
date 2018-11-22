<?php

class MarkingCriteria extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getHeadings()
    {
        $this->load->database();
        $sql = $this->db->query("SELECT * FROM marking_field_heading");
        return $sql->result();
    }
}