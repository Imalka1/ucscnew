<?php
/**
 * Created by IntelliJ IDEA.
 * User: Imalka Gunawardana
 * Date: 2018-12-14
 * Time: 11:47 PM
 */

class ApplicationModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function submitApplicantAndGetAppNumber()
    {
        $this->load->database();
        $this->db->query("insert into comment (sid,aid,description) values (?,?,?)", array($this->input->post('txtStaffId'), $this->input->post('txtId'), $this->input->post('txtReport')));
    }
}