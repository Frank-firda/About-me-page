<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About me!</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="icons/racing-icon.png"
</head>
<body>
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
    <main>
        <div id="PIC-main">
        </div>
        <div id="intro">
            <h1>About-me-page van frank aukema!</h1>
            <br>
            <h2>Wie ben ik?</h2>
            <h3>Ik ben Frank Aukema 16 jaar oud en ik ben student Software Developer bij Firda Sneek.</h3>
            <h2>Waarvoor is deze website?</h2>
            <h3>Deze website is bedoeld als een persoonlijke cheatsheet</h3>
            <h2>Waar kan ik deze cheatsheets vinden?</h2>
            <h3>Je kan de cheatsheets vinden boven aan je beeldscherm in de header</h3>
            <h2>Kan ik ook informatie toevoegen aan de cheatsheets?</h2>
            <h3>Ja dat kan. Als u dit wilt doen moet u een accountverzoek doen. Dit kan u doen om op inloggen boven aan de pagina te klikken en dan op registreren te klikken</h3>
        </div>
    </main>
</body>
</html>

