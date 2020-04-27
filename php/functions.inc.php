<?php 
require 'config.inc.php';
function connect_db($__mplayer){
	$conn = mysqli_connect($__mplayer["db_server"], $__mplayer["db_user"], $__mplayer["db_pass"], $__mplayer["db_name"]);

}








 ?>