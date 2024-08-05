<?php
require_once './services/db/connection.php';

function deletePengaduan($pengaduanId) {
    global $conn;

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
?>
