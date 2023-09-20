<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="bg-gray-900">

    <nav class="fixed top-0 left-0 bg-gray-800 w-full shadow mb-36">
        <div class="container m-auto flex justify-between items-center text-white">
            <h1 class="pl-8 py-4 text-xl font-bold hover: ">Rekep-App</h1>
            <ul class="hidden md:flex items-center pr-10 text-base font-semibold cursor-pointer">
                <li class="hover:bg-gray-800 py-4 px-6 rounded-2xl">Profil</li>
                <li class="hover:bg-gray-800 py-4 px-6 rounded-2xl">Projek</li>
                <li class="hover:bg-gray-800 py-4 px-6 rounded-2xl">Logout</li>
            </ul>

            <button class="block md:hidden py-3 px-4 mx-2 rounded focus:outline-none hover:bg-gray-200 group">
                <div class="w-5 h-1 bg-gray-700 mb-1"></div>
                <div class="w-5 h-1 bg-gray-700 mb-1"></div>
                <div class="w-5 h-1 bg-gray-700 mb-1"></div>
                <div class="absolute top-0 -right-full h-screen w-8/12 bg-gray-800 border opacity-0 group-focus:right-0 group-focus:opacity-100 transition-all duration-300">
                    <ul class="flex flex-col items-center w-full text-base cursor-pointer pt-10">
                        <li class="hover:bg-blue-500 py-4 px-6 w-full">Profil</li>
                        <li class="hover:bg-blue-500 py-4 px-6 w-full">Projek</li>
                        <li class="hover:bg-blue-500 py-4 px-6 w-full">Logout</li>
                    </ul>
                </div>
            </button>
        </div>
    </nav>

    <section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5 mt-16">
        <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
            <!-- start sinii  -->


            <div class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">

                        <div class="flex items-center space-x-3 w-full md:w-auto">
                            <a href="admin/registrasiSiswa">
                                <button type="button" class="flex items-center justify-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                                    <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                                    </svg>
                                    Tambah data siswa
                                </button>
                                </a>
                        </div>
                    </div>
                </div>
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                        <thead>
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nama Siswa
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Jurusan
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase ">
                                    Tempat Prakerin</th>
                                <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">
                                    Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                            <tr>
                                @foreach ($user as $row)
                                <td
                                    class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                    {{$row->name}}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">{{$row->jurusan_id}}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                    {{$row->tempat_prakerin}}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <a class="text-blue-500 hover:text-blue-700" href="#">Lihat</a>
                                </td>
                                @endforeach
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </section>


</body>

</html>
