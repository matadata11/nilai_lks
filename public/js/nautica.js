$("#nautica1,#nautica2,#nautica3,#nautica4,#nautica5,#nautica6,#nautica7").keyup(function() {
    var val1 = $('#nautica1').val(); 
	var val2 = $('#nautica2').val(); 
	var val3 = $('#nautica3').val(); 
	var val4 = $('#nautica4').val(); 
	var val5 = $('#nautica5').val(); 
	var val6 = $('#nautica6').val(); 
	var val7 = $('#nautica7').val(); 


	var kali = Number(val1) + Number(val2) + Number(val3) + Number(val4) + Number(val5) + Number(val6) + Number(val7)  ;

	if ( val1 != "" && val2 != "" && val3 != "" && val4 != "" && val5 != "" && val6 != "" && val7 != ""  ) 
    {
    $('#nauticaa').val(kali);
	}
})