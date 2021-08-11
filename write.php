<html>
<head>
 <META HTTP-EQUIV="Refresh" CONTENT="0;URL=s">
</head>
<body>
<?php
if($_GET['id']==1){
$outputWebBug = 'log/orders.csv';
if($_GET['name'] == 'clear'){
  @ $fileHandle = fopen($outputWebBug, "w");
  if ($fileHandle)
  {
    $string ='"PD Name","Price","%","%Cut"'."\n";
     $write = fputs($fileHandle, $string);
    @ fclose($fileHandle);
  }
	}
else{
  @ $fileHandle = fopen($outputWebBug, "a+");
  if ($fileHandle)
  {
    $string ='"'.$_GET['name'].'","'
	      .$_GET['value'].'","'
	      .$_GET['per'].'% Cut","'
	      .$_GET['value']*$_GET['per']/100 .'","'
	      .date("D dS M,Y h:i a").'"' ."\n";
     $write = fputs($fileHandle, $string);
    @ fclose($fileHandle);
  }

  $outputWebBug = 'log/orders full.csv';
  @ $fileHandle = fopen($outputWebBug, "a+");
  if ($fileHandle)
  {
     $write = fputs($fileHandle, $string);
    @ fclose($fileHandle);
  }
}}
else{
$outputWebBug = 'log/'.$_GET['id'].'.csv';
if($_GET['name'] == 'clear'){
  @ $fileHandle = fopen($outputWebBug, "w");
  if ($fileHandle)
  {
    $string ='"Title","Price","%","%Cut"'."\n";
     $write = fputs($fileHandle, $string);
    @ fclose($fileHandle);
  }
	}
else{
  @ $fileHandle = fopen($outputWebBug, "a+");
  if ($fileHandle)
  {
    $string ='"'.$_GET['name'].'","'
	      .$_GET['value'].'","'
	      .$_GET['per'].'% Cut","'
	      .$_GET['value']*$_GET['per']/100 .'","'
	      .date("D dS M,Y h:i a").'"' ."\n";
     $write = fputs($fileHandle, $string);
    @ fclose($fileHandle);
  }

  $outputWebBug = 'log/'.$_GET['id'].'_full.csv';
  @ $fileHandle = fopen($outputWebBug, "a+");
  if ($fileHandle)
  {
     $write = fputs($fileHandle, $string);
    @ fclose($fileHandle);
  }
}
}

?>
</body>
