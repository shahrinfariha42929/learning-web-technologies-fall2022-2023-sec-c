<?php
    session_start();
    $currentpass = $_POST['currentpass'];
    $newpass = $_POST['newpass'];
    $retypepassword = $_POST['re-pass'];

    $ogpass = $_SESSION['user']['password'];


    if($currentpass!== $ogpass){
        echo "Current Password does not match";
    }

    elseif ($newpass !== $retypepassword) {
        echo "Password does not match";
    }

    else {
        $_SESSION['user']['password'] = $newpass;
        header('location: Login.php');
    }
?>