<?php
$path = realpath(dirname(__DIR__));
include_once 'Session.php';
include_once $path.'/helper/Helper.php';

class Login {

    private $dbObj;
    private $helpObj;

    public function __construct() {

        $this->dbObj = new Database();
        $this->helpObj = new Helper();
    }


    /**
    @ user login system
    @ 
    */
    public function login($data) {
        $username = $data['username'];
        $password = $data['password'];
        $message = '';
        if (empty($username) || empty($password)) {
            return $message = "<p class='alert alert-danger' id='message'><i class='fa fa-times'></i>&nbsp;Username or Password Must Not be Empty</p>";
        } else {
            $username = $this->helpObj->validAndEscape($username);
            $password = md5($this->helpObj->validAndEscape($password));

            $query = "select * from tbl_user where username ='$username' and password = '$password'";
            $status = $this->dbObj->select($query);
            if ($status) {
                $data = $status->fetch_assoc();
                //Session::init();
                Session::set('login', true);
                Session::set('username', $data['username']);
                Session::set('userid', $data['userid']);
                Session::set('name', $data['name']);
                Session::set('email', $data['email']);
                Session::set('company_name', $data['company_name']);
                Session::set('logo', $data['logo']);
                Session::set('status', $data['status']);

                //echo "<script>window.location='index.php'</script>"; //redirecting to home page(index.php)
                header("Location: index.php");
            } else {
                $this->saveAttemptUser(array(
                    'username' => $username,
                    'password' => $data['password']
                ));
                return $message = "<p class='' id='message'><i class='fa fa-times'></i>&nbsp;Username or Password Not Matched</p>";
            }
        }
    }



    /**
    * save accessed missing user
    */

    public function saveAttemptUser($data)
    {
        date_default_timezone_set('Asia/Dhaka');
        $ip = $_SERVER['REMOTE_ADDR'];
        $username = $this->helpObj->validAndEscape($data['username']);
        $password = $this->helpObj->validAndEscape($data['password']);
        $date =  date('Y-m-d h:i:s');
        $query = "insert into tbl_accesslog(ip,user,pass,date) values('$ip','$username','$password','$date')";
        $status = $this->dbObj->link->query($query);
        $delq = "DELETE FROM tbl_accesslog WHERE date < NOW() - INTERVAL 10 DAY";
        $status = $this->dbObj->link->query($delq);
        if ($status) {
            return true;
        }
    }



    /**
    @show attemp user
    **/
    public function showAttemptUser()
    {
        $query = "select * from tbl_accesslog order by id desc";
        $status = $this->dbObj->select($query);
        if ($status) {
            return $status;
        }
    }


  
}
