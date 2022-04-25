  @extends('layouts.masyarakat')

  @section('title')
  Pelaporan
  @endsection
  @section('content')
  <main class="h-full pb-16 overflow-y-auto">
      {{-- @foreach($liat as $li)
 <li>{{ $li->nik }}</li>
      @endforeach --}}
      <div class="container px-6 mx-auto grid">
          <h2 class="my-6 text-2xl font-semibold text-center text-gray-700 dark:text-gray-200">
              Kirim Laporan!
          </h2>


          @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach($errors->all() as $error)
                  <li>{{ $error }} </li>
                  @endforeach
              </ul>
          </div>
          @endif
          <form action="{{ route('pengaduan.store')}} " method="POST" enctype="multipart/form-data">
              @csrf

              <div class="px-4 py-3 mb-8 bg-red-600 rounded-lg shadow-md dark:bg-gray-700">
                  <label class="block text-sm">
                      <span class="text-black dark:text-white">Laporan</span>
                      <textarea
                          class="block w-full mt-1 text-sm dark:text-white dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-red-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                          rows="8" type="text" placeholder="Isi Laporan Anda" value="{{ old('description')}}"
                          name="description"></textarea>
                  </label>

                  <label for="image" class="block mt-4 text-sm">
                      <span class="text-black dark:text-white">Bukti Laporan *berupa foto</span>
                      <input
                          class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                          type="file" value="{{ old('image')}}" name="image" />
                  </label>
                  <button type="submit"
                      class="mt-4 px-4 py-2 text-sm font-medium leading-5 text-black transition-colors duration-150 bg-white border border-transparent rounded-lg active:bg-indigo-800 hover:bg-indigo-800 focus:outline-none focus:shadow-outline-purple">
                      Laporkan
                  </button>


              </div>
          </form>

  </main>

  @endsection