<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
public function __construct() {
        parent::__construct();
    }
  /**
   * Index Page for this controller.
   */
public function index() {
     
  }
public function addContact(){
  $data = json_decode(file_get_contents('php://input'), true);
    
    $this->Contact_model->addContact($data);
}  


}
