<!-- begin:: Page Setting -->
<?php
$page_title = 'Add Customer'; 
$page_type = 'CREATE';
$page_property = '';
?>

<!-- end:: Page Setting -->

<!-- include:: Begin file-->
<?php include "../begin.php"; ?>

<!-- begin:: Content -->
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
	<div class="row">
		<div class="col-lg-12">
			<!--begin::Portlet-->
			<div class="kt-portlet" id="kt_page_portlet">
				<!-- <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"> -->
				<div class="kt-portlet__head kt-portlet__head--lg">
					<div class="kt-portlet__head-label">
						<h3 class="kt-portlet__head-title"><?php echo $page_title ?></h3>
						<h3 class="kt-portlet__head-title">
							<?php

							// Check If form submitted, insert form data into users table.
							if (isset($_POST['Submit'])) {
								$name = $_POST['name'];
								$mobile = $_POST['mobile'];
							    $address = $_POST['address'];


								// Insert user data into table
								$result = mysqli_query($connection, "INSERT INTO mst_customer(name,mobile,address) VALUES('$name','$mobile','$address')");

								// Show message when user added
								echo "";
							}
							?>
						</h3>
					</div>

					<div class="kt-portlet__head-toolbar">
						<a href="index.php" class="btn btn-secondary kt-margin-r-10">
							<i class="la la-arrow-left"></i>
							<span class="kt-hidden-mobile">Back</span>
						</a>
					</div>
				</div>
				<div class="kt-portlet__body">
					<div class="row">
						<div class="col-xl-2"></div>
						<div class="col-xl-8">
							<div class="kt-section kt-section--first">
								<div class="kt-section__body">
									<h3 class="kt-section__title kt-section__title-lg">Brand</h3>
									<form class="kt-form" method="post" action="add.php">
										<div class="form-group row">
											<label class="col-3 col-form-label">Customer</label>
											<div class="col-9">
												<input class="form-control" type="text" placeholder="Customer Name" name="name">
											</div>
										</div>										
										<div class="form-group row">
											<label class="col-3 col-form-label">Mobile</label>
											<div class="col-9">
												<input class="form-control" type="text" placeholder="Mobile Number" name="mobile">
											</div>
										</div>										
										<div class="form-group row">
											<label class="col-3 col-form-label">Address</label>
											<div class="col-9">
												<input class="form-control" type="text" placeholder="Address" name="address">
											</div>
										</div>										
										<div class="form-group btn-group">
											<button type="submit" class="btn btn-primary" name="Submit">
												<i class="la la-check"></i>
												<span class="kt-hidden-mobile">Save</span>
											</button>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="col-xl-2"></div>
					</div>
				</div>
			</div>
			<!--end::Portlet-->
		</div>
	</div>
</div>
<!-- end:: Content -->
</div>

<!-- CODE OF LIST -->

<?php include "list.php"; ?>

<!-- include:: footer -->
<?php include '../include/footer.php'; ?>