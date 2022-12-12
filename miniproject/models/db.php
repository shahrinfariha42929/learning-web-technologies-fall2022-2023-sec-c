<?php 

    $host = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "mini_project";

    function getConnection(){
        global $host;
        global $dbuser;
        global $dbname;
        global $dbpass;

        return $con = mysqli_connect($host, $dbuser, $dbpass, $dbname);
    }

?>