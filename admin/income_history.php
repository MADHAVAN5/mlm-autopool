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
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Amount</th>
                                                <th>Status</th>
                                                <th>Desp</th>
                                                <th>Time</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php 
                                                $direct_agent_list_query = mysqli_query($conn,"SELECT * FROM `wallet_history` WHERE `agent_id`= '$my_id' ORDER BY `wallet_history`.`date_time` DESC");
                                                $a=0;
                                                while ($data = mysqli_fetch_array($direct_agent_list_query))
                                                {
                                                    ?>
                                                        <tr>
                                                            <td><?php echo ++$a;?></td>
                                                            <td><?php echo $data['amt'];?></td>
                                                            <td><?php echo ($data['status'])?'Debit':'Credit';?></td>
                                                            <td><?php echo $data['desp'];?></td>
                                                            <td><?php echo $data['date_time'];?></td>
                                                        </tr>
                                                    <?php
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE-->
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