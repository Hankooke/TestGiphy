
<form action="#" method="POST">
	<input type="textarea" name="name" >
     <input name="myActionName" type="submit" value="Выполнить" />
</form>
<?php
$API = 'jYOX1nmRPOIKojcR9G56oCO7gBbsjKSM';
$f = $_POST["name"];
if($f!=""){
$url = "http://api.giphy.com/v1/gifs/search?q=$f&api_key=$API&limit=1";
$obr = ( json_decode(file_get_contents($url),true));
if($obr['data'][0]['id']!=""){
?>
<img style="-webkit-user-select: none;margin: auto;background-color: hsl(0, 0%, 90%);transition: background-color 300ms;" src="https://i.giphy.com/media/<?php echo($obr['data'][0]['id']); ?>/giphy.gif">
<?php
}
else{
echo "Sore I can`t not find what you need";
}
}
else{
	echo"Write something";
}
?>