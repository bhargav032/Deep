<?php
// Check if form is submitted for user update, then redirect to homepage after update
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $job_no = $_POST['job_no'];
	$date = $_POST['date'];
	$customer_name = $_POST['customer_name'];
	$brand = $_POST['brand'];
	$model = $_POST['model'];
	$job_type  = $_POST['job_type'];
	$complaint = $_POST['complaint'];
	$amount = $_POST['amount'];
	$remark = $_POST['remark'];
	$status = $_POST['status'];
	$location = $_POST['location'];

	// update user data
	$sql = "UPDATE register SET job_no='$job_no', date='$date', customer_name='$customer_name', brand='$brand' model='$model' job_type='$job_type', complaint='$complaint', amount='$amount', remark ='$remark', status='$status', location='$location' WHERE id=$id";
	$result = mysqli_query($connection, $sql);
    // Redirect to homepage to display updated user in list
    // header("Location: ");
}
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetch user data based on id
$sql = "SELECT * FROM register WHERE id=$id";
$result = mysqli_query($connection, $sql);


while ($data = mysqli_fetch_array($result)) {
    $register = $data['customer_name'];
	$id = $data['id'];
	$job_no = $data['job_no'];
	$date = $data['date'];
	$customer_name = $data['customer_name'];
	$brand = $data['brand'];
	$model = $data['model'];
	$job_type  = $data['job_type'];
	$complaint = $data['complaint'];
	$amount = $data['amount'];
	$remark = $data['remark'];
	$status = $data['status'];
	$location = $data['location'];
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
                        <h3 class="kt-portlet__head-title"><?php echo $page_type ?> <?php echo $page_title ?> : <?php echo $customer_name ?></h3>
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
                        <div class="col-xl-2"></div>
                        <div class="col-xl-8">
                            <div class="kt-section kt-section--first">
                                <div class="kt-section__body">
                                    <h3 class="kt-section__title kt-section__title-lg"><?php echo $page_title ?></h3>
                                    <form class="kt-form" method="post" action="view.php?id=<?php echo $id ?>">                                        
                                        <div class="form-group row">
											<label class="col-3 col-form-label">Job ID</label>
											<div class="col-9">
												<input class="form-control" type="text" placeholder="Job ID" name="job_no" disabled value=<?php echo $job_no; ?>>
											</div>
										</div>
										
										<div class="form-group row">
											<label class="col-3 col-form-label">Date</label>
											<div class="col-9">
												<input class="form-control" type="date" placeholder="Job Invert Date" name="date" disabled value=<?php echo $date; ?>>
											</div>
										</div>

										<div class="form-group row">
											<label class="col-3 col-form-label">Customer Name</label>
											<div class="col-9">
												<input class="form-control" type="text" placeholder="Customer Name" name="customer_name" disabled value=<?php echo $customer_name; ?>>
											</div>
										</div>

										<div class="form-group row">
											<label class="col-3 col-form-label">Brand</label>
											<div class="col-9">
												<input class="form-control" type="text" placeholder="Brand" name="brand" disabled value=<?php echo $brand; ?>>
											</div>
										</div>

										<div class="form-group row">
											<label class="col-3 col-form-label">Model</label>
											<div class="col-9">
												<input class="form-control" type="text" placeholder="Model" name="model" disabled value=<?php echo $model; ?>>
											</div>
										</div>

                                        <div class="form-group row">
											<label class="col-3 col-form-label">Job Type</label>
											<div class="col-9">
												<input class="form-control" type="text" placeholder="Job Type" name="job_type" disabled value=<?php echo $job_type;?>>
											</div>
										</div>

										<div class="form-group row">
											<label class="col-3 col-form-label">Complaint</label>
											<div class="col-9">
												<input class="form-control" type="text" placeholder="Complaint" name="complaint" disabled value=<?php echo $complaint;?>>
											</div>
										</div>

										<div class="form-group row">
											<label class="col-3 col-form-label">Status</label>
											<div class="col-9">
												<input class="form-control" type="text" placeholder="Status" name="status"  <?php echo $page_property;?> value=<?php echo $status;?>>
											</div>
										</div>

										<div class="form-group row">
											<label class="col-3 col-form-label">Amount</label>
											<div class="col-9">
												<input class="form-control" type="text" placeholder="amount" name="amount" <?php echo $page_property;?> value=<?php echo $amount;?>>
											</div>
										</div>

										<div class="form-group row">
											<label class="col-3 col-form-label">Remark</label>
											<div class="col-9">
												<input class="form-control" type="text" placeholder="Remarks" name="remark" <?php echo $page_property;?> value=<?php echo $remark;?>>
											</div>
										</div>

										<div class="form-group row">
											<label class="col-3 col-form-label">Location</label>
											<div class="col-9">
												<input class="form-control" type="text" placeholder="Location" name="location" <?php echo $page_property;?> value=<?php echo $location;?>>
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