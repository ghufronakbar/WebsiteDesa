<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Kalurahan Purwodadi</title>
  <!-- TAILWIND CSS -->
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
  <!-- STYLE -->
  <link rel="stylesheet" href="./src/style/global.css" />
  <!-- ICON -->
  <link rel="icon" href="./src/images/kabKidul.png" />
</head>

<body class="bg-desa bg-cover bg-center bg-fixed flex flex-col" style="background-image: url('./src/images/hero.jpg');">
  <!-- NAVBAR -->
  <nav
    class="sticky top-0 z-50 block w-full max-w-full px-4 py-1 text-black bg-white border rounded-none shadow-md border-white/80 lg:px-8 lg:py-2">
    <div class="flex items-center justify-between text-blue-gray-900">
      <a
        href="#hero"
        class="mr-4 block cursor-pointer py-1.5 font-sans text-base font-medium leading-relaxed text-inherit antialiased flex items-center gap-2">
        <img src="./src/images/kabKidul.png" class="w-auto h-12" />
        <span class="hidden lg:inline-block font-poppins text-xl font-bold">Kalurahan Purwodadi</span>
      </a>
      <div class="flex items-center gap-4">
        <div class="hidden mr-4 lg:block">
          <ul
            class="flex flex-col gap-2 mt-2 mb-4 lg:mb-0 lg:mt-0 lg:flex-row lg:items-center lg:gap-6">
            <li
              class="block p-1 font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
              <a href="#hero" class="flex items-center">Home</a>
            </li>
            <li
              class="block p-1 font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
              <a href="#visi" class="flex items-center">Tentang Kami</a>
            </li>
            <li
              class="block p-1 font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
              <a href="#wisata" class="flex items-center">Wisata</a>
            </li>
            <li
              class="block p-1 font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
              <a href="#struktur" class="flex items-center">Struktur</a>
            </li>
            <li
              class="block p-1 font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
              <a href="#footer" class="flex items-center">Kontak</a>
            </li>
          </ul>
        </div>
        <div class="flex items-center gap-x-1">          
          <a
            class="hidden select-none rounded-lg bg-primary py-2 px-4 text-center align-middle font-sans text-xs font-bold uppercase text-white shadow-md shadow-gray-900/10 transition-all hover:shadow-lg hover:shadow-gray-900/20 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none lg:inline-block cursor-pointer"
            href="./pengaduan.php"
            target="_blank"
            type="button">
            <span>Pengaduan</span>
          </a>
        </div>
        <button
          id="menu-toggle"
          class="relative ml-auto h-6 max-h-[40px] w-6 max-w-[40px] select-none rounded-lg text-center align-middle font-sans text-xs font-medium uppercase text-inherit transition-all hover:bg-transparent focus:bg-transparent active:bg-transparent disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none lg:hidden"
          type="button">
          <span
            class="absolute transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="w-6 h-6"
              fill="none"
              stroke="currentColor"
              stroke-width="2">
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
          </span>
        </button>
      </div>
    </div>

    <!-- Menu Mobile -->
    <div
      id="mobile-menu"
      class="fixed inset-0 z-40 bg-white border-t border-gray-200 lg:hidden transform translate-y-full transition-transform duration-300 ease-in-out">
      <ul class="flex flex-col p-4 space-y-4">
      <li
          class="block p-1 font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
          <a href="#hero" class="flex items-center mobile-menu-item">Home</a>
        </li>
        <li
          class="block p-1 font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
          <a href="#visi" class="flex items-center mobile-menu-item">Tentang Kami</a>
        </li>
        <li
          class="block p-1 font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
          <a href="#wisata" class="flex items-center mobile-menu-item">Wisata</a>
        </li>
        <li
          class="block p-1 font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
          <a href="#struktur" class="flex items-center mobile-menu-item">Struktur</a>
        </li>
        <li
          class="block p-1 font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
          <a href="#footer" class="flex items-center mobile-menu-item">Kontak</a>
        </li>
        <li
          class="block p-1 font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
          <a
            class="flex items-center mobile-menu-item"
            href="./pengaduan.php"
            target="_blank">
            Pengaduan
          </a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- HERO SECTION -->
  <section
    id="hero"
    class="w-full min-h-screen bg-cover bg-center bg-fixed relative -z-10">
    <div class="mx-auto flex flex-col items-center relative">
      <div
        class="flex flex-col gap-4 fixed top-60 translate-y-1/2 translate-x-1/2 items-center px-6">
        <h1
          class="text-white font-bold text-3xl md:text-5xl font-poppins text-center">
          Kalurahan Purwodadi
        </h1>
        <p
          class="text-white font-normal text-xs md:text-sm font-poppins max-w-md text-center">
          &quot; Kalurahan Purwodadi adalah salah satu desa di Indonesia yang memiliki potensi besar.
          Dengan kekayaan alam dan budaya yang unik, Purwodadi menawarkan pengalaman yang menarik bagi
          pengunjung.&quot;
        </p>
        <a
          class="text-white font-semibold py-2 px-4 rounded bg-primary font-poppins text-center hover:bg-secondary cursor-pointer"
          href="#visi">
          Jelajahi
        </a>
      </div>
    </div>
  </section>

  <!-- VISI MISI SECTION -->
  <section
    id="visi"
    class="w-full min-h-[80vh] z-10 bg-white py-20 rounded-t-3xl -mb-20 shadow-black shadow-lg drop-shadow-2xl">
    <div
      class="w-full flex flex-col items-center gap-6 md:gap-8 lg:gap-12 px-6 md:px-12 lg:px-24">
      <h2 class="text-black font-bold text-lg md:text-xl lg:text-2xl md:text-xl lg:text-2xl font-poppins text-center">Lapor Purwodadi
      </h2>
      <h2 class="md:text-xl text-black text-sm text-center">Lapor Purwodadi adalah platform online yang memudahkan masyarakat Kalurahan Purwodadi untuk menyampaikan aspirasi, keluhan, dan saran kepada pemerintah setempat.
      </h2>
      <p></p>
      <div class="w-full grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-6">
        <div
          class="w-full flex flex-col gap-4 pb-4 border border-gray-300 rounded-lg overflow-hidden">
          <img
            src="./src/images/24jama.png"
            class="w-full h-48 object-cover rounded-t-lg hover:scale-105 transition-all" />
          <div class="w-full flex flex-col gap-2 px-4 text-center">
            <h3 class="text-black font-bold text-lg font-poppins">
              Pengaduan Online 24 Jam
            </h3>
            <p class="text-black text-sm">
              Status pengaduan yang dapat dipantau secara real-time oleh pelapor.
            </p>
          </div>
          <div class="absolute bottom-0 left-0 w-full bg-white opacity-0 transition-opacity duration-300 hidden" id="moreInfo">
            <p class="text-black text-sm">
              More detailed information about Pantai Siung
            </p>
          </div>
        </div>
        <div
          class="w-full flex flex-col gap-4 pb-4 border border-gray-300 rounded-lg overflow-hidden">
          <img
            src="./src/images/mudah.png"
            class="w-full h-48 object-cover rounded-t-lg hover:scale-105 transition-all" />
          <div class="w-full flex flex-col gap-2 px-4 text-center">
            <h3 class="text-black font-bold text-lg font-poppins">
              Akses Mudah
            </h3>
            <p class="text-black text-sm">
              Formulir pengaduan yang mudah diakses dengan fitur upload foto untuk melampirkan bukti
            </p>
          </div>
        </div>
        <div
          class="w-full flex flex-col gap-4 pb-4 border border-gray-300 rounded-lg overflow-hidden">
          <img
            src="./src/images/sigap.png"
            class="w-full h-48 object-cover rounded-t-lg hover:scale-105 transition-all" />
          <div class="w-full flex flex-col gap-2 px-4 text-center">
            <h3 class="text-black font-bold text-lg font-poppins">
              Tanggap Menanggapi
            </h3>
            <p class="text-black text-sm">
              Prioritas Berdasarkan Urgensi, Aduan yang mendesak ditangani lebih dahulu untuk memastikan masalah kritis diatasi cepat.
            </p>
          </div>
        </div>
        <div
          class="w-full flex flex-col gap-4 pb-4 border border-gray-300 rounded-lg overflow-hidden">
          <img
            src="./src/images/aman.png"
            class="w-full h-48 object-cover rounded-t-lg hover:scale-105 transition-all" />
          <div class="w-full flex flex-col gap-2 px-4 text-center">
            <h3 class="text-black font-bold text-lg font-poppins">
              Keamanan dan Privasi Terjaga
            </h3>
            <p class="text-black text-sm">
              Melindungi data pribadi pelapor dengan menggunakan enkripsi yang kuat.
            </p>
          </div>
        </div>
        <div
          class="w-full flex flex-col gap-4 pb-4 border border-gray-300 rounded-lg overflow-hidden">
          <img
            src="./src/images/efisiensi.png"
            class="w-full h-48 object-cover rounded-t-lg hover:scale-60 transition-all" />
          <div class="w-full flex flex-col gap-2 px-4 text-center">
            <h3 class="text-black font-bold text-lg font-poppins">
              Efisiensi
            </h3>
            <p class="text-black text-sm">
              Proses penanganan pengaduan menjadi lebih efisien dan efektif.
            </p>
          </div>
        </div>
      </div>
      <div class="w-full flex flex-col items-center gap-6 md:gap-8 lg:gap-12 px-6 md:px-12 lg:px-24 md:px-12 lg:px-24">
        <p></p>
        <h2 class="text-black font-regular text-sm md:text-xl lg:text-2xl md:text-xl lg:text-2xl font-poppins text-center">
          Tatacara Pengaduan
        </h2>
        <h2 class="md:text-xl text-black text-sm text-center">
          Langkah-langkah yang harus diikuti saat ingin menyampaikan keluhan
          atau ketidakpuasan terkait suatu layanan atau tindakan. Tujuannya yaitu
          untuk mendapatkan solusi atas masalah yang dialami dan meningkatkan kualitas pelayanan.
        </h2>
        <p></p>
        <img src="./src/images/tatacara.png" alt="Gambar Tatacara" class="w-full md:w-3/4 lg:px-1/14">
      </div>
      <p></p>
      <p></p>
      <div
        class="w-full flex flex-col items-center gap-6 md:gap-8 lg:gap-12 px-6 md:px-12 lg:px-24 md:px-12 lg:px-24">

        <h2
          class="text-black font-bold text-lg md:text-xl lg:text-2xl md:text-xl lg:text-2xl font-poppins text-center">
          Surga Tersembunyi di Pantai Selatan Gunungkidul
        </h2>
        <div class="w-full flex flex-col gap-8 md:flex-row items-center">
          <div class="w-full flex justify-center">
            <img
              src="./src/images/siung.JPG"
              class="w-1/11 object-cover rounded-lg hover:scale-105 transition-all" />
          </div>
          <div class="w-full flex flex-col gap-2 text-justify">
            <p>
              Dusun Purwodadi, sebuah permata tersembunyi di pesisir selatan Gunungkidul,
              menawarkan pesona alam yang luar biasa. Dengan garis pantai yang menawan,
              tebing-tebing karang yang gagah, dan hamparan pasir putih yang lembut,
              Purwodadi adalah surga bagi para pecinta alam dan petualang.
            </p>
            <p>
              Purwodadi juga merupakan destinasi wisata edukasi yang menarik.
              Dengan beragam ekosistem yang ada, desa ini menjadi laboratorium
              alam yang sempurna untuk mempelajari keanekaragaman hayati dan pentingnya
              menjaga kelestarian lingkungan.
            </p>
            <p>
              Masyarakat Purwodadi memiliki semangat gotong royong yang tinggi dan menjunjung
              tinggi nilai-nilai adat istiadat. Potensi ekonomi desa pun terus dikembangkan,
              antara lain melalui sektor pertanian, perikanan, dan pariwisata yang berkelanjutan.
            </p>
            <p>
              Datanglah ke Purwodadi dan rasakan sendiri pengalaman yang tak terlupakan. Jelajahi
              keindahan alamnya, belajar tentang warisan budaya yang kaya, dan nikmati keramahan
              masyarakatnya. Purwodadi adalah tempat yang tepat untuk melepas penat dan mencari ketenangan.
            </p>
          </div>
        </div>
      </div>
  </section>

  <!-- WISATA SECTION -->
  <section id="wisata" class="w-full min-h-[80vh] z-10 bg-white py-20">
    <div
      class="w-full flex flex-col items-center gap-6 md:gap-8 lg:gap-12 px-6 md:px-12 lg:px-24">
      <h2
        class="text-black font-bold text-lg md:text-xl lg:text-2xl font-poppins text-center">
        Datang dan jatuh cinta dengan wisata
      </h2>
      <div
        class="w-full grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-6">
        <!-- CARD 1 -->
        <div
          class="w-full flex flex-col gap-4 pb-4 border border-gray-300 rounded-lg overflow-hidden">
          <img
            src="./src/images/siung.JPG"
            class="w-full h-48 object-cover rounded-t-lg hover:scale-105 transition-all" />
          <div class="w-full flex flex-col gap-2 px-4">
            <h3 class="text-black font-bold text-lg font-poppins">
              Pantai Siung
            </h3>
            <p class="text-black text-sm">
              Pantai Siung, Gunungkidul, menawarkan tebing karang eksotis,
              pasir putih, dan ombak besar.
            </p>
          </div>
          <div class="absolute bottom-0 left-0 w-full bg-white opacity-0 transition-opacity duration-300 hidden" id="moreInfo">
            <p class="text-black text-sm">
              More detailed information about Pantai Siung
            </p>
          </div>
        </div>
        <div
          class="w-full flex flex-col gap-4 pb-4 border border-gray-300 rounded-lg overflow-hidden">
          <img
            src="./src/images/timang.jpeg"
            class="w-full h-48 object-cover rounded-t-lg hover:scale-105 transition-all" />
          <div class="w-full flex flex-col gap-2 px-4">
            <h3 class="text-black font-bold text-lg font-poppins">
              Pantai Timang
            </h3>
            <p class="text-black text-sm">
              Pantai Timang: Sensasi naik kereta gantung
              ke pulau kecil, tebing karang dramatis.
            </p>
          </div>
        </div>
        <div
          class="w-full flex flex-col gap-4 pb-4 border border-gray-300 rounded-lg overflow-hidden">
          <img
            src="./src/images/nglambor.jpg"
            class="w-full h-48 object-cover rounded-t-lg hover:scale-105 transition-all" />
          <div class="w-full flex flex-col gap-2 px-4">
            <h3 class="text-black font-bold text-lg font-poppins">
              Pantai Nglambor
            </h3>
            <p class="text-black text-sm">
              Pantai Nglambor: Surga snorkeling,
              dengan terumbu karang yang indah.
            </p>
          </div>
        </div>
        <div
          class="w-full flex flex-col gap-4 pb-4 border border-gray-300 rounded-lg overflow-hidden">
          <img
            src="./src/images/ndilem.JPG"
            class="w-full h-48 object-cover rounded-t-lg hover:scale-105 transition-all" />
          <div class="w-full flex flex-col gap-2 px-4">
            <h3 class="text-black font-bold text-lg font-poppins">
              Goa Ndilem
            </h3>
            <p class="text-black text-sm">
              Goa Ndilem: Sebuah permata tersembunyi di Gunungkidul
              yang menawarkan petualangan menarik bagi para penjelajah gua.
            </p>
          </div>
        </div>
        <div
          class="w-full flex flex-col gap-4 pb-4 border border-gray-300 rounded-lg overflow-hidden">
          <img
            src="./src/images/banyutibo.jpg"
            class="w-full h-48 object-cover rounded-t-lg hover:scale-105 transition-all" />
          <div class="w-full flex flex-col gap-2 px-4">
            <h3 class="text-black font-bold text-lg font-poppins">
              Pantai Banyu Tibo
            </h3>
            <p class="text-black text-sm">
              Pantai Banyu Tibo adalah sebuah permata tersembunyi di
              Gunungkidul yang menawarkan keindahan alam yang unik.
            </p>
          </div>
        </div>
        <div
          class="w-full flex flex-col gap-4 pb-4 border border-gray-300 rounded-lg overflow-hidden">
          <img
            src="./src/images/jogan.jpeg"
            class="w-full h-48 object-cover rounded-t-lg hover:scale-105 transition-all" />
          <div class="w-full flex flex-col gap-2 px-4">
            <h3 class="text-black font-bold text-lg font-poppins">
              Pantai Jogan
            </h3>
            <p class="text-black text-sm">
              Pantai Jogan adalah destinasi yang sempurna bagi
              Anda yang ingin menikmati keindahan alam yang unik dan menyegarkan.
            </p>
          </div>
        </div>
        <div
          class="w-full flex flex-col gap-4 pb-4 border border-gray-300 rounded-lg overflow-hidden">
          <img
            src="./src/images/ngitun.jpg"
            class="w-full h-48 object-cover rounded-t-lg hover:scale-105 transition-all" />
          <div class="w-full flex flex-col gap-2 px-4">
            <h3 class="text-black font-bold text-lg font-poppins">
              Pantai Ngetun
            </h3>
            <p class="text-black text-sm">
              Hidden gem di Gunungkidul yang menawarkan keindahan
              alam yang masih sangat alami.
            </p>
          </div>
        </div>
        <!-- CARD 2 -->
        <div
          class="w-full flex flex-col gap-4 pb-4 border border-gray-300 rounded-lg overflow-hidden">
          <img
            src="./src/images/pengilon.jpg"
            class="w-full h-48 object-cover rounded-t-lg hover:scale-105 transition-all" />
          <div class="w-full flex flex-col gap-2 px-4">
            <h3 class="text-black font-bold text-lg font-poppins">
              Bukit Pengilon
            </h3>
            <p class="text-black text-sm">
              Destinasi wisata populer di Gunungkidul yang
              menawarkan panorama alam yang menakjubkan dari bukit.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- STRUKTUR ORGANISASI SECTION -->
  <section id="struktur" class="w-full min-h-[80vh] z-10 bg-white py-20">
    <div
      class="w-full flex flex-col items-center gap-6 md:gap-8 lg:gap-12 px-6 md:px-12 lg:px-24">
      <h2
        class="text-black font-bold text-lg md:text-xl lg:text-2xl font-poppins text-center">
        Struktur Organisasi Kalurahan
      </h2>
      <div class="w-full flex flex-col md:flex-row gap-6">
        <img
          src="./src/images/Struktur.png"
          class="w-full object-cover rounded-lg hover:scale-105 transition-all" />
      </div>
    </div>
  </section>

  <!-- FOOTER SECTION -->
  <section
    id="footer"
    class="w-full min-h-[80vh] z-10 bg-black py-20 text-white">
    <div
      class="w-full flex flex-col items-center gap-6 px-6 md:px-12 lg:px-24">
      <h2
        class="font-bold text-lg md:text-xl lg:text-2xl font-poppins text-center">
        Kontak Kami
      </h2>
      <div class="w-full flex flex-col md:flex-row gap-6">
        <img
          src="./src/images/kabKidul.png"
          class="w-40 h-auto object-cover rounded-lg hover:scale-105 transition-all self-center md:self-start" />
        <div class="w-full flex flex-col px-4 gap-2">
          <div class="w-full flex flex-col">
            <h4 class="font-bold text-base font-poppins">Email</h4>
            <a class="text-sm" href="mailto:laporpurwodadi@gmail.com">laporpurwodadi@gmail.com</a>
          </div>
          <div class="w-full flex flex-col">
            <h4 class="font-bold text-base font-poppins">Telepon</h4>
            <a class="text-sm" href="https://wa.me/6282225031574//">082225031574</a>
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
</body>

</html>