<?php
/******************************************************************
database setup
******************************************************************/

/*GRAB POSTED CONTENT AND PREPARE IT FOR DATABASE INPUT*/
$temp = $_REQUEST['a0'];
$cat[] = str_replace("&apos","''",$temp);
$temp = $_REQUEST['a1'];
$cat[] = str_replace("&apos","''",$temp);
$temp = $_REQUEST['a2'];
$cat[] = str_replace("&apos","''",$temp);
$temp = $_REQUEST['a3'];
$cat[] = str_replace("&apos","''",$temp);
$temp = $_REQUEST['a4'];
$cat[] = str_replace("&apos","''",$temp);
$temp = $_REQUEST['a5'];
$cat[] = str_replace("&apos","''",$temp);

/*MAKE DATABASE CALLS TO GRAB QUESTIONS AND CATEGORIES*/
$db = new PDO("mysql:host=localhost;port=3306;dbname=Jeopardy", "root", "Newdivide1");
$randy = $db->query("SELECT DISTINCT(Question), Answer FROM new WHERE Category = '".$cat[0]."' ORDER BY RAND() LIMIT 5 ");
$randy2 = $db->query("SELECT DISTINCT(Question), Answer FROM new WHERE Category = '".$cat[1]."' ORDER BY RAND() LIMIT 5 ");
$randy3 = $db->query("SELECT DISTINCT(Question), Answer FROM new WHERE Category = '".$cat[2]."' ORDER BY RAND() LIMIT 5 ");
$randy4 = $db->query("SELECT DISTINCT(Question), Answer FROM new WHERE Category = '".$cat[3]."' ORDER BY RAND() LIMIT 5 ");
$randy5 = $db->query("SELECT DISTINCT(Question), Answer FROM new WHERE Category = '".$cat[4]."' ORDER BY RAND() LIMIT 5 ");
$randy6 = $db->query("SELECT DISTINCT(Question), Answer FROM new WHERE Category = '".$cat[5]."' ORDER BY RAND() LIMIT 5 ");

/*PROCESS DATABASE CALLS, PREPARE ANSWER FORMAT*/
foreach($randy as $row) {
	$rand[] = $row['Question'];
	$ans[] = $row['Answer'];
	$k = count($ans) - 1;
	$ans[$k] = str_replace(["'", '"', " ", "-", "*"],"",$ans[$k]);
	$ans[$k] = strtolower($ans[$k]);
}
foreach($randy2 as $row) {
	$rand2[] = $row['Question'];
	$ans2[] = $row['Answer'];
	$k = count($ans2) - 1;
	$ans2[$k] = str_replace(["'", '"', " ", "-", "*"],"",$ans2[$k]);
	$ans2[$k] = strtolower($ans2[$k]);
}
foreach($randy3 as $row) {
	$rand3[] = $row['Question'];
	$ans3[] = $row['Answer'];
	$k = count($ans3) - 1;
	$ans3[$k] = str_replace(["'", '"', " ", "-", "*"],"",$ans3[$k]);
	$ans3[$k] = strtolower($ans3[$k]);
}
foreach($randy4 as $row) {
	$rand4[] = $row['Question'];
	$ans4[] = $row['Answer'];
	$k = count($ans4) - 1;
	$ans4[$k] = str_replace(["'", '"', " ", "-", "*"],"",$ans4[$k]);
	$ans4[$k] = strtolower($ans4[$k]);
}
foreach($randy5 as $row) {
	$rand5[] = $row['Question'];
	$ans5[] = $row['Answer'];
	$k = count($ans5) - 1;
	$ans5[$k] = str_replace(["'", '"', " ", "-", "*"],"",$ans5[$k]);
	$ans5[$k] = strtolower($ans5[$k]);	
}
foreach($randy6 as $row) {
	$rand6[] = $row['Question'];
	$ans6[] = $row['Answer'];
	$k = count($ans6) - 1;
	$ans6[$k] = str_replace(["'", '"', " ", "-", "*"],"",$ans6[$k]);
	$ans6[$k] = strtolower($ans6[$k]);
}

