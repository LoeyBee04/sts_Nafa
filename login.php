<?php
$username = 2222;
$password = 4444;

if ($username == 12345 && $password == 12345) {
    echo "Berhasil login";
} else if ($username == 2121 && $password == 12345) {
    echo "username salah";
} else if ($username == 12345 && $password == 4444) {
    echo "password salah";
} else {
    echo "Mohon maaf username atau password salah";
}
?>