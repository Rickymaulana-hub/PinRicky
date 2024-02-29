<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('css/build.css')}}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hurricane&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css"  rel="stylesheet" />
    <style>
        @media(max-width:768px) {
            .flex-container {
                flex-direction: column;
            }

            .fulwidth {
                width: 100%;
            }

            .fulheight {
                height: 100%;
            }
        }
    </style>
    @stack('cssjsexternal')
    <title>Gallery</title>
</head>

<body>


    <nav class="fixed top-0 z-20 w-full bg-gray-100 shadow-md">
        <div class="flex flex-wrap items-center justify-center max-w-screen-xl p-4 mx-auto">
            <a href="/explore" class="mr-4">EXPLORE</a>
            <a href="/upload" class="mr-4">UPLOAD</a>
            <form action="/explore" method="GET">
                <input type="text" class="px-4 py-1 rounded-full mr-4" placeholder="Search ..." name="cari">
            </form>
            <div class="flex items-center space-x-1 md:order-2 md:space-x-0 rtl:space-x-reverse">

                <img src="{{asset('/assets/'.$user->picture)}}" alt="" class="w-10 h-10 rounded-full" data-dropdown-toggle="user-dropdown-menu" id="myfoto">
                <!-- Drop Down -->
                <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow "
                    id="user-dropdown-menu">
                    <ul class="py-2" role="none">
                        <li>
                            <a href="/profile"
                                class="px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                role="menuitem" >
                                <div class="inline-flex items-center">
                                    Profile
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="/album"
                                class="px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                role="menuitem">
                                <div class="inline-flex items-center">
                                    Album
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="/ubahpassword"
                                class="px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                role="menuitem">
                                <div class="inline-flex items-center">
                                    Ubah Password
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="/logout"
                                class="px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                role="menuitem">
                                <div class="inline-flex items-center">
                                    Log Out
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- End Navigation -->
            </div>
        </div>
    </nav>
    @yield('content')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>

</body>
@stack('footerjsexternal')
</html>

