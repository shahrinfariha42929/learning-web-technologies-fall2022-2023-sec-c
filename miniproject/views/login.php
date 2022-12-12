<?php 

    if(isset($_GET['err'])){
        echo "null username/password";
    }
?>

<html>
<head>
    <title>Login</title>
</head>
<body>
        <form method="post" action="../controllers/loginCheck.php">
            <fieldset>
                <legend>LOGIN</legend>
                <table>
                    <tr>
                        User Id</br>
                        <input type="text" name="id" value="">
                        </br>
                        Password</br>
                        <input type="password" name="password" value=""></br>
                        <input type="checkbox" name="remember" value=""> Remember Me
                        </br>
                            <input type="submit" name="submit" value="Login"> <a href="register.php">Register</a>                
                    </tr>
                </table>
            </fieldset>
        </form>
</body>
</html>