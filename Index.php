<!DOCTYPE html>
<html>

<!-- CPTR 220, Web App Developement, Fall Quarter, Quillan Jacobson, Quillan.Jacobson@wallawalla.edu -->

<!--Began at 12pm Saturday, took approximately 17 hours, I estimated 18.  Worked on it sporadically Saturday, Sunday, Monday, and Tuesday-->
<!--my apologies if formatting is off.  using notepad gets a little sketchy with that but on my computer its well formatted -->
<!--link everything right off the bat -->
<!--All html pages validated -->
	
<!-- link javascript and css-->

	<?php
	include("JavaScript.php");
	?>
	<link href="Index.css" type="text/css" rel="stylesheet" />

	<head>
		<title>Chapter 9 Coding Assignment</title>
	</head>
	<body>
		<h1 id="Welcome">Welcome to Wheel of Fortune</h1>
		<h2 id="CoolCat">Category</h2>

<!-- Linked most html in from other files in order to clean things up-->
	
	<div id="GameBoard">
		<?php include("GameBoard.html"); ?>
	</div>

	<div id="ChooseLetters">
		<?php include("GameButtons.html"); ?>
	</div>

<!-- form that will tell user all of the letters they have chosen-->

	<div id="UsedLetters">
	<p>
		Letters used so far
	</p>
		<form action = "">
		<input type="text" name="ChosenLetters" id="ChosenOnes" value ="" disabled>
		</form>
	</div>

<!-- series of options user can choose once game is begun-->

	<div id="Spin">
		<button disabled id="SpinWheel" onclick="SpinTheWheel();">Spin the Wheel</button><br>
		<button disabled id="Vowel" onclick="BuyVowel();">Buy a Vowel</button><br>
		<button disabled id="Solve" onclick="SolvePuzzleDeal();">Try and Solve</button><br><br><br>
		<button disabled id="Reset" onclick="ResetGame();">Reset Game and Choose New Category</button><br><br>
		<input type="text" name="Ans" id="Answerin" value ="" disabled>
		<button disabled id="EndItAll" onclick="SubmitSolve();">Submit Guess</button>
	</div>

<!-- shows what's in the bank-->

	<div id="Monies">
	<p>
		Money earned
	</p>
		<form action = "">
		<input type="text" name="YourMoney" id="IGotsDaDough" value ="" disabled>
		</form>
	</div>
	<div id="Category">
		<?php include("SideButtons.html"); ?>
	</div>

	<div id="ParentSlide">
		<p id="SlideyTexter">
			Board Text Size
		</p>
		<input type="range" min="8" max="42" id="SlideySlider" />
	</div>
	<button id="Implement" onclick="Submitter();">Change Size</button>

<!-- shows result of spinning the wheel-->

	<p id="SpinResult">
		<script type="text/javascript">
		document.write("Your Spin Value: " + OnTheLine);
		</script>
	</p>

<!-- in case a user doesn't have javascript, i haven formatted it in css yet-->
	<noscript>
	<p>
	leave, leave now and never return
	</p>
	</noscript>

	</body>
</html>	