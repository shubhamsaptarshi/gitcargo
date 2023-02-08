<?php

/**
 * 
 */
class Dealer_model extends CI_Model
{
    public function getAllDealers()
    {
        // $this->db->select('dealerId, name, city, state, zip, email, mobile, address, status, updatedBy');
        $result = $this->db->query('SELECT dealerId, name, city, state, zip, email, mobile, address, status, updatedBy, 
    createdAt, updatedAt, website,(SELECT GROUP_CONCAT(dmm.mfgName) FROM dealers_mfg_map dmm WHERE dmm.dealerId = d.dealerId) AS mfg, 
    (SELECT CONCAT(firstname, lastname) FROM dealers_contact dc WHERE dc.dealerid = d.dealerId AND dc.sequenceno = 1) AS firstcontact, 
    (SELECT mobile FROM dealers_contact dc WHERE dc.dealerid = d.dealerId AND dc.sequenceno = 1) AS firstmobile FROM dealers d');

        return $result->result();
    }





    public function getAllmfg()
    {
        $this->db->select('dmm.dealerId,dmm.mfgName');
        $this->db->from('dealers_mfg_map dmm');
        $data = $this->db->get()->result();
        return $data;
    }
    public function deleteDealers($id)
    {
        $this->db->where('dealerId', $id);
        $dealerid = $this->db->delete('dealers');
        return $dealerid;
    }
    public function getContactsByDealer($id)
    {
        $this->db->select('b.contactId, b.dealerId, a.name, CONCAT(b.firstname, " " , b.lastname) as contactname, b.firstname, b.lastname, b.email, b.mobile, b.jobTitle, b.sequenceno');
        $this->db->from('dealers a');
        $this->db->join('dealers_contact b', 'a.dealerId = b.dealerId');
        $this->db->where('a.dealerId', $id);
        return  $this->db->get()->result();
    }
    public function getAllDealersWithContact()
    {
        $this->db->select('b.contactId, b.dealerId, a.name, CONCAT(b.firstname," ", b.lastname) as contactname, b.firstname, b.lastname, b.email, b.mobile, b.jobTitle, b.sequenceno');
        $this->db->from('dealers a');
        $this->db->join('dealers_contact b', 'a.dealerId = b.dealerId');
        // $this->db->where();
        $data = $this->db->get()->result();
        return $data;
    }
    public function addDealer($data)
    {
        
        if ($data['dealerId'] == 'undefined' || $data['dealerId'] == null || $data['dealerId'] == '' || $data['dealerId'] == 0 || $data['dealerId'] == 'null') {
            
            $mfg = $data['mfg'];
            unset($data['mfg']);

            $this->db->insert('dealers', $data);
            $id = $this->db->insert_id();

            $mfgData = array();
            for ($i = 0; $i < count($mfg); $i++) {
                $mfgData[] = array(
                    'mfgName' => $mfg[$i],
                    'dealerId' => $id,
                );
                // array_push($mfgData, array($mfg[$i], $id));
            }
            $this->db->insert_batch('dealers_mfg_map', $mfgData);
            $mfg_id = $this->db->insert_id();
            return $id;
        } 
        else {
            unset($data['mfg']);
            $id = $data['dealerId'];
            $this->db->where('dealerId', $id);
            $this->db->update('dealers',$data);
        }
      
    }
    public function getDealerById($id){
        $result = $this->db->query('SELECT d.dealerId, d.name, d.city, d.state, d.zip, d.email, d.mobile, d.address, d.status, d.updatedBy, d.createdAt, d.updatedAt, d.website, (select GROUP_CONCAT(dmm.mfgName) from dealers_mfg_map dmm where dmm.dealerId = d.dealerId) as mfg from dealers d where dealerId = '.$id);
        $data = [$result->result()[0]];
        $contact_data = $this->getContactsByDealer($id);
        array_push($data, (object) array('contacts' => $contact_data));
        return $data;
    }
    
}
