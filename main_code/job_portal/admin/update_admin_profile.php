<?php
    session_start();
	$connection = mysqli_connect("localhost","root","Iamsammed@12");
	$db = mysqli_select_db($connection,"online_job_portal");
	$query = "update administrator set user_name ='$_POST[name]' where Email = '$_SESSION[Email]'";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Details edited successfully.");
	window.location.href = "logout.php";
	alert("Login Again.");
	window.location.href = "admin_login.php";
</script>