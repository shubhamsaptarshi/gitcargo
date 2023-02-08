<?php
class Bids_model extends CI_Model{
    public function getRequestDetails($urlId){
        $sql = 'SELECT r.requestid, drm.dealerId, r.dealtype, r.leaseterm, r.milesperyear, r.downpayment, r.year, 
         r.make, r.model, r.trim, r.exteriorcolor, r.interiorcolor, r.drivetype, r.milesfrom, r.zip, r.status, 
         r.additionalcomments, r.yeartrade, r.maketrade, r.modeltrade, r.trimtrade, r.drivetypetrade, r.UserId, 
         r.miles, r.firstowner, r.vin, r.additionalcommentstrade, IF( r.beeninaccident = "1", "Yes", "No" ) as beeninaccident, 
         DATE_FORMAT(r.createdAt, "%m-%e-%Y") as createdAt, IF( r.trade = "1", "Yes", "No" ) as trade 
         FROM requests r JOIN dealers_requests_map drm ON r.requestid=drm.requestid 
         WHERE drm.urlId ="'.$urlId.'"';
         $result = $this->db->query( $sql );
         return $result->result();
    }
    public function getDealerBidsForRequest($urlId){
        $temp = $urlId;
        $sql = 'SELECT brd.requestbidId, brd.dealerId, brd.requestId, brd.modeltrim, brd.exteriorcolor, brd.interiorcolor, brd.msrp, brd.mfgdiscountrebates, brd.dealerdiscount, brd.tradeprice, brd.updatedAt, brd.updatedby, brd.documentationfee, brd.warranties, brd.status, brd.finalprice, brd.monthlypayment, brd.bidrelatednotes, brd.traderelatednotes FROM bid_request_details brd JOIN dealers_requests_map drm ON brd.requestId = drm.requestId AND brd.dealerId = drm.dealerId WHERE drm.urlId =\''.$temp.'\'';
        $result = $this->db->query( $sql )->result();
        return $result;
    }
    //for add new bid details through popup...
    public function saveBid($urlId,$data){
    //  unset($data['bidid']);
    $form_data = array(
        'dealerId' => $data['dealerId'],
        'requestId' => $data['requestId'],
        'msrp' => (int) $data['msrp'],
        'mfgdiscountrebates' => (int) $data['mfgdiscountrebates'],
        'dealerdiscount' => (int) $data['dealerdiscount'],
        'tradeprice' => (int) $data['tradeprice'],
        'documentationfee' => (int) $data['documentationfee'],
        'warranties' => (int) $data['warranties'],
        'finalprice' => (int) $data['finalprice'],
        'monthlypayment' => (int) $data['monthlypayment'],
        'modeltrim' => $data['modeltrim'],
        'exteriorcolor' => $data['exteriorcolor'],
        'interiorcolor' => $data['interiorcolor'],
        'bidrelatednotes' => $data['bidrelatednotes'],
        'traderelatednotes' => $data['traderelatednotes'],
        'status' => 'Open'
    );
        if ($data['bidid'] == 'undefined' || $data['bidid'] == null || $data['bidid'] == 0) {
        
            $this->db->insert('bid_request_details', $form_data);
            $requestbidId = $this->db->insert_id();
            return $requestbidId;
        } else {
            $this->db->where('requestbidId',$data['bidid']);
            $this->db->update('bid_request_details', $form_data);
        }
    }
    public function deleteBid($bidId){
        $this->db->where('requestbidId', $bidId);
        $this->db->delete('bid_request_details');
    }
}