<html>
<head>  
<title>My App</title>
</head>
<body>
  <h1> Welcome to my App</h1>
 <ul>
<?php
$json=file_get_contents('http://flaskApp/get_detials');
$obj=json_decode($json)
$products=$obj
foreach($products as $product) {
 echo "<li>$product</li>";
}
?>
</ul>
</body>
</html>
