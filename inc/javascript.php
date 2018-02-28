<script>

		<?php if ($music_enable){ ?>
			function setVolume()
			{
				music = document.getElementById("music");

				music.volume=<?php echo $music_volume; ?>;
			}
			
			$(function () {
				setVolume();
			});
		<?php } ?>

		function GameDetails( servername, serverurl, mapname, maxplayers, steamid, gamemode ){
			var servername 		= servername
			var gamemode		= gamemode
			var maxplayers		= maxplayers
			
			//$(".servername").text(servername);
			$(".gamemode").text(gamemode);
			$(".maxplayers").text(maxplayers);
		}

		function SetStatusChanged( status ){
			var status		= status;
			$(".status").text(status);
		}
		
		function SetFilesTotal( total ){
			var total		= total;
			document.getElementById(".total").innerHTML=total;
		}
		
		function SetFilesNeeded( needed ){
			var needed		= needed;
			$(".needed").text(needed);
			
			
			if (needed == "0") {
				$(".downloading").html("No files downloading");
			}
			
		}
		
		function DownloadingFile( fileName ){
			var dfile		= fileName;
			$(".fileDL").text(dfile);

			var total = $('.total').text();
			var needed = $('.needed').text();
			
			CalcPercentage(parseInt(total), parseInt(needed));
		}
		
		function CalcPercentage(total, needed){
			var perc=Math.round((needed/total)*100);
			var percent = 100-perc;

			$(".percent").text(percent);
		}

		<?php if($background_slideshow){ ?>
		$(function () {
			$('.slideshow img:gt(0)').hide();

			setInterval(function () {
				$('.slideshow :first-child').hide()
				 .next('img')
				 .show()
				 .end()
				 .appendTo('.slideshow');
			}, <?php echo $background_interval; ?>);
		});
		<?php } ?>
		
		$(function () {
			$('.tipBar span:gt(0)').hide();

			setInterval(function () {
				$('.tipBar :first-child').hide()
				 .next('span')
				 .show()
				 .end()
				 .appendTo('.tipBar');
			}, <?php echo $tip_interval; ?>);
		});
</script>
