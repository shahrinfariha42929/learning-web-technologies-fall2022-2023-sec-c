<?php 
    session_start();

    if(!isset($_SESSION['valid'])){
        header('location: login.php');
    }

?>

<html>
<head>
    <title>Home Page</title>
</head>
<body>
        <h1>Welcome <?php echo $_SESSION['id']; ?> !</h1>
        <a href="profile.php">Profile</a><br>
        <a href="changepass.php">Change Password</a><br>
        <a href="users.php">View Users</a><br>
        <a href="../controllers/login.php">Logout</a>
</body>
</html>