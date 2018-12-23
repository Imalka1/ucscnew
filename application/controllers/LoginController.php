<?php
/**
 * Created by IntelliJ IDEA.
 * UserModel: Imalka Gunawardana
 * Date: 2018-12-08
 * Time: 7:17 PM
 */

class LoginController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {

    }

    public function viewSignIn()
    {
        $this->load->view('examples/login/signin');
    }

    public function viewSignUp()
    {
        $this->load->view('examples/login/signup');
    }

    public function login()
    {
        $this->load->model('UserModel');
        $data['user_data'] = $this->UserModel->getUserData();
        if ($this->UserModel->getRowCount() == 0) {
            redirect(base_url() . "signin?error=errorUsername");
        } else {
            $this->load->library('session');
            foreach ($data['user_data'] as $row) {
                if ($row->password == md5($this->UserModel->getPassword())) {
                    if ($this->input->post('accountType') == 'applicant') {
                        $applicant = $this->UserModel->getApplicant();
                        $data = array(
                            'id' => $applicant->aid,
                            'applicationNo' => $applicant->aid,
                            'username' => $applicant->title . '.' . $applicant->surName,
                            'accountType' => $row->accountType,
                        );
                        $this->session->set_userdata($data);
                    } else {
                        $staff = $this->UserModel->getStaff();
                        $notify = $this->UserModel->getNotificationCount();
                        $data = array(
                            'id' => $staff->sid,
                            'username' => $staff->title . '.' . $staff->name,
                            'accountType' => $row->accountType,
                            'notify_count' => $notify->notified);
                        $this->session->set_userdata($data);
                    }
                    redirect(base_url() . "");
                } else {
                    redirect(base_url() . "signin?error=errorPassword");
                }

            }
        }
    }

    public function logout()
    {
        $this->load->library('session');
        $this->session->sess_destroy();
        redirect(base_url() . "");
    }
}