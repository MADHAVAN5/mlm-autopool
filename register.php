<?php
    session_start();
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
    <title>Register</title>
    
    <?php require_once("./resources/header_links.php");?>

</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="./index.php">
                                <img style="height:auto; width:179px ;" src="images/icon/logo_.png" alt="logo">
                            </a>
                        </div>
                        <?php 
                            if (isset($_SESSION['error']) && !isset($_SESSION['reg'])) {
                                ?>
                                <div class="alert alert-danger">
                                    <?php
                                        if ($_SESSION['error']=='SPS') {
                                            echo "Sponser ID not Valid";
                                        }
                                        elseif($_SESSION['error']=='Mobile')
                                        {
                                            echo "Mobile Number is already used";
                                        }
                                        else
                                        {
                                            echo "Something went Wrong Try again";
                                        }
                                    ?>
                                </div>
                                <?php
                                unset($_SESSION['error']);
                            }
                            if (isset($_SESSION['reg'])) {
                                ?>
                                <div class="alert alert-success">
                                    <?php
                                        echo "Agent ID : {$_SESSION['agent_id']} <br> Name : {$_SESSION['Name']}";
                                        unset($_SESSION['agent_id']);
                                        unset($_SESSION['Name']);
                                    ?>
                                </div>
                                <?php
                                unset($_SESSION['reg']);
                                unset($_SESSION['error']);
                            }
                        ?>
                        <div class="login-form">
                            <form action="./request_handler.php" method="post">
                                <div class="form-group">
                                    <!-- <label>Sponsor ID</label> -->
                                    <input class="au-input au-input--full" type="text" name="sps_id" placeholder="Sponsor ID" pattern="[0-9]{6}">
                                </div>
                                <div class="form-group">
                                    <!-- <label>Full name</label> -->
                                    <input class="au-input au-input--full" type="text" name="username" placeholder="Full name" required>
                                </div>
                                <div class="form-group">
                                    <!-- <label>Mobile</label> -->
                                    <input class="au-input au-input--full" type="phone" name="user_mob" placeholder="Mobile" required>
                                </div>
                                <div class="form-group">
                                    <!-- <label>Password</label> -->
                                    <input class="au-input au-input--full" type="password" name="user_password" placeholder="Password" required>
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="aggree" required>Agree the terms and policy
                                    </label>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit" name="register_btn">register</button>
                            </form>
                            <div class="register-link">
                                <p>
                                    Already have account?
                                    <a href="./index.php">Sign In</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <?php require_once("./resources/footer_links.php")?>
</body>

</html>
<!-- end document-->