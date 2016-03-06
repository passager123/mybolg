<?php
include('connect.php');
$db="insert into comment(name,content,createtime)values(?,?,?)";
$res=$pdo->prepare($db);
$res->bindparam(1,$name);
$res->bindparam(2,$content);
$res->bindparam(3,$createtime);
$name=$_POST['user'];
$content=$_POST['content'];
$createtime=date("Y-m-d H:i:s");
$res->execute();
echo "留言发布成功！";
echo "发布的时间为:".date("Y-m-d H:i:s");
?>