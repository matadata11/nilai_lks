$("#design1,#design2,#design3").keyup(function() {
    var val1 = $('#design1').val(); 
	var val2 = $('#design2').val(); 
	var val3 = $('#design3').val(); 



	var kali = Number(val1) + Number(val2) + Number(val3)  ;

	if ( val1 != "" && val2 != "" && val3 != ""   ) 
    {
    $('#designa').val(kali);
	}
})