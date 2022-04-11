<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie App</title>
    <link rel="stylesheet" href="/css/main.css">
    @livewireStyles
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="font-sans bg-gray-900 text-white">
    <nav class="border-b border-gray-800">
        <div class="container mx-auto flex flex-col md:flex-row items-center justify-between px-4 py-6">
            <ul class="flex flex-col md:flex-row items-center  ">

                <li class="flex flex-row">
                    <a href="{{ route('movies.index') }}">

                        <h1 class="text-white w-32 font-bold text-lg">MovieApp</h1>
                    </a>
                </li>
                <li class="md:ml-16  mt-3 md:mt-0">
                    <a href="{{ route('movies.index') }}" class="hover:text-gray-300">Movies</a>
                </li>
                <li class="md:ml-6  mt-3 md:mt-0">
                    <a href="{{ route('tv.index') }}" class="hover:text-gray-300">TV Shows</a>
                </li>
                <li class="md:ml-6  mt-3 md:mt-0">
                    <a href="{{ route('actors.index') }}" class="hover:text-gray-300">Actors</a>
                </li>


            </ul>
            <div class="flex flex-col md:flex-row items-center ml-15">
                <livewire:search-dropdown>
            </div>
            <div class="md:ml-4 mt-3 md:mt-0 ">
                <a href="#">
                    <img src="https://avatars.githubusercontent.com/u/54955004?s=400&u=fb73d02b2a89e32144a49497d1944ceb3c8e1353&v=4"
                        alt="avatar" class="rounded-full w-8 h-8">
                </a>

            </div>


        </div>
    </nav>
    @yield('content')
    @livewireScripts

</body>

</html>
