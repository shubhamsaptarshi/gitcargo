<?php
class Channel_model extends CI_Model{
    public function allChannels(){
        $this->db->select('c.id, c.client_name, c.client_email, c.client_contact,c. channel_url, c.createdAt, c.updatedAt');
        $this->db->from('channel c');
        return $this->db->get()->result();
    }
    //add channel..
    public function addChannel($data){
   
    
       $this->db->insert('channel',$data);
       $id=$this->db->insert_id();
       
    }
    public function deleteChannel($id){
      

        $result = $this->db->query('delete from channel where id in (?)',array($id));

        
    }
    public function editChannel($id1,$data){
      
        

        $this->db->where('id',$id1);
        
        $this->db->update('channel',$data);

    }
}
