$("#wall1,#wall2,#wall3,#wall4,#wall5,#wall6,#wall7").keyup(function() {
    var val1 = $('#wall1').val(); 
	var val2 = $('#wall2').val(); 
	var val3 = $('#wall3').val(); 
	var val4 = $('#wall4').val(); 
	var val5 = $('#wall5').val(); 
	var val6 = $('#wall6').val(); 
	var val7 = $('#wall7').val(); 

	var tambah = Number(val1) + Number(val2) + Number(val3) + Number(val4) + Number(val5) + Number(val6) + Number(val7) ;


	if ( val1 != "" && val2 != "" && val3 != "" && val4 != "" && val5 != "" && val6 != "" && val7 != "" ) 
    
    {
    $('#walla').val(tambah);

	}
})
