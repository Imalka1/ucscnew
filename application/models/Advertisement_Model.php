<?php
/**
 * Created by IntelliJ IDEA.
 * User: Imalka Gunawardana
 * Date: 2018-12-07
 * Time: 2:25 PM
 */

class Advertisement_Model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function setNotifyTo0()
    {
        $this->load->database();
        $this->db->query("update advertisement set notified=0 where adid=1");
    }

    public function getAdvertisement()
    {
        $this->load->database();
        $sql = $this->db->query("SELECT message FROM advertisement where adid=1");
        return $sql->result();
    }

    public function getConfirmedAdvertisement()
    {
        $this->load->database();
        $sql = $this->db->query("SELECT message FROM advertisement where adid=1 && confirmed=1");
        return $sql->result();
    }

    public function confirmAdvertisement()
    {
        $this->load->database();
        $this->db->query("update advertisement set confirmed=1 where adid=1");
    }
}