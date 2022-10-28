<?php
require_once("./resources/connection_build.php");
require_once("./resources/check_login.php");
require_once("./resources/function.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <?php require_once("./resources/header_links.php"); ?>

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <?php include("./resources/navbar.php"); ?>

        <!-- PAGE CONTAINER-->
        <div class="page-container">

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <!-- <section class="container-fluid statistic statistic2"> -->
                    <div class="container">
                        <div class="row m-t-30">
                            <div class="col-lg-12">
                                <div class="card">
                                    <nav>
                                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                            <a class="nav-item nav-link active" id="custom-nav-home-tab" data-toggle="tab" href="#custom-nav-home" role="tab" aria-controls="custom-nav-home" aria-selected="true">Profile</a>
                                            <a class="nav-item nav-link" id="custom-nav-profile-tab" data-toggle="tab" href="#custom-nav-profile" role="tab" aria-controls="custom-nav-profile" aria-selected="false">Password</a>
                                        </div>
                                    </nav>
                                    <div class="tab-content pl-3 pt-2" id="nav-tabContent">
                                        <div class="tab-pane fade show active p-2" id="custom-nav-home" role="tabpanel" aria-labelledby="custom-nav-home-tab">
                                            <form action="./request_handler.php" method="post" class="form-horizontal">
                                                <div class="row form-group">
                                                    <?php
                                                        $details = mysqli_query($conn, "SELECT * FROM `agent` WHERE `agent_id` = '$my_id'");
                                                        $details = mysqli_fetch_array($details);
                                                    ?>
                                                    <div class="col col-md-6">
                                                        <label>ID</label> <br>
                                                        <input type="text" name="agent_id" value="<?php echo $details['agent_id']; ?>" class="form-control" readonly>
                                                    </div>
                                                    <div class="col col-md-6">
                                                        <label>Sponsor ID</label> <br>
                                                        <input type="text" name="sponsor_id" value="<?php echo $details['sponsor_id']; ?>" class="form-control" disabled>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-12">
                                                        <label>Name</label>
                                                        <input type="text" name="name" value="<?php echo $details['agent_name']; ?>" class="form-control" readonly>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-4">
                                                        <label>Mobile No</label>
                                                        <input type="text" name="mobile" value="<?php echo $details['agent_mobile']; ?>" class="form-control" readonly>
                                                    </div>
                                                    <div class="col col-md-8">
                                                        <label>Address</label>
                                                        <input type="text" name="address" value="<?php echo $details['address']; ?>" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="card-footer form-actions">
                                                    <button type="submit" name="profile_update_basic" class="btn btn-primary btn-sm">Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade" id="custom-nav-profile" role="tabpanel" aria-labelledby="custom-nav-profile-tab">
                                            <form action="./request_handler.php">
                                                <div class="row form-group">
                                                    <div class="col-4 col-md-4">
                                                        <label>New Password</label>
                                                        <input type="text" name="agent_id" value="<?php echo $details['agent_id']; ?> " hidden>
                                                        <input type="text" name="password" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="card-footer form-actions">
                                                    <button type="submit" name="profile_update_password" class="btn btn-primary btn-sm">Change Password</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- END MAIN CONTENT-->
                    <!-- END PAGE CONTAINER-->
                </div>
            </div>
        </div>
        <?php require_once("./resources/footer_links.php") ?>
</body>

</html>
<!-- end document-->