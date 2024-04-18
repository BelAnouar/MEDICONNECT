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

    <div
        class="z-[2] w-full my-auto mx-0 h-16 md:px-[90px] px-8 py-16 flex items-center justify-between bg-[#141b2b]  top-[20px]">
        <span class="text-white text-[28px] font-semibold">MediConnect</span>
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
            <div x-data="{ open: false }" class="z-20 flex items-center justify-center shadow">
                <div @click="open = !open" class="relative py-3 border-b-4 border-transparent" :class="{'border-indigo-700 transform transition duration-300 ': open}" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100">
                  <div class="flex items-center justify-center space-x-3 cursor-pointer">
                    <div class="w-12 h-12 overflow-hidden border-2 border-gray-900 rounded-full dark:border-white">
                      <img src="https://images.unsplash.com/photo-1610397095767-84a5b4736cbd?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" alt="" class="object-cover w-full h-full">
                    </div>
                  
                  </div>
                  <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute z-20 px-5 py-3 mt-5 bg-white border rounded-lg shadow w-60 dark:bg-gray-800 dark:border-transparent">
                    <ul class="space-y-3 dark:text-white">
                      <li class="font-medium">
                        <a href="/profile" class="flex items-center transition-colors duration-200 transform border-r-4 border-transparent hover:border-indigo-700">
                          <div class="mr-3">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                          </div>
                          Account
                        </a>
                      </li>
                     
                      <hr class="dark:border-gray-700">
                      <li class="font-medium">
                        <form action="/logout" method="post">
                            @csrf
                        <button type="submit" class="flex items-center transition-colors duration-200 transform border-r-4 border-transparent hover:border-red-600">
                          <div class="mr-3 text-red-600">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                          </div>
                          Logout
                        </button></form>
                      </li>
                    </ul>
                  </div>
                </div>
            </div>
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

            @foreach ($doctors as $doctor)


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
                          {{ number_format( $doctor->comments_avg_rating,1)}}
                        </p>
                        <form action="{{ route('favorite.store') }}" method="post">
                            @csrf
                            <input type="hidden" value="{{ $doctor->id }}" name="docter_id">
                            
                                @forelse ($doctor->favorites as $favorite)

                                    <button type="submit">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            fill="{{ $favorite->user_id === Auth::user()->id ? 'red' : 'none' }}"
                                            viewBox="0 0 24 24" stroke-width="1.5"
                                            stroke="{{ $favorite->user_id === Auth::user()->id ? 'red' : 'currentColor' }}"
                                            class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                                        </svg>

                                     </button>
                                    @empty
                                        <button type="submit">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill=" none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                                            </svg>

                                        </button>
                                    @endforelse

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
                                <img alt="Tania Andrew" src='{{ url("storage/{$doctor->user->avatar}") }}'
                                    class=" block h-[80%] w-[40%] !rounded-full border-4 border-slate-300/45 fit object-cover object-center mx-auto z-10" />
                                <span
                                    class="absolute min-w-[12px] min-h-[12px] rounded-full py-1 px-1 text-xs font-medium content-[''] leading-none grid place-items-center top-[18%] right-[32%] translate-x-2/4 -translate-y-2/4 bg-green-500 text-white">
                                </span>
                            </div>
                            <h2 class="text-lg font-medium leading-7 text-gray-900">{{ $doctor->specialitie->Name }}</h2>

                            <p class="text-base text-gray-600">{{ $doctor->user->name }}</p>
                        </div>


                        <livewire:showappointement :doctorId="$doctor->id" />

                    </div>
                @endforeach
                {{-- <div class="p-4 bg-white rounded-lg shadow-lg ">
                <div class="flex items-center mb-4">
                    <div class="flex-shrink-0"> <img class="w-12 h-12" src="heart-icon.png" alt="Heart icon"> </div>
                    <div class="ml-4">
                        <h2 class="text-lg font-medium leading-7 text-gray-900">{{$doctor->specialitie->Name}}</h2>
                        <p class="text-base text-gray-600">{{$doctor}}</p>
                        <p class="text-base text-gray-600">Patient Dashboard</p>
                    </div>
                </div>

                <form action="{{ route('appointment.store') }}" method="post">
                    @csrf
                    <input type="hidden" value="1" name="docter_id">
                    <button>ender vous</button>
                </form>
            </div> --}}
            </div>
        </section>
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
        <script>
            function handleStarClick(starr) {
                var stars = document.querySelectorAll('.starr');
                var clickedIndex = Array.from(stars).indexOf(starr);

                // Loop through stars
                for (var i = 0; i <= clickedIndex; i++) {
                    stars[i].classList.add('selected');
                }
            }
        </script>


