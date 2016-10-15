<?php session_start(); ?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Hello</title>
</head>
<body>
Hello! <?php echo $_SESSION["userName"] ?> <br>
Password: <?php echo $_SESSION["password"] ?> <br>
birthday: <?php echo $_SESSION["birthday"] ?> <br>
emailVal: <?php echo $_SESSION["emailVal"] ?> <br>
love: <?php echo $_SESSION["pet"] ?>

</body>
</html>