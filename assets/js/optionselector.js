$(document).ready(function(){
	$('.option-selector').change(function(){
		var value = $(this).val();
		console.log(value);
		if (value ==='আধাপাকা আবাসিক') {

			$('#hprlength').removeAttr('readonly');
			$('#hprwidth').removeAttr('readonly');
			$('#hprnumber').removeAttr('readonly');
			$('#hprarea').removeAttr('readonly');
			$('#hprbuildingdetails').removeAttr('readonly');

			$('#rlength').attr('readonly','');
			$('#rwidth').attr('readonly','');
			$('#rnumber').attr('readonly','');
			$('#rarea').attr('readonly','');
			$('#rbuildingdetails').attr('readonly','');


			$('#clength').attr('readonly','');
			$('#cwidth').attr('readonly','');
			$('#cnumber').attr('readonly','');
			$('#carea').attr('readonly','');
			$('#cbuildingdetails').attr('readonly','');

			$('#hpclength').attr('readonly','');
			$('#hpcwidth').attr('readonly','');
			$('#hpcnumber').attr('readonly','');
			$('#hpcarea').attr('readonly','');
			$('#hpcbuildingdetails').attr('readonly','');


			$('#blength').attr('readonly','');
			$('#bwidth').attr('readonly','');
			$('#bnumber').attr('readonly','');
			$('#barea').attr('readonly','');
			$('#bbuildingdetails').attr('readonly','');


			$('#pondlength').attr('readonly','');
			$('#pondwidth').attr('readonly','');
			$('#pondnumber').attr('readonly','');
			$('#pondarea').attr('readonly','');
			$('#pondbuildingdetails').attr('readonly','');


			$('#olength').attr('readonly','');
			$('#owidth').attr('readonly','');
			$('#onumber').attr('readonly','');
			$('#oarea').attr('readonly','');
			$('#obuildingdetails').attr('readonly','');
			
		}else if(value === 'আধাপাকা বাণিজ্যিক'){
			$('#rlength').attr('readonly','');
			$('#rwidth').attr('readonly','');
			$('#rnumber').attr('readonly','');
			$('#rarea').attr('readonly','');
			$('#rbuildingdetails').attr('readonly','');


			$('#clength').attr('readonly','');
			$('#cwidth').attr('readonly','');
			$('#cnumber').attr('readonly','');
			$('#carea').attr('readonly','');
			$('#cbuildingdetails').attr('readonly','');


			$('#hprlength').attr('readonly','');
			$('#hprwidth').attr('readonly','');
			$('#hprnumber').attr('readonly','');
			$('#hprarea').attr('readonly','');
			$('#hprbuildingdetails').attr('readonly','');


			$('#hpclength').removeAttr('readonly');
			$('#hpcwidth').removeAttr('readonly');
			$('#hpcnumber').removeAttr('readonly');
			$('#hpcarea').removeAttr('readonly');
			$('#hpcbuildingdetails').removeAttr('readonly');


			$('#blength').attr('readonly','');
			$('#bwidth').attr('readonly','');
			$('#bnumber').attr('readonly','');
			$('#barea').attr('readonly','');
			$('#bbuildingdetails').attr('readonly','');


			$('#pondlength').attr('readonly','');
			$('#pondwidth').attr('readonly','');
			$('#pondnumber').attr('readonly','');
			$('#pondarea').attr('readonly','');
			$('#pondbuildingdetails').attr('readonly','');


			$('#olength').attr('readonly','');
			$('#owidth').attr('readonly','');
			$('#onumber').attr('readonly','');
			$('#oarea').attr('readonly','');
			$('#obuildingdetails').attr('readonly','');
		}else if(value==='আধাপাকা আবাসিক ও বাণিজ্যিক'){
			$('#hprlength').removeAttr('readonly');
			$('#hprwidth').removeAttr('readonly');
			$('#hprnumber').removeAttr('readonly');
			$('#hprarea').removeAttr('readonly');
			$('#hprbuildingdetails').removeAttr('readonly');


			$('#hpclength').removeAttr('readonly');
			$('#hpcwidth').removeAttr('readonly');
			$('#hpcnumber').removeAttr('readonly');
			$('#hpcarea').removeAttr('readonly');
			$('#hpcbuildingdetails').removeAttr('readonly');
		}else if(value==='আবাসিক'){

			$('#rlength').removeAttr('readonly');
			$('#rwidth').removeAttr('readonly');
			$('#rnumber').removeAttr('readonly');
			$('#rarea').removeAttr('readonly');
			$('#rbuildingdetails').removeAttr('readonly');

			
			$('#clength').attr('readonly','');
			$('#cwidth').attr('readonly','');
			$('#cnumber').attr('readonly','');
			$('#carea').attr('readonly','');
			$('#cbuildingdetails').attr('readonly','');


			$('#hprlength').attr('readonly','');
			$('#hprwidth').attr('readonly','');
			$('#hprnumber').attr('readonly','');
			$('#hprarea').attr('readonly','');
			$('#hprbuildingdetails').attr('readonly','');


			$('#hpclength').attr('readonly','');
			$('#hpcwidth').attr('readonly','');
			$('#hpcnumber').attr('readonly','');
			$('#hpcarea').attr('readonly','');
			$('#hpcbuildingdetails').attr('readonly','');

			$('#blength').attr('readonly','');
			$('#bwidth').attr('readonly','');
			$('#bnumber').attr('readonly','');
			$('#barea').attr('readonly','');
			$('#bbuildingdetails').attr('readonly','');


			$('#pondlength').attr('readonly','');
			$('#pondwidth').attr('readonly','');
			$('#pondnumber').attr('readonly','');
			$('#pondarea').attr('readonly','');
			$('#pondbuildingdetails').attr('readonly','');


			$('#olength').attr('readonly','');
			$('#owidth').attr('readonly','');
			$('#onumber').attr('readonly','');
			$('#oarea').attr('readonly','');
			$('#obuildingdetails').attr('readonly','');
		}else if(value==='বাণিজ্যিক'){
			$('#clength').removeAttr('readonly');
			$('#cwidth').removeAttr('readonly');
			$('#cnumber').removeAttr('readonly');
			$('#carea').removeAttr('readonly');
			$('#cbuildingdetails').removeAttr('readonly');

			
			$('#rlength').attr('readonly','');
			$('#rwidth').attr('readonly','');
			$('#rnumber').attr('readonly','');
			$('#rarea').attr('readonly','');
			$('#rbuildingdetails').attr('readonly','');


			$('#hprlength').attr('readonly','');
			$('#hprwidth').attr('readonly','');
			$('#hprnumber').attr('readonly','');
			$('#hprarea').attr('readonly','');
			$('#hprbuildingdetails').attr('readonly','');


			$('#hpclength').attr('readonly','');
			$('#hpcwidth').attr('readonly','');
			$('#hpcnumber').attr('readonly','');
			$('#hpcarea').attr('readonly','');
			$('#hpcbuildingdetails').attr('readonly','');

			$('#blength').attr('readonly','');
			$('#bwidth').attr('readonly','');
			$('#bnumber').attr('readonly','');
			$('#barea').attr('readonly','');
			$('#bbuildingdetails').attr('readonly','');


			$('#pondlength').attr('readonly','');
			$('#pondwidth').attr('readonly','');
			$('#pondnumber').attr('readonly','');
			$('#pondarea').attr('readonly','');
			$('#pondbuildingdetails').attr('readonly','');


			$('#olength').attr('readonly','');
			$('#owidth').attr('readonly','');
			$('#onumber').attr('readonly','');
			$('#oarea').attr('readonly','');
			$('#obuildingdetails').attr('readonly','');
		}else if(value==='আবাসিক ও বাণিজ্যিক'){
			$('#rlength').removeAttr('readonly');
			$('#rwidth').removeAttr('readonly');
			$('#rnumber').removeAttr('readonly');
			$('#rarea').removeAttr('readonly');
			$('#rbuildingdetails').removeAttr('readonly');


			$('#clength').removeAttr('readonly');
			$('#cwidth').removeAttr('readonly');
			$('#cnumber').removeAttr('readonly');
			$('#carea').removeAttr('readonly');
			$('#cbuildingdetails').removeAttr('readonly');


			

			$('#hprlength').attr('readonly','');
			$('#hprwidth').attr('readonly','');
			$('#hprnumber').attr('readonly','');
			$('#hprarea').attr('readonly','');
			$('#hprbuildingdetails').attr('readonly','');


			$('#hpclength').attr('readonly','');
			$('#hpcwidth').attr('readonly','');
			$('#hpcnumber').attr('readonly','');
			$('#hpcarea').attr('readonly','');
			$('#hpcbuildingdetails').attr('readonly','');

			$('#blength').attr('readonly','');
			$('#bwidth').attr('readonly','');
			$('#bnumber').attr('readonly','');
			$('#barea').attr('readonly','');
			$('#bbuildingdetails').attr('readonly','');


			$('#pondlength').attr('readonly','');
			$('#pondwidth').attr('readonly','');
			$('#pondnumber').attr('readonly','');
			$('#pondarea').attr('readonly','');
			$('#pondbuildingdetails').attr('readonly','');


			$('#olength').attr('readonly','');
			$('#owidth').attr('readonly','');
			$('#onumber').attr('readonly','');
			$('#oarea').attr('readonly','');
			$('#obuildingdetails').attr('readonly','');
		}else if(value==='সীমানা প্রাচীর'){
			$('#blength').removeAttr('readonly');
			$('#bwidth').removeAttr('readonly');
			$('#bnumber').removeAttr('readonly');
			$('#barea').removeAttr('readonly');
			$('#bbuildingdetails').removeAttr('readonly');


			$('#rlength').attr('readonly','');
			$('#rwidth').attr('readonly','');
			$('#rnumber').attr('readonly','');
			$('#rarea').attr('readonly','');
			$('#rbuildingdetails').attr('readonly','');


			$('#clength').attr('readonly','');
			$('#cwidth').attr('readonly','');
			$('#cnumber').attr('readonly','');
			$('#carea').attr('readonly','');
			$('#cbuildingdetails').attr('readonly','');

			$('#hprlength').attr('readonly','');
			$('#hprwidth').attr('readonly','');
			$('#hprnumber').attr('readonly','');
			$('#hprarea').attr('readonly','');
			$('#hprbuildingdetails').attr('readonly','');


			$('#hpclength').attr('readonly','');
			$('#hpcwidth').attr('readonly','');
			$('#hpcnumber').attr('readonly','');
			$('#hpcarea').attr('readonly','');
			$('#hpcbuildingdetails').attr('readonly','');


			$('#pondlength').attr('readonly','');
			$('#pondwidth').attr('readonly','');
			$('#pondnumber').attr('readonly','');
			$('#pondarea').attr('readonly','');
			$('#pondbuildingdetails').attr('readonly','');


			$('#olength').attr('readonly','');
			$('#owidth').attr('readonly','');
			$('#onumber').attr('readonly','');
			$('#oarea').attr('readonly','');
			$('#obuildingdetails').attr('readonly','');
		}else if(value==='আধাপাকা আবাসিক ও সীমানা প্রাচীর'){
			$('#hprlength').removeAttr('readonly');
			$('#hprwidth').removeAttr('readonly');
			$('#hprnumber').removeAttr('readonly');
			$('#hprarea').removeAttr('readonly');
			$('#hprbuildingdetails').removeAttr('readonly');

			$('#blength').removeAttr('readonly');
			$('#bwidth').removeAttr('readonly');
			$('#bnumber').removeAttr('readonly');
			$('#barea').removeAttr('readonly');
			$('#bbuildingdetails').removeAttr('readonly');


			$('#rlength').attr('readonly','');
			$('#rwidth').attr('readonly','');
			$('#rnumber').attr('readonly','');
			$('#rarea').attr('readonly','');
			$('#rbuildingdetails').attr('readonly','');


			$('#clength').attr('readonly','');
			$('#cwidth').attr('readonly','');
			$('#cnumber').attr('readonly','');
			$('#carea').attr('readonly','');
			$('#cbuildingdetails').attr('readonly','');



			$('#hpclength').attr('readonly','');
			$('#hpcwidth').attr('readonly','');
			$('#hpcnumber').attr('readonly','');
			$('#hpcarea').attr('readonly','');
			$('#hpcbuildingdetails').attr('readonly','');


			$('#pondlength').attr('readonly','');
			$('#pondwidth').attr('readonly','');
			$('#pondnumber').attr('readonly','');
			$('#pondarea').attr('readonly','');
			$('#pondbuildingdetails').attr('readonly','');


			$('#olength').attr('readonly','');
			$('#owidth').attr('readonly','');
			$('#onumber').attr('readonly','');
			$('#oarea').attr('readonly','');
			$('#obuildingdetails').attr('readonly','');
		}else if(value==='আধাপাকা বাণিজ্যিক ও সীমানা প্রাচীর'){
			$('#hpclength').removeAttr('readonly');
			$('#hpcwidth').removeAttr('readonly');
			$('#hpcnumber').removeAttr('readonly');
			$('#hpcarea').removeAttr('readonly');
			$('#hpcbuildingdetails').removeAttr('readonly');

			$('#blength').removeAttr('readonly');
			$('#bwidth').removeAttr('readonly');
			$('#bnumber').removeAttr('readonly');
			$('#barea').removeAttr('readonly');
			$('#bbuildingdetails').removeAttr('readonly');


			$('#rlength').attr('readonly','');
			$('#rwidth').attr('readonly','');
			$('#rnumber').attr('readonly','');
			$('#rarea').attr('readonly','');
			$('#rbuildingdetails').attr('readonly','');


			$('#clength').attr('readonly','');
			$('#cwidth').attr('readonly','');
			$('#cnumber').attr('readonly','');
			$('#carea').attr('readonly','');
			$('#cbuildingdetails').attr('readonly','');



			$('#hprlength').attr('readonly','');
			$('#hprwidth').attr('readonly','');
			$('#hprnumber').attr('readonly','');
			$('#hprarea').attr('readonly','');
			$('#hprbuildingdetails').attr('readonly','');


			$('#pondlength').attr('readonly','');
			$('#pondwidth').attr('readonly','');
			$('#pondnumber').attr('readonly','');
			$('#pondarea').attr('readonly','');
			$('#pondbuildingdetails').attr('readonly','');


			$('#olength').attr('readonly','');
			$('#owidth').attr('readonly','');
			$('#onumber').attr('readonly','');
			$('#oarea').attr('readonly','');
			$('#obuildingdetails').attr('readonly','');
		}else if(value === 'পুকুর খনন'){
			$('#pondlength').removeAttr('readonly');
			$('#pondwidth').removeAttr('readonly');
			$('#pondnumber').removeAttr('readonly');
			$('#pondarea').removeAttr('readonly');
			$('#pondbuildingdetails').removeAttr('readonly');

			$('#blength').attr('readonly','');
			$('#bwidth').attr('readonly','');
			$('#bnumber').attr('readonly','');
			$('#barea').attr('readonly','');
			$('#bbuildingdetails').attr('readonly','');


			$('#rlength').attr('readonly','');
			$('#rwidth').attr('readonly','');
			$('#rnumber').attr('readonly','');
			$('#rarea').attr('readonly','');
			$('#rbuildingdetails').attr('readonly','');

			$('#clength').attr('readonly','');
			$('#cwidth').attr('readonly','');
			$('#cnumber').attr('readonly','');
			$('#carea').attr('readonly','');
			$('#cbuildingdetails').attr('readonly','');


			$('#hprlength').attr('readonly','');
			$('#hprwidth').attr('readonly','');
			$('#hprnumber').attr('readonly','');
			$('#hprarea').attr('readonly','');
			$('#hprbuildingdetails').attr('readonly','');


			$('#hpclength').attr('readonly','');
			$('#hpcwidth').attr('readonly','');
			$('#hpcnumber').attr('readonly','');
			$('#hpcarea').attr('readonly','');
			$('#hpcbuildingdetails').attr('readonly','');


			$('#olength').attr('readonly','');
			$('#owidth').attr('readonly','');
			$('#onumber').attr('readonly','');
			$('#oarea').attr('readonly','');
			$('#obuildingdetails').attr('readonly','');
		}else if(value === 'অন্যান্য'){
			$('#olength').removeAttr('readonly');
			$('#owidth').removeAttr('readonly');
			$('#onumber').removeAttr('readonly');
			$('#oarea').removeAttr('readonly');
			$('#obuildingdetails').removeAttr('readonly');

			$('#blength').attr('readonly','');
			$('#bwidth').attr('readonly','');
			$('#bnumber').attr('readonly','');
			$('#barea').attr('readonly','');
			$('#bbuildingdetails').attr('readonly','');


			$('#rlength').attr('readonly','');
			$('#rwidth').attr('readonly','');
			$('#rnumber').attr('readonly','');
			$('#rarea').attr('readonly','');
			$('#rbuildingdetails').attr('readonly','');

			$('#clength').attr('readonly','');
			$('#cwidth').attr('readonly','');
			$('#cnumber').attr('readonly','');
			$('#carea').attr('readonly','');
			$('#cbuildingdetails').attr('readonly','');


			$('#hprlength').attr('readonly','');
			$('#hprwidth').attr('readonly','');
			$('#hprnumber').attr('readonly','');
			$('#hprarea').attr('readonly','');
			$('#hprbuildingdetails').attr('readonly','');


			$('#hpclength').attr('readonly','');
			$('#hpcwidth').attr('readonly','');
			$('#hpcnumber').attr('readonly','');
			$('#hpcarea').attr('readonly','');
			$('#hpcbuildingdetails').attr('readonly','');

			$('#pondlength').attr('readonly','');
			$('#pondwidth').attr('readonly','');
			$('#pondnumber').attr('readonly','');
			$('#pondarea').attr('readonly','');
			$('#pondbuildingdetails').attr('readonly','');

		}
	});
});