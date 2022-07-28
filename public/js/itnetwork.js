    $("#input1,#input2,#input3").keyup(function() {
    var val1 = $('#input1').val(); 
	var val2 = $('#input2').val(); 
	// var val3 = $('#input3').val(); 

	var tambah = Number(val1) * Number(val2) ;

	if ( val1 != "" && val2 != ""  ) 
    {
    $('#input4').val(tambah);
	}
})


