
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Bèta Gaming</title>  <meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" /> <link href="./css/template.css" rel="stylesheet" type="text/css"> <link href="./css/productengallerij.css" rel="stylesheet" type="text/css"> <link href="./css/dropdown/dropdown.css" media="screen" rel="stylesheet" type="text/css" /> <link href="./css/dropdown/themes/mtv.com/default.ultimate.css" media="screen" rel="stylesheet" type="text/css" /> 
<!--[if IE 7]>
<link href="./css/ie7_specific.css" rel="stylesheet" type="text/css" />

<![endif]-->
<link href="./css/dropdown/themes/mtv.com/default.ultimate.css" media="screen" rel="stylesheet" type="text/css" />
</head>
<body>

<?php
$con = mysql_connect("localhost","webdb1239","7ra9aphu");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("webdb1239", $con);
?>

<div id="center-container">

<?php include("./template/header.php");?>

	<div align="center" id="main-body" class="round-shadow">
	
		<div class="top-shadow"><div></div></div>
			
	   <div class="center-content-shadow">
	   	   
		  	<div id="gallery-box" class="rounded-box wide">			
		   
   			<div class="top"><div></div></div>
   				
      			<div class="content"> 
      			     			
         		<h1>De Top 5!</h1>
         		<p>De populairste producten van dit moment!</p>
				<div id='product-container'>

					<?php
					
					$top5 = mysql_query("SELECT product.id, titel, platform, prijs, afbeelding  FROM product JOIN platform ON product.platform_id = platform.id  ORDER BY verkocht desc LIMIT 5");								
					
					while($row = mysql_fetch_array($top5))
					{
					?>

					<div id="product"><div class='product_foto'>
					<a title='TITEL | PLATFORM' href='PRODUCTLINK'><img src='.<?php echo $row['afbeelding']?>' order='0' width='90'></a></div>
					<a href="BESTELLINK" class="bestelbutton">+ bestellen</a><div class='product_naam'><a href='PRODUCTLINK'> <?php echo $row['titel'] ?></a></div><br />
					<div class='product_console'><?php echo $row['platform'] ?> </div>
					<div class='product_prijs'> <?php echo $row['prijs']?> </div>
					</div>  				
					
					<?php 
					}															
					mysql_close($con);
		
					?> 

				</div>
      			</div>
         		      			      			
   			<div class="bottom"><div></div></div>	
   		
			</div>
			
			<div id="side-box" class="rounded-box">			
		   
   			<div class="top"><div></div></div>
   				
      			<div class="content">
      			<div>
         		<h2>Dagaanbiedingen</h2>
					<h3>PC</h3>
					<div id='product-container'>
					<div class='product_foto aanbieding'>
						<a target='_blank' title='BlazBlue: Calamity Trigger -  Xbox 360' href='http://www.gameoffer.nl'><img alt='BlazBlue: Calamity Trigger -  Xbox 360' class='aanbieding' src='/images_product/thumbs/image_1_1270130958.jpg' alt='BlazBlue: Calamity Trigger' border='0'></a></div>
						<div class='aanbieding-info'><div class="datum">Tot 12:00</div><div class='prijs'>11,95</div></div><div class='clear'></div><div class="aanbieding_naam">BlazBlue: Calamity Trigger<br>Xbox 360</div><br /><a href="/bestel.php?q=add&product=171&aantal=1" class="bestelbutton">+ bestellen</a><hr />
					</div>
					
					
					<h3>Xbox 360</h3>
					<div id='product-container'>
					<div class='product_foto aanbieding'>
						<a target='_blank' href='http://www.blurayoffer.nl' title='Wild Hogs -  Blu-ray'><img alt='Wild Hogs -  Blu-ray' class='aanbieding' src='/images_product/thumbs/image_1_1326105681.jpg' alt='Wild Hogs' border='0'></a></div>
					<div class='aanbieding-info'><div class='datum'>Tot 12:00</div><div class='prijs'>9,95</div></div><div class='clear'></div><div class="aanbieding_naam">Wild Hogs</div><a href="/bestel.php?q=add&product=171&aantal=1" class="bestelbutton">+ bestellen</a>
					</div>
					</div>
         		</div>
         		
      			
      			
   			<div class="bottom"><div></div></div>	
   		
			</div>
			
			<div id="gallery-box" class="rounded-box wide">			
		   
   			<div class="top"><div></div></div>
   			
      			<div class="content">
         		<div>
         		<h1>Binnenkort verkrijgbaar!</h1>
         		
         		<p>Pre-order deze titels nu!</p>
         		<div id='product-container'>
	
         		<div id="product" class="product Avontuur RPG"><div class='product_foto'>
					<a title='Diablo 3 | PC' href='/pc/games/diablo-3'><img src='./images/producten/thumbs/image_1_1320356408.jpg' alt='Diablo 3 | PC' border='0' width='90'></a></div>
					<a href="/bestel.php?q=add&product=1480&aantal=1" class="bestelbutton">+ bestellen</a><div class='product_naam'><a href='/pc/games/diablo-3'>Diablo 3</a></div><br />
					<div class='product_console'>PC</div>
					<div class='product_prijs'>47,95</div>
					</div>

					<div id="product" class="product Actie"><div class='product_foto'>
					<a title='Battlefield 3 | PC' href='/pc/games/battlefield-3'><img src='./images/producten/thumbs/image_1_1306188403.jpg' alt='Battlefield 3 | PC' border='0' width='90'></a></div>
					<a href="/bestel.php?q=add&product=1303&aantal=1" class="bestelbutton">+ bestellen</a><div class='product_naam'><a href='/pc/games/battlefield-3'>Battlefield 3</a></div><br />
					<div class='product_console'>PC</div>
					<div class='product_prijs'>39,95</div>
					</div>

					<div id="product" class="product RPG"><div class='product_foto'>
					<a title='Elder Scrolls V: Skyrim | PC' href='/pc/games/elder-scrolls-v-skyrim'><img src='./images/producten/thumbs/image_1_1311773538.jpg' alt='Elder Scrolls V: Skyrim | PC' border='0' width='90'></a></div>
					<a href="/bestel.php?q=add&product=1370&aantal=1" class="bestelbutton">+ bestellen</a><div class='product_naam'><a href='/pc/games/elder-scrolls-v-skyrim'>Elder Scrolls V: Skyrim</a></div><br />
					<div class='product_console'>PC</div>
					<div class='product_prijs'>38,95</div>
					</div>
	
					<div id="product" class="product Actie"><div class='product_foto'>
					<a title='Batman: Arkham Asylum | PC' href='/pc/games/batman-arkham-asylum'><img src='./images/producten/thumbs/image_1_1244197150.jpg' alt='Batman: Arkham Asylum | PC' border='0' width='90'></a></div>
					<a href="/bestel.php?q=add&product=171&aantal=1" class="bestelbutton">+ bestellen</a><div class='product_naam'><a href='/pc/games/batman-arkham-asylum'>Batman: Arkham Asylum</a></div><br />
					<div class='product_console'>PC</div>
					<div class='product_prijs'>14,95</div>
					</div>

					<div id="product" class="product Actie"><div class='product_foto'>
					<a title='Kane and Lynch 2: Dog Days | PC' href='/pc/games/kane-and-lynch-2-dog-days'><img src='./images/producten/thumbs/image_1_1275427839.jpg' alt='Kane and Lynch 2: Dog Days | PC' border='0' width='90'></a></div>
					<a href="/bestel.php?q=add&product=628&aantal=1" class="bestelbutton">+ bestellen</a><div class='product_naam'><a href='/pc/games/kane-and-lynch-2-dog-days'>Kane and Lynch 2: Dog Days</a></div><br />
					<div class='product_console'>PC</div>
					<div class='product_prijs'>4,95</div>
					</div>	
         		
      			</div>
         		</div>
      			</div>
      			
   			<div class="bottom"><div></div></div>	
   		
			</div>

   	</div>   	
   	<div class="bottom-shadow"><div></div></div>
   	
   </div>
</div>

</body>
</html> 
</body>
</html> 