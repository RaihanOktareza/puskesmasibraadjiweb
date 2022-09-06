<?php
$urlFile = basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);
?>
<header class="relative z-50 w-full h-24">
    <div class="container flex items-center justify-center h-full max-w-6xl px-8 mx-auto sm:justify-between xl:px-0">

        <a href="index.php" class="relative flex items-center inline-block h-5 h-full font-black leading-none">
            <img src="assets/img/logo-1.png" alt="" class="w-20">
            <span class="ml-3 text-xl text-gray-800">Puskesmas Ibrahim Adjie<span class="text-pink-500">.</span></span>
        </a>

        <nav id="nav"
            class="absolute top-0 left-0 z-50 flex flex-col items-center justify-between hidden w-full h-64 pt-5 mt-24 text-sm text-gray-800 bg-white border-t border-gray-200 md:w-auto md:flex-row md:h-24 lg:text-base md:bg-transparent md:mt-0 md:border-none md:py-0 md:flex md:relative">
            <a href="index.php"
                class="ml-0 mr-0 font-bold duration-100 md:ml-12 md:mr-3 lg:mr-5 transition-color hover:text-indigo-600 <?php if ($urlFile == 'index.php') {
                                                                                                                                            echo 'text-indigo-600';
                                                                                                                                        } ?>">Home</a>
            <a href="layanan.php"
                class="mr-0 font-bold duration-100 md:mr-3 lg:mr-5 transition-color hover:text-indigo-600 <?php if ($urlFile == 'layanan.php') {
                                                                                                                                echo 'text-indigo-600';
                                                                                                                            } ?>">Layanan</a>
            <a href="berita.php"
                class="mr-0 font-bold duration-100 md:mr-3 lg:mr-5 transition-color hover:text-indigo-600 <?php if ($urlFile == 'berita.php') {
                                                                                                                                echo 'text-indigo-600';
                                                                                                                            } ?>">Berita</a>
            <a href="informasi.php"
                class="mr-0 font-bold duration-100 md:mr-3 lg:mr-5 transition-color hover:text-indigo-600 <?php if ($urlFile == 'informasi.php') {
                                                                                                                                    echo 'text-indigo-600';
                                                                                                                                } ?>">Informasi
                Kesehatan</a>
            <a href="tentang-kami.php"
                class="mr-0 font-bold duration-100 md:mr-3 lg:mr-5 transition-color hover:text-indigo-600 <?php if ($urlFile == 'tentang-kami.php') {
                                                                                                                                        echo 'text-indigo-600';
                                                                                                                                    } ?>">Tentang
                Kami</a>
            <a href="kontak.php"
                class="font-bold duration-100 transition-color hover:text-indigo-600 <?php if ($urlFile == 'kontak.php') {
                                                                                                            echo 'text-indigo-600';
                                                                                                        } ?>">Kontak</a>
        </nav>

        <div class="flex">
            <img src="assets/img/logo-2.png" alt="" class="w-20 sm:hidden lg:block">
            <img src="assets/img/logo-3.png" alt="" class="w-20 sm:hidden lg:block">
        </div>

        <div id="nav-mobile-btn"
            class="absolute top-0 right-0 z-50 block w-6 mt-8 mr-10 cursor-pointer select-none md:hidden sm:mt-10">
            <span class="block w-full h-1 mt-2 duration-200 transform bg-gray-800 rounded-full sm:mt-1"></span>
            <span class="block w-full h-1 mt-1 duration-200 transform bg-gray-800 rounded-full"></span>
        </div>

    </div>
</header>