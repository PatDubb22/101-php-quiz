<?php
	session_start();
	include 'quiz.php';
	
	$current_score = $_GET["current_score"];

	if ($_GET["answer"] == $answers[0]) {
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
	
<div class="question">
	<?php echo $quiz[0]; ?>
</div>

	<div class="answer">
	 <form action="question2.php">
		<input type="radio" name="answer" value="A">A<br>
		<hr>
		<input type="radio" name="answer" value="B">B<br>
		<hr>
		<input type="radio" name="answer" value="C">C<br>
		<hr>
		<input type="radio" name="answer" value="D">D<br>
		<hr>
		<input type="submit" value="Next Question">
	 </form>
	</div>

</body>
</html>