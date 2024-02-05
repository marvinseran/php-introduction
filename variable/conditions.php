<?php $room_is_filthy = true;

if($room_is_filthy = true){
	echo "Yuk, Room is dirty : let's clean it up !";
	echo "<br>Room is now clean!<br>";
	$room_is_filthy = false;
} else {
	echo "<br>Nothing to do, room is neat.";
}
?>

<?php $possible_states = array(
    0 => 'dirty',
    1 => 'messed up',
    2 => 'clean');

$room_filthiness = $possible_states[1]; 

if( $room_filthiness == $possible_states[0]){
	echo "Yuk, Room is Disgusting! Let's clean it up !";
    $room_filthiness = $possible_states[2]; 
}else if( $room_filthiness == $possible_states[1]){
	echo "Yuk, Room is dirty : let's clean it up !";
    $room_filthiness = $possible_states[2]; 

} else {
	echo "<br>Nothing to do, room is neat.";
}?>
<br>

<?php
date_default_timezone_set('Europe/Brussels'); 
$now = date("H:i:s"); 
if($now >= "05:00:00" AND $now <= "09:00:00"){
	echo "Good morning !";}
if($now >= "09:01:00" AND $now <= "12:00:00"){ 
    echo "Good day !";}
if ($now >= "12:01:00" AND $now <= "16:00:00") {
    echo "Good afternoon !";}
if ($now >= "16:01:00" AND $now <= "21:00:00"){
    echo "Good evening !";}
if ($now >= "21:01:00" AND $now <= "04:59:00"){ 
    echo "Good night !";}
?>


<?php 
    if (isset($_GET['age'])){
        $age = $_GET['age'];
    }
    if ($age < 12){
        echo "Hello kiddo!";}
    if ($age >= 12 AND $age < 18){
        echo "Hello Teenager !";}
    if ($age >= 18 AND $age < 115){
        echo "Hello Adult !";}
    if ($age >= 115){ 
        echo "Wow! Still alive ? Are you a robot, like me ? Can I hug you ?";}
?>

<?php 
    if (isset($_GET['gender']) && isset($_GET['age']) && isset($_GET['language'])) {
        $gender = $_GET['gender'];
        $age = $_GET['age'];
        $language = $_GET['language'];
    }
        if ($gender == 'Male' && $age >= 18 && $language == 'yes') {
            echo "Hello Mister";
        } elseif ($gender == 'Male' && $age < 18 && $age >= 12 && $language == 'yes') {
            echo "Hello Mister Teenager";
        } elseif ($gender == 'Female' && $age >= 18 && $language == 'yes') {
            echo "Hello Miss";
        } elseif ($gender == 'Female' && $age < 18 && $age >= 12 && $language == 'yes') {
            echo "Hello Miss Teenager";
        }
        elseif ($gender == 'Male' && $age >= 18 && $language == 'no') {
            echo "Aloha Mister";
        }
        elseif ($gender == 'Male' && $age < 18 && $age >= 12 && $language == 'no') {
            echo "Aloha Mister Teenager";
        } 
         elseif ($gender == 'Female' && $age >= 18 && $language == 'no') {
            echo "Aloha Miss";
        } elseif ($gender == 'Female' && $age < 18 && $age >= 12 && $language == 'no') {
            echo "Aloha Miss Teenager";
        }
    
?>

<form method="get" action="">
    <label for="age">Please type your age</label>
    <input type="number" name="age">
    <input type="submit" name="submit" value="Submit">
    <label for="gender">
        <input value="Male" type="radio" name="gender">Male
        <input value="Female" type="radio" name="gender">Female
    </label>
    <br>
    <label for="language">Do you speak english ?
        <input value="yes" type="radio" name="language"> Yes
        <input value="no" type="radio" name="language"> No
    </label>
</form>

SOCCER TEAM

<form method="get" action="">
    <label for="age">Please type your age</label>
    <input type="number" name="age">
    <input type="submit" name="submit" value="Submit">
    <label for="gender">
        <input value="Male" type="radio" name="gender">Male
        <input value="Female" type="radio" name="gender">Female
    </label>
</form>

<?php 
    if (isset($_GET['gender']) && isset($_GET['age'])) {
        $gender = $_GET['gender'];
        $age = $_GET['age'];
    }
        if ($gender == 'Male' OR ($gender == 'Female' && $age <= 21 OR $age >= 40)) {
            echo "Sorry you don't fit the criteria";

        } elseif ($gender == 'Female' && $age < 40 && $age > 21) {
            echo "welcome to the team !";
        }
?>


SOCCER TEAM

<form method="get" action="">
    <label for="age">Please type your age</label>
    <input type="number" name="age">
    <input type="submit" name="submit" value="Submit">
    <label for="gender">
        <input value="Male" type="radio" name="gender">Male
        <input value="Female" type="radio" name="gender">Female
    </label>
</form>

<?php 
    if (isset($_GET['gender']) && isset($_GET['age'])) {
        $gender = $_GET['gender'];
        $age = $_GET['age'];

    }
        if ($gender == 'Male' OR ($gender == 'Female' && $age <= 21 OR $age >= 40)) {
            $result = false;

        } if ($gender == 'Female' && $age < 40 && $age > 21) {
            $result = true;
        }
        if ($result == true){
            echo "welcome to the team !";
        }
        if ($result == false){
            echo "Sorry you don't fit the criteria";
        }
        
?>

<form method="get" action="">
    <label for="age">Please type the result</label>
    <input type="number" name="note">
    <input type="submit" name="submit" value="Submit">
</form>

<?php 
    if (isset($_GET['note'])) {
        $note = $_GET['note'];
    }
    if ($note <= 4) {
        echo "This work is really bad. What a dumb kid!";}
    else if ($note >= 5 && $note <= 9) {
        echo "This is not sufficient. More studying is required.";}
    else if ($note == 10){ 
        echo "barely enough!";}
    else if ($note >= 11 && $note <= 14){
        echo "Not bad!";}
    else if ($note >= 15 && $note <= 18) {
        echo "Bravo, bravissimo!";}
    else if ($note == 19 OR $note ==20){
        echo "Too good to be true : confront the cheater!";}
?>