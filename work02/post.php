<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
</head>
<body>
    <h1 align="center">Webboard Sunchild</h1>
    <hr>
    <center> ต้องการดูกระทู้หมายเลข <?php $n = $_GET["id"]; echo $n; ?></center><br>
    <?php 
    if(($n % 2) == 0){
        echo "<center>เป็นกระทู้หมายเลขคู่</center>";
    }
    else{
        echo "<center>เป็นกระทู้หมายเลขคี่</center>";
    }
    ?><br>
    <table style="border: 2px solid black; width: 40%" align="center">
    <tr><td style="background-color: #6CD2FE;" colspan="2" >แสดงความคิดเห็น</td></tr>
    <tr><td><center><textarea name="" id="" cols="60" rows="5"></textarea></center></td></tr>
    <tr><td colspan="2" align="center"><input type="submit" value="ส่งข้อความ"></td></tr>
</table>
<br>
<p align="center"><a href="index.php">กลับไปยังหน้าหลัก</a> </p>
</body>
</html>