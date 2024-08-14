<?php
session_start();
require_once 'services/useCase/adminVerification.php';
require_once 'services/useCase/getPengaduan.php';
require_once 'services/useCase/deletePengaduan.php';
require_once 'services/useCase/updateStatus.php';
require_once 'services/useCase/formatDate.php';

adminVerification();

$q = isset($_GET['q']) ? $_GET['q'] : '';
$pengaduanList = getPengaduan($q);

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['deletePengaduanId'])) {
  $pengaduanId = $_POST['deletePengaduanId'];
  if (deletePengaduan($pengaduanId)) {
    echo "<script>alert('Pengaduan berhasil dihapus'); window.location.href = 'dashboard.php';</script>";
  } else {
    echo "<script>alert('Pengaduan gagal dihapus'); window.location.href = 'dashboard.php';</script>";
  }
  exit();
}
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['pengaduanId']) && isset($_POST['status'])) {
  $pengaduanId = $_POST['pengaduanId'];
  $status = $_POST['status'];

  if (updateStatus($pengaduanId, $status)) {
    echo "<script>alert('Status pengaduan berhasil diperbarui'); window.location.href = 'dashboard.php';</script>";
  } else {
    echo "<script>alert('Gagal memperbarui status pengaduan'); window.location.href = 'dashboard.php';</script>";
  }
  exit();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard - Kalurahan Purwodadi</title>
  <!-- TAILWIND CSS -->
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
  <!-- STYLE -->
  <link rel="stylesheet" href="./src/style/global.css" />
  <!-- ICON -->
  <link rel="icon" href="./src/images/kabKidul.png" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script>
    function confirmDelete(pengaduanId) {
      if (confirm('Apakah Anda yakin ingin menghapus pengaduan ini?')) {
        document.getElementById('deletePengaduanId').value = pengaduanId;
        document.getElementById('deleteForm').submit();
      }
    }

    function updateStatus(pengaduanId, status) {
      const form = document.createElement('form');
      form.method = 'POST';
      form.action = 'dashboard.php';

      const inputPengaduanId = document.createElement('input');
      inputPengaduanId.type = 'hidden';
      inputPengaduanId.name = 'pengaduanId';
      inputPengaduanId.value = pengaduanId;

      const inputStatus = document.createElement('input');
      inputStatus.type = 'hidden';
      inputStatus.name = 'status';
      inputStatus.value = status;

      form.appendChild(inputPengaduanId);
      form.appendChild(inputStatus);
      document.body.appendChild(form);
      form.submit();
    }
  </script>
</head>

<body class="bg-white flex flex-col">
  <!-- Modal HTML -->
  <div id="statusModal" class="fixed inset-0 z-50 hidden flex items-center justify-center bg-gray-900 bg-opacity-50 backdrop-blur-sm">
    <div class="bg-white rounded-lg p-6">
      <h2 id="modalTitle" class="text-lg font-bold mb-4">Status Pengaduan</h2>
      <p id="modalMessage" class="mb-4">Pilih tindakan yang akan dilakukan pada pengaduan ini.</p>
      <form id="statusForm" method="POST" action="dashboard.php">
        <input type="hidden" name="pengaduanId" id="pengaduanIdInput">
        <input type="hidden" name="status" id="statusInput">
        <div id="modalButtons" class="flex justify-end space-x-4">
          <button type="button" id="closeModalButton" class="bg-gray-500 text-white rounded-lg px-4 py-2">Tutup</button>
          <button type="button" id="rejectButton" class="bg-red-500 text-white rounded-lg px-4 py-2 hidden">Tolak</button>
          <button type="button" id="processButton" class="bg-blue-500 text-white rounded-lg px-4 py-2 hidden">Proses</button>
          <button type="button" id="doneButton" class="bg-green-500 text-white rounded-lg px-4 py-2 hidden">Selesai</button>
        </div>
      </form>
    </div>
  </div>

  <!-- NAVBAR -->
  <nav class="sticky top-0 z-50 block w-full max-w-full px-4 py-1 text-black bg-white border rounded-none shadow-md border-white/80 lg:px-8 lg:py-2">
    <div class="flex items-center justify-between text-blue-gray-900">
      <a href="../#hero" class="mr-4 block cursor-pointer py-1.5 font-sans text-base font-medium leading-relaxed text-inherit antialiased flex items-center gap-2">
        <img src="./src/images/kabKidul.png" class="w-auto h-12" />
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
      <form class="w-full md:w-1/2 lg:w-1/3 flex flex-row gap-2 self-end" action="dashboard.php" method="get">
        <input class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" type="text" id="q" name="q" placeholder="Cari pengaduan...  " value="<?php echo isset($_GET['q']) ? $_GET['q'] : ''; ?>" />
        <button class="w-fit bg-primary text-white font-bold rounded-lg px-4 py-2" type="submit"><i class="fa fa-search"></i></button>
      </form>
      <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
          <tr>
            <th scope="col" class="px-6 py-3">No</th>
            <th scope="col" class="px-6 py-3">Nama</th>
            <th scope="col" class="px-6 py-3">No Telepon</th>
            <th scope="col" class="px-6 py-3">Asal Dukuh</th>
            <th scope="col" class="px-6 py-3">Aduan</th>
            <th scope="col" class="px-6 py-3">Tanggal</th>
            <th scope="col" class="px-6 py-3">Status</th>
            <th scope="col" class="px-6 py-3"></th>
          </tr>
        </thead>
        <tbody>
          <?php
          if (count($pengaduanList) == 0) {
            echo '<tr class="bg-white border-b text-black"><td colspan="8" class="px-6 py-8 text-center">Tidak ada data pengaduan dengan keyword <b>&quot;' . $_GET['q'] . '&quot;</b></td></tr>';
          }
          ?>
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
              <td scope="row" class="px-6 py-3 max-w-2xl">
                <?php if ($pengaduan['foto'] != null): ?>
                  <img src="uploads/<?php echo htmlspecialchars($pengaduan['foto']); ?>" class="w-full h-32 object-cover mb-4 cursor-pointer" onclick="window.open('uploads/<?php echo htmlspecialchars($pengaduan['foto']); ?>', '_blank')" />
                  <p class="cursor-pointer text-sm text-gray-500 -mt-4" onclick="window.open('uploads/<?php echo htmlspecialchars($pengaduan['foto']); ?>', '_blank')">Klik gambar untuk melihat</p>
                <?php endif; ?>
                <?php echo htmlspecialchars($pengaduan['isi']); ?>
              </td>

              <td scope="row" class="px-6 py-3"><?php echo formatDate(htmlspecialchars($pengaduan['tanggal'])); ?></td>
              <td scope="row" class="px-6 py-3">
                <select
                  name="status"
                  class="bg-gray-200 text-gray-800 rounded-lg px-4 py-2 min-w-[420px]"
                  onchange="updateStatus(<?php echo $pengaduan['pengaduanId']; ?>, this.value)">
                  <option value="1" <?php echo $pengaduan['status'] == 1 ? 'selected' : ''; ?>>Belum Ditanggapi</option>
                  <option value="2" <?php echo $pengaduan['status'] == 2 ? 'selected' : ''; ?>>Pengaduan Ditolak</option>
                  <option value="3" <?php echo $pengaduan['status'] == 3 ? 'selected' : ''; ?>>Dalam Proses</option>
                  <option value="4" <?php echo $pengaduan['status'] == 4 ? 'selected' : ''; ?>>Selesai</option>
                </select>
              </td>

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

  <script src="./src/script/modalConfirmation.js"></script>

</body>

</html>