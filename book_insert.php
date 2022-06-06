<?php
$con = mysqli_connect("localhost","youngeun","1234","sungkyul");
$book_title = $_POST['a1'];
$book_title = addslashes($book_title);
$book_writer = $_POST['a2'];
$book_writer = addslashes($book_writer); 
$book_pub = $_POST['a3'];
$book_pub = addslashes($book_pub); 
$book_price = $_POST['a4'];
$book_price = addslashes($book_price); 
$book_ISBN = $_POST['a5'];
$book_ISBN = addslashes($book_ISBN); 

$sql = "insert into book (
    book_title,
    book_writer,
    book_pub,
    book_price,
    book_ISBN
)"; $sql = $sql. "values (
    '$book_title',
    '$book_writer',
    '$book_pub',
    '$book_price',
    '$book_ISBN'
)";
if($con->query($sql)){ 
echo '<script>alert("성공적으로 입력을 완료했습니다")</script>'; 
}else{ 
echo '<script>alert("입력이 불가능합니다 다시 한 번 확인해 주세요")</script>';
}
mysqli_close($mysqli);
?>
<script>
location.href = "library.html";
</script>
