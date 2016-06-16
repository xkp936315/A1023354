<?php
class PostOffice
{
public function__construct()
{
	
}

/*	mailfiler()
	{
		$fp = fopen("string.txt", r); 
		$fruit = fgets($fp, 999); // 這個函式會一次讀取一行資料
		fclose($fp); 
	}*/
}




?>


<html>
<head>
	<meta charset="UTF8"/>
</head>

<body>
<?
$fp = fopen("string.txt", "r");
fscanf($fp, "%s %s", $n, $str);
fclose($fp);

echo "$n $str";
?>
</body>

</html>
