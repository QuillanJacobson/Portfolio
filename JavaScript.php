
<?php //CPTR 220, Web App Developement, Fall Quarter, Quillan Jacobson, Quillan.Jacobson@wallawalla.edu ?>

<script type="text/javascript">

//this little guy? don't you worry about this little guy

	var Ev = []

<?php

//process the csv files and seperate them by category. just skip to the bottom of the if elses	

	global $Ev, $Ar, $Pl, $Pla, $Th, $Thi, $Ba, $Om, $Fd, $Pe, $Per, $Ph, $Wyd, $Sr, $Oc, $Rt, $Sb, $Sn, $La,
	$Li, $Lit, $St, $Fg, $Wwe, $Hw, $Fa, $Qu, $Ti, $He, $Pn, $Sl, $Ik, $Ta, $Sa, $Fi, $Fic, $Fif, $Fip, $RO, $Mt, $Cl;
	
	$csv = array_map('str_getcsv', file("puzzles.csv"));
	
	for($i=1;$i<count($csv);$i++){
	$cats[$i] = $csv[$i][1];
	if($cats[$i]== "Event")
	$Ev[] = $csv[$i][0];
	else if($cats[$i]== "Around the House")
	$Ar[] = $csv[$i][0];
	else if($cats[$i]== "Place")
	$Pl[] = $csv[$i][0];
	else if($cats[$i]== "Places")
	$Pla[] = $csv[$i][0];
	else if($cats[$i]== "Thing")
	$Th[] = $csv[$i][0];
	else if($cats[$i]== "Things")
	$Thi[] = $csv[$i][0];
	else if($cats[$i]== "Before & After")
	$Ba[] = $csv[$i][0];
	else if($cats[$i]== "On the Map")
	$Om[] = $csv[$i][0];
	else if($cats[$i]== "Food & Drink")
	$Fd[] = $csv[$i][0];
	else if($cats[$i]== "People")
	$Pe[] = $csv[$i][0];
	else if($cats[$i]== "Person")
	$Per[] = $csv[$i][0];
	else if($cats[$i]== "Phrase")
	$Ph[] = $csv[$i][0];
	else if($cats[$i]== "What Are You Doing?")
	$Wyd[] = $csv[$i][0];
	else if($cats[$i]== "Star & Role")
	$Sr[] = $csv[$i][0];
	else if($cats[$i]== "Occupation")
	$Oc[] = $csv[$i][0];
	else if($cats[$i]== "Rhyme Time")
	$Rt[] = $csv[$i][0];
	else if($cats[$i]== "Show Biz")
	$Sb[] = $csv[$i][0];
	else if($cats[$i]== "Same Name")
	$Sn[] = $csv[$i][0];
	else if($cats[$i]== "Landmark")
	$La[] = $csv[$i][0];
	else if($cats[$i]== "Living Things")
	$Li[] = $csv[$i][0];
	else if($cats[$i]== "Living Thing")
	$Lit[] = $csv[$i][0];
	else if($cats[$i]== "Song Title")
	$St[] = $csv[$i][0];
	else if($cats[$i]== "Fun & Games")
	$Fg[] = $csv[$i][0];
	else if($cats[$i]== "Where Are We?")
	$Wwe[] = $csv[$i][0];
	else if($cats[$i]== "Husband & Wife")
	$Hw[] = $csv[$i][0];
	else if($cats[$i]== "Family")
	$Fa[] = $csv[$i][0];
	else if($cats[$i]== "Quotation")
	$Qu[] = $csv[$i][0];
	else if($cats[$i]== "Title")
	$Ti[] = $csv[$i][0];
	else if($cats[$i]== "Headline")
	$He[] = $csv[$i][0];
	else if($cats[$i]== "Proper Name")
	$Pn[] = $csv[$i][0];
	else if($cats[$i]== "Song Lyrics")
	$Sl[] = $csv[$i][0];
	else if($cats[$i]== "In the Kitchen")
	$Ik[] = $csv[$i][0];
	else if($cats[$i]== "Title/Author")
	$Ta[] = $csv[$i][0];
	else if($cats[$i]== "Song/Artist")
	$Sa[] = $csv[$i][0];
	else if($cats[$i]== "Fictional Characters")
	$Fi[] = $csv[$i][0];
	else if($cats[$i]== "Fictional Character")
	$Fic[] = $csv[$i][0];
	else if($cats[$i]== "Fictional Family")
	$Fif[] = $csv[$i][0];
	else if($cats[$i]== "Fictional Place")
	$Fip[] = $csv[$i][0];
	else if($cats[$i]== "Rock On!")
	$Ro[] = $csv[$i][0];
	else if($cats[$i]== "TV Title")
	$Tt[] = $csv[$i][0];
	else if($cats[$i]== "Movie Title")
	$Mt[] = $csv[$i][0];
	else if($cats[$i]== "College Life")
	$Cl[] = $csv[$i][0];
	/*else 
	print "How did you manage to mess that up?";*/
	}
