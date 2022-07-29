$("#cabinet1,#cabinet2,#cabinet3,#cabinet4,#cabinet5,#cabinet6,#cabinet7").keyup(function() {
    var val1 = $('#cabinet1').val(); 
	var val2 = $('#cabinet2').val(); 
	var val3 = $('#cabinet3').val(); 
	var val4 = $('#cabinet4').val(); 
	var val5 = $('#cabinet5').val(); 
	var val6 = $('#cabinet6').val(); 
	var val7 = $('#cabinet7').val(); 

	var kali = Number(val1) + Number(val2) + Number(val3) + Number(val4) + Number(val5) + Number(val6) + Number(val7) ;

	if ( val1 != "" && val2 != "" && val3 != "" && val4 != "" && val5 != "" && val6 != "" && val7 != "" ) 
    {
    $('#cabineta').val(kali);
	}
})