$("#fashion1,#fashion2").keyup(function() {
    var val1 = $('#fashion1').val(); 
	var val2 = $('#fashion2').val(); 


	var kali = Number(val1) + Number(val2) ;

	if ( val1 != "" && val2 != ""  ) 
    {
    $('#fashiona').val(kali);
	}
})