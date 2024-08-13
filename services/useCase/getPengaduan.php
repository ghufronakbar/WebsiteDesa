<?php
require_once './services/db/connection.php';
function getPengaduan()
{
    global $conn;

    $sql = "SELECT * FROM pengaduan ORDER BY pengaduanId DESC";
    $result = $conn->query($sql);

    $pengaduan = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $pengaduan[] = $row;
        }
    }

    return $pengaduan;
}
