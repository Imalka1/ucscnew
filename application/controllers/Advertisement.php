<?php
/**
 * Created by IntelliJ IDEA.
 * User: Imalka Gunawardana
 * Date: 2018-12-07
 * Time: 9:20 AM
 */

class Advertisement extends CI_Controller
{
    public function index()
    {
        $this->load->model('Advertisement_Model');
        $data['advertisement'] = $this->Advertisement_Model->getConfirmedAdvertisement();
        $this->load->view('examples/advertisement', $data);
    }
}