//something i used for testing json_encode, its not hurting anything so i left it	
global $hi;
$hi = array(0=>'more', 1=>'complex');
?>

//more jsons then the begginning of Heavy Rain

var Ev = <?php echo json_encode($Ev); ?>;
var Ar = <?php echo json_encode($Ar); ?>;
var Pl = <?php echo json_encode($Pl); ?>;
var Pla = <?php echo json_encode($Pla); ?>;
var Th = <?php echo json_encode($Th); ?>;
var Thi = <?php echo json_encode($Thi); ?>;
var Ba = <?php echo json_encode($Ba); ?>;
var Om = <?php echo json_encode($Om); ?>;
var Fd = <?php echo json_encode($Fd); ?>;
var Pe = <?php echo json_encode($Pe); ?>;
var Per = <?php echo json_encode($Per); ?>;
var Ph = <?php echo json_encode($Ph); ?>;
var Wyd = <?php echo json_encode($Wyd); ?>;
var Sr = <?php echo json_encode($Sr); ?>;
var Oc = <?php echo json_encode($Oc); ?>;
var Rt = <?php echo json_encode($Rt); ?>;
var Sb = <?php echo json_encode($Sb); ?>;
var Sn = <?php echo json_encode($Sn); ?>;
var La = <?php echo json_encode($La); ?>;
var Li = <?php echo json_encode($Li); ?>;
var Lit = <?php echo json_encode($Lit); ?>;
var St = <?php echo json_encode($St); ?>;
var Fg = <?php echo json_encode($Fg); ?>;
var Wwe = <?php echo json_encode($Wwe); ?>;
var Hw = <?php echo json_encode($Hw); ?>;
var Fa = <?php echo json_encode($Fa); ?>;
var Qu = <?php echo json_encode($Qu); ?>;
var Ti = <?php echo json_encode($Ti); ?>;
var He = <?php echo json_encode($He); ?>;
var Pn = <?php echo json_encode($Pn); ?>;
var Sl = <?php echo json_encode($Sl); ?>;
var Ik = <?php echo json_encode($Ik); ?>;
var Ta = <?php echo json_encode($Ta); ?>;
var Sa = <?php echo json_encode($Sa); ?>;
var Fi = <?php echo json_encode($Fi); ?>;
var Fic = <?php echo json_encode($Fic); ?>;
var Fif = <?php echo json_encode($Fif); ?>;
var Fip = <?php echo json_encode($Fip); ?>;
var Ro = <?php echo json_encode($Ro); ?>;
var Tt = <?php echo json_encode($Tt); ?>;
var Mt = <?php echo json_encode($Mt); ?>;
var Cl = <?php echo json_encode($Cl); ?>;

//a couple constants i use for functions

var getletter;
var response = "Heck no you Brokie Brokemeister";
var bank = 0;
var OnTheLine = 0;
var RandNum;
var array = ["2500","BANKRUPT", "400", "800", "600", "250", "400", "500", "550", "700",
	     "450", "900", "300"];
var Word;
var temp = 0;
var WinCheck;

//function used inside ChooseCat that changes all the colors on the board so you know where letters are
//also sets spaces and the characters that are automatically set in WoF

function Submitter() {
	
	var AllElements = document.getElementsByClassName("SpecialFormat")

	for (var i = 0; i < AllElements.length; i++) {
	var ThisEl = AllElements[i];
	ThisEl.style.fontSize = ThisVal + "pt";}
	}

