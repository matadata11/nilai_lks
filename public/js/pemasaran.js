$("#pem1,#pem2,#pem3").keyup(function() {
    var val1 = $('#pem1').val(); 
	var val2 = $('#pem2').val(); 
	var val3 = $('#pem3').val(); 

	var kali = Number(val1) + Number(val2) + Number(val3)  ;

	if ( val1 != "" && val2 != "" && val3 != "" ) 
    {
    $('#pema').val(kali);
	}
})