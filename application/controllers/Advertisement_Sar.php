<?php
/**
 * Created by IntelliJ IDEA.
 * User: Imalka Gunawardana
 * Date: 2018-12-07
 * Time: 2:11 PM
 */

class Advertisement_Sar extends CI_Controller
{
    public function index()
    {
        $this->load->model('Advertisement_Model');
        $this->Advertisement_Model->setNotifyTo0();
        $this->load->library('session');
        $_SESSION["notify_count"] = 0;

        $data['advertisement'] = $this->Advertisement_Model->getAdvertisement();

        $this->load->view('examples/advertisement_sar', $data);
    }

    public function confirmAdvertisement()
    {
        $this->load->model('Advertisement_Model');
        $this->Advertisement_Model->confirmAdvertisement();
        redirect(base_url() . "main/advertisement_sar?confirmed=success");
    }
}