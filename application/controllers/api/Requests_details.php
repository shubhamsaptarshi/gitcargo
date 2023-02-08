<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Requests_details extends CI_Controller {
public function __construct() {
        parent::__construct();
    }
  /**
   * Index Page for this controller.
   */
  public function index() {
     
  }

  public function bids(){
    $reqid = $this->uri->segment(3);
    $bids = $this->Request_model->getBidsForRequestId($reqid);
    echo json_encode($bids);
  }

}
