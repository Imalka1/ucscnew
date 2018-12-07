<?php
/**
 * Created by IntelliJ IDEA.
 * User: Imalka Gunawardana
 * Date: 2018-12-05
 * Time: 7:58 PM
 */

class Email extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('form');
    }

    public function index()
    {

        $this->load->helper('form');
        $this->load->view('email_form');
    }

    public function send_mail()
    {
        $from_email = "webphpjava@gmail.com";
        $email = explode(' - ', $this->input->post('operatorEmail'))[1];
        $to_email = substr($email, 1, strlen($email) - 2);

        //Load email library
        $this->load->library('email');

        $this->email->set_mailtype("html");
        $this->email->from($from_email, $_SESSION["username"]);
        $this->email->to($to_email);
        $this->email->subject('Vacancy Details');
        $this->email->message($this->input->post('txtDetails'));

        //Send mail
        if ($this->email->send()) {
            $this->session->set_flashdata("email_sent", "Email sent successfully.");
            redirect(base_url() . "main/vacancy?email=success");
        }else {
            $this->session->set_flashdata("email_sent", "Error in sending Email.");
            redirect(base_url() . "main/vacancy?email=failed");
        }
    }
}