function Looper() {
	document.getElementById("b1").style.backgroundColor = "white";
	for(var i=1; i<=52; i++) {
		if(Word.charAt(i) == " "){ document.getElementById("b"+(i+1)).style.backgroundColor = "blue";
					   document.getElementById("b"+(i+1)).value = " ";}
		else if(Word.charAt(i) == "-"){ document.getElementById("b"+(i+1)).style.backgroundColor = "white";
						document.getElementById("b"+(i+1)).value = "-";}
		else if(Word.charAt(i) == "'"){ document.getElementById("b"+(i+1)).style.backgroundColor = "white";
						document.getElementById("b"+(i+1)).value = "'";}
		else if(Word.charAt(i) == "&"){ document.getElementById("b"+(i+1)).style.backgroundColor = "white";
						document.getElementById("b"+(i+1)).value = "&";}
		else if(Word.charAt(i) != ""){ document.getElementById("b"+(i+1)).style.backgroundColor = "white";}
	}
}

//sets what elements in the game are choosable, runs Looper just above, and chooses 
//a category based on what button you pressed

function ChooseCat(clicked_id) {
	CoolCat.innerHTML = document.getElementById(clicked_id).value;
	for(var i=1;i<=42;i++){
	document.getElementById(i).disabled = true;}
	document.getElementById("SpinWheel").disabled = false;
	document.getElementById("Vowel").disabled = false;
	document.getElementById("Solve").disabled = false;
	document.getElementById("Reset").disabled = false;

//there's probably a better way to do this...

	if(clicked_id == "1") { RandNum = Math.round((Ev.length-1)*Math.random()); Word = Ev[RandNum];
	Looper();}

	if(clicked_id == "2") { RandNum = Math.round((Ar.length-1)*Math.random()); Word = Ar[RandNum];
	Looper();}

	if(clicked_id == "3") { RandNum = Math.round((Pl.length-1)*Math.random()); Word = Pl[RandNum];
	Looper();}

	if(clicked_id == "4") { RandNum = Math.round((Pla.length-1)*Math.random()); Word = Pla[RandNum];
	Looper();}

	if(clicked_id == "5") { RandNum = Math.round((Th.length-1)*Math.random()); Word = Th[RandNum];
	Looper();}

	if(clicked_id == "6") { RandNum = Math.round((Thi.length-1)*Math.random()); Word = Thi[RandNum];
	Looper();}

	if(clicked_id == "7") { RandNum = Math.round((Ba.length-1)*Math.random()); Word = Ba[RandNum];
	Looper();}

	if(clicked_id == "8") { RandNum = Math.round((Om.length-1)*Math.random()); Word = Om[RandNum];
	Looper();}

	if(clicked_id == "9") { RandNum = Math.round((Fd.length-1)*Math.random()); Word = Fd[RandNum];
	Looper();}

	if(clicked_id == "10") { RandNum = Math.round((Pe.length-1)*Math.random()); Word = Pe[RandNum];
	Looper();}
	
	if(clicked_id == "11") { RandNum = Math.round((Per.length-1)*Math.random()); Word = Per[RandNum];
	Looper();}
	
	if(clicked_id == "12") { RandNum = Math.round((Ph.length-1)*Math.random()); Word = Ph[RandNum];
	Looper();}

	if(clicked_id == "13") { RandNum = Math.round((Wyd.length-1)*Math.random()); Word = Wyd[RandNum];
	Looper();}

	if(clicked_id == "14") { RandNum = Math.round((Sr.length-1)*Math.random()); Word = Sr[RandNum];
	Looper();}

	if(clicked_id == "15") { RandNum = Math.round((Oc.length-1)*Math.random()); Word = Oc[RandNum];
	Looper();}

	if(clicked_id == "16") { RandNum = Math.round((Rt.length-1)*Math.random()); Word = Rt[RandNum];
	Looper();}
	
	if(clicked_id == "17") { RandNum = Math.round((Sb.length-1)*Math.random()); Word = Sb[RandNum];
	Looper();}

	if(clicked_id == "18") { RandNum = Math.round((Sn.length-1)*Math.random()); Word = Sn[RandNum];
	Looper();}

	if(clicked_id == "19") { RandNum = Math.round((La.length-1)*Math.random()); Word = La[RandNum];
	Looper();}

	if(clicked_id == "20") { RandNum = Math.round((Li.length-1)*Math.random()); Word = Li[RandNum];
	Looper();}

	if(clicked_id == "21") { RandNum = Math.round((Lit.length-1)*Math.random()); Word = Lit[RandNum];
	Looper();}

	if(clicked_id == "22") { RandNum = Math.round((St.length-1)*Math.random()); Word = St[RandNum];
	Looper();}

	if(clicked_id == "23") { RandNum = Math.round((Fg.length-1)*Math.random()); Word = Fg[RandNum];
	Looper();}

	if(clicked_id == "24") { RandNum = Math.round((Wwe.length-1)*Math.random()); Word = Wwe[RandNum];
	Looper();}

	if(clicked_id == "25") { RandNum = Math.round((Hw.length-1)*Math.random()); Word = Hw[RandNum];
	Looper();}

	if(clicked_id == "26") { RandNum = Math.round((Fa.length-1)*Math.random()); Word = Fa[RandNum];
	Looper();}

	if(clicked_id == "27") { RandNum = Math.round((Qu.length-1)*Math.random()); Word = Qu[RandNum];
	Looper();}

	if(clicked_id == "28") { RandNum = Math.round((Ti.length-1)*Math.random()); Word = Ti[RandNum];
	Looper();}

	if(clicked_id == "29") { RandNum = Math.round((He.length-1)*Math.random()); Word = He[RandNum];
	Looper();}

	if(clicked_id == "30") { RandNum = Math.round((Pn.length-1)*Math.random()); Word = Pn[RandNum];
	Looper();}

	if(clicked_id == "31") { RandNum = Math.round((Sl.length-1)*Math.random()); Word = Sl[RandNum];
	Looper();}

	if(clicked_id == "32") { RandNum = Math.round((Ik.length-1)*Math.random()); Word = Ik[RandNum];
	Looper();}

	if(clicked_id == "33") { RandNum = Math.round((Ta.length-1)*Math.random()); Word = Ta[RandNum];
	Looper();}

	if(clicked_id == "34") { RandNum = Math.round((Sa.length-1)*Math.random()); Word = Sa[RandNum];
	Looper();}

	if(clicked_id == "35") { RandNum = Math.round((Fi.length-1)*Math.random()); Word = Fi[RandNum];
	Looper();}

	if(clicked_id == "36") { RandNum = Math.round((Fic.length-1)*Math.random()); Word = Fic[RandNum];
	Looper();}

	if(clicked_id == "37") { RandNum = Math.round((Fif.length-1)*Math.random()); Word = Fif[RandNum];
	Looper();}

	if(clicked_id == "38") { RandNum = Math.round((Fip.length-1)*Math.random()); Word = Fip[RandNum];
	Looper();}

	if(clicked_id == "39") { RandNum = Math.round((Ro.length-1)*Math.random()); Word = Ro[RandNum];
	Looper();}

	if(clicked_id == "40") { RandNum = Math.round((Tt.length-1)*Math.random()); Word = Tt[RandNum];
	Looper();}

	if(clicked_id == "41") { RandNum = Math.round((Mt.length-1)*Math.random()); Word = Mt[RandNum];
	Looper();}

	if(clicked_id == "42") { RandNum = Math.round((Cl.length-1)*Math.random()); Word = Cl[RandNum];
	Looper();}
}

