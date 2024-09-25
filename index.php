<?php
$url = isset($_GET['url']) ? $_GET['url'] : 'index';

switch ($url) {
	case 'Welcome':
		include 'login1.php';
		break;
	case 'HomePage':
		include 'student_portal.php';
		break;
	case 'OnlineSched':
		include 'olsched.php';
		break;
	case 'HomePage':
		include 'student_portal.php';
		break;
	default:
		echo "<script>window.location.href='Welcome'</script>";
		break;
}
?>