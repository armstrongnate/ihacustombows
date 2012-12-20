<?php include 'head.php'; ?>
<title>Custom Bows | IHA Custom Bows</title>

</head>

<body> 
	<?php include 'header.php'; ?>
	<div id="section1">
		<div id="bow">
			<h2 class="page-head">Prowler</h2>
			<div class="table">
				<ul id="specs">
					<li><h3>Type: <span>3 pc. Longbow</span></h3></li>
					<li><h3>Length: <span>62"-64"</span></h3></li>
					<li><h3>Draw Weight: <span>30-70 pounds</span></h3></li>
				</ul>
			</div>
			<!-- image slider -->
			<div class="slider">
				<input type="radio" name="slide_switch" id="id1"/>
				<label for="id1">
					<img src="images/bows_slider/prowler-1" width="100"/>
				</label>
				<img src="images/bows_slider/prowler-1"/>
				
				<!--Show the second image by default on page load-->
				<input type="radio" name="slide_switch" id="id2" checked="checked"/>
				<label for="id2">
					<img src="images/bows_slider/prowler-4.jpg" width="100"/>
				</label>
				<img src="images/bows_slider/prowler-4"/>
				
				<input type="radio" name="slide_switch" id="id3"/>
				<label for="id3">
					<img src="images/bows_slider/prowler-2" width="100"/>
				</label>
				<img src="images/bows_slider/prowler-2"/>
				
				<input type="radio" name="slide_switch" id="id4"/>
				<label for="id4">
					<img src="images/bows_slider/prowler-3" width="100"/>
				</label>
				<img src="images/bows_slider/prowler-3"/>
				
				<input type="radio" name="slide_switch" id="id5"/>
				<label for="id5">
					<img src="images/bows_slider/prowler-4" width="100"/>
				</label>
				<img src="images/bows_slider/prowler-4"/>
			</div> 
			<div id="description">
				<h4>Price: <span>$750.00</span></h4>
				<h5>Description</h5>
				<p>Clear Glass Veneered Limbs, your choice of veneers and riser wood.</p>
			</div>
			<div id="get_started">
			</div>
			<!-- Small Bows List -->
			<?php include 'more-bows.php'; ?>
		</div>
	</div>

	
	<?php include 'footer.php'; ?>
</body>
</html>