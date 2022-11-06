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
                    // $active = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM `agent` WHERE `agent_id`='$my_id'"))
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
                <div class="section__content section__content--p30">
                    <!-- <section class="container-fluid statistic statistic2"> -->
                    <div class="container">
                        <div class="row">
                            <?php
                                $agent_coungt_data = mysqli_fetch_array(mysqli_query($conn,"SELECT count(agent_id) total_agent FROM `agent` WHERE `sponsor_id` = '$my_id'"));
                            ?>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?php echo $agent_coungt_data['total_agent']?></h2>
                                                <span>Total Registrations</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php
                                $agent_coungt_data = mysqli_fetch_array(mysqli_query($conn,"SELECT count(agent_id) total_agent FROM `agent` WHERE `sponsor_id` = '$my_id' && `status` = '1'"));
                            ?>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?php echo $agent_coungt_data['total_agent']?></h2>
                                                <span>Total Active Agent</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php
                                $agent_coungt_data = mysqli_fetch_array(mysqli_query($conn,"SELECT count(agent_id) total_agent FROM `agent` WHERE `sponsor_id` = '$my_id' && `status` = '0'"));
                            ?>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?php echo $agent_coungt_data['total_agent']?></h2>
                                                <span>Total Inactive User</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php
                                $agent_coungt_data_w = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM `agent_income` WHERE `agent_id` = '$my_id'"));
                            ?>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c4">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-money"></i>
                                            </div>
                                            <br>
                                            <div class="text">
                                                <h2><?php echo $agent_coungt_data_w['wallet']?>.00</h2>
                                                <span>Wallet Amount</span>
                                            </div>
                                        </div>
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