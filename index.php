<!DOCTYPE html>
<meta charset="UTF-8">
<?php
	$countries = array('Afghanistan','Albania','Algeria','American Samoa','Andorra','Angola','Anguilla','Antigua and Barbuda','Argentina','Armenia','Australia','Austria','Azerbajan','Bahamas','Bahrain','Bangladesh','Barbados','Belarus','Belgium','Belize','Benin','Bermuda','Bhutan','Bolivia','Bosnia and Herzegovina','Botswana','Brazil','Brunei Darussalam','Bulgaria','Burkina Faso','Burundi','Cambodia','Cameroon','Canada','Chile','China','Colombia','Costa Rica','Cuba','Cyprus','Czech Republic','Democratic Republic Congo','Denmark','Djibouti','Dominican Republic','East Timor','Ecuador','Egypt','El Salvador','England','Eritrea','Estonia','Ethiopia','Faroe Islands','Fiji','Finland','France','French Polynesia','Gambia','Georgia (Sakartvelo)','Germany','Gabon','Ghana','Greece','Greenland - Kalaallit Nunaat','Grenada','Gouadeloupe','Guam','Guatemala','Guernsey','Guyana','Guyane','Haiti','Honduras','Hong Kong','Hrvatska (Croatia)','Hungary','Iceland','India','Indonesia','Iran','Iraq','Ireland','Israel','Italy','Jamaica','Japan','Jordan','Kazakhstan','Kenya','Korea Republic','Kosovo','Kurdistan','Kuwait','Kyrgyzstan','Laos','Latvia','Lebanon','Lesotho','Liberia','Libyan Arab Jamahiriya','Liechtenstein','Lithuania','Luxembourg','Macau','Macedonia','Malawi','Malaysia','Mali','Malta','Marshall Islands','Mauritania','Martinique','Mauritius','Mexico','Micronesia','Moldova','Monaco','Mongolia','Morocco','Mozambique','Namibia','Nepal','Netherlands','Netherlands Antilles','New Caledonia','New Zealand (Aotearoa)','Nicaragua','Nigeria','Niue','Norfolk Island','Northern Ireland','Northern Mariana Islands','Norway','Oman','Pakistan','Palau','Palestina','Panama','Papua New Guinea','Paraguay','Peru','Philippines','Portugal','Puerto Rico','Qatar','Reunion','Romania','Russian Federation (AsianPart)','Russian Federation (European Part)','Rwanda','Saint Kitts and Nevis','Saint Vincent and the Grenadines','Samoa (American Samoa)','Samoa (Western Samoa)','San Marino','Saudi Arabia','Scotland','Senegal','Seychelles','Sierra Leone','Singapore','Slovakia','Slovenia','Solomon Islands','Somalia','Somaliland','South Africa','Spain','Sri Lanka','Sudan','Suriname','Svalbard and Jan Mayen','Swaziland','Sweden','Switzerland','Syrian Arab Republic','Taiwan','Tanzania','Thailand','Tibet','Togo','Tonga','Trinidad and Tobago','Tunisia','Turkey','Turkmenistan','Turks and Caicos Islands','Uganda','Ukraine','United Arab Emirates','United Kingdom','Uruguay','United States of America','Uzbekistan','Vatican City State - Holy See','Venezuela','Viet Nam','Virgin Islands (British)','Virgin Islands (U.S.)','Wales','Yemen','Yugoslavia','Zambia','Zimbabwe');	
?>
	<head>
		<title>Timing Example</title>
		<script src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script src="http://code.jquery.com/ui/1.8.23/jquery-ui.min.js"></script>
		<script src="generate.js"></script>
		<script src="timing.js"></script>
		<script>
			function showTimes() {
                switch(type) {
                    case 0:
                        $("#results").css({display:'table'}).html('');
                        $(".select,.autocomplete").each(function(i) {
                            $("#results").append('<tr><td>'+this.options[this.selectedIndex].value+'</td><td>'+total[i]+' ms</td><td>'+this.options.length+' options</td>');
                        });
                        break;
                    case 1:
                        $("#results").css({display:'table'}).html('');
                        $(".select,.autocomplete").each(function(i) {
                            $("#results").append('<tr><td>'+this.value+'</td><td>'+total[i]+' ms</td>');
                        });
                        break;
                }
			}
		</script>
    <link rel="stylesheet" href="style.css" type="text/css">
		<style>
			body {
				background:#DDD;
				font-family:Georgia;
				text-shadow:0 1px 0 #FFF;
				padding:0 10px;
			}
			#results td {
				padding:10px;
				border:1px solid #000;
			}
		</style>
	</head>
	<body onLoad="setTimers()">
		<form onSubmit="return false">
			<h1>Thank you for your participation!</h1>
			<!--<p>Type: <?=$type ?></p>-->
			<p>Just a few questions to get started:</p>
			<p>Please select your birthday: <script>insertForm(['January','February','March','April','May','June','July','August','September','October','November','December']); insertForm(range(1,31)); insertForm(range(1900,1996));</script></p>
			<p>What country do you live in? <script>insertForm(['<?=implode("','", $countries) ?>']);</script></p>
			<p>What's your favorite season? <script>insertForm(['Winter','Spring','Summer','Fall'])</script></p>
			<button onClick="showTimes();return false;">Show Times</button><br><br>
		</form>
		<table id="results" display="none" margin="auto"></table>
	</body>
<?php ?>