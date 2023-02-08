<?php
/**
 * 
 */
class Request_model extends CI_Model {
    public function allRequest(){
        // error_log("inside allRequest");
        $result = $this->db->query('SELECT a.requestid, a.dealtype, a.leaseterm, a.milesperyear, a.downpayment, a.year, a.make, a.model,
         a.trim, a.exteriorcolor, a.interiorcolor, a.drivetype, a.milesfrom, a.zip, a.additionalcomments, a.yeartrade, 
         a.maketrade, a.modeltrade, a.trimtrade, a.drivetypetrade, a.miles, a.firstowner, a.vin, a.beeninaccident, 
         a.additionalcommentstrade, DATE_FORMAT(a.createdAt, "%m-%e-%Y") as createdAt, IF( a.trade = "1", "Yes", "No" ) as trade, 
         a.UserId, CONCAT(b.firstname,  \' \', b.lastname) as username, b.useremail, b.phone, b.clientid, b.userstatus, b.useraction, a.status, 
         (SELECT count(1) FROM dealers_requests_map drm WHERE drm.requestid = a.requestid) AS dealercount 
         FROM requests a  join users b on  a.userid=b.userid ORDER BY requestid DESC');
         return $result->result();

    }
    public function allRequest1($id){
        $sql = 'SELECT a.requestid, a.dealtype, a.leaseterm, a.milesperyear, a.downpayment, a.year, a.make, a.model, 
        a.trim, a.exteriorcolor, a.interiorcolor, a.drivetype, a.milesfrom, a.zip, a.additionalcomments, a.yeartrade, 
        a.maketrade, a.modeltrade, a.trimtrade, a.drivetypetrade, a.miles, a.firstowner, a.vin, a.beeninaccident, 
        a.additionalcommentstrade, DATE_FORMAT(a.createdAt, "%m-%e-%Y") as createdAt, IF( a.trade = "1", "Yes", "No" ) as trade, 
        a.UserId, CONCAT(b.firstname,  \' \', b.lastname) as username, b.firstname, b.lastname, b.useremail, b.phone, b.clientid, b.userstatus, b.useraction, a.status, 
        (SELECT count(1) FROM dealers_requests_map drm WHERE drm.requestid = a.requestid) AS dealercount 
        FROM requests a  join users b on  a.userid=b.userid WHERE  a.requestid='.$id;
        $result = $this->db->query( $sql );
        return $result->result();
    }
    public function addRequest($data){
        
        // $result = $this->db->query('insert into requests (dealtype,leaseterm,milesperyear,downpayment,year,make,model,trim,exteriorcolor,interiorcolor,drivetype,milesfrom,zip,additionalcomments, trade, yeartrade,maketrade,modeltrade,trimtrade,drivetypetrade,miles,firstowner,vin,beeninaccident,additionalcommentstrade, userid, createdAt,updatedAt,status)',array($data));
        unset($data['firstname']);
        unset($data['lastname']);
        unset($data['useremail']);
        unset($data['phone']);
        $this->db->insert('requests',$data);
        $id = $this->db->insert_id();
        // return $id;
    }
    public function getRequestById($id){
       $result = $this->db->query('SELECT a.requestid, a.dealtype, a.leaseterm, a.milesperyear, a.downpayment, a.year, a.make, a.model, a.trim, a.exteriorcolor, a.interiorcolor, a.drivetype, a.milesfrom, a.zip, a.additionalcomments, a.yeartrade, a.maketrade, a.modeltrade, a.trimtrade, a.drivetypetrade, a.miles, a.firstowner, a.vin, a.beeninaccident, a.additionalcommentstrade, DATE_FORMAT(a.createdAt, "%m-%e-%Y") as createdAt, IF( a.trade = "1", "Yes", "No" ) as trade, a.UserId,  CONCAT(b.firstname, b.lastname) as username,  b.useremail, b.phone, b.clientid, b.userstatus, b.useraction, a.status FROM requests a  join users b on  a.userid=b.userid where a.requestid=?',array($id));
       return $result->result();
    }
    public function currentRequests1($id){
        $result = $this->db->query('SELECT count(*) as count FROM requests WHERE YEAR(updatedAt) = YEAR(NOW()) AND MONTH(updatedAt) = MONTH(NOW()) AND DAY(updatedAt) = DAY(NOW()) AND userid IN (select userid from users where clientid=?)',array($id));
        return $result->result();
    }
    public function updateCustRequest($data){
        
        unset($data['firstname']);
        unset($data['lastname']);
        unset($data['useremail']);
        unset($data['phone']);
        
        $id = $data['requestid'];

        $this->db->where('requestid', $id);
        $this->db->update('requests',$data);
        return $id;
    }

    public function getBidsForRequestId($reqid){
        $result = $this->db->query('SELECT brd.requestbidId, brd.dealerId, dlr.name as dealername, brd.requestId, brd.modeltrim, drm.urlid, brd.exteriorcolor, brd.interiorcolor, brd.msrp, brd.mfgdiscountrebates, brd.bidrelatednotes, brd.dealerdiscount, brd.tradeprice, brd.documentationfee, brd.warranties, brd.finalprice, brd.monthlypayment, brd.traderelatednotes, brd.status, brd.updatedby, CONCAT(usr.firstname,\' \',usr.lastname) as updatedbyName, brd.updatedAt FROM bid_request_details brd JOIN dealers dlr ON dlr.dealerid = brd.dealerid LEFT JOIN dealers_requests_map drm ON drm.requestid = brd.requestid AND drm.dealerid = brd.dealerid LEFT JOIN users usr ON usr.userid = brd.updatedby WHERE brd.requestid = ?', array($reqid));
        return $result->result();
    }

    public function getRequestSharingList($id,$fetchAll){
    $sql = "SELECT dlr.dealerId, dlr.name as dealername, dlr.city, dlr.mobile as dealermobile, dlr.email as dealeremail, dc.contactid, concat(dc.firstname, ' ', dc.lastname) as name, dc.email, dc.mobile, dc.jobtitle, dc.sequenceno, IF( crm.requestid is null, 0, 1) as sharedWithUser, drm.urlid, CONCAT(req.year,' ',req.make,' ',req.model,' ',req.trim) as carreq FROM dealers_contact dc "
     ."JOIN dealers_mfg_map dmm ON dmm.dealerid = dc.dealerid " 
     ."JOIN dealers dlr ON dmm.dealerid = dlr.dealerid AND dlr.status = 'Active' "
     ."JOIN requests req ON req.make = dmm.mfgName "
     .($fetchAll ? "LEFT ": "")."JOIN dealers_requests_map drm ON drm.requestid = req.requestid AND drm.dealerid = dc.dealerid "
     .($fetchAll ? "LEFT ": "")."JOIN dealercontact_request_map crm ON crm.requestid = drm.requestid AND crm.contactid = dc.contactid "
     ."WHERE req.requestid = ".$id." ORDER BY dlr.dealerId, dc.sequenceno";

        $result =$this->db->query($sql);
        return $result->result();
     
    }
    public function createUrlIds($requestid, $dealerids){
        $dealerReqData = '';
        $dealerUrlMap = [];
        for ($i = 0; $i < count($dealerids); $i++){
            if(strlen($dealerReqData) > 0){
                $dealerReqData += ',';
            }
      $this->load->helper('string');
      $randomStr = random_string('alnum', 5);
      $uniqueUrlId = strtolower($randomStr);
           
            $dealerReqData = array(
                'requestid' => $requestid,
                'dealerid' => $dealerids[$i],
                'urlid' => $uniqueUrlId
            );
            array_push($dealerUrlMap, (object)array("dealerid" => $dealerids[$i], "urlid" => $uniqueUrlId ));
            $data = $this->db->insert('dealers_requests_map',$dealerReqData);
           
            if (!empty($data)) {
                return $dealerUrlMap;
            }
        }
    }
    public function saveContactReqMap($requestDealerContactMap){
        $contactsData = '';
        $contactsDataMap = [];

        for($i=0; $i < count($requestDealerContactMap); $i++){
            if(strlen($contactsData) > 0){
                $contactsData .= ',';
            }
            $contactsData .= '('.$requestDealerContactMap[$i]->requestid
                .','.$requestDealerContactMap[$i]->dealerid
                .','.$requestDealerContactMap[$i]->contactid.')';

             }
                $sql = "INSERT IGNORE INTO dealercontact_request_map (requestid, dealerid, contactid) VALUES ".$contactsData;

                $result =$this->db->query($sql);
                return $result;
    }
}
