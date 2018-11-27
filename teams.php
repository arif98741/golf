<?php include( 'lib/header.php'); ?>
<?php 
	if(isset($_POST['savedata'])){
		if($data->saveInvoice($_POST)){
			//echo "<script>alert('সংযুক্তি সফল হয়েছে');</script>";
			}else{
			//echo "<script>alert('সংযুক্তি ব্যররথ!');</script>";
		}
	}
	if(isset($_POST['updateform'])){
		$status = $man->updateApply($_POST);
		if ($status) {
			//echo "<script>alert('সম্পাদনা সফল হয়েছে');</script>";
		}else{
			//echo "<script>alert('সম্পাদনা ব্যর্থ!');</script>";
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
							<h3> Teams</h3>
						</div>
                      	<div class="module-body table">
							<table width="100%" border="0" cellpadding="0" cellspacing="0" class="datatable-1 table table-bordered table-striped	 display">
								<thead>
									<tr>
										<th width="50%"  align="left" valign="top" nowrap="nowrap" >
								Serial </th>
										<th width="50%"  align="left" valign="top" nowrap="nowrap" >Team Nmae</th>
										
										
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