<!-- begin:: Page Setting -->
<?php $page_title = 'MENU MANAGEMENT' ?>
<!-- end:: Page Setting -->

<!-- include:: footer -->
<?php include "../begin.php"; ?>

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
                    Menu Management
                </h3>
            </div>
            <div class="kt-portlet__head-toolbar">
                <div class="kt-portlet__head-toolbar-wrapper">
                    <div class="dropdown dropdown-inline dropdown-menu-right">
                        <a href="brand_add.php" class="kt-menu__link ">
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
            $result = mysqli_query($connection, "SELECT * FROM menu_management ORDER BY id DESC");
            if (mysqli_num_rows($result) > 0) {
            ?>
                <table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Menu Name</th>
                            <th>Parent Menu</th>
                            <th>Menu Link</th>


                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $i = 0;
                        while ($row = mysqli_fetch_array($result)) {
                        ?>

                            <tr>
                                <td><?php echo $i+1 ?></td>
                                <td><a href='brand_view.php?id=<?php echo $row["id"] ?>'><?php echo $row["menu_name"]; ?></a></td>
                                <td><?php echo $row["parent_id"]; ?></td>
                                <td><?php echo $row["link"]; ?></td>
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



<!-- end:: Content -->

<!-- include:: footer -->
<?php include "../footer.php"; ?>