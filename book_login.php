<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Create a stylish landing page for your business startup and get leads for the offered services with this HTML landing page template.">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>LOGIN</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,600,700,700i&amp;subset=latin-ext" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
	<link href="css/magnific-popup.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
    
</head>
<style>
{
    font-family: 맑은고딕;
    font-weight: bold;
}
 
table {
    width: 400px;
    height: 300px;
    border: 1px solid lightskyblue;
    border-radius: 5px;
    background-color: skyblue;
}
 
.login_form {
    padding: 20px 50px;
}
 
input {
    margin-bottom: 14px;
    width: 290px;
    height: 30px;
    font-size: 16px;
    border: lightgray;
}
 
button {
    width: 294px;
    height: 50px;
    font-size: 16px;
    padding: 10px 20px;
    background-color: #fff;
    border: 1px solid whitesmoke;
}
</style>
<body>

    <form action="book_loginCheck.php" method="post" enctype="multipart/form-data" class="login_form">
        
        <table width = "350" height="70">
            <tr>
                <td><label >ID</label></td>
                <td><input style="width:170px;height:30;" type="text" name="id"></td>
            </tr>
            <tr>
                <td><label >Password</label></td> 
                <td><input style="width:170px;height:30;" type="text" name="pw"></td>
            </tr>
        </table>
        <br><br>
        <button type="submit">로그인</button> 
        <button type="button" onclick="location.href='book_member_create.html'">회원가입</button>
        
    </form>
                               
</body>
</html>