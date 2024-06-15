<?php

session_start();


// echo "좋아요 처리 페이지 들어왔음!";
// echo '</br>';

//좋아요 버튼 눌렀을떄 db안에 좋아요 숫자 증가시키는 과정 


$db=mysqli_connect("localhost", "root", "1234");


mysqli_select_db($db, 'cafeteria');


$menu_id=$_SESSION['menu_id'];
// echo $menu_id;
// echo '</br>';

$query="SELECT*FROM menu WHERE menu_id=$menu_id";
$result=mysqli_query($db, $query);
$row=mysqli_fetch_array($result);

$good=$row['good'];
$good=$good+1;
// echo $good;


$query ="UPDATE menu SET good=$good WHERE menu_id=$menu_id";

mysqli_query($db, $query);


header("location:index_login.php");




?>

