@extends('include.master2')
@section('content')

<form action="/login" method="POST">
    @csrf
    <section class="mt-14">
        <div class="max-w-[364px] bg-white rounded-md shadow-md mx-auto px-6 py-4">
            <div class="flex flex-col">
                <h3 class="mx-auto text-4xl font-serif mb-3">Login</h3>
                @if ($message = Session::get('error'))
                <div id="alert-1" class="flex items-center p-4 mb-3 text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400" role="alert">
                    <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                      <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                    </svg>
                    <span class="sr-only">Info</span>
                    <div class="text-sm font-medium ms-3">
                      {{ $message }}
                    </div>
                      <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-blue-50 text-blue-500 rounded-lg focus:ring-2 focus:ring-blue-400 p-1.5 hover:bg-blue-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-blue-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-1" aria-label="Close">
                        <span class="sr-only">Close</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                    </button>
                </div>
                @endif
                <h4 class="mt-3">Email</h4>
                <input type="text" name="email" class="py-1 rounded-md text-slate-700">
                <h4 class="mt-3">Password</h4>
                <input type="password" name="password" class="py-1 rounded-md text-slate-700">
                <button type="submit" class="py-1 mt-4 text-center text-white rounded-full bg-green-500">Login</button>
                <h5 class="mx-auto mt-4 text-xs">Belum punya akun, silahkan daftar <a href="/register" class="text-blue-500">disini.!</a></h5>
            </div>
        </div>
    </section>
</form>

@endsection
