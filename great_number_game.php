<?php session_start();
if (!isset($_SESSION['num'])){
$_SESSION['num']=rand(1,100);
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>The Great Number Game</title>
	<link rel="stylesheet" href="great_number_game.css">
	
</head>
<body>
	<div class="container">
	<h1>Welcome to the Great Number Game!</h1>
	<h2>I am thinking of a number between 1 and 100<br> Take a guess!</h2>

		<form action="great_number_game_process.php" method="post">
            <input type="number" name='guess'>
            <input type="submit" value='Submit'>
        </form>

        <?php 
            if ( isset($_SESSION['compare'] ) ) {
               echo $_SESSION['compare']; 
            }
        ?>
	 </div>

</body>
 <html >