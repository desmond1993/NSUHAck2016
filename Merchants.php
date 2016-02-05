<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" type="image/x-icon" href="spartanlogo.ico" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href="jquery-ui.css" rel="stylesheet">
	<style>
	body{
		font: 62.5% "Trebuchet MS", sans-serif;
		margin: 50px;
	}
	#accordion{
		text-align: center;
	}
	.demoHeaders {
		margin-top: 2em;
		text-align: center;
	}
	#dialog-link {
		padding: .4em 1em .4em 20px;
		text-decoration: none;
		position: relative;
	}
	#dialog-link span.ui-icon {
		margin: 0 5px 0 0;
		position: absolute;
		left: .2em;
		top: 555%;
		margin-top: -8px;
	}
	#icons {
		margin: 0;
		padding: 0;
	}
	#icons li {
		margin: 2px;
		position: relative;
		padding: 4px 0;
		cursor: pointer;
		float: left;
		list-style: none;
	}
	#icons span.ui-icon {
		float: left;
		margin: 0 4px;
	}
	.fakewindowcontain .ui-widget-overlay {
		position: absolute;
	}
	select {
		width: 200px;
		height:10px;
	}
	#largest{
		fillSpace
	}
	</style>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</head>

<body>
<script>$( ".selector" ).accordion({ autoHeight: false });</script>
	<!-- Accordion -->
<h1 class="demoHeaders">NSU Merchants</h1>
<div id="accordion">
	<h3>Chinese</h3>
	<div>
		<h4>Golden City</h4> 
			<p>1002 Park Avenue</br>
			Norfolk VA 23504</br>
			(757) 629-0888</p>

		<h4>China Moon</h4> 
			<p>1500 East Brambleton Ave. </br>
			Norfolk, VA 23504</br>
			(757) 622-7778</p>
	</div>
	<h3>American</h3>
	<div id="american"><h4>Buffalo Wild Wings Grill & Bar</h4> 
			<p>1308 Greenbrier Parkway</br>
			Chesapeake, VA 23320</br>
			(757) 263-4090</p>

		<h4>Buffalo Wild Wings</h4>
			<p>420 Monticello Ave. Suite 150 </br>
			Norfolk, VA 23510</br>
			(757) 965-3959</p>

		<h4>Famous Uncle Al's</h4>
			<p>1269 N. Military Hwy #5</br>
			Norfolk VA 23502</br>
			(757)  466-1660</p>

		<h4>Flame N' Fry</h4>
			<p>1500 East Brambleton Ave. </br>
			Norfolk, VA 23504</br>
			(757) 233-2532</p>

		<h4>Martin's Soul Food</h4>
			<p>5802 Virginia Beach Blvd</br>
			Norfolk, VA 23462</br>
			(757) 305-9555</p>

		<h4>McDonald's</h4>
			<p>2328 Princess Anne Rd. </br>
			Norfolk, VA 23504</br>
			(757) 623-4696</p>

		<h4>Zero's (Sandwich Shop)</h4> 
			<p>1010 Park Avenue</br>
			Norfolk, VA 23504</br>
			(757) 664-9110</p>
			</div>
	<h3>Mobile Services</h3>
		<div><h4>BOOST Mobile</h4> 
			<p>1500 E. Brambleton Ave.</br>
			Norfolk VA 23504</br>
			(757) 961-8744</p></div>
	<h3>Seafood</h3>
		<div><h4>Blue Ocean Seafood</h4>
			<p>2901 East Virginia Beach Blvd.</br>
			Norfolk, VA 23504-4104</br>
			</p>(757) 623-2255</p></div>
	<h3>Beauty</h3>
		<div><h4>Kappatal Cuts</h4>
		<p>1500 East Brambleton Ave.</br>
			Norfolk VA 23504</br>
			(757) 625-9523</p>
		
		<h4>Sam's Beauty Supply</h4> 
			<p>1500 East Brambleton Ave.</br>
			Norfolk, VA 23504</br>
			(757) 625-3700</p>
		</div>

	<h3>Other</h3>
		<div><h4>Chipotle Mexican Grill</h4>
		<p>1501 Colley Avenue</br>
			Norfolk VA 23517</br>
			(757) 314-1113</p>
		
		<h4>Sam's Beauty Supply</h4> 
			<p>1501 Colley Ave.</br>
			Norfolk, VA 23517</br>
			(757) 446-8575</p>
		</div>

	<h3>Convenience & Pharmacy</h3>
		<div><h4>7-Eleven</h4>
		<p>1510 Brambleton Ave.</br>
			Norfolk VA 23504</br>
			(757) 640-0002</p>
		
		<h4>7-Eleven</h4> 
			<p>3025 East Virginia Beach Blvd.</br>
			Norfolk, VA 23504</br>
			(757) 627-1071</p>

		<h4>CVS Pharmacy</h4>
		<p>471 N. Military Hwy.</br>
			Norfolk VA 23502</br>
			(757) 459-2503</p>
		
		<h4>CVS Pharmacy</h4> 
			<p>3200 Lafayette Blvd.</br>
			Norfolk, VA 23509</br>
			(757) 852-2603</p>
		
		<h4>Park Avenue Market</h4> 
			<p>1024 Park Avenue</br>
			Norfolk, VA 23504</br>
			(757) 623-2747</p>
		</div>

	<h3>Pizzeria</h3>
		<div><h4>Domino's</h4>
		<p>2807 East Virginia Blvd.</br>
			Norfolk, VA 23504</br>
			(757) 629-0777</p>
		
		<h4>Chanello's</h4> 
			<p>901 West 21st St.</br>
			Norfolk, VA 23504</br>
			(757) 628-8000</p>
		</div>
		<h3>Caribbean</h3>
		<div><h4>MP Island Cafe</h4>
		<p>5957 East Virginia Beach Blvd.</br>
			Norfolk VA 23502</br>
			(757) 466-0220</p>
		
		<h4>Montego Caribbean Grocery & Restaurant</h4> 
			<p>544 Newtown Rd.</br>
			Virginia Beach, VA 23462</br>
			(757) 493-2950</p>
		</div>
</div>
<script src="external/jquery/jquery.js"></script>
<script src="jquery-ui.js"></script>
<script>

$("#accordion").accordion({
    header: "h3",
    active:false,
    collapsible:true,
    heightStyle: "fillspace"

});
// Hover states on the static widgets
$( "#dialog-link, #icons li" ).hover(
	function() {
		$( this ).addClass( "ui-state-hover" );
	},
	function() {
		$( this ).removeClass( "ui-state-hover" );
	}
);
</script>
</body>
</html>