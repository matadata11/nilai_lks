$("#refrigeration1,#refrigeration2,#refrigeration3,#refrigeration4").keyup(function() {
    var val1 = $('#refrigeration1').val(); 
	var val2 = $('#refrigeration2').val(); 
	var val3 = $('#refrigeration3').val(); 
	var val4 = $('#refrigeration4').val(); 


	var kali = Number(val1) + Number(val2) + Number(val3) + Number(val4)   ;

	if ( val1 != "" && val2 != "" && val3 != "" && val4 != "" ) 
    {
    $('#refrigerationa').val(kali);
	}
})