<?php
$sZip = $_GET['zip'];
$url = "https://www.zipcodeapi.com/rest/lPMf5jmnBdclCZWkQwlFPJO6HkolG4N1TzgZSDnuRAPtzLOqi957STdzeBVVFIWz/info.json/" . $sZip;



$ch = curl_init();
	$timeout = 5;
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
	$data = curl_exec($ch);
  
  $http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
  
  
	curl_close($ch);
  


//Close the cURL resource, and free system resources
if ($http_status == 404){
  echo "false";
}else{
  echo "true";
}
?>