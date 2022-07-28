$("#wall1,#wall2,#wall3,#wall4,#wall5,#wall6,#wall7,#wall8,#wall9,#wall10,#wall11,#wall12").keyup(function() {
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

	var tambah = Number(val1) * Number(val2) ;
	var tambah1 = Number(val3) * Number(val4) ;
	var tambah2 = Number(val5) * Number(val6) ;
	var tambah3 = Number(val7) * Number(val8) ;
	var tambah4 = Number(val9) * Number(val10) ;
	var tambah5 = Number(val11) * Number(val12) ;

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
    
    {
    $('#walla').val(tambah);
    $('#wallb').val(tambah1);
    $('#wallc').val(tambah2);
    $('#walld').val(tambah3);
    $('#walle').val(tambah4);
    $('#wallf').val(tambah5);
    // $('#input16').val(per);

	}
})

// modul 2
$("#input17,#input18,#input19,#inputa,#inputa1,#inputa2,#inputa3,#inputa4,#inputa5,#inputa6,#inputa7,#inputa8,#inputa9,#inputa10,#inputa11,#inputa12").keyup(function() {
	var val17 = $('#input17').val(); 
	var val18 = $('#input18').val(); 
	var val19 = $('#input19').val(); 
	var vala = $('#inputa').val(); 
	var vala1 = $('#inputa1').val(); 
	var vala2 = $('#inputa2').val(); 
	var vala3 = $('#inputa3').val(); 
	var vala4 = $('#inputa4').val(); 
	var vala5 = $('#inputa5').val(); 
	var vala6 = $('#inputa6').val(); 
	var vala7 = $('#inputa7').val(); 
	var vala8 = $('#inputa8').val(); 
	var vala9 = $('#inputa9').val(); 
	var vala10 = $('#inputa10').val(); 
	var vala11 = $('#inputa11').val(); 
	var vala12 = $('#inputa12').val(); 


    // modul 2
    var modul2 = Number(val17) + Number(val18) + Number(val19) + Number(vala) + Number(vala1) + Number(vala2) + Number(vala3) + Number(vala4) + Number(vala5) + Number(vala6) + Number(vala7) + Number(vala8) + Number(vala9) + Number(vala10) + Number(vala11) + Number(vala12);

    var a = Number(modul2) / 48;
    var b = Number(a) * 100;
    var c = Number(b) * 0.35 ;

	if ( val17 != "" && val18 != "" && val19 != "" && vala != "" && vala1 != ""  && vala2 != "" && vala3 != "" && vala4 != "" && vala5 != "" && vala6 != "" && vala7!= "" && vala8 != "" && vala9 != "" && vala10 != "" && vala11 != "" && vala12 != "") 
    
    {
    // mod 2
    $('#inputa13').val(b);
    $('#inputa14').val(c);

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


