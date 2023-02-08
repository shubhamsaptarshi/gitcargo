<?php
class Contact_model extends CI_Model{

    public function addContact($data){
        // print_r("this data from addContact model");
        // print_r($data);
        if ($data['contactId'] == 'undefined' || $data['contactId'] == null || $data['contactId'] == '' || $data['contactId'] == 0 || $data['contactId'] == 'null') {
            $this->db->insert('dealers_contact', $data);
        } else {
            $id = $data['contactId'];
            $this->db->where('contactId', $id);
            $this->db->update('dealers_contact',$data);
        }

    }
}