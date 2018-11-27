			<div class="footer">
				<div class="container">
					<b class="copyright">&copy; ২০১৮ দাগনভূঞা পৌরসভা</b> কারিগরি সহযোগিতায়: এক্সপ্লোর আইটি
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
			<script>
				$(document).ready(function(){
					
					setTimeout(function(){
						$('#message').slideUp();
					},4000);
				});
			</script>
		</body>						