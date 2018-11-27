
<div class="footer">
	<div class="container">
		<b class="copyright">&copy; 2018
	</div>
</div>
<script src="scripts/jquery-1.9.1.min.js"></script>
<script src="scripts/jquery-ui-1.10.1.custom.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="scripts/datatables/jquery.dataTables.js"></script>
<script>
	$(document).ready(function() {
		$('.datatable-1').dataTable();
		$('.dataTables_paginate').addClass("btn-group datatable-pagination");
		$('.dataTables_paginate > a').wrapInner('<span />');
		$('.dataTables_paginate > a:first-child').append('<i class="icon-chevron-left shaded"></i>');
		$('.dataTables_paginate > a:last-child').append('<i class="icon-chevron-right shaded"></i>');
	} );
</script>
</body>						

<!-- MOdal for purpose add and Subject Add -->
<!--subject modal-->
<div class="modal fade" id="subject-default" style="display: none;">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header bg-primary">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">×</span></button>
                <h4 class="modal-title">বিষয় সংযোজন</h4>
				</div>
			<form action="" method="post">
				<div class="modal-body">
					<div class="form-group">
						<label>বিষয়ের নাম</label>
						<input type="text" name="subject" id="" class="form-control" />
						
					</div>
				</div>
				<div class="modal-footer">
					
					<button type="submit" class="btn btn-primary" name="savesubject" id="savesubjectbtn"><i class="fa fa-save"></i>&nbsp;সেভ</button>
				</div>
			</form>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>


<div class="modal fade" id="subject-update" style="display: none;">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header bg-primary">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">×</span></button>
                <h4 class="modal-title">বিষয় সম্পাদনা</h4>
			</div>
			<form action="subjectlist.php" method="post">
				<div class="modal-body">
					<div class="form-group">
      					<label>বিষয়ের নাম</label>
      					<input type="text" name="subject" id="forupdatesubject" class="form-control" />
						<input type="hidden" name="updatetoken" id="updatetokensubject" class="form-control" />
						
      					
					</div>
				</div>
				<div class="modal-footer">
					
					<button type="submit" class="btn btn-primary" name="updatesubject" id="savesubjectbtn"><i class="fa fa-save"></i>&nbsp;আপডেট</button>
				</div>
			</form>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>

<div class="modal fade" id="phonebook-update" style="display: none;">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header bg-primary">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">×</span></button>
                <h4 class="modal-title">ফোনবুক সম্পাদনা</h4>
			</div>
			<form action="phonebook.php" method="post">
				<div class="modal-body">
					<div class="form-group">
      					<label>মোবাইল নাম্বার</label>
      					<input type="text" name="mobile" id="forupdatephonebook" class="form-control" />
						<input type="hidden" name="updatetokenphonebook" id="updatetokenphonebook" class="form-control" />
					</div>
				</div>
				<div class="modal-footer">
					
					<button type="submit" class="btn btn-primary" name="updatephonebook" id="savesubjectbtn"><i class="fa fa-save"></i>&nbsp;আপডেট</button>
				</div>
			</form>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>



<div class="modal fade" id="rate-update" style="display: none;">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header bg-primary">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">×</span></button>
                <h4 class="modal-title">হার সম্পাদনা</h4>
			</div>
			<form action="rates.php" method="post">
				<div class="modal-body">
					<div class="form-group">
      					<label>ধরণ</label>
      					<input type="text" name="type" id="ratetype" class="form-control" readonly="" />
						
						<label>হার</label>
						<input type="text" name="ratefee" id="ratefee" class="form-control" />
						
						<label>ভ্যাট</label>
						<input type="text" name="vat" id="vat" class="form-control" />
						
						
						
						<input type="hidden" name="rateid" id="rateid" class="form-control" />
						
					</div>
				</div>
				<div class="modal-footer">
					
					<button type="submit" class="btn btn-primary" name="updaterate" id=""><i class="fa fa-save"></i>&nbsp;আপডেট</button>
				</div>
			</form>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>	

<!--Assign People(daettoroto bektigon)-->

<div class="modal fade" id="dutyperson-default" style="display: none;">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header bg-primary">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">×</span></button>
                <h4 class="modal-title">দায়িত্বরত ব্যক্তি সংযোজন</h4>
			</div>
			<form action="assignedpeople.php" method="post">
				<div class="modal-body">
					<div class="form-group">
						<label> নাম</label>
						<input type="text" name="name" id="name" class="form-control" required/>
					</div>
					
					<div class="form-group">
						<label>পদবী</label>
						<input type="text" name="designation" id="designation" class="form-control" required/>
					</div>
					
					<div class="form-group">
						<label>দায়িত্ব</label>
						<input type="text" name="duty" id="duty" class="form-control" required/>
					</div>
					
					<div class="form-group">
						<label>যোগদানের তারিখ</label>
						<input type="date" name="joindate" id="joindate" class="form-control" required/>
					</div>
					
					<div class="form-group">
						<label>অভ্যাহতির তারিখ</label>
						<input type="date" name="releasedate" id="releasedate" class="form-control" />
					</div>
					
					
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary" name="savedutyperson" id="savedutypersonbtn"><i class="fa fa-save"></i>&nbsp;সেভ</button>
				</div>
			</form>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
	<!-- সম্পাদনা assignedpeople.php তেই করা হয়েছে -->
</div>

<div class="modal fade" id="rate-update" style="display: none;">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header bg-primary">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">×</span></button>
                <h4 class="modal-title">হার সম্পাদনা</h4>
			</div>
			<form action="rates.php" method="post">
				<div class="modal-body">
					<div class="form-group">
      					<label>ধরণ</label>
      					<input type="text" name="type" id="ratetype" class="form-control" readonly="" />
						
						<label>হার</label>
						<input type="text" name="ratefee" id="ratefee" class="form-control" />
						
						<label>ভ্যাট</label>
						<input type="text" name="vat" id="vat" class="form-control" />
						
						<input type="hidden" name="rateid" id="rateid" class="form-control" />
					</div>
				</div>
				<div class="modal-footer">
					
					<button type="submit" class="btn btn-primary" name="updaterate" id=""><i class="fa fa-save"></i>&nbsp;আপডেট</button>
				</div>
			</form>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>	