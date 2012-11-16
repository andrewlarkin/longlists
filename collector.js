var DROPDOWN = 0;
var AUTOCOMPLETE = 1;

function Collector() {
	this.type = Math.round(Math.random());
	this.time = [];
  this.total = [];
  this.error = [];
  // SAVE THE DATA
  this.hijacked = false;
  this.hijack = function() {
    $('form').submit(function() {
      var data = {time:collector.total,error:collector.error};
      if(this.type == AUTOCOMPLETE) {
        for(var i=0;i<error.length;i++) {
          data.error[i] *= data.time[i]/$('#form'+i).val().length;
        }
      }
      $.ajax({
        type: 'POST',
        url : 'echo.php',
        data: data,
        complete: function(d,s) {
          console.log(s);
          console.log(d.responseText);
          return false;
        },
        dataType: 'json',
        async:false
      });
    });
    this.hijacked = true;
  };
}

var collector = new Collector();