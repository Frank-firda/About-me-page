<?php
//    $pdo = new PDO('mysql:hots=localhost;dbname=login;port=3306', 'root', '');
//    function checknw()
//    {
//
//    }
//   if ($_SERVER["resuest_method"] == "post") {
//
//   }
//?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login pagina</title>
    <link rel="stylesheet" href="login.css">
    <link rel="icon" href="icons/lock.png">
</head>
    <?php
    $nav = array(
        array("languages/html.php", "<h1>html</h1>"),
        array("languages/css.php", "<h1>css</h1>"),
        array("login.php", "<h1>login</h1>"),
        array("languages/php.php", "<h1>php</h1>"),
        array("languages/sql.php", "<h1>sql</h1>"),
    );
    include './nav.php';
    ?>
<body>
    <div id="login-page">
        <input type="text" name="gebruikersnaam">
        <labe for="gebruikersnaam">gebruikersnaam</labe>
        <input type="text" name="wachtwoord">
        <label for="wachtwoord">wachtwoord</label>
        <input type="submit" value="login">
    </div>
</body>
</html>