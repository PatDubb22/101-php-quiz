<?php
	session_start();
	include 'quiz.php';

	$current_score = $_GET["current_score"];

	if ($_GET["answer"] == $answers[3]) {
		$current_score += 1;
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
	<style>
        body{
            background-color:#79CFCE;
            color: white;
        }
    </style>
<body>

	<div class="final-result">
		<?php 
			echo "You've finished the quiz! Your final score is " . $current_score . " out of 4.";
		
		?>
	</div>


</body>
</html>
