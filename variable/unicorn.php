<form method="get" action="">
    <label for="gender">
        <input value="Human" type="radio" name="gender">Human
        <input value="Cat" type="radio" name="gender">Cat
        <input value="Unicorn" type="radio" name="gender">Unicorn
    </label>
    <input type="submit" name="submit" value="Submit">
</form>

<?php 
    if (isset($_GET['gender'])) {
        $gender = $_GET['gender'];
    }
    $is_gender = ($gender == "Human") ? '<iframe src="https://giphy.com/embed/kjlJDEzuDu0qQ" width="480" height="320" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/kjlJDEzuDu0qQ">via GIPHY</a></p' : (( $gender == "Cat" ) ? '<iframe src="https://giphy.com/embed/mlvseq9yvZhba" width="480" height="480" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/funny-cat-mlvseq9yvZhba">via GIPHY</a></p>' : (($gender == "Unicorn") ? '<div style="width:480px"><iframe allow="fullscreen" frameBorder="0" height="270" src="https://giphy.com/embed/yLWBj6LOeL5gbsP2Vr/video" width="480"></iframe></div>' : "select gender"));
    echo $is_gender
?>
