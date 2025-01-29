<?php
$pdo = new PDO('mysql:hots=localhost;dbname=about-me-page;port=3306', 'root', '');
$pdo ->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$user = $_GET['id'];
echo $user;
function GetUfromdb($user) {
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM accounts WHERE account_id = :user");
    $stmt->bindValue(':user', $user);
    $stmt->execute();
    return $stmt->fetch();
}
function update($user) {
    global $pdo;
    $stmt = $pdo->prepare("UPDATE accounts SET username = :username, password = :password, Type = :type WHERE account_id = :user");
    $stmt->bindValue(':username', $_POST['username']);
    $stmt->bindValue(':password', $_POST['password']);
    $stmt->bindValue(':type', intval($_POST['type']));
    $stmt->bindValue(':user', $user);
    $stmt->execute();
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    update($user);
}
?>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="updater.css">
    <link rel="icon" href="./icons/beheer.png">
    <title>User updater</title>
</head>
<body>
<?php
$gebruiker = GetUfromdb($user);
?>
    <form action="update-user.php?id=<?=$user?>" method="POST">
        <div>
            <label for="username">verander naam</label>
            <input id="username" name="username" type="text" value="<?=$gebruiker['username']?>">
        </div>
        <div>
            <label for="password">verander wachtwoord</label>
            <input id="password" name="password" type="text" value="<?=$gebruiker['password']?>">
        </div>
        <div>
            <label for="type">Soort gebruiker</label>
            <input id="type" name="type" type="number" min="1" max="2" value="<?=$gebruiker['Type']?>">
        </div>
        <div>
            <input type="submit">
        </div>
    </form>
</body>
</html>
