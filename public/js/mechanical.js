$("#inputan1,#inputan2,#inputan3").keyup(function() {
    var val1 = $('#inputan1').val(); 
	var val2 = $('#inputan2').val(); 
	var val3 = $('#inputan3').val(); 



	var kali = Number(val1) + Number(val2) + Number(val3)   ;

	if ( val1 != "" && val2 != "" && val3 != ""   ) 
    {
    $('#inputana').val(kali);
	}
})