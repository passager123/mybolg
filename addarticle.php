<?php
include('connect.php');
$db="insert into article(name,title,content,createtime)values(?,?,?,?)";
$res=$pdo->prepare($db);
$res->bindparam(1,$name);
$res->bindparam(2,$title);
$res->bindparam(3,$content);
$res->bindparam(4,$createtime);
$name=$_POST['user'];
$title=$_POST['title'];
$content=$_POST['content'];
$createtime=date("Y-m-d H:i:s");
$res->execute();
echo "发布成功！";
echo "发布的时间为:".date("Y-m-d H:i:s");
?>