<?php
function savetodb(){
    $pdo = new PDO('mysql:hots=localhost;dbname=about-me-page;port=3306', 'root', '');
    $stmt = $pdo->prepare("INSERT INTO accounts (username, password, type) VALUES (:username, :password, :type)");
    $stmt->execute([
        'username' => $_POST['username'],
        'password' => $_POST['password'],
        'type' => 1
    ]);
}
function validation(){
    if (empty($_POST["gebruikersnaam"])) {
        $errors['gebruikersnaam'] = "gebruikersnaam verplicht";
    }
    if (empty($_POST["password"])) {
        $errors['password'] = "wachtwoord verplicht";
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    savetodb();
}
?>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>registeer pagina</title>
    <link rel="stylesheet" href="register.css">
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
    <form id="register-page" method="post">
        <h2 id="title-text">account verzoek aanmaken:</h2>
        <div id="username">
            <label for="username">gebruikersnaam:</label>
            <input type="text" name="username" class="input" required>
        </div>
        <div id="password">
            <label for="password">wachtwoord:</label>
            <input type="password" name="password" class="input" required>
        </div>
        <input type="submit" value="Registreer" id="register">
    </form>

</body>
</html>