<footer class="relative px-4 py-12 text-white bg-gray-900 sm:px-8 lg:px-16 xl:px-40 2xl:px-64 lg:py-24">
    <div class="flex flex-col md:flex-row">
      <div class="w-full lg:w-2/6 lg:mx-4 lg:pr-8">
        <h3 class="text-2xl font-bold">MediConnect</h3>
        <p class="text-gray-400">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy.</p>

        <form class="flex items-center mt-6">
          <div class="w-full">
            <label class="block mb-2 text-xs font-bold tracking-wide text-gray-600 uppercase" for="grid-last-name">
              Subscribe for our Newsletter
            </label>
            <div class="relative">
              <input
                class="block w-full px-4 py-4 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                type="email" placeholder="Enter Your Email Address">

              <button type="submit"
                class="absolute top-0 right-0 px-4 py-2 my-2 mr-2 text-sm font-bold text-white bg-teal-500 rounded hover:bg-teal-400">Subscribe</button>
            </div>
          </div>
        </form>
      </div>

      <div class="w-full mt-8 lg:w-1/6 lg:mt-0 lg:mx-4">
        <h5 class="font-semibold tracking-wider text-gray-500 uppercase">Treatments</h5>
        <ul class="mt-4">
          <li class="mt-2"><a href="#" title="" class="opacity-75 hover:opacity-100">General Dentistry</a></li>
          <li class="mt-2"><a href="#" title="" class="opacity-75 hover:opacity-100">Cosmetic Dentistry</a></li>
          <li class="mt-2"><a href="#" title="" class="opacity-75 hover:opacity-100">Oral Health</a></li>
        </ul>
      </div>

      <div class="w-full mt-8 lg:w-2/6 lg:mt-0 lg:mx-4 lg:pr-8">
        <h5 class="font-semibold tracking-wider text-gray-500 uppercase">Contact Details</h5>
        <ul class="mt-4">
          <li>
            <a href="#" title="" class="flex items-center block opacity-75 hover:opacity-100">
              <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                  class="fill-current">
                  <path
                    d="M12,2C7.589,2,4,5.589,4,9.995C3.971,16.44,11.696,21.784,12,22c0,0,8.029-5.56,8-12C20,5.589,16.411,2,12,2z M12,14 c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S14.21,14,12,14z" />
                </svg>
              </span>
              <span class="ml-3">
                1985 Kerry Way, Whittier, CA, USA
              </span>
            </a>
          </li>
          <li class="mt-4">
            <a href="#" title="" class="flex items-center block opacity-75 hover:opacity-100">
              <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                  class="fill-current">
                  <path
                    d="M12,2C6.486,2,2,6.486,2,12s4.486,10,10,10c5.514,0,10-4.486,10-10S17.514,2,12,2z M12,20c-4.411,0-8-3.589-8-8 s3.589-8,8-8s8,3.589,8,8S16.411,20,12,20z" />
                  <path d="M13 7L11 7 11 13 17 13 17 11 13 11z" /></svg>
              </span>
              <span class="ml-3">
                Mon - Fri: 9:00 - 19:00<br>
                Closed on Weekends
              </span>
            </a>
          </li>
          <li class="mt-4">
            <a href="#" title="" class="flex items-center block opacity-75 hover:opacity-100">
              <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                  class="fill-current">
                  <path
                    d="M14.594,13.994l-1.66,1.66c-0.577-0.109-1.734-0.471-2.926-1.66c-1.193-1.193-1.553-2.354-1.661-2.926l1.661-1.66 l0.701-0.701L5.295,3.293L4.594,3.994l-1,1C3.42,5.168,3.316,5.398,3.303,5.643c-0.015,0.25-0.302,6.172,4.291,10.766 C11.6,20.414,16.618,20.707,18,20.707c0.202,0,0.326-0.006,0.358-0.008c0.245-0.014,0.476-0.117,0.649-0.291l1-1l0.697-0.697 l-5.414-5.414L14.594,13.994z" />
                </svg>
              </span>
              <span class="ml-3">
                +1 562-789-1935
              </span>
            </a>
          </li>
          <li class="mt-4">
            <a href="#" title="" class="flex items-center block opacity-75 hover:opacity-100">
              <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                  class="fill-current">
                  <path
                    d="M20,4H4C2.896,4,2,4.896,2,6v12c0,1.104,0.896,2,2,2h16c1.104,0,2-0.896,2-2V6C22,4.896,21.104,4,20,4z M20,8.7l-8,5.334 L4,8.7V6.297l8,5.333l8-5.333V8.7z" />
                </svg>
              </span>
              <span class="ml-3">
                MediConnect@example.com
              </span>
            </a>
          </li>
        </ul>
      </div>

      <div class="w-full mt-8 lg:w-1/6 lg:mt-0 lg:mx-4">
        <h5 class="font-semibold tracking-wider text-gray-500 uppercase">We're Social</h5>
        <ul class="flex mt-4">
          <li>
            <a href="#" target="_blank" title="">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                <path
                  d="M20,3H4C3.447,3,3,3.448,3,4v16c0,0.552,0.447,1,1,1h8.615v-6.96h-2.338v-2.725h2.338v-2c0-2.325,1.42-3.592,3.5-3.592	c0.699-0.002,1.399,0.034,2.095,0.107v2.42h-1.435c-1.128,0-1.348,0.538-1.348,1.325v1.735h2.697l-0.35,2.725h-2.348V21H20	c0.553,0,1-0.448,1-1V4C21,3.448,20.553,3,20,3z" />
              </svg>
            </a>
          </li>

          <li class="ml-6">
            <a href="#" target="_blank" title="">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                <path
                  d="M19.633,7.997c0.013,0.175,0.013,0.349,0.013,0.523c0,5.325-4.053,11.461-11.46,11.461c-2.282,0-4.402-0.661-6.186-1.809	c0.324,0.037,0.636,0.05,0.973,0.05c1.883,0,3.616-0.636,5.001-1.721c-1.771-0.037-3.255-1.197-3.767-2.793	c0.249,0.037,0.499,0.062,0.761,0.062c0.361,0,0.724-0.05,1.061-0.137c-1.847-0.374-3.23-1.995-3.23-3.953v-0.05	c0.537,0.299,1.16,0.486,1.82,0.511C3.534,9.419,2.823,8.184,2.823,6.787c0-0.748,0.199-1.434,0.548-2.032	c1.983,2.443,4.964,4.04,8.306,4.215c-0.062-0.3-0.1-0.611-0.1-0.923c0-2.22,1.796-4.028,4.028-4.028	c1.16,0,2.207,0.486,2.943,1.272c0.91-0.175,1.782-0.512,2.556-0.973c-0.299,0.935-0.936,1.721-1.771,2.22	c0.811-0.088,1.597-0.312,2.319-0.624C21.104,6.712,20.419,7.423,19.633,7.997z" />
              </svg>
            </a>
          </li>

          <li class="ml-6">
            <a href="#" target="_blank" title="">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                <path
                  d="M20.947,8.305c-0.011-0.757-0.151-1.508-0.419-2.216c-0.469-1.209-1.424-2.165-2.633-2.633 c-0.699-0.263-1.438-0.404-2.186-0.42C14.747,2.993,14.442,2.981,12,2.981s-2.755,0-3.71,0.055 c-0.747,0.016-1.486,0.157-2.185,0.42C4.896,3.924,3.94,4.88,3.472,6.089C3.209,6.788,3.067,7.527,3.053,8.274 c-0.043,0.963-0.056,1.268-0.056,3.71s0,2.754,0.056,3.71c0.015,0.748,0.156,1.486,0.419,2.187 c0.469,1.208,1.424,2.164,2.634,2.632c0.696,0.272,1.435,0.426,2.185,0.45c0.963,0.043,1.268,0.056,3.71,0.056s2.755,0,3.71-0.056 c0.747-0.015,1.486-0.156,2.186-0.419c1.209-0.469,2.164-1.425,2.633-2.633c0.263-0.7,0.404-1.438,0.419-2.187 c0.043-0.962,0.056-1.267,0.056-3.71C21.003,9.572,21.003,9.262,20.947,8.305z M11.994,16.602c-2.554,0-4.623-2.069-4.623-4.623 s2.069-4.623,4.623-4.623c2.552,0,4.623,2.069,4.623,4.623S14.546,16.602,11.994,16.602z M16.801,8.263 c-0.597,0-1.078-0.482-1.078-1.078s0.481-1.078,1.078-1.078c0.595,0,1.077,0.482,1.077,1.078S17.396,8.263,16.801,8.263z" />
                <circle cx="11.994" cy="11.979" r="3.003" /></svg>
            </a>
          </li>

          <li class="ml-6">
            <a href="#" target="_blank" title="">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                <path
                  d="M21.593,7.203c-0.23-0.858-0.905-1.535-1.762-1.766C18.265,5.007,12,5,12,5S5.736,4.993,4.169,5.404	c-0.84,0.229-1.534,0.921-1.766,1.778c-0.413,1.566-0.417,4.814-0.417,4.814s-0.004,3.264,0.406,4.814	c0.23,0.857,0.905,1.534,1.763,1.765c1.582,0.43,7.83,0.437,7.83,0.437s6.265,0.007,7.831-0.403c0.856-0.23,1.534-0.906,1.767-1.763	C21.997,15.281,22,12.034,22,12.034S22.02,8.769,21.593,7.203z M9.996,15.005l0.005-6l5.207,3.005L9.996,15.005z" />
              </svg>
            </a>
          </li>
        </ul>

        <p class="mt-12 text-sm text-gray-400">© 2018 ProDentists. <br class="hidden lg:block">All Rights Reserved.
        </p>
      </div>
    </div>
  </footer>

  
  @livewireScripts
    </body>

    </html>
