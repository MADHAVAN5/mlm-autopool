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
                            <div class="container_ref col-lg-12">
                                <div class="ref_card card">
                                    <div class="card-body">
                                    <img src="./images/icon/refer.png" alt="referral">
                                    <h3>refer and earn money</h3>
                                    <div class="ref_row row">
                                        <span id="ref_link">http://localhost/mlm-autopool/register.php?sps_id=<?php echo $my_id;?></span>
                                        <!-- <span id="ref_link">https://akakum8.dreamhosters.com/register.php?sps_id=<?php //echo $my_id;?></span> -->
                                        <span id="ref_btn">COPY LINK</span>
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
    <script>
        var ref_btn = document.getElementById("ref_btn");
        var ref_link = document.getElementById("ref_link");
        ref_btn.onclick = function(){
            navigator.clipboard.writeText(ref_link.innerHTML);
            ref_btn.innerHTML = "COPIED";
            setTimeout(function(){
                ref_btn.innerHTML = "COPY CODE";
            },3000);
        }
    </script>
    <?php require_once("./resources/footer_links.php") ?>
</body>

</html>
<!-- end document-->