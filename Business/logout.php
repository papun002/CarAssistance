<?php
session_start();
include('../db.php');
$_SESSION['b_logid'] = 0;
$_SESSION['b_user'] = "";
session_unset();

?>
<script language="javascript">
document.location = "../login/loginpage.php";
</script>