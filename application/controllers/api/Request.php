<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Request extends CI_Controller {
public function __construct() {
        parent::__construct();
    }
  /**
   * Index Page for this controller.
   */
public function index() {
    
  }
  public function getAllRequests(){
    $data = $this->Request_model->allRequest();

    echo json_encode($data);
  
  }
  public function getAllRequests1(){ 
    $id = $this->uri->segment(4);
    $result = $this->Request_model->allRequest1($id);
    echo json_encode($result);
  }

  public function addRequest(){
    // $details = $this->uri->segment(3);
    // $data = $this->input->post();
    $data = json_decode(file_get_contents('php://input'), true);
    $this->Request_model->addRequest($data);

  }

  public function getRequestById(){
    $id = $this->uri->segment(3);
    $this->Request_model->getRequestById($id);
  }
  public function todayDate(){
    $id = $this->uri->segment(4);
    $id1 = 1;
    $data = $this->Request_model->currentRequests1($id1);
    echo ($data) ? json_encode($data) : [];
  }

  //add new request....
  // public function updateEditRequests(){
  public function updateCustRequest(){

    $data = json_decode(file_get_contents('php://input'), true);
    // $result = $this->Request_model->saveRequest($data);
    $result = $this->Request_model->updateCustRequest($data);

    echo json_encode($result);
  }

  // public function updateCustRequest(){
  //   print_r("inside updateCustRequest");
  //   $details = $this->uri->segment(3);
  //   print_r('<br>Details: '.$details);
  // }
  public function updateRequest(){
    print_r("inside updateRequest");
    $details = $this->uri->segment(3);
    print_r('<br>Details: '.$details);
  }
  public function deleteRequests(){
    print_r("inside deleteRequests");
    $id = $this->uri->segment(3);
    print_r('<br>Id: '.$id);
  }
  public function getRequestSharingList(){
    $id = $this->uri->segment(3);
    $result = $this->Request_model->getRequestSharingList($id,true);
    echo json_encode($result);
  }
  
  
  public function lastRequests1(){
    print_r("inside lastRequests1");
    $id = $this->uri->segment(5);
    print_r('<br>Id: '.$id);
  }

  // public function updateCustRequest(){
  //   print_r("inside update request_data");
  //   $details = $this->uri->segment(3);
  //   print_r('<br>Details: '.$details);
  //   $id = $this->uri->segment(4);
  //   print_r('<br>ID: '.$id);

  // }

  public function shareWithDealer()
  {
    $reqid = $this->uri->segment(3);
    // $dealerId = $this->input->post('dealerId');
    $selContacts = json_decode(file_get_contents('php://input'), true);

    $carreq = $selContacts[0]['carreq'];
    $dealeridsWithoutURL = [];
    $contactsReqUnsaved = [];
    $dealerUrlMap = [];
    // print_r(count($selContacts));
    if ($selContacts == 'undefined' || $selContacts == null || count($selContacts) == 0) {
      return;
    }
    for ($i = 0; $i < count($selContacts); $i++) {
      if ($selContacts[$i]['urlid'] == 'undefined' || $selContacts[$i]['urlid'] == null || $selContacts[$i]['urlid'] == '') {
        array_push($dealeridsWithoutURL, $selContacts[$i]['dealerId']);
       
      } else {
        array_push($dealerUrlMap, (object) array("dealerid" => $selContacts[$i]['dealerId'], "urlid" => $selContacts[$i]['urlid']));
      }

      //Request not shared with users
      if ($selContacts[$i]['sharedWithUser'] == 0) {
        // contactsReqUnsaved.push( {'requestid': reqid, 'dealerid': selContacts[i].dealerId, 'contactid': selContacts[i].contactid } );
        array_push($contactsReqUnsaved, (object) array("requestid" => $reqid, "dealerid" => $selContacts[$i]['dealerId'], "contactid" => $selContacts[$i]['contactid']));

      }
    }
    
    if (count($dealeridsWithoutURL) > 0) {
      $data = $this->Request_model->createUrlIds($reqid, $dealeridsWithoutURL);
     
        if($data) {
          $newDealerUrlMap = $data;
    
          for($i=0; $i < count($newDealerUrlMap); ++$i) {
              // $dealerUrlMap.push( $newDealerUrlMap[$i] );
              array_push($dealerUrlMap, (object) $newDealerUrlMap[$i]);
          }
        $this->sendOutNotifications($carreq, $selContacts, $dealerUrlMap);
       

      //     sendOutNotifications(req, res, carreq, selContacts, dealerUrlMap);  
      }
    } else {
      $this->sendOutNotifications($carreq, $selContacts, $dealerUrlMap);
    }
    if(count($contactsReqUnsaved) > 0){
      // print_r('<br>::'.$contactsReqUnsaved);
      $this->Request_model->saveContactReqMap($contactsReqUnsaved);
     }
  }
  function sendOutNotifications( $carreq, $selContacts, $dealerUrlMap){
    $contactsEmailList = $this->getListOfContactToNotify($selContacts, $dealerUrlMap);
    //console.log("Contacts & dealers : "+ JSON.stringify(contactsEmailList), '\n\n\n');
    $this->sendmails($selContacts, $contactsEmailList);
  }
function getListOfContactToNotify($selContacts, $dealerUrlMap){
  //Create list of parties to send email
  $contactsEmailList = [];
  $urlid = null;
  for ($i=0; $i < count($selContacts); $i++) {
      $urlid = $this->findUrlId($dealerUrlMap, $selContacts[$i]['dealerId']);
      // print_r('<br>this is url id'.$urlid);


      if(!$this->isEmailAdded($contactsEmailList, $selContacts[$i]['dealerId'], $selContacts[$i]['email']) 
          && $urlid != null && strlen($urlid) > 0){
          array_push( $contactsEmailList, (object) array("name" => $selContacts[$i]['name'],"email" => $selContacts[$i]['email'],
                                                          "dealerid" => $selContacts[$i]['dealerId'],"type" => "individual", "urlid" => $urlid
                    )
          
          );
      }
  }
 
  return $contactsEmailList;
}

function sendmails($selContacts, $contactsEmailList){
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
  $this->email->to($selContacts[0]['email']);

  $this->email->subject('New inquiry from Cargotiator!');

  $message = 'Hello ' . $selContacts[0]['name'] . ',<br><br>'
      . 'We have received an inquiry from our customer. Our customer is looking for a <strong>' . $selContacts[0]['carreq'] . '</strong> .'
      . 'You can view the request details and submit your pricing information using the link below:<br>'
      . base_url() . '#/pricing/' . $selContacts[0]['urlid'] . '<br><br>'
      . 'Please keep this email for future reference as this will be the email you used to add, modify or update any further pricing.'
      . '<br><br>The Cargotiator Team';
  $this->email->message($message);

  if ($this->email->send()) {
    // return 'yesss';
    $this->session->set_flashdata("email_sent", "Congragulation Email Send Successfully.");
  } 
}

function findUrlId($dealerUrlMap, $dealerid){
    // print_r($dealerUrlMap);
  for($i=0; $i < count($dealerUrlMap); $i++){
      if($dealerUrlMap[$i]->dealerid == $dealerid){
          return $dealerUrlMap[$i]->urlid;
      }
  }
  return '';
}
function isEmailAdded($contactsEmailList, $dealerid, $email){
  for($i=0; $i < count($contactsEmailList) ;$i++){
      if($contactsEmailList[$i]->dealerid == $dealerid 
          && strtolower($contactsEmailList[$i]->email) == strtolower($email)){
          return true;
      }
  }
  return false;
}



}
