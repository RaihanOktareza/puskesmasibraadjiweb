<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Puskesmas Ibrahim Adjie</title>
    <!--
        For more customization options, we would advise
        you to build your TailwindCSS from the source.
        https://tailwindcss.com/docs/installation
    -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.9.2/tailwind.min.css">

    <!-- My CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Icon Puskesmas -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <!-- Javascript -->
    <script src="https://unpkg.com/flowbite@1.4.6/dist/flowbite.js"></script>

    <!-- Small CSS to Hide elements at 1520px size -->
    <style>
    @media(max-width:1520px) {
        .left-svg {
            display: none;
        }
    }

    /* small css for the mobile nav close */
    #nav-mobile-btn.close span:first-child {
        transform: rotate(45deg);
        top: 4px;
        position: relative;
        background: #a0aec0;
    }

    #nav-mobile-btn.close span:nth-child(2) {
        transform: rotate(-45deg);
        margin-top: 0px;
        background: #a0aec0;
    }
    </style>

    <!-- JQUERY -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
    $(document).ready(function() {
        // Add smooth scrolling to all links
        $("a").on('click', function(event) {

            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
                // Prevent default anchor click behavior
                event.preventDefault();

                // Store hash
                var hash = this.hash;

                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 800, function() {

                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                });
            } // End if
        });
    });
    </script>
</head>

