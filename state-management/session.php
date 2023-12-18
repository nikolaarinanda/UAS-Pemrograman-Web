<?php
// Mulai session
session_start();

// Fungsi untuk menyimpan informasi pengguna ke dalam session
function setUserData($username, $email) {
    $_SESSION['user_data'] = array('username' => $username, 'email' => $email);
}

// Fungsi untuk mendapatkan informasi pengguna dari session
function getUserData() {
    return isset($_SESSION['user_data']) ? $_SESSION['user_data'] : null;
}

// Fungsi untuk menghapus informasi pengguna dari session
function logout() {
    unset($_SESSION['user_data']);
}

// Contoh penggunaan
setUserData('john_doe', 'john@example.com');
$userInfo = getUserData();

if ($userInfo) {
    echo "Username: " . $userInfo['username'] . "<br>";
    echo "Email: " . $userInfo['email'] . "<br>";
} else {
    echo "User not logged in.<br>";
}

// Logout
logout();
?>