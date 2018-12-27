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

    //---------------------------------------------------Page 1---------------------------------------------------------

    public function submitPage1AndGetAppNumber()
    {
        $id = '';
//        $appPassword = md5(mt_rand(100000, 999999));
        $appPassword = md5('abc');
        $this->load->database();
        $this->db->db_debug = false;
        $sql = $this->db->query('select count(personalEmail) from applicant where aid like ?', array((date('Y') + 1) . '%'));
        $row = $sql->row_array();
        if (isset($row)) {

            if ($this->input->post('postForLecProb') == 'lecProb' && $this->input->post('postForSenLec') == '') {
                $postFor = 1;
            } else if ($this->input->post('postForLecProb') == '' && $this->input->post('postForSenLec') == 'senLec') {
                $postFor = 2;
            } else if ($this->input->post('postForLecProb') == 'lecProb' && $this->input->post('postForSenLec') == 'senLec') {
                $postFor = 3;
            } else if ($this->input->post('postForLecProb') == '' && $this->input->post('postForSenLec') == '') {
                $postFor = 0;
            }
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

            if ($row['count(personalEmail)'] != 0) {
                $sql = $this->db->query('select max(dataIndex) from applicant');
                $row = $sql->row_array();
                if (isset($row)) {
                    $id = (date('Y') + 1) . '000' . ($row['max(dataIndex)'] + 1);
                    if (!$this->db->query('insert into user values (?,?,?)',
                        array($personalEmail, $appPassword, 'applicant'))) {
                        if ($this->db->error()['code'] == 1062) {
                            redirect(base_url() . "application_form/page1?error=pk");
                        }
                    }
                    if (!$this->db->query('insert into applicant values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)',
                        array($id, $postFor, $title, $fullName, $surName, $nicNo, $gender, $civilStatus, $postalAddress, $permanentAddress, $mobileNumber, $homeNumber, $officeNumber, $personalEmail, $officialEmail, $dob, $citizenship, $citizen, '', 1, 0, $row['max(dataIndex)'] + 1))) {
                        redirect(base_url() . "application_form/page1?error=error");
                    }
                }
            } else {
                $id = (date('Y') + 1) . '0001';
                if (!$this->db->query('insert into user values (?,?,?)',
                    array($personalEmail, $appPassword, 'applicant'))) {
                    if ($this->db->error()['code'] == 1062) {
                        redirect(base_url() . "application_form/page1?error=pk");
                    }
                }
                if (!$this->db->query('insert into applicant values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)',
                    array($id, $postFor, $title, $fullName, $surName, $nicNo, $gender, $civilStatus, $postalAddress, $permanentAddress, $mobileNumber, $homeNumber, $officeNumber, $personalEmail, $officialEmail, $dob, $citizenship, $citizen, '', 1, 0, 1))) {
                    redirect(base_url() . "application_form/page1?error=error");
                }
            }
        }
        $data['id'] = $id;
        $data['appPassword'] = $appPassword;
        return $data;
    }

    public function updatePage1()
    {
        $this->load->database();
        return $this->db->affected_rows();
    }

    public function getPage1()
    {
        $this->load->database();
        $sql = $this->db->query('select * from applicant where aid=?',
            array($_SESSION['applicationNo']));
        return $sql->result()[0];
    }

    //---------------------------------------------------Page 2---------------------------------------------------------

    public function submitPage2()
    {
        $addedResult = array('', '');
        $this->load->database();
        if ($this->db->query('insert into areas_of_specialization (aid,description) values (?,?)',
            array($_SESSION['applicationNo'], $this->input->post('aosDescription')))) {
            if ($this->db->affected_rows() > 0) {
                $sql = $this->db->query('select aosid from areas_of_specialization where aid=? && description=?',
                    array($_SESSION['applicationNo'], $this->input->post('aosDescription')));
                $addedResult[0] = 'true';
                $addedResult[1] = $sql->result()[$this->db->affected_rows() - 1]->aosid;
                return $addedResult;
            } else {
                $addedResult[0] = 'false';
                return $addedResult;
            }
        } else {
            $addedResult[0] = 'false';
            return $addedResult;
        }
    }

    public function updatePage2()
    {
        $this->load->database();
        if ($this->db->query('update areas_of_specialization set description=? where aosid=?',
            array($this->input->post('aosDescription'), $this->input->post('aosId')))) {
            if ($this->db->affected_rows() > 0) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function deletePage2()
    {
        $this->load->database();
        if ($this->db->query('delete from areas_of_specialization where aosid=?',
            array($this->input->post('aosId')))) {
            if ($this->db->affected_rows() > 0) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function getPage2()
    {
        $this->load->database();
        $sql = $this->db->query('select * from areas_of_specialization where aid=?',
            array($_SESSION['applicationNo']));
        return $sql->result();
    }

    //---------------------------------------------------Page 3---------------------------------------------------------

    public function submitPage3()
    {
        $addedResult = array('', '');
        $this->load->database();
        if ($this->db->query('insert into secondary_education (aid,seNameOfSchool,seFrom,seTo,seExam,seYear) values (?,?,?,?,?,?)',
            array($_SESSION['applicationNo'], $this->input->post('seNameOfSchool'), $this->input->post('seFrom'), $this->input->post('seTo'), $this->input->post('seExam'), $this->input->post('seYear')))) {
            if ($this->db->affected_rows() > 0) {
                $sql = $this->db->query('select seid from secondary_education where aid=? && seNameOfSchool=? && seFrom=? && seTo=? && seExam=? && seYear=?',
                    array($_SESSION['applicationNo'], $this->input->post('seNameOfSchool'), $this->input->post('seFrom'), $this->input->post('seTo'), $this->input->post('seExam'), $this->input->post('seYear')));
                $addedResult[0] = 'true';
                $addedResult[1] = $sql->result()[$this->db->affected_rows() - 1]->seid;
                return $addedResult;
            } else {
                $addedResult[0] = 'false';
                return $addedResult;
            }
        } else {
            $addedResult[0] = 'false';
            return $addedResult;
        }
    }

    public function updatePage3()
    {
        $this->load->database();
        if ($this->db->query('update secondary_education set seNameOfSchool=?, seFrom=?, seTo=?, seExam=?, seYear=? where seid=?',
            array($this->input->post('seNameOfSchool'), $this->input->post('seFrom'), $this->input->post('seTo'), $this->input->post('seExam'), $this->input->post('seYear'), $this->input->post('seId')))) {
            if ($this->db->affected_rows() > 0) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function deletePage3()
    {
        $this->load->database();
        if ($this->db->query('delete from secondary_education where seid=?',
            array($this->input->post('seId')))) {
            if ($this->db->affected_rows() > 0) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function getPage3()
    {
        $this->load->database();
        $sql = $this->db->query('select * from secondary_education where aid=?',
            array($_SESSION['applicationNo']));
        return $sql->result();
    }

    //---------------------------------------------------Page 6---------------------------------------------------------

    public function submitPage6()
    {
        $addedResult = array('', '');
        $this->load->database();
        if ($this->db->query('insert into professional_qualifications (aid,pqInstitution,pqFrom,pqTo,pqDuration,pqQualification) values (?,?,?,?,?,?)',
            array($_SESSION['applicationNo'], $this->input->post('pqInstitution'), $this->input->post('pqFrom'), $this->input->post('pqTo'), $this->input->post('pqDuration'), $this->input->post('pqQualification')))) {
            if ($this->db->affected_rows() > 0) {
                $sql = $this->db->query('select pqid from professional_qualifications where aid=? && pqInstitution=? && pqFrom=? && pqTo=? && pqDuration=? && pqQualification=?',
                    array($_SESSION['applicationNo'], $this->input->post('pqInstitution'), $this->input->post('pqFrom'), $this->input->post('pqTo'), $this->input->post('pqDuration'), $this->input->post('pqQualification')));
                $addedResult[0] = 'true';
                $addedResult[1] = $sql->result()[$this->db->affected_rows() - 1]->pqid;
                return $addedResult;
            } else {
                $addedResult[0] = 'false';
                return $addedResult;
            }
        } else {
            $addedResult[0] = 'false';
            return $addedResult;
        }
    }

    public function updatePage6()
    {
        $this->load->database();
        if ($this->db->query('update professional_qualifications set pqInstitution=?, pqFrom=?, pqTo=?, pqDuration=?, pqQualification=? where pqid=?',
            array($this->input->post('pqInstitution'), $this->input->post('pqFrom'), $this->input->post('pqTo'), $this->input->post('pqDuration'), $this->input->post('pqQualification'), $this->input->post('pqId')))) {
            if ($this->db->affected_rows() > 0) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function deletePage6()
    {
        $this->load->database();
        if ($this->db->query('delete from professional_qualifications where pqid=?',
            array($this->input->post('pqId')))) {
            if ($this->db->affected_rows() > 0) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function getPage6()
    {
        $this->load->database();
        $sql = $this->db->query('select * from professional_qualifications where aid=?',
            array($_SESSION['applicationNo']));
        return $sql->result();
    }

    //---------------------------------------------------Page 8---------------------------------------------------------

    public function submitPage8()
    {
        $addedResult = array('', '');
        $this->load->database();
        if ($this->db->query('insert into employment_records (aid,erPost,erInstitution,erFrom,erTo,erDuration,erSalary) values (?,?,?,?,?,?,?)',
            array($_SESSION['applicationNo'], $this->input->post('erPost'), $this->input->post('erInstitution'), $this->input->post('erFrom'), $this->input->post('erTo'), $this->input->post('erDuration'), $this->input->post('erSalary')))) {
            if ($this->db->affected_rows() > 0) {
                $sql = $this->db->query('select erid from employment_records where aid=? && erPost=? && erInstitution=? && erFrom=? && erTo=? && erDuration=? && erSalary=?',
                    array($_SESSION['applicationNo'], $this->input->post('erPost'), $this->input->post('erInstitution'), $this->input->post('erFrom'), $this->input->post('erTo'), $this->input->post('erDuration'), $this->input->post('erSalary')));
                $addedResult[0] = 'true';
                $addedResult[1] = $sql->result()[$this->db->affected_rows() - 1]->erid;
                return $addedResult;
            } else {
                $addedResult[0] = 'false';
                return $addedResult;
            }
        } else {
            $addedResult[0] = 'false';
            return $addedResult;
        }
    }

    public function updatePage8()
    {
        $this->load->database();
        if ($this->db->query('update employment_records set erPost=?, erInstitution=?, erFrom=?, erTo=?, erDuration=?, erSalary=? where erid=?',
            array($this->input->post('erPost'), $this->input->post('erInstitution'), $this->input->post('erFrom'), $this->input->post('erTo'), $this->input->post('erDuration'), $this->input->post('erSalary'), $this->input->post('erId')))) {
            if ($this->db->affected_rows() > 0) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function deletePage8()
    {
        $this->load->database();
        if ($this->db->query('delete from employment_records where erid=?',
            array($this->input->post('erId')))) {
            if ($this->db->affected_rows() > 0) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function getPage8()
    {
        $this->load->database();
        $sql = $this->db->query('select * from employment_records where aid=?',
            array($_SESSION['applicationNo']));
        return $sql->result();
    }
}