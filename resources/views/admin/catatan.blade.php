<html>

<head>
    <title>Catatan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-900">
    <nav class="relative flex w-full flex-wrap items-center justify-between bg-gray-900 py-2 text-neutral-500 shadow-lg hover:text-neutral-700 focus:text-neutral-700 dark:bg-gray-900 lg:mt-3">
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
    <section class="p-6 dark:text-gray-100">
        <form action="" method="POST" class="container w-full max-w-xl p-8 mx-auto space-y-6 rounded-md shadow dark:bg-gray-900">
            <h2 class="w-full text-3xl font-bold leadi">Catatan Laporan</h2>
            
            <div>
                <label for="message" class="block mb-3 ml-1">Catatan untuk Laporan</label>
                <textarea id="message" type="text" placeholder="Message..." class="block w-full p-2 rounded autoexpand focus:outline-none focus:ring focus:ri focus:ri dark:bg-gray-800"></textarea>
            </div>
            <div>
                <button type="submit" class="w-full px-4 py-2 font-bold rounded shadow focus:outline-none focus:ring hover:ring focus:ri dark:bg-blue-400 focus:ri hover:ri dark:text-white">Kirim</button>
            </div>
        </form>
    </section>

</body>
</html>