//allows you to click on a letter if you spin the wheel and .. spins the wheel, obviously

function SpinTheWheel() {
	RandNum = Math.round(12*Math.random());
	OnTheLine = array[RandNum];
	document.getElementById("SpinResult").innerHTML = "Your Spin Result: " + OnTheLine;
	if(OnTheLine == "BANKRUPT"){
	bank = 0;
	document.getElementById("IGotsDaDough").value = bank;
	}
	else if(OnTheLine != "BANKRUPT") {
	for(var i=1;i<=21;i++){
	document.getElementById("1,"+i).disabled = false;}
	document.getElementById("SpinWheel").disabled = true;
	document.getElementById("Vowel").disabled = true;
	document.getElementById("Solve").disabled = true;
	}
	ThisIsAPain();
}

function ThisIsAPain() {
	var TurnItOff = document.getElementById("ChosenOnes").value;
	for (var i =0; i < TurnItOff.length; i++){
		if(TurnItOff.charAt(i) == "A"){
			document.getElementById("2,1").disabled = true;}
		else if(TurnItOff.charAt(i) == "B"){
			document.getElementById("1,1").disabled = true;}
		else if(TurnItOff.charAt(i) == "C"){
			document.getElementById("1,2").disabled = true;}
		else if(TurnItOff.charAt(i) == "D"){
			document.getElementById("1,3").disabled = true;}
		else if(TurnItOff.charAt(i) == "E"){
			document.getElementById("2,2").disabled = true;}
		else if(TurnItOff.charAt(i) == "F"){
			document.getElementById("1,4").disabled = true;}
		else if(TurnItOff.charAt(i) == "G"){
			document.getElementById("1,5").disabled = true;}
		else if(TurnItOff.charAt(i) == "H"){
			document.getElementById("1,6").disabled = true;}
		else if(TurnItOff.charAt(i) == "I"){
			document.getElementById("2,3").disabled = true;}
		else if(TurnItOff.charAt(i) == "J"){
			document.getElementById("1,7").disabled = true;}
		else if(TurnItOff.charAt(i) == "K"){
			document.getElementById("1,8").disabled = true;}
		else if(TurnItOff.charAt(i) == "L"){
			document.getElementById("1,9").disabled = true;}
		else if(TurnItOff.charAt(i) == "M"){
			document.getElementById("1,10").disabled = true;}
		else if(TurnItOff.charAt(i) == "N"){
			document.getElementById("1,11").disabled = true;}
		else if(TurnItOff.charAt(i) == "O"){
			document.getElementById("2,4").disabled = true;}
		else if(TurnItOff.charAt(i) == "P"){
			document.getElementById("1,12").disabled = true;}
		else if(TurnItOff.charAt(i) == "Q"){
			document.getElementById("1,13").disabled = true;}
		else if(TurnItOff.charAt(i) == "R"){
			document.getElementById("1,14").disabled = true;}
		else if(TurnItOff.charAt(i) == "S"){
			document.getElementById("1,15").disabled = true;}
		else if(TurnItOff.charAt(i) == "T"){
			document.getElementById("1,16").disabled = true;}
		else if(TurnItOff.charAt(i) == "U"){
			document.getElementById("2,5").disabled = true;}
		else if(TurnItOff.charAt(i) == "V"){
			document.getElementById("1,17").disabled = true;}
		else if(TurnItOff.charAt(i) == "W"){
			document.getElementById("1,18").disabled = true;}
		else if(TurnItOff.charAt(i) == "X"){
			document.getElementById("1,19").disabled = true;}
		else if(TurnItOff.charAt(i) == "Y"){
			document.getElementById("1,20").disabled = true;}
		else if(TurnItOff.charAt(i) == "Z"){
			document.getElementById("1,21").disabled = true;}
	}
	}

