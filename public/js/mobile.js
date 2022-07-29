$("#mobile1,#mobile2,#mobile3,#mobile4,#mobile5,#mobile6").keyup(function() {
    var val1 = $('#mobile1').val(); 
	var val2 = $('#mobile2').val(); 
	var val3 = $('#mobile3').val(); 
	var val4 = $('#mobile4').val(); 
	var val5 = $('#mobile5').val(); 
	var val6 = $('#mobile6').val(); 

	var kali = Number(val1) + Number(val2) + Number(val3) + Number(val4) + Number(val5) + Number(val6) ;

	if ( val1 != "" && val2 != "" && val3 != "" && val4 != "" && val5 != "" && val6 != "" ) 
    {
    $('#mobilea').val(kali);
	}
})