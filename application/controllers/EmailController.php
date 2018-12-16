<?php
/**
 * Created by IntelliJ IDEA.
 * UserModel: Imalka Gunawardana
 * Date: 2018-12-05
 * Time: 7:58 PM
 */

class EmailController
{
    function __construct()
    {

    }

    public function send_mail($emailOb, $operatorEmail, $txtDetails)
    {
        $from_email = "webphpjava@gmail.com";
        $emailOb->set_mailtype("html");
        $emailOb->from($from_email, $_SESSION["username"]);
        $emailOb->subject('Vacancy Details');
        $email = explode(' - ', $operatorEmail)[1];
        $to_email = substr($email, 1, strlen($email) - 2);
        $emailOb->to($to_email);
        $emailOb->message($txtDetails);

        //Send mail
        if ($emailOb->send()) {
//            $this->session->set_flashdata("email_sent", "Email sent successfully.");
            redirect(base_url() . "sar/vacancy?email=success");
        } else {
//            $this->session->set_flashdata("email_sent", "Error in sending Email.");
            redirect(base_url() . "sar/vacancy?email=failed");
        }
    }

    public function sendMailToApplicant($emailOb, $email, $data)
    {
        $from_email = "webphpjava@gmail.com";
        $emailOb->set_mailtype("html");
        $emailOb->from($from_email, 'UCSC Application');
        $emailOb->subject('Login Details');
        $emailOb->to($email);
        $emailOb->message($data['id']);

        //Send mail
        $emailOb->send();
    }
}