<?php
require_once './services/db/connection.php';
function createPengaduan($nama, $telepon, $dukuh, $isi, $nik)
{
    global $conn;

    $stmt = $conn->prepare("INSERT INTO pengaduan (nama, nik, telepon, dukuh, isi, tanggal) VALUES (?, ?, ?, ?, ?, NOW())");
    $stmt->bind_param("sssss", $nama, $nik, $telepon, $dukuh, $isi);

    if ($stmt->execute()) {
        return "Pengaduan berhasil dibuat.";
    } else {
        return "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
