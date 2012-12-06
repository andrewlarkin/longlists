<!DOCTYPE html>
<meta charset="UTF-8">
<?php
	$countries = array('Afghanistan','Albania','Algeria','American Samoa','Andorra','Angola','Anguilla','Antigua and Barbuda','Argentina','Armenia','Australia','Austria','Azerbajan','Bahamas','Bahrain','Bangladesh','Barbados','Belarus','Belgium','Belize','Benin','Bermuda','Bhutan','Bolivia','Bosnia and Herzegovina','Botswana','Brazil','Brunei Darussalam','Bulgaria','Burkina Faso','Burundi','Cambodia','Cameroon','Canada','Chile','China','Colombia','Costa Rica','Cuba','Cyprus','Czech Republic','Democratic Republic Congo','Denmark','Djibouti','Dominican Republic','East Timor','Ecuador','Egypt','El Salvador','England','Eritrea','Estonia','Ethiopia','Faroe Islands','Fiji','Finland','France','French Polynesia','Gambia','Georgia (Sakartvelo)','Germany','Gabon','Ghana','Greece','Greenland - Kalaallit Nunaat','Grenada','Gouadeloupe','Guam','Guatemala','Guernsey','Guyana','Guyane','Haiti','Honduras','Hong Kong','Hrvatska (Croatia)','Hungary','Iceland','India','Indonesia','Iran','Iraq','Ireland','Israel','Italy','Jamaica','Japan','Jordan','Kazakhstan','Kenya','Korea Republic','Kosovo','Kurdistan','Kuwait','Kyrgyzstan','Laos','Latvia','Lebanon','Lesotho','Liberia','Libyan Arab Jamahiriya','Liechtenstein','Lithuania','Luxembourg','Macau','Macedonia','Malawi','Malaysia','Mali','Malta','Marshall Islands','Mauritania','Martinique','Mauritius','Mexico','Micronesia','Moldova','Monaco','Mongolia','Morocco','Mozambique','Namibia','Nepal','Netherlands','Netherlands Antilles','New Caledonia','New Zealand (Aotearoa)','Nicaragua','Nigeria','Niue','Norfolk Island','Northern Ireland','Northern Mariana Islands','Norway','Oman','Pakistan','Palau','Palestina','Panama','Papua New Guinea','Paraguay','Peru','Philippines','Portugal','Puerto Rico','Qatar','Reunion','Romania','Russian Federation (AsianPart)','Russian Federation (European Part)','Rwanda','Saint Kitts and Nevis','Saint Vincent and the Grenadines','Samoa (American Samoa)','Samoa (Western Samoa)','San Marino','Saudi Arabia','Scotland','Senegal','Seychelles','Sierra Leone','Singapore','Slovakia','Slovenia','Solomon Islands','Somalia','Somaliland','South Africa','Spain','Sri Lanka','Sudan','Suriname','Svalbard and Jan Mayen','Swaziland','Sweden','Switzerland','Syrian Arab Republic','Taiwan','Tanzania','Thailand','Tibet','Togo','Tonga','Trinidad and Tobago','Tunisia','Turkey','Turkmenistan','Turks and Caicos Islands','Uganda','Ukraine','United Arab Emirates','United Kingdom','Uruguay','United States of America','Uzbekistan','Vatican City State - Holy See','Venezuela','Viet Nam','Virgin Islands (British)','Virgin Islands (U.S.)','Wales','Yemen','Yugoslavia','Zambia','Zimbabwe');	
