var form = 0;
collector.insert = function(name, list) {
	if(this.type == DROPDOWN) {     // DROP-DOWN
		document.write('<select name="'+name+'" class="select" id="form'+form+'">\n');
    document.write('\t<option value="">---</option>\n');
		for(var i=0;i<list.length;i++) {
			document.write('\t<option value="'+list[i]+'">'+list[i]+'</option>\n');
		}
		document.write('</select> \n');
  } else if(this.type == AUTOCOMPLETE) { // AUTO-COMPLETE
		document.write('<input name="'+name+'" class="autocomplete" id="form'+form+'"> ');
		console.log(list);
		$("#form"+form).autocomplete({source:list});
	}
	form++;
  // HIJACK FORM!
  if(!this.hijacked) this.hijack();
};
			
function range(start, end) {
	var arr = [start];
	while(start < end) arr.push((++start)+"");
	return arr;
}