//need a seperate function for purchasing vowels and enables selection of vowels

function BuyVowel() {
if(bank >=150){
	bank = bank - 150;
	document.getElementById("IGotsDaDough").value = bank;
for(var i=1;i<=5;i++){
	document.getElementById("2,"+i).disabled = false;}
	document.getElementById("SpinWheel").disabled = true;
	document.getElementById("Vowel").disabled = true;
	document.getElementById("Solve").disabled = true;}
else {
	document.getElementById("SpinResult").innerHTML = response;}
	ThisIsAPain();
}

//disables ability to choose letters

function ChooseLetter() {
for(var i=1;i<=21;i++){
	document.getElementById("1,"+i).disabled = true;}
for(var i=1;i<=5;i++){
	document.getElementById("2,"+i).disabled = true;}
	document.getElementById("SpinWheel").disabled = false;
	document.getElementById("Vowel").disabled = false;
	document.getElementById("Solve").disabled = false;
}

//need seperate function for vowels so you don't make money off of them

function NoMoneyVowel() {
for(var i=0; i<=Word.length; i++) {
	if(Word.charAt(i) == getletter){
		document.getElementById("b"+(i+1)).value = getletter;}
}
for(var i=0; i<=Word.length; i++) {
var TempTwo = document.getElementById("b" + (i+1)).value;
WinCheck = WinCheck + TempTwo;
}
if(WinCheck == Word) {
document.getElementById("SpinResult").innerHTML = "Congrats, you won " + bank + " dollars on " + Word;
document.getElementById("SpinWheel").disabled = true;
document.getElementById("Vowel").disabled = true;
document.getElementById("Solve").disabled = true;
}
var MyValue = document.getElementById("ChosenOnes").value;
MyValue = MyValue + " " + getletter;
document.getElementById("ChosenOnes").value = MyValue;
}

//chooses letters in puzzle and fills them in on the interface.  changes bank values and checks for win

