<?php
	
	include 'quiz.php';
	
	$txt = $_GET["name"] . "\n";
	
	$current_score = $_GET["text"];

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
		<input type="radio" name="answer" value="B">B<br>
		<input type="radio" name="answer" value="C">C<br>
		<input type="radio" name="answer" value="D">D<br>
	
		<input class="nbutton" type="submit" value="Next Question">
	 </form>
	</div>

</body>
</html>