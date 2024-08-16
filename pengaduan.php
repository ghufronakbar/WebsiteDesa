<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Formulir Pengaduan - Desa Kertamulya</title>
  <!-- TAILWIND CSS -->
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
  <!-- STYLE -->
  <link rel="stylesheet" href="./src/style/global.css" />
  <!-- ICON -->
  <link rel="icon" href="./src/images/kabKidul.png" />
</head>

<body class="bg-white flex flex-col">

  <!-- NAVBAR -->
  <nav class="sticky top-0 z-50 block w-full max-w-full px-4 py-1 text-black bg-white border rounded-none shadow-md border-white/80 lg:px-8 lg:py-2">
    <div class="flex items-center justify-between text-blue-gray-900">
      <a href="./#hero" class="mr-4 block cursor-pointer py-1.5 font-sans text-base font-medium leading-relaxed text-inherit antialiased flex items-center gap-2">
        <img src="./src/images/kabKidul.png" class="w-auto h-12" />
        <span class="hidden lg:inline-block font-poppins text-xl font-bold">Kalurahan Purwodadi</span>
      </a>
      <div class="flex items-center gap-4">
        <div class="hidden mr-4 lg:block">
          <ul class="flex flex-col gap-2 mt-2 mb-4 lg:mb-0 lg:mt-0 lg:flex-row lg:items-center lg:gap-6">
            <li class="block p-1 font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
              <a href="./#hero" class="flex items-center">Home</a>
            </li>
            <li class="block p-1 font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
              <a href="./#visi" class="flex items-center">Tentang Kami</a>
            </li>
            <li class="block p-1 font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
              <a href="./#wisata" class="flex items-center">Wisata</a>
            </li>
            <li class="block p-1 font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
              <a href="./#struktur" class="flex items-center">Struktur</a>
            </li>
            <li class="block p-1 font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
              <a href="./#footer" class="flex items-center">Kontak</a>
            </li>
          </ul>
        </div>
        <div class="flex items-center gap-x-1">          
          <a class="hidden select-none rounded-lg bg-primary py-2 px-4 text-center align-middle font-sans text-xs font-bold uppercase text-white shadow-md shadow-gray-900/10 transition-all hover:shadow-lg hover:shadow-gray-900/20 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none lg:inline-block cursor-pointer" href="./pengaduan.php" target="_blank" type="button">
            <span>Pengaduan</span>
          </a>
        </div>
        <button id="menu-toggle" class="relative ml-auto h-6 max-h-[40px] w-6 max-w-[40px] select-none rounded-lg text-center align-middle font-sans text-xs font-medium uppercase text-inherit transition-all hover:bg-transparent focus:bg-transparent active:bg-transparent disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none lg:hidden" type="button">
          <span class="absolute transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
          </span>
        </button>
      </div>
    </div>

    <!-- Menu Mobile -->
    <div id="mobile-menu" class="fixed inset-0 z-40 bg-white border-t border-gray-200 lg:hidden transform translate-y-full transition-transform duration-300 ease-in-out">
      <ul class="flex flex-col p-4 space-y-4">
        <li class="block p-1 font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
          <a href="./#hero" class="flex items-center mobile-menu-item">Home</a>
        </li>
        <li class="block p-1 font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
          <a href="./#visi" class="flex items-center mobile-menu-item">Tentang Kami</a>
        </li>
        <li class="block p-1 font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
          <a href="./#wisata" class="flex items-center mobile-menu-item">Wisata</a>
        </li>
        <li class="block p-1 font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
          <a href="./#struktur" class="flex items-center mobile-menu-item">Struktur</a>
        </li>
        <li class="block p-1 font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
          <a href="./#footer" class="flex items-center mobile-menu-item">Kontak</a>
        </li>
        <li class="block p-1 font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
          <a class="flex items-center mobile-menu-item" href="./pengaduan.php" target="_blank">
            Pengaduan
          </a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- PENGADUAN -->
  <section id="pengaduan" class="w-full min-h-[80vh] z-10 bg-white py-20 ">
    <div class="w-full flex flex-col items-center gap-6 md:gap-8 lg:gap-12 px-6 md:px-12 lg:px-24 md:px-12 lg:px-24">
      <h2 class="text-black font-bold text-lg md:text-xl lg:text-2xl md:text-xl lg:text-2xl font-poppins text-center">
        Formulir Pengaduan
      </h2>
      <div class="w-full flex flex-col gap-8 items-center">
        <form class="w-full md:w-9/12 lg:w-8/12 flex flex-col gap-4 items-center" action="pengaduan.php" method="post" enctype="multipart/form-data">
          <a href="./riwayat-pengaduan.php" class="text-white bg-primary w-fit px-6 py-2 rounded-lg font-poppins font-bold text-sm self-end">Cek Status Aduan</a>
          <div class="w-full flex flex-col gap-2">
            <label for="nama" class="text-black font-bold">Nama</label>
            <input type="text" class="border border-black rounded-lg px-4 py-2" id="nama" name="nama" placeholder="Masukkan Nama" />
          </div>
          <div class="w-full flex flex-col gap-2">
            <label for="nik" class="text-black font-bold">NIK</label>
            <input type="text" inputmode="numeric" class="border border-black rounded-lg px-4 py-2" id="nik" name="nik" placeholder="Masukkan NIK" />
          </div>
          <div class="w-full flex flex-col gap-2">
            <label for="telepon" class="text-black font-bold">No Telepon</label>
            <input type="text" inputmode="numeric" class="border border-black rounded-lg px-4 py-2" id="telepon" name="telepon" placeholder="Masukkan No Telepon" />
          </div>
          <div class="w-full flex flex-col gap-2">
            <label for="dukuh" class="text-black font-bold">Asal Dukuh</label>
            <input type="text" class="border border-black rounded-lg px-4 py-2" id="dukuh" name="dukuh" placeholder="Masukkan Asal Dukuh" />
          </div>
          <div class="w-full flex flex-col gap-2">
            <label for="isi" class="text-black font-bold">Aduan</label>
            <textarea type="text" class="border border-black rounded-lg px-4 py-2" id="isi" name="isi" placeholder="Masukkan Aduan" rows="5"></textarea>
          </div>
          <div class="w-full flex flex-col gap-2">
            <label for="foto" class="text-black font-bold">Lampirkan Foto</label>
            <input type="file" class="border border-black rounded-lg px-4 py-2" id="foto" name="foto" accept=".jpg, .jpeg, .png" />
            <p class="text-sm text-gray-500">Format yang diperbolehkan: .jpg, .jpeg, .png</p>
          </div>
          <div class="w-full flex flex-row md:gap-1 items-center">
            <input type="checkbox" class="border border-black rounded-lg px-4 py-2" id="anonim" name="anonim" />
            <label for="anonim" class="text-black">Kirim sebagai anonim</label>
          </div>
          <button class="bg-primary text-white font-bold rounded-lg px-4 py-2 mt-2" type="submit">Kirim</button>
        </form>
      </div>
    </div>
  </section>
  
  <?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require_once 'services/useCase/createPengaduan.php';

    if (!isset($_POST['anonim']) && (empty($_POST['nama']) || empty($_POST['telepon']) || empty($_POST['dukuh']) || empty($_POST['isi']) || empty($_POST['nik']))) {
      echo "<script>alert('Tolong Isi Semua Field');</script>";
      exit;
    }

    if (isset($_POST['anonim']) && (empty($_POST['isi']))) {
      echo "<script>alert('Tolong Isi Semua Field');</script>";
      exit;
    }

    if (isset($_POST['anonim'])) {
      $nama = "Anonim";
      $telepon = "Anonim";
      $dukuh = "Anonim";
      $nik = "Anonim";
      $isi = $_POST['isi'];
    } else {
      $nama = $_POST['nama'];
      $telepon = $_POST['telepon'];
      $dukuh = $_POST['dukuh'];
      $nik = $_POST['nik'];
      $isi = $_POST['isi'];
    }

    $foto = null;
    if (isset($_FILES['foto']) && $_FILES['foto']['error'] == UPLOAD_ERR_OK) {
      $allowedTypes = ['image/jpeg', 'image/jpg', 'image/png'];
      $fileType = mime_content_type($_FILES['foto']['tmp_name']);

      if (in_array($fileType, $allowedTypes)) {
        $ext = pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);
        $foto = uniqid('', true) . '.' . $ext;
        $uploadDir = __DIR__ . '/uploads/';

        if (!file_exists($uploadDir)) {
          mkdir($uploadDir, 0755, true);
        }

        if (move_uploaded_file($_FILES['foto']['tmp_name'], $uploadDir . $foto)) {
          
        } else {
          echo "<script>alert('Gagal mengunggah file');</script>";
          exit;
        }
      } else {
        echo "<script>alert('Format file tidak diperbolehkan. Hanya .jpg, .jpeg, .png yang diizinkan.');</script>";
        exit;
      }
    }

    $result = createPengaduan($nama, $telepon, $dukuh, $isi, $nik, $foto);
    echo "<script>alert('Pengaduan Terkirim');</script>";
  }
  ?>



  <!-- FOOTER SECTION -->
  <section id="footer" class="w-full min-h-[80vh] z-10 bg-black py-20 text-white">
    <div class="w-full flex flex-col items-center gap-6 px-6 md:px-12 lg:px-24">
      <h2 class="font-bold text-lg md:text-xl lg:text-2xl font-poppins text-center">
        Kontak Kami
      </h2>
      <div class="w-full flex flex-col md:flex-row gap-6">
        <img src="./src/images/kabKidul.png" class="w-40 h-auto object-cover rounded-lg hover:scale-105 transition-all self-center md:self-start" />
        <div class="w-full flex flex-col px-4 gap-2">
          <div class="w-full flex flex-col">
            <h4 class="font-bold text-base font-poppins">Email</h4>
            <a class="text-sm" href="mailto:laporpurwodadi@gmail.com">laporpurwodadi@gmail.com</a>
          </div>
          <div class="w-full flex flex-col">
            <h4 class="font-bold text-base font-poppins">Telepon</h4>
            <a class="text-sm" href="https://wa.me/6282225031574">082225031574</a>
          </div>
        </div>
        <div class="w-full flex flex-col px-4 gap-2">
          <div class="w-full flex flex-col">
            <h4 class="font-bold text-base font-poppins">Alamat</h4>
            <p class="text-sm">Cepogo, Purwodadi, Tepus, Gunungkidul</p>
          </div>
          <div class="w-full flex flex-col">
            <h4 class="font-bold text-base font-poppins">Website</h4>
            <p class="text-sm">www.laporpurwodadi.site</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SCRIPTS -->
  <script src="./src/script/navbar.js"></script>
  <script src="./src/script/scrollSmooth.js"></script>
  <script src="./src/script/setDisabled.js"></script>
</body>

</html>