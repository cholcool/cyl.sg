<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forms extends CI_Controller {

  function __Construct(){
    parent::__Construct();
    $this->load->helper(array('form', 'url'));
    $this->load->library(array('session', 'form_validation', 'email')); 
    $this->load->database();
    $this->load->model('forms_model');
    }   

  public function index()
  {
    $this->load->view('formbooking_view');
  }

  public function registration()
  {
    $this->form_validation->set_rules('fname', 'First Name', 'required');
    $this->form_validation->set_rules('lname', 'Last Name', 'required');
    $this->form_validation->set_rules('phone', 'Phone', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required');
    $this->form_validation->set_rules('dates', 'Date');
    $this->form_validation->set_rules('times', 'Time');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('formbooking_view');
        }
        else
        {

          $fname = $_POST['fname'];
          $lname = $_POST['lname'];
          $phone = $_POST['phone'];
          $email = $_POST['email'];
          $dates = $_POST['dates'];
          $times = $_POST['times'];
          $message = $_POST['message'];
          //menu
          $detox = $this->input->post('detox');
          $restoring = $this->input->post('restoring');
          $regrowth = $this->input->post('regrowth');
          $boosting = $this->input->post('boosting');
          $menu1 = $detox . ',' . $restoring . ',' . $regrowth . ',' . $boosting;
          //SCALP TREATMENT
          $signature = $this->input->post('signature');
          $intensive = $this->input->post('intensive');
          $deep = $this->input->post('deep');
          $menu2 = $signature . ',' . $intensive . ',' . $deep;
          //HAIR TREATMENT
          $h_service = $this->input->post('h_service');
          $menu3 = $h_service;
          //HAIR SERVICE
          $other_c = (isset($_POST['other_c'])) ;
          $other = $_POST['other'];
          $menu4 =  $other_c . ',' . $other;

      $data = array(
              'fname' => $fname,
              'lname' => $lname,
              'phone' => $phone,
              'email' => $email,
              'dates' => $dates,
              'times' => $times,
              'menu1'  => $menu1,
              'menu2'  => $menu2,
              'menu3'  => $menu3,
              'menu4'  => $menu4,
              'message' => $message
            );

      if($this->forms_model->insertuser($data))
      {
        if($this->sendemail($email))
        {
          // successfully sent mail to user email
                    $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Sent to your email to complete the Appointment.</div>');
                    redirect(base_url());

        }
        else
        {
          $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Send Mail : Error! <br>Please try again ...</div>');
                    redirect(base_url());
                }
      }
      else
      {
        $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Something Wrong. Please try again ...</div>');
                    redirect(base_url());
      }
        }
  }

  function sendemail($email){

          $fname = $_POST['fname'];
          $lname = $_POST['lname'];
          $phone = $_POST['phone'];
          $email = $_POST['email'];
          $dates = $_POST['dates'];
          $times = $_POST['times'];
          $message = $_POST['message'];
          //menu
          $detox = $this->input->post('detox');
          $restoring = $this->input->post('restoring');
          $regrowth = $this->input->post('regrowth');
          $boosting = $this->input->post('boosting');
          $menu1 = $detox . ',' . $restoring . ',' . $regrowth . ',' . $boosting;
          //SCALP TREATMENT
          $signature = $this->input->post('signature');
          $intensive = $this->input->post('intensive');
          $deep = $this->input->post('deep');
          $menu2 = $signature . ',' . $intensive . ',' . $deep;
          //HAIR TREATMENT
          $h_service = $this->input->post('h_service');
          $menu3 = $h_service;
          //HAIR SERVICE
          $other_c = $_POST['other_c'];
          $other = $_POST['other'];
          $menu4 =  $other_c . ', ' . $other;

    // configure the email setting
    $email_to = 'askme@cyl.sg';
    $email_c = 'info@miraimedia.co.th';
    // configure the email setting
        $config['mailtype'] = 'html';
        $config['charset'] = 'utf-8';
        $config['wordwrap'] = TRUE;
        $config['newline'] = "\r\n"; //use double quotes
        $this->email->initialize($config);
        $this->email->from('no-reply@cyl.sg', 'CYL Booking Form');
        $this->email->reply_to('no-reply@cyl.sg', 'No-reply');
    $this->email->to($email_to); 
    $this->email->cc($email_c);
    $this->email->bcc('chanashol@miraimedia.co.th');
    $this->email->subject('Booking from Website CYL');
    $message = "<h2 style='text-decoration: underline;'>APPOINTMENT</h2><p><strong>First Name</strong></p><p>".$fname."</p><p><strong>*Last Name</strong></p><p>".$lname."</p><p><strong>*Phone</strong></p><p>".$phone."</p><p><strong>*Email</strong></p><p>".$email."</p><p><strong>*Date</strong></p><p>".$dates."</p><p><strong>Time</strong></p><p>".$times."</p><p><strong>SCALP TREATMENT</strong></p><p>".$menu1."</p><p><strong>HAIR TREATMENT</strong></p><p>".$menu2."</p><p><strong>HAIR SERVICE</strong></p><p>".$menu3."</p><p><strong>OTHER</strong></p><p>".$menu4."</p><p><strong>Message</strong></p><p>".$message."</p>";
    $this->email->message($message);
    return $this->email->send();
    }

    public function confirmation()
    {
        if($this->user_model->verifyemail())
        {
            $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Your Email Address is successfully verified!</div>');
            redirect(base_url());
        }
        else
        {
            $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Your Email Address Verification Failed. Please try again later...</div>');
            redirect(base_url());
        }
    }

}