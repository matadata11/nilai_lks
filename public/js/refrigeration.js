$("#ref1,#ref2,#ref3,#ref4").keyup(function() {
    var val1 = $('#ref1').val(); 
	var val2 = $('#ref2').val(); 
	var val3 = $('#ref3').val(); 
	var val4 = $('#ref4').val(); 


	var kali = Number(val1) + Number(val2) + Number(val3) + Number(val4)   ;

	if ( val1 != "" && val2 != "" && val3 != "" && val4 != "" ) 
    {
    $('#refa').val(kali);
	}
})