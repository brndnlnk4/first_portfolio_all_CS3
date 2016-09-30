<!DOCTYPE html>
<html lang="en">
<!---////////////////////////////////////////////////////////////////////////////
I, BRANDON OSUJI, DESIGNED AND DEVELOPED THIS WEBSITE BY MYSELF FOR MYSELF.
IT TOOK ME DAYS AND HOURS SO PLEASE DON'T STEAL WITHOUT CONSENTUAL AGREEMENT ON MY PART
///////////////////////////////////////////////////////////////////////////////////
--->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="content-type" content="text/html" />
	<meta http-equiv="content-type" content="cache" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="BrandonOsuji" />	
	<meta name="robots" content="INDEX,FOLLOW" />
	<meta name="keywords" content=" " />
	<meta name="description" content=" " />
<title>Home</title>
<?php $a = 'sLorem ipsum dolor sit amet, consectetuer adipiscing elit. Etiam porta porttitor magna. Nunc urna. Vestibulum augue. Maecenas ipsum elit, rutrum id, iaculis ac, dictum ac, eros. Phasellus elit. Vestibulum semper cursus risus. Nunc consectetuer malesuada pede. Etiam ante'; 
		define('DT',$a);
?>
<link rel='icon' href='css/pics/icon.ico' >
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/custom.css" rel="stylesheet">
 </head>
  <body>
<?//████████████████████████████████████████████████████████████████████████
//░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░
//░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░			
////////////////////////███████///██////██///████████///////////////////////	
////////////////////////██///██///██////██///██////██///////////////////////			
////////////////////////███████///████████///████████///////////////////////			
////////////////////////██ ///////██////██///██/////////////////////////////			
////////////////////////██////////██////██///██/////////////////////////////
//░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░
//░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░
//██████████████████████████████████████████████████████████████████████████?>
  <?// HEADER W/ NAVIGATION BAR\\?>
  <?// HEADER W/ NAVIGATION BAR\\?>
 <div class='mainWrapper' style=''>
   <header class="jumbotron" style=''>    
		<?php require_once("homeHdr.php");?>
   </header>
		<?/// DIVIDER \\\\?>
		<?php include("div.php"); ?>
			
			<?// CONTENT 1 \\?>
			<?php require_once("cont1.php"); ?>
		
		<?/// DIVIDER \\\\?>
		<?php include("div2.php"); ?>

			<?// CONTENT 2 \\?>
			<?php require_once("cont2.php"); ?>
	
		<?/// DIVIDER \\\\?>
		<?php include("div2.php"); ?>

			<?// CONTENT 3 \\?>
			<?php require_once("cont3.php"); ?>
	   
	 </div> <?//END MAINWRPPR \\?>
	 
		<div class='footer'>
			<div class='page-footer'>
				<p align='center' class='contact'>
				 <a type='button' href='#'>FOOTER</a> 
				 <a type='button' href='#'>FOOTER</a> 
				 <a type='button' href='#'>FOOTER</a> 
				 <a type='button' href='#'>FOOTER</a> 
				</p>
			   <?//BOTTOM FOOTER XTRA INFO\\?>
			 <?=DT?>
			</div>
		</div>
 </body>
<?php //////////////////////////////////////////////////////////////////////
//██████████████████████████████████████████████████████████████████████████
//░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░ 			
////////////////////////██████████//█████████///////////////////////////////			
////////////////////////////██//////██//////////////////////////////////////			
////////////////////////////██////////████//////////////////////////////////			
////////////////////////////██ ///////////██////////////////////////////////			
////////////////////////██████//////████████////////////////////////////////
/*************************/require("js.php");/*****************************/
//░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░
//██████████████████████████████████████████████████████████████████████████
///////////////////////////////////////////////////////////////////////////?>
 
 </html>