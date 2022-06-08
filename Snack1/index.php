<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack1</title>
</head>

<body>
<!--
[*] Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
    Ogni array avrà:
[*] una squadra di casa e una squadra ospite
[*] punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
[*] Stampiamo a schermo tutte le partite con questo schema: Olimpia Milano - Cantù | 55-60
-->
    <main>
        <?php
        $matches = [
            [
                "home_team" => "Los Angeles Lakers",
                "home_team_score" => 124,
                "visiting_team" =>  "Golden State Warriors",
                "visiting_team_score" => 89,
            ],
            [
                "home_team" => "Boston Celtics",
                "home_team_score" => 131,
                "visiting_team" =>  "Chicago Bulls",
                "visiting_team_score" => 178,
            ],
            [
                "home_team" => "Miami Heat",
                "home_team_score" => 78,
                "visiting_team" =>  "Cleveland",
                "visiting_team_score" => 46,
            ],
            [
                "home_team" => "San Antonio Spurs",
                "home_team_score" => 89,
                "visiting_team" =>  "New York Knicks",
                "visiting_team_score" => 101,
            ],
            [
                "home_team" => "Detroit Pistons",
                "home_team_score" => 73,
                "visiting_team" =>  "Orlando Magic",
                "visiting_team_score" => 188,
            ],
            [
                "home_team" => "Philadelphia 76ers",
                "home_team_score" => 56,
                "visiting_team" =>  "Brooklyn Nets",
                "visiting_team_score" => 60,
            ],
        ];

        $matches_length = count($matches);
        ?>

        <?php for ($i = 0; $i < $matches_length; $i++) { ?>
            <h2>
                <?php
                echo $matches[$i]["home_team"] . " - " . $matches[$i]["visiting_team"] .
                    " | " . $matches[$i]["home_team_score"] . "-" . $matches[$i]["visiting_team_score"]
                ?>
            </h2>
        <?php } ?>
    </main>
</body>
</html>