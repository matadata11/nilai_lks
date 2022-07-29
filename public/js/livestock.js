$("#livestock1,#livestock2,#livestock3,#livestock4,#livestock5").keyup(function() {
    var val1 = $('#livestock1').val(); 
	var val2 = $('#livestock2').val(); 
	var val3 = $('#livestock3').val(); 
	var val4 = $('#livestock4').val(); 
	var val5 = $('#livestock5').val(); 


	var kali = Number(val1) + Number(val2) + Number(val3) + Number(val4) + Number(val5)  ;

	if ( val1 != "" && val2 != "" && val3 != "" && val4 != "" && val5 != ""  ) 
    {
    $('#livestocka').val(kali);
	}
})