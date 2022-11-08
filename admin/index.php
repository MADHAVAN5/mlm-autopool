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

            <?php //include("./resources/scroll_bar.php");?>

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content statistic2 section__content--p30">
                    <!-- <section class="container-fluid statistic statistic2"> -->
                    <div class="container">
                        <div class="row">
                            <?php
                                $agent_coungt_data = mysqli_fetch_array(mysqli_query($conn,"SELECT count(agent_id) total_agent FROM `agent`"));
                            ?>
                            <div class="col-md-6 col-lg-3">
                                <div class="statistic__item statistic__item--green">
                                    <h2 class="number"><?php echo $agent_coungt_data['total_agent']?></h2>
                                    <span class="desc">Total Registrations</span>
                                    <div class="icon">
                                        <i class="zmdi zmdi-money"></i>
                                    </div>
                                </div>
                            </div>

                            <?php
                                $agent_coungt_data = mysqli_fetch_array(mysqli_query($conn,"SELECT count(agent_id) total_agent FROM `agent` WHERE `status` = '1'"));
                            ?>
                            <div class="col-md-6 col-lg-3">
                                <div class="statistic__item statistic__item--orange">
                                    <h2 class="number"><?php echo $agent_coungt_data['total_agent']?></h2>
                                    <span class="desc">Total Active Agent</span>
                                    <div class="icon">
                                        <i class="zmdi zmdi-money"></i>
                                    </div>
                                </div>
                            </div>

                            <?php
                                $agent_coungt_data = mysqli_fetch_array(mysqli_query($conn,"SELECT count(agent_id) total_agent FROM `agent` WHERE `status` = '0'"));
                            ?>
                            <div class="col-md-6 col-lg-3">
                                <div class="statistic__item statistic__item--blue">
                                    <h2 class="number"><?php echo $agent_coungt_data['total_agent']?></h2>
                                    <span class="desc">Total Inactive User</span>
                                    <div class="icon">
                                        <i class="zmdi zmdi-money"></i>
                                    </div>
                                </div>
                            </div>

                            <?php
                                $agent_coungt_data_w = mysqli_fetch_array(mysqli_query($conn,"SELECT sum(wallet) totel_income FROM `agent_income`"));
                            ?>
                            <div class="col-md-6 col-lg-3">
                                <div class="statistic__item statistic__item--red">
                                    <h2 class="number"><?php echo $agent_coungt_data_w['totel_income']?>.00</h2>
                                    <span class="desc">Total Agent Incomes</span>
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
    <?php require_once("../resources/footer_links.php") ?>
</body>

</html>
<!-- end document-->