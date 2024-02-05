<?php
$names = array("marvin", "thomas", "nico", "noé");

function capitalize($names){
	foreach ($names as $name){
		echo ucfirst($name). "<br>";
    }
}

function sume($a, $b){
	return $a + $b;
}
function acronym($s) {
    $result = ''; 
    $length = strlen($s); 
    
    if ($length > 0 && $s[0] != ' ') {
        $result .= strtoupper($s[0]); 
    }
    
    for ($a = 1; $a < $length; $a++) {
        if ($s[$a] == ' ' && $a + 1 < $length && $s[$a + 1] != ' ') {
            $result .= strtoupper($s[$a + 1]); 
            $a++; 
        }
    }
    
    echo $result; 
}
function aechanger($d){
	$result = ''; 
    $length = strlen($d); 
	
	for ($a = 0; $a < $length; $a++) {
    	if ($d[$a] == 'a' && $d[$a + 1] = 'e') {
            $result .= 'æ'; 
            $a++; 
        }
		else {
            $result .= $d[$a]; 
        }
    }
    
    echo $result; 
	
}
function aechangerback($d) {
    $result = ''; 
    $length = mb_strlen($d, 'UTF-8');
    
    for ($a = 0; $a < $length; $a++) {
        $char = mb_substr($d, $a, 1, 'UTF-8');
        if ($char == 'æ') {
            $result .= 'ae';
        } else {
            $result .= $char;
        }
    }
    
    echo $result;
}
capitalize($names);
date_default_timezone_set('UTC');
echo date('D M j G:i:s Y');

echo "<form method='get'>";
    echo "<input type='number' id='numberA'name='numberA'>";
	echo "<input type='number' id='numberB' name='numberB'>";
    echo "<input type='submit' value='Submit'>";
	
echo "</form>";

if (isset($_GET['numberA']) && isset($_GET['numberB'])) {
    $numberA = $_GET['numberA'];
    $numberB = $_GET['numberB'];

    if (is_numeric($numberA) && is_numeric($numberB)) {
        $sum = sume($numberA, $numberB);
        echo "The sum is: $sum<br>";
    } else {
        echo "Error: Please enter valid numbers.";
    }
}


echo "<form method='get'>";
    echo "<input type='text' id='string'name='string'>";
    echo "<input type='submit' value='Submit'>";
echo "</form>";

if (isset($_GET['string'])) {
    $string = $_GET['string'];
    acronym($string);
}


echo "<form method='get'>";
    echo "<input type='text' id='stringae'name='stringae'>";
    echo "<input type='submit' value='Submit'>";
echo "</form>";

if (isset($_GET['stringae'])) {
    $string = $_GET['stringae'];
    aechanger($string);
}
echo "<form method='get'>";
    echo "<input type='text' id='stringaeback'name='stringaeback'>";
    echo "<input type='submit' value='Submit'>";
echo "</form>";

if (isset($_GET['stringaeback'])) {
    $string = $_GET['stringaeback'];
    aechangerback($string);
}


function feedback($message, $cssClass = "info") {

    $messageType = '';
    switch ($cssClass) {
        case 'error':
            $messageType = 'Error';
            break;
        case 'warning':
            $messageType = 'Warning';
            break;
        case 'info':
        default:
            $messageType = 'Info';
            break;
    }
    

    return "<div class=\"$cssClass\">$messageType: $message.</div>";
}


echo feedback("Email sent successfully"); 
echo feedback("Incorrect email address", "error"); 


?>

