<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pricing extends CI_Controller {
public function __construct() {
        parent::__construct();
    }
  /**
   * Index Page for this controller.
   */
public function index() {
     
  }
  public function getRequestDetails(){
    $urlId = $this->uri->segment(3);
    $result = $this->Bids_model->getRequestDetails($urlId);
    echo json_encode($result);
  }
  public function getDealerBidsForRequest(){
    $urlId = $this->uri->segment(3);
    $result = $this->Bids_model->getDealerBidsForRequest($urlId);
    echo json_encode($result);
  }
  public function saveBid(){
    $urlId = $this->uri->segment(3);
    $data = json_decode(file_get_contents('php://input'), true);
    
    $result = $this->Bids_model->saveBid($urlId,$data);
  }
  public function deleteBid(){
    $urlId = $this->uri->segment(3);
    $bidId = $this->uri->segment(4);
    $this->Bids_model->deleteBid($bidId);
  }

}