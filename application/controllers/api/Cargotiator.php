<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cargotiator extends CI_Controller {
  public function __construct() {
          parent::__construct();
      }
    /**
     * Index Page for this controller.
     */


  public function index() {
    // $id = $this->uri->segment(2);
    // print_r('getAllRequests :'.$id);
    print_r('getAllRequests :');

    //addChannel
  }

  public function vehicles() {  
    $year = $this->uri->segment(3);
    // print_r('Year: '.$year);
    $make = $this->uri->segment(4);
    // print_r('<br>Make: '.$make);
    $model = $this->uri->segment(5);
    // print_r('<br>Model: '.$model);
    $trim = $this->uri->segment(6);
    // print_r('<br>Trim: '.$trim);

    if($year && $make && $model && $trim){
      // print_r("inside [year] [make] [model] [trim]");
      // $allData = $this->Cargotiator_model->getCargotiatorByYear($year);
      $allData = $this->Cargotiator_model->getCargotiatorByTrim($year);

      echo json_encode($allData);
    }
    else if($year && $make && $model){
      // print_r("inside [year] [make] [model]");
      // print_r('<br>'.$year);
      // print_r('<br>'.$make);
      // print_r('<br>'.$model);

      // $allData = $this->Cargotiator_model->getModel($year,$make,$model);
      $allData = $this->Cargotiator_model->getCargotiatorByModel($year,$make,$model);

      // print_r("allData");
      // print_r($allData);
      echo json_encode($allData);
    }
    else if($year && $make){
      // print_r("inside [year] and [make]");
      // print_r($make);
      // print_r($year);
      $allData = $this->Cargotiator_model->getMake($year,$make);
      // $allData = $this->Cargotiator_model->getCargotiatorByMake($year,$make);

      echo json_encode($allData);

    }
    else if($year){
      // $allData = $this->Cargotiator_model->getYear($year);
      $allData = $this->Cargotiator_model->getCargotiatorByYear($year);

      echo json_encode($allData);
    }
    else{
      print_r("else block");
    }
  }
  // public function vehicles() {  
  //   $this->year = $this->uri->segment(3);
  //   print_r('Year: '.$this->year);
  //   $this->make = $this->uri->segment(4);
  //   print_r('<br>Make: '.$this->make);
  //   $this->model = $this->uri->segment(5);
  //   print_r('<br>Model: '.$this->model);
  //   $this->trim = $this->uri->segment(6);
  //   print_r('<br>Trim: '.$this->trim);

    
  // }
  public function activeyears(){
    $allData =$this->Cargotiator_model->getActiveYears();
    echo json_encode($allData);
  }
  public function cargoById(){
    print_r("inside cargoById");

    $id = $this->uri->segment(4);
    print_r('<br>id:'.$id);
    $allData = $this->Cargotiator_model->getCargotiatorById($id);
    echo json_encode($allData);
  }
  public function deleteAllCargo(){
    print_r("inside deleteAllCargo");
    $id = $this->uri->segment(3);
    print_r('<br>id:'.$id);
  }
  public function deleteCargotiator(){
    $id = $this->uri->segment(3);
    $data= $this->Cargotiator_model->deleteCargo($id);
    echo json_encode($data);
  }
  public function updateCargotiator(){
    print_r("inside updateCargotiator");
    $id = $this->uri->segment(3);
    print_r('<br>id:'.$id);
  }
  
  public function getCargotiatorByYear(){
    print_r('in cargotiator by year module function!!!');
  }
 

  // public function make($year){
  //   // $veh_data = $this->vehicles();
  
    
  //   $allData =$this->Cargotiator_model->getMake();
  //   echo json_encode($allData);
  // }

  // public function getAllRequests(){
  //   $allData =$this->Cargotiator_model->getAllRequests();
  //     echo json_encode($allData);
  // }
  // public function getCargotiatorById(){
  //   $id = $this->input->get('id');
  //   $this->uri->segment(4);
  //   $allData =$this->Cargotiator_model->getCargotiatorById($id);
  //     echo json_encode($allData);
  // }
  // public function getCargotiatorByYear(){
  //   $year = $this->input->get('year');
  //   $this->uri->segment(4);
  //   $allData =$this->Cargotiator_model->getCargotiatorByYear($year);
  //     echo json_encode($allData);
  // }
  // public function getCargotiatorByMake(){
  //   $make = $this->input->get('make');
  //   $year = $this->input->get('year');
  //   $this->uri->segment(4);
  //   $allData =$this->Cargotiator_model->getCargotiatorByMake($make,$year);
  //     echo json_encode($allData);
  // }
  // public function getCargotiatorByModel(){
  //   $year = $this->input->get('year');
  //   $make = $this->input->get('make');
  //   $model = $this->input->get('model');
  //   $this->uri->segment(4);
  //   $allData =$this->Cargotiator_model->getCargotiatorByModel($year,$make,$model);
  //     echo json_encode($allData);
  // }
  
}
