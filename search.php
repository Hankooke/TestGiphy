
<!DOCTYPE html>
<html lang="en">
<head>
	<title>TestGiphy</title>
</head>
<body>
<form action="#" method="GET">
	<input type="text" name="name" >
     <input name="myActionName" type="submit" value="Search" />
<?php
require "config.php";
$f =$_GET['name'];
if($f!=""){
$url = "http://api.giphy.com/v1/gifs/search?q=$f&api_key=$API&limit=1";
$obr = ( json_decode(file_get_contents($url),true));
if($obr['data'][0]['id']!=""){
	echo "<br>";
?>
<img style="-webkit-user-select: none;margin: auto;background-color: hsl(0, 0%, 90%);transition: background-color 300ms;" src="https://i.giphy.com/media/<?php echo($obr['data'][0]['id']); ?>/giphy.gif">
<?php
}
else{
	echo "<br>";
echo "Nothing was found, please retry the search";
}
}

?>
</form>
</body>
</html>



