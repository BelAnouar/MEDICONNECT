<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    {{$doctors}}
    <div
        class="z-[2] w-full my-auto mx-0 h-16 md:px-[90px] px-8 py-16 flex items-center justify-between bg-[#141b2b]  top-[20px]">
        <span class="text-white text-[28px] font-semibold">Logo.</span>
        <div class="items-center hidden md:flex gap-7">
            <a href="/">
                <span class="font-medium text-blue-400 ">
                    home
                </span>
            </a>
            <a href="/rend">
                <span class="font-medium text-blue-400 ">
                    Rende
                </span>
            </a>
            <button
                class="px-6 py-3 font-semibold text-gray-900 bg-blue-400 rounded-full hover:bg-gray-700 hover:text-white">
                Book Now
            </button>
        </div>
        <div class="block cursor-pointer md:hidden">

        </div>
    </div>

    <section class="_img_cover">
        <div
            class="z-[2] absolute left-[15%]  mt-[20%] px-[30px]  py-6 max-w-[1170px] px-auto flex flex-col lg:flex-row justify-between gap-4 lg:gap-x-3 items-center  lg:-top-4 lg:shadow-lg bg-white lg:bg-transparent lg:backdrop-blur rounded-lg">

            <div>
                <label for=""></label>
                <select class="w-full max-w-xs bg-transparent border border-none ">
                    <option disabled selected>Pick your favorite Simpson</option>
                    <option>Homer</option>
                    <option>Marge</option>
                    <option>Bart</option>
                    <option>Lisa</option>
                    <option>Maggie</option>
                </select>
            </div>
            <div>
                <label for=""></label>
                <select class="w-full max-w-xs bg-transparent border border-none ">
                    <option disabled selected>Pick your favorite Simpson</option>
                    <option>Homer</option>
                    <option>Marge</option>
                    <option>Bart</option>
                    <option>Lisa</option>
                    <option>Maggie</option>
                </select>
            </div>
            <div>
                <label for=""></label>
                <select class="w-full max-w-xs bg-transparent border border-none">
                    <option disabled selected>Pick your favorite Simpson</option>
                    <option>Homer</option>
                    <option>Marge</option>
                    <option>Bart</option>
                    <option>Lisa</option>
                    <option>Maggie</option>
                </select>
            </div>
            <button
                class=" bg-violet-700  hover:bg-violet-800 transition w-full lg:max-w-[162px] h-16 rounded-lg flex justify-center items-center text-white">
                serch
            </button>
        </div>
    </section>


    <section class="container p-6">

        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 ">
            <div class="bg-white border shadow-2xl rounded-3xl">
                <div class="flex items-center justify-between p-4">
                    <p
                        class="flex items-center gap-1.5 font-sans text-base font-normal leading-relaxed text-blue-gray-900 antialiased">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="-mt-0.5 h-5 w-5 text-yellow-700">
                            <path fill-rule="evenodd"
                                d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                clip-rule="evenodd"></path>
                        </svg>
                        5.0
                    </p>
                    <form action="{{ route('favorite.store') }}" method="post">
                        @csrf
                        <input type="hidden" value="1" name="docter_id">
                        <button type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                            </svg>

                        </button>
                    </form>

                </div>
                {{-- <div class="flex items-center mb-4">
                <div class="flex-shrink-0"> <img class="w-12 h-12" src="heart-icon.png" alt="Heart icon"> </div>
                <div class="ml-4">
                    <h2 class="text-lg font-medium leading-7 text-gray-900">HEALTHEX</h2>
                    <p class="text-base text-gray-600">Laura Reynolds</p>
                    <p class="text-base text-gray-600">Patient Dashboard</p>
                </div>
               </div> --}}
                <div class="text-center ">
                    <div class="relative inline-flex">
                        <img alt="Tania Andrew"
                            src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1480&amp;q=80"
                            class=" block h-[50%] w-[50%] !rounded-full border-4 border-slate-300/45 object-cover object-center mx-auto" />
                        <span
                            class="absolute min-w-[12px] min-h-[12px] rounded-full py-1 px-1 text-xs font-medium content-[''] leading-none grid place-items-center top-[18%] right-[32%] translate-x-2/4 -translate-y-2/4 bg-green-500 text-white">
                        </span>
                    </div>
                    <h2 class="text-lg font-medium leading-7 text-gray-900">HEALTHEX</h2>
                   
                    <p class="text-base text-gray-600">Patient Dashboard</p>
                </div>
                <div class="flex justify-around p-2 border-t border-black ">

                    <div>
                        <form action="{{ route('appointment.store') }}" method="post">
                            @csrf
                            <input type="hidden" value="1" name="docter_id">
                            <button>comment</button>
                        </form>
                    </div>
                    <div>

                        <form action="{{ route('appointment.store') }}" method="post">
                            @csrf
                            <input type="hidden" value="1" name="docter_id">
                            <button>render vous</button>
                        </form>
                    </div>
                </div>

            </div>
            <div class="p-4 bg-white rounded-lg shadow-lg ">
                <div class="flex items-center mb-4">
                    <div class="flex-shrink-0"> <img class="w-12 h-12" src="heart-icon.png" alt="Heart icon"> </div>
                    <div class="ml-4">
                        <h2 class="text-lg font-medium leading-7 text-gray-900">HEALTHEX</h2>
                        <p class="text-base text-gray-600">Laura Reynolds</p>
                        <p class="text-base text-gray-600">Patient Dashboard</p>
                    </div>
                </div>

                <form action="{{ route('appointment.store') }}" method="post">
                    @csrf
                    <input type="hidden" value="1" name="docter_id">
                    <button>ender vous</button>
                </form>
            </div>
        </div>
    </section>
</body>

</html>
