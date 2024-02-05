
<?php
$family = array("Laurence", "Eric", "Loic", "Marvin");

print_r($family);

$film = array("Forest Gump", "Star Wars", "Lotr", "Tuches");
echo $film[0];


$me = array(
    'firstname' => 'Karen',
    'lastname'=> 'Philibert',
    'age' => '34',
    'fseason' => 'winter',
    'lovfoot'=> false
    );

    echo '<pre>';
    print_r($me);
    echo '</pre>';
    
    echo "Prénom: " . $me['firstname'] . "<br>";
    echo "Nom: " . $me['lastname'] . "<br>";
    echo "Âge: " . $me['age'] . "<br>";
    echo "Saison préférée: " . $me['fseason'] . "<br>";
    echo "Aime le football: " . ($me['lovfoot'] ? 'Oui' : 'Non') . "<br>";
    ?>