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
        $this->db->db_debug = false;
        $sql = $this->db->query('select count(email) from applicant where aid like ?', array(date('Y') . '%'));
        $row = $sql->row_array();
        if (isset($row)) {

            $postForLecProb = $this->input->post('postForLecProb');
            $postForSenLec = $this->input->post('postForSenLec');
            $title = $this->input->post('title');
            $fullName = $this->input->post('fullName');
            $surName = $this->input->post('surName');
            $nicNo = $this->input->post('nicNo');
            $gender = $this->input->post('gender');
            $civilStatus = $this->input->post('civilStatus');
            $postalAddress = $this->input->post('postalAddress');
            $permanentAddress = $this->input->post('permanentAddress');
            $mobileNumber = $this->input->post('mobileNumber');
            $homeNumber = $this->input->post('homeNumber');
            $officeNumber = $this->input->post('officeNumber');
            $personalEmail = $this->input->post('personalEmail');
            $officialEmail = $this->input->post('officialEmail');
            $dob = $this->input->post('dob');
            $citizenship = $this->input->post('citizenship');
            $citizen = $this->input->post('citizen');

            if ($row['count(email)'] != 0) {
                $sql = $this->db->query('select max(dataIndex) from applicant');
                $row = $sql->row_array();
                if (isset($row)) {
                    $id = (date('Y') + 1) . '000' . ($row['max(dataIndex)'] + 1);
                    if (!$this->db->query('insert into user values (?,?,?)', array($personalEmail, $appPassword, 'applicant'))) {
                        if ($this->db->error()['code'] == 1062) {
                            redirect(base_url() . "application_form/page1?error=pk");
                        }
                    }
                    if (!$this->db->query('insert into applicant values (?,?,?,?,?,?,?,?,?,?,?)', array($id, '', $personalEmail, '', '', '', '', '', 1, 0, $row['max(dataIndex)'] + 1))) {
                        redirect(base_url() . "application_form/page1?error=error");
                    }
                }
            } else {
                $id = (date('Y') + 1) . '0001';
                if (!$this->db->query('insert into user values (?,?,?)', array($personalEmail, $appPassword, 'applicant'))) {
                    if ($this->db->error()['code'] == 1062) {
                        redirect(base_url() . "application_form/page1?error=pk");
                    }
                }
                if (!$this->db->query('insert into applicant values (?,?,?,?,?,?,?,?,?,?,?)', array($id, '', $personalEmail, '', '', '', '', '', 1, 0, $row['max(dataIndex)'] + 1))) {
                    redirect(base_url() . "application_form/page1?error=error");
                }
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