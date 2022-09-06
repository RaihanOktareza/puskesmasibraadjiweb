<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Puskesmas Ibrahim Adjie</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
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

    .carousel-open:checked + .carousel-item {
				position: static;
				opacity: 100;
	}
	.carousel-item {
		-webkit-transition: opacity 0.6s ease-out;
		transition: opacity 0.6s ease-out;
	}
	#carousel-1:checked ~ .control-1,
	#carousel-2:checked ~ .control-2,
	#carousel-3:checked ~ .control-3 {
		display: block;
	}
	.carousel-indicators {
		list-style: none;
		margin: 0;
		padding: 0;
		position: absolute;
		bottom: 2%;
		left: 0;
		right: 0;
		text-align: center;
		z-index: 10;
	}
	#carousel-1:checked ~ .control-1 ~ .carousel-indicators li:nth-child(1) .carousel-bullet,
	#carousel-2:checked ~ .control-2 ~ .carousel-indicators li:nth-child(2) .carousel-bullet,
	#carousel-3:checked ~ .control-3 ~ .carousel-indicators li:nth-child(3) .carousel-bullet {
		color: #2b6cb0;  /*Set to match the Tailwind colour you want the active one to be */
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
            Tentang Kami
        </h2>
    </div>
    <!-- END JUMBOTRON -->

    <!-- Tentang Kami -->
    <div id="tentang-kami" class="container py-20 mx-auto">
        <div class="grid grid-cols-1 xl:grid-cols-2 w-9/12 mx-auto">
            <img src="assets/img/dr.jpeg" alt="" class="w-11/12 rounded">
            <div>
                <h3 class="text-2xl font-bold">Kepala Puskesmas Ibrahim Adjie</h3>
                <p class="mb-5 text-gray-600">dr. ADNAN AFFANDI SOFYAN</p>
                <p class="text-gray-800">Dr. Adnan Affandi Sofyan adalah Kepala UPT Puskesmas Ibrahim Adjie yang telah
                    menjabat sejak tanggal 04 Mei 2019 hingga saat ini. Beliau pernah meraih penghargaan Dokter Teladan
                    Tingkat Kota Bandung Tahun 2019. Salah satu karya inspiratif beliau adalah PEMIMPIN BER HARAKAT (BER
                    HATI, RAGA, AKAL, TAWAKAL) dalam menghadapi Pandemi COVID-19
                </p>
            </div>
        </div>
    </div>
    <!-- End Tentang Kami-->

    <!-- visi&misi -->
    <div class="carousel relative shadow-2xl bg-white">
	<div class="carousel-inner relative overflow-hidden w-full">
	  <!--Visi&Misi-->
		<input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
		<div class="carousel-item absolute opacity-0" style="height:50vh;">
			<div class="block h-full w-full text-black text-2xl text-center px-20 py-10 bg-green-100 bg-cover">
            <div class="border-4 border-green-400">
                <br>Visi dan Misi Puskesmas</h2>
                <br></br>
            <ul  align="justify" class="mb-3 pl-20 pr-20">
                <b>"Terwujudnya Masyarakat Sehat dan Mandiri di Wilayah Kecamatan BATUNUNGGAL"</b>
            </ul>
            <ul  align="justify" class="mb-3 pl-20 pr-20">
                <b>1. Meningkatkan pelayanan Kesehatan yang Paripurna, bermutu, merata dan terjangkau.</b>
            </ul>
            <ul  align="justify" class="mb-3 pl-20 pr-20">
                <b>2. Mewujudkan pembangunan berwawasan kesehatan dan menggerakkan masyarakat berperilaku hidup dan hidup sehat.</b>
            </ul>
            <ul align="justify" class="mb-20 pl-20 pr-20">
                <b>3. Meningkatkan tata kelola manajemen dan sistem informasi kesehatan melalui ketersediaan sumber daya yang memadai.</b>
            </ul>
            </div>
        </div>
		</div>
		<label for="carousel-3" class="prev control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
		<label for="carousel-2" class="next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>
		
		<!--Indikator Keselamatan Pasien-->
		<input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
		<div class="carousel-item absolute opacity-0" style="height:50vh;">
			<div class="block h-full w-full text-black text-2xl text-center px-20 py-10 bg-orange-100 bg-cover">
            <div class="border-4 border-orange-400">
                <br>Indikator Keselamatan Pasien</h2>
                <br></br>
            <ul align="justify" class="mb-3 pl-20 pr-20">
                <b>1. Ketepatan Identifikasi Pasien.</b>
            </ul>
            <ul align="justify" class="mb-3 pl-20 pr-20">
                <b>2. Peningkatan Komunikasi yang Efektif.</b>
            </ul>
            <ul align="justify" class="mb-3 pl-20 pr-20">
                <b>3. Peningkatan Keamanan Obat yang Perlu Diwaspadai (High Alert Medication).</b>
            </ul>
            <ul align="justify" class="mb-3 pl-20 pr-20">
                <b>4. Kepastian Tepat Lokasi, Prosedur dan Pasien Operasi.</b>
            </ul>
            <ul align="justify" class="mb-12 pl-20 pr-20">
                <b>5. Pengurangan Resiko Infeksi Terkait Pelayanan Kesehatan.</b>
            </ul>
            </div>
        </div>
		</div>
		<label for="carousel-1" class="prev control-2 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
		<label for="carousel-3" class="next control-2 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label> 
		
		<!--Kebijakan Mutu-->
		<input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
		<div class="carousel-item absolute opacity-0" style="height:50vh;">
			<div class="block h-full w-full text-black text-3xl text-center px-20 py-10 bg-blue-100 bg-cover">
            <div class="border-4 border-blue-400">
                <br>Kebijakan Mutu</h2>
                <br></br>
            <ul  align="justify" class="mb-24 pl-20 pr-20">
                <b>Memberikan Pelayanan Kesehatan Kepada Masyarakat dan Memperhatikan Kebutuhan Harapan dan Keselamatan Pasien Serta Memperbaiki Proses Pelayanan Secara Berkesinambungan.</b>
            </ul>
            </div>
        </div>
		</div>
		<label for="carousel-2" class="prev control-3 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
		<label for="carousel-1" class="next control-3 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

		<!-- Add additional indicators for each slide-->
		<ol class="carousel-indicators">
			<li class="inline-block mr-3">
				<label for="carousel-1" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
			</li>
			<li class="inline-block mr-3">
				<label for="carousel-2" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
			</li>
			<li class="inline-block mr-3">
				<label for="carousel-3" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
			</li>
		</ol>
		
	</div>
