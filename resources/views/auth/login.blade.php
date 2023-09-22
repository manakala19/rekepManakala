
        @if(session('error'))
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">Ada yang salah!</strong>
            <span class="block sm:inline">Periksa lagi password dan email.</span>
            <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
            <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
            </span>
        </div>
        @endif
        <!doctype html>
        <html>
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <script src="https://cdn.tailwindcss.com"></script>
        </head>
        <body class="bg-gray-800">

            <section class="bg-gray-900 min-h-screen flex items-center justify-center">
                <!-- login kontener -->
                <div class="bg-gray-900 flex rounded-2xl shadow-lg max-w-3xl p-5">
                    <!-- forms -->
                    <div class="sm:w-1/2 px-16">
                        <h2 class="font-bold text-4xl text-white"> Login</h2>
                        <p class="font-bold text-xl mt-4 text-white"> Rekep APP </p>
                        <form action="login" method="POST" class="flex flex-col gap-4">
                            @csrf
                            <input class="p-2 mt-8 rounded-xl border w-full" type="email" name="email" placeholder="Email">
                        <div class="relative">
                            <input class="p-2 rounded-xl border w-full" type="password" name="password" placeholder="password">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye absolute top-1/2 right-3
                            -translate-y-1/2" viewBox="0 0 16 16">
                                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                            </svg>
                        </div>
                            <input class="bg-blue-800 rounded-xl
                            text-white py-2" type="submit" value="Login">
                        </form>

                        <div class="mt-10 grid grid-cols-3 items-center text-gray-400">
                            <hr class="border-gray-400">
                            <p class="text-center">OR</p>
                            <hr class="border-gray-400">
                        </div>

                        <br>

                        <a href="register">
                        <button class="bg-blue-800 border py-2 w-full rounded-xl text-white">
                            Register
                        </button>
                        </a>

                        <p class="mt-10 text-xs text-white">Lupa Password?</p>

                    </div>
                    <!-- fotooo -->
                    <div class="sm:block hidden w-1/2 p-5">
                        <img class="  rounded-2xl " src="{{asset('assets/login.jpg')}}" alt="">
                    </div>
                </div>

            </section>

        </body>
        </html>
        <a href="register">
            <button>
                Register
            </button>
        </a>

