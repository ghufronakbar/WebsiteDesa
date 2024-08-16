<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login Admin - Desa Kertamulya</title>
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
          <a href="./#visi" class="flex items-center mobile-menu-item">Home</a>
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

  <!-- LOGIN -->
  <section id="login" class="w-full min-h-[80vh] z-10 flex md:flex-row flex-col-reverse items-center gap-6 bg-white px-6 md:px-12 lg:px-24 py-12">
    <form class="w-full md:w-2/3 flex flex-col gap-4 items-center p-8 " action="login.php" method="post">
      <h2 class="text-black font-bold text-lg md:text-xl lg:text-2xl md:text-xl lg:text-2xl font-poppins text-center">
        Login sebagai Admin
      </h2>
      <div class="w-full flex flex-col gap-2">
        <label for="email" class="text-black font-bold">Email</label>
        <input type="email" class="border border-black rounded-lg px-4 py-2" id="telepon" placeholder="Masukkan Email" name="email" />
      </div>
      <div class="w-full flex flex-col gap-2">
        <label for="password" class="text-black font-bold">Password</label>
        <input type="password" class="border border-black rounded-lg px-4 py-2" id="password" placeholder="Masukkan Password" name="password" />
      </div>
      <button class="bg-primary text-white font-bold rounded-lg px-4 py-2 mt-2 ">Login</button>
    </form>
    <div class="w-full md:w-2/3 flex flex-col items-center justify-center">
      <img src="./src/images/login.webp" class="w-1/2 h-auto object-cover rounded-lg hover:scale-105 transition-all" />
    </div>
  </section>

  <?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require_once 'services/useCase/loginAdmin.php';

    $email = $_POST['email'];
    $password = $_POST['password'];

    if (loginAdmin($email, $password)) {
      // Redirect ke halaman dashboard
      echo "<script>window.location.href = 'dashboard.php';</script>";
      exit();
    } else {
      echo "<p>Email atau password salah. Silakan coba lagi.</p>";
    }
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