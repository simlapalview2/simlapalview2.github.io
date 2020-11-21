<?php
session_start();

if(isset($_POST['submit_pass']) && $_POST['pass'])
{
 $pass=$_POST['pass'];
 if($pass=="simlapalview@dm") 
 {
  $_SESSION['password']=$pass;
 }
 else
 {
  $error="Incorrect Pssword";
 }
}

if(isset($_POST['page_logout']))
{
 unset($_SESSION['password']);
}
?>

<html>

<head>
    <title>Password Protected Webpage</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body{
	margin: 0;
	padding: 0;
	background-image: url(../2.jpg);
	background-size: cover;
	background-position: center;
	height: 100vh;
	font-family: Century Gothic;
}
.box{
	width: 320px;
	height: 380px;
	background-color: #000000b3;
	color:#fff;
	position: absolute;
	transform: translate(-50%,-50%);
	left:50%;
	top:50%;
	padding: 70px 30px;
	box-sizing: border-box;
	border-radius: 10px;
}
.man{
	width: 100px;
	height: 100px;
	border-radius: 50%;
	position: absolute;
	top:-50px;
	left:calc(50% - 50px);
}

h1{
	margin: 0;
	padding: 0 0 20px;
	text-align: center;
	font-size: 22px;
}

.box input{
	width: 100%;
	margin-bottom: 20px;
}

.box input[type="text"],input[type="password"]
{
	border: none;
	border-bottom: 1px solid #fff;
	background-color: transparent;
	outline: none;
	height: 40px;
	color: #fff;
	font-size:16px;
}

.box input[type="submit"]{
	border: none;
	outline: none;
	height: 40px;
	background-color: #fb2525;
	color: #fff;
	font-size: 18px;
	border-radius: 20px;
	transition: 0.4s ease;
}

.box input[type="submit"]:hover{
	cursor: pointer;
	background-color: #ffc107;
	color: #000;
}

.box a{
	text-decoration: none;
	font-size: 12px;
	line-height: 20px;
	color:darkgrey;
}

.box a:hover{
	color:#ffc107;
}
    </style>
</head>

<body>
    <div id="wrapper">

        <?php
if($_SESSION['password']=="simlapalview@dm")
{

 ?>
<!--        Create Password Protected Webpage Using PHP, HTML And CSS-->
        <h1>Welcome To Main Page</h1>
        <br>
        <img src="flower-5042640_1920.jpg" class="image">
        <br>
        <form method="post" action="" id="logout_form">
            <input type="submit" name="page_logout" value="LOGOUT">
        </form>
        <?php
}
else
{
 ?>
        <form method="post" action="" id="login_form">
            <h1>LOGIN TO PROCEED</h1>
            <input type="password" name="pass" placeholder="*******">
            <input type="submit" name="submit_pass" value="DO SUBMIT">
            <p>"Password : simlapalview@dm"</p>
            <p>
                <font style="color:red;"><?php echo $error;?></font>
            </p>
        </form>
        <?php
}
?>

    </div>
</body>

</html>
