<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partite</title>
</head>
<body>
<?php
        $arrPartite = [
            [
                'casa' => [
                    'nome' => 'Nereto',
                    'punteggio' => 78,
                ],
                'ospiti' => [
                    'nome' => 'Corropoli',
                    'punteggio' => 54,
                ],
            ],
            [
                'casa' => [
                    'nome' => 'Alba Adriatica',
                    'punteggio' => 57,
                ],
                'ospiti' => [
                    'nome' => 'Tortoreto',
                    'punteggio' => 43,
                ],
            ],
            [
                'casa' => [
                    'nome' => 'Sant\'Omero',
                    'punteggio' => 76,
                ],
                'ospiti' => [
                    'nome' => 'Garrufo',
                    'punteggio' => 23,
                ],
            ],
            [
                'casa' => [
                    'nome' => 'Ascoli Piceno',
                    'punteggio' => 87,
                ],
                'ospiti' => [
                    'nome' => 'Sant\'Egidio alla Vibrata',
                    'punteggio' => 46,
                ],
            ],
        ];
    ?>

    <h1>Partite</h1>
    <ul>
        <?php 
            for ($i = 0; $i < count($arrPartite); $i++) {
                $game = $arrPartite[$i];
                $casa = $game['casa'];
                $nomeCasa = ucfirst($casa['nome']);
                $punteggioCasa = $casa['punteggio'];
                $ospiti = $game['ospiti'];
                $nomeOspiti = ucfirst($ospiti['nome']);
                $punteggioOspiti = $ospiti['punteggio'];
                echo "<li>$nomeCasa - $nomeOspiti | $punteggioCasa - $punteggioOspiti</li>";
            }
        ?>
    </ul>
</body>
</html>