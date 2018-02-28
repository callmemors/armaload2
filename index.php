<?php
	require_once('inc/php.php');

?>

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="style.php">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<title><?php echo $webpage_title; ?></title>
		<?php
			include('inc/javascript.php');
		?>
	</head>
	<body class="bg" style="<?php echo $bg_img != '' && !$background_slideshow ? 'background: url('.$bg_img.'); background-size: 100%; background-attachment: fixed;' : '';?>">

		<?php if($music_enable) { ?>
			<audio id="music" autoplay='1' <?php echo $music_loop ? 'loop' : ''; ?> src='<?php echo $play; ?>'></audio>
		<?php } ?>
		
		<?php if($background_slideshow) { ?>
			<div class="slideshow">
				<?php echo $images; ?>
			</div>
		<?php } ?>
		
		<div class="header">
			You are joining <span><?php echo $name; ?></span><br>
			<div class="subtext">We are currently playing on the map <?php echo $mapname; ?></div>
		</div>
		
		<div class="wrapper">		
			<div class="container">		
				<div class="row">
					<div class="col-xs-7">
						<div class="gamemode">
							<?php echo $gamemode; ?><br>
						</div>
						
						<div class="welcome">
							<span>Welcome to <?php echo $name; ?></span></br>
							We currently have a max player limit of <span class="maxplayers"><font color="<?php echo $maxplayerscolor; ?>">0</font></span>
						</div>
						
						<div class="mapbox">
							<img src= "<?php echo $map_image;?>" width="100%" height="100%"></img>
						</div>
					</div>
					
					<div class="col-xs-5">
						<div class="user">
							User<br>
						</div>
						
						<div class="steambox">
							<span>Welcome <?php echo $playername;?></span><br>
							Your Steam64 ID is <? echo $uid;?>
						</div>
						
						<div class="userimagebox">
							<div class = "images"><center><?php echo $img; ?><br/>
							<?php echo $playername;?></center>
							</div>
						</div>
						
						<div class="downloadingtext">
							<span>Connecting to the server...</span><br>
							<span class="downloading">
								<span class="fileDL">No files downloading</span> [ <span class="percent">0</span>% ]<br>
								Files remaining: <span class="needed">0</span> / <span class="total">0</span>
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="tipBar">
			<?php echo $tipsBox; ?>
		</div>
	</body>
</html>