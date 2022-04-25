<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LASPOM | Pengaduan Mahasiswa</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="icon" href="{{ asset('img/Group_51.png')}}">
    <style>
    html {
        scroll-behavior: smooth;
    }
    </style>
</head>

<body class="leading-normal tracking-normal" style="font-family: 'cursive', sans-serif">

    <nav class="flex items-center justify-between flex-wrap bg-red-700 p-3 px-20">
        <div class="flex items-center flex-shrink-0 text-black mr-6 ">
            <img src="{{ asset('img/Group_56.png')}}" alt=""
                class="transform transition hover:scale-125 duration-300 ease-in-out w-4/5" />
            <span class="font-bold tracking-wider text-xl">
            </span>
        </div>
        <div class="block lg:hidden">
            <button
                class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
                <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                </svg>
            </button>
        </div>
        <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto text-center">
            <div class="text-xl   lg:flex-grow">
                <a href="#how" class="block mt-4  lg:mt-0 text-white mr-4  transform transition hover:scale-125">
                    Beranda
                </a>
            </div>
            <div>

                <button
                    class="bg-white hover:bg-gray-500 text-black font-semibold py-2 px-4 rounded transform transition hover:scale-75">
                    <a href="{{ url('login')}}">Masuk</a>
                </button>

                <button
                    class="bg-white hover:bg-gray-500 text-black font-semibold py-2 px-4  rounded transform transition hover:scale-75">
                    <a href="{{ url('register')}}">Daftar</a>

                </button>
            </div>
        </div>
    </nav>

    <!-- Header -->

    <!--Hero-->
    <div class="pt-24 px-16 bg-white">
        <div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
            <!--Left Col-->
            <div class="w-full md:w-3/5 flex pl-24 items-left">
                <img class="object-fill  transform transition hover:scale-110 duration-300 ease-in-out"
                    src="{{ asset('img/Figure.png')}}" />
            </div>

            <!--Right Col-->
            <div
                class="flex flex-col w-full md:w-2/5 justify-center items-start text-center md:text-left text-gray-900">
                <h1 class="my-4 text-3xl font-bold leading-tight">
                    Layanan Aspirasi & Pengaduan Mahasiswa Online
                </h1>
                <p class="text-lg mb-8 font-medium">
                    Mari Laporkan Aspirasi Maupun Pengaduan Terkait Masalah Yang
                    Sedang Anda Alami.
                </p>
                <button
                    class="mx-auto lg:mx-0 bg-red-500 text-white font-bold rounded-md my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                    <a href="{{ url('login')}}">Laporkan!</a>
                </button>
            </div>
        </div>
    </div>

    <!-- How -->
    <div id="how" class="container my-20 mx-auto px-4 md:px-12 bg-gray-200">
        <div class="flex flex-wrap -mx-1 lg:-mx-4">
            <!-- Column -->
            <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/4">
                <!-- Article -->
                <article class="overflow-hidden rounded-lg shadow-lg  text-gray-800">
                    <img alt="Tulis"
                        class="block h-auto w-full lg:w-28 mx-auto my-10 transform transition hover:scale-125 duration-300 ease-in-out"
                        src="{{ asset('img/desktop-computer.png')}}" />
                    <header class="leading-tight p-2 md:p-4 text-center ">
                        <h1 class="text-lg font-bold">1. Tulis Laporan</h1>
                        <p class="text-grey-darker text-sm py-4">
                            Laporkan keluhan atau aspirasi anda dengan jelas dan lengkap.
                        </p>
                    </header>
                </article>
                <!-- END Article -->
            </div>
            <!-- END Column -->
            <!-- Column -->
            <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/4">
                <!-- Article -->
                <article class="overflow-hidden rounded-lg shadow-lg text-gray-800">
                    <img alt="Proses"
                        class="block h-auto w-full lg:w-28 mx-auto my-10 transform transition hover:scale-125 duration-300 ease-in-out"
                        src="{{ asset('img/exam.png')}}" />
                    <header class="leading-tight p-2 md:p-4 text-center">
                        <h1 class="text-lg font-bold">2. Proses Verifikasi</h1>
                        <p class="text-grey-darker text-sm py-4">
                            Tunggu Laporan Anda akan diverifikasi.
                        </p>
                    </header>
                </article>
                <!-- END Article -->
            </div>
            <!-- END Column -->
            <!-- Column -->
            <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/4">
                <!-- Article -->
                <article class="overflow-hidden rounded-lg shadow-lg  text-gray-800">
                    <img alt="Ditindak"
                        class="block h-auto w-full lg:w-28 mx-auto my-10 transform transition hover:scale-125 duration-300 ease-in-out"
                        src="{{ asset('img/flexible.png')}}" />
                    <header class="leading-tight p-2 md:p-4 text-center">
                        <h1 class="text-lg font-bold">3. Tindak Lanjut</h1>
                        <p class="text-grey-darker text-sm py-4">
                            Petugas akan menindaklanjuti dan membalas laporan anda.
                        </p>
                    </header>
                </article>
                <!-- END Article -->
            </div>
            <!-- END Column -->
            <!-- Column -->
            <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/4">
                <!-- Article -->
                <article class="overflow-hidden rounded-lg shadow-lg  text-gray-800">
                    <img alt="Selesai"
                        class="block h-auto w-full lg:w-28 mx-auto my-10 transform transition hover:scale-125 duration-300 ease-in-out"
                        src="{{ asset('img/completed-task.png')}}" />
                    <header class="leading-tight p-2 md:p-4 text-center">
                        <h1 class="text-lg font-bold">4. Selesai</h1>
                        <p class="text-grey-darker text-sm py-4">
                            Laporan Anda akan terus ditindaklanjuti hingga terselesaikan.
                        </p>
                    </header>
                </article>
                <!-- END Article -->
            </div>
            <!-- END Column -->
        </div>
    </div>
    <!-- Footer -->
    <!-- <footer class="text-center text-white font-semibold bg-red-700 py-5">

        © 2022 LASPOM | By TIM CEPU
    </footer> -->

    <footer class="p-4 bg-red-700 sm:p-6">
        <div class="md:flex md:justify-between">
            <div class="mb-6 md:mb-0">
                <a href="" class="flex items-center">&ensp;&ensp;&ensp;&ensp;&ensp;
                    <img src="{{ asset('img/Group_51.png')}}" class="w-20" alt="FlowBite Logo">
                    <span class="self-center text-2xl font-semibold whitespace-nowrap  text-white">
                        &ensp;&ensp;LASPOM</span>
                </a>
            </div>
            <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-black uppercase dark:text-white">Resources</h2>
                    <ul class="text-white dark:text-gray-400">
                        <li class="mb-4">
                            <a href="https://laravel.com/" target="_blank class=" hover:underline
                                text-white">Laravel</a>
                        </li>
                        <li>
                            <a href="https://tailwindcss.com/" target="_blank class=" hover:underline
                                text-white">Tailwind CSS</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-black uppercase dark:text-white">Follow us</h2>
                    <ul class="text-white dark:text-gray-400">
                        <li class="mb-4">
                            <a href="https://github.com/zaidazzam/Proyek-LASPOM" target="_blank class=" hover:underline ">Github</a>
                        </li>
                        <li>
                            <a href="" target=" _blank class="
                                hover:underline">Discord</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-black uppercase dark:text-white">Kontak</h2>
                    <ul class="text-white dark:text-gray-400">
                        <li class="mb-4">
                            <a href="https://www.instagram.com/laspom_id/" target="_blank
                                class=" hover:underline text-white">Instagram</a>
                        </li>
                        <li>
                            <a href="https://twitter.com/Laspom_id" target="_blank class=" hover:underline text-white ">Twitter</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <hr class=" my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8">
                                <div class="sm:flex sm:items-center sm:justify-between">
                                    <span class="text-sm text-white sm:text-center dark:text-gray-400">© 2022 <a href=""
                                            class="hover:underline text-white">LASPOM™</a>. Seluruh Hak Cipta..
                                    </span>
                                    <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
                                        <a href="https://www.instagram.com/laspom_id/" target="_blank
                                            class=" text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"
                                                aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </a>
                                        <a href="https://twitter.com/Laspom_id" target="_blank
                                            class=" text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"
                                                aria-hidden="true">
                                                <path
                                                    d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84">
                                                </path>
                                            </svg>
                                        </a>
                                        <a href="https://github.com/zaidazzam/Proyek-LASPOM" target="_blank
                                            class=" text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"
                                                aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </a>

                                    </div>
                                </div>
    </footer>


    @include('sweetalert::alert')
</body>

</html>