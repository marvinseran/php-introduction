<form method="get" action="">
    <label for="name">Name</label>
    <input type="text" id="name" name="name">
    <br>
    
    <label>Gender</label>
    <input value="Male" type="radio" id="genderMale" name="gender"><label for="genderMale">Male</label>
    <input value="Female" type="radio" id="genderFemale" name="gender"><label for="genderFemale">Female</label>
    <br>
    
    <label for="teachname">Teacher's Name</label>
    <input type="text" id="teachname" name="teachname">
    <br>
    
    <label>Reason</label>
    <input value="illness" type="radio" id="reasonIllness" name="reason"><label for="reasonIllness">Illness</label>
    <input value="death" type="radio" id="reasonDeath" name="reason"><label for="reasonDeath">Death of the pet (or a family member)</label>
    <input value="activity" type="radio" id="reasonActivity" name="reason"><label for="reasonActivity">Significant extra-curricular activity</label>
    <input value="videogame" type="radio" id="reasonVideogame" name="reason"><label for="reasonVideogame">Playing too much video games</label>
    <br>
    
    <input type="submit" name="submit" value="Submit">
</form>

<?php 
    date_default_timezone_set('Europe/Brussels'); 
    $now = date("d.m.y"); 
    echo "<br><br>$now<br>";

    if (isset($_GET['gender'], $_GET['name'], $_GET['teachname'], $_GET['reason'])) {
        $gender = $_GET['gender'];
        $name = $_GET['name'];
        $teachname = $_GET['teachname'];
        $reason = $_GET['reason'];

        echo "Monsieur le principal,";

        $is_gender = ($gender == "Male") ? 
            "Mon fils $name, élève en classe de 4ième du professeur $teachname dans votre collège, ne pourra pas assister au cours aujourd’hui." : 
            "Ma fille $name, élève en classe de 4ième du professeur $teachname dans votre collège, ne pourra pas assister au cours aujourd’hui.";
        echo $is_gender;

        $is_reason = "";
        switch ($reason) {
            case "illness":
                $is_reason = "Son état de santé justifie cette absence. Le médecin de famille lui a préconisé une période de repos.";
                break;
            case "death":
                $is_reason = "Son hamster a malheureusement quitté notre monde cette nuit.";
                break;
            case "activity":
                $is_reason = "Nous devons nous rendre dans le sud de la France pour visiter un proche malade.";
                break;
            case "videogame":
                $is_reason = "La fatigue d'une nuit devant les jeux vidéos empêche sa venue aujourd'hui.";
                break;
            default:
                $is_reason = "Veuillez sélectionner une raison.";
        }
        echo $is_reason;

        echo "Notre enfant devrait reprendre la classe dans une semaine. <br>
        Pour tout complément d’informations n’hésitez surtout pas à nous contacter.<br>
        <br>
        Nos plus sincères salutations<br>
        Signature des parents  <br>";
    }
?>