</div>
</div>
</div>
    <!-- end visi&misi -->


    <!-- tata nilai -->
    <div id="moto" class="relative w-full px-8 py-10 border-t border-gray-200 md:py-16 lg:py-24 xl:py-20 xl:px-0">
        <div class="container flex flex-col items-center justify-between h-full max-w-6xl mx-auto">
            <p class="my-5 text-base font-medium tracking-tight text-indigo-500 uppercase">Tata Nilai
            </p>
            <div class="flex flex-col w-full mt-0 lg:flex-row sm:mt-10 lg:mt-5">

                <div class="flex flex-col w-full mt-0 lg:flex-row sm:mt-10 lg:mt-20">
                    <div class="w-full max-w-md mx-auto mb-0 sm:mb-16 lg:mb-0 lg:w-1/3">
                        <div class="relative flex flex-col items-center justify-center w-full h-full mr-5 rounded-lg">
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
                            <h4 class="relative mt-6 text-lg font-bold">Inovatif</h4>
                            <p class="relative mt-2 text-base text-center text-gray-600">Terus menerus melakukan upaya
                                inovatif dan ide-ide baru untuk meningkatkan pelayanan
                            </p>
                        </div>
                    </div>

                    <div class="w-full max-w-md p-4 mx-auto mb-0 sm:mb-16 lg:mb-0 lg:w-1/3">
                        <div class="relative flex flex-col items-center justify-center w-full h-full mr-5 rounded-lg">
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
                            <h4 class="relative mt-6 text-lg font-bold">Berdedikasi</h4>
                            <p class="relative mt-2 text-base text-center text-gray-600">Berinovasi tinggi, kompeten dan
                                komitmen baru untuk meingkatkan pelayanan</p>
                        </div>
                    </div>

                    <div class="w-full max-w-md p-4 mx-auto mb-16 lg:mb-0 lg:w-1/3">
                        <div class="relative flex flex-col items-center justify-center w-full h-full mr-5 rounded-lg">
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
                            <h4 class="relative mt-6 text-lg font-bold">Responsif</h4>
                            <p class="relative mt-2 text-base text-center text-gray-600">Cepat tanggap menghadapi
                                permasalahan kesehatan masyarakat
                            </p>
                        </div>
                    </div>

                    <div class="w-full max-w-md p-4 mx-auto mb-16 lg:mb-0 lg:w-1/3">
                        <div class="relative flex flex-col items-center justify-center w-full h-full mr-5 rounded-lg">
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
                            <h4 class="relative mt-6 text-lg font-bold">Amanah</h4>
                            <p class="relative mt-2 text-base text-center text-gray-600">Meyakini bahwa dalam
                                melaksanakan
                                tugas semata-mata menghadapi ridho Allah SWT
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- end tata nilai -->

    <!-- Struktur Organisasi -->
    <div id="struktur-organisasi"
        class="flex items-center justify-center w-full px-8 py-10 border-t border-gray-200 md:py-16 lg:py-24 xl:py-20 xl:px-0">
        <div class="max-w-6xl mx-auto">
            <div class="flex-col items-center">
                <div class="flex flex-col items-center justify-center w-full h-full max-w-2xl pr-8 mx-auto text-center">
                    <p class="my-5 text-base font-medium tracking-tight text-indigo-500 uppercase">Struktur Organisasi
                    </p>
                    <h2
                        class="text-4xl font-extrabold leading-10 tracking-tight text-gray-900 sm:text-5xl sm:leading-none md:text-6xl lg:text-5xl xl:text-3xl mb-10">
                        Kumpulan Struktur Organisasi</h2>
                </div>

                <section class="h-screen w-full bg-gradient-to-br from-pink-50 to-indigo-100 p-8">
                    <div class="grid justify-center md:grid-cols-2 lg:grid-cols-3 gap-5 lg:gap-7 my-10">
                        <!-- Card 1 -->
                        <a href="assets/img/struktur-1.jpg" target="_blank">
                            <div class="bg-white rounded-lg border shadow-md max-w-xs md:max-w-none overflow-hidden"
                                style="height: 250px;">
                                <img class="h-56 lg:h-full w-full object-cover" src="assets/img/struktur-1-show.jpg"
                                    alt="" />
                                <div class="p-3">
                                </div>
                            </div>
                        </a>

                        <!-- Card 2 -->
                        <a href="assets/img/struktur-2.jpg" target="_blank">
                            <div class="bg-white rounded-lg border shadow-md max-w-xs md:max-w-none overflow-hidden"
                                style="height: 250px;">
                                <img class="h-56 lg:h-full w-full object-cover" src="assets/img/struktur-2-show.jpg"
                                    alt="" />
                                <div class="p-3">
                                </div>
                            </div>
                        </a>

                        <!-- Card 3 -->
                        <a href="assets/img/struktur-3.jpg" target="_blank">
                            <div class="bg-white rounded-lg border shadow-md max-w-xs md:max-w-none overflow-hidden"
                                style="height: 250px;">
                                <img class="h-56 lg:h-full w-full object-cover" src="assets/img/struktur-3-show.jpg"
                                    alt="" />
                                <div class="p-3">
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="grid justify-center md:grid-cols-2 lg:grid-cols-3 gap-5 lg:gap-7 my-10">
                        <!-- Card 1 -->
                        <a href="assets/img/struktur-4.jpg" target="_blank">
                            <div class="bg-white rounded-lg border shadow-md max-w-xs md:max-w-none overflow-hidden"
                                style="height: 250px;">
                                <img class="h-56 lg:h-full w-full object-cover" src="assets/img/struktur-4-show.jpg"
                                    alt="" />
                                <div class="p-3">
                                </div>
                            </div>
                        </a>

                        <!-- Card 2 -->
                        <a href="assets/img/struktur-5.jpg" target="_blank">
                            <div class="bg-white rounded-lg border shadow-md max-w-xs md:max-w-none overflow-hidden"
                                style="height: 250px;">
                                <img class="h-56 lg:h-full w-full object-cover" src="assets/img/struktur-5-show.jpg"
                                    alt="" />
                                <div class="p-3">
                                </div>
                            </div>
                        </a>
                    </div>
                </section>

            </div>
        </div>
    </div>
    <!-- End Struktur Organisasi-->

    <div class="max-w-full-lg text-center py-12 mt-3 bg-indigo-600 bg-cover">
        <h2 class="grid grid-cols-2 w-4/12 mx-auto">
            <div class="flex items-center mx-auto">
                <img src="assets/img/pns.png" alt="">
                <h3 class="text-white text-2xl font-bold">22<br>PNS</h3>
            </div>
            <div class="flex items-center mx-auto">
                <img src="assets/img/none-pns.png" alt="">
                <h3 class="text-white text-2xl font-bold">32<br>Non PNS</h3>
            </div>
        </h2>
    </div>

    <!-- Prestasi -->
    <div class="grid grid-cols-2 p-10 bg-gradient-to-b from-blue-100 to-blue-300">
        <div class="px-10 pl-48 pr-40">
            <h2 class="font-bold text-2xl mb-10 border-b-4 border-indigo-500">Prestasi</h2>
            <ul class="mb-5">
                <b>PENILAIAN KINERJA PUSKESMAS BERPRESTASI - 2015</b>
                <li>Juara 1 Tingkat Kota Provinsi Jawa Barat</li>
            </ul>
            <ul class="mb-5">
                <b>PUSKESMAS TERAKREDITASI MADYA - 2016</b>
            </ul>
            <ul class="mb-5">
                <b>PENGHARGAAN INOVASI PELAYANAN PUBLIK - 2016</b>
                <li>Tingkat Provinsi Jawa Barat</li>
            </ul>
            <ul class="mb-5">
                <b>FKTP BERPRESTASI - 2019</b>
                <li>Peringkat Ketiga Se-Kota Bandung</li>
            </ul>
        </div>
        <div class="px-10 pr-48 pl-24">
            <h2 class="font-bold text-2xl mb-10 border-b-4 border-indigo-500">Inovasi</h2>
            <ul class="mb-3">
                <b>LEMBUR ASI</b>
                <li align="justify">Berasal Dari Bahasa Sunda Yang Berarti "Kampung".
                    Bermakna Bahwa Puskesmas Ibrahim Adjie Peduli Terhadap Pemberian ASI Secara Ekslusif Pada Anak.</li>
            </ul>
            <ul class="mb-3">
                <b>KASIH SETIA</b>
                <li align="justify">Karena Apoteker Selalu Ingin Hebat, Semua Etiket Tertulis Informasi Akurat.</li>
            </ul>
            <ul class="mb-3">
                <b>SOMEAH </b>
                <li align="justify">Dalam bahasa sunda artinya ramah, menjelaskan tentang pelayanan ramah
                    komunitas untuk pelayanan HIV-AIDS dan IMS.</li>
            </ul>
            <ul class="mb-3">
                <b>TITIP KANYAAH INDUNG </b>
                <li align="justify"> Program inovasi Puskesmas Ibrahim Adjie yang berasal dari bahasa sunda,
                    yang artinya “Sampaikan Pesan Sayang Untuk Ibu.”</li>
            </ul>
            <ul class="mb-3">
                <b>ZEBRA</b>
                <li>Zona Edukasi dan Bermain Ramah Anak.</li>
            </ul>
            <ul class="mb-3">
                <b>POSYANDU REMAJA </b>
            </ul>
        </div>
    </div>
    <!-- End Prestasi-->

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

    var openmodal = document.querySelectorAll('.modal-open')
    for (var i = 0; i < openmodal.length; i++) {
        openmodal[i].addEventListener('click', function(event) {
            event.preventDefault()
            toggleModal()
        })
    }

    const overlay = document.querySelector('.modal-overlay')
    overlay.addEventListener('click', toggleModal)

    var closemodal = document.querySelectorAll('.modal-close')
    for (var i = 0; i < closemodal.length; i++) {
        closemodal[i].addEventListener('click', toggleModal)
    }

    document.onkeydown = function(evt) {
        evt = evt || window.event
        var isEscape = false
        if ("key" in evt) {
            isEscape = (evt.key === "Escape" || evt.key === "Esc")
        } else {
            isEscape = (evt.keyCode === 27)
        }
        if (isEscape && document.body.classList.contains('modal-active')) {
            toggleModal()
        }
    };


    function toggleModal() {
        const body = document.querySelector('body')
        const modal = document.querySelector('.modal')
        modal.classList.toggle('opacity-0')
        modal.classList.toggle('pointer-events-none')
        body.classList.toggle('modal-active')
    }
    </script>
</body>

</html>