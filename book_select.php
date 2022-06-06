<?php

$con = mysqli_connect("localhost","youngeun","1234","sungkyul");
$sql = "SELECT * FROM tbk1"; 
$result = mysqli_query($con, $sql);

while($row = mysqli_fetch_assoc($result)) {
	
	echo $row['book_num'].".  "."도서 제목 : ".$row['book_title'].", "."도서 작가 : ".$row['book_writer'].", "."도서 출판사 : ".$row['book_pub'].", "."도서 가격 : ".$row['book_price'].", " ."도서 ISBN 번호 : ".$row['book_ISBN']."<br>";
	echo "----------------------------------------------- <br>";
	}

	print "<br><a href='simple.html'>메인 화면으로</a>";

?>