<!-- include:: head -->
<?php include '../include/head.php'; ?>

<!-- Start :: Script -->

<?php

// Check if form is submitted for user update, then redirect to homepage after update
if (isset($_POST['update'])) {
	$id = $_POST['id'];

	$brand_name = $_POST['name'];

	// update user data
	$sql = "UPDATE mst_brand SET name='$brand_name' WHERE id=$id"; 
	$result = mysqli_query($connection, $sql);

	// Redirect to homepage to display updated user in list
	header("Location: brand_list.php");
}
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$sql = "SELECT * FROM mst_brand WHERE id=$id";
$result = mysqli_query($connection, $sql);

while($brand_data = mysqli_fetch_array($result))
{
	$brand = $brand_data['name'];
}
?>



<!-- End :: Script -->



<title>Edit Brand</title>
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
						<h3 class="kt-portlet__head-title">Edit Brand : <?php echo $brand; ?></h3>
					</div>

					<div class="kt-portlet__head-toolbar">
						<a href="brand_list.php" class="btn btn-secondary kt-margin-r-10">
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
									<form class="kt-form" method="post" action="brand_view.php">
										<div class="form-group row">
											<label class="col-3 col-form-label">Brand Name</label>
											<div class="col-9">
												<input class="form-control" type="text" placeholder="Brand Name" name="name" value=<?php echo $brand; ?>>
											</div>

										</div>
										<div class="form-group btn-group">
											<input type="hidden" name="id" value=<?php echo $_GET['id']; ?>>
											<button type="submit" class="btn btn-primary" name="update">
												<i class="la la-check"></i>
												<span class="kt-hidden-mobile">Update</span>
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


<!-- include:: footer -->
<?php include '../include/footer.php'; ?>