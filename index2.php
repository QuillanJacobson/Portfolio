<!DOCTYPE html>
<?php error_reporting(E_ALL); ini_set('display_errors', '1'); ?>
<html>

<script type="text/javascript"> // <![CDATA[
    /*REDIRECT MOBILE DEVICES*/
    if ((navigator.userAgent.indexOf('iPhone') != -1) || (navigator.userAgent.indexOf('iPod') != -1) || (navigator.userAgent.indexOf('Android') != -1) || (navigator.userAgent.indexOf('Windows Phone') != -1)) {
        document.location = "HTML/iPhonePage.php";
    } 
</script

	<head>
		<title>Welcome</title>
		<link rel="stylesheet" type="text/css" href="../CSS/Welcome.css">
		<?php 
     		include 'PHP/Welcome.php'; 
		?>
	</head>

	<body>
	<p id="C1" hidden><?php echo $rand[0]; ?> </p>
	<p id="C2" hidden><?php echo $rand[1]; ?> </p>
	<p id="C3" hidden><?php echo $rand[2]; ?> </p>
	<p id="C4" hidden><?php echo $rand[3]; ?> </p>
	<p id="C5" hidden><?php echo $rand[4]; ?> </p>
	<p id="C6" hidden><?php echo $rand[5]; ?> </p>
		<div id="InnerWelcome">
			<div id="WelcomeCard">
	        		<h1 id="WelcHead">Welcome to Jeopardy</h1>
	        		<button id="WelcButton">Random Game</button><br><br>
				<!-- will probably become a select instead of a hover dropdown -->
				<input type="text" id="inny" list="ca" placeholder="press enter to submit"/>
				
	        		<datalist class="DropBtn" id="ca">
				<select id="sel">
					<?php 
					/*FILL DATALIST*/
					for($i=0; $i<count($categories); $i++){
						echo "<option id='hello' class='DropCont'>".$categories[$i]."</option>";
					} ?>
				</select>
				</datalist>
			</div>
		</div>
	<div id="Categories">
		<p id="Printed">
			Choose 6 categories to begin: <br>
		</p>
	</div>
	</body>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="/Javascript/WelcomeScript.js"></script>