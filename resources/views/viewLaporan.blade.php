<html>

<head>
<title>Lihat</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-900">


    <header class="flex flex-wrap sm:justify-start sm:flex-nowrap z-50 w-full bg-white text-sm py-4 dark:bg-gray-800">
        <nav class="max-w-[85rem] w-full mx-auto px-4 sm:flex sm:items-center sm:justify-between" aria-label="Global">
          <div class="flex items-center justify-between">
            <a class="flex-none text-xl font-semibold dark:text-white" href="#">Rekep App</a>
            <div class="sm:hidden">
              <button type="button" class="hs-collapse-toggle p-2 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800" data-hs-collapse="#navbar-collapse-with-animation" aria-controls="navbar-collapse-with-animation" aria-label="Toggle navigation">
                <svg class="hs-collapse-open:hidden w-4 h-4" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                </svg>
                <svg class="hs-collapse-open:block hidden w-4 h-4" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                  <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                </svg>
              </button>
            </div>
          </div>
          <div id="navbar-collapse-with-animation" class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow sm:block">
            <div class="flex flex-col gap-5 mt-5 sm:flex-row sm:items-center sm:justify-end sm:mt-0 sm:pl-5">
                @if (auth()->user()->level == "admin")
                <a class="font-medium text-blue-500" href="/admin" aria-current="page">Admin Tools</a>
                @endif
              <a class="font-medium text-gray-600 hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-500" href="/logout">Logout</a>
            </div>
          </div>
        </nav>
    </header>

    <div class="py-20">
        <div class="xl:container mx-auto px-6 md:px-12">
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
                        src="images/woman1.jpg" alt="woman" loading="lazy" width="640" height="805" />
                    <div
                        class="absolute bottom-0 inset-x-0 h-max mt-auto px-8 py-6 bg-gray-800 dark:bg-white translate-y-24 transition duration-300 ease-in-out group-hover:translate-y-0">
                        <div>
                            <h4 class="text-xl font-semibold dark:text-gray-700 text-white">Agustus</h4>
                            <span class="block text-sm text-gray-500">"nama tempat PKL ham"</span>
                        </div>
                        <p class="mt-6 text-gray-300 dark:text-gray-600">Rekap Laporan Kegiatan Mingguan Prakerin
                            di "get tempat PKL ham" selama bulan Agustus
                        </p>
                    </div>

                </div>
                <div class="group relative rounded-3xl  space-y-6 overflow-hidden">
                    <img class="mx-auto h-[26rem] w-full grayscale object-cover object-top ransition duration-500 group-hover:scale-105 group-hover:grayscale-0"
                        src="images/woman.jpg" alt="woman" loading="lazy" width="640" height="805" />
                    <div
                        class="absolute bottom-0 inset-x-0 h-max mt-auto px-8 py-6 bg-gray-800 dark:bg-white translate-y-24 transition duration-300 ease-in-out group-hover:translate-y-0">
                        <div>
                            <h4 class="text-xl font-semibold dark:text-gray-700 text-white">September</h4>
                            <span class="block text-sm text-gray-500">"get tempat PKL ham"</span>
                        </div>
                        <p class="mt-8 text-gray-300 dark:text-gray-600">Rekap Laporan Kegiatan Mingguan Prakerin
                            di "get tempat PKL ham" selama bulan September</p>
                    </div>

                </div>
                <div class="group relative rounded-3xl  space-y-6 overflow-hidden">
                    <img class="mx-auto h-[26rem] w-full grayscale object-cover object-top transition duration-500 group-hover:scale-105 group-hover:grayscale-0"
                        src="images/man.jpg" alt="woman" loading="lazy" width="640" height="805" />
                    <div
                        class="absolute bottom-0 inset-x-0 h-max mt-auto px-8 py-6 bg-gray-800 dark:bg-white translate-y-24 transition duration-300 ease-in-out group-hover:translate-y-0">
                        <div>
                            <h4 class="text-xl font-semibold dark:text-gray-700 text-white">Oktober</h4>
                            <span class="block text-sm text-gray-500">"get tempat PKL ham"</span>
                        </div>
                        <p class="mt-8 text-gray-300 dark:text-gray-600">Rekap Laporan Kegiatan Mingguan Prakerin
                            di "get tempat PKL ham" selama bulan Oktober </p>
                    </div>

                </div>
            </div>
        </div>
    </div>


</body>

</html>





