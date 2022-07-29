$("#motor1,#motor2,#motor3").keyup(function() {
    var val1 = $('#motor1').val(); 
	var val2 = $('#motor2').val(); 
	var val3 = $('#motor3').val(); 

	var kali = Number(val1) + Number(val2) + Number(val3)  ;

	if ( val1 != "" && val2 != "" && val3 != "" ) 
    {
    $('#motora').val(kali);
	}
})