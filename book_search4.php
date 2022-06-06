<?php

$con = mysqli_connect("localhost","youngeun","1234","sungkyul");
$c1_d = $_POST["c4"];
$sql = "SELECT * FROM book WHERE book_ISBN like '%$c4_d%'";
$result = mysqli_query($con, $sql);

while($row = mysqli_fetch_assoc($result)) {
    echo $row['book_num'].". ";
    echo "도서 제목: ".$row['book_title']."| ";
    echo "도서 작가: ".$row['book_writer']."| ";
    echo "도서 출판사: ".$row['book_pub']."| ";
    echo "도서 가격: ".$row['book_price']."| ";
    echo "도서 ISBN 번호: ".$row['book_ISBN']."<br>";
}
print "<br><a href='library.html'>초기 화면으로 되돌아갑니다</a>";
?>