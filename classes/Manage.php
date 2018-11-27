<?php
$path = realpath(dirname(__DIR__));
include_once 'DB.php';
include_once 'Session.php';
include_once 'Extra.php';
include_once $path . '/helper/Helper.php';
class Manage {

    private $dbObj;
    private $helpObj;

    public function __construct() {

        $this->dbObj = new Database();
        $this->helpObj = new Helper();
        $this->extra = new Extra();
    }

    /*
    !------------------------------------------------------
    !    save new apply in apply.php
    !------------------------------------------------------
    */
    public function saveApply($data) {

        date_default_timezone_set('Asia/Dhaka');
        //sharok bisoi t porobortite thakbe na
        //ata edit sharok thek update hobe. 
        $sharok     = $this->helpObj->validAndEscape($data['sharok']);
        $sharokdate = $this->helpObj->validAndEscape($data['sharokdate']); //add to last update column
        $subject = $this->helpObj->validAndEscape($data['subject']);
        $source = $this->helpObj->validAndEscape($data['source']);

        $fileno  = $this->helpObj->validAndEscape($data['fileno']);
        $date    = $this->helpObj->validAndEscape($data['date']);
        $name    = $this->helpObj->validAndEscape($data['name']);
        $gurdian = $this->helpObj->validAndEscape($data['gurdian']);
        $mother = $this->helpObj->validAndEscape($data['mother']);
        
        $chome = $this->helpObj->validAndEscape($data['chome']);
        $cpost = $this->helpObj->validAndEscape($data['cpost']);
        $cdist = $this->helpObj->validAndEscape($data['cdist']);
        $cvill = $this->helpObj->validAndEscape($data['cvill']);
        $cps = $this->helpObj->validAndEscape($data['cps']);

        $phome = $this->helpObj->validAndEscape($data['phome']);
        $ppost = $this->helpObj->validAndEscape($data['ppost']);
        $pdist = $this->helpObj->validAndEscape($data['pdist']);
        $pvill = $this->helpObj->validAndEscape($data['pvill']);
        $pps = $this->helpObj->validAndEscape($data['pps']);

        $mobile = $this->helpObj->validAndEscape($data['mobile']);
        $design = $this->helpObj->validAndEscape($data['design']);
        
        $building_type = $this->helpObj->validAndEscape($data['building_type']);

        
        
        
        
        //$present_app_floor = $this->helpObj->validAndEscape($data['present_app_floor']);
        //recidencial area
        $rlength = $this->helpObj->validAndEscape($data['rlength']);
        $rwidth  = $this->helpObj->validAndEscape($data['rwidth']);
        $rnumber = $this->helpObj->validAndEscape($data['rnumber']);
        $rarea   = $this->helpObj->validAndEscape($data['rarea']);
        $rbuildingdetails = $this->helpObj->validAndEscape($data['rbuildingdetails']);
        
        //commercial area
        $clength = $this->helpObj->validAndEscape($data['clength']);
        $cwidth  = $this->helpObj->validAndEscape($data['cwidth']);
        $cnumber = $this->helpObj->validAndEscape($data['cnumber']);
        $carea   = $this->helpObj->validAndEscape($data['carea']);
        $cbuildingdetails = $this->helpObj->validAndEscape($data['cbuildingdetails']);

        //recidnecial-border area
        $rblength = $this->helpObj->validAndEscape($data['rblength']);
        $rbwidth  = $this->helpObj->validAndEscape($data['rbwidth']);
        $rbnumber = $this->helpObj->validAndEscape($data['rbnumber']);
        $rbarea   = $this->helpObj->validAndEscape($data['rbarea']);
        $rbbuildingdetails = $this->helpObj->validAndEscape($data['rbbuildingdetails']);


        //border area
        $blength = $this->helpObj->validAndEscape($data['blength']);
        $bwidth  = $this->helpObj->validAndEscape($data['bwidth']);
        $bnumber = $this->helpObj->validAndEscape($data['bnumber']);
        $barea   = $this->helpObj->validAndEscape($data['barea']);
        $bbuildingdetails = $this->helpObj->validAndEscape($data['bbuildingdetails']);

        //other area
        $olength = $this->helpObj->validAndEscape($data['olength']);
        $owidth  = $this->helpObj->validAndEscape($data['owidth']);
        $onumber = $this->helpObj->validAndEscape($data['onumber']);
        $oarea   = $this->helpObj->validAndEscape($data['oarea']);
        $obuildingdetails = $this->helpObj->validAndEscape($data['obuildingdetails']);

        
        
        $approve_fee = $this->helpObj->validAndEscape($data['approve_fee']);
        $approve_vat = $this->helpObj->validAndEscape($data['approve_vat']);
        $order_no    = $this->helpObj->validAndEscape($data['order_no']);
        $bank_name   = $this->helpObj->validAndEscape($data['bank_name']);
        $mouja       = $this->helpObj->validAndEscape($data['mouja']);
        $dno         = $this->helpObj->validAndEscape($data['dno']);
        $khotian     = $this->helpObj->validAndEscape($data['khotian']);
        $wardno      = $this->helpObj->validAndEscape($data['wardno']);
        $location    = $this->helpObj->validAndEscape($data['location']);
        
        //$last_update = $date." 00:00:00"; //will be used after inserted 2000 data
        $query = "insert into apply(
            fileno,sharok,date,subject,name,gurdian,mother,building_type,source,chome,cvill,cpost,
            cps,cdist,phome,pvill,ppost,pps,pdist,
            mobile,design,rlength,rwidth,rnumber,rarea,rbuildingdetails,
            clength,cwidth,cnumber,carea,cbuildingdetails,
            rblength,rbwidth,rbnumber,rbarea,rbbuildingdetails,
            blength,bwidth,bnumber,barea,bbuildingdetails,
            olength,owidth,onumber,oarea,obuildingdetails,
            approve_fee,order_no,bank_name,
            mouja,dno,khotian,wardno,location,last_update)
            values(
            '$fileno','$sharok','$date','$subject','$name','$gurdian','$mother','$building_type','$source','$chome','$cvill','$cpost',
            '$cps','$cdist','$phome','$pvill','$ppost','$pps','$pdist',
            '$mobile','$design','$rlength','$rwidth','$rnumber','$rarea','$rbuildingdetails',
            '$clength','$cwidth','$cnumber','$carea','$cbuildingdetails',
            '$rblength','$rbwidth','$rbnumber','$rbarea','$rbbuildingdetails',
            '$blength','$bwidth','$bnumber','$barea','$bbuildingdetails',
            '$olength','$owidth','$onumber','$oarea','$obuildingdetails',
            '$approve_fee','$order_no','$bank_name',
            '$mouja','$dno','$khotian','$wardno','$location','$sharokdate')";

