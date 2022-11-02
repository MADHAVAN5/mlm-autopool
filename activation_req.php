<?php
require_once("./resources/connection_build.php");
require_once("./resources/check_login.php");
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
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Activation</strong> Form
                                    </div>
                                    <form action="./request_handler.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                                        <div class="card-body card-block">
                                            <?php
                                            if (isset($_SESSION['status'])) {
                                                if ($_SESSION['status'] == 4) {
                                            ?>
                                                    <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                                                        <span class="badge badge-pill badge-success">Success</span>
                                                        REQUEST SEND SUCCESSFULLY 
                                                        activated within 24 hours
                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                <?php
                                                } else {
                                                ?>
                                                    <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                                                        <span class="badge badge-pill badge-danger">Alert</span>
                                                        <?php
                                                        if ($_SESSION['status'] == 1) {
                                                            echo "USER ID DOES NOT EXISTS";
                                                        } elseif ($_SESSION['status'] == 2) {
                                                            echo "USER ID ALREADY ACTIVATED";
                                                        } else {
                                                            echo "PIN NOT VALID";
                                                        }
                                                        ?>
                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                            <?php
                                                }

                                                unset($_SESSION['status']);
                                            }
                                            ?>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">Agent ID</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="agent_id" value="<?php echo $my_id; ?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class="form-control-label">Name</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="payer_name" placeholder="Payer Name" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">Payment ID</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="id-input" name="payment_id" placeholder="Number" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="select" class=" form-control-label">Package</label>
                                                </div>
                                                <div class="col-12 col-m d-9">
                                                    <select name="package" id="select" class="form-control">
                                                        <option value="">Please select</option>
                                                        <option value="b-silver">Basic-Silver</option>
                                                        <option value="b-gold">Basic-Gold</option>
                                                        <option value="b-diamond">Basic-Diamond</option>
                                                        <option value="b-platinum">Basic-Platinum</option>
                                                        <option value="p-silver">Premium-Silver</option>
                                                        <option value="p-gold">Premium-Gold</option>
                                                        <option value="p-diamond">Premium-Diamond</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password-input" class="form-control-label">Amount</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="password-input" name="amt" placeholder="Password" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="file-input" class=" form-control-label">payment proof</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" id="file-input" name="img_input" class="form-control-file">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="card-footer">
                                            <button type="submit" name="activation_req_btn" class="btn btn-primary btn-sm">
                                                <i class="fa fa-dot-circle-o"></i> Submit
                                            </button>
                                        </div>
                                    </form>
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