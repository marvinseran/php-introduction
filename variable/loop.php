<?php $pronouns = array ('I', 'You', 'He/She','We', 'You', 'They');
foreach ($pronouns as $pronoun){
    if ($pronoun == "He/She"){
	echo ucfirst($pronoun) . " codes<br>";
    }
    else {
        echo ucfirst($pronoun) . " code<br>";
    }
}
?>


<?php 
$amount = 0;
while ($amount <=100){
    echo $amount . "<br>";
    $amount ++;
}
?>

<?php 

for ($amount = 0; $amount <=100; $amount ++)
{
    echo $amount . "<br>";
}
?>

<?php
    $startup_members = array("Thomas", "Nico", "Mathias", "Husseyin", "Hugur", "Noé", "Corentin");
    foreach ($startup_members as $startup_member){
        echo $startup_member . "<br>";
    }
?>

<?php
    $countries = array(
        "BE" => "Belgique", 
        "FR" => "France", "GE" => "Allemagne",
        "UK" => "Royaume-Uni",
        "RU" => "Russie",
        "ES" => "Espagne", 
        "IT" => "Italie", 
        "NE" => "Pays-Bas", 
        "IR" => "Irlande", 
        "LU" => "Luxembourg", 
        "AU" => "Autriche");
    echo "<form>";
    echo "<select name='country'>";

    foreach ($countries as $code => $name){
        echo "<option value='" . $code . "'>" . $name . "</option>";
    }

    echo "</select>";
    echo "<input type='submit' value='Submit'>";
    echo "</form>";
?>