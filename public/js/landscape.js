$("#landscape1,#landscape2,#landscape3,#landscape4,#landscape5,#landscape6,#landscape7,#landscape8").keyup(function() {
    var val1 = $('#landscape1').val(); 
	var val2 = $('#landscape2').val(); 
	var val3 = $('#landscape3').val(); 
	var val4 = $('#landscape4').val(); 
	var val5 = $('#landscape5').val(); 
	var val6 = $('#landscape6').val(); 
	var val7 = $('#landscape7').val(); 
	var val8 = $('#landscape8').val(); 

	var kali = Number(val1) + Number(val2) + Number(val3) + Number(val4) + Number(val5) + Number(val6) + Number(val7)+ Number(val8) ;

	if ( val1 != "" && val2 != "" && val3 != "" && val4 != "" && val5 != "" && val6 != "" && val7 != "" && val8 != "" ) 
    {
    $('#landscapea').val(kali);
	}
})