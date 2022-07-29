$("#electronics1,#electronics2,#electronics3").keyup(function() {
    var val1 = $('#electronics1').val(); 
	var val2 = $('#electronics2').val(); 
	var val3 = $('#electronics3').val(); 

	var kali = Number(val1) + Number(val2) + Number(val3) ;

	if ( val1 != "" && val2 != "" && val3 != ""  ) 
    {
    $('#electronicsa').val(kali);
	}
})