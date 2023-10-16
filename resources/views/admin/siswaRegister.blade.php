<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Input Data Siswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-medium bg-gray-400">
    <!-- Container -->
    <div class="container mx-auto">
        <div class="flex justify-center px-6 my-12">
            <!-- Row -->
            <div class="w-full xl:w-3/4 lg:w-11/12 flex">
                <!-- Col -->
                <div
                    class="w-full h-auto bg-gray-400 hidden lg:block lg:w-5/12 bg-cover rounded-l-lg"
                    style="background-image: url('https://images.unsplash.com/flagged/photo-1589829482673-03413c918c48?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1484&q=80')"
                ></div>
                <!-- Col -->
                <div class="w-full lg:w-7/12 bg-gray-900 p-5 rounded-lg lg:rounded-l-none">
                    <h3 class="pt-4 text-2xl text-center text-white">Buat akun siswa prakerin!</h3>
                    <form class="px-8 pt-6 pb-8 mb-4 bg-gray-900 rounded" method="POST">
                        @csrf
                        <div class="mb-4 md:flex md:justify-between">
                            <div class="mb-4 md:mr-2 md:mb-0">
                                <label class="block mb-2 text-sm font-bold text-gray-200 bg-gray-900" for="firstName">
                                    Nama Lengkap
                                </label>
                                <input
                                    class="w-full px-3 py-2 text-sm leading-tight rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"
                                    name="namaLengkap"
                                    id="namaLengkap"
                                    type="text"
                                    placeholder="Nama Lengkap"
                                />
                            </div>
                            <div class="md:ml-2">
                                <label class="block mb-2 text-sm font-bold text-gray-300" for="lastName">
                                    Jurusan
                                </label>
                                <select name="jurusan"
                                    class="w-full px-3 py-2 text-sm leading-tight text-gray-300 border rounded shadow appearance-none focus:outline-none focus:shadow-outline bg-gray-800">
                                    <option value>Pilih Jurusan</option>
                                    @foreach ($jurusan as $data)
                                    <option value="{{$data->jurusan}}">{{$data->jurusan}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="md:ml-2">
                                <label class="block mb-2 text-sm font-bold text-gray-300" for="lastName">
                                Tempat Prakerin
                                </label>
                                <input
                                    class="w-full px-3 py-2 text-sm leading-tight rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"
                                    name="tempat"
                                    id="tempat"
                                    type="text"
                                    placeholder="Tempat Siswa Prakerin"
                                />
                            </div>
                        </div>

                        <div class="mb-4">
                            <label class="block mb-2 text-sm font-bold text-gray-300" for="lastName">
                                Nomor Induk
                            </label>
                            <input type="number" name="nomor_induk" id="nomor_induk" placeholder="Masukan Nomor Induk Siswa" class="w-full px-3 py-2 text-sm leading-tight text-gray-300 border rounded shadow appearance-none focus:outline-none focus:shadow-outline bg-gray-800">
                        </div>

                        <div class="mb-4">
                            <label class="block mb-2 text-sm font-bold text-gray-300" for="lastName">
                                Level
                            </label>
                            <select name="level"
                                class="w-full px-3 py-2 text-sm leading-tight text-gray-300 border rounded shadow appearance-none focus:outline-none focus:shadow-outline bg-gray-800">
                                <option value>Pilih Level</option>
                                <option value="admin">Admin</option>
                                <option value="user">User</option>

                            </select>
                        </div>

                        <div class="mb-4">
                            <label class="block mb-2 text-sm font-bold text-gray-300" for="email">
                                Email
                            </label>
                            <input
                                class="w-full px-3 py-2 mb-3 text-sm leading-tight rounded-sm dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"
                                name="email"
                                id="email"
                                type="email"
                                placeholder="Email"
                            />
                        </div>
                        <div class="mb-4" >
                            <div>
                                <label class="block mb-2 text-sm font-bold text-gray-300" for="password">
                                    Password
                                </label>
                                <input
                                    class="w-full px-3 py-2 mb-3 text-sm leading-tight rounded-sm dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"
                                    name="password"
                                    id="password"
                                    type="password"
                                    placeholder="******************"
                                />

                            </div>

                            @error('password')
                                <span>
                                    <strong class="text-sm text-red-500 ">{{$message}}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <div>
                                <label class="block mb-2 text-sm font-bold text-gray-300" for="password">
                                    Konfirmasi Password
                                </label>
                                <input
                                    class="w-full px-3 py-2 mb-3 text-sm leading-tight rounded-sm dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"
                                    name="password_confirmation"
                                    id="password_confirmation"
                                    type="password"
                                    placeholder="******************"
                                />
                                <p class="text-xs italic text-red-500">Tolong masukkan password yang mudah diingat user!.</p>
                            </div>
                        </div>
                        <div class="mb-6 text-center">
                            <input type="submit"
                            class="w-full px-4 py-2 font-bold text-white bg-blue-500 rounded-full hover:bg-blue-700 focus:outline-none focus:shadow-outline"
                            value="Buat Akun">
                        </div>
                        <hr class="mb-6 border-t" />
                        <div class="text-center">
                            <a
                                class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800"
                                href="../admin"
                            >
                                Kembali?
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
