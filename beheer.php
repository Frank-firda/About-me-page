<?php
session_start();
    $pdo = new PDO('mysql:hots=localhost;dbname=about-me-page;port=3306', 'root', '');
    function GetAllUsers(){
        global $pdo;
        $stmt = $pdo->prepare("SELECT * FROM accounts");
        $stmt->execute();
        return $stmt->fetchAll();
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Beheer</title>
    <link rel="stylesheet" href="./beheer.css">
    <link rel="icon" href="./icons/beheer.png">
</head>
<body>
<?php
    $nav = array(
        array("languages/Beheer/Beheer.Html.php", "<h1>manage html</h1>"),
        array("languages/Beheer/beheer-Css.php", "<h1>manage css</h1>"),
        array("beheer.php", "<h1>beheer home</h1>"),
        array("languages/Beheer/Beheer-Php.php", "<h1>manage php</h1>"),
        array("languages/Beheer/Beheer-Sql.php", "<h1>manage sql</h1>"),
    );
    include './nav.php';
?>
    <h1>hallo <?=$_SESSION['gebruiksnaam']?></h1>
    <h1>Beheer pagina</h1>
    <a id="logoutknop" href="logout.php">Uitloggen</a>
    <table>
        <tr>
            <th>username</th>
            <th>password</th>
            <th>type</th>
        </tr>
        <?php
            $users = GetAllUsers();
            foreach($users as $user){
                echo "<tr>";
                echo "<td>" . $user['username'] . "</td>";
                echo "<td>" . $user['password'] . "</td>";
                echo "<td>" . $user['Type'] . "</td>";
                echo "<td><a href='update-user.php?id=".$user['account_id']."'>update</a></td>";
                echo "</tr>";
            }
            ?>
    </table>
</body>
</html>