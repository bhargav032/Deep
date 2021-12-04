<!-- Start :: Script -->

<?php
require_once "../../config.php";
?>

<?php

// Check if form is submitted for user update, then redirect to homepage after update
if (isset($_POST['update'])) {
	$id = $_POST['id'];

	$authority_type = $_POST['authority_type'];

	// update user data
	$sql = "UPDATE authority_type SET authority_type='$authority_type' WHERE id=$id";
	$result = mysqli_query($connection, $sql);

	// Redirect to homepage to display updated user in list
	header("Location: list_authority_type.php");
}
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$sql = "SELECT * FROM authority_type WHERE id=$id";
$result = mysqli_query($connection, $sql);

while($authority_type_data = mysqli_fetch_array($result))
{
	$authority_type = $authority_type_data['authority_type'];
}
?>



<!-- End :: Script -->



<?php include '../../include/base.php'; ?>
<!-- include:: head -->
<?php include '../../include/head.php'; ?>


<title>View Authority</title>
<meta name="description" content="">

<!-- include:: header -->
<?php include '../../include/header.php'; ?>


<!-- begin:: Content -->
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
	<div class="row">
		<div class="col-lg-12">
			<!--begin::Portlet-->
			<div class="kt-portlet" id="kt_page_portlet">
				<div class="kt-portlet__head kt-portlet__head--lg">
					<div class="kt-portlet__head-label">
						<h3 class="kt-portlet__head-title">View Authority Type</h3>
					</div>

					<div class="kt-portlet__head-toolbar">
						<a href="list_authority_type.php" class="btn btn-secondary kt-margin-r-10">
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
									<h3 class="kt-section__title kt-section__title-lg">Authority Type</h3>
									<form class="kt-form" method="post" action="view_authority_type.php">
										<div class="form-group row">
											<label class="col-3 col-form-label">Authority Type</label>
											<div class="col-9">
												<input class="form-control" type="text" placeholder="Authority Type" name="authority_type" value=<?php echo $authority_type; ?>>
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
<?php include '../../include/footer.php'; ?>