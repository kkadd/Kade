<?php
    session_start();
    if(!isset($_SESSION['id'])){
        header("location:index.php");
        die();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1 align="center">Webboard Sunchild</h1>
    <hr>
    <table style="border: 2px solid black; width: 40%" align="center">
    <tr><td colspan="2" ><?php echo "ผู้ใช้ : ".$_SESSION['username']; ?></td></tr>
    <tr><td><p>หมวดหมู่ :
            <td><select name="หมวดหมู่">
                <option value="--All--">-- ทั้งหมด --</option>
                <option value="เรื่องทั่วไป">เรื่องทั่วไป</option>
                <option value="เรื่องเรียน">เรื่องเรียน</option>
            </select></td>
        </p></td></tr>
    <tr><td>หัวข้อ : </td><td> <input type="text" name="หัวข้อ" size="30"></td></tr>
    <tr><td>เนื้อหา : </td><td><textarea name="" id="" cols="30" rows="10"></textarea></td></tr>
    <tr><td colspan="2" align="center"><input type="submit" value="บันทึกข้อความ"></td></tr>
</table>
</body>
</html>