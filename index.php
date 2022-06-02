<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coder Zizo test php</title>
    <link rel="icon" href="app.png">
    

</head>
<body dir="rtl">
  


<form method="GET">
<div>
    <label>أسم : </label> <br>
    <input type="text" name="name" required/>
</div>
<div>
    <label>إيميل : </label><br>
    <input type="email" name="email" required/>
</div>
<div>
    <label>موضوع : </label><br>
    <input type="text" name="subject" required/>
</div>

<div>
    <label>رسالة : </label><br>
    <input type="text" name="message" required/>
</div>

<button type="submit" name="send">ارسال رسالة</button>
</form>

<?php 
if(isset($_GET['send'])){
echo "الأسم : ".$_GET['name'] . "<br>";
echo "إيميل : ".$_GET['email'] . "<br>";
echo "موضوع : ".$_GET['subject'] . "<br>";
echo "رسالة : ".$_GET['message'] . "<br>";
}
?>

</body>
</html>