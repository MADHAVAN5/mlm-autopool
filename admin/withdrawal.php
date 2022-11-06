<?php
require_once("../resources/connection_build.php");
require_once("../resources/check_login.php");
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

    <?php require_once("../resources/header_links.php"); ?>

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
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">Withdrawal Form</div>
                                    <div class="card-body card-block">
                                        <?php
                                            if(isset($_SESSION['status']))
                                            {
                                                if ($_SESSION['status']==4) {
                                                    ?>
                                                        <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                                                            <span class="badge badge-pill badge-success">Success</span>
                                                            WITHDRAWAL SUCCESSFULLY
                                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                    <?php
                                                } else {
                                                    ?>
                                                        <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                                                            <span class="badge badge-pill badge-danger">Alert</span>
                                                            Try Again
                                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                    <?php
                                                }
                                                
                                                unset($_SESSION['status']);
                                            } 
                                        ?>
                                        <form action="../request_handler.php" method="POST" class="">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-user"></i>
                                                    </div>
                                                    <input type="text" id="username" name="user_id" placeholder="agent id" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="form-actions form-group">
                                                <button type="submit" name="withdrawal__btn" class="btn btn-success btn-sm">Withdrawal Success</button>
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
    <?php require_once("../resources/footer_links.php") ?>
</body>

</html>
<!-- end document-->