<?php  

session_start();

include "portalstyle.php";



if(!isset($_SESSION['name'])){

	echo "<script> alert( 'Please login first...')</script>";
	echo "<script>window.location.href='Welcome'</script>";
}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<header class="sticky">
		<a href="#" class="logo"><span class="red">Central</span> <span class="yellow">Colleges.</span></a>
		<ul class="navlist"> 
			<li><a href="#"	class="active">My Account</a></li>
			<li><a href="#">My Balance</a></li>
			<li><a href="student_portal.php">My grades</a></li>
			<li><a href="olsched.php">Online schedule</a></li>
		</ul>
		<form action="" method="post">
			<input type="submit" class="login-btn" name="logout" value="logout">
		</form>

		<div class="bx bx-menu" id="menu-icon">
		
		</div>
	</header>


<section class="home" id="home">
	<div class="services-content">
			<div class="box">
				<div class="s-icons">
					<i class="bx bx-desktop"></i>
				</div>
				<h3>1ST SEM 2024-2025 ENROLLMENT APPLICATION FORM (EAF)</h3>
				<ul class="newnav">
					<li><a href="#">EAF FOR COLLEGE UNDERGRAD</a></li>
					<li><a href="#">EAF FOR GRADUATE STUDIES</a></li>
				</ul>
			</div>
	</div>
</section>

<section class="account" id="account">
	<div class="cback">
		<div class="myacts">
			<h3>My Account</h3>
		</div>
	<form>
		<div class="acts">
		<input type="password" name="pass1" placeholder="input old password"><br>
		<input type="password" name="pass2" placeholder="input new password"><br>
		<input type="password" name="conpass" placeholder="confirm password"><br>
		<input type="submit" name="changed" value="change password">
		</div>
	</form>
	</div>

	<form>
		<div class="acts">
		<input type="password" name="pass1" placeholder="input old password"><br>
		<input type="password" name="pass2" placeholder="input new password"><br>
		<input type="password" name="conpass" placeholder="confirm password"><br>
		<input type="submit" name="changed" value="change password">
		</div>
	</form>
	<!--<div class="services-content">
			<div class="box">
				<div class="s-icons">
					<i class="bx bx-desktop"></i>
				</div>
				<h3>1ST SEM 2024-2025 ENROLLMENT APPLICATION FORM (EAF)</h3>
				<ul class="newnav">
					<li><a href="#">EAF FOR COLLEGE UNDERGRAD</a></li>
					<li><a href="#">EAF FOR GRADUATE STUDIES</a></li>
				</ul>
			</div>
	</div>-->
</section>

</body>
</html>