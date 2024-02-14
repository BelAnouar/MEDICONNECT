<div>
    {{ $currentStep }}
    <h2 class="mb-4 text-3xl font-semibold">Register</h2>
    <p class="mb-3 font-light">
        Create your account
    </p>
    <form method="POST" wire:submit.prevent="register" enctype="multipart/form-data">
        @csrf
        @if ($currentStep == 1)
            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input wire:model="name" id="name" class="block w-full mt-1" type="text" name="name" :value="old('name') "
                    required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input wire:model="email" id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')"
                    required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input wire:model="password" id="password" class="block w-full mt-1" type="password" name="password" required
                    autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-text-input id="password_confirmation" class="block w-full mt-1" type="password"
                    name="password_confirmation" required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>
        @endif

        @if ($currentStep == 2)
            <h3 class="py-3 text-2xl font-medium text-center"> photo profile</h3>
            <div class="block p-3 mx-auto bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100">
                <div x-data="{ photoName: null, photoPreview: null }" class="col-span-6 ml-2 sm:col-span-4 md:mr-3">
                    <!-- Photo File Input -->
                    <input wire:model="avatar" type="file" name="avatar" class="hidden" x-ref="photo"
                        x-on:change="
                        photoName = $refs.photo.files[0].name;
                        const reader = new FileReader();
                        reader.onload = (e) => {
                            photoPreview = e.target.result;
                        };
                        reader.readAsDataURL($refs.photo.files[0]);
    ">

                    <label class="block mb-2 text-sm font-bold text-center text-gray-700" for="photo">
                        Profile Photo <span class="text-red-600"> </span>
                    </label>

                    <div class="text-center">
                        <!-- Current Profile Photo -->
                        <div class="mt-2" x-show="! photoPreview">
                            <img src="https://images.unsplash.com/photo-1531316282956-d38457be0993?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=700&q=80"
                                class="w-40 h-40 m-auto rounded-full shadow">
                        </div>
                        <!-- New Profile Photo Preview -->
                        <div class="mt-2" x-show="photoPreview" style="display: none;">
                            <span class="block w-40 h-40 m-auto rounded-full shadow"
                                x-bind:style="'background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url(\'' +
                                photoPreview + '\');'"
                                style="background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url('null');">
                            </span>
                        </div>
                        <button type="button"
                            class="inline-flex items-center px-4 py-2 mt-2 ml-3 text-xs font-semibold tracking-widest text-gray-700 uppercase transition duration-150 ease-in-out bg-white border border-gray-300 rounded-md shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-400 focus:shadow-outline-blue active:text-gray-800 active:bg-gray-50"
                            x-on:click.prevent="$refs.photo.click()">
                            Select New Photo
                        </button>
                    </div>
                </div>
            </div>
        @endif
        @if ($currentStep == 3)
            <label for="role">Choose Role:</label>
            <select wire:model="role" name="role" id="role">
                <option value="doctor">Doctor</option>
                <option value="patient">Patient</option>
            </select>
        @endif
        <div class="flex items-center justify-end gap-2 mt-4">
            <a class="text-sm text-gray-600 underline rounded-md hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>


            @if ($currentStep == 2 || $currentStep == 3 )
                <button type="button" wire:click="decreaseStep()"
                    class="relative w-16 h-8 overflow-hidden text-lg font-bold text-white bg-green-500 rounded-lg group">
                    Back
                    <div
                        class="absolute inset-0 w-full h-full transition-all duration-300 scale-0 rounded-lg group-hover:scale-100 group-hover:bg-white/30">
                    </div>
                </button>
            @endif

            @if ($currentStep == 1 || $currentStep == 2 )
                <button type="button" wire:click="increaseStep()"
                    class="relative w-16 h-8 overflow-hidden text-lg font-bold text-white bg-green-500 rounded-lg group">
                    Next
                    <div
                        class="absolute inset-0 w-full h-full transition-all duration-300 scale-0 rounded-lg group-hover:scale-100 group-hover:bg-white/30">
                    </div>
                </button>
            @endif
            @if ($currentStep == 3)
                <x-primary-button class="ms-4">
                    {{ __('Register') }}
                </x-primary-button>
            @endif

           
        </div>

    </form>
</div>
