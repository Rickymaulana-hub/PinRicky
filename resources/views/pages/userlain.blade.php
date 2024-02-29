@extends('include.master')
@push('cssjsexternal')
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
@endpush
@section('content')

    <section class="mt-32">
        <div class="items-center max-w-screen-md mx-auto ">
            <h3 class="text-5xl text-center font-hurricane">Gallery</h3>
        </div>
    </section>
    <section>
        @csrf
        <div class="flex flex-col items-center max-w-screen-md px-2 mx-auto mt-4">
            <div>
                <img src="/assets/img-07.jpg" alt="" class="w-24 h-24 rounded-full" id="imageUser">
            </div>
            <h3 class="text-xl font-semibold" id="namaUser">
                Why
            </h3>
        </div>
    </section>
    <section class="mt-10">
        <div class="max-w-screen-md mx-auto">
            <div class="flex flex-wrap items-center flex-container" id="exploredata">

            </div>
        </div>
    </section>

@endsection
@push('footerjsexternal')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="/javascript/otherpin.js"></script>
@endpush
