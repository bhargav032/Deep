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
                    Brand
                </h3>
            </div>
            <div class="kt-portlet__head-toolbar">
                <div class="kt-portlet__head-toolbar-wrapper">
                    <div class="dropdown dropdown-inline dropdown-menu-right">
                        <a href="add.php" class="kt-menu__link ">
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
            $result = mysqli_query($connection, "SELECT * FROM mst_brand ORDER BY id DESC");
            if (mysqli_num_rows($result) > 0) {
            ?>
                <table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Brand</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $i = 0;
                        while ($row = mysqli_fetch_array($result)) {
                        ?>

                            <tr>
                                <td><?php echo $row["id"]; ?></td>
                                <td><a href='view.php?id=<?php echo $row["id"] ?>'><?php echo $row["name"]; ?></a></td>
                            </tr>
                        <?php
                            $i++;
                        }
                        ?>


                    </tbody>

                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Brand</th>
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
