<?php require_once "../config.php";
?>

<?php include '../include/base.php'; ?>
<!-- include:: head -->
<?php include '../include/head.php'; ?>


<title>Add Town Planning Stage</title>
<meta name="description" content="">

<!--begin::Page Styles(used by this page) -->
<link href="../assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
<!--end::Page Styles -->

<!-- include:: header -->
<?php include '../include/header.php'; ?>


<!-- begin:: Content -->
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
					Town Planning Stage
				</h3>
			</div>
			<div class="kt-portlet__head-toolbar">
				<div class="kt-portlet__head-toolbar-wrapper">
					<div class="dropdown dropdown-inline dropdown-menu-right">
						<a href="../master/add_tp_stage.php" class="kt-menu__link ">
							<button type="button" class="btn btn-brand btn-sm">
								<i class="la la-plus"></i> ADD
							</button>
						</a>
					</div>
				</div>
			</div>
		</div>



		<div class="kt-portlet__body">
			<!--begin: Datatable -->


			<?php
			$result = mysqli_query($connection, "SELECT * FROM tp_stage");
			if (mysqli_num_rows($result) > 0) {
			?>
				<table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
					<thead>
						<tr>
							<th>#</th>
							<th>TP Stage</th>
							<th>Section</th>
							<th>Status</th>
						</tr>
					</thead>

					<tbody>
						<?php
						$i = 0;
						while ($row = mysqli_fetch_array($result)) {
						?>

							<tr>
								<td><?php echo $row["id"]; ?></td>
								<td><?php echo $row["tp_stage_name"]; ?></td>
								<td><?php echo $row["tp_stage_section"]; ?></td>
								<td><?php echo $row["status"]; ?></td>
							</tr>
						<?php
							$i++;
						}
						?>


					</tbody>

					<tfoot>
						<tr>
							<th>Order ID</th>
							<th>Country</th>
							<th>Status</th>
							<th>Type</th>
						</tr>
					</tfoot>
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
<!-- end:: Content -->
</div>


<!-- include:: footer -->
<?php include '../include/footer.php'; ?>