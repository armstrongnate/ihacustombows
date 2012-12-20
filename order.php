<?php include 'head.php'; ?>
<title>Custom Bows | IHA Custom Bows</title>

</head>

<body> 
	<?php include 'header.php'; ?>
	<div id="section1">
		<div id="bow" class="container">
			<h2 class="page-head">Order Form</h2>
				
				<!-- STEP 1: EMAIL -->
				<div id="step1">
				<form name="order-form" method="post" action="order_form_mailer.php">
					<ul class="form">
						<li>
							<label for="name">First Name</label>
							<input name="name" type="text" id="name" class="half" value placeholder="John"  />
						</li>
						<li>
							<label for="name">Last Name</label>
							<input name="name" type="text" id="name" class="half right" value placeholder="Doe"  />
						</li>
						<li>
							<label for="email">Email</label>
							<input name="email" type="text" id="email" value placeholder ="johnDoe@email.com" />
						</li>
					</ul>
					
				<select id="bow_name" name="bow_name">
					<option>Select Bow</option>
					<option value="blackbear">Black Bear</option>
					<option value="javelina">Javelina II</option>
					<option value="prowler">Prowler</option>
				</select>
				<br>
				<select id="wood" name="wood">
					<option value='1'>Select Wood Type</option>
					<option class="blackbear javelina">Bubinga</option>
					<option class="blackbear javelina prowler">Bocote</option>
					<option class="blackbear javelina prowler">Cocbolo</option>
					<option>Spalted Maple</option>
					<option>Walnut</option>
					<option>Cherry</option>
					<option>Curly Maple</option>
					<option>Zebra Wood</option>
					<option>Yellow Heart</option>
					<option class="blackbear javelina prowler">Action Wood</option>
					<option class="blackbear javelina prowler">Wenge</option>
					<option class="blackbear javelina prowler">Light Wood</option>
					<option class="blackbear javelina prowler">Dark Wood</option>
				</select>
				<input type="submit" name="submit" id="submit"/>
				</form>

<p id="total"></p>

<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
$("#bow_name option:first-child").remove()
$(document).ready(function() {
	black_bear_woods = {
		bubinga: 15,
		bocote: 30,
		cocbolo: 30,
		zebrawood: 15,
		'yellow heart': 18,
		'action wood': 18,
		wenge: 18,
		'select wood type': 0,
		'light wood': 0,
		'dark wood': 0
	};
	prowler_woods = {
		bocote: 15,
		cocbolo: 40,
		'yellow heart': 40,
		'action wood': 40,
		wenge: 15,
		'select wood type': 0,
		'light wood': 0,
		'dark wood': 0
	};
	
	$('#bow_name').change(function() {
		//$("#bow_name option:first-child").remove();
		$("#wood").show();
		$("#wood option").hide();
		$("#wood option." + $("#bow_name").val()).show();
		$("#wood").find('option:first-child').attr('selected', true);
	});
	$('select').change(function() {
		console.log($("#wood option:selected").text().toLowerCase());
		// get total
		
		var total = 0;
		
		// calculate bow
		var name = $("#bow_name option:selected").val();
		switch (name) {
		
		case "blackbear":
			total += 250;
			total += black_bear_woods[$("#wood option:selected").text().toLowerCase()];
			break;
		
		case "javelina":
			total += 450;
			total += black_bear_woods[$("#wood option:selected").text().toLowerCase()];
			break;
		
		case "prowler":
			total += 750;
			total += prowler_woods[$("#wood option:selected").text().toLowerCase()];
			break;
			
		default:
			total = "Please select bow and wood type"
		}
		$("p#total").text(total);
	});
	$("p#total").text(0);
});
</script>
		</div>
	</div>

	
	<?php include 'footer.php'; ?>
</body>
</html>