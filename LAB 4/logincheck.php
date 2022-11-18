<?php
    session_start();

    $name = $_POST['name'];
    $password = $_POST['password'];

    if($name == "" || $password == ""){
        header('location: Login.php?err=null&&msg=none');
    }else if($name == $_SESSION['user']['name'] && $password == $_SESSION['user']['password']){

        setcookie('status', 'true', time()+3600, '/');
    }else{
        echo "invalid user";
    }


?>