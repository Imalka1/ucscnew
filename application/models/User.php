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
        $this->sql = $this->db->query("SELECT email,password FROM user where email=? && accountType=?", array($email, $accountType));
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

    public function getInterviewerUsername()
    {
        $email = $this->input->post('email');
        $this->load->database();
        $this->sql = $this->db->query("SELECT name FROM interviewer i,user u where u.email=i.email && i.email=?", array($email));
        return $this->sql->result()[0]->name;
    }
}

?>
