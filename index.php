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
    <title>Login</title>

    <?php require_once("./resources/header_links.php") ?>
</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="./index.php">
                                <img src="images/icon/logo.png" alt="CoolAdmin">
                            </a>
                        </div>
                        <?php
                            if (isset($_SESSION['error'])) {
                                ?>
                                <div class="alert alert-danger">
                                        Login Invalid
                                </div>
                                <?php
                                unset($_SESSION['error']);
                            }
                        ?>
                        <div class="login-form">
                            <form action="request_handler.php" method="post">
                                <div class="form-group">
                                    <label>Agent ID</label>
                                    <input class="au-input au-input--full" type="text" name="agent_id" placeholder="Agent ID" pattern="[0-9]{6}">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="agent_password" placeholder="Password">
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <a href="#">Forgotten Password?</a>
                                    </label>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" name="login_btn" type="submit">sign in</button>
                            </form>
                            <div class="register-link">
                                <p>
                                    Don't you have account?
                                    <a href="./register.php">Sign Up Here</a>
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