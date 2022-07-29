$("#restaurant1,#restaurant2,#restaurant3").keyup(function() {
    var val1 = $('#restaurant1').val(); 
	var val2 = $('#restaurant2').val(); 
	var val3 = $('#restaurant3').val(); 



	var kali = Number(val1) + Number(val2) + Number(val3)  ;

	if ( val1 != "" && val2 != "" && val3 != ""   ) 
    {
    $('#restauranta').val(kali);
	}
})