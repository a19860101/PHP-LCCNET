<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    session_start();
    echo $_SESSION["AUTH"]["user"];
    echo "<br>";
    echo $_SESSION["AUTH"]["mail"];
?>
    <form action="response.php" method="post">
        <input type="text" name="user">
        <input type="text" name="mail">
        <input type="submit" >
    </form>
</body>
</html>