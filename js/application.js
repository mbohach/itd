/* animated background script for slot type dealio */
(function($) {
	$.extend($.fx.step,{
	    backgroundPosition: function(fx) {
            if (fx.state === 0 && typeof fx.end == 'string') {
                var start = $.curCSS(fx.elem,'backgroundPosition');
                start = toArray(start);
                fx.start = [start[0],start[2]];
                var end = toArray(fx.end);
                fx.end = [end[0],end[2]];
                fx.unit = [end[1],end[3]];
			}
            var nowPosX = [];
            nowPosX[0] = ((fx.end[0] - fx.start[0]) * fx.pos) + fx.start[0] + fx.unit[0];
            nowPosX[1] = ((fx.end[1] - fx.start[1]) * fx.pos) + fx.start[1] + fx.unit[1];
            fx.elem.style.backgroundPosition = nowPosX[0]+' '+nowPosX[1];

           function toArray(strg){
               strg = strg.replace(/left|top/g,'0px');
               strg = strg.replace(/right|bottom/g,'100%');
               strg = strg.replace(/([0-9\.]+)(\s|\)|$)/g,"$1px$2");
               var res = strg.match(/(-?[0-9\.]+)(px|\%|em|pt)\s(-?[0-9\.]+)(px|\%|em|pt)/);
               return [parseFloat(res[1],10),res[2],parseFloat(res[3],10),res[4]];
           }
        }
	});
})(jQuery);

$(document).ready(function(){	
	$('.transparent').corner();
	$('#top_nav').corner('round 6px');
	$('#main_content').corner('round 6px');
	$('.previously_purchased').corner('round 6px');	
	
	$("#year").mask("999,999,999");
	$("#month").mask("99");
	$("#day").mask("99");
	$("#hour").mask("99");
	$("#minute").mask("99");
	
	var positions=new Array();
	positions[0] = '-245px';
	positions[1] = '21px';
	positions[2] = '-9px';
	positions[3] = '-39px';
	positions[4] = '-69px';
	positions[5] = '-99px';
	positions[6] = '-129px';
	positions[7] = '-159px';
	positions[8] = '-189px';
	positions[9] = '-215px';
	
	$('#search').click(function() {
		var date_string = 'month='+$('#month').val()+'&day='+$('#day').val()+'&year='+$('#year').val()+'&hour='+$('#hour').val()+'&minute='+$('#minute').val()+'&adbc='+$('input[name=adbc]:checked').val()+'&ampm='+$('input[name=ampm]:checked').val();
		$.ajax({
	   		type: "POST",
	   		url: "index.php?search",
	   		data: date_string,
			success:function(txt){ 
				$('#search_result').html(txt);
			}
	 	});
		
		var year_string = $('#year').val();
		var intIndexOfMatch = year_string.indexOf( "," );
		while (intIndexOfMatch != -1){
			year_string = year_string.replace(',',''); 
			intIndexOfMatch = year_string.indexOf( "," );
		}
		s1 = year_string.substr(0,1);
		s2 = year_string.substr(1,1);
		s3 = year_string.substr(2,1);
		s4 = year_string.substr(3,1);
		s5 = year_string.substr(4,1);
		s6 = year_string.substr(5,1);	
		s7 = year_string.substr(6,1);
		s8 = year_string.substr(7,1);
		s9 = year_string.substr(8,1);
		s10 = $('#month').val().substr(0,1);
		s11 = $('#month').val().substr(1,1);
		s12 = $('#day').val().substr(0,1);
		s13 = $('#day').val().substr(1,1);
		s14 = $('#hour').val().substr(0,1);
		s15 = $('#hour').val().substr(1,1);
		s16 = $('#minute').val().substr(0,1);
		s17 = $('#minute').val().substr(1,1);
		$('.spot1').animate({backgroundPosition:"(3px "+positions[s1]}, {duration:1200});
		$('.spot2').animate({backgroundPosition:"(3px "+positions[s2]}, {duration:1200});
		$('.spot3').animate({backgroundPosition:"(3px "+positions[s3]}, {duration:1200});
		$('.spot4').animate({backgroundPosition:"(3px "+positions[s4]}, {duration:1200});
		$('.spot5').animate({backgroundPosition:"(3px "+positions[s5]}, {duration:1200});
		$('.spot6').animate({backgroundPosition:"(3px "+positions[s6]}, {duration:1200});
		$('.spot7').animate({backgroundPosition:"(3px "+positions[s7]}, {duration:1200});
		$('.spot8').animate({backgroundPosition:"(3px "+positions[s8]}, {duration:1200});
		$('.spot9').animate({backgroundPosition:"(3px "+positions[s9]}, {duration:1200});
		$('.spot10').animate({backgroundPosition:"(3px "+positions[s10]}, {duration:700});
		$('.spot11').animate({backgroundPosition:"(3px "+positions[s11]}, {duration:700});
		$('.spot12').animate({backgroundPosition:"(3px "+positions[s12]}, {duration:700});
		$('.spot13').animate({backgroundPosition:"(3px "+positions[s13]}, {duration:700});
		alert(s14);
		$('.spot14').animate({backgroundPosition:"(3px" +positions[s14]}, {duration:700});
		
	});
	
	$('.history, .humor, .sports, .holidays, .hollywood, .world').click(function() {
		$.ajax({
	   		type: "POST",
	   		url: "index.php?random",
	   		data: 'category='+this.id,
			success:function(txt){ 
				$('#random_event').html(txt);
			}
	 	});
		
		$('#random_event').modal();
		return false;
	});
});