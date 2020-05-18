<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> php-snacks-b1 C. Paiano </title>
</head>
<body>
    <!-- 
    PHP Snack 1:
    Creiamo un array ‘matches’ contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa
    del calendario. Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di
    casa e punti fatti dalla squadra ospite.
    Stampiamo a schermo tutte le partite con questo schema:Olimpia Milano - Cantù | 55-60
    -->

    <?php 
        $matches = [
            [
                'home' => 'Boston Celtics',
                'away' => 'Atlanta Hawks',
                'home_points' => rand(1, 250),
                'away_points' => rand(1, 250),
            ],

            [
                'home' => 'Detroit Pistons',
                'away' => 'Indiana Peacers',
                'home_points' => rand(1, 250),
                'away_points' => rand(1, 250),
            ],

            [
                'home' => 'Utah Jazz',
                'away' => 'Totonto Raptors',
                'home_points' => rand(1, 250),
                'away_points' => rand(1, 250),
            ]
            
        ];
 
    ?>
    <h2>PHP snack 1</h2>
    <h3>Rsultati giornata #1</h3>

    <ul>
      <?php for ( $i = 0; $i < count($matches); $i++ ) { ?>
         <li>
            <?php echo $matches[$i]['home'] ?> - <?php echo $matches[$i]['away'] ?> |
            <?php echo $matches[$i]['home_points'] ?> - <?php echo $matches[$i]['away_points'] ?> 
         </li>
      <?php } ?>
   </ul>
    
    <!--
    PHP Snack 2:
    Passare come parametri GET name, mail e age e verificare (cercando i metodi che nonconosciamo nella documentazione) che:
    1. name sia più lungo di 3 caratteri,
    2. che mail contenga un punto e una chiocciola
    3. e che age sia un numero.Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
    -->
    <h2>PHP snack 2</h2>

    <?php
        $data = $_GET;

        if ( empty($data['name']) || empty($data['mail'])|| empty($data['age']) ) {
            echo 'Non tutti i parametri sono stati passati';
        }
        // name
        elseif ( strlen($data['name']) <= 3 ) {
            echo 'Accesso Negato';
        }
        // mail
        elseif ( strpos($data['mail'], '@') === false ||  strpos($data['mail'], '.') === false ) {
            echo 'Accesso Negato';
        }
        // age
        elseif ( ! is_numeric($data['age']) ) {
            echo 'Accesso Negato';
        }
        else {
            echo 'Accesso Riuscito';
        }

    ?>

</body>
</html>
