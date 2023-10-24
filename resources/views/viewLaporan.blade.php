<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-900">

<nav class="relative flex w-full flex-wrap items-center justify-between bg-gray-900 py-2 text-neutral-500 shadow-lg hover:text-neutral-700 focus:text-neutral-700 dark:bg-gray-900 lg:mt-3">
    <div class="flex w-full flex-wrap items-center justify-between px-3">
        <a class="ml-2 text-3xl text-white dark:text-neutral-200" href="{{route('adminDashboard')}}">Rekep App</a>
        <div class="flex flex-col gap-5 mt-5 sm:flex-row sm:items-center sm:justify-end sm:mt-0 sm:pl-5">
            @if(auth()->user()->level == "admin")
            <a class="font-medium text-blue-500" href="{{route('adminDashboard')}}" aria-current="page">You are an {{auth()->user()->level}}</a>
        @endif
            <a class="font-medium text-gray-600 hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-500"
                href="{{route('logout')}}">Logout</a>
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
                        <th scope="col" class="px-8 py-3 text-left text-xs font-medium text-gray-500 uppercase "> Bulan </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase "> Minggu ke </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase "> Uraian Kegiatan </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase "> Catatan Pembimbing </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase ">Lampiran Kegiatan</th>
                        <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 dark:divide-gray-700 text-white">
                    @foreach($getdata->laporan_kegiatan as $lapkeg)
                        <tr>

                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200"> {{$lapkeg->bulan}}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200"> {{$lapkeg->minggu_ke}}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200"> {{$lapkeg->uraian_kegiatan}}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                @if ($lapkeg->catatan_pembimbing != null)
                                {{$lapkeg->catatan_pembimbing}}
                                @elseif($lapkeg->catatan_pembimbing == null)
                                <p>Catatan Tidak Terdeteksi</p>
                                @endif
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200"> <a href="{{route('downloadLampiran',[$lapkeg->id])}}" target="_blank" class="text-blue-500 hover:text-blue-700 cursor-pointer">Lihat Lampiran</a></td>
                            <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                                <form action="{{route('accLaporan', [$lapkeg->id])}}" method="POST">
                                    @method('PUT')
                                    @csrf
                                    @if ($lapkeg->status_laporan == 0)
                                    <input type="submit" value="Berikan Acc" class="text-blue-500 hover:text-blue-700 cursor-pointer">
                                    @else
                                    <input type="submit" value="Batalkan Acc" class="text-red-500 hover:text-red-700 cursor-pointer">
                                    @endif
                                </form>
                                <a class="text-blue-500 hover:text-blue-700 block" href="{{route('beriCatatan.show', [$lapkeg->id])}}">Beri Catatan</a>
                                {{-- @if ($lapkeg->catatan_pembimbing != null)
                                <form action="{{route('beriCatatan.destroy', [$lapkeg->id])}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" class="text-blue-500 hover:text-blue-700 block mb-2" value="Delete Catatan">
                                    </form>
                                @endif --}}

                                {{-- <a class="text-blue-500 hover:text-blue-700 block mb-2" href="lihat-laporan">Lihat</a>
                                <a class="text-blue-500 hover:text-blue-700 block mb-2" href="{{route('laporan-kegiatan.edit')}}">Edit</a>
                                <a class="text-blue-500 hover:text-blue-700 block mb-2" href="{{route('laporan-kegiatan.destroy')}}">Hapus</a> --}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
        </div>
        </div>
        </div>
    </section>


</body>

</html>








