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
<form action="" method="POST">
    <div class="space-y-12">
        <div class="bg-gray-900 border-b border-gray-900/10 pb-12">
            <h2 class="text-base font-semibold leading-7 text-gray-900">Profil</h2>
            <p class="mt-1 text-sm leading-6 text-gray-600">Informasi Mengenai Profil siswa ham, contoh :nama, jurusan, tempat pkl</p>
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="col-span-full">
                        <label for="about" class="block text-sm font-medium leading-6 text-white">Catatan</label>
                        <div class="mt-2">
                            <textarea id="about" name="about" rows="3"
                                class="block w-1/2 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                        </div>
                        <p class="mt-3 text-sm leading-6 text-gray-600">Tulis catatan untuk siswa/i bimbingan anda!</p>
                </div>
            </div>
        </div>
    </div>
        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" class="text-sm font-semibold leading-6 text-white">Batalkan</button>
            <button type="submit"
                class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Simpan</button>
        </div>
</form>
</body>
</html>
