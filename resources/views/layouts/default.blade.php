<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BookWorm</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
</head>
<body class="bg bg-gray-700 text-white">
    <header class="fixed bg-gray-700 top-0 left-0 right-0 z-50">
        <nav>
                <div class="container mx-auto px-4 flex flex-col md:flex-row flex items-center justify-between px-4 py-6">
                    <ul class="flex flex-col md:flex-row items-center">
                        <li>
                            <a href="{{ route('home') }}"><svg class="ml-4 w-12" viewBox="0 0 512.72 512.72" fill="none"><path d="M404.72,82.944c-0.027,0-0.054,0-0.08,0h0h-27.12v-9.28c0.146-3.673-2.23-6.974-5.76-8
                                c-18.828-4.934-38.216-7.408-57.68-7.36c-32,0-75.6,7.2-107.84,40c-32-33.12-75.92-40-107.84-40
                                c-19.464-0.048-38.852,2.426-57.68,7.36c-3.53,1.026-5.906,4.327-5.76,8v9.2H8c-4.418,0-8,3.582-8,8v255.52c0,4.418,3.582,8,8,8
                                c1.374-0.004,2.724-0.362,3.92-1.04c0.8-0.4,80.8-44.16,192.48-16h1.2h0.72c0.638,0.077,1.282,0.077,1.92,0
                                c112-28.4,192,15.28,192.48,16c2.475,1.429,5.525,1.429,8,0c2.46-1.42,3.983-4.039,4-6.88V90.944
                                C412.72,86.526,409.139,82.944,404.72,82.944z M16,333.664V98.944h19.12v200.64c-0.05,4.418,3.491,8.04,7.909,8.09
                                c0.432,0.005,0.864-0.025,1.291-0.09c16.55-2.527,33.259-3.864,50-4c23.19-0.402,46.283,3.086,68.32,10.32
                                C112.875,307.886,62.397,314.688,16,333.664z M94.32,287.664c-14.551,0.033-29.085,0.968-43.52,2.8V79.984
                                c15.576-3.47,31.482-5.241,47.44-5.28c29.92,0,71.2,6.88,99.84,39.2l0.24,199.28C181.68,302.304,149.2,287.664,94.32,287.664z
                                 M214.32,113.904c28.64-32,69.92-39.2,99.84-39.2c15.957,0.047,31.863,1.817,47.44,5.28v210.48
                                c-14.354-1.849-28.808-2.811-43.28-2.88c-54.56,0-87.12,14.64-104,25.52V113.904z M396.64,333.664
                                c-46.496-19.028-97.09-25.831-146.96-19.76c22.141-7.26,45.344-10.749,68.64-10.32c16.846,0.094,33.663,1.404,50.32,3.92
                                c4.368,0.663,8.447-2.341,9.11-6.709c0.065-0.427,0.095-0.859,0.09-1.291V98.944h19.12L396.64,333.664z" fill="#fff"/></svg></a>
                        </li>
                        <li class="mb-1.5">
                            <a href="{{ route('home') }}" class="text-2xl mx-2 text-white hover:text-pink-500 transition {{ (Request::is('/') ? 'text-pink-500' : '') }}">BookWorm</a>
                        </li>
                        <li class="md:ml-16 mt-3 md:mt-0">
                            <a href="{{ route('book') }}" class="text-lg mx-2 text-white hover:text-pink-500 transition {{ (Request::is('/book') ? 'text-pink-500' : '') }}">Books</a>
                        </li>
                        <li class="md:ml-6 mt-3 md:mt-0">
                            <a href="{{ route('home') }}" class="text-lg mx-2 text-white hover:text-pink-500 transition {{ (Request::is('/best') ? 'text-pink-500' : '') }}">Bestsellers</a>
                        </li>
                        <li class="md:ml-6 mt-3 md:mt-0">
                            <a href="{{ route('home') }}" class="text-lg mx-2 text-white hover:text-pink-500 transition {{ (Request::is('/authors') ? 'text-pink-500' : '') }}">Authors</a>
                        </li>
                    </ul>
                    <div class="flex flex-col md:flex-row item-center">
                        <div class="relative mt-3 md:mt-0">
                            <input type="text" class="bg-gray-800 rounded-full w64 px-4 pl-8 py-1 focus:outline-none focus:shadow-outline" placeholder="Search">
                            <div class="absolute top-0">
                                <svg class="fill-current w-4 text-gray-500 mt-2 ml-2" viewBox="0 0 24 24"><path class="heroicon-ui" d="M16.32 14.9l5.39 5.4a1 1 0 01-1.42 1.4l-5.38-5.38a8 8 0 111.41-1.41zM10 16a6 6 0 100-12 6 6 0 000 12z"/></svg>
                            </div>
                        </div>
                        <div class="md:ml-4 mt-3 md:mt-0">
                            <a href="#">
                                <img class="rounded-full w-8 h-8" src="/img/user.png" fill="#fff" alt="avatar">
                            </a>
                        </div>
                    </div>

                </div>
            </nav>
        </div>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <div class="container mx-auto p-4">
            <p>&copy; BookWorm | Internet Book Library </p>
        </div>
    </footer>
</body>
</html>