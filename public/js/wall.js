$("#n1,#n2,#n23,#n4,#n5,#n6,#n7,#n8").keyup(function() {
    var val1 = $('#n1').val(); 
	var val2 = $('#n2').val(); 
	var val3 = $('#n3').val(); 
	var val4 = $('#n4').val(); 
	var val5 = $('#n5').val(); 
	var val6 = $('#n6').val(); 
	var val7 = $('#n7').val(); 
	var val8 = $('#n8').val(); 




	var kali = Number(val1) + Number(val2) + Number(val3) + Number(val4) + Number(val5) + Number(val6) + Number(val7) + Number(val8)  ;

	if ( val1 != "" && val2 != "" && val3 != "" && val4 != "" && val5 != "" && val6 != "" && val7 != "" && val8 != ""   ) 
    {
    $('#na').val(kali);
	}
})