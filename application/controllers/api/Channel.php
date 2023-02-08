<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Channel extends CI_Controller {
public function __construct() {
        parent::__construct();
    }
  /**
   * Index Page for this controller.
   */
public function index() {
     echo "welcome to channel controller";
      $this->uri->segment(3);
     print_r("<br>get all channels");

  }

public function channel_data(){
  print_r("inside channel");

  $id = $this->uri->segment(4);
  print_r('<br>Id: '.$id);
  $name = $this->uri->segment(5);
  print_r('<br>Name: '.$name);
  if($id){
    // $allData = $this->Cargotiator_model->getCargotiatorByYear($year);
    // echo json_encode($allData);
  }
  else if($id && $name){

  }

}
public function getAllChannels(){
  
  $data = $this->Channel_model->allChannels();

  echo json_encode($data);
  
}
public function addChannel(){

  $data = json_decode(file_get_contents('php://input'), true);
  
  $this->Channel_model->addChannel($data);

}
public function deleteChannels(){

  $id = $this->uri->segment(3);
 
  $this->Channel_model->deleteChannel($id);

}
public function editChannels(){
 
  $id = $this->uri->segment(3);
  $data = json_decode(file_get_contents('php://input'), true);
  $this->Channel_model->editChannel($id,$data);

}
}
