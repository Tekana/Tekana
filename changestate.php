<?php 
if(isset($_POST['clicked'])){
	if($_POST['clicked']  == 'true' ){
		exec("sudo python /var/www/html/relay_on.py " . $_POST['relayId']);
		echo "true";
	} else {
		exec("sudo python /var/www/html/relay_off.py " . $_POST['relayId']);
		echo "false";
	}
}
