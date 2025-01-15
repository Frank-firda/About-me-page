<?php
$pdo = new PDO('mysql:hots=localhost;dbname=about-me-page;port=3306', 'root', '');
$pdo ->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
//$user = $_GET['id'];
$user = 15;
echo $user;
function GetUfromdb($user) {
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM accounts WHERE account_id = :user");
    $stmt->execute(['user' => $user]);
    return $stmt->fetch();
}
function update(){
        global $pdo;
        $stmt = $pdo->
        $stmt->execute();
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
    <title>User updater</title>
</head>
<body>
<form>
    <?php
    $gebruiker = GetUfromdb($user);
    ?>
    <input name="username" type="text" value="<?=$gebruiker['username']?>">
    <label for="username"><?=$gebruiker['username']?></label>
    <input name="password" type="text" value="<?=$gebruiker['username']?>">
    <label for="password"><?=$gebruiker['password']?></label>
    <input name="type" type="number" min="1" max="2" value="<?=$gebruiker['username']?>">
    <label for="type"><?=$gebruiker['Type']?></label>
</form>
</body>
</html>
