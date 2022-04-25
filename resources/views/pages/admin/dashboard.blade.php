@extends('layouts.admin')

@section('title')
ADMIN
@endsection

@section('content')
<main class="h-full overflow-y-auto">
    <div class="container px-6 mx-auto grid">
        <h2 class="my-6 text-2xl font-semibold text-black dark:text-gray-200">
            Informasi Data
        </h2>

        <!-- Cards -->
        <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
            <!-- Card -->
            <div class="flex items-center p-4 bg-blue-100 rounded-lg shadow-xs dark:bg-gray-800">
                <div class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full dark:text-blue-100 dark:bg-blue-500">
                    <img class=" w-7 h-8" src="{{ asset('img/megaphone (1).png')}}" />

                </div>
                <div>
                    <p class="mb-2 text-sm font-medium text-gray-700 dark:text-gray-200">
                        Jumlah Pengaduan
                    </p>
                    <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                        {{ $pengaduan }}
                    </p>
                </div>
            </div>
            <!-- Card -->
            <div class="flex items-center p-4 bg-blue-100 rounded-lg shadow-xs dark:bg-gray-800">
                <div class="p-3 mr-4 text-red-700 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-700">
                    <img class=" w-7 h-8" src="{{ asset('img/complaint.png')}}" />
                </div>
                <div>
                    <p class="mb-2 text-sm font-medium text-gray-700 dark:text-gray-200">
                        Belum di Proses
                    </p>
                    <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                        {{ $pending }}
                    </p>
                </div>
            </div>
            <!-- Card -->
            <div class="flex items-center p-4 bg-blue-100 rounded-lg shadow-xs dark:bg-gray-800">
                <div
                    class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500">
                    <img class=" w-7 h-8" src="https://cdn-icons-png.flaticon.com/512/1556/1556231.png" />
                </div>
                <div>
                    <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-200">
                        Sedang di Proses
                    </p>
                    <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                        {{ $process }}
                    </p>
                </div>
            </div>
            <!-- Card -->
            <div class="flex items-center p-4 bg-blue-100 rounded-lg shadow-xs dark:bg-gray-800">
                <div class="p-3 mr-4 text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500">
                    <img class=" w-7 h-8" src="https://cdn-icons-png.flaticon.com/512/1786/1786650.png" />
                </div>

                <div>
                    <p class="mb-2 text-sm font-medium text-gray-700 dark:text-gray-200">
                        Selesai
                    </p>
                    <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                        {{ $success }}
                    </p>
                </div>
            </div>
        </div>
        @if( Auth::user()->roles == 'ADMIN')

        <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
            <!-- Card -->
            <div class="flex items-center p-4 bg-blue-100 rounded-lg shadow-xs dark:bg-gray-800">
                <div class="p-3 mr-4 text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500">
                    <img class=" w-7 h-8" src="{{ asset('img/team.png')}}" />
                </div>
                <div>
                    <p class="mb-2 text-sm font-medium text-gray-700 dark:text-gray-200">
                        Jumlah User
                    </p>
                    <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                        {{ $user }}
                    </p>
                </div>
            </div>
            <!-- Card -->
            <div class="flex items-center p-4 bg-blue-100 rounded-lg shadow-xs dark:bg-gray-800">
                <div
                    class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500">
                    <img class=" w-7 h-8" src="{{ asset('img/programmer.png')}}" />
                </div>
                <div>
                    <p class="mb-2 text-sm font-medium text-gray-700 dark:text-gray-200">
                        Jumlah Petugas
                    </p>
                    <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                        {{ $petugas }}
                    </p>
                </div>
            </div>
            <!-- Card -->
            <div class="flex items-center p-4 bg-blue-100 rounded-lg shadow-xs dark:bg-gray-800">
                <div class="p-3 mr-4 text-red-700 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-700
        ">
                    <img class=" w-7 h-6" src="{{ asset('img/admin.png')}}" />
                </div>
                <div>
                    <p class="mb-2 text-sm font-medium text-gray-700 dark:text-gray-200">
                        Jumlah Admin
                    </p>
                    <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                        {{ $admin }}
                    </p>
                </div>
            </div>
            <!-- Card -->
            <div class="flex items-center p-4 bg-blue-100 rounded-lg shadow-xs dark:bg-gray-800">
                <div class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full dark:text-blue-100 dark:bg-blue-500">
                    <img class=" w-8 h-7" src="{{ asset('img/chat-box.png')}}" />

                </div>
                <div>
                    <p class="mb-2 text-sm font-medium text-gray-700 dark:text-gray-200">
                        Jumlah Tanggapan
                    </p>
                    <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                        {{ $tanggapan }}
                    </p>
                </div>
            </div>
        </div>
        @endif
    </div>
</main>
@endsection