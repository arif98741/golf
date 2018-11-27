<?php include( 'lib/header.php'); ?>
<?php
    //get apply id to increase in next apply
    $stmt = $db->link->query("select * from apply order by id desc limit 1");
    if($stmt){
    	if($stmt->num_rows > 0){
    		$applydata 	=  $stmt->fetch_assoc();
    		$applyid 	= $applydata['id'] + 1; //get last apply id and increase it
    		         	                        //
    		}else{
    			$applyid 	= 1;
    	}
    }
    ?>
<?php 
    if(isset($_POST['saveform'])){
    	echo "<pre>";
    	print_r($_POST) ; die;
    	
    	echo $man->saveApply($_POST);
    }
    ?>
<?php
    if(isset($_GET['action']) && $_GET['action'] == 'approve'){ ?>
<?php
    $id = $_GET['id'];
    $id = $help->validAndEscape($_GET['id']);  
    $stmt = $db->link->query("select * from apply_pre where serial = '$id'") or die($db->link->error); 
    if($stmt)
    $applydata = $stmt->fetch_assoc();
    ?>
<form action="print.php" method="post" enctype="multipart/form-data">
    <div class="wrapper">
    <div class="container">
    <div class="row">
    <!--/.span3-->
    <div class="span12">
        <div class="content">
            <div class="module">
                <div class="module-body">
                    <input type="hidden" name="formid" value=""/>
                    <!-- <form action="print.php" method="post"  enctype="multipart/form-data"> -->
                    <input type="hidden" name="formid"  />
                    <div class="row-fluid">
                        <div class="span3">
                            <div class="form-group">
                                <label>ফাইল </label>
                                <input type="text" name="fileno"  class="span12" required=""/>
                            </div>
                        </div>
                        <div class="span2">
                            <div class="form-group">
                                <label>আবেদনের তারিখঃ </label>
                                <input type="date" name="date"   class="span12" />
                            </div>
                        </div>
                    </div>
                    <div class="row-fluid">
                        <div class="span3">
                            <!-- <form action="applicationlist.php" method="post" enctype="multipart/form-data"> -->
                            <div class="form-group">
                                <label> স্মারক নাম্বার লিখুন</label>
                                <input type="text" name="sharok" class="span12"   class="span12" />
                                <input type="hidden" name="id" value="<?php //echo $_GET['id']; ?>" class="span12" />
                            </div>
                        </div>
                        <div class="span2">
                            <div class="form-group">
                                <label>স্বারক সম্পাদনা তারিখ </label>
                                <input type="date"  name="sharokdate" class="span12"    class="span12"/>
                                <!---sharokdate last update কলামে যুক্ত হবে  স্বারক বিষয়টি পরবর্তীতে apply.php থেকে ডিলিট হবে -->
                            </div>
                        </div>
                        <div class="span4">
                            <div class="form-group">
                                <label>বিষয়</label>
                                <input type="text"  name="subject" class="span12" class="span12"  />
                            </div>
                        </div>
                        <div class="span3">
                            <div class="form-group">
                                <label>সুত্র</label>
                                <input type="text"  name="source" class="span12" class="span12"  />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <!--/.span3-->
        <div class="span12">
            <div class="content">
                <div class="module">
                    <div class="module-head">
                        <h3> সাধারণ তথ্য</h3>
                    </div>
                    <div class="module-body">
                        <div class="row-fluid">
                            <div class="span3">
                                <div class="form-group">
                                    <label> জনাব/জনাবা </label>
                                    <input type="text" class="span12"   name="name" />
                                </div>
                            </div>
                            <div class="span3">
                                <div class="form-group">
                                    <label> পিতা/স্বামীর নাম</label>
                                    <input type="text" class="span12"    name="gurdian" />
                                </div>
                            </div>
                            <div class="span3">
                                <div class="form-group">
                                    <label> মাতার নাম</label>
                                    <input type="text" class="span12"  name="mother" />
                                </div>
                            </div>
                            <div class="span3">
                                <div class="form-group">
                                    <label>আবেদনকারীর ছবি</label>
                                    <input type="file" class="span12" name="applicant_photo" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <!--/.span3-->
        <div class="span12">
            <div class="content">
                <div class="module">
                    <div class="module-head">
                        <h3> বর্তমান ঠিকানা</h3>
                    </div>
                    <div class="module-body">
                        <div class="row-fluid">
                            <div class="span4">
                                <div class="form-group">
                                    <label>বাড়ী</label>
                                    <input type="text"  name="chome"  id="chome"  class="span12"  />
                                </div>
                            </div>
                            <div class="span4">
                                <div class="form-group">
                                    <label>থানাঃ</label>
                                    <input type="text"  name="cps" id="cps"  class="span12"  />
                                </div>
                            </div>
                            <div class="span4">
                                <div class="form-group">
                                    <label> গ্রাম/মহল্লা </label>
                                    <input type="text"  name="cvill"  id="cvill" class="span12"   /></label>
                                </div>
                            </div>
                        </div>
                        <div class="row-fluid">
                            <div class="span4">
                                <div class="form-group">
                                    <label>জেলা</label>
                                    <input type="text"  name="cdist"  id="cdist" value="ফেনী"    class="span12"   />
                                </div>
                            </div>
                            <div class="span4">
                                <div class="form-group">
                                    <label>ডাকঘর</label>
                                    <input type="text"  name="cpost"  id="cpost" class="span12"  />
                                </div>
                            </div>
                            <div class="span4">
                                <div class="form-group">
                                    <label>মোবাইলঃ</label>
                                    <input type="text"  name="mobile"  class="span12"  placeholder="ইংরেজিতে লিখুন"   />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <!--/.span3-->
        <div class="span12">
            <div class="content">
                <div class="module">
                    <div class="module-head">
                        <h3 class="box-title">স্থায়ী ঠিকানা  &nbsp; &nbsp;<input type="checkbox" id="addressconfirm"/>&nbsp;ঐ</h3>
                    </div>
                    <div class="module-body">
                        <div class="row-fluid">
                            <div class="span4">
                                <div class="form-group">
                                    <label>বাড়ী</label>
                                    <input type="text"  name="phome" id="phome" class="span12"   />
                                </div>
                            </div>
                            <div class="span4">
                                <div class="form-group">
                                    <label> গ্রাম/মহল্লা </label>
                                    <input type="text"  name="pvill" id="pvill"  class="span12"   /></label>
                                </div>
                            </div>
                            <div class="span4">
                                <div class="form-group">
                                    <label>ডাকঘর</label>
                                    <input type="text"  name="ppost" id="ppost"  class="span12"  />
                                </div>
                            </div>
                        </div>
                        <div class="row-fluid">
                            <div class="span4">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label>থানাঃ</label>
                                        <input type="text"  name="pps"  id="pps"  class="span12"   />
                                    </div>
                                </div>
                            </div>
                            <div class="span4">
                                <div class="form-group">
                                    <label>জেলা</label>
                                    <input type="text"  name="pdist" value="ফেনী"  id="pdist" class="span12"  />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <!--/.span3-->
        <div class="span12">
            <div class="content">
                <div class="module">
                    <div class="module-head">
                        <h3> নির্মাণ কাজের তথ্য</h3>
                    </div>
                    <div class="module-body">
                        <div class="row-fluid">
                            <div class="span6">
                                <div class="form-group">
                                    <label>ভবনের ধরণ</label>
                                    <select name="building_type" id="" class="form-control option-selector">
                                        <option selected="" disabled>নির্বাচন করুন</option>
                                        <option value="আধাপাকা আবাসিক">আধাপাকা আবাসিক</option>
                                        <option value="আধাপাকা বাণিজ্যিক">আধাপাকা বাণিজ্যিক</option>
                                        <option value="আধাপাকা আবাসিক ও বাণিজ্যিক">আধাপাকা আবাসিক ও বাণিজ্যিক</option>
                                        <option value="আবাসিক">আবাসিক</option>
                                        <option value="বাণিজ্যিক">বাণিজ্যিক</option>
                                        <option value="আবাসিক ও বাণিজ্যিক">আবাসিক ও বাণিজ্যিক</option>
                                        <option value="সীমানা প্রাচীর">সীমানা প্রাচীর</option>
                                        <option value="আধাপাকা আবাসিক ও সীমানা প্রাচীর">আধাপাকা আবাসিক ও সীমানা প্রাচীর</option>
                                        <option value="আধাপাকা বাণিজ্যিক ও সীমানা প্রাচীর">আধাপাকা বাণিজ্যিক ও সীমানা প্রাচীর</option>
                                        <option value="পুকুর খনন">পুকুর খনন</option>
                                        <option value="অন্যান্য">অন্যান্য</option>
                                    </select>
                                </div>
                            </div>
                            <div class="span6">
                                <div class="form-group">
                                    <label>নকশায়/ডিজাইনে (  ফাউন্ডেশন )</label>
                                    <input type="text"  name="design"  class="span12"  />
                                </div>
                            </div>
                        </div>
                        <div class="row-fluid">
                            <div class="span2">
                                <div class="form-group">
                                    <label>দৈর্ঘ্য</label>
                                    <input type="text" name="rlength" id="rlength" class="span12" 	/>
                                </div>
                            </div>
                            <div class="span2">
                                <div class="form-group">
                                    <label>প্রস্থ</label>
                                    <input type="text" name="rwidth" id="rwidth" class="span12"   	/>
                                </div>
                            </div>
                            <div class="span2">
                                <div class="form-group">
                                    <label>সংখ্যা</label>
                                    <input type="text" name="rnumber" id="rnumber" class="span12" 	/>
                                </div>
                            </div>
                            <div class="span2">
                                <div class="form-group">
                                    <label>আবাসিক এরিয়া বর্গফুট</label>
                                    <input type="text" name="rarea" id="rarea" class="span12" 		/>
                                </div>
                            </div>
                            <div class="span4">
                                <div class="form-group">
                                    <label>আবাসিক এরিয়া বিবরণ</label>
                                    <input type="text" name="rbuildingdetails" class="span12"   />
                                </div>
                            </div>
                        </div>
                        <div class="row-fluid">
                            <div class="span2">
                                <div class="form-group">
                                    <label>দৈর্ঘ্য</label>
                                    <input type="text" name="clength" id="clength" class="span12"  />
                                </div>
                            </div>
                            <div class="span2">
                                <div class="form-group">
                                    <label>প্রস্থ</label>
                                    <input type="text" name="cwidth" id="cwidth" class="span12"  />
                                </div>
                            </div>
                            <div class="span2">
                                <div class="form-group">
                                    <label>সংখ্যা</label>
                                    <input type="text" name="cnumber" id="cnumber" class="span12"   />
                                </div>
                            </div>
                            <div class="span2">
                                <div class="form-group">
                                    <label>বাণিজ্যিক এরিয়া বর্গফুট</label>
                                    <input type="text" name="carea" id="carea"  class="span12"   />
                                </div>
                            </div>
                            <div class="span4">
                                <div class="form-group">
                                    <label>বাণিজ্যিক এরিয়া বিবরণ</label>
                                    <input type="text" name="cbuildingdetails" class="span12"   />
                                </div>
                            </div>
                        </div>
                        <div class="row-fluid">
                            <!--Commercial Area End---> 
                            <!--Recidencial Border Area Start--> 
                            <!--rb-->
                            <div class="span2">
                                <div class="form-group">
                                    <label>দৈর্ঘ্য</label>
                                    <input type="text" name="rblength" id="rblength" class="span12"     />
                                </div>
                            </div>
                            <div class="span2">
                                <div class="form-group">
                                    <label>প্রস্থ</label>
                                    <input type="text" name="rbwidth" id="rbwidth" class="span12"    />
                                </div>
                            </div>
                            <div class="span2">
                                <div class="form-group">
                                    <label>সংখ্যা</label>
                                    <input type="text" name="rbnumber" id="rbnumber" class="span12"     />
                                </div>
                            </div>
                            <div class="span2">
                                <div class="form-group">
                                    <label>আবাসিক-সীমানা প্রাচীর</label>
                                    <input type="text" name="rbarea" id="rbarea"  class="span12"     />
                                </div>
                            </div>
                            <div class="span4">
                                <div class="form-group">
                                    <label>আবাসিক সীমানা প্রাচীর এরিয়া বিবরণ</label>
                                    <input type="text" name="rbbuildingdetails" class="span12"    />
                                </div>
                            </div>
                        </div>
                        <div class="row-fluid">
                            <!--Recidencial Border Area End--> 
                            <!--Simana Prachir start--> 
                            <!--simana - boundary(b)-->
                            <div class="span2">
                                <div class="form-group">
                                    <label>দৈর্ঘ্য</label>
                                    <input type="text" name="blength" id="blength" class="span12"  />
                                </div>
                            </div>
                            <div class="span2">
                                <div class="form-group">
                                    <label>প্রস্থ</label>
                                    <input type="text" name="bwidth" id="bwidth" class="span12"   " />
                                </div>
                            </div>
                            <div class="span2">
                                <div class="form-group">
                                    <label>সংখ্যা</label>
                                    <input type="text" name="bnumber" id="bnumber" class="span12"    />
                                </div>
                            </div>
                            <div class="span2">
                                <div class="form-group">
                                    <label>সীমানা প্রাচীর বর্গফুট</label>
                                    <input type="text" name="barea" id="barea"  class="span12"  />
                                </div>
                            </div>
                            <div class="span4">
                                <div class="form-group">
                                    <label>সীমানা প্রাচীর এরিয়া বিবরণ</label>
                                    <input type="text" name="bbuildingdetails" class="span12"    />
                                </div>
                            </div>
                        </div>
                        <div class="row-fluid">
                            <!--Simana Prachir  end--> 
                            <!--Other  start--> 
                            <!--Other - other(o)-->
                            <div class="span2">
                                <div class="form-group">
                                    <label>দৈর্ঘ্য</label>
                                    <input type="text" name="olength" id="olength" class="span12"/>
                                </div>
                            </div>
                            <div class="span2">
                                <div class="form-group">
                                    <label>প্রস্থ</label>
                                    <input type="text" name="owidth" id="owidth" class="span12" />
                                </div>
                            </div>
                            <div class="span2">
                                <div class="form-group">
                                    <label>সংখ্যা</label>
                                    <input type="text" name="onumber" id="onumber" class="span12" />
                                </div>
                            </div>
                            <div class="span2">
                                <div class="form-group">
                                    <label>অন্যান্য এরিয়া বর্গফুট</label>
                                    <input type="text" name="oarea" id="oarea"  class="span12" />
                                </div>
                            </div>
                            <div class="span4">
                                <div class="form-group">
                                    <label>অন্যান্য এরিয়া বিবরণ</label>
                                    <input type="text" name="obuildingdetails" class="span12"  />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <!--/.span3-->
        <div class="span12">
            <div class="content">
                <div class="module">
                    <div class="module-head">
                        <h3> নির্মাণ অনুমোদন ফি</h3>
                    </div>
                    <div class="module-body">
                        <div class="row-fluid">
                            <div class="span2">
                                <div class="form-group">
                                    <label>নির্মাণ অনুমোদন ফি</label>
                                    <input type="text"  name="approve_fee" id="approve_fee"   class="span12" />
                                </div>
                            </div>
                            <div class="span2">
                                <div class="form-group">
                                    <label>ভ্যাট</label>
                                    <input type="text"  name="approve_vat" id="approve_vat"     class="span12" />
                                </div>
                            </div>
                            <div class="span2">
                                <div class="form-group">
                                    <label>মোট নির্মাণ অনুমোদন ফি</label>
                                    <input type="text"  name="total_approve_fee" id="total_approve_fee"    class="span12" />
                                </div>
                            </div>
                            <div class="span2">
                                <div class="form-group">
                                    <label>রশিদ/পে-অর্ডার নং</label>
                                    <input type="text"  name="order_no"  class="span12" />
                                    </label>
                                </div>
                            </div>
                            <div class="span4">
                                <div class="form-group">
                                    <label>জমা দেওয়ার স্থান/ ব্যাংকের নাম</label>
                                    <input type="text"  name="bank_name"  class="span12" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <!--/.span3-->
        <div class="span12">
            <div class="content">
                <div class="module">
                    <div class="module-head">
                        <h3> নির্মাণ কাজের স্থান</h3>
                    </div>
                    <div class="module-body">
                        <div class="row-fluid">
                            <div class="span2">
                                <div class="form-group">
                                    <label>মৌজার নাম</label>
                                    <input type="text" name="mouja"  class="span12" />
                                </div>
                            </div>
                            <div class="span2">
                                <div class="form-group">
                                    <label>দাগ নং</label>
                                    <input type="text" name="dno"  class="span12" />
                                </div>
                            </div>
                            <div class="span2">
                                <div class="form-group">
                                    <label>খতিয়ান নং</label>
                                    <input type="text" name="khotian"  class="span12" >
                                </div>
                            </div>
                            <div class="span2">
                                <div class="form-group">
                                    <label>ওয়ার্ড নং</label>
                                    <select name="wardno" id="" class="span12" value="<?php echo $applydata['cbuildingdetails']; ?>">
                                    <select name="wardno" id="" class="form-control">
                                        <option value="" selected disabled>নির্বাচন করুন</option>
                                        <?php
                                            $status = $db->link->query("select * FROM phonebook where not designation='chairman'");
                                            if ($status) {
                                            	$i = 0;
                                            	while ($result = $status->fetch_assoc()) { $i++;
                                            	?>
                                        <option value="<?php echo $result['name'];?>"><?php echo $result['name'];?></option>
                                        <?php }} ?>
                                    </select>
                                </div>
                            </div>
                            <div class="span4">
                                <div class="form-group">
                                    <label>লোকেশন</label>
                                    <input type="text" name="location"  class="span12" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
    <!--/.span3-->
    <div class="span12">
        <div class="content">
            <div class="module">
                <div class="module-head">
                    <h3> অনান্য তথ্য</h3>
                </div>
                <div class="module-body">
                    <div class="row-fluid">
                        <div class="span4">
                            <div class="form-group">
                                <label>সাইট প্ল্যান </label>
                                <input type="file" name="attach_siteplan" id="attach_siteplan"   class="span12" />
                            </div>
                        </div>
                        <div class="span4">
                            <div class="form-group">
                                <label>নীচ তলা</label>
                                <input type="file" name="attach_groundfloor" id="attach_groundfloor"   class="span12" />
                            </div>
                        </div>
                        <div class="span4">
                            <div class="form-group">
                                <label>অন্যান্য তলা</label>
                                <input type="file" name="attach_otherfloor" id="attach_otherfloor"   class="span12" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <center>
        <input type="hidden" name="updateform"/>
        <button type="reset" class="btn-lg btn-danger"  style="max-width:100px;">মুছুন</button>
        <button type="submit" class="btn-lg btn-success" name="saveform"  style="max-width:100px;">সেভ</button>
        <input type="hidden" name="id" value="<?php echo $applyid; ?>"/>
        <center>
    </div>
</form>
<?php	} else {  ?>
<form action="print.php" method="post" enctype="multipart/form-data">
    <div class="wrapper">
    <div class="container">
    <div class="row">
        <!--/.span3-->
        <div class="span12">
            <div class="content">
                <div class="module">
                    <div class="module-head">
                        <h3> মূল বিষয় সমূহ</h3>
                    </div>
                    <div class="module-body">
                        <!-- <form action="applicationlist.php" method="post"  enctype="multipart/form-data"> -->
                        <input type="hidden" name="formid" value=""/>
                        <input type="hidden" name="formid"  />
                        <div class="row-fluid">
                            <!-- <form action="print.php" method="post"  enctype="multipart/form-data"> -->
                            <input type="hidden" name="formid"  />
                            <div class="row-fluid">
                                <div class="span3">
                                    <div class="form-group">
                                        <label>ফাইল নং</label>
                                        <input type="text" name="fileno"  class="span12" required=""/>
                                    </div>
                                </div>
                                <div class="span2">
                                    <div class="form-group">
                                        <label>আবেদনের তারিখঃ </label>
                                        <input type="date" name="date"   class="span12" />
                                    </div>
                                </div>
                            </div>
                            <div class="row-fluid">
                                <div class="span3">
                                    <!-- <form action="applicationlist.php" method="post" enctype="multipart/form-data"> -->
                                    <div class="form-group">
                                        <label> স্মারক নাম্বার লিখুন</label>
                                        <input type="text" name="sharok" class="span12"   class="span12" />
                                        <input type="hidden" name="id" value="<?php //echo $_GET['id']; ?>" class="span12" />
                                    </div>
                                </div>
                                <div class="span2">
                                    <div class="form-group">
                                        <label>স্বারক সম্পাদনা তারিখ </label>
                                        <input type="date"  name="sharokdate" class="span12"    class="span12"/>
                                        <!---sharokdate last update কলামে যুক্ত হবে  স্বারক বিষয়টি পরবর্তীতে apply.php থেকে ডিলিট হবে -->
                                    </div>
                                </div>
                                <div class="span4">
                                    <div class="form-group">
                                        <label>বিষয়</label>
                                        <input type="text"  name="subject" class="span12" class="span12"  />
                                    </div>
                                </div>
                                <div class="span3">
                                    <div class="form-group">
                                        <label>সুত্র</label>
                                        <input type="text"  name="source" class="span12" class="span12"  />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <!--/.span3-->
                <div class="span12">
                    <div class="content">
                        <div class="module">
                            <div class="module-head">
                                <h3> সাধারণ তথ্য</h3>
                            </div>
                            <div class="module-body">
                                <div class="row-fluid">
                                    <div class="span3">
                                        <div class="form-group">
                                            <label> জনাব/জনাবা </label>
                                            <input type="text" class="span12"   name="name" />
                                        </div>
                                    </div>
                                    <div class="span3">
                                        <div class="form-group">
                                            <label> পিতা/স্বামীর নাম</label>
                                            <input type="text" class="span12"    name="gurdian" />
                                        </div>
                                    </div>
                                    <div class="span3">
                                        <div class="form-group">
                                            <label> মাতার নাম</label>
                                            <input type="text" class="span12"  name="mother" />
                                        </div>
                                    </div>
                                    <div class="span3">
                                        <div class="form-group">
                                            <label>আবেদনকারীর ছবি</label>
                                            <input type="file" class="span12" name="applicant_photo" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <!--/.span3-->
                <div class="span12">
                    <div class="content">
                        <div class="module">
                            <div class="module-head">
                                <h3> বর্তমান ঠিকানা</h3>
                            </div>
                            <div class="module-body">
                                <div class="row-fluid">
                                    <div class="span4">
                                        <div class="form-group">
                                            <label>বাড়ী</label>
                                            <input type="text"  name="chome"  id="chome"  class="span12"  />
                                        </div>
                                    </div>
                                    <div class="span4">
                                        <div class="form-group">
                                            <label>থানাঃ</label>
                                            <input type="text"  name="cps" id="cps"  class="span12"  />
                                        </div>
                                    </div>
                                    <div class="span4">
                                        <div class="form-group">
                                            <label> গ্রাম/মহল্লা </label>
                                            <input type="text"  name="cvill"  id="cvill" class="span12"   /></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <div class="span4">
                                        <div class="form-group">
                                            <label>জেলা</label>
                                            <input type="text"  name="cdist"  id="cdist" value="ফেনী"    class="span12"   />
                                        </div>
                                    </div>
                                    <div class="span4">
                                        <div class="form-group">
                                            <label>ডাকঘর</label>
                                            <input type="text"  name="cpost"  id="cpost" class="span12"  />
                                        </div>
                                    </div>
                                    <div class="span4">
                                        <div class="form-group">
                                            <label>মোবাইলঃ</label>
                                            <input type="text"  name="mobile"  class="span12"  placeholder="ইংরেজিতে লিখুন"   />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <!--/.span3-->
                <div class="span12">
                    <div class="content">
                        <div class="module">
                            <div class="module-head">
                                <h3 class="box-title">স্থায়ী ঠিকানা  &nbsp; &nbsp;<input type="checkbox" id="addressconfirm"/>&nbsp;ঐ</h3>
                            </div>
                            <div class="module-body">
                                <div class="row-fluid">
                                    <div class="span4">
                                        <div class="form-group">
                                            <label>বাড়ী</label>
                                            <input type="text"  name="phome" id="phome" class="span12"   />
                                        </div>
                                    </div>
                                    <div class="span4">
                                        <div class="form-group">
                                            <label> গ্রাম/মহল্লা </label>
                                            <input type="text"  name="pvill" id="pvill"  class="span12"   /></label>
                                        </div>
                                    </div>
                                    <div class="span4">
                                        <div class="form-group">
                                            <label>ডাকঘর</label>
                                            <input type="text"  name="ppost" id="ppost"  class="span12"  />
                                        </div>
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <div class="span4">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label>থানাঃ</label>
                                                <input type="text"  name="pps"  id="pps"  class="span12"   />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="span4">
                                        <div class="form-group">
                                            <label>জেলা</label>
                                            <input type="text"  name="pdist" value="ফেনী"  id="pdist" class="span12"  />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <!--/.span3-->
                <div class="span12">
                    <div class="content">
                        <div class="module">
                            <div class="module-head">
                                <h3> নির্মাণ কাজের তথ্য</h3>
                            </div>
                            <div class="module-body">
                                <div class="row-fluid">
                                    <div class="span6">
                                        <div class="form-group">
                                            <label>ভবনের ধরণ</label>
                                            <select name="building_type" id="" class="form-control option-selector">
                                                <option selected="" disabled>নির্বাচন করুন</option>
                                                <option value="আধাপাকা আবাসিক">আধাপাকা আবাসিক</option>
                                                <option value="আধাপাকা বাণিজ্যিক">আধাপাকা বাণিজ্যিক</option>
                                                <option value="আধাপাকা আবাসিক ও বাণিজ্যিক">আধাপাকা আবাসিক ও বাণিজ্যিক</option>
                                                <option value="আবাসিক">আবাসিক</option>
                                                <option value="বাণিজ্যিক">বাণিজ্যিক</option>
                                                <option value="আবাসিক ও বাণিজ্যিক">আবাসিক ও বাণিজ্যিক</option>
                                                <option value="সীমানা প্রাচীর">সীমানা প্রাচীর</option>
                                                <option value="আধাপাকা আবাসিক ও সীমানা প্রাচীর">আধাপাকা আবাসিক ও সীমানা প্রাচীর</option>
                                                <option value="আধাপাকা বাণিজ্যিক ও সীমানা প্রাচীর">আধাপাকা বাণিজ্যিক ও সীমানা প্রাচীর</option>
                                                <option value="পুকুর খনন">পুকুর খনন</option>
                                                <option value="অন্যান্য">অন্যান্য</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="span6">
                                        <div class="form-group">
                                            <label>নকশায়/ডিজাইনে (  ফাউন্ডেশন )</label>
                                            <input type="text"  name="design"  class="span12"  />
                                        </div>
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <div class="span2">
                                        <div class="form-group">
                                            <label>দৈর্ঘ্য</label>
                                            <input type="text" name="rlength" id="rlength"  class="span12" 	/>
                                        </div>
                                    </div>
                                    <div class="span2">
                                        <div class="form-group">
                                            <label>প্রস্থ</label>
                                            <input type="text" name="rwidth" id="rwidth" class="span12"   	/>
                                        </div>
                                    </div>
                                    <div class="span2">
                                        <div class="form-group">
                                            <label>সংখ্যা</label>
                                            <input type="text" name="rnumber" id="rnumber" class="span12" 	/>
                                        </div>
                                    </div>
                                    <div class="span2">
                                        <div class="form-group">
                                            <label>আবাসিক এরিয়া বর্গফুট</label>
                                            <input type="text" name="rarea" id="rarea"  class="span12" 		/>
                                        </div>
                                    </div>
                                    <div class="span4">
                                        <div class="form-group">
                                            <label>আবাসিক এরিয়া বিবরণ</label>
                                            <input type="text" name="rbuildingdetails" class="span12"   />
                                        </div>
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <div class="span2">
                                        <div class="form-group">
                                            <label>দৈর্ঘ্য</label>
                                            <input type="text" name="clength" id="clength" class="span12"  />
                                        </div>
                                    </div>
                                    <div class="span2">
                                        <div class="form-group">
                                            <label>প্রস্থ</label>
                                            <input type="text" name="cwidth" id="cwidth"  class="span12"  />
                                        </div>
                                    </div>
                                    <div class="span2">
                                        <div class="form-group">
                                            <label>সংখ্যা</label>
                                            <input type="text" name="cnumber" id="cnumber"  class="span12"   />
                                        </div>
                                    </div>
                                    <div class="span2">
                                        <div class="form-group">
                                            <label>বাণিজ্যিক এরিয়া বর্গফুট</label>
                                            <input type="text" name="carea" id="carea"   class="span12"   />
                                        </div>
                                    </div>
                                    <div class="span4">
                                        <div class="form-group">
                                            <label>বাণিজ্যিক এরিয়া বিবরণ</label>
                                            <input type="text" name="cbuildingdetails" class="span12"   />
                                        </div>
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <!--Commercial Area End---> 
                                    <!--Recidencial Border Area Start--> 
                                    <!--rb-->
                                    <div class="span2">
                                        <div class="form-group">
                                            <label>দৈর্ঘ্য</label>
                                            <input type="text" name="rblength" id="rblength" class="span12"     />
                                        </div>
                                    </div>
                                    <div class="span2">
                                        <div class="form-group">
                                            <label>প্রস্থ</label>
                                            <input type="text" name="rbwidth" id="rbwidth" class="span12"    />
                                        </div>
                                    </div>
                                    <div class="span2">
                                        <div class="form-group">
                                            <label>সংখ্যা</label>
                                            <input type="text" name="rbnumber"  id="rbnumber" class="span12"     />
                                        </div>
                                    </div>
                                    <div class="span2">
                                        <div class="form-group">
                                            <label>আবাসিক-সীমানা প্রাচীর</label>
                                            <input type="text" name="rbarea"  id="rbarea" class="span12"     />
                                        </div>
                                    </div>
                                    <div class="span4">
                                        <div class="form-group">
                                            <label>আবাসিক সীমানা প্রাচীর এরিয়া বিবরণ</label>
                                            <input type="text" name="rbbuildingdetails" class="span12"    />
                                        </div>
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <!--Recidencial Border Area End--> 
                                    <!--Simana Prachir start--> 
                                    <!--simana - boundary(b)-->
                                    <div class="span2">
                                        <div class="form-group">
                                            <label>দৈর্ঘ্য</label>
                                            <input type="text" name="blength" id="blength" class="span12"  />
                                        </div>
                                    </div>
                                    <div class="span2">
                                        <div class="form-group">
                                            <label>প্রস্থ</label>
                                            <input type="text" name="bwidth" id="bwidth"  class="span12"   " />
                                        </div>
                                    </div>
                                    <div class="span2">
                                        <div class="form-group">
                                            <label>সংখ্যা</label>
                                            <input type="text" name="bnumber" id="bnumber"  class="span12"    />
                                        </div>
                                    </div>
                                    <div class="span2">
                                        <div class="form-group">
                                            <label>সীমানা প্রাচীর বর্গফুট</label>
                                            <input type="text" name="barea" id="barea"  class="span12"  />
                                        </div>
                                    </div>
                                    <div class="span4">
                                        <div class="form-group">
                                            <label>সীমানা প্রাচীর এরিয়া বিবরণ</label>
                                            <input type="text" name="bbuildingdetails" class="span12"    />
                                        </div>
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <!--Simana Prachir  end--> 
                                    <!--Other  start--> 
                                    <!--Other - other(o)-->
                                    <div class="span2">
                                        <div class="form-group">
                                            <label>দৈর্ঘ্য</label>
                                            <input type="text" name="olength"  id="olength" class="span12"/>
                                        </div>
                                    </div>
                                    <div class="span2">
                                        <div class="form-group">
                                            <label>প্রস্থ</label>
                                            <input type="text" name="owidth" id="owidth"  class="span12" />
                                        </div>
                                    </div>
                                    <div class="span2">
                                        <div class="form-group">
                                            <label>সংখ্যা</label>
                                            <input type="text" name="onumber" id="onumber" class="span12" />
                                        </div>
                                    </div>
                                    <div class="span2">
                                        <div class="form-group">
                                            <label>অন্যান্য এরিয়া বর্গফুট</label>
                                            <input type="text" name="oarea" id="oarea"  class="span12" />
                                        </div>
                                    </div>
                                    <div class="span4">
                                        <div class="form-group">
                                            <label>অন্যান্য এরিয়া বিবরণ</label>
                                            <input type="text" name="obuildingdetails" class="span12"  />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <!--/.span3-->
                <div class="span12">
                    <div class="content">
                        <div class="module">
                            <div class="module-head">
                                <h3> নির্মাণ অনুমোদন ফি</h3>
                            </div>
                            <div class="module-body">
                                <div class="row-fluid">
                                    <div class="span2">
                                        <div class="form-group">
                                            <label>নির্মাণ অনুমোদন ফি</label>
                                            <input type="text"  name="approve_fee"   class="span12" />
                                        </div>
                                    </div>
                                    <div class="span2">
                                        <div class="form-group">
                                            <label>ভ্যাট</label>
                                            <input type="text"  name="approve_vat"    class="span12" />
                                        </div>
                                    </div>
                                    <div class="span2">
                                        <div class="form-group">
                                            <label>মোট নির্মাণ অনুমোদন ফি</label>
                                            <input type="text"  name="total_approve_fee"   class="span12" />
                                        </div>
                                    </div>
                                    <div class="span2">
                                        <div class="form-group">
                                            <label>রশিদ/পে-অর্ডার নং</label>
                                            <input type="text"  name="order_no"  class="span12" />
                                            </label>
                                        </div>
                                    </div>
                                    <div class="span4">
                                        <div class="form-group">
                                            <label>জমা দেওয়ার স্থান/ ব্যাংকের নাম</label>
                                            <input type="text"  name="bank_name"  class="span12" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <!--/.span3-->
                <div class="span12">
                    <div class="content">
                        <div class="module">
                            <div class="module-head">
                                <h3> নির্মাণ কাজের স্থান</h3>
                            </div>
                            <div class="module-body">
                                <div class="row-fluid">
                                    <div class="span2">
                                        <div class="form-group">
                                            <label>মৌজার নাম</label>
                                            <input type="text" name="mouja"  class="span12" />
                                        </div>
                                    </div>
                                    <div class="span2">
                                        <div class="form-group">
                                            <label>দাগ নং</label>
                                            <input type="text" name="dno"  class="span12" />
                                        </div>
                                    </div>
                                    <div class="span2">
                                        <div class="form-group">
                                            <label>খতিয়ান নং</label>
                                            <input type="text" name="khotian"  class="span12" >
                                        </div>
                                    </div>
                                    <div class="span2">
                                        <div class="form-group">
                                            <label>ওয়ার্ড নং</label>
                                            <select name="wardno" id="" class="span12" value="<?php echo $applydata['cbuildingdetails']; ?>">
                                                <option value="" selected disabled>নির্বাচন করুন</option>
                                                <?php
                                                    $status = $db->link->query("select * FROM phonebook where not designation='chairman'");
                                                    if ($status) {
                                                    $i = 0;
                                                     while ($result = $status->fetch_assoc()) { $i++;
                                                    	   ?>
                                                <option value="<?php echo $result['name'];?>"><?php echo $result['name'];?></option>
                                                <?php }} ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="span4">
                                        <div class="form-group">
                                            <label>লোকেশন</label>
                                            <input type="text" name="location"  class="span12" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <!--/.span3-->
                <div class="span12">
                    <div class="content">
                        <div class="module">
                            <div class="module-head">
                                <h3> অনান্য তথ্য</h3>
                            </div>
                            <div class="module-body">
                                <div class="row-fluid">
                                    <div class="span4">
                                        <div class="form-group">
                                            <label>সাইট প্ল্যান </label>
                                            <input type="file" name="attach_siteplan" id="attach_siteplan"   class="span12" />
                                        </div>
                                    </div>
                                    <div class="span4">
                                        <div class="form-group">
                                            <label>নীচ তলা</label>
                                            <input type="file" name="attach_groundfloor" id="attach_groundfloor"   class="span12" />
                                        </div>
                                    </div>
                                    <div class="span4">
                                        <div class="form-group">
                                            <label>অন্যান্য তলা</label>
                                            <input type="file" name="attach_otherfloor" id="attach_otherfloor"   class="span12" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <center>
                    <input type="hidden" name="updateform"/>
                    <button type="reset" class="btn-lg btn-danger"  style="max-width:100px;">মুছুন</button>
                    <button type="submit" class="btn-lg btn-success" name="saveform"    style="max-width:100px;">সেভ</button>
                    <input type="hidden" name="id" value="<?php echo $applyid; ?>"/>
                    <center>
                </div>
</form>
<?php } ?>
</div>
</div>
</div>
<script  src="<?php echo  BASE_URL; ?>assets/js/jquery.min.js"></script>
<script src="<?php echo  BASE_URL; ?>assets/js/allowedfilecheck.js"></script>
<script src="<?php echo  BASE_URL; ?>assets/js/optionselector.js"></script>
<script  src="<?php echo  BASE_URL; ?>assets/js/custom.js"></script>