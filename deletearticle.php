<?php 
include("connect.php");
$id=$_GET['id'];
$res=$pdo->prepare("delete from article where id=$id");
$res->execute();
echo "删除成功";
?>