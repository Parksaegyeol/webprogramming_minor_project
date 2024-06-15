<?php


$db=mysqli_connect("localhost", "root", "1234");

mysqli_select_db($db,'memsite');

$query="SELECT *FROM member";
$result=mysqli_query($db, $query);
$row=mysqli_fetch_array($result);

if(isset($row)){
    echo $row['id'];
    
    

}
else{
    echo '값이 없음';
    
    
}


?>