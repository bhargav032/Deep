<?php
// Check if form is submitted for user update, then redirect to homepage after update
if (isset($_POST['update'])) {
    $id = $_POST['id'];

    $name = $_POST['name'];
    $brand = $_POST['brand'];
    $version = $_POST['version'];

    // update user data
    $sql = "UPDATE mst_model SET name='$name', brand='$brand', version='$version' WHERE id=$id";
    $result = mysqli_query($connection, $sql);

    // Redirect to homepage to display updated user in list
    // header("Location: ");
}
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetch user data based on id
$sql = "SELECT * FROM mst_model WHERE id=$id";
$result = mysqli_query($connection, $sql);


while ($data = mysqli_fetch_array($result)) {
    $name = $data['name'];
    $brand = $data['brand'];
    $version = $data['version'];
}
?>

<!-- begin:: Content -->
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
    <div class="row">
        <div class="col-lg-12">
            <!--begin::Portlet-->
            <div class="kt-portlet" id="kt_page_portlet">
                <div class="kt-portlet__head kt-portlet__head--lg">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title"><?php echo $page_type ?> <?php echo $page_title ?> : <?php echo $name ?></h3>
                    </div>

                    <div class="kt-portlet__head-toolbar">
                        <?php
                            if ($page_type == 'VIEW'){ ?>
                        <a href="edit.php?id=<?php echo $id ?>" class="btn btn-secondary kt-margin-r-10">
                            <i class="la la-pencil"></i>
                            <span class="kt-hidden-mobile">Edit</span>
                        </a>
                        <?php }
                            else {
                        }?>
                        <a href="index.php" class="btn btn-secondary kt-margin-r-10">
                            <i class="la la-arrow-left"></i>
                            <span class="kt-hidden-mobile">Back</span>
                        </a>
                    </div>
                </div>
                <div class="kt-portlet__body">
                    <div class="row">
                        <div class="col-xl-2">
                        </div>
                        <div class="col-xl-8">
                            <div class="kt-section kt-section--first">
                                <div class="kt-section__body">
                                    <h3 class="kt-section__title kt-section__title-lg"><?php echo $page_title ?></h3>
                                    <form class="kt-form" method="post" action="view.php?id=<?php echo $id ?>">
                                        <div class="form-group row">
                                            <label class="col-3 col-form-label">Brand</label>
                                            <div class="col-9">
                                                <input class="form-control" type="text" placeholder="Brand" name="brand" value=<?php echo $brand; ?> <?php echo $page_property; ?>>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-3 col-form-label">Model</label>
                                            <div class="col-9">
                                                <input class="form-control" type="text" placeholder="Model" name="name" value=<?php echo $name; ?> <?php echo $page_property; ?>>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-3 col-form-label">Version</label>
                                            <div class="col-9">
                                                <input class="form-control" type="text" placeholder="Version" name="version" value=<?php echo $version; ?> <?php echo $page_property; ?>>
                                            </div>
                                        </div>
                                        <?php
                                        if ($page_type == 'EDIT'){ ?>
                                        <div class="form-group btn-group">
											<input type="hidden" name="id" value=<?php echo $_GET['id']; ?>>
											<button type="submit" class="btn btn-primary" name="update">
												<i class="la la-check"></i>
												<span class="kt-hidden-mobile">Update</span>    
											</button>
										</div>
                                        <?php }
                                        else {

                                        }?>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2"></div>
                    </div>
                </div>

                <div class="kt-portlet__body">
                    <div class="row">
                        <div class="col-xl-2">
                        </div>
                        <div class="col-xl-8">
                            <div class="kt-section kt-section--first">
                                <div class="kt-section__body">
                                    <h3 class="kt-section__title kt-section__title-lg">COMPONENTS</h3>
                                    <form class="kt-form" method="post" action="view.php?id=<?php echo $id ?>">
                                        <div class="form-group row">
                                            <label class="col-3 col-form-label"></label>
                                            <div class="col-9">
                                                <input class="form-control" type="text" placeholder="Brand" name="brand" value=<?php echo $brand; ?> <?php echo $page_property; ?>>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-3 col-form-label"></label>
                                            <div class="col-9">
                                                <input class="form-control" type="text" placeholder="Model" name="name" value=<?php echo $name; ?> <?php echo $page_property; ?>>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-3 col-form-label">Version</label>
                                            <div class="col-9">
                                                <input class="form-control" type="text" placeholder="Version" name="version" value=<?php echo $version; ?> <?php echo $page_property; ?>>
                                            </div>
                                        </div>
                                        <?php
                                        if ($page_type == 'EDIT'){ ?>
                                        <div class="form-group btn-group">
											<input type="hidden" name="id" value=<?php echo $_GET['id']; ?>>
											<button type="submit" class="btn btn-primary" name="update">
												<i class="la la-check"></i>
												<span class="kt-hidden-mobile">Update</span>    
											</button>
										</div>
                                        <?php }
                                        else {

                                        }?>
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