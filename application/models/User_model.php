<?php
/**
 * 
 */
class User_model extends CI_Model {

public function getAllUsersData(){
  $this->db->select('u.userid, u.firstname, u.lastname, u.useremail, u.phone, u.usertype,u.clientid, u.userstatus');
  $this->db->from('users u');
  $this->db->order_by('u.userid','DESC');
  $data = $this->db->get()->result();
  return $data;
}
public function getAllUser1($id){
  $this->db->select('u.userid, u.firstname, u.lastname, u.useremail, u.phone, u.usertype, u.clientid, u.userstatus');
  $this->db->from('users u');
  $this->db->where('clientid', $id);
  $data = $this->db->get()->result();
  return $data;
}
public function getUserWithSpecificEmail($email){
  $this->db->select('u.userid, u.firstname, u.lastname, u.useremail, u.phone, u.usertype,u.clientid, u.userstatus');
  $this->db->from('users u');
  $this->db->where('u.useremail', $email);
  return $this->db->get()->result();
}
//login with email and password...
public function login($email,$password){
  $this->db->select('u.userid,u.userpassword');
  $this->db->from('users u');
  $this->db->where('u.useremail',$email);
  $this->db->where('u.userpassword IS NOT NULL', NULL, FALSE);
  $userpwd = $this->db->get()->result();
  if($userpwd && count($userpwd) > 0 
      // && $this->encrypt->decode($userpwd[0]->userpassword) == $password){
     ){


    $this->db->select('u.userid, u.firstname, u.lastname, u.useremail, u.phone, u.usertype,u.clientid, u.userstatus');
    $this->db->from('users u');
    $this->db->where('u.userid', $userpwd[0]->userid);
    return $this->db->get()->result();

  }
  return [];
}
//verify otp with specific email...
public function verifyOTP($email,$otp){
  $this->db->select('count(u.otp) as otpresult');
  $this->db->from('users u');
  $this->db->where('u.useremail',$email);
  $this->db->where('u.otp',$otp);
  return $this->db->get()->result();

}
public function addUser($data){
  $this->db->insert('users',$data);
  $userid=$this->db->insert_id();
  return $userid;
}
public function deleteUser($id){
  // $this->db->query("delete from users where userid ='$id'");
  $this->db->where('userid',$id);
  $del = $this->db->delete('users');
  return $del;
}
public function editUser($id,$firstname,$data){
  $this->db->where('userid', $id);
  $this->db->where('firstname', $firstname);
  $this->db->update('users',$data);
  return $id;


}
}
