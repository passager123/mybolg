<?php
header ('content-type:text/html;charset=utf8');
$dbms='mysql';
$host='localhost';
$dbname='test';
$user='root';
$pwd='';
$dsn="$dbms:host=$host;dbname=$dbname";
try {$pdo= new PDO($dsn,$user,$pwd);
	echo '数据库连接成功';
} catch (Exception $e) {echo $e->getMessage();
	
}
echo '<br>';
$pdo->query("set names utf8");
?>