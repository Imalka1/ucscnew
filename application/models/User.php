<?php

class User extends CI_Model
{
    private $sql;
    private $password;

    public function __construct()
    {
        parent::__construct();
    }

    public function getUserData()
    {
        $email = $this->input->post('email');
        $this->password = $this->input->post('password');
        $accountType = $this->input->post('accountType');
        $this->load->database();
        $this->sql = $this->db->query("SELECT email,password,accountType FROM user where email=? && accountType=?", array($email, $accountType));
        return $this->sql->result();
    }

    public function getRowCount()
    {
        return $this->sql->num_rows();
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getStaff()
    {
        $email = $this->input->post('email');
        $this->load->database();
        $this->sql = $this->db->query("SELECT title,sid,name FROM staff s,user u where u.email=s.email && s.email=?", array($email));
        return $this->sql->result()[0];
    }

    public function getOperators()
    {
        $this->load->database();
        $this->sql = $this->db->query("SELECT title,s.email,name FROM staff s,user u where u.email=s.email && u.accountType='operator'");
        return $this->sql->result();
    }

    public function getNotificationCount(){
        $this->load->database();
        $this->sql = $this->db->query("SELECT notified from advertisement where adid=1");
        return $this->sql->result()[0];
    }
}

?>
