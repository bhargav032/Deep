<?php include '../include/head.php'; ?>


<?php
            // $result = mysqli_query($connection, "SELECT * FROM register  ORDER BY id DESC");
			$result = mysqli_query($connection, "SELECT register.id, register.date, mst_customer.name, register.brand, register.model, register.job_type, register.complaint, register.customer_name, register.remark, register.status FROM register INNER JOIN mst_customer ON register.customer_name=mst_customer.id ORDER BY register.id DESC");
			if (mysqli_num_rows($result) > 0) {
			?>
				<table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
					<thead>
						<tr>
							<th>JOB ID</th>
							<th>DATE</th>
							<th>CUSTOMER NAME</th>
							<th>BRAND</th>
							<th>MODEL</th>
							<th>JOB TYPE</th>
							<th>COMPLAINT</th>
							<th>AMOUNT</th>
							<th>REMARKS</th>
							<th>STATUS</th>

						</tr>
					</thead>

					<tbody>
						<?php
						$i = 0;
						while ($row = mysqli_fetch_array($result)) {
						?>

							<tr>
								<td><?php echo $row["id"]; ?></td>
								<td><?php echo $row["date"]; ?></td>								
								<td><?php echo $row["name"]; ?></td>
								<td><?php echo $row["brand"]; ?></td>
								<td><?php echo $row["model"]; ?></td>
								<td><?php echo $row["job_type"]; ?></td>
								<td><?php echo $row["complaint"]; ?></td>
								<td><?php echo $row["complaint"]; ?></td>
								<td><?php echo $row["remark"]; ?></td>
								<td><?php echo $row["status"]; ?></td>


							</tr>
						<?php
							$i++;
						}
						?>


					</tbody>

					<tfoot>
						<tr>
						<th>JOB ID</th>
							<th>DATE</th>
							<th>CUSTOMER NAME</th>
							<th>BRAND</th>
							<th>MODEL</th>
							<th>JOB TYPE</th>
							<th>COMPLAINT</th>
							<th>AMOUNT</th>
							<th>REMARKS</th>
							<th>STATUS</th>
						</tr>
					</tfoot>
				</table>
			<?php
			} else {
				echo "No result found";
			}
			?>