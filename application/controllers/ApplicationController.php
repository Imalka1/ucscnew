<?php

/**
 * Created by IntelliJ IDEA.
 * User: Imalka Gunawardana
 * Date: 2018-12-09
 * Time: 1:00 AM
 */
include 'EmailController.php';

class ApplicationController extends CI_Controller
{
    private $data;

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
    }

    public function index()
    {

    }

    private function setData()
    {
        $this->data['applicationNo'] = '';
        if (isset($_SESSION['applicationNo'])) {
            $this->data['applicationNo'] = $_SESSION['applicationNo'];
        }
        $this->data['year'] = '2019';
    }

    public function viewApplication()
    {
        $this->data['applicationNo'] = $_SESSION['applicationNo'];
        redirect(base_url() . "application_form/page1");
    }

    public function startApplication()
    {
        $_SESSION['applicationNo'] = '';
        $this->data['applicationNo'] = $_SESSION['applicationNo'];
        redirect(base_url() . "application_form/page1");
    }

    public function setIdSaveUpdatePage1()
    {
        $this->load->model('ApplicationModel');
        $this->data = $this->ApplicationModel->submitApplicantAndGetAppNumber();
        $_SESSION['applicationNo'] = $this->data['id'];
        $this->data['applicationNo'] = $_SESSION['applicationNo'];
        $this->data['year'] = '2019';
        $email = new EmailController();
        $this->load->library('email');
//        $email->sendMailToApplicant($this->email, $this->input->post('personalEmail'), $data);
        redirect(base_url() . "application_form/page2");
    }

    public function page1()
    {
        $this->setData();
        if (isset($_SESSION['applicationNo'])) {
            if ($_SESSION['applicationNo'] != '') {
                $this->load->model('ApplicationModel');
                $applicant = $this->ApplicationModel->getApplicantPage1($_SESSION['applicationNo']);
                if ($applicant->postFor == 1) {
                    $this->data['postForLecProb'] = 'checked';
                } else if ($applicant->postFor == 2) {
                    $this->data['postForSenLec'] = 'checked';
                } else if ($applicant->postFor == 3) {
                    $this->data['postForLecProb'] = 'checked';
                    $this->data['postForSenLec'] = 'checked';
                }
                $this->data['title'] = $applicant->title;
                $this->data['fullName'] = $applicant->fullName;
                $this->data['surName'] = $applicant->surName;
                $this->data['nicNo'] = $applicant->nic;
                if ($applicant->gender == 'male') {
                    $this->data['male'] = 'checked';
                } else if ($applicant->gender == 'female') {
                    $this->data['female'] = 'checked';
                }
                if ($applicant->civilStatus == 'married') {
                    $this->data['married'] = 'checked';
                } else if ($applicant->civilStatus == 'unmarried') {
                    $this->data['unmarried'] = 'checked';
                }
                $this->data['postalAddress'] = $applicant->postalAddress;
                $this->data['permanentAddress'] = $applicant->permanentAddress;
                $this->data['mobileNumber'] = $applicant->mobileNo;
                $this->data['homeNumber'] = $applicant->homeNo;
                $this->data['officeNumber'] = $applicant->officeNo;
                $this->data['personalEmail'] = $applicant->personalEmail;
                $this->data['officialEmail'] = $applicant->OfficailEmail;
                $this->data['dob'] = $applicant->dob;
                $this->data['citizenship'] = $applicant->citizenship;
                if ($applicant->citizen == 'citizenshipBR') {
                    $this->data['citizenshipBR'] = 'checked';
                } else if ($applicant->citizen == 'citizenshipBD') {
                    $this->data['citizenshipBD'] = 'checked';
                }
            }
        }
        $this->load->view('examples/application/application1', $this->data);
    }

    public function page2()
    {
        $this->setData();
        if (isset($_SESSION['applicationNo'])) {
            if ($_SESSION['applicationNo'] != '') {
//                $this->data['applicantData'] = 'imalkagunawardana1@gmail.com';
            }
        }
        $this->load->view('examples/application/application2', $this->data);
    }

    public function page3()
    {
        $this->setData();
        if (isset($_SESSION['applicationNo'])) {
            if ($_SESSION['applicationNo'] != '') {

            }
        }
        $this->load->view('examples/application/application3', $this->data);
    }

    public function page4()
    {
        $this->setData();
        if (isset($_SESSION['applicationNo'])) {
            if ($_SESSION['applicationNo'] != '') {

            }
        }
        $this->load->view('examples/application/application4', $this->data);
    }

    public function page5()
    {
        $this->setData();
        if (isset($_SESSION['applicationNo'])) {
            if ($_SESSION['applicationNo'] != '') {

            }
        }
        $this->load->view('examples/application/application5', $this->data);
    }

    public function page6()
    {
        $this->setData();
        if (isset($_SESSION['applicationNo'])) {
            if ($_SESSION['applicationNo'] != '') {

            }
        }
        $this->load->view('examples/application/application6', $this->data);
    }

    public function page7()
    {
        $this->setData();
        if (isset($_SESSION['applicationNo'])) {
            if ($_SESSION['applicationNo'] != '') {

            }
        }
        $this->load->view('examples/application/application7', $this->data);
    }

    public function page8()
    {
        $this->setData();
        if (isset($_SESSION['applicationNo'])) {
            if ($_SESSION['applicationNo'] != '') {

            }
        }
        $this->load->view('examples/application/application8', $this->data);
    }

    public function page9()
    {
        $this->setData();
        if (isset($_SESSION['applicationNo'])) {
            if ($_SESSION['applicationNo'] != '') {

            }
        }
        $this->load->view('examples/application/application9', $this->data);
    }

    public function page10()
    {
        $this->setData();
        if (isset($_SESSION['applicationNo'])) {
            if ($_SESSION['applicationNo'] != '') {

            }
        }
        $this->load->view('examples/application/application10', $this->data);
    }

    public function page11()
    {
        $this->setData();
        if (isset($_SESSION['applicationNo'])) {
            if ($_SESSION['applicationNo'] != '') {

            }
        }
        $this->load->view('examples/application/application11', $this->data);
    }

    public function savePage2()
    {

    }

    public function savePage3()
    {

    }

    public function savePage4()
    {

    }

    public function savePage5()
    {

    }

    public function savePage6()
    {

    }

    public function saveUpdatePage7()
    {
        redirect(base_url() . "application_form/page8");
    }

    public function savePage8()
    {

    }

    public function saveUpdatePage9()
    {
        redirect(base_url() . "application_form/page10");
    }

    public function savePage10()
    {

    }

    public function saveUpdatePage11()
    {
        redirect(base_url() . "application_form/page1");
    }

    public function updatePage1()
    {
        $this->load->model('ApplicationModel');
        $result = $this->data = $this->ApplicationModel->updateApplicant();
        if ($result > 0) {
            redirect(base_url() . "application_form/page2");
        } else {
            redirect(base_url() . "application_form/page2?error=error");
        }
    }

    public function updatePage2()
    {

    }

    public function updatePage3()
    {

    }

    public function updatePage4()
    {

    }

    public function updatePage5()
    {

    }

    public function updatePage6()
    {

    }

    public function updatePage8()
    {

    }

    public function updatePage10()
    {

    }

    public function deletePage2()
    {

    }

    public function deletePage3()
    {

    }

    public function deletePage4()
    {

    }

    public function deletePage5()
    {

    }

    public function deletePage6()
    {

    }

    public function deletePage8()
    {

    }

    public function deletePage10()
    {

    }
}