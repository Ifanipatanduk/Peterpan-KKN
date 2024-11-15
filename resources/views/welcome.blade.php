<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>KKN UKDW</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <style>
            /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */
            *,
            ::after,
            ::before {
                box-sizing: border-box;
                border-width: 0;
                border-style: solid;
                border-color: #e5e7eb
            }

            ::after,
            ::before {
                --tw-content: ''
            }

            :
        </style>
    @endif
</head>

<body>
    <header class="relative bg-center h-[50vh]"
        style="background-image: url('{{ asset('asset/penerjunan-kkn.jpg') }}'); background-size: cover;">
        <!-- Overlay untuk efek gelap -->
        <div class="absolute inset-0 bg-black bg-opacity-10"></div>

        <!-- Logo -->
        <div class="absolute top-2 left-2 flex items-center space-x-1">
            <img src="https://kerjabareng.my.id/lppmukdw/wp-content/uploads/2022/11/logo-removebg-preview.png"
                alt="Logo LPPM" class="h-20 w-auto" />
            <div>
                <span class="text-black text-base font-[Calibri] font-bold block">Kuliah</span>
                <span class="text-black text-base font-[Calibri] font-bold block">Kerja Nyata</span>
            </div>
        </div>

        <!-- Konten Header -->
        <div class="relative flex flex-col items-center justify-top min-h-screen text-top text-white z-20">
            <h1 style="font-family: 'Calibri', serif; font-size: 46px; font-weight: bold;">
                WEBSITE RESMI KULIAH KERJA
            </h1>
            <h1 style="font-family: 'Calibri', serif; font-size: 46px; font-weight: bold;">
                NYATA (KKN) UKDW
            </h1>

            <!-- Tombol Navigasi -->
            @if (Route::has('login'))
                <nav class="mt-6 flex space-x-4">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="btn"
                            style="background-color: #1A5319; color: white; padding: 8px 16px; border-radius: 8px; font-size: 1.125rem; font-weight: bold; transition: background-color 0.3s ease;">
                            Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="btn"
                            style="background-color: #1A5319; color: white; padding: 8px 16px; border-radius: 8px; font-size: 1.125rem; font-weight: bold; transition: background-color 0.3s ease;">
                            Log in
                        </a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn"
                                style="background-color: #1A5319; color: white; padding: 8px 16px; border-radius: 8px; font-size: 1.125rem; font-weight: bold; transition: background-color 0.3s ease;">
                                Register
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
        </div>
    </header>

    <main class="mt-6">
        <section>
            <div class="container mx-auto px-4 mx-4">
                <h2 class="text-3xl font-bold mb-2 mx-4">Berita Terbaru</h2>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 px-4 sm:px-6 lg:px-8 xl:px-12">

                <a href="https://ukdw.ac.id/mahasiswa-kkn-tematik-kota-tangani-pengelolaan-sampah-di-suryatmajan/"
                    class="berita-box bg-[#1A5319] text-white p-4 shadow-lg">
                    <img src="{{ asset('asset/kegiatan1.jpg') }}" alt="Berita 1" class="w-full h-48 object-cover mb-4">
                    <h6 class="text-sm text-white mb-2">Berita</h6>
                    <h3 class="text-lg font-semibold mb-2">Mahasiswa KKN Tematik Kota Siap Tangani Pengelolaan Sampah di
                        Suryatmajan</h3>
                    <p class="text-xs">18 September 2024 | Humas UKDW</p>
                </a>

                <a href="https://ukdw.ac.id/ukdw-siap-berdayakan-warga-sedayu-melalui-kkn-tematik-2024/"
                class="berita-box bg-[#1A5319] text-white p-4 shadow-lg">
                    <img src="{{ asset('asset/kegiatan2.jpg') }}" alt="Berita 2" class="w-full h-48 object-cover mb-4">
                    <h6 class="text-sm text-white mb-2">Berita</h6>
                    <h3 class="text-lg font-semibold mb-2">UKDW Siap Berdayakan Warga Sedayu Melalui KKN Tematik 2024
                    </h3>
                    <p class="text-xs">19 Juni 2024 | Humas UKDW</p>
                </a>

                <a href="https://ukdw.ac.id/ukdw-selenggarakan-international-service-learning-bersama-the-hong-kong-polytechnic-university/"
                class="berita-box bg-[#1A5319] text-white p-4 shadow-lg">
                    <img src="{{ asset('asset/kegiatan3.jpg') }}" alt="Berita 3" class="w-full h-48 object-cover mb-4">
                    <h6 class="text-sm text-white mb-2">Berita</h6>
                    <h3 class="text-lg font-semibold mb-2">UKDW Selenggarakan International Service Learning Bersama The
                        Hong Kong Polytechic University</h3>
                    <p class="text-xs">9 Juli 2024 | Humas UKDW</p>
                </a>

                <a href="https://ukdw.ac.id/dua-tim-mahasiswa-ukdw-raih-insentif-pkm/"
                class="berita-box bg-[#1A5319] text-white p-4 shadow-lg">
                    <img src="{{ asset('asset/kegiatan4.png') }}" alt="Berita 4" class="w-full h-48 object-cover mb-4">
                    <h6 class="text-sm text-white mb-2">Berita</h6>
                    <h3 class="text-lg font-semibold mb-2">Dua Tim Mahasiswa UKDW Raih Intensif PKM</h3>
                    <p class="text-xs">24 Juni 2024 | Humas UKDW</p>
                </a>

                <a href="URL_ARTIKEL_5"
                class="berita-box bg-[#1A5319] text-white p-4 shadow-lg">
                    <img src="{{ asset('asset/kegiatan5.jpg') }}" alt="Berita 5" class="w-full h-48 object-cover mb-4">
                    <h6 class="text-sm text-white mb-2">Berita</h6>
                    <h3 class="text-lg font-semibold mb-2">Mahasiswa UKDW Menggelar Workshop Kewirausahaan untuk
                        Masyarakat</h3>
                    <p class="text-xs">15 Oktober 2024 | Humas UKDW</p>
                </a>

                <a href="URL_ARTIKEL_6" class="berita-box bg-[#1A5319] text-white p-4 shadow-lg">
                    <img src="{{ asset('asset/kegiatan6.jpg') }}" alt="Berita 6" class="w-full h-48 object-cover mb-4">
                    <h6 class="text-sm text-white mb-2">Berita</h6>
                    <h3 class="text-lg font-semibold mb-2">Pengabdian Masyarakat Mahasiswa UKDW di Daerah Tertinggal
                    </h3>
                    <p class="text-xs">30 Oktober 2024 | Humas UKDW</p>
                </a>

                <a href="URL_ARTIKEL_7" class="berita-box bg-[#1A5319] text-white p-4 shadow-lg">
                    <img src="{{ asset('asset/kegiatan7.jpg') }}" alt="Berita 6" class="w-full h-48 object-cover mb-4">
                    <h6 class="text-sm text-white mb-2">Berita</h6>
                    <h3 class="text-lg font-semibold mb-2">Pengabdian Masyarakat Mahasiswa UKDW di Daerah Tertinggal
                    </h3>
                    <p class="text-xs">30 Oktober 2024 | Humas UKDW</p>
                </a>

                <a href="URL_ARTIKEL_8" class="berita-box bg-[#1A5319] text-white p-4 shadow-lg">
                    <img src="{{ asset('asset/kegiatan8.jpg') }}" alt="Berita 6" class="w-full h-48 object-cover mb-4">
                    <h6 class="text-sm text-white mb-2">Berita</h6>
                    <h3 class="text-lg font-semibold mb-2">Pengabdian Masyarakat Mahasiswa UKDW di Daerah Tertinggal
                    </h3>
                    <p class="text-xs">30 Oktober 2024 | Humas UKDW</p>
                </a>
            </div>
        </section>
    </main>
    <footer class="py-16 text-center text-sm text-black dark:text-white/70">
        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
    </footer>
</body>

</html>
