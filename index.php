<?php include('lib/header.php'); ?>
<div class="wrapper">

	<div class="container">
	
		<?php if(isset($_GET['message']) && $_SESSION['message'] !== ''){ ?>

			<p class="alert alert-success" id="message"><?php  echo $_SESSION['message']; ?></p>

		<?php } ?>
				

		<div class="row">

			<!--/.span3-->

			<div class="span12">

				<div class="content">

					<div class="btn-controls">

						<div class="btn-box-row row-fluid">

							<div class="span12">

								<div class="row-fluid">

									<div class="span12">

										<a href="newapplicationlist.php" class="btn-box medium span4"><i class="icon-file"></i><b>Total Raise</b>

											</a>
										<a href="incomplete_application_list.php" class="btn-box medium span4"><i class="icon-pause"></i><b>Most Raised Golfer</b>

										</a>
										
										<a href="approved_application_list.php" class="btn-box medium span4"><i class="icon-folder-open"></i><b> Most Raised Team</b>

										</a>

									</a>

								</div>

							</div>

							<div class="row-fluid">

								<div class="span12">
	<a href="apply.php" class="btn-box medium span4"><i class="icon-ok"></i><b>Total Golfers</b>

										</a>
									<a href="aproved_application.php" class="btn-box medium span4"><i class="icon-check"></i><b>Total Donation</b>

									</a>

									<a href="report.php" class="btn-box medium span4"><i class="icon-print"></i><b>Teams</b>

									</a>

								</div>

							</div>

							<div class="row-fluid">

								<div class="span12">

									<!-- last three donors -->
									
									

								</div>

							</div>

						</div>

						


								</div>

								</div>

								</div>

								<!--/.content-->

								</div>

								<!--/.span9-->

								</div>

								</div>

								<!--/.container-->

								</div>

								<!--/.wrapper-->

								<?php include( 'footer.php'); ?>																																																	