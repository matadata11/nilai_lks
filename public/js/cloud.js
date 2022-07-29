$("#cloud1,#cloud2").keyup(function() {
    var val1 = $('#cloud1').val(); 
	var val2 = $('#cloud2').val(); 

	var kali = Number(val1) + Number(val2) ;

	if ( val1 != "" && val2 != "" ) 
    {
    $('#clouda').val(kali);
	}
})