function Collector() {
	this.DROPDOWN = 0;
	this.AUTOCOMPLETE = 1;
	this.type = Math.round(Math.random());
	this.time = [];
  this.total = [];
  this.error = [];
  // SAVE THE DATA
  this.hijacked = false;
  this.hijack = function() {
    $('form').submit(function() {
      var data = {
				type :collector.type,
				data : {
					time :collector.total,
					error:collector.error
				},
			};
			console.log(data);
      if(collector.type == collector.AUTOCOMPLETE) {
        for(var i=0;i<data.error.length;i++) {
          data.error[i] *= data.time[i]/$('#form'+i).val().length;
        }
      }
      $.ajax({
        type: 'POST',
        url : 'save_time.php',
        data: data,
        complete: function(d,s) {
          console.log(s);
          console.log(d.responseText);
        },
        dataType: 'json',
        async:false
      });
      //return false;
    });
    this.hijacked = true;
  };
}

var collector = new Collector();