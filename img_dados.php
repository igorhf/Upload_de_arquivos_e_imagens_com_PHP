<?php

include("bd.inc");

$arquivo=$_FILES["arquivo"]["name"];
$tmp=$_FILES["arquivo"]["tmp_name"];
$dir="uploud/";

move_uploaded_file($arquivo, $dir);
$insert="insert into arquivo(arquivo,data)value('$arquivo',NOW())";
$arq=mysqli_query($con,$insert);
if ($arq) {
	print("ok");
	}
else
	print("erro");
	
mysqli_close($con);
?>