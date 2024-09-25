<?php 


session_start();


include "olstyle.php";


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
<li><a href="student_portal.php">My Grades</a></li>
<li><a href="#">My Balance</a></li>
<li><a href="account.php">My Account</a></li>
<li><a href="olsched.php"class="active">Online Schedule</a></li>
</ul>
<form action="" method="post">
<input type="submit" class="login-btn" name="logout" value="logut">
</form>

<div class="bx bx-menu" id="menu-icon">

</div>
</header>
<body>

<?php
include 'onlineschedstyle.php';

echo "<form action='#' method='post'>";
echo "<div class='div-1'>";
echo "<h1>Central Colleges of the Philippines</h1>";
echo "<h2>Online Schedule</h2>";
echo "<br><select name='College' id='college1'>";
echo "<option value=''hidden>Select College</option>";
echo "<option value='Architecture'>Architecture</option>";
echo "<option value='Arts_Sciences'>Arts & Sciences</option>";
echo "<option value='Business_Admin'>Business Admin</option>";
echo "<option value='Computer_Studies'>Computer_Studies</option>";
echo "<option value='Education'>Education</option>";
echo "<option value='Engineernig'>Engineering</option>";
echo "<option value='Nursing'>Nursing</option>";
echo "<option value='Graduate_School'>Graduate School</option>";
echo "</select></br>";
echo "<input type='submit' value='Generate' name='gen' style='
padding:1% 5%;
 background-color: #660000;
border:0;
color:white;
font-family:helvetica;
font-size:12px;
letter-spacing: 3px;
position: positive ;
transition: all .4s cubic-beizer(0.645,0.045,0.355,1);
cursor:pointer;
display:block;
    border:2px solid maroon;
    border-radius: 10px;
       margin: 0;
    position: absolute;
    top: 68%;
    left: 50%;    
    transform: translate(-50%, -50%)  ;border-color: maroon;
box-shadow: 10px 10px 20px black;


'></br>";

echo "<br><input type='text' name='search1' placeholder='Search by Subject...' style='border-color: maroon;
box-shadow: 10px 10px 20px black;'>";
echo "<input type='submit' value='Search' name='search2'style='
padding:1% 5%;
 background-color: #660000;
border:0;
color:white;
font-family:helvetica;
font-size:12px;
letter-spacing: 3px;
position: positive ;
transition: all .4s cubic-beizer(0.645,0.045,0.355,1);
cursor:pointer;
display:block;
    border:2px solid maroon;
    border-radius: 10px;text-align: center;
   margin: 0;
    position: absolute;
    top: 110%;
    left: 50%;    
    transform: translate(-50%, -50%)  ;border-color: maroon;
box-shadow: 10px 10px 20px black;



'>";
echo "</div>";


echo "</form>";

 echo "<table class='subm' cellpadding='5' border='1' style='border-collapse: collapse'>";
        echo "<tr>";
        echo "<th>CODE</th>";
        echo "<th>SUBJECT</th>";
        echo "<th>SECTION</th>";
        echo "<th>UNIT/s</th>";
        echo "<th>TIME</th>";
        echo "<th>DAY</th>";
        echo "<th>ROOM</th>";
        echo "<th>STATUS</th>";
        echo "</tr>";


        echo "</tr>";
        echo "<td>0044</td>";
        echo "<td>CCS 1113</td>";
        echo "<td>ACT 1-1a-1</td>";
        echo "<td>3</td>";
        echo "<td>01:30-03:00 PM<br></br>
01:30-03:00 PM</td>";
        echo "<td>TUES<br></br>FRI</td>";
echo "<td>HR226<br></br>
ONL</td>";
		echo "<td>"."<a href='userlanding.php?id='''><input type='submit' value='Open' style='padding:1% 5%;
 background-color: green;
border:0;
color:white;
font-family:helvetica;
font-size:12px;
letter-spacing: 3px;
position: positive ;
transition: all .4s cubic-beizer(0.645,0.045,0.355,1);
cursor:pointer;
display:block;
  
    border-radius: 10px;text-align: center;'></a>"."</td>";


        echo "</tr>";   
       echo "<tr class='tols'>";
    echo "<th></th>";
    echo "<th></th>";
    echo "<th></th>";
    echo "<th>Total Search =</th>";
    echo "<th>1</th>";
    echo "</tr>";
    echo "</table>";

?>
</body>
 </body>
 </html>