<?php

$host = 'localhost';
$user = 'youngeun';
$pw = '1234';
$dbName = 'sungkyul';
$con = new mysqli($host, $user, $pw, $dbName);

$id = $_POST['id']; // 아이디
$pw = $_POST['pw']; // 패스워드

$query = "select * from bookmember where member_id='$id' and member_pw_1='$pw'";

$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);

if($id==$row['member_id'] && $pw==$row['member_pw_1']){ // id와 pw가 맞다면 login

	echo "<script> alert('로그인 성공했습니다'); </script>";
	echo "<script> location.href = 'library.html'; </script>";

}else{ // id 또는 pw가 다르다면 admin_login 폼으로

   echo "<script> alert('로그인 실패했습니다 다시 시도해 주세요'); </script>";
   echo "<script> location.href = 'book_login.php'; </script>";

}

?>