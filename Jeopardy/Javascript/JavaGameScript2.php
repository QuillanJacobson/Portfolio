<?php
/*GRAB VALUES FROM PHP DATABASE*/
$db = new PDO("mysql:host=localhost;port=3306;dbname=Jeopardy", "root", "Newdivide1");
$randy = $db->query("SELECT Question, Answer, Category FROM new ORDER BY RAND() LIMIT 1");

/*PROCESSS DATABASE RESPONSE*/
foreach($randy as $row) {
	$cat[] = $row['Category'];
	$quest[] = $row['Question'];
	$ans[] = $row['Answer'];
	$k = count($ans) - 1;
	$ans[$k] = str_replace(["'", '"', " ", "-", "*"],"",$ans[$k]);
	$ans[$k] = strtolower($ans[$k]);
}
?>
<script type="text/javascript">

/*CONVERT PHP VARIABLES TO JAVASCRIPT VARIABLES*/
var cat = <?php echo json_encode($cat) ; ?>;
var quest = <?php echo json_encode($quest) ; ?>;
var ans = <?php echo json_encode($ans) ; ?>;

/*GLOBAL VARIABLE*/
var thisans;

/*ANSWER QUESTION*/
$(function (){
    $('#WelcButton').on('click', function () {
	var que = quest[0];
	thisans = ans[0];
	var thiscat = cat[0];
	$('#Category').html(thiscat)
        $('#InnerWelcome').css('display', 'none');
        $('#invisi2').css('display', 'block');
	$('#Question').html(que);
	document.styleSheets[0].addRule('a:link', 'color: orange ');
	document.styleSheets[0].addRule('a:visited', 'color: chartreuse ');
	document.styleSheets[0].addRule('a:hover', 'color: red ');
	document.styleSheets[0].addRule('a:active', 'color: cyan ');
    })
})

/*SUBMIT ANSWER TO QUESTION*/
$(function () {
    $('#subbutton').on('click', function () {
	temp = $('#subans').val();
	temp = temp.replace(/['"-*]/g,'').replace(/\s/g, '');
	temp = temp.toLowerCase()
	if (temp == thisans) {
	    $('#yourans').html("Congratulations, your answer was correct")
	}
	else {
	    $('#yourans').html("Incorrect, you're answer was: " + temp)
	    $('#ourans').html("The correct answer was: " + thisans)
	}
	
	$('#invisi2').css('display', 'none')
        $('#invisi3').css('display', 'block')
    });
});

</script>