<!-- include:: head -->
<?php include '../include/head.php'; ?>

<!-- Start :: Script -->

<?php

// Check if form is submitted for user update, then redirect to homepage after update
if (isset($_POST['update'])) {
	$id = $_POST['id'];

	$brand_name = $_POST['name'];

	// update user data
	$sql = "UPDATE mst_model SET name='$model_name' WHERE id=$id";
	$result = mysqli_query($connection, $sql);

	// Redirect to homepage to display updated user in list
	header("Location: model_list.php");
}
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$sql = "SELECT * FROM mst_model WHERE id=$id";
$result = mysqli_query($connection, $sql);

while ($model_data = mysqli_fetch_array($result)) {
	$model = $model_data['name'];
	$brand_id = $model_data['brand'];
}
?>

<?php $id = $brand_id;

// Fetech user data based on id
$sql = "SELECT * FROM mst_brand WHERE id=$id";
$result = mysqli_query($connection, $sql);

while ($brand_data = mysqli_fetch_array($result)) {
	$brand = $brand_data['name'];
}

echo $brand ?>



<!-- End :: Script -->



<title>View Model</title>
<meta name="description" content="">

<!-- include:: header -->
<?php include '../include/header.php'; ?>


<!-- begin:: Content -->
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
	<div class="row">
		<div class="col-lg-12">
			<!--begin::Portlet-->
			<div class="kt-portlet" id="kt_page_portlet">
				<div class="kt-portlet__head kt-portlet__head--lg">
					<div class="kt-portlet__head-label">
						<h3 class="kt-portlet__head-title">View Model : <?php echo $brand ?> | <?php echo $model ?></h3>
					</div>

					<div class="kt-portlet__head-toolbar">
						<a href="model_edit.php?id=<?php echo $id ?>" class="btn btn-secondary kt-margin-r-10">
							<i class="la la-pencil"></i>
							<span class="kt-hidden-mobile">Edit</span>
						</a>

						<a href="model_list.php" class="btn btn-secondary kt-margin-r-10">
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
									<h3 class="kt-section__title kt-section__title-lg">Model</h3>
									<form class="kt-form" method="post" action="brand_view.php">
										<div class="form-group row">
											<label class="col-3 col-form-label">Model Name</label>
											<div class="col-9">
												<input class="form-control" type="text" placeholder="Model Name" name="name" value=<?php echo $model; ?> disabled>
											</div>

										</div>
										<div class="form-group row">
											<label class="col-3 col-form-label">Brand Name</label>
											<div class="col-9">
												<input class="form-control" type="text" placeholder="Brand Name" name="name" value=<?php echo $brand; ?> disabled>
											</div>

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


<!-- include:: footer -->
<?php include '../include/footer.php'; ?>