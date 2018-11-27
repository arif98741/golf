<?php


include_once 'DB.php';
include_once 'helper/Helper.php';

class Dashboard {

    private $dbObj;
    private $helpObj;

    public function __construct() {

        $this->dbObj = new Database();
        $this->helpObj = new Helper();

    }

   
    /*
    !-------------------------------------------------
    !           Todays Sale
    !-------------------------------------------------
    */
    public function TodaySale()
    {
        date_default_timezone_set('Asia/Dhaka');
        $starting = date('Y-m-d')." 00:00:00";
        $ending = date('Y-m-d')." 23:59:59";

        $query = "SELECT sum(sub_total) as 'subtotal' from tbl_sell ts where ts.date between '$starting' and '$ending'";
        $st = $this->dbObj->select($query);
        if ($st) {
            $subtotal =  $st->fetch_object()->subtotal;
            if ($subtotal > 0) {
                return $subtotal;
            }else{
                return 0;
            }
        }
    }

    /*
    !-------------------------------------------------
    !          Total Sales Amout
    !-------------------------------------------------
    */
    public function TotalMemo()
    {
        $query = "SELECT count(sell_id) as 'totalsell' from tbl_sell";
        $st = $this->dbObj->select($query);
        if ($st) {
            return $st->fetch_object()->totalsell;
        } else {
            return 0;
        } 
    }

    /*
    !-------------------------------------------------
    !           Total Customer
    !-------------------------------------------------
    */
    public function TodayCustomer()
    {
        $starting = date('Y-m-d')." 00:00:00";
        $ending = date('Y-m-d')." 23:59:59";
        $query = "SELECT count(serial) as 'totalcustomer' from tbl_customer";
        $st = $this->dbObj->select($query);
        if ($st) {
            return $st->fetch_object()->totalcustomer;
        } else {
            return 0;
        } 

    }

    /*
    !-------------------------------------------------
    !          Total Profit
    !-------------------------------------------------
    */
    public function TodayProfit()
    {
        $starting = date('Y-m-d')." 00:00:00";
        $ending = date('Y-m-d')." 23:59:59";
        $query = "select product_id,sum(quantity) as 'quantity',unit_price,purchase_price FROM tbl_sell_products join tbl_sell on tbl_sell_products.sell_id = tbl_sell.sell_id where tbl_sell.date between '$starting' and '$ending' GROUP BY product_id";

        $stmt =  $this->dbObj->link->query($query);
        $profit = 0;
        if ($stmt) {
            
            while ($data = $stmt->fetch_assoc()) {
                $profit += $data['unit_price'] * $data['quantity'] - $data['purchase_price'] * $data['quantity'];
                
            } 
        }
        return $profit;

    }

    /*
    !-------------------------------------------------
    !              Total Due
    !-------------------------------------------------
    */
    public function TotalDue()
    {
        
        $query = "select sum(balance) as 'totaldue' from customer_balance";
        $st = $this->dbObj->link->query($query);
        if ($st) {
            $totaldue = $st->fetch_object()->totaldue;
            if ($totaldue > 0) {
                return $totaldue;
            }else{
                return 0;
            }
        }

    }







    
   
}