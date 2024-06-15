<?php include 'inc_header.php';?>

<main class="mx-auto border rounded-2 p-5 d-flex gap-5" style="height:calc(100vh-257px)">


<form method="post" class="w-25 mt-5 m-auto" action="./login_process.php">
    <img src="images/학정냥이.jpg" width="72" alt="로딩안됨">
    <h1 class="h3 mb-3">로그인 </h1>
    
    <div class="form-floating mt-2">
        <input name="id" type="text" class="form-control" id="f_id" placeholder="아이디 입력" autocomplete="off">
        <label for="f_id" >아이디</label>
    </div>

     <div class="form-floating mt-2">
    <input name="password" type="password" class="form-control" id="f_pw" placeholder="비밀번호 입력">
    <label for="f_pw">비밀번호</label>
     </div>

     <button  class="btn btn-lg btn-primary w-100 mt-2" id="btn_login" >확인</button>


    </form>





</main>


<?php include 'inc_footer.php';?>
