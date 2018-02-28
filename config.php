<?php
	/**
	Right, so, Documentation. This is a clone of Arma Load off of Scriptfodder, not going to bother with a URL, you can find it. This was cloned using purely my eye and 0 of Wong's code.
	I've provided basically every configuration ever outside of changing the fonts.
	To use this as a loading screen, use sv_loadingurl http://YOURURLHERE.net/index.php?steamid=%s&mapname=%m
	If anyone knows the exact fonts used, feel free to contact me, other than that, I'll use the ones that I already have put in.
	*/
	
	/**
		Steam API key(http://steamcommunity.com/dev/apikey)
	*/
	$SteamAPIKey = "";
	
	/** 
		Default Steam64 ID to use if you are viewing this in the browser, or your sv_loadingurl is misconfigured (https://steamid.io/)
	*/
	$default_steam64 = "76561198065018504";
	
	/** 
		Default map, self explantory, follows the option above's standards
	*/
	$default_map = "dm_richland";
	
	/**
		Server name
	*/
	$name = "Armor Load";
	
	/** 
	Name Color in the header
	*/
	$headercolor = "#CAB542";
	
	/**
	"You are joining" font color
	*/
	$youarejoiningfontcolor = "#FFF";
	
	/** 
	Gamemode Font Color
	*/
	$gamemodefontcolor = "#FFF";
	
	/**
	The box that says "User"s font color
	*/
	$userfontcolor = "#FFF";
	
	/** 
	The "Welcome to Server Name" font color
	*/
	$welcomenamecolor = "#FFF";
	
	/**
	Steam Name Font Color
	*/
	$steamnamecolor = "#FFF";
	
	/** 
	The font color of the Steam64ID Line
	*/
	$steamidcolor = "darkgray";
	
	/** 
	The "We currently have a max player limit of ___" font color
	*/
	$maxplayerscolor = "darkgray";
	
	/**
	Color of the name under the player's steam photo
	*/
	$steamphotonamecolor = "#FFF";
	
	/** 
	Font color for the entire download box
	*/
	$downloadingtextcolor = "#FFF";
	
	/** 
	The "We are currently playing on the map ___________" font color
	*/
	$maptextcolor = "darkgray";
	
	/** 
	The tip bar font color at the bottom
	*/
	$tipbarfontcolor = "#FFF";
	
	/**
		Background image if the option below is false
	*/
	$bg_img = "http://primetimeservers.us/armorload/backgrounds/601455.jpg";
	
	/**
		Enable/disable background image switching - true/false
	*/	
	$background_slideshow = false;
	
	/** 
		If the option above is true, use the following images:
	*/
	$background_images = array(
		
	//	"link/to/image3.png",
	//	"link/to/image4.jpg",
	);
	
	/** 
		The interval of how fast to switch between background images. 2000 = 2 seconds
	*/
	$background_interval = 8000;
	
	/**
		Bottom tips
	*/
	$tips = array(
		"This is some scrolling text and soon it will scroll away and move place for more!",
		"Here is some more awesome text, as you can see this will scroll too",
		"You thought you'd escape me?!?!??"
	);
	
	/** 
		The interval of how fast to switch between tips. 4000 = 4 seconds
	*/
	$tip_interval = 4000;
	
	/**
		Music
	*/
	$music_enable = true;
	
	/** 
		Music array, upon loading it it will randomly choose one of these songs:
	*/
	$music_files = array(
		"http://primetimeservers.us/eormusic/traitor/headshot.mp3",
	//	"path/to/song2.wav",
	//	"path/to/song3.ogg" // Ogg is the recommended filetype for music in Garry's Mod 13.
	);
	
	$music_volume = 0.9; // 1 is loud as hell, try to keep it low
	$music_loop = true; // Do you want the music to loop?

	$webpage_title = "Armor Load"; //Added this cause I was bored, you can change the web page title with this, for those people who show this off on their website.
	
	$gamemode = "DarkRP"; //This is only on your web site and does not need to be replaced by the gamemode that you're running. It will do that itself in the Gmod client.
	
	
?>
