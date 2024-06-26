<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://rsms.me/">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

    <!-- Scripts -->
    @yield('script')
</head>
<style>
    :root {
        font-family: 'Inter', sans-serif;
    }

    @supports (font-variation-settings: normal) {
        :root {
            font-family: 'Inter var', sans-serif;
        }
    }
</style>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">

        @if (isset($header))
            <header class="bg-white shadow">
                <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif


        <main>
            <div class="relative w-full min-h-screen py-4 antialiased bg-black text-slate-300">
                <div class="grid grid-cols-12 gap-2 px-2 mx-auto my-10 sm:gap-4 md:gap-6 lg:gap-10 xl:gap-14 max-w-7xl">
                    <div id="menu" class="col-span-3 p-4 rounded-lg bg-white/10 ">
                        <h1
                            class="text-lg font-bold text-transparent lg:text-3xl bg-gradient-to-br from-white via-white/50 to-transparent bg-clip-text">
                            Dashboard</h1>

                        <a href="#"
                            class="flex flex-col items-center w-full px-2 py-3 mb-5 space-y-2 transition duration-150 ease-linear rounded-lg md:space-y-0 md:flex-row md:space-x-2 hover:bg-white/10 group">
                            <div>
                                <img class="relative object-cover w-10 h-10 rounded-full"
                                    src="https://img.freepik.com/free-photo/no-problem-concept-bearded-man-makes-okay-gesture-has-everything-control-all-fine-gesture-wears-spectacles-jumper-poses-against-pink-wall-says-i-got-this-guarantees-something_273609-42817.jpg?w=1800&t=st=1669749937~exp=1669750537~hmac=4c5ab249387d44d91df18065e1e33956daab805bee4638c7fdbf83c73d62f125"
                                    alt="">
                            </div>
                            <div>
                                <p class="font-medium leading-4 group-hover:text-indigo-400">{{ Auth::user()->name }}
                                </p>
                                <span class="text-xs text-slate-400">Pantazi LLC</span>
                            </div>
                        </a>
                        <hr class="my-2 border-slate-700">
                        <div id="menu" class="flex flex-col my-5 space-y-2">
                            @can('manage_admin')
                                <a href="/dashboard"
                                    class="px-2 py-3 transition duration-150 ease-linear rounded-lg hover:bg-white/10 group">
                                    <div class="flex flex-col items-center space-x-2 space-y-2 md:flex-row md:space-y-0">
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor"
                                                class="w-6 h-6 group-hover:text-indigo-400">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                                            </svg>

                                        </div>
                                        <div>
                                            <p
                                                class="text-base font-bold leading-4 lg:text-lg text-slate-200 group-hover:text-indigo-400">
                                                Dashboard</p>
                                            <p class="hidden text-sm text-slate-400 md:block">Data overview</p>
                                        </div>

                                    </div>
                                </a>



                                <a href="/speciality"
                                    class="px-2 py-3 transition duration-150 ease-linear rounded-lg hover:bg-white/10 group">
                                    <div class="flex flex-col items-center space-x-2 space-y-2 md:flex-row md:space-y-0">
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor"
                                                class="w-6 h-6 group-hover:text-indigo-400">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            </svg>

                                        </div>
                                        <div>
                                            <p
                                                class="text-base font-bold leading-4 lg:text-lg text-slate-200 group-hover:text-indigo-400">
                                                Settings</p>
                                            <p class="hidden text-sm text-slate-400 md:block">Edit settings</p>
                                        </div>

                                    </div>
                                </a>
                            @endcan


                            <a href="/medicine"
                                class="px-2 py-3 transition duration-150 ease-linear rounded-lg hover:bg-white/10 group">
                                <div class="flex flex-col items-center space-x-2 space-y-2 md:flex-row md:space-y-0">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor"
                                            class="w-6 h-6 group-hover:text-indigo-400">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <p
                                            class="text-base font-bold leading-4 lg:text-lg text-slate-200 group-hover:text-indigo-400">
                                            Users</p>
                                        <p class="hidden text-sm text-slate-400 md:block">Manage users</p>
                                    </div>

                                </div>
                            </a>
                            @can('manage_doctor')
                                <a href="/patient"
                                    class="px-2 py-3 transition duration-150 ease-linear rounded-lg hover:bg-white/10 group">
                                    <div class="flex flex-col items-center space-x-2 space-y-2 md:flex-row md:space-y-0">
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor"
                                                class="w-6 h-6 group-hover:text-indigo-400">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                                            </svg>
                                        </div>
                                        <div>
                                            <p
                                                class="text-base font-bold leading-4 lg:text-lg text-slate-200 group-hover:text-indigo-400">
                                                Patient</p>
                                            <p class="hidden text-sm text-slate-400 md:block">Manage users</p>
                                        </div>

                                    </div>
                                </a>
                            @endcan
                        </div>

                        {{-- <x-dropdown-link :href="route('profile.edit')">
                                {{ __('Profile') }}
                            </x-dropdown-link> --}}

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>

                        <p class="text-sm text-center text-gray-600">v2.0.0.3 | &copy; 2022 Pantazi Soft</p>
                    </div>
                    @yield('content')
                </div>
            </div>
        </main>
    </div>
</body>

</html>
