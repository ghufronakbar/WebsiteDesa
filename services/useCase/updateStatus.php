

<?php
require_once './services/db/connection.php';

function updateStatus($pengaduanId, $status)
{
    global $conn;

    $stmt = $conn->prepare("UPDATE pengaduan SET status = ? WHERE pengaduanId = ?");
    $stmt->bind_param("ii", $status, $pengaduanId);

    if ($stmt->execute()) {
        return true;
    } else {
        return false;
    }

    $stmt->close();
}
?>
