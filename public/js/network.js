$("#net1,#net2,#net3").keyup(function() {
    var val1 = $('#net1').val(); 
	var val2 = $('#net2').val(); 
	var val3 = $('#net3').val(); 

	var kali = Number(val1) + Number(val2) + Number(val3) ;

	if ( val1 != "" && val2 != "" && val3 != ""  ) 
    {
    $('#neta').val(kali);
	}
})