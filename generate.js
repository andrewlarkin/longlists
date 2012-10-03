var type = 0;
var form = 0;
function insertForm(list) {
	if(type == 0) {     // DROP-DOWN
		document.write('<select class="select">\n');
    document.write('\t<option value="">---</option>\n');
		for(var i=0;i<list.length;i++) {
			document.write('\t<option value="'+list[i]+'">'+list[i]+'</option>\n');
		}
		document.write('</select>\n');
  } else if(type == 1) { // AUTO-COMPLETE
		document.write('<input class="autocomplete" id="autocomplete'+(form)+'">');
		setTimeout('$("#autocomplete'+(form++)+'").autocomplete({source:["'+list.join('","')+'"]});', 100);
	}
}