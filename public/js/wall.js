$("#wall1,#wall2,#wall3,#wall4,#wall5,#wall6,#wall7,#wall8,#wall9,#wall10,#wall11,#wall12,#wall13,#wall14,#wall15,#wall16,#wall17,#wall18,#wall19,#wall20,#wall21,#wall22,#wall23,#wall24,#wall25,#wall26,#wall27,#wall28,#wall29,#wall30,#wall31,#wall32").keyup(function() {
    var val1 = $('#wall1').val(); 
	var val2 = $('#wall2').val(); 
	var val3 = $('#wall3').val(); 
	var val4 = $('#wall4').val(); 
	var val5 = $('#wall5').val(); 
	var val6 = $('#wall6').val(); 
	var val7 = $('#wall7').val(); 
	var val8 = $('#wall8').val(); 
	var val9 = $('#wall9').val(); 
	var val10 = $('#wall10').val(); 
	var val11 = $('#wall11').val(); 
	var val12 = $('#wall12').val(); 
	var val13 = $('#wall13').val(); 
	var val14 = $('#wall14').val(); 
	var val15 = $('#wall15').val(); 
	var val16 = $('#wall16').val(); 
	var val17 = $('#wall17').val(); 
	var val18 = $('#wall18').val(); 
    var val19 = $('#wall19').val(); 
	var val20 = $('#wall20').val(); 
	var val21 = $('#wall21').val(); 
	var val22 = $('#wall22').val(); 
	var val23 = $('#wall23').val(); 
	var val24 = $('#wall24').val(); 
	var val25 = $('#wall25').val(); 
	var val26 = $('#wall26').val(); 
	var val27 = $('#wall27').val(); 
	var val28 = $('#wall28').val(); 
	var val29 = $('#wall29').val(); 
	var val30 = $('#wall30').val(); 
	var val31 = $('#wall31').val(); 
	var val32 = $('#wall32').val(); 

	var tambah = Number(val1) * Number(val2) ;
	var tambah1 = Number(val3) * Number(val4) ;
	var tambah2 = Number(val5) * Number(val6) ;
	var tambah3 = Number(val7) * Number(val8) ;
	var tambah4 = Number(val9) * Number(val10) ;
	var tambah5 = Number(val11) * Number(val12) ;
	var tambah6 = Number(val13) * Number(val14) ;
	var tambah7 = Number(val15) * Number(val16) ;
	var tambah8 = Number(val17) * Number(val18) ;
    var tambah9 = Number(val19) * Number(val20) ;
	var tambah10 = Number(val21) * Number(val22) ;
	var tambah11 = Number(val23) * Number(val24) ;
	var tambah12 = Number(val25) * Number(val26) ;
	var tambah13 = Number(val27) * Number(val28) ;
	var tambah14 = Number(val29) * Number(val30) ;
	var tambah15 = Number(val31) * Number(val32) ;


    // 
    var bagi = Number(tambah) / 39 ;
    var kali = Number(bagi) * 100 ;
    var per = Number(kali) * 0.35 ;


	if ( val1 != "" && val2 != "" ) 
	if ( val3 != "" && val4 != "" ) 
	if ( val5 != "" && val6 != "" ) 
	if ( val7 != "" && val8 != "" ) 
	if ( val9 != "" && val10 != "" ) 
	if ( val11 != "" && val12 != "" ) 
	if ( val13 != "" && val14 != "" ) 
	if ( val15 != "" && val16 != "" ) 
	if ( val17 != "" && val18 != "" ) 
    if ( val19 != "" && val20 != "" ) 
	if ( val21 != "" && val22 != "" ) 
	if ( val23 != "" && val24 != "" ) 
	if ( val25 != "" && val26 != "" ) 
	if ( val27 != "" && val28 != "" ) 
	if ( val29 != "" && val30 != "" ) 
	if ( val31 != "" && val32 != "" ) 
    
    
    {
    $('#walla').val(tambah);
    $('#wallb').val(tambah1);
    $('#wallc').val(tambah2);
    $('#walld').val(tambah3);
    $('#walle').val(tambah4);
    $('#wallf').val(tambah5);
    $('#wallg').val(tambah6);
    $('#wallh').val(tambah7);
    $('#walli').val(tambah8);
    $('#wallj').val(tambah9);
    $('#wallk').val(tambah10);
    $('#walll').val(tambah11);
    $('#wallm').val(tambah12);
    $('#walln').val(tambah13);
    $('#wallo').val(tambah14);
    $('#wallp').val(tambah15);

	}
})


// modul 3
$("#input30,#input31,#input32,#input33,#input34,#input35,#input36,#input37").keyup(function() {
	var val30 = $('#input30').val(); 
	var val31 = $('#input31').val(); 
	var val32 = $('#input32').val(); 
	var val33 = $('#input33').val(); 
	var val34 = $('#input34').val(); 
	var val35 = $('#input35').val(); 
	var val36 = $('#input36').val(); 
	var val37 = $('#input37').val(); 

    // modul 3
    var modul3 = Number(val30) + Number(val31) + Number(val32) + Number(val33) + Number(val34) + Number(val35) + Number(val36) + Number(val37) ;

    var a1 = Number(modul3) / 24;
    var b1 = Number(a1) * 100 ;
    var c1 = Number(b1) * 0.3 ;

	if ( val30 != "" && val31 != "" && val32 != "" && val33 != "" && val34 != ""  && val35 != "" && val36 != "" && val37 != "") 
    
    {
    // mod 3
    $('#input38').val(b1);
    $('#inputb39').val(c1);

	}
})


