$("#imput1,#imput2,#imput3,#imput4,#imput5,#imput6,#imput7,#imput8").keyup(function() {
    var val1 = $('#imput1').val(); 
	var val2 = $('#imput2').val(); 
	var val3 = $('#imput3').val(); 
	var val4 = $('#imput4').val(); 
	var val5 = $('#imput5').val(); 
	var val6 = $('#imput6').val(); 
	var val7 = $('#imput7').val(); 
	var val8 = $('#imput8').val(); 

	var kali = Number(val1) + Number(val2) + Number(val3) + Number(val4) + Number(val5) + Number(val6) + Number(val7) + Number(val8) ;


	if ( val1 != "" && val2 != "" && val3 != "" && val4 != "" && val5 != "" && val6 != "" && val7 != "" && val8 != "" ) 
    
    {
    $('#imputa').val(kali);

	}
})
