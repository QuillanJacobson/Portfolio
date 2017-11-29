/*GLOBAL VARIABLE*/
var cats = []
var CatsChosen = [];

/*FILL ARRAY FOR RANDOM GAMES*/
for(var i=0; i<6; i++){
    var j = i + 1
    var k = "C" + j
    cats[i] = document.getElementById(k).innerHTML
}

/*FILL CATSCHOSEN WHEN ENTER KEY IS PUSHED*/
$('#inny').keydown(function(e){ 
    var key = e.which;
    if(key == '13') {
        var aval = CatsChosen.length
        CatsChosen[aval] = $("#inny").val();
	$("#inny").val("");
	if(CatsChosen.length == 6){
	    var js_html='';
    	    js_html += "<form id='js_navigate_with_post' method='post' action='HTML/GamePage.php'>\n";
    	    js_html +=  "<input type='hidden' name='js_navigate_with_post' value='true'>\n";
	    for(var i=0; i<6; i++){
		var res = CatsChosen[i].replace("'", "&apos");
            	js_html +=  "<input type='hidden' name='a" + i + "' value='"+res+"'>\n";
	    }
    	    js_html += "</form>\n";
    	    $('body').append(js_html);
    	    $('#js_navigate_with_post').submit();
	}
        $("#Categories").css({display: 'block'})
        $("#Printed").append(CatsChosen[aval] + "<br>")
    }
});

/*FUNCTION FOR SAFARI TO WORK ON SELECT RATHER THAN DATALIST*/
$(function (){
    $('#sel').change(function(){ 
        var aval = CatsChosen.length
        CatsChosen[aval] = $("#sel option:selected").val();
	$("#sel option:selected").prop('disabled', true);
	if(CatsChosen.length == 6){
	    var js_html='';
    	    js_html += "<form id='js_navigate_with_post' method='post' action='HTML/GamePage.php'>\n";
    	    js_html +=  "<input type='hidden' name='js_navigate_with_post' value='true'>\n";
	    for(var i=0; i<6; i++){
		var res = CatsChosen[i].replace("'", "&apos");
            	js_html +=  "<input type='hidden' name='a" + i + "' value='"+res+"'>\n";
	    }
    	    js_html += "</form>\n";
    	    $('body').append(js_html);
    	    $('#js_navigate_with_post').submit();
	}
        $("#Categories").css({display: 'block'})
        $("#Printed").append(CatsChosen[aval] + "<br>")
    })
});

/*RUN WHEN RANDOM GAME IS PUSHED*/
$(function (){
    $("#WelcButton").on('click', function () {
        var js_html='';
    	js_html += "<form id='js_navigate_with_post' method='post' action='HTML/GamePage.php'>\n";
    	js_html +=  "<input type='hidden' name='js_navigate_with_post' value='true'>\n";
	for(var i=0; i<6; i++){
	    var res = cats[i].replace("'", "&apos");
            js_html +=  "<input type='hidden' name='a" + i + "' value='"+cats[i]+"'>\n";
	}
    	js_html += "</form>\n";
    	$('body').append(js_html);
    	$('#js_navigate_with_post').submit();
    })
})
