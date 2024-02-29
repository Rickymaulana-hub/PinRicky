@extends('include.master')
@section('content')


    <section class="mt-32">
        <div class="items-center max-w-screen-md mx-auto ">
            <h3 class="text-5xl text-center font-hurricane">Ubah Password</h3>
        </div>
    </section>
    @if ($message = Session::get('success'))
        <div class="flex justify-center mt-4">
            <div id="toast-undo" class="flex items-center justify-center w-full max-w-xs p-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
                <div class="text-sm font-normal text-blue-600">
                {{ $message }}
                </div>
                <div class="flex items-center ms-auto space-x-2 rtl:space-x-reverse">
                    <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-undo" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    </button>
                </div>
            </div>
        </div>
    @endif
    @if ($message = Session::get('error'))
        <div class="flex justify-center mt-4">
            <div id="toast-undo" class="flex items-center justify-center w-full max-w-xs p-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
                <div class="text-sm font-normal text-red-500">
                {{ $message }}
                </div>
                <div class="flex items-center ms-auto space-x-2 rtl:space-x-reverse">
                    <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-undo" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    </button>
                </div>
            </div>
        </div>
    @endif

    <form action="/update-password" method="POST">
        @csrf
    <section class="w-96 mx-auto ">
            <div class="w-full">
                <div class="bg-white rounded-md shadow-md ">
                    <div class="flex flex-col px-8 py-4 ">
                        <h5>Password Lama</h5>
                        <input type="password" name="password_lama" class="py-1 rounded-md">
                        @error('password_lama')
                            <small class="italic text-red-800">{{ $message }}</small>
                        @enderror
                        <h5>Password Baru</h5>
                        <input type="password" name="password_baru" class="py-1 rounded-md">
                        @error('password_baru')
                            <small class="italic text-red-800">{{ $message }}</small>
                        @enderror
                        <h5>Konfirmasi Password</h5>
                        <input type="password" name="confirm_password" class="py-1 rounded-md">
                        @error('confirm_password')
                            <small class="italic text-red-800">{{ $message }}</small>
                        @enderror
                        <button type="submit" class="py-2 mt-4 text-white rounded-md bg-green-500">Perbaharui</button>
                    </div>
                </div>
            </div>
    </section>
</form>
    @endsection
