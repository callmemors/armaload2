<?php
	include('config.php');

	if(!isset($_GET["steamid"])){
		$uid = $default_steam64;
	} else {
		$uid = $_GET["steamid"];
	}

	function convertCommunityIdToSteamId($communityId) {
		$steamId1  = substr($communityId, -1) % 2;
		$steamId2a = intval(substr($communityId, 0, 4)) - 7656;
		$steamId2b = substr($communityId, 4) - 1197960265728;
		$steamId2b = $steamId2b - $steamId1;

		return "STEAM_0:$steamId1:" . (($steamId2a + $steamId2b) / 2);
	}

	$url = "http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=" . $SteamAPIKey . "&steamids=" . $uid;
	$json = file_get_contents($url);
	$table2 = json_decode($json, true);
	$table = $table2["response"]["players"][0];

	$playername = $table['personaname'];
	$img = '<img src="'.$table['avatarfull'].'" width="184px" height="184px"></img>';
	
	if(!isset($_GET['mapname'])){
		$mapname = $default_map;
	} else {
		$mapname = $_GET['mapname'];
	}
		
	if(file_exists('maps/'.$mapname.'.png')) {
		$map_image = 'maps/'.$mapname.'.png';
	} elseif(file_exists('maps/'.$mapname.'.jpg')) {
		$map_image = 'maps/'.$mapname.'.jpg';
	} else {
		$map_image = 'http://image.www.gametracker.com/images/maps/160x120/garrysmod/'.$mapname.'.jpg';
	}

	if($music_enable) {
		$dir = 'music';
		
		$music = glob($dir.'/*.ogg');
		$music = array_merge($music, $music_files); 
		
		foreach($music as $file) {
			$files[] = $file;
		}
		
		$n = array_rand($files);
		$play = $files[$n];
	}

	if($background_slideshow) {
		$dir = 'backgrounds';
		
		$backgrounds = glob($dir.'/*.*');
		$backgrounds = array_merge($backgrounds, $background_images);
		
		foreach($backgrounds as $image) {
			$images .= "<img src='".$image."' width='100%' height='100%' />";
		}
	}
	
	$tipsBox = '';
	$tipStyle = '';
	
	$tipCount = 1;
	foreach($tips as $tip){
		if($tipCount != 1){
			$tipStyle = 'display: none;';
		}
		
		$tipsBox .= '
			<span id="tip'.$tipCount.'" style="'.$tipStyle.'">'.$tip.'</span>
		';
		
		$tipCount++;
	}
?>
