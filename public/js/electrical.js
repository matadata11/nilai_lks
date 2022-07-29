$("#electrical1,#electrical2,#electrical3,#electrical4").keyup(function() {
    var val1 = $('#electrical1').val(); 
	var val2 = $('#electrical2').val(); 
	var val3 = $('#electrical3').val(); 
	var val4 = $('#electrical4').val(); 

	var kali = Number(val1) + Number(val2) + Number(val3) + Number(val4) ;

	if ( val1 != "" && val2 != "" && val3 != "" && val4 != ""  ) 
    {
    $('#electricala').val(kali);
	}
})