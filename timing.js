var time = [];
var total = [];
function setTimers() {
	$(".select").each(function(i) {
		console.log('select '+i);
		time[i] = -1;
		total[i] = 0;
		$(this).focus(function() {
			console.log(time[i]);
			if(time[i] > -1) return;
			time[i] = (new Date).getTime();
		})
		.change(function() {
			if(time[i] == -1) return;
			total[i] += ((new Date).getTime())-time[i];
			time[i] = -1;
		});
	});
	$(".autocomplete").each(function(i) {
		console.log('autocomplete '+i);
		time[i] = -1;
		total[i] = 0;
		$(this).focus(function() {
			if(time[i] > -1) return;
			time[i] = (new Date).getTime();
			console.log('start');
		})
		.blur(function() {
			if(time[i] == -1) return;
			total[i] += ((new Date).getTime())-time[i];
			time[i] = -1;
			console.log('stop');
		})
		.keydown(function(event) {
			if (event.which == 13 && time[i] > -1) {
				total[i] += ((new Date).getTime())-time[i];
				time[i] = -1;
				console.log('stop');
			}
		});
	})
}