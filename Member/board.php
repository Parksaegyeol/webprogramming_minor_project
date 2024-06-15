<?php
session_start();




$db=mysqli_connect("localhost", "root", "1234");
$query="CREATE DATABASE IF NOT EXISTS cafeteria";

mysqli_query($db, $query);

mysqli_select_db($db, 'cafeteria');



$query="CREATE TABLE IF NOT EXISTS menu(
    
    menu_id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
    menu_name VARCHAR(255) NOT NULL,
    good SMALLINT UNSIGNED NOT NULL DEFAULT 0,
    bad SMALLINT UNSIGNED NOT NULL DEFAULT 0,
    
    PRIMARY KEY(menu_id)
    
     
    )ENGINE=MyISAM";
    

mysqli_query($db, $query);
//cafeteria 데이터베이스 만들고 menu 테이블 만들었음! 
// ->이테이블은 태이블이름이랑 순서가 고정이고 좋아요랑 싫어요 수만 바뀜 

$query="SELECT *FROM menu";
$result=mysqli_query($db, $query);
$row=mysqli_fetch_array($result);


if(!isset($row)){

 //여기자리에 학교 메뉴들 조사한다음 넣을꺼임
$query="INSERT INTO menu(menu_name, good, bad)
 VALUES('고구마돈까스', 0, 0),
 ('국물라볶이 세트', 0, 0),
 ('국물라볶이 세트+치즈', 0, 0),
 ('국물라볶이', 0, 0),
 ('국물라볶이+치즈', 0, 0),
 ('김치말이국수', 0, 0),
 ('냉모밀', 0, 0),
 ('돈까스 냉모밀정식', 0, 0),
 ('떡갈비 오므라이스', 0, 0),
 ('떡갈비+물냉면', 0, 0),
 ('떡갈비+비빔냉면', 0, 0),
 ('떡만두국', 0, 0),
 ('물냉면', 0, 0),
 ('비빔냉면', 0, 0),
 ('새우튀김 알밥', 0, 0),
 ('세종대왕돈까스', 0, 0),
 ('소금구이덮밥', 0, 0),
 ('스팸치즈 순두부찌개', 0, 0),
 ('신라면', 0, 0),
 ('신라면+치즈', 0, 0),
 ('오므라이스', 0, 0),
 ('육회비빔밥', 0, 0),
 ('제육 비빔밥', 0, 0),
 ('제육덮밥', 0, 0),
 ('존슨치즈부대찌개', 0, 0),
 ('참치마요 비빔밥', 0, 0),
 ('피카츄 오므라이스', 0, 0),
 ('함박 카레덮밥', 0, 0),
 ('해쉬브라운 오므라이스', 0, 0)

";



mysqli_query($db, $query);


}










// $query="SELECT *FROM menu";
// $result=mysqli_query($db, $query);


/*while($row=mysqli_fetch_array($result)){
    echo $row['menu_name'];
    echo ' 좋아요수 : ';
    echo $row['good'];
 echo '</br>';
    
}

*/






?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">






</head>
<body>


<!-- 여기서 최초 result 초기화  -->
<?php include 'paging.php';?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</br>


<h1 class="text-center" ><a href="">Sejong University Cafeteria Review</a></h1>

</br>


<!-- 검색창 구현 (검색한 내용 search_process로 보내버림)      -->
<!-- 여기서 두번째로 result 초기화(선택)  -->

<form class="d-flex" role="search" method="get" action="index_login.php?search=">
    <input class="form-control me-2" style="border:solid; border-color:dodgerblue; text-align:center;"type="search" placeholder="검색 기능을 활용하세요!" aria-label="Serach" name="search">
    <button class="btn btn-outline-success" style="border:solid; border-color:dodgerblue;" type="submit">Search</button>
</form>




<?php
// 검색한 내역이 있을때 db에서 갖고오는 값들인 result를 search에 맞게 바꿔줌
if(isset($_GET['search'])){

    $search=$_GET['search'];

$db=mysqli_connect("localhost", "root", "1234");
mysqli_select_db($db, 'cafeteria');

$sql="SELECT*FROM menu WHERE menu_name='$search'";

$result=mysqli_query($db, $sql);

}



?>













</br>


<table class="table table-hover table-striped text-center" style="border: 1px solid;">
<thead>
    <tr>
        <th>번호</th>
        <th>메뉴</th>
        <th>좋아요</th>
        <th>싫어요</th>
</tr>
</thead>







<tbody>

<?php 





while($row=mysqli_fetch_array($result)){

    

?>
<tr>
    <td width="50" style="text-align:center"><?php echo $row['menu_id']?>
</td>
    <td width="400" style="text-align:center">
<!-- GET방식으로 메뉴 아이디 전송 -->
    <a href="board_view.php?menu_id=<?=$row['menu_id']?>"><?php echo $row['menu_name'];  ?></a>

</td>

<td width="50" style="text-align:center"><?php echo $row['good']; ?>
</td>
<td width="200" style="text-align:center"><?php echo $row['bad']; ?>
</td>


</tr>


<?php
};
?>

</tbody>



</table>



<?php 

$rs_str=my_pagination($total, $limit, $page_limit, $page);
echo $rs_str;

?>




<!-- 여기밑으로는 글페이지 숫자임 -->

<hr>








</body>
</html>