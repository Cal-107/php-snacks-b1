<!-- Snack 6
Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->
<?php

    $db = [

        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];

    $dbKeys = array_keys($db);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section style="display: flex; justify-content: space-evenly">
        <div style="background-color: gray; width:500px; height:400px; display: flex; flex-direction: column;" class="teachers">
        <h3 style="text-align: center;" >Teachers</h3>
        <?php
            for ($i=0; $i < count($db[$dbKeys[0]]) ; $i++) { 
                echo $db[$dbKeys[0]] [$i] ['name'] . ' ';
                echo $db[$dbKeys[0]] [$i] ['lastname'] . '<br>';
            }
        ?>
        </div>
        <div style="background-color: green; width:500px; height:400px; display: flex; flex-direction: column;" class="pm">
        <h3 style="text-align: center;">PM</h3>
        <?php
            for ($i=0; $i < count($db[$dbKeys[1]]) ; $i++) { 
                echo $db[$dbKeys[1]] [$i] ['name'] . ' ';
                echo $db[$dbKeys[1]] [$i] ['lastname'] . '<br>';
            }
        ?>
        </div>
    </section>
</body>
</html>