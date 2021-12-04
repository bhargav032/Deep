<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
    <div class="kt-portlet">
        <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
                <h3 class="kt-portlet__head-title">
                    <?php echo $page_title ?>
                </h3>
            </div>
            <div class="kt-portlet__head-toolbar">
                <div class="kt-portlet__head-toolbar-wrapper">
                    <div class="dropdown dropdown-inline dropdown-menu-right">
                    <?php
                        if ($page_type == ''){ ?>
                            <a href="add.php" class="kt-menu__link ">
                                <button type="button" class="btn btn-brand btn-sm">
                                    <i class="la la-plus"></i> ADD
                                </button>
                            </a>
                        <?php } else { }?>
                    </div>
                </div>
            </div>
        </div>



        <div class="kt-portlet__body">
            <!--begin: Datatable -->


            <?php
            $result = mysqli_query($connection, "SELECT * FROM register ORDER BY id DESC");
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
							<th>STATUS</th>
                            <th>AMOUNT</th>
							<th>REMARKS</th>
							
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $i = 0;
                        while ($row = mysqli_fetch_array($result)) {
                        ?>

                            <tr>
                            <td><a href='view.php?id=<?php echo $row["id"] ?>'><?php echo $row["id"]; ?></a></td>
								<td><?php echo $row["date"]; ?></td>							
								<td>
                                    <?php
                                        $customer_record = $row["customer_name"];
                                        $brand_data = mysqli_query($connection, "SELECT name FROM mst_customer WHERE id='{$customer_record}'");
                                        $row_data = $brand_data->fetch_assoc();
                                        echo $row_data["name"];
                                        ?>
                                </td>
								<td><?php echo $row["brand"]; ?></td>
								<td><?php echo $row["model"]; ?></td>
								<td><?php echo $row["job_type"]; ?></td>
								<td><?php echo $row["complaint"]; ?></td>
								<td><?php echo $row["status"]; ?></td>
                                <td><?php echo $row["amount"]; ?></td>
								<td><?php echo $row["remark"]; ?></td>
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