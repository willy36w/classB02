<?php include_once "base.php";

// dd($_POST);
$chk = $User->count($_POST);
// dd($chk);
if ($chk) {
    $_SESSION['user'] = $_POST['acc'];
}
echo $chk;
