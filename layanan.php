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

    <!-- Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- My CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Icon Puskesmas -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

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
</head>

<body class="overflow-x-hidden antialiased">
    <!-- Header Section -->
    <?php include 'header.php'; ?>
    <!-- End Header Section-->

    <!-- BEGIN JUMBOTRON SECTION -->
    <div class="max-w-full-lg mx-auto text-center py-12 mt-4 bg-indigo-600 bg-cover">
        <h2 class="text-3xl leading-9 font-bold tracking-tight text-white sm:text-4xl sm:leading-10">
            Layanan
        </h2>
    </div>
    <!-- END JUMBOTRON -->

    <!-- News -->
    <div id="layanan" class="container py-20 mx-auto ">
        <h3
            class="px-8 text-3xl leading-9 font-bold tracking-tight sm:text-2xl sm:leading-10 text-gray-800 text-center">
            Unit
            Pelayanan Puskesmas Ibrahim Adjie</h3>
        <p class="px-8 text-gray-600 text-center">Fasilitas yang dimiliki Puskesmas Ibrahim Adjie dalam rangka
            menyediakan
            <br>layanan kesehatan
            bagi
            masyarakat
        </p>
        <div class="flex flex-col w-full mt-0 lg:flex-row sm:mt-10 lg:mt-20">
            <div class="w-full max-w-md p-4 mx-auto mb-0 sm:mb-16 lg:mb-0 lg:w-1/3">
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
                    <img src="assets/img/icon-1.png" alt="" class="relative w-20">
                    <h4 class="relative mt-6 text-lg font-bold">Klinik Gigi</h4>
                    <p class="relative mt-2 text-base text-center text-gray-600">Senin - Sabtu <br> Jam 07.30 - 11.00
                    </p>
                </div>
            </div>

            <div class="w-full max-w-md p-4 mx-auto mb-0 sm:mb-16 lg:mb-0 lg:w-1/3">
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
                    <img src="assets/img/icon-2.png" alt="" class="relative w-20">
                    <h4 class="relative mt-6 text-lg font-bold">Klinik Umum</h4>
                    <p class="relative mt-2 text-base text-center text-gray-600">Senin - Sabtu <br>Jam 07.30 - 11.00</p>
                </div>
            </div>

            <div class="w-full max-w-md p-4 mx-auto mb-16 lg:mb-0 lg:w-1/3">
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
                    <img src="assets/img/icon-3.png" alt="" class="relative w-20">
                    <h4 class="relative mt-6 text-lg font-bold">Lansia</h4>
                    <p class="relative mt-2 text-base text-center text-gray-600">Senin - Sabtu <br> Jam 07.30 - 11.00
                    </p>
                </div>
            </div>
        </div>

        <div class="flex flex-col w-full mt-0 lg:flex-row sm:mt-10 lg:mt-20">
            <div class="w-full max-w-md p-4 mx-auto mb-0 sm:mb-16 lg:mb-0 lg:w-1/3">
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
                    <img src="assets/img/icon-4.png" alt="" class="relative w-20">
                    <h4 class="relative mt-6 text-lg font-bold"> Keluarga Berencana</h4>
                    <p class="relative mt-2 text-base text-center text-gray-600">Senin & Sabtu <br> Jam 07.30 - 11.00
                    </p>
                </div>
            </div>

            <div class="w-full max-w-md p-4 mx-auto mb-0 sm:mb-16 lg:mb-0 lg:w-1/3">
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
                    <img src="assets/img/icon-5.png" alt="" class="relative w-20">
                    <h4 class="relative mt-6 text-lg font-bold text-center">KIA (Pemeriksaan Kehamilan)</h4>
                    <p class="relative mt-2 text-base text-center text-gray-600">Senin & Kamis <br>Jam 07.30 - 11.00</p>
                </div>
            </div>

            <div class="w-full max-w-md p-4 mx-auto mb-16 lg:mb-0 lg:w-1/3">
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
                    <img src="assets/img/icon-6.png" alt="" class="relative w-20">
                    <h4 class="relative mt-6 text-lg font-bold">USG (Kehamilan)</h4>
                    <p class="relative mt-2 text-base text-center text-gray-600">Rabu <br> Jam 07.30 - 11.00
                    </p>
                </div>
            </div>

        </div>

        <div class="flex flex-col w-full mt-0 lg:flex-row sm:mt-10 lg:mt-20">
            <div class="w-full max-w-md p-4 mx-auto mb-0 sm:mb-16 lg:mb-0 lg:w-1/3">
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
                    <img src="assets/img/icon-7.png" alt="" class="relative w-20">
                    <h4 class="relative mt-6 text-lg font-bold text-center"> MTBM (Manajemen Bayi Terpadu Muda)</h4>
                    <p class="relative mt-2 text-base text-center text-gray-600">Selasa & Sabtu <br> Jam 07.30 - 11.00
                    </p>
                </div>
            </div>

            <div class="w-full max-w-md p-4 mx-auto mb-0 sm:mb-16 lg:mb-0 lg:w-1/3">
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
                    <img src="assets/img/icon-8.png" alt="" class="relative w-20">
                    <h4 class="relative mt-6 text-lg font-bold text-center">Imunisasi Bayi Balita</h4>
                    <p class="relative mt-2 text-base text-center text-gray-600">Selasa & Jumat <br>Jam 07.30 - 11.00
                    </p>
                </div>
            </div>

            <div class="w-full max-w-md p-4 mx-auto mb-16 lg:mb-0 lg:w-1/3">
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
                    <img src="assets/img/icon-9.png" alt="" class="relative w-20">
                    <h4 class="relative mt-6 text-lg font-bold">Psikolog (online)</h4>
                    <p class="relative mt-2 text-base text-center text-gray-600">Senin & Jumat <br> Jam 07.30 - 11.00
                    </p>
                </div>
            </div>

        </div>
        <div class="flex flex-col w-full mt-0 lg:flex-row sm:mt-10 lg:mt-20">
            <div class="w-full max-w-md p-4 mx-auto mb-0 sm:mb-16 lg:mb-0 lg:w-1/3">
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
                    <img src="assets/img/icon-10.png" alt="" class="relative w-20">
                    <h4 class="relative mt-6 text-lg font-bold text-center"> SOMEAH (VCT,Konseling,CATIN Laki-laki)</h4>
                    <p class="relative mt-2 text-base text-center text-gray-600">Senin, Rabu & Jumat <br> Jam 07.30 -
                        11.00
                    </p>
                </div>
            </div>

            <div class="w-full max-w-md p-4 mx-auto mb-0 sm:mb-16 lg:mb-0 lg:w-1/3">
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
                    <img src="assets/img/icon-11.png" alt="" class="relative w-20">
                    <h4 class="relative mt-6 text-lg font-bold text-center">Laboratorium</h4>
                    <p class="relative mt-2 text-base text-center text-gray-600">Senin - Sabtu <br>Jam 07.30 - 11.00</p>
                </div>
            </div>

            <div class="w-full max-w-md p-4 mx-auto mb-16 lg:mb-0 lg:w-1/3">
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
                    <img src="assets/img/icon-12.png" alt="" class="relative w-20">
                    <h4 class="relative mt-6 text-lg font-bold text-center">MTBS (Manajemen Terpadu Balita Sakit)</h4>
                    <p class="relative mt-2 text-base text-center text-gray-600">Senin - Sabtu <br> Jam 07.30 - 11.00
                    </p>
                </div>
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