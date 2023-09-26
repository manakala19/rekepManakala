<html>

<head>
    <title>Lihat</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-900">



    <nav
        class="relative flex w-full flex-wrap items-center justify-between bg-gray-900 py-2 text-neutral-500 shadow-lg hover:text-neutral-700 focus:text-neutral-700 dark:bg-gray-900 lg:py-4">
        <div class="flex w-full flex-wrap items-center justify-between px-3">
            <a class="ml-2 text-3xl text-white dark:text-neutral-200" href="laporan-kegiatan">Rekep App</a>
            <div class="flex flex-col gap-5 mt-5 sm:flex-row sm:items-center sm:justify-end sm:mt-0 sm:pl-5">
                @if (auth()->user()->level == "admin")
                <a class="font-medium text-blue-500" href="/admin" aria-current="page">Admin Tools</a>
                @endif
                <a class="font-medium text-gray-600 hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-500"
                    href="/logout">Logout</a>
            </div>
        </div>
    </nav>
    <div class="py-20">
        <div class="xl:container mx-auto px-10 md:px-18">
            <div class="mb-16 md:w-2/3 lg:w-1/2">
                <h2 class="mb-4 text-2xl font-bold text-gray-800 dark:text-white md:text-4xl">
                    Pilih Laporan !
                </h2>
                <p class="text-gray-600 dark:text-gray-300">
                    Rekap Laporan Praktek Kerja Industri SMK Mahaputra Cerdas Utama
                </p>
            </div>
            <div class="grid gap-6 px-4 sm:px-0 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                <div class="group relative rounded-3xl  space-y-6 overflow-hidden">
                    <img class="mx-auto h-[26rem] w-full grayscale object-cover object-top ransition duration-500 group-hover:scale-105 group-hover:grayscale-0"
                        src="{{ asset("assets/bulan1.jpg") }}" alt="bulan agus" loading="lazy"
                        width="640" height="805" />
                    <div
                        class="absolute bottom-0 inset-x-0 h-max mt-auto px-8 py-6 bg-gray-800 dark:bg-white translate-y-24 transition duration-300 ease-in-out group-hover:translate-y-0">
                        <div>
                        @foreach ($laporan_kegiatan_data as $lapkeg)
                            <h4 class="text-xl font-semibold dark:text-gray-700 text-white">Agustus</h4>
                            <span class="block text-sm text-gray-500">{{$lapkeg->user->tempat_prakerin}}</span>
                        </div>
                        <p class="mt-6 text-gray-300 dark:text-gray-600">Rekap Laporan Kegiatan Mingguan Prakerin
                            di {{$lapkeg->user->tempat_prakerin}} selama bulan Agustus
                        </p>
                    </div>

                </div>
                <div class="group relative rounded-3xl  space-y-6 overflow-hidden">
                    <img class="mx-auto h-[26rem] w-full grayscale object-cover object-top ransition duration-500 group-hover:scale-105 group-hover:grayscale-0"
                        src="{{ asset("assets/bulan2.jpg") }}" alt="bulan sep" loading="lazy"
                        width="640" height="805" />
                    <div
                        class="absolute bottom-0 inset-x-0 h-max mt-auto px-8 py-6 bg-gray-800 dark:bg-white translate-y-24 transition duration-300 ease-in-out group-hover:translate-y-0">
                        <div>
                            <h4 class="text-xl font-semibold dark:text-gray-700 text-white">September</h4>
                            <span class="block text-sm text-gray-500">{{$lapkeg->user->tempat_prakerin}}</span>
                        </div>
                        <p class="mt-8 text-gray-300 dark:text-gray-600">Rekap Laporan Kegiatan Mingguan Prakerin
                            di {{$lapkeg->user->tempat_prakerin}} selama bulan September</p>
                    </div>

                </div>
                <div class="group relative rounded-3xl  space-y-6 overflow-hidden">
                    <img class="mx-auto h-[26rem] w-full grayscale object-cover object-top transition duration-500 group-hover:scale-105 group-hover:grayscale-0"
                        src="{{ asset("assets/bulan3.jpg") }}" alt="woman" loading="lazy"
                        width="640" height="805" />
                    <div
                        class="absolute bottom-0 inset-x-0 h-max mt-auto px-8 py-6 bg-gray-800 dark:bg-white translate-y-24 transition duration-300 ease-in-out group-hover:translate-y-0">
                        <div>
                            <h4 class="text-xl font-semibold dark:text-gray-700 text-white">Oktober</h4>
                            <span class="block text-sm text-gray-500">{{$lapkeg->user->tempat_prakerin}}</span>
                        </div>
                        <p class="mt-8 text-gray-300 dark:text-gray-600">Rekap Laporan Kegiatan Mingguan Prakerin
                            di {{$lapkeg->user->tempat_prakerin}} selama bulan Oktober </p>
                    @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>


</body>

</html>
