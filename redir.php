<?php 
$access_token = 'FKeQE0b5HVYK/TNWp8GDl20GLh9l6hSCT03rTEM84+qCGNvIcj1ONA9+sTcHwSdpPHCUx52qKvZ4NM40OPnsD6de5q0/XL8m8lzKRd/GK+DYddGdYiPKKmjgwmrqjA+Ck8oj9FOIzWj+W185fEPQKgdB04t89/1O/w1cDnyilFU='; 
// Get POST body content 
$content = file_get_contents('php://input'); 
// Parse JSON 
$events = json_decode($content, true); 
// Validate parsed JSON data 
if (!is_null($events['events'])) { 
// Loop through each event 
foreach ($events['events'] as $event) { 
// Reply only when message sent is in 'text' format 
if ($event['type'] == 'message' && $event['message']['type'] == 'text') { 
// Get text sent 
$text = $event['message']['text']; } 
} 
} 
else { 
// Get replyToken 
$text="NO DATA" ; 
} 
// create a new cURL resource 
///$ch = curl_init(); 
// set URL and other appropriate options 
$text="SHOWTRACK---akkarapol";
///curl_setopt($ch, CURLOPT_URL, "http://server1/api1.php?text=".$text); 
///curl_setopt($ch, CURLOPT_HEADER, 0); 
// grab URL and pass it to the browser 
///curl_exec($ch); 
// close cURL resource, and free up system resources 
///curl_close($ch); 
///$page = file_get_contents("https://server1/api1.php?text=".$text);
$arrContextOptions=array(
    "ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ),
);  

$response = file_get_contents("https://server1/api1.php?text=".$text, false, stream_context_create($arrContextOptions));

//echo $response ;
?>
