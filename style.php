<?php header("Content-type: text/css");?>
<?php require_once('config.php');?>


.wrapper {
	margin-top: 170px;
}

.slideshow{
    position: absolute;
    width: 100%;
    height: 100%;
	z-index: 0;
}

.slideshow img{
    position: absolute;
    width: 100%;
    height: 100%;
    z-index:-1;
}

.header {
	position: relative; 
	z-index: 1;
	width: 100%;
	height: 50px;
	background: rgba(0, 0, 0, 0.8);
	color: <?php echo $youarejoiningfontcolor; ?>;
	font-size: 20px;
	letter-spacing: 1px;
	word-spacing: 3px;
	padding: 5px !important;
	padding-bottom: 55px !important;
	text-transform: uppercase;
	font-family: Bebas;
}

.header span {
	color: <?php echo $headercolor; ?>;
		letter-spacing: 1px;
	word-spacing: 3px;
}

.header > .subtext {
	color: <?php echo $maptextcolor; ?>;
	font-size: 15px;
	text-transform: none !important;
	font-family: bfhud;
} 

.gamemode{
	height: 21px;
	/*width: 650px;*/
	background: rgba(0, 0, 0, 0.8);
	z-index: 2;
	left: 408px;
	color: <?php echo $gamemodefontcolor; ?>;
	text-transform: uppercase;
	font-family: Bebas;
	padding-left: 2px !important;
	font-size: 13px;
	margin-bottom: 12px;
}
.welcome{
	height: 50px;
	/*width: 650px;*/
	background: rgba(0, 0, 0, 0.8);
	z-index: 2;
	font-family: bfhud;
	padding-left: 2px !important;
	font-size: 15px;
	color: <?php echo $maxplayerscolor; ?>;
	margin-bottom: 12px;
}

.welcome span {
	font-size: 16px;
	font-family: Bebas;
	color: <?php echo $welcomenamecolor; ?>;
	text-transform: uppercase;
}

.user {
	height: 21px;
	/*width: 450px;*/
	background: rgba(0, 0, 0, 0.8);
	z-index: 2;
	color: <?php echo $userfontcolor; ?>;
	text-transform: uppercase;
	font-family: Bebas;
	padding-left: 2px !important;
	font-size: 13px;
	margin-bottom: 12px;
}

.steambox{
	height: 50px;
	background: rgba(0, 0, 0, 0.8);
	z-index: 2;
	color: <? echo $steamidcolor; ?>;
	letter-spacing: 1px;
	font-family: bfhud;
	padding-left: 2px !important;
	font-size: 15px;
	margin-bottom: 12px;
}

.steambox span {
	font-size: 16px;
	font-family: Bebas;
	color: <? echo $steamnamecolor; ?>;
}


.mapbox{
	height: 336px;
	background: rgba(0, 0, 0, 0.8);
	z-index: 2;
	padding: 5px;
}

.userimagebox{
	height: 260px;
	background: rgba(0, 0, 0, 0.8);
	z-index: 2;
	margin-bottom: 12px;
}

.images{
	margin: 50%;
    width: 450px;
	font-size: 25px;
	color: <? echo $steamphotonamecolor; ?>;
	font-family: bfhud;
		letter-spacing: 1px;
	word-spacing: 1px;
}

.downloadingtext{
	min-height: 21px;
	height: auto;
	background: rgba(0, 0, 0, 0.8);
	z-index: 2;
	color: <?php echo $downloadingtextcolor; ?>;
	font-family: bfhud;
	letter-spacing: 1px;
	word-spacing: 1px;
	padding-left: 2px !important;
	font-size: 15px;
}

.maxplayers {
	display: inline-block;
	
	font-size: 12px !important;
}

.tipBar {
	position: fixed;
	width: 100%;
	height: 50px;
	color: <?php echo $tipbarfontcolor;?>;
	font-family: bfhud;
	background: rgba(0, 0, 0, 0.8);
	bottom: 0px;
	padding-top: 12px;
	padding-left: 5px;
	font-size: 17px;
}

