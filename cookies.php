<?php

setcookie("username", "rahman", time() + (60 *60 * 24)); # bir günlük bir cookie
setcookie("login", "true", time() + (60 *60 * 24));
setcookie("fullname", "rahman ertuerk", time() + (60 *60 * 24), "/php-tutorials/php-cookies/admin");

if (isset($_COOKIE['username'])) {
    echo $_COOKIE["username"]."<br>";
} else echo "there is no cookie with the same name<br>";

// refresh a cookie
setcookie("username", "r.ertuerk", time() + (60 * 60)); # ayni name ile cookie set edildiginde otomatik güncellenir.

// delete a cookie
if (isset($_COOKIE['login'])) { # süresi gecen cookie kendiliginden silinir.
    setcookie("login", "true", time() - (60 * 60));
}

?>