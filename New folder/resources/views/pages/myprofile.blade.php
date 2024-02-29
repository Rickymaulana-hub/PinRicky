@extends('include.master')
@push('cssjsexternal')
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
@endpush
@section('content')

    <section class="mt-32">
        @csrf
        <div class="items-center max-w-screen-md mx-auto ">
            <h3 class="text-5xl text-center font-hurricane">Profile</h3>
        </div>
    </section>
    <section>
        <div>
        </div>
        <div class="flex flex-col items-center max-w-screen-md px-2 mx-auto mt-4">
            <div>
                <img src="/assets/img-08.jpg" alt="" class="w-24 h-24 rounded-full" id="fotoprofile">
            </div>

                <h3 class="text-xl font-semibold" id="nama"></h3>

            <a href="/ubahprofile">
                <p class="px-3 py-0 bg-blue-400 rounded-md mt-2 text-white">
                    Edit Profile
                </p>
            </a>
        </div>
    </section>
    <section class="mt-10">
        <div class="max-w-screen-md mx-auto">
            <div class="flex flex-wrap items-center flex-container" id="dataprofile">

            </div>
        </div>
    </section>

@endsection
@push('footerjsexternal')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="/javascript/profile.js"></script>
@endpush

