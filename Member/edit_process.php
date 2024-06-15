

<?php
//수정한 id랑 password 랑 email 이랑 zipcod 값들로 db안에 있는값들 전부수정

session_start();

include 'inc_header.php';


$pre_id=$_SESSION['id']; //원래 db안에 있는 id
$pre_password=$_SESSION['password']; //원래 db안에 있는 password



$db=mysqli_connect("localhost", "root", "1234");
mysqli_select_db($db,'memsite');



$id=$_POST['id']; 
$password=$_POST['password'];
$email=$_POST['email'];
$zipcod="images/{$_POST['profile']}";
//이 값들로 db안에 있는 값들을 수정해야됨!





$query="UPDATE member SET id='$id',password='$password', email='$email', zipcod='$zipcod' WHERE id='$pre_id' and password='$pre_password'";
mysqli_query($db, $query);



session_destroy();







?>


<main class="w-75 mx-auto border rounded-5 p-5 d-flex gap-5" style="height: calc(100vh-257px)">
    


<img src="images/학정냥이.jpg" alt="" width="25%">
<div>
    <h1>수정되었습니다!</h1>
    <button onClick="location.href='./login.php'"   class="btn btn-primary" id="btn_login">로그인 하기</button>
</div>



</main>


<?php include 'inc_footer.php'; ?>
