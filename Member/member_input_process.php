
<?php include 'inc_header.php'; ?>

<?php

//회원가입 폼에서 넘어온 데이터들 db에 넣고 게시판으로 넘어가게 하는 기능

$db=mysqli_connect("localhost", "root", "1234");

mysqli_select_db($db,'memsite');


$profile_src="images/{$_POST['profile']}";
// echo "<img width=\"60%\" height=\"60%\"src=\"$profile_src\">";  //이거 zip code 안에 넣자





$id=$_POST['id'];
$password=$_POST['password'];
$email=$_POST['email'];
$profile=$profile_src;




$query = "INSERT INTO member
(id, password, email, zipcod)
VALUES('{$id}', '{$password}', '{$email}', '{$profile}')";
mysqli_query($db, $query);
















//이거 회원 등록 폼에서 넘어온 데이터값들 db에 넣는거부터 다시하기



?>


<main class="w-75 mx-auto border rounded-5 p-5 d-flex gap-5" style="height: calc(100vh-257px)">
    


<img src="images/학정냥이.jpg" alt="" width="25%">
<div>
    <h1>회원가입을 축하드립니다.</h1>
    <button onClick="location.href='./login.php'"   class="btn btn-primary" id="btn_login">로그인 하기</button>
</div>



</main>


<?php include 'inc_footer.php'; ?>
