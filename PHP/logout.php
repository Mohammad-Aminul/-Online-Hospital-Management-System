<?php
session_start();
session_destroy();
header("location:blood_donation.php");
exit;
?>