/*RETURN CATEGORY FORMAT TO NORMAL*/
$cat[0] = str_replace("''","'",$cat[0]);
$cat[1] = str_replace("''","'",$cat[1]);
$cat[2] = str_replace("''","'",$cat[2]);
$cat[3] = str_replace("''","'",$cat[3]);
$cat[4] = str_replace("''","'",$cat[4]);
$cat[5] = str_replace("''","'",$cat[5]);

/*AUTO COMPLETE FUNCTION*/
/*IS CALLED AS A GET AJAX GET REQUEST*/
if(isset($_REQUEST['q'])){
	$q = $_REQUEST["q"];
	$hint = "";

	if($q !== "") {
		$q = str_replace("'","''",$q);
		$autof = $db->query("SELECT DISTINCT(Answer) FROM new WHERE Answer LIKE '%".$q."%' ORDER BY RAND() LIMIT 3 ");
		foreach($autof as $row) {
			$hint[] = $row['Answer'];
		}
	}
	$num = count($hint);
	if(count($hint)==0){
		echo "no suggestion";
	}
	else if($num==1){
		$thisere = 1;
		echo "(" . $thisere . ")" . $hint[0];
	}
	else{
		$thisere = 1;
		echo "(" . $thisere . ")" . $hint[0];
		for($i=1;$i<$num;$i++){
			$thisere = $i+1;
			echo ", (" . $thisere . ")" . $hint[$i];
		}
	}
}
?>
<script type="text/javascript">

/*CONVERT PHP VARIABLES TO JAVASCRIPT VARIABLES*/
var cat = <?php echo json_encode($cat) ; ?>;
var quest1 = <?php echo json_encode($rand); ?>;
var quest2 = <?php echo json_encode($rand2); ?>;
var quest3 = <?php echo json_encode($rand3); ?>;
var quest4 = <?php echo json_encode($rand4); ?>;
var quest5 = <?php echo json_encode($rand5); ?>;
var quest6 = <?php echo json_encode($rand6); ?>;
var answ1 = <?php echo json_encode($ans); ?>;
var answ2 = <?php echo json_encode($ans2); ?>;
var answ3 = <?php echo json_encode($ans3); ?>;
var answ4 = <?php echo json_encode($ans4); ?>;
var answ5 = <?php echo json_encode($ans5); ?>;
var answ6 = <?php echo json_encode($ans6); ?>;

/*CREATE QUESTION AND ANSWER ARRAYS*/
var questions = quest1.concat(quest2).concat(quest3).concat(quest4).concat(quest5).concat(quest6);
var answers = answ1.concat(answ2).concat(answ3).concat(answ4).concat(answ5).concat(answ6);

/********************************************************
********************************************************/

/* GLOBAL VARIABLES */
var val2;  //submit answer function and skip answer function
var thisans; //value clicked function and submit answer function
var count = -1;

/* INCLUDE FUNCTION FOR EXPLORER */
function includes(container, value) {
	var returnValue = false;
	var pos = container.indexOf(value);
	if (pos >= 0) {
		returnValue = true;
	}
	return returnValue;
}

/*PROVIDE A HINT */
/*AJAX PHP SERVER, AKA THIS PAGE*/
$('#subans').keyup(function(e){
    var halfans = $(this).val()
    if(halfans.length == 0) {
	$('#txtHint').html("")
    }
    else {
    	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
	    if(this.readyState == 4 && this.status == 200){
		document.getElementById("txtHint").innerHTML = this.responseText;
	    }
	}
	xmlhttp.open("GET",'../Javascript/JavaGameScript.php?q=' + halfans, true)
	xmlhttp.send();
    }
})

