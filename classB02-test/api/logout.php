<?php include_once "base.php";
// 題目沒有說要做登出功能，簡易版
unset($_SESSION['user']);
to("../index.php");
