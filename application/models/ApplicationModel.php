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
//        $appPassword = md5(mt_rand(100000, 999999));
        $appPassword = md5('abc');
        $this->load->database();
        $sql = $this->db->query('select count(email) from applicant where aid like ?', array(date('Y') . '%'));
        $row = $sql->row_array();
        if (isset($row)) {
            $email = $this->input->post('personalEmail');
            if ($row['count(email)'] != 0) {
                $sql = $this->db->query('select max(dataIndex) from applicant');
                $row = $sql->row_array();
                if (isset($row)) {
                    $id = (date('Y') + 1) . '000' . ($row['max(dataIndex)'] + 1);
                    $this->db->query('insert into user values (?,?,?)', array($email, $appPassword, 'applicant'));
                    $this->db->query('insert into applicant values (?,?,?,?,?,?,?,?,?,?,?)', array($id, '', $email, '', '', '', '', '', 1, 0, $row['max(dataIndex)'] + 1));
                }
            } else {
                $id = (date('Y') + 1) . '0001';
                $this->db->query('insert into user values (?,?,?)', array($email, $appPassword, 'applicant'));
                $this->db->query('insert into applicant values (?,?,?,?,?,?,?,?,?,?,?)', array($id, '', $email, '', '', '', '', '', 1, 0, 1));
            }
        }
        $data['id'] = $id;
        $data['appPassword'] = $appPassword;
        return $data;
    }

    public function updateApplicant()
    {
        $this->load->database();
        return $this->db->affected_rows();
    }
}