?>
	<head>
		<title>Timing Example</title>
		<script src="jquery/core.js"></script>
		<script src="jquery/ui.js"></script>
		<script src="collector.js"></script>
		<script src="generate.js"></script>
		<script src="timing.js"></script>
		<script>
			function showTimes() {
                switch(collector.type) {
                    case DROPDOWN:
                        $("#results").css({display:'table'}).html('');
                        $(".select,.autocomplete").each(function(i) {
                            $("#results").append('<tr><td>'+this.options[this.selectedIndex].value+'</td><td>'+collector.total[i]+' ms</td><td>'+this.options.length+' options</td>');
                        });
                        break;
                    case AUTOCOMPLETE:
                        $("#results").css({display:'table'}).html('');
                        $(".select,.autocomplete").each(function(i) {
                            $("#results").append('<tr><td>'+this.value+'</td><td>'+collector.total[i]+' ms</td>');
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
	<body onLoad="collector.setTimers()">
        <div class="consent">
            
        </div>
		<form method="POST" action="thankyou.php">
			<h1>Thank you for your participation!</h1>
			<!--<p>Type: <?=$type ?></p>-->
			<p>Just a few questions to get started:</p>
			<p>Please select your birthday: <script>collector.insert('month', ['January','February','March','April','May','June','July','August','September','October','November','December']); collector.insert('day', range(1,31)); collector.insert('year', range(1900,1996));</script></p>
			<p>What country do you live in? <script>collector.insert('country', ['<?=implode("','", $countries) ?>']);</script></p>
			<p>What's your favorite season? <script>collector.insert('season', ['Winter','Spring','Summer','Fall'])</script></p>
			<p>Alright, now, the real test.</p>
			<p>What is your favorite big four sport (football, baseball, basketball, hockey)?: <script>collector.insert('bigfour', ['football', 'baseball', 'basketball', 'hockey'])</script></p>
			<p>What is your favorite big four TV network (CBS, Fox, ABC, NBC)?: <script>collector.insert('tvnetwork', ['CBS', 'Fox', 'ABC', 'NBC'])</script></p>
			<p>What is your favorite Major League Baseball team?: <script>collector.insert('baseball', ['None', 'Angels', 'Athletics', 'Mariners', 'Rangers', 'Indians', 'Tigers', 'Twins', 'Royals', 'White Sox', 'Blue Jays', 'Orioles', 'Rays', 'Sox', 'Yankees', 'Braves', 'Marlins', 'Nationals', 'Mets', 'Phillies', 'Astros', 'Brewers', 'Cardinals', 'Cubs', 'Pirates', 'Reds', 'Diamondbacks', 'Dodgers', 'Giants', 'Padres', 'Rockies', 'What are sports?'])</script></p>
			<p>What is your favorite National Football League team (or animal if you don't have one)?: <script>collector.insert('football', ['Ravens', 'Bengals', 'Browns', 'Steelers', 'Texans', 'Colts', 'Jaguars', 'Titans', 'Bills', 'Dolphins', 'Patriots', 'Jets', 'Broncos', 'Chiefs', 'Raiders', 'Chargers', 'Bears', 'Lions', 'Packers', 'Vikings', 'Falcons', 'Panthers', 'Saints', 'Buccaneers', 'Cowboys', 'Giants', 'Eagles', 'Redskins', 'Cardinals', 'Seahawks', 'Rams'])</script></p>
			<p>How many pets do you own?: <script>collector.insert('pets', ['0','1','2','3','4','5','6','7','8','9','10+'])</script></p>
			<p>Do you own a smartphone?: <script>collector.insert('phonebool', ['Yes', 'No'])</script></p>
			<p>How many siblings do you have?: <script>collector.insert('siblings', ['0','1','2','3','4','5','6','7','8','9','10+'])</script></p>
			<p>What state were you born in?: <script>collector.insert('birthstate', ['Alabama', 'Alaska', 'Arizona', 'Arkansas', 'California', 'Colorado', 'Connecticut', 'Delaware', 'Florida', 'Georgia', 'Hawaii', 'Idaho', 'Illinois', 'Indiana', 'Iowa', 'Kansas', 'Kentucky', 'Louisiana', 'Maine', 'Maryland', 'Massachusetts', 'Michigan', 'Minnesota', 'Mississippi', 'Missouri', 'Montana', 'Nebraska', 'Nevada', 'New Hampshire', 'New Jersey', 'New Mexico', 'New York', 'North Carolina', 'North Dakota', 'Ohio', 'Oklahoma', 'Oregon', 'Pennsylvania', 'Rhode Island', 'South Carolina', 'South Dakota', 'Tennessee', 'Texas', 'Utah', 'Vermont', 'Virginia', 'Washington', 'West Virginia', 'Wisconsin', 'Wyoming'])</script></p>
			<p>What state did you go to college in?: <script>collector.insert('college', ['None', 'Alabama', 'Alaska', 'Arizona', 'Arkansas', 'California', 'Colorado', 'Connecticut', 'Delaware', 'Florida', 'Georgia', 'Hawaii', 'Idaho', 'Illinois', 'Indiana', 'Iowa', 'Kansas', 'Kentucky', 'Louisiana', 'Maine', 'Maryland', 'Massachusetts', 'Michigan', 'Minnesota', 'Mississippi', 'Missouri', 'Montana', 'Nebraska', 'Nevada', 'New Hampshire', 'New Jersey', 'New Mexico', 'New York', 'North Carolina', 'North Dakota', 'Ohio', 'Oklahoma', 'Oregon', 'Pennsylvania', 'Rhode Island', 'South Carolina', 'South Dakota', 'Tennessee', 'Texas', 'Utah', 'Vermont', 'Virginia', 'Washington', 'West Virginia', 'Wisconsin', 'Wyoming', 'N/A'])</script></p>
			<p>What operating system (Windows, Mac, Linux) is running on your main computer?: <script>collector.insert('os', ['Windows', 'Mac', 'Linux', 'Other'])</script></p>
			<p>What operating system (iOS, Android, Windows Phone, Blackberry OS) is running on your main smartphone?: <script>collector.insert('smartphone', ['iOS', 'Android', 'Windows Phone', 'Blackberry OS', 'No smartphone'])</script></p>
			<p>How many television sets are in your primary residence?: <script>collector.insert('tvcount', ['0','1','2','3','4','5','6','7','8','9','10+'])</script></p>
			<input type="submit"><br><br>
		</form>
        <button onClick="showTimes()">Show Times</button><br><br>
		<table id="results" display="none" margin="auto"></table>
	</body>
<?php ?>