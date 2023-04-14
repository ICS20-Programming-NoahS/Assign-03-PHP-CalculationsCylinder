<!DOCTYPE html>
<!-- Assign-03-PHP-CalculationsCylinder -->
<html lang="en-ca">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Assign-03">
    <meta name="keywords" content="immaculata, ICS2O">
    <meta name="author" content="Noah Smith">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  	<!-- Favicon -->
  	<link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png">
  	<link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png">
  	<link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png">
  	<link rel="manifest" href="./fav_index/site.webmanifest">
  
  	<!--Link to CSS file-->
  	<link rel="stylesheet" href="./css/style.css">
  
  	<!-- Google's MDL -->
  	<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.orange-turquoise.min.css">
  	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet" type="text/css">
  
  	<title>Calculating the volume and surface area of a cylinder, using PHP</title>
  </head>  
  <body>
    <!--header-->
  	<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
  		<header class="mdl-layout__header">
  			<div class="mdl-layout__header-row">
  				<span class="mdl-layout-title">Calculating the volume and surface area of a cylinder, using PHP</span>
  			</div>
  		</header>
  	</div>
  	<main class="mdl-layout__content">
  		<br>
  		<br>
  		<br>
  		<h1>Formulas:</h1>
  		<img src="./images/cylinder_formulas.PNG" alt="cylinder formulas">
      <br>
      <br>
      <h3><b>Enter the following information:</b></h3>
       <!-- Enter radius -->
    <form action="./results.php" method="post" target="results">
      <label for=radius-of-cylinder">Enter the radius (cm):</label>
      <input type="text" id="radius-of-cylinder" placeholder="Radius..." name="radius-of-cylinder">
      <br>
      <br>
      <!-- Enter height -->
      <form action="./results.php" method="post" target="results">
      <label for=height-of-cylinder">Enter the height (cm):</label>
      <input type="text" id="height-of-cylinder" placeholder="Height..." name="height-of-cylinder">
      <br>
      <br>
      <button
          class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"
          type="submit"
          name="submit"
        >
          Calculate
        </button>

			<!-- iframe for the results to show on the web page. -->
			<iframe id="results" name="results">			
				The volume of the cylinder is" + $volume + cm<sup>3</sup> and the surface area of the cylinder is" + $surfaceArea + cm<sup>2</sup>.
	    </iframe>
  		</form>
    </main>
  </body>
</html>