$(document).ready(function (){

function gtJson(){
 $.getJSON('order.php', function(jd) {
             $('#temp').html(jd.Temp +' &degC');
             $('#humi').html(jd.Humi + ' %');
             $('#Wspd').html(jd.Wspd + ' m/s');
             $('#Wndr').html(jd.Wdir +' &deg '+jd.direc);
             $('#slr').html(jd.Solar +' w/m&sup2');
             $('#press').html(jd.Press+ ' HPa');
             $('#rain').html(jd.R15 +' mm');
             $('#battv').html(jd.Batt+' V');		
             $('#dtaoc').html(jd.Date+'&nbsp|&nbsp'+jd.Time);

		
          });
		//setTimeout(gtJson,20000);
		console.log("ya!");
	}

    $('#flist').click(function(){
       // gtJson();
       alert("clicked");
    });

	  $('#bhllist').click(function(){
       // gtJson();
       alert("bclicked");
    });
    $('#esvlist').click(function(){
       // gtJson();
       alert("eclicked");
    });
});
