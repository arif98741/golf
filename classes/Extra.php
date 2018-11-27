<?php
$path = realpath(dirname(__DIR__));
include_once 'DB.php';
include_once $path.'/helper/Helper.php';

class Extra {

    private $dbObj;
    private $helpObj;

    public function __construct() {

        $this->dbObj = new Database();
        $this->helpObj = new Helper();
    }

    /*
    !--------------------------------------------------------
    !           Show Unit list in Drodown
    !--------------------------------------------------------
    */
    public function showUnit() { //for showing group in dropdown in addinvoice.php
        $query = 'select * from tbl_unit order by unitid asc';
        $stmt = $this->dbObj->select($query);
        $val = '<select class="form-control product_group" name="unit[]">';
        if ($stmt->num_rows > 0) {
            $val .= '<option>নির্বাচন করুন</option>';
            while ($r = $stmt->fetch_assoc()) {
                $val .= '<option value="' . $r['unitid'] . '">' . $r['unitname'] . '</option>';
            }
        }
        return $val .= '</select>';
    }

    /*
    !----------------------------------------------------------
    !           Every Time Generate A New ID
    !----------------------------------------------------------
    */
    public function getNewApplyID()
    {
       $query = "select id from apply order by id desc limit 1";
        $stmt = $this->dbObj->link->query($query) or die($this->dbObj->link->error . __LINE__);
        if ($stmt) {
            if ($stmt->num_rows > 0) {
                $data = $stmt->fetch_assoc();
                $applyid = $data['id'];
                return $applyid;
            } else {
                return 1;
            }
        } else {
            return false;
        }
    }
    
	
	

}
