<?php 
exec("python /var/www/html/firstcheck.py " ,$output);
echo json_encode($output); 
?>