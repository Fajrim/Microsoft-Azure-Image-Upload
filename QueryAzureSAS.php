<?php
function isoDate($timestamp = null) {
  $tz = @date_default_timezone_get();
  @date_default_timezone_set('UTC');
  
  if (is_null($timestamp)) {
      $timestamp = time();
  }
      
  $returnValue = str_replace('+00:00', '.0000000Z', @date('c', $timestamp));
  @date_default_timezone_set($tz);
  return $returnValue;
}

// (1) Prepare your data ready
$accountName = ''; // TODO:
$accountKey = "";  // TODO:
$baseUrl = "";     // TODO:
$resourceName = "/".$_GET["imageName"];
$path = '/scannedimages'; 
$start = isoDate(time() - 10); 	   // 10 seconds before
$expires = isoDate(time() + 1200); // 20 miniteus later

// (2) generate signature
$strToSign = array();
$strToSign[] = 'w';
$strToSign[] = $start;
$strToSign[] = $expires;
$strToSign[] = "/$accountName$path$resourceName"; 
$strToSign[] = ''; 
$sig = base64_encode(hash_hmac('sha256', implode("\n", $strToSign), base64_decode($accountKey), true)); 
 
// (3) generate SAS the query 
$params = array();
$params[] = 'sp=w'; 
$params[] = 'st=' . urlencode($start);
$params[] = 'se=' . urlencode($expires);
$params[] = 'sr=b'; 
$params[] = 'sig=' . urlencode($sig);
$url = "$baseUrl$resourceName?" . implode('&', $params);
echo $url;
?>
