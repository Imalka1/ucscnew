<?php
/**
 * Created by IntelliJ IDEA.
 * UserModel: Imalka Gunawardana
 * Date: 2018-12-07
 * Time: 9:20 AM
 */

class AdvertisementController extends CI_Controller
{
    public function index()
    {
        $this->load->model('AdvertisementModel');
        $data['advertisement'] = $this->AdvertisementModel->getConfirmedAdvertisement();
        $this->load->view('examples/advertisement', $data);
    }
}