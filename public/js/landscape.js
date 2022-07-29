$("#input1,#input2").keyup(function() {
    var val1 = $('#input1').val(); 
	var val2 = $('#input2').val(); 
	

	var kali = Number(val1) + Number(val2) ;

	if ( val1 != "" && val2 != ""  ) 
    {
    $('#inputa').val(kali);
	}
})