function FillLetters() {
for(var i=0; i<=Word.length; i++) {
	if(Word.charAt(i) == getletter){
		temp++
		document.getElementById("b"+(i+1)).value = getletter;
		bank = bank + temp*OnTheLine;
		document.getElementById("IGotsDaDough").value = bank;}
}
for(var i=0; i<=Word.length; i++) {
var TempTwo = document.getElementById("b" + (i+1)).value;
WinCheck = WinCheck + TempTwo;
}
if(WinCheck == Word) {
document.getElementById("SpinResult").innerHTML = "Congrats, you won " + bank + " dollars on " + Word;
document.getElementById("SpinWheel").disabled = true;
document.getElementById("Vowel").disabled = true;
document.getElementById("Solve").disabled = true;
}
var MyValue = document.getElementById("ChosenOnes").value;
MyValue = MyValue + " " + getletter;
document.getElementById("ChosenOnes").value = MyValue;
WinCheck = "";
temp = 0;
}

//allows input in solve box

function SolvePuzzleDeal() {
	document.getElementById("Answerin").disabled = false;
	document.getElementById("EndItAll").disabled = false;
	document.getElementById("SpinWheel").disabled = true;
	document.getElementById("Vowel").disabled = true;
	document.getElementById("Solve").disabled = true;
}

//checks if input in solve box is correct or not

function SubmitSolve() {
var CheckUser = document.getElementById("Answerin").value;
CheckUser = CheckUser.toUpperCase();
if(CheckUser == Word){
	document.getElementById("SpinResult").innerHTML = "Congrats, you won " + bank + " dollars on " + Word;
}
else if(CheckUser != Word){
	document.getElementById("SpinResult").innerHTML = "What a Busta!!!";
	document.getElementById("Answerin").disabled = true;
	document.getElementById("EndItAll").disabled = true;
	document.getElementById("SpinWheel").disabled = false;
	document.getElementById("Vowel").disabled = false;
	document.getElementById("Solve").disabled = false;}
	document.getElementById("Answerin").value = "";
}

//basically a refresh

function ResetGame() {
	document.getElementById("Answerin").disabled = true;
	document.getElementById("EndItAll").disabled = true;
	document.getElementById("SpinWheel").disabled = true;
	document.getElementById("Vowel").disabled = true;
	document.getElementById("Solve").disabled = true;
	document.getElementById("Answerin").value = "";
	bank = 0;
	document.getElementById("IGotsDaDough").value = bank;
	MyValue = "";
	document.getElementById("ChosenOnes").value = MyValue;
	Word = "";
	CoolCat.innerHTML = "Category";
for(var i=1; i<=52; i++) {
	document.getElementById("b"+i).style.backgroundColor = "blue";
	document.getElementById("b"+i).value = "";}
for(var i=1;i<=42;i++){
	document.getElementById(i).disabled = false;}	
}

//probably a better way to do this too
// runs either NoMoneyVowel of FillLetters and checks correct letters

function one() {
getletter = "A"; NoMoneyVowel();}
function two() {
getletter = "B"; FillLetters();}
function thr() {
getletter = "C"; FillLetters();}  
function fou() {
getletter = "D"; FillLetters();}
function fiv() {
getletter = "E"; NoMoneyVowel();}
function six() {
getletter = "F"; FillLetters();}
function sev() {
getletter = "G"; FillLetters();}
function eig() {
getletter = "H"; FillLetters();}
function nin() {
getletter = "I"; NoMoneyVowel();}
function ten() {
getletter = "J"; FillLetters();}
function ele() {
getletter = "K"; FillLetters();}
function twe() {
getletter = "L"; FillLetters();}
function thir() {
getletter = "M"; FillLetters();}
function four() {
getletter = "N"; FillLetters();}
function fift() {
getletter = "O"; NoMoneyVowel();}
function sixt() {
getletter = "P"; FillLetters();}
function seve() {
getletter = "Q"; FillLetters();}
function eigh() {
getletter = "R"; FillLetters();}
function nine() {
getletter = "S"; FillLetters();}
function twen() {
getletter = "T"; FillLetters();}
function tweno() {
getletter = "U"; NoMoneyVowel();}
function twet() {
getletter = "V"; FillLetters();}
function tweth() {
getletter = "W"; FillLetters();}
function twef() {
getletter = "X"; FillLetters();}
function twefi() {
getletter = "Y"; FillLetters();}
function twesi() {
getletter = "Z"; FillLetters();}
</script>