<body class="overflow-x-hidden antialiased">
    <!-- Header Section -->
    <?php include 'header.php'; ?>
    <!-- End Header Section-->

    <!-- BEGIN HERO SECTION -->
    <div class="relative items-center justify-center w-full overflow-x-hidden lg:pt-40 lg:pb-40 xl:pt-40 xl:pb-64">
        <div
            class="container flex flex-col items-center justify-between h-full max-w-6xl px-8 mx-auto -mt-32 lg:flex-row xl:px-0">
            <div
                class="z-30 flex flex-col items-center w-full max-w-xl pt-48 text-center lg:items-start lg:w-1/2 lg:pt-20 xl:pt-40 lg:text-left">
                <h1 class="relative mb-4 text-3xl font-black leading-tight text-gray-900 sm:text-5xl xl:mb-8">Selamat
                    Datang di Situs Resmi Puskesmas Ibrahim Adjie!</h1>
                <p class="pr-0 mb-8 text-base text-gray-600 sm:text-lg xl:text-xl lg:pr-20">Puskesmas Ibrahim Adjie
                    adalah fasilitas pelayanan kesehatan mampu PONED yang terletak di Kecamatan Batununggal Kota
                    Bandung, yang menyediakan berbagai layanan kesehatan dasar untuk masyarakat dan individu.
                </p>
                <a href="#moto"
                    class="relative self-start inline-block w-auto px-8 py-4 mx-auto mt-0 text-base font-bold text-white bg-indigo-600 border-t border-gray-200 rounded-md shadow-xl sm:mt-1 fold-bold lg:mx-0">Baca
                    Selengkapnya →</a>
                <svg class="absolute left-0 max-w-md mt-24 -ml-64 left-svg" viewBox="0 0 423 423"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <defs>
                        <linearGradient x1="100%" y1="0%" x2="4.48%" y2="0%" id="linearGradient-1">
                            <stop stop-color="#5C54DB" offset="0%" />
                            <stop stop-color="#6A82E7" offset="100%" />
                        </linearGradient>
                        <filter x="-9.3%" y="-6.7%" width="118.7%" height="118.7%" filterUnits="objectBoundingBox"
                            id="filter-3">
                            <feOffset dy="8" in="SourceAlpha" result="shadowOffsetOuter1" />
                            <feGaussianBlur stdDeviation="8" in="shadowOffsetOuter1" result="shadowBlurOuter1" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0" in="shadowBlurOuter1" />
                        </filter>
                        <rect id="path-2" x="63" y="504" width="300" height="300" rx="40" />
                    </defs>
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" opacity=".9">
                        <g id="Desktop-HD" transform="translate(-39 -531)">
                            <g id="Hero" transform="translate(43 83)">
                                <g id="Rectangle-6" transform="rotate(45 213 654)">
                                    <use fill="#000" filter="url(#filter-3)" xlink:href="#path-2" />
                                    <use fill="url(#linearGradient-1)" xlink:href="#path-2" />
                                </g>
                            </g>
                        </g>
                    </g>
                </svg>
            </div>
            <div class="relative z-50 flex flex-col items-end justify-center w-full h-full lg:w-1/2 ms:pl-10">
                <div class="container relative left-0 w-full max-w-4xl lg:absolute xl:max-w-6xl lg:w-screen">
                    <img src="assets/img/doctor.png"
                        class="w-9/12 h-auto mt-20 mb-20 ml-0 lg:mt-24 xl:mt-40 lg:mb-0 lg:h-full lg:-ml-12">
                </div>
            </div>
        </div>
    </div>
    <!-- HERO SECTION END -->

    <!-- BEGIN FEATURES SECTION -->
    <div id="moto" class="relative w-full px-8 py-10 border-t border-gray-200 md:py-16 lg:py-24 xl:py-20 xl:px-0">
        <div class="container flex flex-col items-center justify-between h-full max-w-6xl mx-auto">
            <p class="my-5 text-base font-medium tracking-tight text-indigo-500 uppercase">Kami Hadir Dengan Pelayanan
                Juara
            </p>
            <h2
                class="text-4xl font-extrabold leading-10 tracking-tight text-gray-900 sm:text-5xl sm:leading-none md:text-6xl lg:text-5xl xl:text-6xl mb-10 text-center">
                Moto Puskesmas<br>Ibrahim Adjie</h2>

            <div class="flex flex-col w-full mt-0 lg:flex-row sm:mt-10 lg:mt-5">

                <div class="w-full max-w-md p-4 mx-auto mb-0 sm:mb-16 lg:mb-0 lg:w-1/5">
                    <div class="relative flex flex-col items-center justify-center w-full h-full p-20 mr-5 rounded-lg">
                        <svg class="absolute w-full h-full text-gray-100 fill-current" viewBox="0 0 377 340"
                            xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <g>
                                    <path
                                        d="M342.8 3.7c24.7 14 18.1 75 22.1 124s18.6 85.8 8.7 114.2c-9.9 28.4-44.4 48.3-76.4 62.4-32 14.1-61.6 22.4-95.9 28.9-34.3 6.5-73.3 11.1-95.5-6.2-22.2-17.2-27.6-56.5-47.2-96C38.9 191.4 5 151.5.9 108.2-3.1 64.8 22.7 18 61.8 8.7c39.2-9.2 91.7 19 146 16.6 54.2-2.4 110.3-35.6 135-21.6z" />
                                </g>
                            </g>
                        </svg>
                        <!-- FEATURE Icon 1 -->
                        <img src="assets/img/j.png" alt="" class="relative w-20">
                        <h4 class="relative mt-6 text-lg font-bold">Jujur</h4>
                    </div>
                </div>

                <div class="w-full max-w-md p-4 mx-auto mb-0 sm:mb-16 lg:mb-0 lg:w-1/5">
                    <div class="relative flex flex-col items-center justify-center w-full h-full p-20 mr-5 rounded-lg">
                        <svg class="absolute w-full h-full text-gray-100 fill-current" viewBox="0 0 358 372"
                            xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <g>
                                    <path
                                        d="M315.7 6.5c30.2 15.1 42.6 61.8 41.5 102.5-1.1 40.6-15.7 75.2-24.3 114.8-8.7 39.7-11.3 84.3-34.3 107.2-23 22.9-66.3 23.9-114.5 30.7-48.2 6.7-101.3 19.1-123.2-4.1-21.8-23.2-12.5-82.1-21.6-130.2C30.2 179.3 2.6 141.9.7 102c-2-39.9 21.7-82.2 57.4-95.6 35.7-13.5 83.3 2.1 131.2 1.7 47.9-.4 96.1-16.8 126.4-1.6z" />
                                </g>
                            </g>
                        </svg>
                        <!-- FEATURE Icon 2 -->
                        <img src="assets/img/u.png" alt="" class="relative w-20">
                        <h4 class="relative mt-6 text-lg font-bold">Unggul</h4>
                    </div>
                </div>

                <div class="w-full max-w-md p-4 mx-auto sm:mb-16 lg:mb-0 lg:w-1/5">
                    <div class="relative flex flex-col items-center justify-center w-full h-full p-20 mr-5 rounded-lg">
                        <svg class="absolute w-full h-full text-gray-100 fill-current" viewBox="0 0 378 410"
                            xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <g>
                                    <path
                                        d="M305.9 14.4c23.8 24.6 16.3 84.9 26.6 135.1 10.4 50.2 38.6 90.3 43.7 137.8 5.1 47.5-12.8 102.4-50.7 117.4-37.9 15.1-95.7-9.8-151.7-12.2-56.1-2.5-110.3 17.6-130-3.4-19.7-20.9-4.7-82.9-11.5-131.2C25.5 209.5-3 174.7 1.2 147c4.2-27.7 41-48.3 75-69.6C110.1 56.1 141 34.1 184 17.5c43.1-16.6 98.1-27.7 121.9-3.1z" />
                                </g>
                            </g>
                        </svg>
                        <!-- FEATURE Icon 3 -->
                        <img src="assets/img/a.png" alt="" class="relative w-20">
                        <h4 class="relative mt-6 text-lg font-bold">Adil</h4>
                    </div>
                </div>

                <div class="w-full max-w-md p-4 mx-auto mb-0 sm:mb-16 lg:mb-0 lg:w-1/5">
                    <div class="relative flex flex-col items-center justify-center w-full h-full p-20 mr-5 rounded-lg">
                        <svg class="absolute w-full h-full text-gray-100 fill-current" viewBox="0 0 358 372"
                            xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <g>
                                    <path
                                        d="M315.7 6.5c30.2 15.1 42.6 61.8 41.5 102.5-1.1 40.6-15.7 75.2-24.3 114.8-8.7 39.7-11.3 84.3-34.3 107.2-23 22.9-66.3 23.9-114.5 30.7-48.2 6.7-101.3 19.1-123.2-4.1-21.8-23.2-12.5-82.1-21.6-130.2C30.2 179.3 2.6 141.9.7 102c-2-39.9 21.7-82.2 57.4-95.6 35.7-13.5 83.3 2.1 131.2 1.7 47.9-.4 96.1-16.8 126.4-1.6z" />
                                </g>
                            </g>
                        </svg>
                        <!-- FEATURE Icon 2 -->
                        <img src="assets/img/r.png" alt="" class="relative w-20">
                        <h4 class="relative mt-6 text-lg font-bold">Ramah</h4>
                    </div>
                </div>

                <div class="w-full max-w-md p-4 mx-auto mb-0 sm:mb-16 lg:mb-0 lg:w-1/5">
                    <div class="relative flex flex-col items-center justify-center w-full h-full p-20 mr-5 rounded-lg">
                        <svg class="absolute w-full h-full text-gray-100 fill-current" viewBox="0 0 358 372"
                            xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <g>
                                    <path
                                        d="M315.7 6.5c30.2 15.1 42.6 61.8 41.5 102.5-1.1 40.6-15.7 75.2-24.3 114.8-8.7 39.7-11.3 84.3-34.3 107.2-23 22.9-66.3 23.9-114.5 30.7-48.2 6.7-101.3 19.1-123.2-4.1-21.8-23.2-12.5-82.1-21.6-130.2C30.2 179.3 2.6 141.9.7 102c-2-39.9 21.7-82.2 57.4-95.6 35.7-13.5 83.3 2.1 131.2 1.7 47.9-.4 96.1-16.8 126.4-1.6z" />
                                </g>
                            </g>
                        </svg>
                        <!-- FEATURE Icon 2 -->
                        <img src="assets/img/a.png" alt="" class="relative w-20">
                        <h4 class="relative mt-6 text-lg font-bold">Akuntabel</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END FEATURES SECTION -->

    <!-- News -->
    <div id="news"
        class="flex items-center justify-center w-full px-8 py-10 border-t border-gray-200 md:py-16 lg:py-24 xl:py-40 xl:px-0">
        <div class="max-w-6xl mx-auto">
            <div class="flex-col items-center ">
                <div class="flex flex-col items-center justify-center w-full h-full max-w-2xl pr-8 mx-auto text-center">
                    <p class="my-5 text-base font-medium tracking-tight text-indigo-500 uppercase">Berita
                    </p>
                    <h2
                        class="text-4xl font-extrabold leading-10 tracking-tight text-gray-900 sm:text-5xl sm:leading-none md:text-6xl lg:text-5xl xl:text-6xl mb-10">
                        Berita Terbaru</h2>
                </div>

                <section class="h-screen w-full bg-gradient-to-br from-pink-50 to-indigo-100 p-8">
                    <div class="grid justify-center md:grid-cols-2 lg:grid-cols-3 gap-5 lg:gap-7 my-10">
                        <!-- Card 1 -->
                        <div class="bg-white rounded-lg border shadow-md max-w-xs md:max-w-none overflow-hidden">
                            <img class="h-56 lg:h-60 w-full object-cover" src="assets/img/bg-1.jpg" alt="" />
                            <div class="p-3">
                                <span class="text-sm text-primary">November 19, 2022</span>
                                <h3 class="font-semibold text-xl leading-6 text-gray-700 my-2">
                                    Konsolidasi Fasilitas Kesehatan Se-Kota Bandung Menghadapi Kejadian Hepatitis Akut
                                    pada Anak yang Tidak Diketahui Penyebabnya
                                </h3>
                                <p class="paragraph-normal text-gray-600">
                                    Bandung, 11 Mei 2022 - Telah berlangsung kegiatan sosialisasi kewaspadaan terhadap
                                    penemuan kasus Hepatitis Akut
                                    pada anak yang tidak diketahui etiologisnya yang dilaksanakan oleh Dinas kesehatan
                                    Kota Bandung melalui seksi surveilans.
                                </p>
                                <a class="mt-3 block hover:underline" href="#">Baca Berita →</a>
                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div class="bg-white rounded-lg border shadow-md max-w-xs md:max-w-none overflow-hidden">
                            <img class="h-56 lg:h-60 w-full object-cover" src="assets/img/bg-1.jpg" alt="" />
                            <div class="p-3">
                                <span class="text-sm text-primary">November 19, 2022</span>
                                <h3 class="font-semibold text-xl leading-6 text-gray-700 my-2">
                                    Meningkatkan Kewaspadaan Hepatitis Akut pada Anak yang Tidak Diketahui Penyebabnya
                                    pada Masyarakat oleh UPTD Puskesmas Ibrahim Adjie Kota Bandung
                                </h3>
                                <p class="paragraph-normal text-gray-600">
                                    Bandung, 13 Mei 2022 - Telah dilangsungkan kegiatan penyuluhan mengenai kejadian
                                    hepatitis akut pada anak yang
                                    tidak diketahui penyebabnya pada anak di kegiatan posyandu RW 12 Kelurahan
                                    Cibangkong.
                                </p>
                                <a class="mt-3 block hover:underline" href="#">Baca Berita →</a>
                            </div>
                        </div>

                        <!-- Card 3 -->
                        <div class="bg-white rounded-lg border shadow-md max-w-xs md:max-w-none overflow-hidden">
                            <img class="h-56 lg:h-60 w-full object-cover" src="assets/img/bg-1.jpg" alt="" />
                            <div class="p-3">
                                <span class="text-sm text-primary">November 19, 2022</span>
                                <h3 class="font-semibold text-xl leading-6 text-gray-700 my-2">
                                    Konsolidasi Fasilitas Kesehatan Se-Kota Bandung Menghadapi Kejadian Hepatitis Akut
                                    pada Anak yang Tidak Diketahui Penyebabnya
                                </h3>
                                <p class="paragraph-normal text-gray-600">
                                    Bandung, 11 Mei 2022 - Telah berlangsung kegiatan sosialisasi kewaspadaan terhadap
                                    penemuan kasus Hepatitis Akut
                                    pada anak yang tidak diketahui etiologisnya yang dilaksanakan oleh Dinas kesehatan
                                    Kota Bandung melalui seksi surveilans.
                                </p>
                                <a class="mt-3 block hover:underline" href="#">Baca Berita →</a>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
    <!-- End News-->

    <!-- Footer -->
    <?php include 'footer.php'; ?>
    <!-- End of Footer -->

    <!-- a little JS for the mobile nav button -->
    <script>
    if (document.getElementById('nav-mobile-btn')) {
        document.getElementById('nav-mobile-btn').addEventListener('click', function() {
            if (this.classList.contains('close')) {
                document.getElementById('nav').classList.add('hidden');
                this.classList.remove('close');
            } else {
                document.getElementById('nav').classList.remove('hidden');
                this.classList.add('close');
            }
        });
    }
    </script>
</body>

</html>