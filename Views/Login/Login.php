<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?= Utils::dbard() ?>assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="<?= Utils::dbard() ?>assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        <?= $data['pages_title'] ?>
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- CSS Files -->
    <link href="<?= Utils::dbard() ?>assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?= Utils::dbard() ?>assets/css/now-ui-dashboard.css?v=1.6.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="<?= Utils::dbard() ?>assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="login-page sidebar-mini ">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
            <div class="navbar-wrapper">
                <a class="navbar-brand" href="#pablo">Login Page</a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar navbar-kebab"></span>
                <span class="navbar-toggler-bar navbar-kebab"></span>
                <span class="navbar-toggler-bar navbar-kebab"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navigation">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="../dashboard.html" class="nav-link">
                            <i class="now-ui-icons design_app"></i>
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="register.html" class="nav-link">
                            <i class="now-ui-icons tech_mobile"></i>
                            Register
                        </a>
                    </li>
                    <li class="nav-item  active ">
                        <a href="login.html" class="nav-link">
                            <i class="now-ui-icons users_circle-08"></i>
                            Login
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="pricing.html" class="nav-link">
                            <i class="now-ui-icons now-ui-icons business_money-coins"></i>
                            Pricing
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="lock.html" class="nav-link">
                            <i class="now-ui-icons ui-1_lock-circle-open"></i>
                            Lock
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="invoice.html" class="nav-link">
                            <i class="now-ui-icons files_paper"></i>
                            Invoice
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="wrapper wrapper-full-page ">
        <div class="full-page login-page section-image" filter-color="black" data-image="<?= Utils::dbard() ?>assets/img/bg14.jpg">
            <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
            <div class="content">
                <div class="container">
                    <div class="col-md-4 ml-auto mr-auto">
                        <form method="POST" name="formLogin" id="formLogin">
                            <div class="card card-login card-plain">
                                <div class="card-header ">
                                    <div class="logo-container">
                                        <img src="<?= Utils::dbard() ?>assets/img/now-logo.png" alt="">
                                    </div>
                                </div>
                                <div class="card-body ">
                                    <div class="input-group no-border form-control-lg">
                                        <span class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="now-ui-icons users_circle-08"></i>
                                            </div>
                                        </span>
                                        <input type="email" class="form-control" placeholder="Email" id="loginEmail" name="email">
                                    </div>
                                    <div class="input-group no-border form-control-lg">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="now-ui-icons text_caps-small"></i>
                                            </div>
                                        </div>
                                        <input type="password" class="form-control" placeholder="Password" id="loginPassword" name="password">
                                    </div>
                                </div>
                                <div class="card-footer ">
                                    
                                    <button type="submit" class="btn btn-primary btn-round btn-lg btn-block mb-3" id="boton_login" value="Ingresar">Ingresar</button>
                                    <div class="pull-left">
                                        <h6><a href="#pablo" class="link footer-link">Create Account</a></h6>
                                    </div>
                                    <div class="pull-right">
                                        <h6><a href="#pablo" class="link footer-link">Need Help?</a></h6>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class=" container-fluid ">
                    <nav>
                        <ul>
                            <li>
                                <a href="https://www.creative-tim.com">
                                    Creative Tim
                                </a>
                            </li>
                            <li>
                                <a href="http://presentation.creative-tim.com">
                                    About Us
                                </a>
                            </li>
                            <li>
                                <a href="http://blog.creative-tim.com">
                                    Blog
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="copyright" id="copyright">
                        &copy; <script>
                            document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
                        </script>, Designed by <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <script>
        const base_url = '<?= Utils::base_url() ?>';
    </script>
    <?php require_once './Views/scripts.php' ?>
    <!--   Core JS Files   -->

    <script src="<?= Utils::dbard() ?>assets/js/core/jquery.min.js"></script>
    <script src="<?= Utils::dbard() ?>assets/js/core/popper.min.js"></script>
    <script src="<?= Utils::dbard() ?>assets/js/core/bootstrap.min.js"></script>


    <!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
    <script src="<?= Utils::dbard() ?>assets/demo/demo.js"></script>
    <script>
        $(document).ready(function() {
            demo.checkFullPageBackgroundImage();
        });
    </script>


</body>

</html>