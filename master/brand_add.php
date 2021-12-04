<!-- include:: head -->
<?php include '../include/head.php'; ?>


<title>Add Brand</title>
<meta name="description" content="">

<!-- include:: header -->
<?php include '../include/header.php'; ?>


<!-- begin:: Content -->
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
	<div class="row">
		<div class="col-lg-12">
			<!--begin::Portlet-->
			<div class="kt-portlet" id="kt_page_portlet">
				<!-- <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"> -->
				<div class="kt-portlet__head kt-portlet__head--lg">
					<div class="kt-portlet__head-label">
						<h3 class="kt-portlet__head-title">Add Brand</h3>
						<h3 class="kt-portlet__head-title">
							<?php

							// Check If form submitted, insert form data into users table.
							if (isset($_POST['Submit'])) {
								$name = $_POST['name'];

								// Insert user data into table
								$result = mysqli_query($connection, "INSERT INTO mst_brand(name) VALUES('$name')");

								// Show message when user added
								echo "User added successfully. <a href='index.php'>View Users</a>";
							}
							?>
						</h3>
					</div>

					<div class="kt-portlet__head-toolbar">
						<a href="brand_list.php" class="btn btn-secondary kt-margin-r-10">
							<i class="la la-arrow-left"></i>
							<span class="kt-hidden-mobile">Back</span>
						</a>
						<!-- <div class="btn-group">
							<button type="submit" class="btn btn-primary">
								<i class="la la-check"></i>
								<span class="kt-hidden-mobile">Save</span>
							</button>
							<button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							</button>
							<div class="dropdown-menu dropdown-menu-right">
								<a class="dropdown-item" href="#"><i class="la la-plus"></i> Save &
									New</a>
								<a class="dropdown-item" href="#"><i class="la la-copy"></i> Save &
									Duplicate</a>
								<a class="dropdown-item" href="#"><i class="la la-undo"></i> Save &
									Close</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#"><i class="la la-close"></i>
									Cancel</a>
							</div>
						</div> -->
					</div>
				</div>
				<div class="kt-portlet__body">
					<div class="row">
						<div class="col-xl-2"></div>
						<div class="col-xl-8">
							<div class="kt-section kt-section--first">
								<div class="kt-section__body">
									<h3 class="kt-section__title kt-section__title-lg">Brand</h3>
									<form class="kt-form" method="post" action="brand_add.php">
										<div class="form-group row">
											<label class="col-3 col-form-label">Brand</label>
											<div class="col-9">
												<input class="form-control" type="text" placeholder="Brand Name" name="name">
											</div>

										</div>
										<!-- <div class="form-group row">
											<label class="col-3 col-form-label">Status</label>
											<div class="col-9">
												<span class="kt-switch">
													<label>
														<input type="checkbox" checked="checked" name="" />
														<span></span>
													</label>
												</span>
											</div>
										</div> -->
										<div class="form-group btn-group">
											<button type="submit" class="btn btn-primary" name="Submit">
												<i class="la la-check"></i>
												<span class="kt-hidden-mobile">Save</span>
											</button>
											<!-- <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											</button>
											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item" href="#"><i class="la la-plus"></i> Save &
													New</a>
												<a class="dropdown-item" href="#"><i class="la la-copy"></i> Save &
													Duplicate</a>
												<a class="dropdown-item" href="#"><i class="la la-undo"></i> Save &
													Close</a>
												<div class="dropdown-divider"></div>
												<a class="dropdown-item" href="#"><i class="la la-close"></i>
													Cancel</a>
											</div> -->
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

<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
	<!-- <div class="alert alert-light alert-elevate" role="alert">
		<div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
		<div class="alert-text">
			A common UI paradigm to use with interactive tables is to present buttons that will
			trigger some action.
			See official documentation <a class="kt-link kt-font-bold" href="https://datatables.net/extensions/buttons/" target="_blank">here</a>.
		</div>
	</div> -->

	<div class="kt-portlet">
		<div class="kt-portlet__head">
			<div class="kt-portlet__head-label">
				<h3 class="kt-portlet__head-title">
					Brand Name
				</h3>
			</div>
		</div>



		<div class="kt-portlet__body">
			<!--begin: Datatable -->


			<?php
			$result = mysqli_query($connection, "SELECT * FROM mst_brand ORDER BY id DESC");

			if (mysqli_num_rows($result) > 1) {
			?>
				<table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
					<thead>
						<tr>
							<th>ID</th>
							<th>Brand Name</th>
						</tr>
					</thead>

					<tbody>
						<?php
						// arsort($result);
						$i = 0;
						while ($row = mysqli_fetch_array($result)) {
						?>

							<tr>
								<td><?php echo $row["id"]; ?></td>
								<td><?php echo $row["name"]; ?></td>
							</tr>
						<?php
							$i++;
						}
						?>
					</tbody>
				</table>
			<?php
			} else {
				echo "No result found";
			}
			?>
			<!--end: Datatable -->
		</div>
	</div>
</div>

<!-- include:: footer -->
<?php include '../include/footer.php'; ?>