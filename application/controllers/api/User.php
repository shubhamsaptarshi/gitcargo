<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
public function __construct() {
        parent::__construct();
    }
  /**
   * Index Page for this controller.
   */
  public function index() {
    //TODO Save user
    // $data = array(
    //   'firstname' => $this->input->post('firstname'),
    //   'lastname' => $this->input->post('lastname'),
    //   'useremail' => $this->input->post('useremail'),
    //   'phone' => $this->input->post('phone'),
    // );
    $data = json_decode(file_get_contents('php://input'), true);
    $result = $this->user_model->addUser($data);

    echo json_encode(['successful'=>true,'userid'=>$result]);
    //  echo json_encode(['success' => true]);
  }
  public function getAllUsers(){
    $allData =$this->user_model->getAllUsersData();
    echo json_encode($allData);
  }
  public function getAllusers1(){
    $id = $this->input->get('clientid');
    $this->uri->segment(4);
    $allData = $this->user_model->getAllUser1($id);
    echo json_encode($allData);
  }
  
  public function getUserWithSpecificEmail(){
    $email =  $this->input->get('email');
  // $email = 'pankaj.techtrail@gmail.com';
    $this->uri->segment(4);
    $result = $this->user_model->getUserWithSpecificEmail($email);
    echo json_encode($result);
  }
  public function verifyOTP(){
    $email = $this->input->get('email');
    $otp = $this->input->get('otp');
    $this->uri->segment(4);
    $result = $this->user_model->verifyOTP($email,$otp);
    echo json_encode($result);
  }

  public function login(){
    $data = json_decode($this->input->raw_input_stream);
    $email = $data->useremail;
    $password = $data->userpassword;
    if(($email == null || $email == '') || ($password == null || $password == '')){
      echo json_encode(['successful' => false, 'msg'=>'email or password empty']);
    }else{
      $result = $this->user_model->login($email,$password);
      if(count($result) > 0){
        echo json_encode([ 'message' => 'Authorized', 'settings' => $result[0] ]);
      }else{
        echo json_encode([ 'successful' => false, 'msg' => 'something went wrong', $result ]);
      }
    }
  }

  public function addUser(){
    $data = array(
    'firstname' => $this->input->post('firstname'),
    'lastname' => $this->input->post('lastname'),
    'useremail' => $this->input->post('useremail'),
    'phone' => $this->input->post('phone'),
    'usertype' => $this->input->post('usertype'),
    'userstatus' => $this->input->post('userstatus'),
    'clientid' => $this->input->post('clientid'),
    );
    $result = $this->user_model->addUser($data);
    echo json_encode(['successful'=>true,'userid'=>$result]);
  }
  public function deleteUser(){
    $id = $this->input->post('id');
    $result = $this->user_model->deleteUser($id);
    echo json_encode(['successful' => true]);
  }
  public function editUser(){
    $data = array(
      'lastname' => $this->input->post('lastname'),
      'useremail' => $this->input->post('useremail'),
      'usertype' => $this->input->post('usertype'),
      'clientid' => $this->input->post('clientid'),
      'userstatus' => $this->input->post('userstatus'),
      );
    $id = $this->input->get('id');
    $firstname = $this->input->get('firstname');
    $result = $this->user_model->editUser($id,$firstname,$data);
    echo json_encode(['successful'=>true],$result);
  }
}
