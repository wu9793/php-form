<?php

include_once "../db.php";

$id=$_GET['id'];
$file=find('files',$id)['name'];
// 刪紀錄
del('files',$id);
// 刪檔名
unlink('../imgs/'.$file);

header("location:../manage.php");