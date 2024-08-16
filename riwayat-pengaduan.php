<?php
require_once 'services/useCase/getPengaduan.php';
require_once 'services/useCase/formatDate.php';


$q = isset($_GET['q']) ? $_GET['q'] : '';
$pengaduanList = getPengaduan($q);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Riwayat Pengaduan - Desa Kertamulya</title>
    <!-- TAILWIND CSS -->
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
    <!-- STYLE -->
    <link rel="stylesheet" href="./src/style/global.css" />
    <!-- ICON -->
    <link rel="icon" href="./src/images/kabKidul.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                Data Pengaduan
            </h2>
            <!-- TABLE -->
            <form class="w-full flex md:flex-row flex-col gap-2 justify-between" action="riwayat-pengaduan.php" method="get">
                <a href="./pengaduan.php" class="text-white bg-primary w-fit px-6 py-2 rounded-lg font-poppins font-bold text-sm self-end">Tambah Aduan</a>
                <div class="w-full md:w-1/2 lg:w-1/3 flex flex-row gap-2">
                    <input class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" type="text" id="q" name="q" placeholder="Cari pengaduan...  " value="<?php echo isset($_GET['q']) ? $_GET['q'] : ''; ?>" />
                    <button class="w-fit bg-primary text-white font-bold rounded-lg px-4 py-2" type="submit"><i class="fa fa-search"></i></button>
                </div>
            </form>
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">No</th>
                        <th scope="col" class="px-6 py-3">Nama</th>
                        <th scope="col" class="px-6 py-3">Aduan</th>
                        <th scope="col" class="px-6 py-3">Tanggal</th>
                        <th scope="col" class="px-6 py-3">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (count($pengaduanList) == 0) {
                        echo '<tr class="bg-white border-b text-black"><td colspan="5" class="px-6 py-8 text-center">Tidak ada data pengaduan dengan keyword <b>&quot;' . $_GET['q'] . '&quot;</b></td></tr>';
                    }
                    ?>
                    <?php foreach ($pengaduanList as $index => $pengaduan) : ?>
                        <tr class="bg-white border-b text-black">
                            <td scope="row" class="px-6 py-3"><?php echo $index + 1; ?></td>
                            <td scope="row" class="px-6 py-3 font-medium"><?php echo htmlspecialchars($pengaduan['nama']); ?></td>
                            <td scope="row" class="px-6 py-3 max-w-xl"><?php echo htmlspecialchars($pengaduan['isi']); ?></td>
                            <td scope="row" class="px-6 py-3"><?php echo formatDate(htmlspecialchars($pengaduan['tanggal'])); ?></td>
                            <td scope="row" class="px-6 py-3">
                                <?php if ($pengaduan['status'] == 1) : ?>
                                    <div class="font-medium bg-gray-500 text-white rounded-lg px-4 py-2 w-40 text-center cursor-pointer status-clickable" data-status="1" data-id="<?php echo $pengaduan['pengaduanId']; ?>">
                                        Belum Ditanggapi
                                    </div>
                                <?php elseif ($pengaduan['status'] == 2) : ?>
                                    <div class="font-medium bg-red-500 text-white rounded-lg px-4 py-2 w-40 text-center"> Pengaduan Ditolak </div>
                                <?php elseif ($pengaduan['status'] == 3) : ?>
                                    <div class="font-medium bg-blue-500 text-white rounded-lg px-4 py-2 w-40 text-center cursor-pointer status-clickable" data-status="3" data-id="<?php echo $pengaduan['pengaduanId']; ?>">
                                        Dalam Proses
                                    </div>
                                <?php elseif ($pengaduan['status'] == 4) : ?>
                                    <div class="font-medium bg-green-500 text-white rounded-lg px-4 py-2 w-40 text-center"> Selesai </div>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </section>


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