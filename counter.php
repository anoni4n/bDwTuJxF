<style type="text/css">
	.logo {
		width: 8%;
		height: 8%; 
		margin-bottom: -3px;
	}
</style>
<?php
/*-----------------------[ SETTINGS ]------------------------------*/
$server_settings['title'] = "NWO"; // Server name or brand to display
$server_settings['ip'] = "202.83.122.57"; // localhost for local servers / IP or domain name for VDS/VPS
$server_settings['port'] = "30120"; // basically 30120
/*----------------------------------------------------------------*/
print "<div style='background-color: #121212;'>";
$content = json_decode(file_get_contents("http://".$server_settings['ip'].":".$server_settings['port']."/info.json"), true);
$img_d64 = $content['icon'];
if($content):
    $gta5_players = file_get_contents("http://".$server_settings['ip'].":".$server_settings['port']."/players.json");
  $content = json_decode($gta5_players, true);
  $pl_count = count($content);
  $SRV_STATUS = "<p align='center'><img src='img/group.png' alt='logo' class='logo'> $pl_count Players <br><br> <font style='color: green;'>Online</font>";
  print "";
else:
  $SRV_STATUS = "<font style='color: red;'>Offline</font>";
endif;
print "<p align='center'>$SRV_STATUS</p></div>";
?>