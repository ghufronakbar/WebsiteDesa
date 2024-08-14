<?php
require_once './services/db/connection.php';

function getPengaduan($search)
{
    global $conn;

    $sql = "SELECT * FROM pengaduan WHERE nama LIKE ? OR dukuh LIKE ? OR isi LIKE ? ORDER BY pengaduanId DESC";
    $stmt = $conn->prepare($sql);

    $searchTerm = '%' . $search . '%';
    $stmt->bind_param('sss', $searchTerm, $searchTerm, $searchTerm);

    $stmt->execute();
    $result = $stmt->get_result();

    $pengaduan = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $pengaduan[] = $row;
        }
    }    

    $stmt->close();

    return $pengaduan;
}
