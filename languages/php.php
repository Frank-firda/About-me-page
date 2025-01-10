<?php
function getfromdb()
{
    $pdo = new PDO('mysql:hots=localhost;dbname=about-me-page;port=3306', 'root', '');
    $stmt = $pdo->prepare("SELECT * FROM code WHERE language = 3");
    $stmt->execute();
    return $stmt->fetchAll();
}
?>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>php</title>
    <link rel="stylesheet" href="./style-languages/php.css">
    <link rel="icon" href="../icons/php.png">
</head>
    <?php
    $nav = array(
        array("./html.php", "<h1>html</h1>"),
        array("./css.php", "<h1>css</h1>"),
        array("../index.php", "<h1>Homepage</h1>"),
        array("./php.php", "<h1>php</h1>"),
        array("./sql.php", "<h1>sql</h1>"),
    );
    include '../nav.php';
    ?>
<body>
    <h1>php cheatsheet</h1>
    <?php
    $code = getfromdb();
    foreach ($code as $item) {
        echo <<<HTML
        <div class="item">
            <div class="item-title">
                <h2>{$item['Title']}</h2>
                <h3>{$item['ID']}</h3>
            </div>
            <div class="block">
                <div class="code-block">
                    {$item['Carbon-Code']}
                </div>
                <div class ="resultaat-block">
                    <p>{$item['Description']}</p>
                </div>
            </div>
        </div>
HTML;
    }
    ?>
</body>
</html>