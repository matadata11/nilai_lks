$("#farmacy1,#farmacy2,#farmacy3,#farmacy4,#farmacy5,#farmacy6,#farmacy7,#farmacy8,#farmacy9,#farmacy10").keyup(function() {
    var val1 = $('#farmacy1').val(); 
	var val2 = $('#farmacy2').val(); 
	var val3 = $('#farmacy3').val(); 
	var val4 = $('#farmacy4').val(); 
	var val5 = $('#farmacy5').val(); 
	var val6 = $('#farmacy6').val(); 
	var val7 = $('#farmacy7').val(); 
	var val8 = $('#farmacy8').val(); 
	var val9 = $('#farmacy9').val(); 
	var val10 = $('#farmacy10').val(); 

	var kali = Number(val1) + Number(val2) + Number(val3) + Number(val4) + Number(val5)+ Number(val6) + Number(val7) + Number(val8) + Number(val9) + Number(val10) ;

	if ( val1 != "" && val2 != "" && val3 != "" && val4 != "" && val5 != "" && val6 != "" && val7 != "" && val8 != "" && val9 != "" && val10 != ""  ) 
    {
    $('#farmacya').val(kali);
	}
})