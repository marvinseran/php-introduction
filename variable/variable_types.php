<?php
$name = 'Marvin';
$years = 26;
$eyes_colors = 'brown';
$family = array(
  0 => 'Eric', 
  1 => 'Laurence', 
  2 => 'Loic', 
  3 => 'Marvin');
?>
<html>
  <head><title>Hi!</title></head>
  <body>
    	<h1>Hi! My name is <?php echo $name ?>!</h1>
        <p> I am <?php echo $years; ?> years old.</p>
        <p> My eyes are <?php echo $eyes_colors?>.</p>
        <p> The first person in my family is <?php echo $family[0]?>.</p>
  </body>
</html>