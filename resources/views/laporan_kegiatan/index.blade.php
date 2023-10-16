<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-900">

<nav class="relative flex w-full flex-wrap items-center justify-between bg-gray-900 py-2 text-neutral-500 shadow-lg hover:text-neutral-700 focus:text-neutral-700 dark:bg-gray-900 lg:mt-3">
    <div class="flex w-full flex-wrap items-center justify-between px-3">
        <a class="ml-2 text-3xl text-white dark:text-neutral-200" href="{{route('laporan-kegiatan.index')}}">Rekep App</a>
        <div class="flex flex-col gap-5 mt-5 sm:flex-row sm:items-center sm:justify-end sm:mt-0 sm:pl-5">
            @if (auth()->user()->level == "admin")
            <a class="font-medium text-blue-500" href="/admin" aria-current="page">Admin Tools</a>
            @endif
            <a class="font-medium text-gray-600 hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-500"
                href="/logout">Logout</a>
        </div>
    </div>
</nav>

    <section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5 block py-20">
        <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
            <!-- start sinii  -->
        </div>
        @if (session('sukses'))
        <div class="mb-3 inline-flex w-full items-center rounded-lg bg-green-300 px-6 py-5 text-base text-green-600" role="alert">
            <span class="mr-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5">
                    <path fill-rule="evenodd"
                        d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
                        clip-rule="evenodd" />
                </svg>
            </span>
            {{session('sukses')}}
        </div>
        @endif
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                <thead>
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase ">Bulan</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase ">Minggu ke</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Tanggal Mulai</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Tanggal Selesai</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase ">Uraian Kegiatan</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase ">Lampiran Kegiatan</th>
                        <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 dark:divide-gray-700 text-white">
                    @foreach($laporan_kegiatan_data as $lapkeg)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200"> {{$lapkeg->bulan}}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200"> {{$lapkeg->minggu_ke}}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200"> {{$lapkeg->tanggal_mulai}}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200"> {{$lapkeg->tanggal_selesai}}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200"> {{$lapkeg->uraian_kegiatan}}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200"> <a href="{{route('downloadLampiran',[$lapkeg->id])}}" target="_blank" rel="noopener norefferer" class="text-blue-500 cursor-pointer">Lihat Lampiran</a></td>
                            <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                                <a class="text-blue-500 hover:text-blue-700 block mb-2" href="{{route('laporan-kegiatan.edit', [$lapkeg->id])}}">Edit</a>
                                <form action="{{route('laporan-kegiatan.destroy', [$lapkeg->id])}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="text-blue-500 hover:text-blue-700 block mb-2" value="Delete">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
                    <a href="{{route('laporan-kegiatan.create')}}">
                        <button type="button"
                            class="flex items-center justify-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800 mb-2">
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
        </div>
    </section>


</body>

</html>



























