@extends('layouts.masyarakat')

@section('title')
Data Pelaporan
@endsection
@section('content')
<main class="h-full pb-16 overflow-y-auto">
    <div class="container grid px-6 mx-auto">
        <h2 class="my-6 text-2xl font-semibold text-black dark:text-white">
            Data Pelaporan
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
                            class="text-xs font-semibold tracking-wide text-left text-black uppercase border-b dark:border-white bg-red-600 dark:text-white dark:bg-gray-700">
                            <th class="px-4 py-3">Foto</th>
                            <th class="px-4 py-3">Tanggal</th>
                            <th class="px-4 py-3">Status</th>
                            <th class="px-4 py-3">Rincian</th>
                        </tr>
                    </thead>
                    <tbody class="bg-red-600 divide-y dark:divide-gray-800 dark:bg-gray-700">
                        @forelse ($items as $item)
                        <tr class="text-black dark:text-white">
                            <td class="px-4 py-3">
                                <div class="flex items-center text-sm">
                                    <!-- Avatar with inset shadow -->
                                    <div class="relative hidden mr-3  md:block">
                                        <img class=" h-32 w-35 " src="{{asset('storage/'.$item->image) }}" alt=""
                                            loading="lazy" />
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{ $item->created_at->format('l, d F Y - H:i:s') }}
                            </td>
                            @if($item->status =='Belum di Proses')
                            <td class="px-4 py-3 text-xs">
                                <span
                                    class="px-2 py-1 font-semibold leading-tight text-black  bg-red-100 rounded-md dark:text-red-100 dark:bg-red-700">
                                    {{ $item->status }}
                                </span>
                            </td>
                            @elseif ($item->status =='Sedang di Proses')
                            <td class="px-4 py-3 text-xs">
                                <span
                                    class="px-2 py-1 font-semibold leading-tight text-orange-700 bg-orange-100 rounded-md dark:text-white dark:bg-orange-600">
                                    {{ $item->status }}
                                </span>
                            </td>
                            @else
                            <td class="px-4 py-3 text-xs">
                                <span
                                    class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-md dark:bg-green-700 dark:text-green-100">
                                    {{ $item->status }}
                                </span>
                            </td>

                            @endif
                            <td>
                                <a href="{{ route('pengaduan.show', $item->id)}} "
                                    class="flex items-center justify-between  text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                    aria-label="Detail">

                                    <svg class="w-5 h-5" aria-hidden="true" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                </a>
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