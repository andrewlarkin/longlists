var type = Math.round(Math.random());
var form = 0;
var hijacked = false;

var DROPDOWN = 0;
var AUTOCOMPLETE = 0;

function insertForm(name, list) {
	if(type == DROPDOWN) {     // DROP-DOWN
		document.write('<select name="'+name+'" class="select" id="form'+form+'">\n');
    document.write('\t<option value="">---</option>\n');
		for(var i=0;i<list.length;i++) {
			document.write('\t<option value="'+list[i]+'">'+list[i]+'</option>\n');
		}
		document.write('</select> \n');
  } else if(type == AUTOCOMPLETE) { // AUTO-COMPLETE
		document.write('<input name="'+name+'" class="autocomplete" id="form'+form+'"> ');
		$("#form"+form).autocomplete({source:list});
	}
	form++;
  // HIJACK FORM!
  if(!hijacked) {
    $('form').submit(function() {
      if(type == AUTOCOMPLETE) {
        for(var i=0;i<error.length;i++) {
          error[i] *= time[i]/$('#form'+i).val().length;
        }
      }
      $.ajax({
        type: 'POST',
        url : 'echo.php',
        data: {
          times:total,
          error:error
        },
        complete: function(d,s) {
          console.log(s);
          console.log(d.responseText);
          return true;
        },
        dataType: 'json',
        async:false
      });
    });
    hijacked = true;
  }
}
			
function range(start, end) {
	var arr = [start];
	while(start < end) arr.push(++start);
	return arr;
}