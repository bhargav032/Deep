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
                        if ($page_type == '') { ?>
                            <a href="add.php" class="kt-menu__link ">
                                <button type="button" class="btn btn-brand btn-sm">
                                    <i class="la la-plus"></i> ADD
                                </button>
                            </a>
                        <?php } else {
                        } ?>
                    </div>
                </div>
            </div>
        </div>



        <div class="kt-portlet__body">
            <!--begin: Datatable -->


            <?php
            $result = mysqli_query($connection, "SELECT * FROM mst_model ORDER BY id DESC");
            if (mysqli_num_rows($result) > 0) {
            ?>
                <table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Model Name</th>
                            <th>Version</th>
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
                                <td><?php echo $row["version"]; ?></td>
                                <td><?php
                                    $brand_record = $row["brand"];
                                    $brand_data = mysqli_query($connection, "SELECT name FROM mst_brand WHERE id='{$brand_record}'");
                                    $row = $brand_data->fetch_assoc();
                                    echo $row["name"];
                                    ?>
                                </td>
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