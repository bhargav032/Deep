



<?php require_once "../config.php";

// Define variables and initialize with empty values
$authority_type = "";
$authority_type_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

	// Validate authority_type
	if (empty(trim($_POST["authority_type"]))) {
		$authority_type_err = "Please enter an authority type.";
	} elseif (!preg_match('/^[a-zA-Z]+$/', trim($_POST["authority_type"]))) {
		$authority_type_err = "Authority name can only contain letters.";
	} else {
		// Prepare a select statement
		$sql = "SELECT id FROM authority_type WHERE authority_type = ?";

		if ($stmt = $mysqli->prepare($sql)) {
			// Bind variables to the prepared statement as parameters
			$stmt->bind_param("s", $param_authority_type);

			// Set parameters
			$param_authority_type = trim($_POST["authority_type"]);

			// Attempt to execute the prepared statement
			if ($stmt->execute()) {
				// store result
				$stmt->store_result();

				if ($stmt->num_rows == 1) {
					$authority_type_err = "This authority name is already taken.";
				} else {
					$authority_type = trim($_POST["authority_type"]);
				}
			} else {
				echo "Oops! Something went wrong. Please try again later.";
			}

			// Close statement
			$stmt->close();
		}
	}

	// Check input errors before inserting in database
	if (empty($authority_type_err)) {

		// Prepare an insert statement
		$sql  = "INSERT INTO users (authority_type, password) VALUES (?, ?)";

		if ($stmt = $mysqli->prepare($sql)) {
			// Bind variables to the prepared statement as parameters
			$stmt->bind_param("ss", $param_authority_type, $param_password);

			// Set parameters
			$param_authority_type = $authority_type;
			$param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash

			// Attempt to execute the prepared statement
			if ($stmt->execute()) {
				// Redirect to login page
				header("location: ../master/list_authority");
			} else {
				echo "Oops! Something went wrong. Please try again later.";
			}

			// Close statement
			$stmt->close();
		}
	}

	// Close connection
	$mysqli->close();
}
?>


<?php include '../include/base.php'; ?>
<!-- include:: head -->
<?php include '../include/head.php'; ?>


<title>Add Authority</title>
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
						<h3 class="kt-portlet__head-title">Add Authority Type</h3>
					</div>

					<div class="kt-portlet__head-toolbar">
						<a href="../master/list_authority.php" class="btn btn-secondary kt-margin-r-10">
							<i class="la la-arrow-left"></i>
							<span class="kt-hidden-mobile">Back</span>
						</a>
						<div class="btn-group">
							<button type="button" class="btn btn-primary">
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
						</div>
					</div>
				</div>
				<div class="kt-portlet__body">
					<div class="row">
						<div class="col-xl-2"></div>
						<div class="col-xl-8">
							<div class="kt-section kt-section--first">
								<div class="kt-section__body">
									<h3 class="kt-section__title kt-section__title-lg">Authority Type</h3>
									<form class="kt-form" id="kt_form">
									<div class="form-group row">
										<label class="col-3 col-form-label">TP Stage Name</label>
										<div class="col-9">
											<input class="form-control" type="text" placeholder="TP Stage Name" name="authority_type" class="form-control <?php echo (!empty($authority_type_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $authority_type; ?>">
										</div>
									</div>

									<div class="form-group row">
										<label class="col-3 col-form-label">TP Stage Section</label>
										<div class="col-9">
											<input class="form-control" type="text" placeholder="TP Stage Section" name="authority_type" class="form-control <?php echo (!empty($authority_type_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $authority_type; ?>">
										</div>
									</div>

									<div class="form-group row">
												<label class="col-3 col-form-label">Status</label>
												<div class="col-9">
													<span class="kt-switch">
														<label>
															<input type="checkbox" checked="checked" name="" />
															<span></span>
														</label>
													</span>
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