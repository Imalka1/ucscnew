<?php
/**
 * Created by IntelliJ IDEA.
 * User: Imalka Gunawardana
 * Date: 2018-12-05
 * Time: 2:08 PM
 */

class Vacancy extends CI_Controller
{
    public function index()
    {
        $this->load->model('User');
        $data['operators'] = $this->User->getOperators();

        $this->load->view('examples/vacancy', $data);
    }
}