        $stmt = $this->dbObj->insert($query);
        if ($stmt) {
            $status = $this->dbObj->link->query("select * from apply order by id desc limit 1");
            if ($status) {
                $data = $status->fetch_assoc();
                $applyid     = $data['id'];
                $siteplan    = 'attach_siteplan';
                $groundfloor = 'attach_groundfloor';
                $otherfloor  = 'attach_otherfloor';
                
                $stmt = $this->dbObj->insert("insert into fee(applyid,vat) values('$applyid','$approve_vat')");

                $this->saveApplicantPhoto($data,$applyid); //save applicant photo in table 
                $this->saveAttachment($data,$siteplan,$applyid); //save siteplan attachment
                $this->saveAttachment($data,$groundfloor,$applyid); //save groundfloor attachment
                $this->saveAttachment($data,$otherfloor,$applyid); //save otherfloor attachment

                //redirect to printapplyform with applyid
                header("location: printapplyform.php?action=view&id=".$this->extra->getNewApplyID());
            } 
        } else {
            return "<p class='alert alert-danger fadeout'>তথ্যাবলি সেভ ব্যর্থ হয়েছে<p>";
        }   
    }
    
    
    /*
    !------------------------------------------------------
    !    update apply
    !------------------------------------------------------
    */
    public function updateApply($data) {
        date_default_timezone_set('Asia/Dhaka');
        $formid = $this->helpObj->validAndEscape($data['formid']);

        //sharok bisoi t porobortite thakbe na
        //ata edit sharok thek update hobe. 
        $sharok     = $this->helpObj->validAndEscape($data['sharok']);
        $sharokdate = $this->helpObj->validAndEscape($data['sharokdate']); //add to last update column
        $subject = $this->helpObj->validAndEscape($data['subject']);
        $source = $this->helpObj->validAndEscape($data['source']);

        $fileno = $this->helpObj->validAndEscape($data['fileno']);
        $date = $this->helpObj->validAndEscape($data['date']);
        $name = $this->helpObj->validAndEscape($data['name']);
        $gurdian = $this->helpObj->validAndEscape($data['gurdian']);
        $mother = $this->helpObj->validAndEscape($data['mother']);

        $chome = $this->helpObj->validAndEscape($data['chome']);
        $cpost = $this->helpObj->validAndEscape($data['cpost']);
        $cdist = $this->helpObj->validAndEscape($data['cdist']);
        $cvill = $this->helpObj->validAndEscape($data['cvill']);
        $cps = $this->helpObj->validAndEscape($data['cps']);

        $phome = $this->helpObj->validAndEscape($data['phome']);
        $ppost = $this->helpObj->validAndEscape($data['ppost']);
        $pdist = $this->helpObj->validAndEscape($data['pdist']);
        $pvill = $this->helpObj->validAndEscape($data['pvill']);
        $pps = $this->helpObj->validAndEscape($data['pps']);

        $mobile = $this->helpObj->validAndEscape($data['mobile']);
        $design = $this->helpObj->validAndEscape($data['design']);
        
        $building_type = $this->helpObj->validAndEscape($data['building_type']);
        
        //$length = $this->helpObj->validAndEscape($data['length']);
        //$width = $this->helpObj->validAndEscape($data['width']);
        //$area = $this->helpObj->validAndEscape($data['area']);

        //$present_app_floor = $this->helpObj->validAndEscape($data['present_app_floor']);
        
        $rlength = $this->helpObj->validAndEscape($data['rlength']);
        $rwidth  = $this->helpObj->validAndEscape($data['rwidth']);
        $rnumber = $this->helpObj->validAndEscape($data['rnumber']);
        $rarea   = $this->helpObj->validAndEscape($data['rarea']);
        $rbuildingdetails = $this->helpObj->validAndEscape($data['rbuildingdetails']);
        
        $clength = $this->helpObj->validAndEscape($data['clength']);
        $cwidth  = $this->helpObj->validAndEscape($data['cwidth']);
        $cnumber = $this->helpObj->validAndEscape($data['cnumber']);
        $carea   = $this->helpObj->validAndEscape($data['carea']);
        $cbuildingdetails = $this->helpObj->validAndEscape($data['cbuildingdetails']);

        //recidnecial-border area
        $rblength = $this->helpObj->validAndEscape($data['rblength']);
        $rbwidth  = $this->helpObj->validAndEscape($data['rbwidth']);
        $rbnumber = $this->helpObj->validAndEscape($data['rbnumber']);
        $rbarea   = $this->helpObj->validAndEscape($data['rbarea']);
        $rbbuildingdetails = $this->helpObj->validAndEscape($data['rbbuildingdetails']);
        
        
        //border area
        $blength = $this->helpObj->validAndEscape($data['blength']);
        $bwidth = $this->helpObj->validAndEscape($data['bwidth']);
        $bnumber = $this->helpObj->validAndEscape($data['bnumber']);
        $barea = $this->helpObj->validAndEscape($data['barea']);
        $bbuildingdetails = $this->helpObj->validAndEscape($data['bbuildingdetails']);

        //other area
        $olength = $this->helpObj->validAndEscape($data['olength']);
        $owidth = $this->helpObj->validAndEscape($data['owidth']);
        $onumber = $this->helpObj->validAndEscape($data['onumber']);
        $oarea = $this->helpObj->validAndEscape($data['oarea']);
        $obuildingdetails = $this->helpObj->validAndEscape($data['obuildingdetails']);
        
        $approve_fee = $this->helpObj->validAndEscape($data['approve_fee']);
        $approve_vat = $this->helpObj->validAndEscape($data['approve_vat']);
        
        $order_no  = $this->helpObj->validAndEscape($data['order_no']);
        $bank_name = $this->helpObj->validAndEscape($data['bank_name']);
        $mouja     = $this->helpObj->validAndEscape($data['mouja']);
        $dno       = $this->helpObj->validAndEscape($data['dno']);
        $khotian   = $this->helpObj->validAndEscape($data['khotian']);
        $wardno    = $this->helpObj->validAndEscape($data['wardno']);
        $location  = $this->helpObj->validAndEscape($data['location']);
        
        //$last_update = $date." 00:00:00"; //will be used after inserted 2000 data
        $query = "update apply set 
        fileno = '$fileno',sharok='$sharok', date='$date',subject='$subject',name='$name',gurdian='$gurdian',mother='$mother',
        building_type='$building_type',source='$source',chome='$chome',cvill='$cvill',cpost='$cpost',cps='$cps',cdist='$cdist',
        phome='$phome',pvill='$pvill',ppost='$ppost',pps='$pps',pdist='$pdist',
        mobile='$mobile',design='$design',
        rlength='$rlength',rwidth='$rwidth',rnumber='$rnumber',rarea='$rarea',rbuildingdetails='$rbuildingdetails',
        clength='$clength',cwidth='$cwidth',cnumber='$cnumber',carea='$carea',cbuildingdetails='$cbuildingdetails',
        rblength='$rblength',rbwidth='$rbwidth',rbnumber='$rbnumber',rbarea='$rbarea',rbbuildingdetails='$rbbuildingdetails',
        blength='$blength',bwidth='$bwidth',bnumber='$bnumber',barea='$barea',bbuildingdetails='$bbuildingdetails',
        olength='$olength',owidth='$owidth',onumber='$onumber',oarea='$oarea',obuildingdetails='$obuildingdetails',
        approve_fee='$approve_fee',order_no='$order_no',bank_name='$bank_name',
        mouja='$mouja',dno='$dno',khotian='$khotian',wardno='$wardno',location='$location',last_update='$sharokdate' where id='$formid'";

        $stmt = $this->dbObj->update($query);
        $stmt =  $this->dbObj->update("update fee set vat='$approve_vat' where applyid='$formid'");
        if($stmt){
            $status = $this->dbObj->link->query("select * from apply where id='$formid'");

            if ($status) {
                $data = $status->fetch_assoc();
                $applyid     = $data['id'];


                $siteplan    = 'attach_siteplan';
                $sitephoto   = $data['attach_siteplan'];

                $groundfloor = 'attach_groundfloor';
                $groundphoto = $data['attach_groundfloor'];
                
                $otherfloor  = 'attach_otherfloor';
                $otherphoto  = $data['attach_otherfloor'];
                
                //$stmt = $this->dbObj->insert("insert into fee(applyid,vat) values('$applyid','$approve_vat')");
                $this->updateApplicantPhoto($data,$applyid,$data['applicant_photo']);
                $this->updateAttachment($data,$siteplan,$sitephoto,$applyid); //save siteplan attachment
                $this->updateAttachment($data,$groundfloor,$groundphoto,$applyid); //save groundfloor attachment
                $this->updateAttachment($data,$otherfloor,$otherphoto,$applyid); //save otherfloor attachment
            }
           return true;
        }
    }



    /*
    !------------------------------------------------------
    !    Save Pre Apply for Public
    !------------------------------------------------------
    */
    public function savePreApply($data) {


        //echo "<pre>";
        //print_r($_POST) ; die;
        $checkboxselector = ""; //this is for showing simana pracir/abasik banijjik simana pracir in print form
        if(isset($_POST['simanapracirselector']) && isset($_POST['simanapracirselector'])){

            $checkboxselector =  'both';

        }
         if (isset($_POST['simanapracirselector'])) {

            $checkboxselector = $_POST['simanapracirselector'];

        }

         if(isset($_POST['abasikbanijjikselector'])) {

             $checkboxselector = $_POST['abasikbanijjikselector'];
        }

        //echo $checkboxselector; die;

        $subject = $_POST["subject"]; 
        $name = $_POST["name"];
        $gurdian = $_POST["gurdian"];
        $mother = $_POST["mother"];
        $chome = $_POST["chome"];
        $cvill = $_POST["cvill"];
        $cps = $_POST["cps"];
        $cpost = $_POST["cpost"];
        

        $cupo = $_POST["cupo"];
        $cdist = $_POST["cdist"];


        $phome = $_POST["phome"];
        $pvill = $_POST["pvill"];
        $ppost = $_POST["ppost"];
        $pps = $_POST["pps"];
        $pupo = $_POST["pupo"];
        $pdist = $_POST["pdist"];
  
  
        $mobile = $_POST["mobile"];
        $email = $_POST["email"];
      
        $ccorpname = $_POST["ccorpname"];
        $khotian = $_POST["khotian"];
        $dno = $_POST["dno"];
        $mouja = $_POST["mouja"];
        $seat_no = $_POST["seat_no"];
        $ownsership_source = $_POST["ownsership_source"];
        $applicant_part = $_POST["applicant_part"];
        $wardno = $_POST["wardno"];

        //$length = $_POST["length"];
        //$width = $_POST["width"];
        //$area = $_POST["area"];
        $arealength1 = $_POST['arealength1'];  
        $arealength2 = $_POST['arealength2'];  
        $arealength3 = $_POST['arealength3'];  
        $arealength4 = $_POST['arealength4'];  
        $areafourlenthtotal  = $_POST['areafourlenthtotal'];  
        $arealengthheight    = $_POST['arealengthheight']; 
        $arealengthtotal  = $_POST['arealengthtotal'];
        $areataka     = $_POST['areataka'];
        $areatotal = $_POST['areatotal'];


        $recicomlength  = $_POST['recicomlength'];
        $recicomwidth  = $_POST['recicomwidth'];
        $recicomarea   = $_POST['recicomarea'];
        $recicomfloor  = $_POST['recicomfloor'];
        $recicomfourlenthtotal  = $_POST['recicomfourlenthtotal'];
        $recicomtakaperarea  = $_POST['recicomtakaperarea'];
        $recicomtaka   = $_POST['recicomtaka'];
        $recicomvat  = $_POST['recicomvat'];
        $recicomtotal = $_POST['recicomtotal']; 


        $onlycomlength = $_POST['onlycomlength'];
        $onlycomwidth  = $_POST['onlycomwidth'];
        $onlycomarea   = $_POST['onlycomarea'];
        $onlycomfloor  = $_POST['onlycomfloor'];
        $onlycomfourlenthtotal  = $_POST['onlycomfourlenthtotal'];
        $onlycomtakaperarea  = $_POST['onlycomtakaperarea'];
        $onlycomtaka   = $_POST['onlycomtaka'];
        $onlycomvat  = $_POST['onlycomvat'];
        $onlycomtotal = $_POST['onlycomtotal']; 


        

        $chouhoddi_uttor1 = $_POST["chouhoddi_uttor1"];
        $chouhoddi_uttor2 = $_POST["chouhoddi_uttor2"];
        $chouhoddi_dokkhin1 = $_POST["chouhoddi_dokkhin1"];
        $chouhoddi_dokkhin2 = $_POST["chouhoddi_dokkhin2"];
        $chouhoddi_poschim1 = $_POST["chouhoddi_poschim1"];
        $chouhoddi_poschim2 = $_POST["chouhoddi_poschim2"];
        $chouhoddi_purbo1 = $_POST["chouhoddi_purbo1"];
        $chouhoddi_purbo2 = $_POST["chouhoddi_purbo2"];

        $covered_under_res = "";
        $covered_under_com = "";
        $covered_first_res = "";
        $covered_first_com = "";
        $covered_second_res = "";;
        $covered_second_com = "";
        $covered_third_res = "";
        $covered_third_com = "";
        $covered_four_res = "";
        $covered_four_com = "";
        $covered_other_res = "";
        $covered_other_com = "";


        if (isset($data['covered_under_res'])) {
          $covered_under_res = $_POST["covered_under_res"];
        }
        if (isset($data['covered_under_com'])) {
          $covered_under_com = $_POST["covered_under_com"];
        }
        if (isset($data['covered_first_res'])) {
          $covered_first_res = $_POST["covered_first_res"];
        }
        if (isset($data['covered_first_com'])) {
          $covered_first_com = $_POST["covered_first_com"];
        }

        if (isset($data['covered_second_res'])) {
          $covered_second_res = $_POST["covered_second_res"];
        }
        if (isset($data['covered_second_com'])) {
          $covered_second_com = $_POST["covered_second_com"];
      }
      if (isset($data['covered_third_res'])) {
           $covered_third_res = $_POST["covered_third_res"];
      }
      if (isset($data['covered_third_com'])) {
          $covered_third_com = $_POST["covered_third_com"];
      }
      if (isset($data['covered_four_res'])) {
          $covered_four_res = $_POST["covered_four_res"];
      }

      if (isset($data['covered_four_com'])) {
          $covered_four_com = $_POST["covered_four_com"];
      }

      
     if (isset($data['covered_other_res'])) {
          $covered_other_res = $_POST["covered_other_res"];
      }

        if (isset($data['covered_other_com'])) {
          $covered_other_com = $_POST["covered_other_com"];
      }

 

      $road_near_site_name = $_POST["road_near_site_name"];
      $road_near_site_location = $_POST["road_near_site_location"];
      $road_near_site_distance = $_POST["road_near_site_distance"];
      $road_near_site_expansion = $_POST["road_near_site_expansion"];
      $road_near_site_go_way = $_POST["road_near_site_go_way"];


      $open_space_uttor = $_POST["open_space_uttor"];
      $open_space_dokkhin = $_POST["open_space_dokkhin"];
      $open_space_purbo = $_POST["open_space_purbo"];
      $open_space_poschim = $_POST["open_space_poschim"];

      $prev_buil_no_amount = $_POST["prev_buil_no_amount"];
      $pre_buil_break_area = $_POST["pre_buil_break_area"];


      $have_elec = $_POST["have_elec"];
      $have_water = $_POST["have_water"];
      $have_gas = $_POST["have_gas"];
      $have_toilet = $_POST["have_toilet"];

      $have_septic = $_POST["have_septic"];

      $bul_starting_date = $_POST["bul_starting_date"];
      $hill_cut_purpose = $_POST["hill_cut_purpose"];
      $have_noticed_under_autho = $_POST["have_noticed_under_autho"];
      $have_cased_under_autho = $_POST["have_cased_under_autho"];


      $dest_road_distance = $_POST["dest_road_distance"];
      $dest_buil_distance = $_POST["dest_buil_distance"];
      $dest_toilet_distance = $_POST["dest_toilet_distance"];
      $dest_elec_distance = $_POST["dest_elec_distance"];
      $dest_gas_distance = $_POST["dest_gas_distance"];

      $no_of_floor = $_POST["no_of_floor"];
      $recidencial_floor = $_POST["recidencial_floor"];
      $commercial_floor = $_POST["commercial_floor"];
      $fordo = $_POST['fordo'];

        
        //$last_update = $date." 00:00:00"; //will be used after inserted 2000 data
        $query = "insert into apply_pre(subject,name,gurdian,mother,chome,cvill,cpost,cps,cupo,cdist,
        phome,pvill,ppost,pps,pupo,pdist,
        mobile,email,ccorpname,khotian,dno,mouja,seat_no,ownsership_source,applicant_part,wardno,chouhoddi_uttor1,chouhoddi_uttor2,

chouhoddi_dokkhin1,chouhoddi_dokkhin2,chouhoddi_poschim1,chouhoddi_poschim2,chouhoddi_purbo1,chouhoddi_purbo2,

arealength1,arealength2,arealength3,arealength4,areafourlenthtotal,arealengthheight,arealengthtotal,    areataka,areatotal,

recicomlength,recicomwidth,recicomarea,recicomfloor,recicomfourlenthtotal,recicomtakaperarea,recicomtaka,recicomvat,recicomtotal,
onlycomlength,onlycomwidth,onlycomarea,onlycomfloor,onlycomfourlenthtotal,onlycomtakaperarea,onlycomtaka,onlycomvat,onlycomtotal,
covered_under_res,covered_under_com,covered_first_res,covered_first_com,covered_second_res,covered_second_com,covered_third_res,covered_third_com,covered_four_res,covered_four_com,covered_other_res,
covered_other_com,road_near_site_name,road_near_site_location,road_near_site_distance,road_near_site_expansion,road_near_site_go_way,open_space_uttor,open_space_dokkhin,open_space_purbo,open_space_poschim,
prev_buil_no_amount,pre_buil_break_area,have_elec,have_water,have_gas,have_toilet,have_septic,bul_starting_date,hill_cut_purpose,have_noticed_under_autho,
have_cased_under_autho,dest_road_distance,dest_buil_distance,dest_toilet_distance,dest_elec_distance,
dest_gas_distance,fordo,no_of_floor,recidencial_floor,commercial_floor) values('$subject',
'$name','$gurdian','$mother','$chome','$cvill','$cpost','$cps','$cupo','$cdist',
'$phome','$pvill','$ppost','$pps','$pupo','$pdist',
    '$mobile','$email','$ccorpname','$khotian','$dno','$mouja','$seat_no','$ownsership_source','$applicant_part','$wardno',
'$chouhoddi_uttor1','$chouhoddi_uttor2','$chouhoddi_dokkhin1','$chouhoddi_dokkhin2','$chouhoddi_poschim1','$chouhoddi_poschim2','$chouhoddi_purbo1','$chouhoddi_purbo2',
'$arealength1','$arealength2','$arealength3','$arealength4','$areafourlenthtotal','$arealengthheight','$arealengthtotal','$areataka','$areatotal',
'$recicomlength','$recicomwidth','$recicomarea','$recicomfloor','$recicomfourlenthtotal','$recicomtakaperarea','$recicomtaka','$recicomvat','$recicomtotal',
'$onlycomlength','$onlycomwidth','$onlycomarea','$onlycomfloor','$onlycomfourlenthtotal','$onlycomtakaperarea','$onlycomtaka','$onlycomvat','$onlycomtotal',

'$covered_under_res','$covered_under_com','$covered_first_res','$covered_first_com','$covered_second_res',
    '$covered_second_com','$covered_third_res','$covered_third_com','$covered_four_res','$covered_four_com','$covered_other_res','$covered_other_com',
    '$road_near_site_name','$road_near_site_location','$road_near_site_distance','$road_near_site_expansion',
    '$road_near_site_go_way',
    '$open_space_uttor','$open_space_dokkhin','$open_space_purbo','$open_space_poschim',
    '$prev_buil_no_amount','$pre_buil_break_area',
    '$have_elec','$have_water','$have_gas','$have_toilet','$have_septic',
    '$bul_starting_date','$hill_cut_purpose','$have_noticed_under_autho',
    '$have_cased_under_autho',
    '$dest_road_distance','$dest_buil_distance','$dest_toilet_distance','$dest_elec_distance',
    '$dest_gas_distance','$fordo','$no_of_floor','$recidencial_floor','$commercial_floor')";

        $stmt = $this->dbObj->link->query($query) or die($this->dbObj->link->error);
        if ($stmt) {
            $data = $this->dbObj->link->query("select * from apply_pre order by serial desc limit 1");
            $appdata = $data->fetch_assoc();
            $status = $this->dbObj->link->query("select serial from apply_pre order by serial desc limit 1") or die($this->dbObj->link->error);
            $applyid = '';
            if ($status) {
                $applyid = $status->fetch_assoc()['serial'];
                $data = $this->dbObj->link->query("insert into apply_pre_extend(apply_id) values('$applyid')");
             
            }
            $this->savePreApplicationImage($data,$applyid);
            $this->savePreApplicationAttachmentSiteplan($data,$applyid);
            $this->savePreApplicationAttachmentGroundfloor($data,$applyid);
            $this->savePreApplicationAttachmentOthersfloor($data,$applyid);

            header('location: ../newapplyprintform.php?action=view&id='.$appdata['serial']);
           
            
        } else {
            return "<script>alert('তথ্যাবলি  সংরক্ষন ব্যর্থ হয়েছে');</script>";
        }   
    }


    /*
    !-------------------------------------------------------------
    !   Save/Update Apply Verificate
    !-------------------------------------------------------------
    */
    public function saveVerification($data)
    {
        $eleka                  = $_POST["eleka"];
        $tola                   = $_POST["tola"];
        $noksa_copy             = $_POST["noksa_copy"];
        $h_dolil                = $_POST["h_dolil"];
        $h_hal_khotian          = $_POST["h_hal_khotian"];
        $h_namjari              = $_POST["h_namjari"];
        $h_khajna               = $_POST["h_khajna"];
        $h_moujasheet           = $_POST["h_moujasheet"];
        $h_nid                  = $_POST["h_nid"];
        $h_holingtax            = $_POST["h_holingtax"];
        $h_soiltest             = $_POST["h_soiltest"];
        $h_sarpotro             = $_POST["h_sarpotro"];
        $h_signature            = $_POST["h_signature"];
        $h_applicant_signature  = $_POST["h_applicant_signature"];
        $h_dakhil               = $_POST["h_dakhil"];
        $formno                 = $_POST["formno"];
        $kroytaka               = $_POST["kroytaka"];
        $rashidno               = $_POST["rashidno"];
        $pouro_obostan          = $_POST["pouro_obostan"];
        $l_uttor                = $_POST["l_uttor"];
        $l_dokkhin              = $_POST["l_dokkhin"];
        $l_purbo                = $_POST["l_purbo"];
        $l_poschim              = $_POST["l_poschim"];
        $jamir_poriman          = $_POST["jamir_poriman"];
        $jamir_poriman_ba       = $_POST["jamir_poriman_ba"];
        $vhabon_area            = $_POST["vhabon_area"];
        $sutro                  = $_POST["sutro"];
        $vumi_tola              = $_POST["vumi_tola"];
        $frist_tola_doirgo      = $_POST["1st_tola_doirgo"];
        $second_tola_prostho    = $_POST["1st_tola_prostho"];
        $third_tola_area        = $_POST["1st_tola_area"];
        $other_tola_doirgo      = $_POST["other_tola_doirgo"];
        $other_tola_prostho     = $_POST["other_tola_prostho"];
        $total_taka             = $_POST["total_taka"];
        $abasik_taka_1st        = $_POST["abasik_taka_1st"];
        $abasik_taka_2nd        = $_POST["abasik_taka_2nd"];
        $abasik_taka_har        = $_POST["abasik_taka_har"];
        $banijjik_taka_1st      = $_POST["banijjik_taka_1st"];
        $banijjik_taka_2nd      = $_POST["banijjik_taka_2nd"];
        $banijjik_taka_har      = $_POST["banijjik_taka_har"];
        $simana_prachir_1st     = $_POST["simana_prachir_1st"];
        $simana_prachir_2nd     = $_POST["simana_prachir_2nd"];
        $simana_prachir_har     = $_POST["simana_prachir_har"];
        $simana_prachir_total   = $_POST["simana_prachir_total"];
        $mot_taka_1st           = $_POST["mot_taka_1st"];
        $mot_taka_2nd           = $_POST["mot_taka_2nd"];
        //$sorbomot               = $_POST["sorbomot"];
        $sorbomot_kathai        = $_POST["sorbomot_kathai"]; 
        $noksakar               = $_POST["noksakar"]; 
        $sohokari_prokousoli    = $_POST["sohokari_prokousoli"]; 
        $nirbahi_prokousoli     = $_POST["nirbahi_prokousoli"]; 
        $meyor                  = $_POST["meyor"]; 
        $sl                     = $_POST["sl"]; 
        $apply_id               = $_POST["apply_id"]; 

        $status = $this->dbObj->update("update apply_pre_extend set
            
            eleka           =  '$eleka',
            tola            =  '$tola',
            noksa_copy      =  '$noksa_copy', 
            h_dolil         =  '$h_dolil',
            h_hal_khotian   =  '$h_hal_khotian',
            h_namjari       =  '$h_namjari',
            h_khajna        =  '$h_khajna',
            h_moujasheet    =  '$h_moujasheet',
            h_nid           =  '$h_nid',
            h_holingtax     =  '$h_holingtax',
            h_soiltest      =  '$h_soiltest',
            h_sarpotro      =  '$h_sarpotro',
            h_signature     =  '$h_signature',
            h_applicant_signature = '$h_applicant_signature', 
            h_dakhil        =  '$h_dakhil',
            formno          =  '$formno',  
            kroytaka        =  '$kroytaka',
            rashidno        =  '$rashidno', 
            pouro_obostan   =  '$pouro_obostan',
            l_uttor         =  '$l_uttor',       
            l_dokkhin       =  '$l_dokkhin',     
            l_purbo         =  '$l_purbo',
            l_poschim       =  '$l_poschim',
            jamir_poriman   =  '$jamir_poriman',
            jamir_poriman_ba=  '$jamir_poriman_ba', 
            vhabon_area     =  '$vhabon_area', 
            sutro           =  '$sutro', 
            vumi_tola       =  '$vumi_tola',
            1st_tola_doirgo =  '$frist_tola_doirgo',
            1st_tola_prostho =  '$second_tola_prostho',
            1st_tola_area   =  '$third_tola_area',
            other_tola_doirgo =  '$other_tola_doirgo',
            other_tola_prostho = '$other_tola_prostho',
            total_taka      =  '$total_taka',
            abasik_taka_1st =  '$abasik_taka_1st',
            abasik_taka_2nd =  '$abasik_taka_2nd', 
            abasik_taka_har =  '$abasik_taka_har', 
            banijjik_taka_1st= '$banijjik_taka_1st',  
            banijjik_taka_2nd= '$banijjik_taka_2nd',  
            banijjik_taka_har= '$banijjik_taka_har',  
            simana_prachir_1st =  '$simana_prachir_1st',
            simana_prachir_2nd =  '$simana_prachir_2nd',
            simana_prachir_har =  '$simana_prachir_har',
            simana_prachir_total=  '$simana_prachir_total', 
            mot_taka_1st       =  '$mot_taka_1st',      
            mot_taka_2nd       =  '$mot_taka_2nd',        
            sorbomot_kathai    =  '$sorbomot_kathai',
            noksakar    =  '$noksakar',
            sohokari_prokousoli    =  '$sohokari_prokousoli',
            nirbahi_prokousoli    =  '$nirbahi_prokousoli',
            meyor    =  '$meyor'
            where sl='$sl'");
        $this->saveVerificationPhoto($data,$sl);
        $this->saveVerificationPhoto2($data,$sl);
        $_SESSION['message'] = 'আবেদন সফলভাবে অনুমোদিত হয়েছে';
        header('location: apply2.php?action=success&applyid='.$apply_id);
    }


    /*
    !-------------------------------------------------------------
    !   save applicant photo jpg file
    !      must need to below than 200KB
    !      directory applicantphoto 
    !      table appply, col - applicant_photo
    !-------------------------------------------------------------
    */
    public function saveApplicantPhoto($data,$applyid) //
    {
        //add attachment
        $file_name = $_FILES['applicant_photo']['name'];
        $file_size = $_FILES['applicant_photo']['size'];
        $file_temp = $_FILES['applicant_photo']['tmp_name'];
        $div = explode('.', $file_name);
        $file_ext = strtolower(end($div));

        if ($file_ext !== "" || $file_ext !== null) {
            if ($file_ext == 'jpg' ||  $file_ext == 'jpeg' || $file_ext == 'png') {
                if ( $file_size < 204800) { //file size 200KB
                    $filename = $file_name;
                    $unique_image = "profile". uniqid(rand(),rand(time(),100) ) . '.' . $file_ext;
                    $photo = "uploads/applicant_photo/" . $unique_image;
                    move_uploaded_file($file_temp, $photo);
                    $photo = $unique_image;
                    
                    $status = $this->dbObj->update("update apply set applicant_photo='$photo' where id='$applyid'");
                }
            }
        } 
    }


    /*
    !-------------------------------------------------------------
    !  save verification photo jpg file
    !      must need to below than 200KB
    !      directory applicantphoto 
    !      table appply, col - applicant_photo
    !-------------------------------------------------------------
    */
    public function saveVerificationPhoto($data,$sl) //
    {
        //add attachment
        $file_name = $_FILES['imagefield']['name'];
        $file_size = $_FILES['imagefield']['size'];
        $file_temp = $_FILES['imagefield']['tmp_name'];
        $div = explode('.', $file_name);
        $file_ext = strtolower(end($div));

        if ($file_ext !== "" || $file_ext !== null) {
            if ($file_ext == 'jpg' ||  $file_ext == 'jpeg' || $file_ext == 'png') {
                if ( $file_size < 204800) { //file size 200KB
                    
                    $last_q_status = $this->dbObj->link->query("select * from apply_pre_extend where sl='$sl'");
                    if ($last_q_status) {
                        $applicantphoto = $last_q_status->fetch_assoc();
                        $apply_id = $applicantphoto['apply_id'];
                        $this->dbObj->link->query("update apply_pre set status='approved' where serial='$apply_id'");
                        //echo "<pre>";
                        //print_r($applicantphoto); die;
                        if (file_exists("uploads/verification/".$applicantphoto['verification_photo'])) {
                            if (!is_dir("uploads/verification/".$applicantphoto['verification_photo'])) {
                                unlink("uploads/verification/".$applicantphoto['verification_photo']); //remove is_a directory error
                            } 
                        } 
                    }

                    $filename = $file_name;
                    $unique_image = "verification". uniqid(rand(),rand(time(),100) ) . '.' . $file_ext;
                    $photo = "uploads/verification/" . $unique_image;

                    move_uploaded_file($file_temp, $photo);
                    $photo = $unique_image;
                    
                    $status = $this->dbObj->update("update apply_pre_extend set verification_photo='$photo' where sl='$sl'");
                }
            }
        } 
    }

    /*
    !-------------------------------------------------------------
    !   save verification photo 2 jpg file
    !      must need to below than 200KB
    !      directory applicantphoto 
    !      table appply, col - applicant_photo
    !-------------------------------------------------------------
    */
    public function saveVerificationPhoto2($data,$sl) //
    {
        //add attachment
       
        $file_name = $_FILES['imagefield2']['name'];
        $file_size = $_FILES['imagefield2']['size'];
        $file_temp = $_FILES['imagefield2']['tmp_name'];
        $div = explode('.', $file_name);
        $file_ext = strtolower(end($div));

        if ($file_ext !== "" || $file_ext !== null) {
            if ($file_ext == 'jpg' ||  $file_ext == 'jpeg' || $file_ext == 'png') {
                if ( $file_size < 204800) { //file size 200KB
                    
                    $last_q_status = $this->dbObj->link->query("select * from apply_pre_extend where sl='$sl'");
                    if ($last_q_status) {
                        $applicantphoto = $last_q_status->fetch_assoc();
                        $apply_id = $applicantphoto['apply_id'];
                        
                        //echo "<pre>";
                        //print_r($applicantphoto); die;
                        if (file_exists("uploads/verification/".$applicantphoto['verification_photo2'])) {
                            if (!is_dir("uploads/verification/".$applicantphoto['verification_photo2'])) {
                                unlink("uploads/verification/".$applicantphoto['verification_photo2']); //remove is_a directory error
                            } 
                        } 
                    }
                   

                    $filename = $file_name;
                    $unique_image = "verification2".uniqid(rand(),rand(time(),100) ) . '.' . $file_ext;
                    $photo = "uploads/verification/". $unique_image;

                    move_uploaded_file($file_temp, $photo);
                    $photo = $unique_image;
                    
                    $status = $this->dbObj->update("update apply_pre_extend set verification_photo2='$photo' where sl='$sl'");
                }
            }
        } 
    }


    /*
    !-------------------------------------------------------------
    !   update applicant photo jpg file
    !      must need to below than 200KB
    !      directory applicantphoto 
    !      table appply, col - applicant_photo
    !-------------------------------------------------------------
    */
    public function updateApplicantPhoto($data,$applyid,$applicantphoto) //
    {
        //add attachment
        $file_name = $_FILES['applicant_photo']['name'];
        $file_size = $_FILES['applicant_photo']['size'];
        $file_temp = $_FILES['applicant_photo']['tmp_name'];
        $div = explode('.', $file_name);
        $file_ext = strtolower(end($div));

        if ($file_ext !== "" || $file_ext !== null) {
            if ($file_ext == 'jpg' ||  $file_ext == 'jpeg' || $file_ext == 'png') {
                if ( $file_size < 204800) { //file size 200KB
                    if ($applicantphoto !== null || $applicantphoto !== '') {
                        if (file_exists("uploads/applicant_photo/".$applicantphoto)) {
                            if (!is_dir("uploads/applicant_photo/".$applicantphoto)) {
                                unlink("uploads/applicant_photo/".$applicantphoto); //remove is_a directory error
                            } 
                         } 
                    }
                    
                    $unique_image = "profile". uniqid(rand(),rand(time(),100) ) . '.'.$file_ext;
                    $photo = "uploads/applicant_photo/" . $unique_image;
                    move_uploaded_file($file_temp, $photo);
                    $photo = $unique_image;
                    
                    $status = $this->dbObj->update("update apply set applicant_photo='$photo' where id='$applyid'");
                }
            }
        } 
    }


    /*
    !------------------------------------------------------
    !    insert member to phonebook table
    !------------------------------------------------------
    */
    public function saveMember($data)
    {
        $name = $this->helpObj->validAndEscape($data['name']);
        $designation = $this->helpObj->validAndEscape($data['designation']);
        $mobile = $this->helpObj->validAndEscape($data['mobile']);
        
        $query = "insert into phonebook(name,designation,mobile) values('$name','$designation','$mobile')";
        $st = $this->dbObj->link->query($query);
        if ($st) {
            return true;
        } else {
            return false;
        }
    }

    /*
    !------------------------------------------------------
    !    edit and update sharok in editsharok.php
    !------------------------------------------------------
    */
    public function updateSharok($data)
    {

        date_default_timezone_set('Asia/Dhaka');
        $id = $this->helpObj->validAndEscape($data['id']);
        $sharok = $this->helpObj->validAndEscape($data['sharok']);
        $date = date('Y-m-d');
        $mayorchecked = "";
        $counsilorchecked = "";

        $stmt1 = $this->dbObj->link->query("update apply set sharok='$sharok',last_update='$date' where id='$id'");
        
        $stmt2 = $this->dbObj->link->query("select * from apply where id='$id'");
        $applydata = array();
        
        if ($stmt2) { ////send as default to applicant inbox
            $applydata = $stmt2->fetch_assoc(); //get data from apply table by specific applyid
            $usermobile = $applydata['mobile'];
            $name = $applydata['name'];
            $father = $applydata['gurdian'];
            $design = $applydata['design'];
            $mouja = $applydata['mouja'];
            $dno = $applydata['dno'];
            $location = $applydata['location'];
            $ward = $applydata['wardno']; //used in counsilor sending message
            
            $userMessage = "জনাব/জনাবা,".$name.",পিতা: ".$father.",".$design.",মৌজা-".$mouja.",দাগ ".$dno." এবং লোকেশন:".$location."  এর আলোকে আপনার অনুমতি পত্রটি গৃহীত হল।
                        -----------------------
                        দাগণভূঞা পৌরসভা।";
            $this->sendMessage($usermobile, $userMessage);
        }

        //send message to chairman mobile
        if (isset($data['mayorchecked'])) {
            $mayorchecked = $this->helpObj->validAndEscape($data['mayorchecked']);
            $stmt3 = $this->dbObj->link->query("select mobile from phonebook where designation='chairman'");
            if ($stmt3) {
             $data = $stmt3->fetch_assoc();
                $chairmanmobile = $data['mobile'];
                $chairmanMessage =  "সম্মানীত মেয়র মহোদয়,".$name.",পিতা: ".$father.",".$design.",মৌজা-".$mouja.",দাগ ".$dno." এবং লোকেশন:".$location."  এর আলোকে আপনার অনুমতি পত্রটি গৃহীত হল।
                        -----------------------
                        দাগণভূঞা পৌরসভা।";
                 $this->sendMessage($chairmanmobile, $chairmanMessage);
            }
        } 
        
        //send message to counsilors mobile
        if (isset($data['counsilorchecked'])) {
            $counsilorchecked = $this->helpObj->validAndEscape($data['counsilorchecked']);
            $stmt3 = $this->dbObj->link->query("select mobile from phonebook where designation='counsilor' and name='$ward'");
            if ($stmt3) {
             $data = $stmt3->fetch_assoc();
                $counsilorMobile = $data['mobile']; //get counsilor mobile column from phonebook table
                $counsilorMessage =  "সম্মানীত কাউন্সিলর বৃন্দ,".$name.",পিতা: ".$father.",".$design.",মৌজা-".$mouja.",দাগ ".$dno." এবং লোকেশন:".$location."  এর আলোকে আপনার অনুমতি পত্রটি গৃহীত হল।
                        -----------------------
                        দাগণভূঞা পৌরসভা।";
                $mobileExplode  = explode(",",$counsilorMobile); //explode data by comma for sending multiple counsilor
                
                foreach($mobileExplode as $mobile){
                    $this->sendMessage($mobile, $counsilorMessage);
                }
            }
        } 
        header("location: applicationlist.php");
    }


    /*
    !------------------------------------
    !      send message to user
    !------------------------------------
    */
    public function sendMessage($to,$message)
    { 
        $token = "77f9a4d2c5ea51913e1cd7624705239c";
        $url = "http://sms.greenweb.com.bd/api.php";
        $data= array(
        'to'=>"$to",
        'message'=>"$message",
        'token'=>"$token"
        ); // Add parameters in key value
        $ch = curl_init(); // Initialize cURL
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $smsresult = curl_exec($ch); //execute statement to send sms
        return $smsresult;
    }


    /*
    !-------------------------------------------------------------
    !   save attachment file in apply.php
    !       parameter 
    !  @formdata array, @tablecolumn
    !        ---------filename are-------------
    !               @attach_siteplan
    !               @attach_groundfloor
    !               @attach_otherfloor
    !-------------------------------------------------------------
    */
    public function saveAttachment($data,$col,$applyid) //
    {
         //add attachment
        $file_name = $_FILES[$col]['name'];
        $file_size = $_FILES[$col]['size'];
        $file_temp = $_FILES[$col]['tmp_name'];
        $div = explode('.', $file_name);

        $file_ext = strtolower(end($div));

        if ($file_ext !== "" || $file_ext !== null) {
            if ($file_ext == 'jpg' ||  $file_ext == 'jpeg' || $file_ext == 'png') {

                if ( $file_size < 204800) { //file size 200KB
                    
                    $filename = $file_name;
                    //$unique_image = "attach".substr(md5(time()), 0, 11) . '.' . $file_ext;
                    $unique_image = "attach". uniqid(rand(),rand(time(),1000000000) ) . '.' . $file_ext;
                    
                    $photo = "uploads/attachment/" . $unique_image;
                    
                    move_uploaded_file($file_temp, $photo);
                    $photo = $unique_image;
                    //$status = $this->dbObj->update("update apply set ".$col." = '$photo' where id='$applyid'");
                    if ($col == "attach_siteplan") {
                        $status = $this->dbObj->update("update apply set attach_siteplan='$photo' where id='$applyid'");
                    } 

                    if ($col == "attach_groundfloor") {
                        $status = $this->dbObj->update("update apply set attach_groundfloor='$photo' where id='$applyid'");
                    } 

                    if ($col == "attach_otherfloor") {
                        $status = $this->dbObj->update("update apply set attach_otherfloor='$photo' where id='$applyid'");
                    } 
                    
                    //redirect to printapplyform with applyid
                    header("location: printapplyform.php?action=view&id=".$this->extra->getNewApplyID());
                } else {
                    header("location: apply.php?action=error&value="."attachment file limit exceeded");
                }
            }
        } 
       
    }


    /*
    !-------------------------------------------------------------
    !   update attachment file in editapply.php
    !       parameter 
    !       @formdata array, @tablecolumn
    !        ---------filename are-------------
    !               @attach_siteplan
    !               @attach_groundfloor
    !               @attach_otherfloor
    !-------------------------------------------------------------
    */
    public function updateAttachment($data,$col,$path,$applyid) //
    {
        //add attachment
        $file_name = $_FILES[$col]['name'];
        $file_size = $_FILES[$col]['size'];
        $file_temp = $_FILES[$col]['tmp_name'];
        $div = explode('.', $file_name);

        $file_ext = strtolower(end($div));

        if ($file_ext !== "" || $file_ext !== null) {
            if ($file_ext == 'jpg' ||  $file_ext == 'jpeg' || $file_ext == 'png') {

                if ( $file_size < 204800) { //file size 200KB
                    
                    //$unique_image = "attach".substr(md5(time()), 0, 11) . '.' . $file_ext;
                    $unique_image = "attach". uniqid(rand(),rand(time(),1000000000) ) . '.' . $file_ext;
                    //$unique_image = "uploads/attachment/".$path;
                   
                    if (file_exists("uploads/attachment/".$path)) {

                        unlink("uploads/attachment/".$path);
                        $photo = $unique_image;
                        move_uploaded_file($file_temp, "uploads/attachment/".$unique_image);
                       
                        if ($col == "attach_groundfloor") {
                             $status = $this->dbObj->update("update apply set attach_groundfloor='$photo' where id='$applyid'");
                        } elseif ($col == "attach_siteplan") {
                            $status = $this->dbObj->update("update apply set attach_siteplan='$photo' where id='$applyid'");
                        }elseif ($col == "attach_otherfloor") {
                            $status = $this->dbObj->update("update apply set attach_otherfloor='$photo' where id='$applyid'");
                        }
                        
                    }else{
                        $photo = $unique_image;
                        move_uploaded_file($file_temp, "uploads/attachment/".$unique_image);
                       
                        if ($col == "attach_groundfloor") {
                            $status = $this->dbObj->update("update apply set attach_groundfloor='$photo' where id='$applyid'");
                        }elseif ($col == "attach_siteplan") {
                            $status = $this->dbObj->update("update apply set attach_siteplan='$photo' where id='$applyid'");
                        }elseif ($col == "attach_otherfloor") {
                            $status = $this->dbObj->update("update apply set attach_otherfloor='$photo' where id='$applyid'");
                        }
                    }
                } 
            }
        } 
       
    }


    /*
    !-------------------------------------------------------------
    !   save file in addattachment.php for specific form/apply
    !-------------------------------------------------------------
    */
    public function saveFile($data)
    {
        date_default_timezone_set('Asia/Dhaka');
        
        $applyid = $this->helpObj->validAndEscape($data['id']);
        $subject = $this->helpObj->validAndEscape($data['subject']);
        $date    = $this->helpObj->validAndEscape($data['uploaddate']);
    
        $file_name = $_FILES['file']['name'];
        $file_size = $_FILES['file']['size'];
        $file_temp = $_FILES['file']['tmp_name'];

        $div = explode('.', $file_name);
        $file_ext = strtolower(end($div));
        $filename = $file_name;

        $unique_image = substr(md5(time()), 0, 11) . '.' . $file_ext;
        $photo = "uploads/" . $unique_image;
        $query = "insert into upload(applyid,subject,file,filename,date) values('$applyid','$subject','$unique_image','$filename','$date')";

        $stmt = $this->dbObj->link->query($query) or die( $this->dbObj->link->error);
        if ($stmt) {
            move_uploaded_file($file_temp, $photo);
            return true;
        }
    }


    /*
    !-------------------------------------------------------------
    !      save pre applicaing photo jpg file
    !      must need to below than 200KB
    !      directory applicantphoto 
    !      table apply_pre, col - image
    !-------------------------------------------------------------
    */
    public function savePreApplicationImage($data,$applyid) //
    {
       // echo $applyid; die;
        //add attachment
        $file_name = $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_temp = $_FILES['image']['tmp_name'];
        $div       = explode('.', $file_name);
        $file_ext  = strtolower(end($div));

        if ($file_ext !== "" || $file_ext !== null) {
            if ($file_ext == 'jpg' ||  $file_ext == 'jpeg' || $file_ext == 'png') {
                if ( $file_size < 204800) { //file size 200KB
                    $filename = $file_name;
                    $unique_image = "profilenew".uniqid(rand(),rand(time(),100) ).'.'.$file_ext;
                   // echO $unique_image; die;
                    $photo            = "../uploads/applicant_photo/".$unique_image; 
                    //$photo          = "uploads/".$unique_image;
                    move_uploaded_file($file_temp, $photo);
                    $photo        = $unique_image;
                    $status       = $this->dbObj->update("update apply_pre set image='$photo' where serial='$applyid'");
                }
            }
        } 
    }

    
    /*
    !-------------------------------------------------------------
    !      save pre applicaing photo jpg file
    !      must need to below than 200KB
    !      directory applicantphoto 
    !      table apply_pre, col - attach_siteplan
    !-------------------------------------------------------------
    */
    public function savePreApplicationAttachmentSiteplan($data,$applyid) //
    {
       // echo $applyid; die;
        //add attachment
        $file_name = $_FILES['attach_siteplan']['name'];
        $file_size = $_FILES['attach_siteplan']['size'];
        $file_temp = $_FILES['attach_siteplan']['tmp_name'];
        $div       = explode('.', $file_name);
        $file_ext  = strtolower(end($div));

        if ($file_ext !== "" || $file_ext !== null) {
            if ($file_ext == 'jpg' ||  $file_ext == 'jpeg' || $file_ext == 'png' || $file_ext == 'pdf' || $file_ext == 'docx' ||  $file_ext == 'zip' ) {
                if ( $file_size < 409600) { //file size 400KB
                    $filename = $file_name;
                    $unique_image = "newattachsite".uniqid(rand(),rand(time(),100) ).'.'.$file_ext;
                   // echO $unique_image; die;
                    $photo            = "../uploads/new_app_attach/".$unique_image; 
                    //$photo          = "uploads/".$unique_image;
                    move_uploaded_file($file_temp, $photo);
                    $photo  = $unique_image;
                    $status = $this->dbObj->update("update apply_pre set attach_siteplan='$photo' where serial='$applyid'");
                }
            }
        } 
    }

    /*
    !-------------------------------------------------------------
    !      save pre applicaing photo jpg file
    !      must need to below than 200KB
    !      directory applicantphoto 
    !      table apply_pre, col - attach_groundfloor
    !-------------------------------------------------------------
    */
    public function savePreApplicationAttachmentGroundfloor($data,$applyid) //
    {
       // echo $applyid; die;
        //add attachment
        $file_name = $_FILES['attach_groundfloor']['name'];
        $file_size = $_FILES['attach_groundfloor']['size'];
        $file_temp = $_FILES['attach_groundfloor']['tmp_name'];
        $div       = explode('.', $file_name);
        $file_ext  = strtolower(end($div));

        if ($file_ext !== "" || $file_ext !== null) {
            if ($file_ext == 'jpg' ||  $file_ext == 'jpeg' || $file_ext == 'png' || $file_ext == 'pdf' || $file_ext == 'docx' ||  $file_ext == 'zip' ) {
                if ( $file_size < 409600) { //file size 400KB
                    $filename = $file_name;
                    $unique_image = "newattachground".uniqid(rand(),rand(time(),100) ).'.'.$file_ext;
                   // echO $unique_image; die;
                    $photo            = "../uploads/new_app_attach/".$unique_image; 
                    //$photo          = "uploads/".$unique_image;
                    move_uploaded_file($file_temp, $photo);
                    $photo  = $unique_image;
                    $status = $this->dbObj->update("update apply_pre set attach_groundfloor='$photo' where serial='$applyid'");
                }
            }
        } 
    }

    /*
    !-------------------------------------------------------------
    !      save pre applicaing photo jpg file
    !      must need to below than 200KB
    !      directory applicantphoto 
    !      table apply_pre, col - attach_othersfloor
    !-------------------------------------------------------------
    */
    public function savePreApplicationAttachmentOthersfloor($data,$applyid) //
    {
       // echo $applyid; die;
        //add attachment
        $file_name = $_FILES['attach_othersfloor']['name'];
        $file_size = $_FILES['attach_othersfloor']['size'];
        $file_temp = $_FILES['attach_othersfloor']['tmp_name'];
        $div       = explode('.', $file_name);
        $file_ext  = strtolower(end($div));

        if ($file_ext !== "" || $file_ext !== null) {
            if ($file_ext == 'jpg' ||  $file_ext == 'jpeg' || $file_ext == 'png' || $file_ext == 'pdf' || $file_ext == 'docx' ||  $file_ext == 'zip' ) {
                if ( $file_size < 409600) { //file size 400KB
                    $filename = $file_name;
                    $unique_image = "newattachothers".uniqid(rand(),rand(time(),100) ).'.'.$file_ext;
                   // echO $unique_image; die;
                    $photo            = "../uploads/new_app_attach/".$unique_image; 
                    //$photo          = "uploads/".$unique_image;
                    move_uploaded_file($file_temp, $photo);
                    $photo  = $unique_image;
                    $status = $this->dbObj->update("update apply_pre set attach_othersfloor='$photo' where serial='$applyid'");
                }
            }
        } 
    }

    /*
    !------------------------------------------------------
    ! save road apply
    !------------------------------------------------------
    */
    public function saveRoadApply()
    {
        date_default_timezone_set('Asia/Dhaka');
        
        $applicant_full_name  = $_POST["applicant_full_name"];
        $father               = $_POST["father"];
        $mother               = $_POST["mother"];
        $home_name            = $_POST["home_name"];
        $holding_no           = $_POST["holding_no"];
        $ps                   = $_POST["ps"];
        $vill                 = $_POST["vill"];
        $post                 = $_POST["post"];
        $upo                  = $_POST["upo"];
        $dist                 = $_POST["dist"];
        $mobile               = $_POST["mobile"];
        $email                = $_POST["email"];
        $road_cutting_holding_no = $_POST["road_cutting_holding_no"];
        $road_cutting_vill = $_POST["road_cutting_vill"];
        $road_name            = $_POST["road_name"];
        $road_type            = $_POST["road_type"];
        $road_cutting_reason  = $_POST["road_cutting_reason"];
        $road_cutting_area    = $_POST["road_cutting_area"];
        $apply_date           = date('Y-m-d');

        $query = "insert into road_apply (applicant_full_name,father,mother,home_name,holding_no,ps,vill,post,upo,dist,mobile,email,road_cutting_holding_no,road_cutting_vill,road_name,road_type,road_cutting_reason,road_cutting_area) values('$applicant_full_name','$father','$mother','$home_name','$holding_no','$ps','$vill','$post','$upo','$dist','$mobile','$email','$road_cutting_holding_no','$road_cutting_vill','$road_name','$road_type','$road_cutting_reason','$road_cutting_area')";

        $stmt = $this->dbObj->link->query($query) or die($this->dbObj->link->error);
        if ($stmt) {
            $data = $this->dbObj->link->query("select * from road_apply order by rid desc limit 1");
            $appdata = $data->fetch_assoc();
            header('location: confirm_road_apply.php?rid='.$appdata['rid']);
        }
    }


     /*
    !------------------------------------------------------
    ! save agree apply
    !------------------------------------------------------
    */
    public function saveAgreeApply()
    {
        date_default_timezone_set('Asia/Dhaka');
        
        $name           = $_POST['name'];
        $gurdian        = $_POST['gurdian'];
        $village        = $_POST['village'];
        //$home_name      = $_POST['home_name'];
        $wardno         = $_POST['wardno'];
        $roadname       = $_POST['roadname'];
        $holdingno      = $_POST['holdingno'];
        $rcc_carpet_1   = $_POST['rcc_carpet_1'];
        $rcc_carpet_2   = $_POST['rcc_carpet_2'];
        $soling_road    = $_POST['soling_road'];
        $order_no       = $_POST['order_no'];
        $date           = $_POST['date'];
        $vat            = $_POST['vat'];
        $total          = $_POST['total'];
        $total_detail   = $_POST['total_detail'];
        $bank_name      = $_POST['bank_name'];
        


        $query = "insert into agree_apply(name,gurdian,village,wardno,roadname,holdingno,rcc_carpet_1,rcc_carpet_2,soling_road,order_no,date,vat,total ,
        total_detail,bank_name ) value('$name','$gurdian','$village','$wardno','$roadname','$holdingno','$rcc_carpet_1','$rcc_carpet_2','$soling_road','$order_no','$date','$vat','$total','$total_detail','$bank_name');";

        $stmt = $this->dbObj->link->query($query) or die($this->dbObj->link->error);
        if ($stmt) {
            //$data = $this->dbObj->link->query("select * from road_apply order by rid desc limit 1");
            //$appdata = $data->fetch_assoc();
            header('location: agree_apply_list.php');
        }
    }

}
?>