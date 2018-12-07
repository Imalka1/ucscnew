<?php

class SignIn extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->view('examples/pages/login');
    }

    public function login()
    {
        $this->load->model('User');
        $data['user_data'] = $this->User->getUserData();
        if ($this->User->getRowCount() == 0) {
            redirect(base_url() . "login?error=errorUsername");
        } else {
            $this->load->library('session');
            foreach ($data['user_data'] as $row) {
                if ($row->password == md5($this->User->getPassword())) {
                    $staff = $this->User->getStaff();
                    $notify = $this->User->getNotificationCount();
                    $data = array(
                        'id' => $staff->sid,
                        'username' => $staff->title . '.' . $staff->name,
                        'accountType' => $row->accountType,
                        'notify_count' => $notify->notified);
                    $this->session->set_userdata($data);
                    redirect(base_url() . "main");
                } else {
                    redirect(base_url() . "login?error=errorPassword");
                }
            }
        }
    }

    public function logout()
    {
        $this->load->library('session');
        $this->session->sess_destroy();
        redirect(base_url() . "main");
    }
}

?>