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

    </main>


    <section class="container p-6">

        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 ">


          

            @foreach ($certaficats as $certaficat)
                <div class="p-4 bg-white border shadow-2xl rounded-3xl">
                   
                        <div class="text-center ">
                            <div class="relative inline-flex">
                                <img alt="Tania Andrew" src='{{ url("storage/{$certaficat->doctor->user->avatar}") }}'
                                    class=" block h-[80%] w-[40%] !rounded-full border-4 border-slate-300/45 fit object-cover object-center mx-auto z-10" />
                                <span
                                    class="absolute min-w-[12px] min-h-[12px] rounded-full py-1 px-1 text-xs font-medium content-[''] leading-none grid place-items-center top-[18%] right-[32%] translate-x-2/4 -translate-y-2/4 bg-green-500 text-white">
                                </span>
                            </div>

                            <p class="text-base text-gray-600">{{ $certaficat->doctor->user->name }}</p>
                        </div>

                        <form action="/certife/{{$certaficat->id}}" method="get">
                         
                            <button class="block py-3 mx-auto" type="submit">
                                get certife
                            </button>
                        </form>


                    </div>
            @endforeach
        </div>
        
    </section>

</x-app-layout>
