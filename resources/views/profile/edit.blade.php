<x-app-layout>


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
                                    src="/img/girl.jpg"
                                    class="absolute mt-24 -ml-20 align-middle bg-cover border-none rounded-full shadow-xl h-36 lg:-ml-16 max-w-150-px">
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
                @can('manage_patient')
                    <div class="p-3 text-center lg:mr-4">
                        <a href="/favorite" class="text-lg font-semibold text-blueGray-400">favorite</a>
                    </div>
                    <div class="p-3 text-center lg:mr-4">
                        <a href="/certife" class="text-lg font-semibold text-blueGray-400">certife</a>
                    </div>
                @endcan
            </div>
        </div>



    </main>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto space-y-6 max-w-7xl sm:px-6 lg:px-8">
            <div class="p-4 bg-white shadow sm:p-8 sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 bg-white shadow sm:p-8 sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 bg-white shadow sm:p-8 sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
