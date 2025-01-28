<?php
$pdo = new PDO('mysql:host=localhost;dbname=about-me-page;port=3306', 'root', '');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Beheer php</title>
    <link rel="icon" href="../../icons/php.png">
</head>
<body>
<?php
$nav = array(
    array("./Beheer.Html.php", "<h1>manage html</h1>"),
    array("./beheer-Css.php", "<h1>manage css</h1>"),
    array("../../beheer.php", "<h1>beheer home</h1>"),
    array("./Beheer-Php.php", "<h1>manage php</h1>"),
    array("./Beheer-Sql.php", "<h1>manage sql</h1>"),
);
include '../../nav.php';
?>
<form method="get">
    <label for="titel">titel
    <input name="titel" type="text">
    <label for="omschrijving">omschrijving</label>
    <input name="omschrijving" type="text">
    <label for="carboncode">Carbon iFrame</label>
    <input name="carboncode" type="text">
        <input type="submit">
</form>

</body>
</html>