<x-app-layout>

    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Favorite') }}
        </h2>
    </x-slot>
    <main class="profile-page">
        <section class="relative block h-[20vh]">
            <div class="absolute top-0 w-full h-full bg-center bg-cover"
                style="
                  background-image: url('https://images.unsplash.com/photo-1499336315816-097655dcfbda?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=2710&amp;q=80');
                ">
                <span id="blackOverlay" class="absolute w-full h-full bg-black opacity-50"></span>
            </div>
            <div class="absolute bottom-0 left-0 right-0 top-auto w-full overflow-hidden pointer-events-none h-70-px"
                style="transform: translateZ(0px)">
                <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg"
                    preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                    <polygon class="fill-current text-blueGray-200" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
        </section>

        <div class="container px-4 mx-auto pt-11">
            <div class="relative flex flex-col w-full min-w-0 mb-6 -mt-64 break-words bg-white rounded-lg shadow-xl">
                <div class="px-6">
                    <div class="flex flex-wrap justify-center">
                        <div class="flex justify-center w-full px-4 lg:w-3/12 lg:order-2">
                            <div class="relative">
                                <img alt="..."
                                    src="https://demos.creative-tim.com/notus-js/assets/img/team-2-800x800.jpg"
                                    class="absolute h-auto mt-24 -ml-20 align-middle border-none rounded-full shadow-xl lg:-ml-16 max-w-150-px">
                            </div>
                        </div>


                    </div>


                </div>
            </div>
        </div>
        <div class="w-full mx-auto lg:w-4/12 lg:order-1">
            <div class="flex justify-center py-4 pt-8 lg:pt-4">
                <div class="p-3 mr-4 text-center">
                    <a href="/profile" class="text-lg font-semibold text-blueGray-400">profile</a>
                </div>

                <div class="p-3 text-center lg:mr-4">
                    <a href="/favorite" class="text-lg font-semibold text-blueGray-400">favorite</a>
                </div>
            </div>
        </div>



    </main>



    <section class="container p-6">

        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 ">


            @foreach ($favorites as $favorite)
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

                    </div>
                        <div class="text-center ">
                            <div class="relative inline-flex">
                                <img alt="Tania Andrew" src='{{ url("storage/{$favorite->doctor->user->avatar}") }}'
                                    class=" block h-[80%] w-[40%] !rounded-full border-4 border-slate-300/45 fit object-cover object-center mx-auto z-10" />
                                <span
                                    class="absolute min-w-[12px] min-h-[12px] rounded-full py-1 px-1 text-xs font-medium content-[''] leading-none grid place-items-center top-[18%] right-[32%] translate-x-2/4 -translate-y-2/4 bg-green-500 text-white">
                                </span>
                            </div>
                            <h2 class="text-lg font-medium leading-7 text-gray-900">
                                {{ $favorite->doctor->specialitie->Name }}</h2>

                            <p class="text-base text-gray-600">{{ $favorite->doctor->user->name }}</p>
                        </div>



                    </div>
            @endforeach
        </div>
        
    </section>

</x-app-layout>
