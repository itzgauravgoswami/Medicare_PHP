<?php
$plain_password = 'admin123'; // The password you’re trying
$stored_hash = '$2y$10$SZMSrsZlgVTVdLSXkb6bQeg1O1crfThOdyEANcm8kaezMuSJwRreG'; // Copy the hash from the users table
if (password_verify($plain_password, $stored_hash)) {
    echo "Password is correct!";
} else {
    echo "Password is incorrect!";
}
?>