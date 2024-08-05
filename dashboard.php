<?php
session_start();
require_once 'services/useCase/adminVerification.php';
require_once 'services/useCase/getPengaduan.php';
require_once 'services/useCase/deletePengaduan.php';

adminVerification();

$pengaduanList = getPengaduan();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['deletePengaduanId'])) {
  $pengaduanId = $_POST['deletePengaduanId'];
  if (deletePengaduan($pengaduanId)) {
    echo "<script>alert('Pengaduan berhasil dihapus'); window.location.href = 'dashboard.php';</script>";
  } else {
    echo "<script>alert('Pengaduan gagal dihapus'); window.location.href = 'dashboard.php';</script>";
  }
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard - Desa Kertamulya</title>
  <!-- TAILWIND CSS -->
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />

  <link rel="stylesheet" href="./src/style/global.css" />
  <script>
    function confirmDelete(pengaduanId) {
      if (confirm('Apakah Anda yakin ingin menghapus pengaduan ini?')) {
        document.getElementById('deletePengaduanId').value = pengaduanId;
        document.getElementById('deleteForm').submit();
      }
    }
  </script>
</head>

<body class="bg-white flex flex-col">
  <!-- NAVBAR -->
  <nav class="sticky top-0 z-50 block w-full max-w-full px-4 py-1 text-black bg-white border rounded-none shadow-md border-white/80 lg:px-8 lg:py-2">
    <div class="flex items-center justify-between text-blue-gray-900">
      <a href="../#hero" class="mr-4 block cursor-pointer py-1.5 font-sans text-base font-medium leading-relaxed text-inherit antialiased flex items-center gap-2">
        <img src="./src/images/logo.png" class="w-auto h-12" />
        <span class="hidden lg:inline-block font-poppins text-xl font-bold">Dashboard</span>
      </a>
      <div class="flex items-center gap-4">
        <div class="flex items-center gap-x-1">
          <form id="logoutForm" method="post" action="services/useCase/logout.php">
            <button type="submit" class="select-none rounded-lg bg-primary py-2 px-4 text-center align-middle font-sans text-xs font-bold uppercase text-white shadow-md shadow-gray-900/10 transition-all hover:shadow-lg hover:shadow-gray-900/20 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none lg:inline-block cursor-pointer">
              <span>Log Out</span>
            </button>
          </form>
        </div>
      </div>
    </div>
  </nav>


  <!-- DASHBOARD -->
  <section id="dashboard" class="w-full min-h-[80vh] z-10">
    <div class="flex flex-col gap-6 bg-white px-6 md:px-12 lg:px-24 py-12 relative overflow-x-auto">
      <h2 class="text-2xl font-bold font-poppins">
        Data Pengaduan Masyarakat
      </h2>

      <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
          <tr>
            <th scope="col" class="px-6 py-3">No</th>
            <th scope="col" class="px-6 py-3">Nama</th>
            <th scope="col" class="px-6 py-3">No Telepon</th>
            <th scope="col" class="px-6 py-3">Asal Dukuh</th>
            <th scope="col" class="px-6 py-3">Aduan</th>
            <th scope="col" class="px-6 py-3">Tanggal</th>
            <th scope="col" class="px-6 py-3"></th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($pengaduanList as $index => $pengaduan) : ?>
            <tr class="bg-white border-b text-black">
              <td scope="row" class="px-6 py-3"><?php echo $index + 1; ?></td>
              <td scope="row" class="px-6 py-3">
                <div class="font-medium">
                  <?php echo htmlspecialchars($pengaduan['nama']); ?>
                </div>
                <div>
                  <?php echo htmlspecialchars($pengaduan['nik']); ?>
                </div>
            </td>
              <td scope="row" class="px-6 py-3"><?php echo htmlspecialchars($pengaduan['telepon']); ?></td>
              <td scope="row" class="px-6 py-3"><?php echo htmlspecialchars($pengaduan['dukuh']); ?></td>
              <td scope="row" class="px-6 py-3"><?php echo htmlspecialchars($pengaduan['isi']); ?></td>
              <td scope="row" class="px-6 py-3"><?php echo htmlspecialchars($pengaduan['tanggal']); ?></td>
              <td scope="row" class="px-6 py-3">
                <button class="bg-red-500 text-white font-bold rounded-lg px-4 py-2 mt-2" onclick="confirmDelete(<?php echo $pengaduan['pengaduanId']; ?>)">
                  Hapus
                </button>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
      <form id="deleteForm" method="post" action="dashboard.php" style="display: none;">
        <input type="hidden" name="deletePengaduanId" id="deletePengaduanId">
      </form>

    </div>
  </section>
</body>

</html>