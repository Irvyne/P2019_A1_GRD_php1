<?php
    var_dump($_POST);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" autocomplete="off">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required autofocus placeholder="Ici votre nom d'utilisateur">
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required placeholder="Ici votre mot de passe">
        <br>
        <input type="submit" value="Submit Me!" name="submitMe">
    </form>
</body>
</html>