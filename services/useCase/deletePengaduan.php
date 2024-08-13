<?php
require_once './services/db/connection.php';

function deletePengaduan($pengaduanId)
{
    global $conn;

    $stmt = $conn->prepare("SELECT foto FROM pengaduan WHERE pengaduanId = ?");
    $stmt->bind_param("i", $pengaduanId);
    $stmt->execute();
    $stmt->bind_result($foto);
    $stmt->fetch();
    $stmt->close();

    if ($foto) {
        $filePath = __DIR__ . '/../../uploads/' . $foto;

        if (file_exists($filePath)) {
            unlink($filePath);
        }
    }
    
    $stmt = $conn->prepare("DELETE FROM pengaduan WHERE pengaduanId = ?");
    $stmt->bind_param("i", $pengaduanId);

    if ($stmt->execute()) {
        return true;
    } else {
        return false;
    }

    $stmt->close();
    $conn->close();
}
