<!-- begin:: Page Setting -->
<?php
$page_title = 'WORKSHOP REGISTER';
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
								$job_no = $_POST['job_no'];
								$odate = $_POST['date'];
								$date = date("Y-m-d", strtotime($odate));
								$customer_name = $_POST['customer_name'];
								$mobile = $_POST['mobile'];
								$brand = $_POST['brand'];
								$model = $_POST['model'];
								$job_type = $_POST['job_type'];
								$complaint = $_POST['complaint'];
								$amount = $_POST['amount'];
								$remark = $_POST['remark'];
								$status = $_POST['status'];
								$o_out_date = $_POST['out_date'];
								$out_date = date("Y-m-d", strtotime($o_out_date));

								// Insert Register data into table
								$result = mysqli_query($connection, "INSERT INTO register(job_no,date,customer_name,mobile,brand,model,job_type,complaint,amount,remark,status,out_date) VALUES('$job_no','$date','$customer_name','$mobile','$brand','$model','$job_type','$complaint','$amount','$remark','$status','$out_date')");

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
									<h3 class="kt-section__title kt-section__title-lg"><?php echo $page_title; ?></h3>
									<form class="kt-form" method="post" action="add.php">
										<div class="form-group row">
											<label class="col-3 col-form-label">JOB NO</label>
											<div class="col-3">
												<input class="form-control" type="text" placeholder="JOB NO" name="job_no">
											</div>

										</div>

										<div class="form-group row">
											<label class="col-3 col-form-label">DATE</label>
											<div class="col-3">
												<input class="form-control" type="date" placeholder="DATE" name="date">
											</div>

										</div>

										<!-- <div class="form-group row">
											<label class="col-3 col-form-label">Customer Name</label>
											<div class="col-9">
												<input class="form-control" type="text" placeholder="Customer Name" name="customer_name">
											</div>
										</div> -->

										<div class="form-group row">
											<label class="col-form-label col-lg-3 col-sm-12">Customer Name</label>
											<div class=" col-lg-4 col-md-9 col-sm-12">
												<?php
												$result = mysqli_query($connection, "SELECT * FROM mst_customer ORDER BY name");
												if (mysqli_num_rows($result) > 0) {
												?>
													<select class="form-control kt-select2" id="kt_select2_1" name="customer_name">
														<?php
														$i = 0;
														while ($row = mysqli_fetch_array($result)) {
														?>
															<option value=<?php echo $row["id"]; ?>><?php echo $row["name"]; ?></option>
														<?php
															$i++;
														}
														?>
													</select>
												<?php
												} else {
													echo "No result found";
												}
												?>
											</div>
										</div>

										<div class="form-group row">
											<label class="col-3 col-form-label">Mobile</label>
											<div class="col-3">
												<input class="form-control" type="text" placeholder="Mobile NO" name="mobile">
											</div>
										</div>

										<div class="form-group row">

											<label class="col-3 col-form-label">BRAND</label>
											<div class="col-3">
												<input class="form-control" type="text" placeholder="BRAND" name="brand">
											</div>
										</div>

										<div class="form-group row">
											<label class="col-3 col-form-label">MODEL</label>
											<div class="col-3">
												<input class="form-control" type="text" placeholder="MODEL" name="model">
											</div>
										</div>

										<div class="form-group row">
											<label class="col-3 col-form-label">JOB TYPE</label>
											<div class="col-3">
												<input class="form-control" type="text" placeholder="JOB TYPE" name="job_type">
											</div>
										</div>

										<div class="form-group row">
											<label class="col-3 col-form-label">COMPLAINT</label>
											<div class="col-9">
												<input class="form-control" type="text" placeholder="COMPLAINT" name="complaint">
											</div>
										</div>

										<div class="form-group row">
											<label class="col-3 col-form-label">AMOUNT</label>
											<div class="col-3">
												<input class="form-control" type="text" placeholder="AMOUNT" name="amount" value="0">
											</div>
										</div>

										<div class="form-group row">
											<label class="col-3 col-form-label">REMARK</label>
											<div class="col-9">
												<input class="form-control" type="text" placeholder="REMARK" name="remark">
											</div>
										</div>

										<div class="form-group row">
											<label class="col-3 col-form-label">STATUS</label>
											<div class="col-3">
												<input class="form-control" type="text" placeholder="JOB STATUS" name="status">
											</div>
										</div>

										<div class="form-group row">
											<label class="col-3 col-form-label">OUTWARD DATE</label>
											<div class="col-3">
												<input class="form-control" type="date" placeholder="OUTWARED DATE" name="out_date" default='00.00.0000'>
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