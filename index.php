<html>
<head>  
<title>My App</title>
</head>
<body>
  <h1> Welcome to my App</h1>
<?php
$url='http://flask-service/get_detials';
echo "$url";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    $content = curl_exec ($ch);
    echo "$content";
    $content = json_decode($content);
    $res=curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close ($ch); 
    
echo "<h1>$content</h1>";
?>
</body>
</html>
