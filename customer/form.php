<?php
// Check if form is submitted for user update, then redirect to homepage after update
if (isset($_POST['update'])) {
    $id = $_POST['id'];

    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];

    // update user data
    $sql = "UPDATE mst_customer SET name='$name', mobile='$mobile', address='$address' WHERE id=$id";
    $result = mysqli_query($connection, $sql);

    // Redirect to homepage to display updated user in list
    // header("Location: ");
}
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetch user data based on id
$sql = "SELECT * FROM mst_customer WHERE id=$id";
$result = mysqli_query($connection, $sql);


while ($customer_data = mysqli_fetch_array($result)) {
    $name = $customer_data['name'];
    $mobile = $customer_data['mobile'];
    $address = $customer_data['address'];
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
                        <h3 class="kt-portlet__head-title">View Customer : <?php echo $name ?></h3>
                    </div>

                    <div class="kt-portlet__head-toolbar">
                        <a href="edit.php?id=<?php echo $id ?>" class="btn btn-secondary kt-margin-r-10">
                            <i class="la la-pencil"></i>
                            <span class="kt-hidden-mobile">Edit</span>
                        </a>

                        <a href="index.php" class="btn btn-secondary kt-margin-r-10">
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
                                    <h3 class="kt-section__title kt-section__title-lg"><?php echo $page_title ?></h3>
                                    <form class="kt-form" method="post" action="view.php?id=<?php echo $id ?>">
                                        <div class="form-group row">
                                            <label class="col-3 col-form-label">Customer Name</label>
                                            <div class="col-9">
                                                <input class="form-control" type="text" placeholder="Customer Name" name="name" value=<?php echo $name; ?> <?php echo $page_property; ?>>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-3 col-form-label">Mobile</label>
                                            <div class="col-8">
                                                <input class="form-control" type="text" placeholder="Mobile No" name="mobile" value=<?php echo $mobile; ?> <?php echo $page_property; ?>>
                                            </div>
                                            <div class="fluid">
                                            <a class="btn btn-success" href="tel:+91<?php echo $mobile; ?>">
                                                <i class="la la-phone"></i>
                                                <span class="kt-hidden-mobile"></span>
                                            </a>
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label class="col-3 col-form-label">Address</label>
                                            <div class="col-9">
                                                <input class="form-control" type="text" placeholder="Address" name="address" value=<?php echo $address; ?> <?php echo $page_property; ?>>
                                            </div>
                                        </div>
                                        <?php
                                        if ($page_type == 'edit') { ?>
                                            <div class="form-group btn-group">
                                                <input type="hidden" name="id" value=<?php echo $_GET['id']; ?>>
                                                <button type="submit" class="btn btn-primary" name="update">
                                                    <i class="la la-check"></i>
                                                    <span class="kt-hidden-mobile">Update</span>
                                                </button>
                                            </div>
                                        <?php } else {
                                        } ?>
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