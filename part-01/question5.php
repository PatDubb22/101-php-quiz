<?php
	
	include 'quiz.php';
	
	$txt = $_GET["name"]; 
	$current_score = $_GET["current_score"];

	if ($_GET["answer"] == $answers[3]) {
		$current_score += 1;
	}	

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css" />
	<title></title>
</head>
	<style>
        body{
            background-color:#79CFCE;
            color: white;
        }
    </style>
<body>

	<div class="score">
		<?php 
			echo "Your current score is " . $current_score;
		?>
	</div>

	<div class="question">
		<?php echo $quiz[4]; ?>
	</div>

	<div class="answer">
			<form action="finalresult.php">
			<input type="radio" name="answer" value="A">A<br>
			<hr>
			<input type="radio" name="answer" value="B">B<br>
			<hr>
			<input type="radio" name="answer" value="C">C<br>
			<hr>
			<input type="radio" name="answer" value="D">D<br>
			<hr>
			
			<input class="nbutton" type="submit" value="Next Question">
			
	    	<input type="hidden" name="current_score" value="<?php echo $current_score ; ?>">
	    	<input type="hidden" name="name" value="<?php echo $txt; ?>">
		</form>
	</div>


</body>
</html>
