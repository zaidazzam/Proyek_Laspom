@extends('layouts.admin')

@section('title')
Data Mahasiswa
@endsection

@section('content')
<main class="h-full pb-16 overflow-y-auto">
    <div class="container grid px-6 mx-auto">
        <h2 class="my-6 text-2xl font-semibold text-black dark:text-white">
            Data Mahasiswa
        </h2>


        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{ $error }} </li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <table class="w-full whitespace-no-wrap">
                    <thead>
                        <tr
                            class="text-xs font-semibold tracking-wide text-left text-black  uppercase border-b dark:border-gray-700 bg-blue-100 dark:text-white dark:bg-gray-800">
                            <th class="px-4 py-3">Nama</th>
                            <th class="px-4 py-3">NIM</th>
                            <th class="px-4 py-3">No. Hp</th>
                            <th class="px-4 py-3">Email</th>
                        </tr>
                    </thead>
                    <tbody class="bg-blue-100 divide-y dark:divide-gray-800 dark:bg-gray-700">
                        @forelse ($data as $masyarakat)
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3 text-sm">
                                {{ $masyarakat->name }}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{ $masyarakat->nik }}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{ $masyarakat->phone }}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{ $masyarakat->email }}
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" class="text-center text-gray-400">
                                Data Kosong
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </div>

    </div>
</main>
@endsection