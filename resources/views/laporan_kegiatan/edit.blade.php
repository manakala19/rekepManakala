<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Laporan</title>
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

    <section class="max-w-4xl p-6 mx-auto bg-indigo-600 rounded-md shadow-md dark:bg-gray-800 mt-10 mb-20">
        <form action="{{route('laporan-kegiatan.update', [$laporan_kegiatan->id])}}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <h1 class="text-xl font-bold text-white capitalize dark:text-white">Edit Laporan</h1>
                <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">

                    <div>
                        <label class="text-white dark:text-gray-200">Bulan</label>
                        <select name="bulan" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                            @foreach ($data_bulan as $bulan)
                            <option value="{{$bulan}}" {{($bulan == $laporan_kegiatan->bulan)?'selected':null}} >{{$bulan}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <label class="text-white dark:text-gray-200" for="passwordConfirmation">Minggu Ke-</label>
                        <select name="minggu_ke" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                            @for ($minggu = 1; $minggu<= 4; $minggu++)
                            <option value="{{$minggu}}" {{($minggu == $laporan_kegiatan->minggu_ke)?'selected':null}}>{{$minggu}}</option>
                            @endfor
                        </select>
                    </div>



                    <div>
                        <label class="text-white dark:text-gray-200" for="passwordConfirmation">Tanggal Mulai</label>
                        <input name="tanggal_mulai" id="tanggal_mulai" value="{{$laporan_kegiatan->tanggal_mulai}}" type="date" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                    </div>

                    <div>
                        <label class="text-white dark:text-gray-200" for="passwordConfirmation">Tanggal Selesai</label>
                        <input name="tanggal_selesai" id="tanggal_selesai" value="{{$laporan_kegiatan->tanggal_selesai}}" type="date" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                    </div>

                <div>
                        <label class="block text-sm font-medium text-white">
                        Lampiran Kegiatan
                    </label>
                    <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                        <div class="space-y-1 text-center">
                            <svg class="mx-auto h-12 w-12 text-white" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                                <div class="flex text-sm text-gray-600">
                                    <label for="lampiran_kegiatan" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                    <span class="">Upload file</span>
                                    <input id="lampiran_kegiatan" name="lampiran_kegiatan" type="file" class="sr-only">
                                    </label>
                                    <p class="pl-1 text-white">Lampiran Kegiatan</p>
                                </div>
                            <p class="text-xs text-white">
                                PNG, JPG, GIF sampai dengan 10MB
                            </p>
                        </div>
                    </div>
                    <a href="{{route('downloadLampiran',[$laporan_kegiatan->id])}}" target="_blank" class="text-blue-500 hover:text-blue-700 cursor-pointer">Lihat Lampiran
                </div>

                </div>
                <div>
                    <label class="text-white dark:text-gray-200" for="passwordConfirmation"> Uraian Kegiatan</label>
                    <textarea name="uraian_kegiatan" id="uraian_kegiatan" type="textarea" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">{{$laporan_kegiatan->uraian_kegiatan}}</textarea>
                </div>

                <div class="flex justify-end mt-6">
                    <button class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-blue-500 rounded-md hover:bg-blue-700 focus:outline-none focus:bg-gray-600">
                        <input type="submit" value="Simpan">
                    </button>
                </div>
        </form>
    </section>
</body>
</html>
