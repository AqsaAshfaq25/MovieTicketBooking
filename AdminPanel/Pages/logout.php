<?php
session_start();
include('Config.php');
session_destroy();
// echo "<script>window.location.href='./adminlogin';</script>;"

header('location:../adminlogin.php');



?>