<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dealer extends CI_Controller {
public function __construct() {
        parent::__construct();
    }
  /**
   * Index Page for this controller.
   */
public function index() {
     
  }

public function addDealer(){
  
  $data = json_decode(file_get_contents('php://input'), true);
  $dealerId = $this->Dealer_model->addDealer($data);
  
  echo json_encode($dealerId);

}
public function getAllDealers(){
  $allData = $this->Dealer_model->getAllDealers();
  echo json_encode($allData);
}

public function getAllmfg(){
  $allData = $this->Dealer_model->getAllmfg();
  echo json_encode($allData);
}
public function deleteDealers(){
  // $id = $this->input->get('id');
  $id = $this->uri->segment(3);
  $result = $this->Dealer_model->deleteDealers($id);
  echo json_encode(['successful'=>true],$result);
}

public function getAllDealersWithContact(){
  $result = $this->Dealer_model->getAllDealersWithContact();
  // print_r($result);
  echo json_encode($result);

}
public function getContactsByDealer(){
  $id = $this->input->get('id');
  $result = $this->Dealer_model->getContactsByDealer($id);
  echo json_encode($result);

}
public function editDealers(){
  $id = $this->input->post('id');

  $result = $this->Dealer_model->editDealers($id);
}
public function getDealerById(){
  $id = $this->uri->segment(3);
  $result = $this->Dealer_model->getDealerById($id);
  echo json_encode($result);

}


}