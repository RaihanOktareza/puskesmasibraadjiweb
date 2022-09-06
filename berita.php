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
            Berita
        </h2>
    </div>
    <!-- END JUMBOTRON -->

    <!-- News -->
    <div id="news"
        class="flex items-center justify-center w-full px-8 py-10 border-t border-gray-200 md:py-16 lg:py-24 xl:py-10 xl:px-0">
        <div class="max-w-6xl mx-auto">
            <h3 class="px-8 text-3xl leading-9 font-bold tracking-tight sm:text-2xl sm:leading-10 text-gray-800">Berita
                Terbaru
            </h3>
            <div class="flex-col items-center ">
                <section class="h-screen w-full bg-gradient-to-br from-pink-50 to-indigo-100 p-8">
                    <div class="grid justify-center md:grid-cols-2 lg:grid-cols-3 gap-5 lg:gap-7 my-2">
                        <!-- Card 1 -->
                        <div class="bg-white rounded-lg border shadow-md max-w-xs md:max-w-none overflow-hidden">
                            <img class="h-56 lg:h-60 w-full object-cover"
                                src="https://images.unsplash.com/photo-1523289217630-0dd16184af8e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8d29tZW4lMjBlbXBvd2VybWVudHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60"
                                alt="" />
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
                            <img class="h-56 lg:h-60 w-full object-cover"
                                src="https://images.unsplash.com/photo-1637419450536-378d5457abb8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTl8fHdvbWVuJTIwZW1wb3dlcm1lbnR8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60"
                                alt="" />
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