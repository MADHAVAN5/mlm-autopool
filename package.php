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
                        <?php 
                            $a = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM `agent` WHERE `agent_id`='$my_id'"));
                        ?>
                        <h1 class="d-flex justify-content-center">BASIC PLANS</h1>
                        <div class="row m-t-30">
                            <div class="pricing-table col">
                                <div class="pricing-card">
                                    <h3 class="pricing-card-header">Silver</h3>
                                    <div class="price"><sup>₹</sup>500<span>.00</span></div>
                                    <ul>
                                        <li><strong>100</strong>/refer</li>
                                        <li><strong>20</strong>/level</li>
                                        <li><strong>100</strong>/Auto fill</li>
                                        <li><strong>12</strong>totel levels</li>
                                        <li><strong></strong></li>
                                    </ul>
                                    <button name="silver-pkg-btn" type="button"  data-toggle="modal" data-target="#b_silver" class="order-btn">
                                        <?php 
                                            if($a['package']=="b-silver")
                                            {
                                                echo "Active";
                                            }
                                            elseif(check_payment($my_id))
                                            {
                                                $b = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM `payment_proof` WHERE `agent_id`='$my_id'"));
                                                if ($b['package']=="b-silver")
                                                {
                                                    echo "Request Send";
                                                }
                                                else
                                                {
                                                    echo "Order Now";
                                                }
                                            }
                                            else
                                            {
                                                echo "Order Now";
                                            }
                                        ?>
                                    </button>
                                </div>

                                <div class="pricing-card">
                                    <h3 class="pricing-card-header">Gold</h3>
                                    <div class="price"><sup>₹</sup>1000<span>.00</span></div>
                                    <ul>
                                        <li><strong>100</strong>/refer</li>
                                        <li><strong>40</strong>for 10 level</li>
                                        <li><strong>80</strong>for 2 level</li>
                                        <li><strong>100</strong>/Auto fill</li>
                                        <li><strong>12</strong>totel levels</li>
                                    </ul>
                                    <button name="gold-pkg-btn" type="button"  data-toggle="modal" data-target="#b_gold" class="order-btn">
                                        <?php 
                                            if($a['package']=="b-gold")
                                            {
                                                echo "Active";
                                            }
                                            elseif(check_payment($my_id))
                                            {
                                                $b = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM `payment_proof` WHERE `agent_id`='$my_id'"));
                                                if ($b['package']=="b-gold")
                                                {
                                                    echo "Request Send";
                                                }
                                                else
                                                {
                                                    echo "Order Now";
                                                }
                                            }
                                            else
                                            {
                                                echo "Order Now";
                                            }
                                        ?>
                                    </button>
                                </div>

                                <div class="pricing-card">
                                    <h3 class="pricing-card-header">Diamond</h3>
                                    <div class="price"><sup>₹</sup>2500<span>.00</span></div>
                                    <ul>
                                        <li><strong>100</strong>/refer</li>
                                        <li><strong>125</strong>for 2 level</li>
                                        <li><strong>150</strong>for 2 level</li>
                                        <li><strong>100</strong>/Auto fill</li>
                                        <li><strong>12</strong>totel levels</li>
                                    </ul>
                                    <button name="diamond-pkg-btn" type="button"  data-toggle="modal" data-target="#b_diamond" class="order-btn">
                                    <?php 
                                            if($a['package']=="b-diamond")
                                            {
                                                echo "Active";
                                            }
                                            elseif(check_payment($my_id))
                                            {
                                                $b = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM `payment_proof` WHERE `agent_id`='$my_id'"));
                                                if ($b['package']=="b-diamond")
                                                {
                                                    echo "Request Send";
                                                }
                                                else
                                                {
                                                    echo "Order Now";
                                                }
                                            }
                                            else
                                            {
                                                echo "Order Now";
                                            }
                                        ?>
                                    </button>
                                </div>

                                <div class="pricing-card">
                                    <h3 class="pricing-card-header">Platinum</h3>
                                    <div class="price"><sup>₹</sup>6500<span>.00</span></div>
                                    <ul>
                                        <li><strong>100</strong>/refer</li>
                                        <li><strong>170</strong>for 10 level</li>
                                        <li><strong>200</strong>for 2 level</li>
                                        <li><strong>100</strong>/Auto fill</li>
                                        <li><strong>12</strong>totel levels</li>
                                    </ul>
                                    <button name="untimate-pkg-btn" type="button"  data-toggle="modal" data-target="#b_platinum" class="order-btn">
                                        <?php 
                                            if($a['package']=="b-platinum")
                                            {
                                                echo "Active";
                                            }
                                            elseif(check_payment($my_id))
                                            {
                                                $b = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM `payment_proof` WHERE `agent_id`='$my_id'"));
                                                if ($b['package']=="b-platinum")
                                                {
                                                    echo "Request Send";
                                                }
                                                else
                                                {
                                                    echo "Order Now";
                                                }
                                            }
                                            else
                                            {
                                                echo "Order Now";
                                            }
                                        ?>
                                    </button>
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
                                    <div class="price"><sup>₹</sup>12500<span>.00</span></div>
                                    <ul>
                                        <li><strong></strong></li>
                                        <li><strong>1500</strong>/refer</li>
                                        <li><strong>5500</strong>/Auto fill</li>
                                        <li><strong></strong></li>
                                    </ul>
                                    <button type="button"  data-toggle="modal" data-target="#p_silver" class="order-btn">
                                        <?php 
                                            if($a['package']=="p-silver")
                                            {
                                                echo "Active";
                                            }
                                            elseif(check_payment($my_id))
                                            {
                                                $b = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM `payment_proof` WHERE `agent_id`='$my_id'"));
                                                if ($b['package']=="p-silver")
                                                {
                                                    echo "Request Send";
                                                }
                                                else
                                                {
                                                    echo "Order Now";
                                                }
                                            }
                                            else
                                            {
                                                echo "Order Now";
                                            }
                                        ?>
                                    </button>
                                </div>

                                <div class="pricing-card">
                                    <h3 class="pricing-card-header">Gold</h3>
                                    <div class="price"><sup>₹</sup>55000<span>.00</span></div>
                                    <ul>
                                        <li><strong></strong></li>
                                        <li><strong>5000</strong>/refer</li>
                                        <li><strong>25000</strong>/Auto fill</li>
                                        <li><strong></strong></li>
                                    </ul>
                                    <button type="button"  data-toggle="modal" data-target="#p_gold" class="order-btn">
                                        <?php 
                                            if($a['package']=="p-gold")
                                            {
                                                echo "Active";
                                            }
                                            elseif(check_payment($my_id))
                                            {
                                                $b = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM `payment_proof` WHERE `agent_id`='$my_id'"));
                                                if ($b['package']=="p-gold")
                                                {
                                                    echo "Request Send";
                                                }
                                                else
                                                {
                                                    echo "Order Now";
                                                }
                                            }
                                            else
                                            {
                                                echo "Order Now";
                                            }
                                        ?>
                                    </button>
                                </div>

                                <div class="pricing-card">
                                    <h3 class="pricing-card-header">Diamond</h3>
                                    <div class="price"><sup>₹</sup>80000<span>.00</span></div>
                                    <ul>
                                        <li><strong></strong></li>
                                        <li><strong>10000</strong>/refer</li>
                                        <li><strong>33300</strong>/Auto fill</li>
                                        <li><strong></strong></li>
                                    </ul>
                                    <button type="button"  data-toggle="modal" data-target="#p_diamond" class="order-btn">
                                        <?php 
                                            if($a['package']=="p-diamond")
                                            {
                                                echo "Active";
                                            }
                                            elseif(check_payment($my_id))
                                            {
                                                $b = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM `payment_proof` WHERE `agent_id`='$my_id'"));
                                                if ($b['package']=="p-diamond")
                                                {
                                                    echo "Request Send";
                                                }
                                                else
                                                {
                                                    echo "Order Now";
                                                }
                                            }
                                            else
                                            {
                                                echo "Order Now";
                                            }
                                        ?>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="b_silver" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="smallmodalLabel">BASIC SILVER plan</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>
                                    pay ₹500 for this pakage <br> <br>
                                    Name : Akash Kumar <br>
                                    Acc NO : 139301000026173 <br>
                                    IFSC Code : IOBA0001393
                                    <br><br>
                                    Paytm : 9585368504
                                </p>
                                <img src="./images/qr.jpeg" class="img-fluid"></img>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <a href="./activation_req.php" class="btn btn-primary">Confirm</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="b_gold" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="smallmodalLabel">BASIC GOLD plan</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>
                                    pay ₹1000 for this pakage <br> <br>
                                    Name : Akash Kumar <br>
                                    Acc NO : 139301000026173 <br>
                                    IFSC Code : IOBA0001393
                                    <br><br>
                                    Paytm : 9585368504
                                </p>
                                <img src="./images/qr.jpeg" class="img-fluid"></img>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <a href="./activation_req.php" class="btn btn-primary">Confirm</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="b_diamond" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="smallmodalLabel">BASIC DIAMOND plan</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>
                                    pay ₹2500 for this pakage <br> <br>
                                    Name : Akash Kumar <br>
                                    Acc NO : 139301000026173 <br>
                                    IFSC Code : IOBA0001393
                                    <br><br>
                                    Paytm : 9585368504
                                </p>
                                <img src="./images/qr.jpeg" class="img-fluid"></img>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <a href="./activation_req.php" class="btn btn-primary">Confirm</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="b_platinum" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="smallmodalLabel">BASIC PLATINUM plan</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>
                                    pay ₹6500 for this pakage <br> <br>
                                    Name : Akash Kumar <br>
                                    Acc NO : 139301000026173 <br>
                                    IFSC Code : IOBA0001393
                                    <br><br>
                                    Paytm : 9585368504
                                </p>
                                <img src="./images/qr.jpeg" class="img-fluid"></img>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <a href="./activation_req.php" class="btn btn-primary">Confirm</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="p_silver" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="smallmodalLabel">PRIMIUM SILVER plan</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>
                                    pay ₹12500 for this pakage <br> <br>
                                    Name : Akash Kumar <br>
                                    Acc NO : 139301000026173 <br>
                                    IFSC Code : IOBA0001393
                                    <br><br>
                                    Paytm : 9585368504
                                </p>
                                <img src="./images/qr.jpeg" class="img-fluid"></img>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <a href="./activation_req.php" class="btn btn-primary">Confirm</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="p_gold" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="smallmodalLabel">PRIMIUM GOLD plan</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>
                                    pay ₹55000 for this pakage <br> <br>
                                    Name : Akash Kumar <br>
                                    Acc NO : 139301000026173 <br>
                                    IFSC Code : IOBA0001393
                                    <br><br>
                                    Paytm : 9585368504
                                </p>
                                <img src="./images/qr.jpeg" class="img-fluid"></img>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <a href="./activation_req.php" class="btn btn-primary">Confirm</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="p_diamond" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="smallmodalLabel">PRIMIUM DIAMOND plan</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>
                                    pay ₹80000 this pakage <br> <br> 
                                    Name : Akash Kumar <br>
                                    Acc NO : 139301000026173 <br>
                                    IFSC Code : IOBA0001393
                                    <br><br>
                                    Paytm : 9585368504
                                </p>
                                <img src="./images/qr.jpeg" class="img-fluid"></img>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <a href="./activation_req.php" class="btn btn-primary">Confirm</a>
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