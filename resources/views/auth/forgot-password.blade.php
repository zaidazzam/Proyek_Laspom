<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <img class="w-ful" src="{{ asset('img/Group_56.png')}} " alt="Logo">
            </a>
        </x-slot>

        <div class="mb-4 font-semibold text-black">
            {{ __('Lupa kata sandi Anda? Tidak masalah. ') }}
        </div>
        <div class="mb-2 text-sm text-gray-600">
            {{ __('Cukup beri tahu kami alamat email Anda dan kami akan mengirim email kepada Anda tautan pengaturan ulang kata sandi yang memungkinkan Anda memilih yang baru.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                    autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">

                <x-button
                    class=" bg-red-500 text-white font-bold rounded-md my-3 py-3 px-4 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:bg-blue-500 hover:scale-105 duration-300 ease-in-out">
                    {{ __('Atur Ulang Kata Sandi Email') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>