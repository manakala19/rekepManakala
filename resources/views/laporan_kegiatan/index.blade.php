<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-900">

        <nav class="fixed z-40 w-full border-b dark:border-gray-700 bg-white dark:bg-gray-800 md:absolute md:bg-transparent">
            <div class="container m-auto px-2 md:px-12 lg:px-7">
                <div class="flex px-6 md:px-0 z-20 flex-wrap items-center justify-between py-3 gap-6 md:py-4 md:gap-0">
                    <input type="checkbox" name="" id="toggleNav" class="peer hidden">
                    <label for="toggleNav" role="overlaynav" class="fixed left-0 top-0 transition-all 
                    md:peer-checked:hidden md:hidden opacity-0 hidden peer-checked:z-0 
                    peer-checked:opacity-75 peer-checked:block w-full h-screen
                    bg-gray-200 bg-opacity-75 dark:bg-darker dark:opacity-80"></label>
                    <div class="relative z-40 font-bold text-2xl text-white">
                        Rekep APP
                    </div>
                    
                    <div id="navlinks"
                        class="fixed h-full w-4/5 max-w-sm top-0 -left-full peer-checked:-left-0 md:relative md:top-0 md:left-0 transition-all z-30 md:flex items-center p-8 bg-white dark:bg-gray-800 md:space-y-0 md:p-0 md:flex-nowrap md:bg-transparent md:w-max">
                        <div class="z-20 flex gap-8 md:gap-0 flex-col md:flex-row md:items-center w-full">
                            <ul class="pt-28 lg:pt-0 gap-8 tracking-wide font-medium flex-col flex md:flex-row md:gap-0">
                                <li class="max-w-max">
                                    <a href="#" class="block md:px-3">
                                        <div
                                            class="relative text-cyan-800 dark:text-white
                                                    before:absolute before:-bottom-2 md:before:-bottom-7 before:w-full before:h-0.5 before:mx-auto before:mt-auto before:rounded-full before:bg-cyan-800 dark:before:bg-cyan-400">
                                            <span>Profil</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="max-w-max">
                                    <a href="#" class="block md:px-3 group">
                                        <div
                                            class="relative text-gray-600 dark:text-gray-300
                                                    before:absolute before:-bottom-2 md:before:-bottom-7 before:origin-left before:w-full before:h-0.5 before:mx-auto before:mt-auto before:rounded-full before:bg-cyan-800 dark:before:bg-cyan-400 before:transition before:scale-x-0 group-hover:before:scale-x-100">
                                            <span class="transition group-hover:text-cyan-700 dark:group-hover:text-cyan-400">Projek</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="max-w-max">
                                    <a href="#" class="block md:px-3 group">
                                        <div
                                            class="relative text-gray-600 dark:text-gray-300
                                                    before:absolute before:-bottom-2 md:before:-bottom-7 before:origin-left before:w-full before:h-0.5 before:mx-auto before:mt-auto before:rounded-full before:bg-cyan-800 dark:before:bg-cyan-400 before:transition before:scale-x-0 group-hover:before:scale-x-100">
                                            <span class="transition group-hover:text-cyan-700 dark:group-hover:text-cyan-400">Logout</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <div class="flex sm:hidden pt-4 w-full">
                                <button type="button" title="Start buying"
                                    class=" flex justify-center items-center w-full py-3 px-6 text-center rounded-full transition bg-gray-900 dark:bg-gray-700 hover:bg-cyan-500 active:bg-cyan-600 focus:bg-cyan-800">
                                    <span class="block text-white text-sm">
                                        Admin Panel
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="block-endnav w-max flex items-center gap-4">
                        <button type="button" title="Start buying"
                            class="hidden sm:block w-full py-3 px-6 text-center rounded-full transition bg-gray-900 dark:bg-gray-700 hover:bg-cyan-500 active:bg-cyan-600 focus:bg-cyan-800 sm:w-max">
                            <span class="block text-white text-sm">
                                Admin Panel
                            </span>
                        </button>

                        <div class="flex items-center md:hidden max-h-10">
                            <label role="button" for="toggleNav" aria-label="humburger" id="hamburger" class="relative  p-6 -mr-6">
                                <div role="hidden" id="line"
                                    class="m-auto h-0.5 w-6 rounded bg-sky-900 dark:bg-gray-200 transition duration-300"></div>
                                <div role="hidden" id="line2"
                                    class="m-auto mt-2 h-0.5 w-6 rounded bg-sky-900 dark:bg-gray-200 transition duration-300">
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </nav>


    <section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5 block py-20">
        <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
            <!-- start sinii  -->


            <div
                class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                    <a href="admin/registrasiSiswa">
                        <button type="button"
                            class="flex items-center justify-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                            <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path clip-rule="evenodd" fill-rule="evenodd"
                                    d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                            </svg>
                            Tambah Laporan
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                <thead>
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Tanggal
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase ">
                            Minggu ke-</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase ">
                            Uraian Kegiatan</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase ">
                            Lampiran Kegiatan</th>
                        <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">
                            Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                    @foreach($user as $row)
                        <tr>
                            <td
                                class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                {{ $row-> }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                {{ $row-> }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                {{ $row-> }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                {{ $row-> }}</td>

                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <a class="text-blue-500 hover:text-blue-700" href="#">Lihat</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        </div>
        </div>
    </section>


</body>

</html>



























