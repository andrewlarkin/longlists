collector.setTimers = function() {
	$(".select").each(function(i) {
		console.log('select '+i);
		collector.time[i] = -1;
		collector.total[i] = 0;
		collector.error[i] = 0;
		$(this).focus(function() {
			//console.log(collector.time[i]);
			if(collector.time[i] > -1) return;
			collector.time[i] = (new Date).getTime();
		})
		.change(function() {
			if(collector.time[i] == -1) return;
			var d = new Date();
			// Reselection counts as error
			if(collector.total[i] > 0) {
				collector.error[i] = d.getTime()-collector.time[i];
			}
			collector.total[i] += d.getTime()-collector.time[i];
			collector.time[i] = -1;
		});
	});
	$(".autocomplete").each(function(i) {
		console.log('autocomplete '+i);
		collector.time[i] = -1;
		collector.total[i] = 0;
		collector.error[i] = 0;
		$(this).focus(function() {
			if(collector.time[i] > -1) return;
			collector.time[i] = (new Date).getTime();
			console.log('start');
		})
		.blur(function() {
			if(collector.time[i] == -1) return;
			collector.total[i] += ((new Date).getTime())-collector.time[i];
			collector.time[i] = -1;
			console.log('stop');
		})
		.keydown(function(event) {
			if (event.which == 13 && collector.time[i] > -1) {
				collector.total[i] += ((new Date).getTime())-collector.time[i];
				collector.time[i] = -1;
				console.log('stop');
			} else { // if backspace
				collector.error[i]++;
				// on submission, divide error/str length and * by time for error time
			}
		});
	})
}
