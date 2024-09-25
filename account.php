<?php
session_start();

include "style2.php";


if(!isset($_SESSION['name'])){

  echo "<script> alert( 'Please login first...')</script>";
  echo "<script>window.location.href='Welcome'</script>";
}
?>
 <!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>HomePage</title>

 
</head>

<body>

<header class="sticky">
<a href="#" class="logo"><span class="red">Central</span> <span class="yellow">Colleges.</span></a>
<ul class="navlist">
<li><a href="#home" >My Grades</a></li>
<li><a href="#about">My Balance</a></li>
<li><a href="#services" class="active">My Account</a></li>
<li><a href="#courses">Online Schedule</a></li>
</ul>
<form action="" method="post">
<input type="submit" class="login-btn" name="logout" value="logut">
</form>

<div class="bx bx-menu" id="menu-icon">

</div>
</header>

 
<section class="book_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col">
          <form>
            <h4>
              Student <span>Name:XXXX</span>
            </h4>
            <h4>
              Course: <span>XXXX</span>
            </h4>
           
              <div class="box">
                <p class="m-0 text-center text-red small" required>Old Password</p>
                <input type="text" class="form-control" id="oldpass" placeholder="" required>
                <br><br>
                <p class="m-0 text-center text-red small">New Password</p>
                <input type="text" class="form-control" id="newpass" placeholder="XXXXXXXXXX">
              <br>
              <br>
              <div class="btn-box">
              <button type="submit" class="btn ">Submit New Password</button>
            </div>
            </div>
            <br>
            <div class="box">
                <p class="m-0 text-center text-red small" required>Old Email</p>
                <input type="text" class="form-control" id="oldpass" placeholder="">
                <br><br>
                <p class="m-0 text-center text-red small" required>New Email</p>
                <input type="text" class="form-control" id="newpass" placeholder="XXXXXXXXXX">
              <br>
              <br>
              <div class="btn-box">
              <button type="submit" class="btn ">Submit New Email</button>
            </div>
            </div>
            <br><br>
          </form>
          <div class="box">
  <!-- Your message content goes here -->
 
  <p><strong>Dear Students:</strong></p>


<p>Since the start of this pandemic, from March 2020 to May 2022, Central Colleges successfully delivered all its classes on full online modality. Our students learned through virtual classrooms on synchronous and asynchronous sessions with familiarity and ease. This 1st semester, SY 2022-2023, the institution provided limited face-to-face learning for most laboratory courses for senior college students.</p>

<p>In response to the mandate of CHED (CMO # 16), Central Colleges is pleased to announce that though still limited, we will be gradually increasing the number of face to face classes for the 2nd semester, SY 2022-2023.</p>

<p>After extensive students’ surveys, and deliberations of the Central Colleges’ Academic Community, we moved to request CHED to allow some courses to continue to be delivered entirely online while most courses are delivered 50% onsite and 50% synchronously. Once CHED has decided, Central Colleges will announce the full course classification, whether online, hybrid, or face-to-face.</p>

<p>Central Colleges looks forward to seeing you next semester. Enrollment for the second semester, SY 2022-2023 officially opens December 5, 2022. Keep safe and stay healthy.</p>


<p>Sincerely,</p>


<p><strong>The Academic Council</strong></p>
<p style="color: red;">CENTRAL COLLEGES OF THE PHILIPPINES</p>
<br><br>
</div>
        </div>
      </div>
    </div>
    <br><br>
    <div class="box">
      <p><strong>Dear Centralians,</strong></p>


<p>The perks of a good life are within your reach once you learn to unlock the key to limitless possibilities. The secret is that your destiny can be shaped by your present actions and mindset.</p>

<p>This is as good a time as any to remind you how to live in the present moment in order to accomplish CCP's visions of your future. Think about your chances after graduation as early as today, and continue to develop qualities that would make you stand out from the crowd to ensure a more productive and happier life.</p>

<p>It may hence, be worthwhile for you to consider the following courses of action:</p>

<p>Become a better communicator.</p>

<p>When you're in CCP, please speak in English always and help promote an English-speaking culture in school, bearing in mind that, like it or not, it has become the international language.</p>

<p>After you graduate and pass your board exam, if any, you will probably have to undergo job interviews where only the most impressive applicants will be hired. Obviously that won't be somebody who cannot speak FLUENTLY in English. What more if you aspire for continuous promotions which would entitle you to bigger and bigger salaries to make your life more pleasant. Finally, when you travel whether for work or for pleasure, English has to be spoken for obvious reasons.</p>

<p>So take advantage of the free lessons and practice your conversational English at the English Center whenever you have any free time.</p>

<p>Build your self-confidence.</p>

<p>Self-confident people are generally admired by others. They know that no matter what obstacles come their way, they can get past them. Self-confident people tend to see their life in a positive light even when things aren't going well.</p>

<p>This can be attained by: 1) again, by being able to speak English fluently; and 2) studying so seriously as to insure passing your board
exam the first time you take it.</p>

<p>One cannot be a leader without self-confidence.</p>

<p>Develop Discipline.</p>

<p>Another sure way of acqumnq self-confidence is to be a skilled martial artist, which is why unlike most other Colleges, CCP not only has an English Center but also a Martial Arts Program in a karate gym which is the local branch of the famous Shotokan Karate International Federation (SKIF? in Tokyo where students acquire personal discipline and courage by becoming kinesthetically intelligent.</p>

<p>Nurture creativity through Art Appreciation.</p>

<p>A CCP student should always be open to self-improvement and personality development. He knows that to be happier, he must learn to appreciate the beautiful things in life. Even when times get rough, life can still be enjoyed by learning to appreciate the visual arts and classical and contemporary music, dance, and theater. If you are talented, you can even create or perform art.</p>

<p>In this light, we have prepared several activities that can awaken your artistic inclinations by exposing you to video presentations of such works as: a) plays like Hamlet, Julius Caesar and Romeo and Juliet by Shakespeare; b) Broadway plays; and c) classical presentations. These will be shown on Wednesdays and/or Saturdays in our Tech Rooms and Studio Theatre FREE OF CHARGE. Please read the posters on your bulletin boards.</p>

<p>We will also integrate into our classes the Video lectures from the best Universities in the world like Harvard, Yale, Oxford, Cambridge and the Massachusetts Institute of Technology to supplement what you learn here in Engineering, Architecture, Accountancy, Business Administration, Hotel and Tourism Management, Education, and Psychology courses.</p>

<p>CCP will continue to mold you toward the attainment of your aspirations for a better future. Last but not least, please continue to attend Holy Mass every Friday at 12:30 pm in our School Chapel of the Immaculate Conception.</p>

<p>Should you have any problem which you think should be decided by me personally, please email me at breyes518@gmail.com.</p>



<p>Sincerely,</p>


<p><strong>CRISPINO P. REYES</strong></p>
<p style="color: red;">President</p>
  </section>
  <div class="box">
  <!-- Footer -->
  <footer class="py-5 bg-black">
    <div class="container">
      <p class="m-0 text-center text-white small">Copyright &copy; | Central Colleges of the Philippines | Student Portal</p>
    </div>

    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>