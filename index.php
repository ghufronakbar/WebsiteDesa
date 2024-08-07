<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Desa Kertamulya</title>
    <!-- TAILWIND CSS -->
    <link
      href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="./src/style/global.css" />
  </head>
  <body class="bg-url bg-cover bg-center bg-fixed flex flex-col">
    <!-- NAVBAR -->
    <nav
      class="sticky top-0 z-50 block w-full max-w-full px-4 py-1 text-black bg-white border rounded-none shadow-md border-white/80 lg:px-8 lg:py-2"
    >
      <div class="flex items-center justify-between text-blue-gray-900">
        <a
          href="#hero"
          class="mr-4 block cursor-pointer py-1.5 font-sans text-base font-medium leading-relaxed text-inherit antialiased flex items-center gap-2"
        >
          <img src="./src/images/logo.png" class="w-auto h-12" />
          <span class="hidden lg:inline-block font-poppins text-xl font-bold"
            >Desa Kertamulya</span
          >
        </a>
        <div class="flex items-center gap-4">
          <div class="hidden mr-4 lg:block">
            <ul
              class="flex flex-col gap-2 mt-2 mb-4 lg:mb-0 lg:mt-0 lg:flex-row lg:items-center lg:gap-6"
            >
              <li
                class="block p-1 font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900"
              >
                <a href="#visi" class="flex items-center">Visi Misi</a>
              </li>
              <li
                class="block p-1 font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900"
              >
                <a href="#wisata" class="flex items-center">Wisata</a>
              </li>
              <li
                class="block p-1 font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900"
              >
                <a href="#struktur" class="flex items-center">Struktur</a>
              </li>
              <li
                class="block p-1 font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900"
              >
                <a href="#footer" class="flex items-center">Kontak</a>
              </li>
            </ul>
          </div>
          <div class="flex items-center gap-x-1">
            <a
              class="hidden px-4 py-2 font-sans text-xs font-bold text-center text-gray-900 uppercase align-middle transition-all rounded-lg select-none hover:bg-gray-900/10 active:bg-gray-900/20 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none lg:inline-block"
              href="./login.php"              
            >
              <span>Log In</span>
            </a>
            <a
              class="hidden select-none rounded-lg bg-primary py-2 px-4 text-center align-middle font-sans text-xs font-bold uppercase text-white shadow-md shadow-gray-900/10 transition-all hover:shadow-lg hover:shadow-gray-900/20 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none lg:inline-block cursor-pointer"
              href="./pengaduan.php"
              target="_blank"
              type="button"
            >
              <span>Pengaduan</span>
            </a>
          </div>
          <button
            id="menu-toggle"
            class="relative ml-auto h-6 max-h-[40px] w-6 max-w-[40px] select-none rounded-lg text-center align-middle font-sans text-xs font-medium uppercase text-inherit transition-all hover:bg-transparent focus:bg-transparent active:bg-transparent disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none lg:hidden"
            type="button"
          >
            <span
              class="absolute transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="w-6 h-6"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M4 6h16M4 12h16M4 18h16"
                ></path>
              </svg>
            </span>
          </button>
        </div>
      </div>

      <!-- Menu Mobile -->
      <div
        id="mobile-menu"
        class="fixed inset-0 z-40 bg-white border-t border-gray-200 lg:hidden transform translate-y-full transition-transform duration-300 ease-in-out"
      >
        <ul class="flex flex-col p-4 space-y-4">
          <li
            class="block p-1 font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900"
          >
            <a href="#visi" class="flex items-center mobile-menu-item"
              >Visi Misi</a
            >
          </li>
          <li
            class="block p-1 font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900"
          >
            <a href="#wisata" class="flex items-center mobile-menu-item"
              >Wisata</a
            >
          </li>
          <li
            class="block p-1 font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900"
          >
            <a href="#struktur" class="flex items-center mobile-menu-item"
              >Struktur</a
            >
          </li>
          <li
            class="block p-1 font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900"
          >
            <a href="#footer" class="flex items-center mobile-menu-item"
              >Kontak</a
            >
          </li>
          <li
            class="block p-1 font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900"
          >
            <a
              class="flex items-center mobile-menu-item"
              href="./pengaduan.php"
              target="_blank"              
            >
              Pengaduan
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <!-- HERO SECTION -->
    <section
      id="hero"
      class="w-full min-h-screen bg-cover bg-center bg-fixed relative -z-10"
    >
      <div class="mx-auto flex flex-col items-center relative">
        <div
          class="flex flex-col gap-4 fixed top-60 translate-y-1/2 translate-x-1/2 items-center px-6"
        >
          <h1
            class="text-white font-bold text-3xl md:text-5xl font-poppins text-center"
          >
            Desa Kertamulya
          </h1>
          <p
            class="text-white font-normal text-xs md:text-sm font-poppins max-w-md text-center"
          >
            &quot; Desa Kertamulya Kecamatan Kebonagung Kabupaten Kebonagung
            Provinsi Jawa Timur &quot;
          </p>
          <a
            class="text-white font-semibold py-2 px-4 rounded bg-primary font-poppins text-center hover:bg-secondary cursor-pointer"
            href="#visi"
          >
            Jelajahi
          </a>
        </div>
      </div>
    </section>

    <!-- VISI MISI SECTION -->
    <section
      id="visi"
      class="w-full min-h-[80vh] z-10 bg-white py-20 rounded-t-3xl -mb-20 shadow-black shadow-lg drop-shadow-2xl"
    >
      <div
        class="w-full flex flex-col items-center gap-6 md:gap-8 lg:gap-12 px-6 md:px-12 lg:px-24 md:px-12 lg:px-24"
      >
        <h2
          class="text-black font-bold text-lg md:text-xl lg:text-2xl md:text-xl lg:text-2xl font-poppins text-center"
        >
          Kertamulya, Desa Mandiri, Sejahtera, dan Berdaya Saing Berbasis
          Kearifan Lokal
        </h2>
        <div class="w-full flex flex-col gap-8 md:flex-row items-center">
          <div class="w-full flex justify-center">
            <img
              src="./src/images/kades.png"
              class="w-1/2 object-cover rounded-lg hover:scale-105 transition-all"
            />
          </div>
          <div class="w-full flex flex-col gap-2 text-justify">
            <p>
              Kami berkomitmen untuk meningkatkan kualitas hidup masyarakat
              melalui penyediaan layanan kesehatan yang lebih baik dan lebih
              mudah diakses oleh semua warga. Selain itu, kami akan
              mengembangkan program pendidikan dan pelatihan untuk meningkatkan
              keterampilan dan pengetahuan masyarakat. Infrastruktur dasar
              seperti air bersih, listrik, dan sanitasi juga akan kami perbaiki
              dan kembangkan untuk memastikan kesejahteraan seluruh warga desa.
            </p>
            <p>
              Untuk mendorong pertumbuhan ekonomi desa, kami akan fokus pada
              pengembangan usaha kecil dan menengah (UKM) yang berbasis potensi
              lokal. Sektor pertanian, peternakan, dan perikanan akan kami
              kembangkan dengan menggunakan teknologi tepat guna untuk
              meningkatkan produktivitas dan kualitas hasil. Kami juga akan
              meningkatkan akses pasar dan promosi produk-produk unggulan desa
              melalui pemasaran digital, sehingga produk lokal dapat dikenal
              lebih luas.
            </p>
            <p>
              Kami berkomitmen untuk melestarikan dan mengelola sumber daya alam
              secara berkelanjutan, dengan memanfaatkan teknologi ramah
              lingkungan dan praktik terbaik. Selain itu, kami akan
              mengembangkan program-program yang berbasis kearifan lokal yang
              mendukung pelestarian budaya dan tradisi desa. Melalui berbagai
              kegiatan edukasi dan kampanye, kami akan meningkatkan kesadaran
              masyarakat terhadap pentingnya menjaga dan merawat lingkungan
              sekitar.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- WISATA SECTION -->
    <section id="wisata" class="w-full min-h-[80vh] z-10 bg-white py-20">
      <div
        class="w-full flex flex-col items-center gap-6 md:gap-8 lg:gap-12 px-6 md:px-12 lg:px-24"
      >
        <h2
          class="text-black font-bold text-lg md:text-xl lg:text-2xl font-poppins text-center"
        >
          Datang dan jatuh cinta dengan wisata
        </h2>
        <div
          class="w-full grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-6"
        >
          <!-- CARD 1 -->
          <div
            class="w-full flex flex-col gap-4 pb-4 border border-gray-300 rounded-lg overflow-hidden"
          >
            <img
              src="https://setkab.go.id/wp-content/uploads/2022/02/FOTO-DESA-KEMENPAREKRAF.jpeg"
              class="w-full h-48 object-cover rounded-t-lg hover:scale-105 transition-all"
            />
            <div class="w-full flex flex-col gap-2 px-4">
              <h3 class="text-black font-bold text-lg font-poppins">
                Kebonagung
              </h3>
              <p class="text-black text-sm">
                Lorem ipsum Lorem ipsum Lorem ipsumLorem ipsum
              </p>
            </div>
          </div>
          <!-- CARD 2 -->
          <div
            class="w-full flex flex-col gap-4 pb-4 border border-gray-300 rounded-lg overflow-hidden"
          >
            <img
              src="https://setkab.go.id/wp-content/uploads/2022/02/FOTO-DESA-KEMENPAREKRAF.jpeg"
              class="w-full h-48 object-cover rounded-t-lg hover:scale-105 transition-all"
            />
            <div class="w-full flex flex-col gap-2 px-4">
              <h3 class="text-black font-bold text-lg font-poppins">
                Kebonagung
              </h3>
              <p class="text-black text-sm">
                Lorem ipsum Lorem ipsum Lorem ipsumLorem ipsum
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- STRUKTUR ORGANISASI SECTION -->
    <section id="struktur" class="w-full min-h-[80vh] z-10 bg-white py-20">
      <div
        class="w-full flex flex-col items-center gap-6 md:gap-8 lg:gap-12 px-6 md:px-12 lg:px-24"
      >
        <h2
          class="text-black font-bold text-lg md:text-xl lg:text-2xl font-poppins text-center"
        >
          Struktur Organisasi
        </h2>
        <div class="w-full flex flex-col md:flex-row gap-6">
          <img
            src="./src/images/struktur.jpg"
            class="w-full object-cover rounded-lg hover:scale-105 transition-all"
          />
          <div class="w-full flex flex-col px-4 gap-2">
            <div class="w-full flex flex-col">
              <h4 class="text-black font-bold text-base font-poppins">
                Ketua Desa
              </h4>
              <p class="text-black text-sm">Sanzet Maulana</p>
            </div>
            <div class="w-full flex flex-col">
              <h4 class="text-black font-bold text-base font-poppins">
                Sekretaris Desa
              </h4>
              <p class="text-black text-sm">Tsunade</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- FOOTER SECTION -->
    <section
      id="footer"
      class="w-full min-h-[80vh] z-10 bg-black py-20 text-white"
    >
      <div
        class="w-full flex flex-col items-center gap-6 px-6 md:px-12 lg:px-24"
      >
        <h2
          class="font-bold text-lg md:text-xl lg:text-2xl font-poppins text-center"
        >
          Kontak Kami
        </h2>
        <div class="w-full flex flex-col md:flex-row gap-6">
          <img
            src="./src/images/logo.png"
            class="w-40 h-auto object-cover rounded-lg hover:scale-105 transition-all self-center md:self-start"
          />
          <div class="w-full flex flex-col px-4 gap-2">
            <div class="w-full flex flex-col">
              <h4 class="font-bold text-base font-poppins">Email</h4>
              <a class="text-sm" href="mailto:desa.kertamulya@example.com"
                >desa.kertamulya@example.com</a
              >
            </div>
            <div class="w-full flex flex-col">
              <h4 class="font-bold text-base font-poppins">Telepon</h4>
              <a class="text-sm" href="https://wa.me/628123456789"
                >08123456789</a
              >
            </div>
          </div>
          <div class="w-full flex flex-col px-4 gap-2">
            <div class="w-full flex flex-col">
              <h4 class="font-bold text-base font-poppins">Alamat</h4>
              <p class="text-sm">Jl. Kebonagung No. 1</p>
            </div>
            <div class="w-full flex flex-col">
              <h4 class="font-bold text-base font-poppins">Website</h4>
              <p class="text-sm">www.desakertamulya.com</p>
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
