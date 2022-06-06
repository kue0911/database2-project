<html>
<!-- <meta charset="utf-8"> -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<?php

		$host = 'localhost';
		$user = 'youngeun';
		$pw = '1234';
		$dbName = 'sungkyul';
		$mysqli = new mysqli($host, $user, $pw, $dbName);

		$member_email = $_POST['email'];
		$member_id = $_POST['id'];
	    $member_pw_1 = $_POST['pw_1'];
	    $member_name = $_POST['name'];
		$member_phone = $_POST['phone'];
		$member_address = $_POST['address'];
		$member_greet = $_POST['greet'];


		$sql = "insert into bookmember (
				member_email,
				member_id,
				member_pw_1,
				member_name,
				member_phone,
				member_address,
				member_greet
			
		)";
		
		$sql = $sql. "values (
				'$member_email',
				'$member_id',
				'$member_pw_1',
				'$member_name',
				'$member_phone',
				'$member_address',
				'$member_greet'
		)";

		if($mysqli->query($sql)){ 
		  echo '<script>alert("입력이 완료되었습니다")</script>'; 
		}else{ 
		  echo '<script>alert("입력에 실패했습니다")</script>';
		}

		mysqli_close($mysqli);
	  
	?>

<script>
	location.href = "book_member_create.html";
</script>

</html>