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
        $id = '';
        $this->load->database();
        $sql = $this->db->query('select count(email) from applicant where aid like ?', array(date('Y') . '%'));
        $row = $sql->row_array();
        if (isset($row)) {
            if ($row['count(email)'] != 0) {
                $sql = $this->db->query('select max(dataIndex) from applicant');
                $row = $sql->row_array();
                if (isset($row)) {
                    $id = (date('Y') + 1) . '000' . ($row['max(dataIndex)'] + 1);
                    echo $id;
                    $this->db->query('insert into applicant values (?,?,?,?,?,?,?,?,?,?,?)', array($id, '', 'imalkagunawardana1@gmail.com', '', '', '', '', '', 1, 0, $row['max(dataIndex)'] + 1));
                }
            } else {
                $this->id  = (date('Y') + 1) . '0001';
                $this->db->query('insert into applicant values (?,?,?,?,?,?,?,?,?,?,?)', array($id, '', 'imalkagunawardana1@gmail.com', '', '', '', '', '', 1, 0, 1));
            }
        }
        return $id ;
//        $this->db->query("insert into comment (sid,aid,description) values (?,?,?)", array($this->input->post('txtStaffId'), $this->input->post('txtId'), $this->input->post('txtReport')));
    }
}