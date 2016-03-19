<?php 
session_start();

function compare($guess, $number){

	if($guess>$number){
		return "<div class='compare'>Too high!</div>";
	}
	else if($guess==$number){
		return "<div class='correct'>That's right! Play again!</div>";
	}
	else if($guess<$number){
		return "<div class='compare'>That's too low!</div>";
	}
};

	if (isset($_POST['guess']) ){
		$_SESSION['compare']=compare($_POST['guess'], $_SESSION['num']);
	}
	header('Location: great_number_game.php');
 ?>