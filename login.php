<?php
$pdo = new PDO('mysql:hots=localhost;dbname=login;port=3306', 'root', '');

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    echo 'post';
    $user = $_POST['username'];
    $password = $_POST['password'];

    // select query
    SELECT * FROM accounts WHARE username = $user AND password = $password


    // error weergeven als verkeerd

    // set session username

    // door naar volgende pagina
}


//    $pdo = new PDO('mysql:hots=localhost;dbname=login;port=3306', 'root', '');
//    function checknw(){
//
//    }
//   if ($_SERVER["resuest_method"] == "post") {
//
//   }
//?>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
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
        array("index.php", "<h1>homepage</h1>"),
        array("languages/php.php", "<h1>php</h1>"),
        array("languages/sql.php", "<h1>sql</h1>"),
    );
    include './nav.php';
    ?>
<body>
        <form id="login-page" method="post" action="./beheer.php">
            <div id="username">
                <label for="username">gebruikersnaam:</label>
                <input type="text" name="username" class="input" required>
            </div>
            <div id="password">
                <label for="password">wachtwoord:</label>
                <input type="text" name="password" class="input" required>
            </div>
            <input type="submit" value="login" id="register">
            <br>
            <p>geen account?</p>
            <a id="register" href="register.php">registreer</a>
        </form>
</body>
</html>