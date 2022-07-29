$("#input1,#input2,#input3,#input4,#input5,#input6,#input7,#input8").keyup(function() {
    var val1 = $('#input1').val(); 
	var val2 = $('#input2').val(); 
	var val3 = $('#input3').val(); 
	var val4 = $('#input4').val(); 
	var val5 = $('#input5').val(); 
	var val6 = $('#input6').val(); 
	var val7 = $('#input7').val(); 
	var val8 = $('#input8').val(); 
	

	var kali = Number(val1) + Number(val2) + Number(val3) + Number(val4) + Number(val5) + Number(val6) + Number(val7) + Number(val8) ;

	if ( val1 != "" && val2 != ""  && val3 != ""  && val4 != ""  && val5!= ""  && val6 != ""  && val7 != ""  && val8 != ""  ) 
    {
    $('#inputa').val(kali);
	}
})