<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contactus extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->library('session');
    $this->load->helper('form');
  }
  /**
   * Index Page for this controller.
   */
  public function index()
  {
    // $this->load->helper('form');
    // $this->load->view('contactus');
  }
  public function sendEmail()
  { 

    // $data = json_decode(file_get_contents('php://input'));
    $emailData = explode(',', $this->input->post('msg'));
    // echo json_encode($emailData);
    $fname = explode(':', $emailData[1])[1];
    $lname = explode(':', $emailData[2])[1];
    $email = explode(':', $emailData[3])[1];
    $phone = explode(':', $emailData[4])[1];
    $msg = explode(':', $emailData[5])[1];
    echo $fname, $lname, $email, $phone, $msg;
    $this->load->library('email');

    // exit();
    $this->email->set_newline("\r\n");

    // $to_email = "s71646004@gmail.com";
    $to_email = $email;


    // shubham.saptarishi@tech-trail.com


    $config['protocol'] = 'smtp';
    $config['smtp_host'] = 'smtp.gmail.com';
    $config['smtp_port'] = '587';
    $config['smtp_user'] = 'shubham.saptarishi@tech-trail.com';
    $config['smtp_pass'] = 'mgpuazfetnvwtwam';
    $config['wordwrap'] = TRUE;
    $config['newline'] = "\r\n";
    $config['mailtype'] = 'html';

    $this->email->initialize($config);

    $this->email->from($config['smtp_user']);
    $this->email->to($to_email);

    $this->email->subject('Send Email Codeigniter');

    $this->email->message('Thank you for contacting Cargotiator!');



    // $dataa = $this->email->send();
    if ($this->email->send()) {
      // return 'yesss';
      $this->session->set_flashdata("email_sent", "Congragulation Email Send Successfully.");
    } else
      $this->session->set_flashdata("email_sent", "You have encountered an error");
    // $this->load->view('contactus');
  }
}
