<?php

session_start(); # eger daha önce sistemde server calistirildiysa onu kullanir yoksa yeni bir session olusturur.

echo $_SESSION['username']."<br>";
echo $_SESSION['password']."<br>";

print_r($_SESSION)


?>