/* BUZZ IN BUTTON */
$(function () {
    $('#buzzer').on('click', function () {
        $('#buzzer').attr('disabled', 'disabled');
	$('#changer').css('display', 'none');
	$('#subans').css("display", 'inline-block');
	$('#subbutton').css("display", 'inline-block');
        $('#Hint').css('display', 'block')
    });
});

/* SUBMIT ANSWER FUNCTION */
$(function () {
    $('#subbutton').on('click', function () {
	count = -1
        $('#buzzer').attr('disabled', 'disabled');
	$('#changer').css('display', 'none');
	$('#subans').css("display", 'inline-block');
	$('#subbutton').css("display", 'inline-block');
	temp = $('#subans').val();
	temp = temp.replace(/['"-*]/g,'').replace(/\s/g, '');
	temp = temp.toLowerCase()
	if (temp == thisans) {
	    var val1 = $('#PlayerCash').val()
	    var fin = Number(val1)+Number(val2)
	    $('#PlayerCash').val(fin)
	}
	else {
	    var val1 = $('#ComputerCash').val()
	    var fin = Number(val1)+Number(val2)
	    $('#ComputerCash').val(fin)
	}
	$('#QAns').html("Answer: "+thisans)
	$('#invisi2').css('display', 'none')
        $('#invisi').css('display', 'block')
	$('#subans').val("");
	$('#txtHint').html("");
	$('#Hint').css('display', 'none')
    });
});

/* SET CATEGORIES ON PAGE LOAD */
$(document).ready(function () {
    for(var i=0;i<=5;i++) {
        $('.Categories').append("<p class='InL'> " + cat[i] + "</p>");
    }
})

/* SET QUESTIONS AND ANSWERS ON PAGE LOAD */ 
$(document).ready(function () {
    v = 200
    for (var i = 0; i <= 4; i++) {
        for (var j = 0; j <= 5; j++) {
            v = (i + 1) * 200
	    var k = j*5+i
	    var temp = questions[k];
	    temp = temp.replace(/\'/g, "`");
            $('.Buttons').append("<button class='InL2' id ='"+answers[k]+"'value='"+temp+"'>" + v + "</button>");
        }
        $('.Buttons').append("<br>")
    }
})

/*A TIMER, INCOMPLETE*/
/*function timer(){
    count=count-1;
    if(count < 0){
	var val1 = $('#ComputerCash').val()
	var fin = Number(val1)+Number(val2)
	$('#ComputerCash').val(fin)
	clearInterval(counter);
	return;
    	    }
    	$('#toBeTimer').val(count + " secs")
}*/

/* WHEN VALUE CLICKED ON RUN THIS */
$(function (){
    $('.InL2').on('click', function () {
	count = 5;
	/*var counter=setInterval(timer,1000);*/
	
        $(this).attr('disabled', 'disabled');
        $(this).css({'color':'transparent', 'cursor':'auto'});
	var que = $(this).attr('value');
	thisans = $(this).attr('id');
	val2 = $(this).html();
        $('#invisi').css('display', 'none');
        $('#invisi2').css('display', 'block');
	$('#Question').html(que);
	$('#buzzer').removeAttr('disabled');
	$('#changer').css('display', 'inline-block');
	$('#subans').css("display", 'none');
	$('#subbutton').css("display", 'none');
	document.styleSheets[0].addRule('a:link', 'color: orange ');
	document.styleSheets[0].addRule('a:visited', 'color: chartreuse ');
	document.styleSheets[0].addRule('a:hover', 'color: red ');
	document.styleSheets[0].addRule('a:active', 'color: cyan ');
	
    })
})

/* IF ANSWER SKIPPED */
$(function () {
    /*clearInterval(counter);*/
    $('#changer').on('click', function () {
	val2 = val2/4
	var val1 = $('#ComputerCash').val()
	var fin = Number(val1)+Number(val2)
	$('#QAns').html("Answer: "+thisans)
	$('#ComputerCash').val(fin)
        $('#invisi2').css('display', 'none')
        $('#invisi').css('display', 'block')
    })
})


</script>


