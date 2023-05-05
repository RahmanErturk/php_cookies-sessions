<?php

session_start();

$_SESSION['username'] = "r.ertuerk";
$_SESSION['password'] = "1234";

// unset($_SESSION['password']); # bir sessonu temizler
// session_unset(); # tüm sessionlari icini temizler.
// session_destroy(); # tüm session alni silinir, ortadan kaldirilir ancak bu biraz zaman alir
// SESSION = [] # o anda tüm sessionu sifirlar.


echo $_SESSION['username']."<br>";
if (isset($_SESSION['password'])) echo $_SESSION['password'];
else echo "there is no password";

?>