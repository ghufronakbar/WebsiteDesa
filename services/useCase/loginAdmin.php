<?php
require_once './services/db/connection.php';

function loginAdmin($email, $password)
{
    global $conn;

    // Hash password dengan MD5
    $hashedPassword = md5($password);

    $stmt = $conn->prepare("SELECT * FROM admin WHERE email = ? AND password = ?");
    $stmt->bind_param("ss", $email, $hashedPassword);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Memulai session
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        $admin = $result->fetch_assoc();
        $_SESSION['adminId'] = $admin['adminId'];
        $_SESSION['nama'] = $admin['nama'];

        // Tutup statement dan koneksi
        $stmt->close();
        $conn->close();

        return true;
    } else {
        // Tutup statement dan koneksi
        $stmt->close();
        $conn->close();

        return false;
    }
}
