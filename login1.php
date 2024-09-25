<?php 

session_start();

$error="test";

include"style.php";


if(isset($_SESSION['nakapasokna'])){

	echo "<script> window.location.href='HomePage'</script>";
}

if(!isset($_SESSION['try'])){
	$_SESSION['try']=0;
}

 ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
    <style>
        body {
            font-family: sans-serif;
            background-color: #808080;
            background-image: url(https://www.colorhexa.com/static/i/bg-pattern.min.svg) ,none;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        sector {

            display: flex;
        }


        sector .vids{

            width: 60%;


        }

        sector video{

            width: 1000px;
            border-radius: 10px;


         box-shadow: 4px 6px 5px 0px rgba(0,0,0,0.75);
-webkit-box-shadow: 4px 6px 5px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 4px 6px 5px 0px rgba(0,0,0,0.75);            
        }

        sector .container {
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            width: 400px;
            height: 500px;


            box-shadow: -6px 10px 5px 0px rgba(0,0,0,0.75);
-webkit-box-shadow: -6px 10px 5px 0px rgba(0,0,0,0.75);
-moz-box-shadow: -6px 10px 5px 0px rgba(0,0,0,0.75);
        }

        .container img{

            position: relative;
            width: 100px;
            height: 100px;

            border-radius: 50%;
           filter: drop-shadow(2px 5px 0px #000000);
           left: 35%;




        }

        h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #660000;
            font-family: "Poppins", sans-serif;
            font-weight: 800;
            font-size: 2vw; 
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 15px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

       .logbutton input[type="submit"] {
            background-color: #660000;
            color: white;
            padding: 15px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
            font-weight: 600;
            transition: background-color 0.3s ease;
        }

    .logbutton input[type="submit"]:hover {
            background-color: #4d0000;
        }

        .forgot-password {
            text-align: right;
            margin-bottom: 15px;
            color: #3F51B5;
        }

        .social-media {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .social-media a {
            margin: 0 10px;
            color: #3F51B5;
            text-decoration: none;
        }

        .social-media i {
            font-size: 20px;
        }
    </style>
</head>
<body>

<form action="#" method="post">
    <sector>  

    


    <div class="container">
        <img src="pics/school.png">
        <h2>Central Colleges</h2>
        <form>
            <input type="text" placeholder="Student Number"  minlength="9" name="uname" maxlength="9">
            <input type="password" placeholder="Password"  minlength="11"  name="upass" maxlength="11">
           
            <?php 

 					if($_SESSION['try']>=10){

 			 ?>

 			<div class="logbutton">
 				<input type="submit" name="login" value="Login" disabled>
 			</div>

 			<?php 

 					echo "<p class='errorbox'>Specific number of tries used. Please wait.</p>"; 

 				}


 				else{
 			 ?>

				<div class="logbutton">
 				<input type="submit" name="login" value="Login">
 			</div>

 			<?php  

 				}
 				
 			?>





        </form>
    </div>

    <div class="vids">
    <video autoplay muted loop id="myVideo">
  <source src="pics/login.mp4" type="video/mp4">
</video>
    </div>

</sector>







<?php

if(isset($_POST['login'])){

 		$_POST['uname']=htmlspecialchars($_POST['uname']);
 		$_POST['upass']=htmlspecialchars($_POST['upass']);

 		if(!empty($_POST['uname']) && !empty($_POST['upass'])){

 			include "conf/config.php";

 			$search=mysqli_query($conn, "SELECT * FROM login WHERE uname='".$_POST['uname']."' AND upass='".$_POST['upass']."'");

 			$T=mysqli_num_rows($search);

 				if ($T>0) {
 						
 					$R=mysqli_fetch_array($search);

 					if($R['status']=='active' && $R['type']=='user'){

 						$_SESSION['name']=$R['uname'];
 						$_SESSION['nakapasokna']='pasok';


 						echo "<script>window.location.href='HomePage'</script>";

 					}


 					elseif ($R['status']=='active' && $R['type']=='admin') {


 						$_SESSION['name']=$R['uname'];
 						$_SESSION['nakapasokna']='pasok';


 						echo "<script>window.location.href='HomePage'</script>";
 						
 					}

 					else{

 						$error="Account Deactivated.Please contact your Administrator!";

 						$_SESSION['try']++;

 						//echo "<script>window.location.href='Welcome'</script>";

 					}
 			
 				}

 			else{

 				

 					echo "<div class='incorrect-box'>";

 						echo"<p class='incorrect'>Oops! Incorrect Credentials. Please try again.</p>";

 					echo"</div>";  

 				$_SESSION['try']++;

 				//echo "<script>window.location.href='Welcome'</script>";

 			}

 		}

 		else{

 			echo "<p class='errorx'>Please fill-out empty fields!</p>";

 			//echo "<script>window.location.href='Welcome'</script>";
 		}
 	}



  ?>
</body>
</html>