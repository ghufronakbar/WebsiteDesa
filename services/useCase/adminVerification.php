<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

function adminVerification()
{
    if (!isset($_SESSION['adminId'])) {
        // Jika adminId tidak ada di session, redirect ke halaman login
        header("Location: login.php");
        exit();
    }
}

// Fungsi ini bisa digunakan untuk mendapatkan informasi admin yang login
function getAdminInfo()
{
    if (isset($_SESSION['adminId'])) {
        return [
            'adminId' => $_SESSION['adminId'],
            'nama' => $_SESSION['nama']
        ];
    }
    return null;
}
