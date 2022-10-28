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
                        <h1 class="d-flex justify-content-center">BASIC PLANS</h1>
                        <div class="row m-t-30">
                            <div class="pricing-table col">
                                <div class="pricing-card">
                                    <h3 class="pricing-card-header">Silver</h3>
                                    <div class="price"><sup>$</sup>500<span>.00</span></div>
                                    <ul>
                                        <li><strong>100</strong>/refer</li>
                                        <li><strong>50</strong>/level</li>
                                        <li><strong>100</strong>/Auto fill</li>
                                        <li><strong>5</strong>totel levels</li>
                                    </ul>
                                    <a href="#" class="order-btn">Order Now</a>
                                </div>

                                <div class="pricing-card">
                                    <h3 class="pricing-card-header">Gold</h3>
                                    <div class="price"><sup>$</sup>1000<span>.00</span></div>
                                    <ul>
                                        <li><strong>100</strong>/refer</li>
                                        <li><strong>50</strong>/level</li>
                                        <li><strong>100</strong>/Auto fill</li>
                                        <li><strong>5</strong>totel levels</li>
                                    </ul>
                                    <a href="#" class="order-btn">Order Now</a>
                                </div>

                                <div class="pricing-card">
                                    <h3 class="pricing-card-header">Diamond</h3>
                                    <div class="price"><sup>$</sup>2500<span>.00</span></div>
                                    <ul>
                                        <li><strong>100</strong>/refer</li>
                                        <li><strong>50</strong>/level</li>
                                        <li><strong>100</strong>/Auto fill</li>
                                        <li><strong>5</strong>totel levels</li>
                                    </ul>
                                    <a href="#" class="order-btn">Order Now</a>
                                </div>

                                <div class="pricing-card">
                                    <h3 class="pricing-card-header">Ultimate</h3>
                                    <div class="price"><sup>$</sup>6500<span>.00</span></div>
                                    <ul>
                                        <li><strong>100</strong>/refer</li>
                                        <li><strong>50</strong>/level</li>
                                        <li><strong>100</strong>/Auto fill</li>
                                        <li><strong>5</strong>totel levels</li>
                                    </ul>
                                    <a href="#" class="order-btn">Order Now</a>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-center">
                            <h1>PRIMIUM PLAN</h1>
                        </div>
                        <div class="row m-t-30">
                            <div class="pricing-table col">
                                <div class="pricing-card">
                                    <h3 class="pricing-card-header">Silver</h3>
                                    <div class="price"><sup>$</sup>500<span>.00</span></div>
                                    <ul>
                                        <li><strong>100</strong>/refer</li>
                                        <li><strong>50</strong>/level</li>
                                        <li><strong>100</strong>/Auto fill</li>
                                        <li><strong>5</strong>totel levels</li>
                                    </ul>
                                    <a href="#" class="order-btn">Order Now</a>
                                </div>

                                <div class="pricing-card">
                                    <h3 class="pricing-card-header">Gold</h3>
                                    <div class="price"><sup>$</sup>1000<span>.00</span></div>
                                    <ul>
                                        <li><strong>100</strong>/refer</li>
                                        <li><strong>50</strong>/level</li>
                                        <li><strong>100</strong>/Auto fill</li>
                                        <li><strong>5</strong>totel levels</li>
                                    </ul>
                                    <a href="#" class="order-btn">Order Now</a>
                                </div>

                                <div class="pricing-card">
                                    <h3 class="pricing-card-header">Diamond</h3>
                                    <div class="price"><sup>$</sup>2500<span>.00</span></div>
                                    <ul>
                                        <li><strong>100</strong>/refer</li>
                                        <li><strong>50</strong>/level</li>
                                        <li><strong>100</strong>/Auto fill</li>
                                        <li><strong>5</strong>totel levels</li>
                                    </ul>
                                    <a href="#" class="order-btn">Order Now</a>
                                </div>

                                <div class="pricing-card">
                                    <h3 class="pricing-card-header">Ultimate</h3>
                                    <div class="price"><sup>$</sup>6500<span>.00</span></div>
                                    <ul>
                                        <li><strong>100</strong>/refer</li>
                                        <li><strong>50</strong>/level</li>
                                        <li><strong>100</strong>/Auto fill</li>
                                        <li><strong>5</strong>totel levels</li>
                                    </ul>
                                    <a href="#" class="order-btn">Order Now</a>
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