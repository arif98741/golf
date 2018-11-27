<?php include( 'lib/header.php'); ?>
<?php 
	if(isset($_POST['savedata'])){
		if($data->saveInvoice($_POST)){
			echo "<script>alert('সংযুক্তি সফল হয়েছে');</script>";
			}else{
			echo "<script>alert('সংযুক্তি ব্যররথ!');</script>";
		}
	}
	if(isset($_POST['updateform'])){
		$status = $man->updateApply($_POST);
		if ($status) {
			echo "<script>alert('সম্পাদনা সফল হয়েছে');</script>";
		}else{
			echo "<script>alert('সম্পাদনা ব্যর্থ!');</script>";
		}
		
	}
	
	if(isset($_GET['action']) && $_GET['action'] == 'delete'){
		$id = $_GET['id'];
		$stmt = $db->link->query("delete from apply where id='$id'");
		$stmt = $db->link->query("delete from fee where applyid='$id'");
		if($stmt){
			echo "<script>alert('ডিলিট সফল হয়েছে');</script>";
			}else{
			echo "<script>alert('ডিলিট ব্যর্থ!');</script>";
		}
	}
?>
<div class="wrapper">
	<div class="container"> 
		<div class="row">

									
			<div class="span12">
				<div class="content">
				 
					<div class="module">
						<div class="module-head">
							<h3> অনুমোদিত নির্মাণ সমূহ</h3>
						</div>
                      	<div class="module-body table">
							<table width="100%" border="0" cellpadding="0" cellspacing="0" class="datatable-1 table table-bordered table-striped	 display">
								<thead>
									<tr>
								
										<th align="left" valign="top" nowrap="nowrap" >ক্রমিক </th>
										<th width="15%"  align="left" valign="top" nowrap="nowrap" >ফাইল </th>
										<th align="left" valign="top" nowrap="nowrap" >আবেদনকারীর নাম</th>
										<th align="left" valign="top" nowrap="nowrap">লোকেশন</th>
										<th width="2%" align="left" valign="top" nowrap="nowrap"> ভবন এরিয়া</th>
										<th width="5%" align="left" valign="top" nowrap="nowrap"> অনুমোদনের তারিখ </th>
										<th width="2%" align="left" valign="top" > ফি</th>
											<th align="left"   valign="top" nowrap="nowrap"> --</th>
										
									</tr>
								</thead>
								<tbody>
									<?php
			                            $status = $db->link->query("select * from apply order by id desc");
			                            if ($status) {
											$i = 0;
			                                while ($result = $status->fetch_assoc()) { $i++;
											?>
                                            <tr>
											    
                                                <td  align="left"style="font-family:SutonnyMJ; font-size:16px"  nowrap><?php echo $i; ?></td>
                                                <td  width="10%" align="left" nowrap><?php echo $result['fileno']; ?></td>
                                                <td width="40%"> <?php echo $result['name']; ?></td>
                                                <td width="20%"  align="left"><?php echo $result['location']; ?></td>
												<td  width="5%" align="left"style="font-family:SutonnyMJ; font-size:16px"  width="5%" ><?php echo $result['rarea']; ?></td>
                                                <td  width="20%" align="left"style="font-family:SutonnyMJ; font-size:16px" nowrap><?php echo $help->formatDate($result['date'],'d-m-Y'); ?></td>
                                                <td  align="left" style="font-family:SutonnyMJ; font-size:16px" ><?php echo $result['approve_fee']; ?></td>
												        <td  align="right"   nowrap="nowrap" > 
													
													<div  class="dropdown" style=" white-space: nowrap;"  >
														<button ‍ class="btn btn-success dropdown-toggle" type="button" data-toggle="dropdown">অপশন
														<span class="caret"></span></button>
														<ul class="dropdown-menu"   >
															<li ><a href="<?php echo BASE_URL; ?>printapplyform.php?action=view&id=<?php echo $result['id']; ?>">প্রিন্ট প্রিভিউ</a></li>
															<li><a href="editsarok.php?action=edit&id=<?php echo $result['id']; ?>" value="<?php echo $result['id']; ?>">স্মারক</a></li>
															
																<li ><a href="<?php echo BASE_URL; ?>editapply.php?action=edit&id=<?php echo $result['id']; ?>">সম্পাদনা</a></li>
															<li><a href="<?php echo BASE_URL; ?>addattachment.php?action=upload&id=<?php echo $result['id']; ?>">ফাইল সংযুক্তি</a></li>
														 
															<li><a href="<?php echo BASE_URL; ?>filelist.php?action=viewfiles&id=<?php echo $result['id']; ?>">ফাইল সমূহ</a></li>
															
															<li><a href="?action=delete&id=<?php echo $result['id']; ?>" onclick="return confirm('are you sure to delete?') "> ডিলিট</a></li>
														</ul>
															<a href="<?php echo BASE_URL; ?>printapplyform.php?action=view&id=<?php echo $result['id']; ?>" class="btn btn-warning"><i class="menu-icon icon-print"></i>  </a>
													</div>	
												 
												
													
												</td>
                                    
								  </tr>
										<?php }} ?>
								</tbody>
							</table>
					  </div>
					</div><!--/.module-->
				</div><!--/.content-->
			</div><!--/.span9--> 
		</div>
	</div>
	<!--/.container-->
</div>
<!--/.wrapper-->
<?php include( 'lib/footer.php'); ?>									