<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Puskesmas Ibrahim Adjie</title>

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
            Kontak
        </h2>
    </div>
    <!-- END JUMBOTRON -->

    <!-- Kontak -->
    <div id="kontak" class="container py-20 mx-auto ">
        <div class="grid grid-cols-1 xl:grid-cols-2">
            <div>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.762136164448!2d107.641691414559!3d-6.9190150950007565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7dd724066e1%3A0x615f74ec16b7aa43!2sUPT%20Puskesmas%20Ibrahim%20Adjie!5e0!3m2!1sid!2sid!4v1653394811687!5m2!1sid!2sid"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div>
                <h2 class="text-2xl font-bold mb-5">Puskesmas Ibrahim Adjie</h2>
                <p class="text-gray-600 mb-3">
                    <span class="fa fa-location-arrow mr-4"></span>Jl. Ibrahim Adjie No.88, Kebonwaru,
                    Kec. Batununggal,
                    Kota
                    Bandung, Jawa Barat
                </p>
                <p class="text-gray-600 mb-5">
                    <span class="fa fa-phone mr-4"></span>(022) 7208355
                </p>
                <p class="text-gray-600 mb-5">
                    <span class="fa fa-envelope mr-4"></span>ibrahimadjipuskesmas@gmail.com
                </p>
                <p class="text-gray-600 mb-5">
                    <span class="fa fa-facebook ml-1 mr-4"></span> Puskesmas Ibrahim Adjie
                </p>
                <p class="text-gray-600">
                    <span class="fa fa-instagram ml-1 mr-4"></span> Puskesmas Ibrahim Adjie
                </p>
            </div>
        </div>
    </div>
    <!-- End Kontak-->

    <!-- Contact Us -->
    <div class="container mx-auto">
        <div class="max-w-xl p-5 mx-auto my-10 bg-white rounded-md shadow-md">
            <div class="text-center">
                <h1 class="my-3 text-3xl font-semibold text-gray-700">Kontak Kami</h1>
                <p class="text-gray-400">Isi form untuk mengirimkan pesan.</p>
            </div>
            <div>
                <form action="" method="POST">
                    <div class="mb-6">
                        <label for="name" class="block mb-2 text-sm text-gray-600">Nama Langkap</label>
                        <input type="text" name="name" placeholder="Nama" required
                            class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md  focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300" />
                    </div>
                    <div class="mb-6">
                        <label for="email" class="block mb-2 text-sm text-gray-600">Email</label>
                        <input type="email" name="email" placeholder="Alamat Email" required
                            class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md  focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300" />
                    </div>
                    <div class="mb-6">
                        <label for="phone" class="text-sm text-gray-600">Nomor Handphone</label>
                        <input type="text" name="phone" placeholder="No.Handphone" required
                            class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md  focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300" />
                    </div>
                    <div class="mb-6">
                        <label for="message" class="block mb-2 text-sm text-gray-600">Pesan</label>

                        <textarea rows="5" name="message" placeholder="pesan"
                            class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md  focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300"
                            required></textarea>
                    </div>
                    <div class="mb-6">
                        <button type="submit"
                            class="w-full px-2 py-4 text-white bg-indigo-500 rounded-md  focus:bg-indigo-600 focus:outline-none">
                            Kirim Pesan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Contact Us -->

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