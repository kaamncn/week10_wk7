<?php include "errordb.php" ?>
<?php
$stmt = $pdo->prepare("insert into member values(?,?,?,?,?,?)");
$stmt->bindParam(1, $_POST["username"]);
$stmt->bindParam(2, $_POST["password"]);
$stmt->bindParam(3, $_POST["name"]);
$stmt->bindParam(4, $_POST["address"]);
$stmt->bindParam(5, $_POST["mobile"]);
$stmt->bindParam(6, $_POST["email"]);
$stmt->execute();
$username=$pdo->lastInsertId();
?>
<html>

<head>
    <meta charset="UTF-8">
</head>
<body>
    เพิ่ม username : <?=$username?> สำเร็จ
</body>

</html>