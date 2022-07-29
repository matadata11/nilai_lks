$("#welding1,#welding2").keyup(function() {
    var val1 = $('#welding1').val(); 
	var val2 = $('#welding2').val(); 




	var kali = Number(val1) + Number(val2) ;

	if ( val1 != "" && val2 != ""   ) 
    {
    $('#weldinga').val(kali);
	}
})