<?php
	
	include 'quiz.php';

	$current_score = $_GET["current_score"];

	if ($_GET["answer"] == $answers[3]) {
		$current_score += 1;
	}	
	$myfile = fopen("newfile.txt", "a+") or die("Unable to open file!");
    fwrite($myfile, $txt);
    fwrite($myfile, $current_score);
    fclose($myfile);
	

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
			echo "Great Job!"
		?>
	</div>


</body>
</html>
