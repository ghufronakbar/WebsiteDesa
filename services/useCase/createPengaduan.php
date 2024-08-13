<?php
require_once './services/db/connection.php';
function createPengaduan($nama, $telepon, $dukuh, $isi, $nik, $foto = null)
{
    global $conn;

    $stmt = $conn->prepare("INSERT INTO pengaduan (nama, nik, telepon, dukuh, isi, tanggal, foto) VALUES (?, ?, ?, ?, ?, NOW(), ?)");
    $stmt->bind_param("ssssss", $nama, $nik, $telepon, $dukuh, $isi, $foto);

    if ($stmt->execute()) {
        return "Pengaduan berhasil dibuat.";
    } else {
        return "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
