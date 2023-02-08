<?php
class Cargotiator_model extends CI_Model{
    public function getAllRequests(){
        $this->db->select('r.requestid, r.createdAt, r.dealtype, r.modeltrade, r.make, r.model, r.trim');
        $this->db->from('requests r');
       return $this->db->get()->result();
        
    }
    // public function getYearData(){
    //     $this->db->select('t model_year');
    //     $this->db->from('tbl_03_model t');
    //     $this->db->where('t model_year' >= year(now()));

    // }
    public function getCargotiatorById($id){
        $this->db->select('r.requestid, r.dealtype, r.leaseterm, r.milesperyear, r.downpayment, r.year, r.make, r.model, r.trim, r.exteriorcolor, r.interiorcolor, r.drivetype, r.milesfrom, r.zip, r.additionalcomments, r.yeartrade, r.maketrade, r.modeltrade, r.trimtrade, r.drivetypetrade, r.miles, r.firstowner, r.vin, r.beeninaccident, r.additionalcommentstrade, r.createdAt, r.updatedAt, r.trade, r.userid, r.status');
        $this->db->from('requests r');
        $this->db->where('r.requestid',$id);
        return $this->db->get()->result();
    }
    public function getCargotiatorByYear($year){
        $this->db->select('t.model_make_id');
        $this->db->from('tbl_03_model t');
        $this->db->where('t.model_year',$year);
        return $this->db->get()->result();
        // $result = $this->db->query('select distinct model_make_id from tbl_03_model where model_year=? order by model_make_id ASC',array($year));
        // return $result;

    }
    public function getCargotiatorByMake($make,$year){
        $this->db->select('t.model_make_id');
        $this->db->from('tbl_03_model t');
        $this->db->where('t.model_make_id',$make);
        $this->db->where('t.model_year',$year);

        return $this->db->get()->result();
    }
    public function getCargotiatorByModel($year,$make,$model){
        $this->db->select('t.model_trim');
        $this->db->from('tbl_03_model t');
        $this->db->where('t.model_year',$year);
        $this->db->where('t.model_make_id',$make);
        $this->db->where('t.model_name',$model);

        return $this->db->get()->result();
    }
    public function getCargotiatorByTrim($year, $make, $model, $trim){
        $this->db->select('t.model_trim');
        $this->db->from('tbl_03_model t');
        $this->db->where('t.model_year',$year);
        $this->db->where('t.model_make_id',$make);
        $this->db->where('t.model_name',$model);

        return $this->db->get()->result();
    }
// ----------------------------------------------------------------------------------------------
// ----------------------------------------------------------------------------------------------
    public function getActiveYears() {
        $this->db->distinct();
        $this->db->select('t.model_year');
        $this->db->from('tbl_03_model t');
        $this->db->where('t.model_year >= YEAR(now()) - 1');
        $this->db->order_by('t.model_year');
        return $this->db->get()->result();
    }
    public function getYear($year) {
        // print_r("getYear_________________________");
        $this->db->distinct();
        $this->db->select('t.model_name');
        $this->db->from('tbl_03_model t');
        $this->db->where('model_year',$year);
        // $this->db->order_by('t.model_year');
        // return $this->db->get()->result();
        return $this->db->get()->result();
        // print_r($data);
        // return $result->result();

        
    }
    public function getMake($year,$make) {
        // $this->db->distinct();
        $this->db->select('t.model_name');
        $this->db->from('tbl_03_model t');
        $this->db->like('model_make_id',$make);
        $this->db->where('model_year',$year);
        $this->db->order_by('t.model_year');
        return $this->db->get()->result();
       
    }
    public function getModel($year,$make,$model) {
        $this->db->distinct();
        $this->db->select('t.model_trim');
        $this->db->from('tbl_03_model t');
        $this->db->like('model_name',$model);
        $this->db->or_like('model_make_id',$make);
        $this->db->where('model_year',$year);
        $this->db->order_by('t.model_year');
        // return $this->db->get()->result();
        $data = $this->db->get()->result();
        print_r($data);
    }
    //to delete paticular cargotiator..
    public function deleteCargo($id){

        $this->db->where('requestid',$id);
        $this->db->delete('requests');
    }
}
