<?php
require_once("./resources/connection_build.php");
require_once("./resources/check_login.php");
require_once("./resources/function.php")
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
                <?php
                $nav_data = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM `agent` WHERE `agent_id`='$my_id'"));
                if ($nav_data['package'] == "b-silver") {
                    $package = 'BASIC SILVER';
                } elseif ($nav_data['package'] == "b-gold") {
                    $package = 'BASIC GOLD';
                } elseif ($nav_data['package'] == "b-diamond") {
                    $package = 'BASIC DIAMOND';
                } elseif ($nav_data['package'] == "b-platinum") {
                    $package = 'BASIC PLATINUM';
                } elseif ($nav_data['package'] == "P-silver") {
                    $package = 'PRIMIUM SILVER';
                } elseif ($nav_data['package'] == "P-gold") {
                    $package = 'PRIMIUM GOLD';
                } elseif ($nav_data['package'] == "P-diamond") {
                    $package = 'PRIMIUM DIAMOND';
                } else {
                    $package = 'NONE';
                }
                ?>
                <div class="alert alert-primary" role="alert">
                    <span class="alert-link">ID:- </span><?php echo $my_id; ?><br>
                    <span class="alert-link">Name:- </span><?php echo $nav_data['agent_name']; ?><br>
                    <span class="alert-link">Package:- </span><?php echo $package; ?>
                </div>
                <?php
                if (check_user_active_or_not($my_id)) {
                ?>
                    <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                        <span class="badge badge-pill badge-danger">Alert</span>
                        Your account is not Active. Activate your account and earn money.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php
                }
                ?>
                <div class="section__content statistic2 section__content--p30">
                    <!-- <section class="container-fluid statistic statistic2"> -->
                    <div class="container">
                        <div class="row">
                            <?php
                            $agent_coungt_data = mysqli_fetch_array(mysqli_query($conn, "SELECT count(agent_id) total_agent FROM `agent` WHERE `sponsor_id` = '$my_id'"));
                            ?>
                            <div class="col-md-6 col-lg-3">
                                <div class="statistic__item statistic__item--green">
                                    <h2 class="number"><?php echo $agent_coungt_data['total_agent'] ?></h2>
                                    <span class="desc">Total Registrations</span>
                                    <div class="icon">
                                        <i class="zmdi zmdi-account-o"></i>
                                    </div>
                                </div>
                            </div>

                            <?php
                            $agent_coungt_data = mysqli_fetch_array(mysqli_query($conn, "SELECT count(agent_id) total_agent FROM `agent` WHERE `sponsor_id` = '$my_id' && `status` = '1'"));
                            ?>

                            <div class="col-md-6 col-lg-3">
                                <div class="statistic__item statistic__item--orange">
                                    <h2 class="number"><?php echo $agent_coungt_data['total_agent'] ?></h2>
                                    <span class="desc">Total Active Agent</span>
                                    <div class="icon">
                                        <i class="zmdi zmdi-account-o"></i>
                                    </div>
                                </div>
                            </div>

                            <?php
                            $agent_coungt_data = mysqli_fetch_array(mysqli_query($conn, "SELECT count(agent_id) total_agent FROM `agent` WHERE `sponsor_id` = '$my_id' && `status` = '0'"));
                            ?>

                            <div class="col-md-6 col-lg-3">
                                <div class="statistic__item statistic__item--blue">
                                    <h2 class="number"><?php echo $agent_coungt_data['total_agent'] ?></h2>
                                    <span class="desc">Total Inactive User</span>
                                    <div class="icon">
                                        <i class="zmdi zmdi-account-o"></i>
                                    </div>
                                </div>
                            </div>

                            <?php
                            $agent_coungt_data_w = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM `agent_income` WHERE `agent_id` = '$my_id'"));
                            ?>
                            <div class="col-md-6 col-lg-3">
                                <div class="statistic__item statistic__item--red">
                                    <h2 class="number"><?php echo $agent_coungt_data_w['wallet'] ?>.00</h2>
                                    <span class="desc">Wallet Amount</span>
                                    <div class="icon">
                                        <i class="zmdi zmdi-money"></i>
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