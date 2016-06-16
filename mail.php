<html>
<head>
<title>寄送email</title>
<meta charset="utf8">
</head>
<body>
<form method="post" action="sendmail.php">
  <div>收件人:<input type="text" name="to" size="50">
  </div><br>
  
  <div>寄件人:<input type="text" name="from" size="50"></div>
  <br>
  
  <div>信件內容:<br>
    <textarea rows="10" cols="72" name="body"></textarea>
  </div>
  <input type="submit" value="立即寄出">
  <input type="reset" value="清除重寫">
</form>
</body>
</html>

