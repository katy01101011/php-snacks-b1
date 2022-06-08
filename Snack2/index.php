<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack2</title>
</head>

<body>
    <!-- VARIABILI -->
    <?php
    $user_name = $_GET["name"];
    $user_mail = $_GET["mail"];
    $user_age = $_GET["age"];
    $valid_name = false;
    $valid_mail = false;
    $valid_age = false;
    $allowed_message = "Accesso riuscito";
    $denied_message = "Accesso negato";
    ?>

    <!-- OPERAZIONI SULLE VARIABILI -->
    <?php
    if (strlen($user_name) > 3) {
        $valid_name = true;
    };

    if ((strpos($user_mail, "@")) !== false && (strpos($user_mail, ".")) !== false) {
        $valid_mail = true;
    };

    if (is_numeric($user_age)) {
        $valid_age = true;
    };

    $access_permitted = ($valid_name && $valid_mail && $valid_age) ? $access_permitted = true : $access_permitted = false;
    ?>

    <!-- RISULTATO STAMPATO IN PAGINA -->
    <main>
        <?php
        if ($access_permitted) {
            echo $allowed_message;
        } else {
            echo $denied_message;
        };
        ?>
    </main>
</body>

</html>

<!--
    Passare come parametri GET
[*] name
[*] mail
[*] age
    e verificare che:
[*] name sia più lungo di 3 caratteri
[*] mail contenga un punto e una chiocciola
[*] age sia un numero.
[*] Se tutto è ok stampare “Accesso riuscito”
[*] altrimenti “Accesso negato”
-->