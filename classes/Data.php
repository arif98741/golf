<?php

$path = realpath(dirname(__DIR__));
include_once 'DB.php';
include_once 'Session.php';
include_once $path . '/helper/Helper.php';

class Data {

    private $dbObj;
    private $helpObj;

    public function __construct() {
		
        $this->dbObj = new Database();
        $this->helpObj = new Helper();
		
    }

    /*
     * showing invoice list in the table
     */

    public function showSingleSubject($subjectid) {
		$subjectid = $this->helpObj->validAndEscape($subjectid);
        $query = "SELECT * FROM `tbl_subject` where subjectid='$subjectid'";
        $st = $this->dbObj->link->query($query);
        if ($st) {
            return $st->fetch_assoc();
        } else {
            return false;
        }
    }

    

    /*
     * save invoice data from addpurchase in tbl_invoice and tbl_invoice_products
     */

    public function saveInvoice($data) {
        
        $date = date('Y-m-d h:i:s');
       
        $check_availibility = true;
		
        if (!$check_availibility) {
            return "<p class='alert alert-warning fadeout'>Invoice Already Exist<p>";
        } else {

            //insert product is tbl_invoice_products
            for ($j = 0; $j < count($data['program']); $j++) {

                $subject_id = $data['subject_id'];
                $structural_id = $data['structural_id'];
                $program = $data['program'][$j];
                $perform_index = $data['performance_index'][$j];
                $unit = $data['unit'][$j];
                $target = $data['target'][$j];
               // $sql = "insert into tbl_data(subjectid,structureid,program,perform_index,unit,target,date) values
                //('$subject_id','$structural_id','$program','$performance_index','$unit','$target','$date')";
				$sql = "insert into tbl_data(subjectid,structureid,program,perform_index,unit,target,date) values
                ('$subject_id','$structural_id','$program','$perform_index','$unit','$target','$date')";
				
				
                $st = $this->dbObj->insert($sql);
            }
			
			return true;

         
        }
    }

    /*
     * Update Invoice Data from
     * editvoice.php
     */
	 public function updateDeal($data) {
        
        $date = date('Y-m-d h:i:s');


		//insert product is tbl_invoice_products
		for ($j = 0; $j < count($data['performance_index']); $j++) {
			

			$subject_id = $data['subject_id'];
			$structural_id = $data['structural_id'];
			
			$program = $data['program'][$j];
			$perform_index = $data['performance_index'][$j];
			$unit = $data['unit'][$j];
			$target = $data['target'][$j];
			$achievement = $data['achievement'][$j];
		   
			$sql = "update tbl_data set
					program = '$program',perform_index = '$perform_index',
					unit = '$unit',target = '$target',
					achievement = '$achievement'
					where subjectid = '$subject_id' and structureid = '$structural_id'";
			$st = $this->dbObj->update($sql);
		}

	   return true;
       
    }
	
	
	
	
	

   
}