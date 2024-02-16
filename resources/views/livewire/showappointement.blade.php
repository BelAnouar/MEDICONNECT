<div>

    <div class="flex justify-around p-2 border-t border-black ">

        <div>
            <button wire:click="openCommantModal({{ $doctorId }})">comment</button>
            {{-- <form action="{{ route('appointment.store') }}" method="post">
                @csrf
                <input type="hidden" value="{{ $doctorId }}" name="docter_id">

            </form> --}}
        </div>
        <div>
            <button wire:click="openEditModal({{ $doctorId }})">rend</button>
            {{-- <a ><i class='bx bx-edit'></i></a> --}}
            {{-- <form action="{{ route('appointment.store') }}" method="post">
                @csrf
                <input type="hidden" value="{{$doctorId}}" name="docter_id">
                <button>render vous</button>
            </form> --}}
        </div>
    </div>
    @if ($appointementId)
        <div wire:ignore.self class="z-20 modal fade" tabindex="-1" role="dialog" id="commantModal">
            <div data-theme="light"
                class="fixed top-0 left-0 z-20 flex items-center justify-center w-full h-full py-10 bg-black bg-opacity-50 "
                id="modal">
                <div class="z-20 w-full max-w-xl max-h-full overflow-y-auto bg-white ">
                    <div class="z-20 w-full ">

                        <div class="relative z-20 px-5 py-8 bg-white border border-gray-400 rounded shadow-md md:px-10">

                            <div class="flex flex-wrap">
                                <!-- Morning Sessions -->
                                <div class="w-full p-4 ">
                                    <h3 class="mb-4 text-xl font-semibold">Morning Sessions</h3>

                                    <div class="p-4 mb-4 bg-white rounded-lg shadow-md">
                                        <div class="flex justify-between mb-4">
                                            <div class="text-xs text-gray-500">
                                                {{ \Carbon\Carbon::now()->format('F Y') }}</div>
                                            <div class="text-xs text-gray-500">{{ \Carbon\Carbon::now()->format('l') }}
                                            </div>

                                        </div>
                                        <div class="grid grid-cols-4 gap-2 mb-4">
                                            @foreach ($appointements as $appointement)
                                                @php
                                                    $buttonClass = $appointement->status == 'taken' ? 'bg-[#b6ded5] cursor-not-allowed' : 'bg-[#474F7A] text-white';
                                                    $disabled = $appointement->status == 'taken' ? 'disabled' : '';
                                                    $checked = $appointement->status == 'taken' ? 'checked' : '';
                                                    $statusText = $appointement->status == 'taken' ? 'taken' : 'available';
                                                    $sessionTime = \Carbon\Carbon::parse($appointement->start_time)->format('h:i A');
                                                @endphp

                                                <button wire:click="reserve({{ $appointement->id }})"
                                                    class="{{ $buttonClass }} px-2 py-1 rounded-full text-xs {{ $disabled }}"
                                                    {{ $disabled ? 'disabled' : '' }}> {{ $sessionTime }}
                                                </button>
                                            @endforeach
                                        </div>

                                    </div>


                                </div>
                            </div>











                        </div>
                    </div>
                </div>
            </div>
    @endif
    @if ($commantID)
        <div wire:ignore.self class="z-20 modal fade" tabindex="-1" role="dialog" id="commantModal">
            <div data-theme="light"
                class="fixed top-0 left-0 z-20 flex items-center justify-center w-full h-full py-10 bg-black bg-opacity-50 "
                id="modal">
                <div class="z-20 w-full max-w-xl max-h-full overflow-y-auto bg-white ">
                    <div class="z-20 w-full ">

                        <div class="relative z-20 px-5 py-8 bg-white border border-gray-400 rounded shadow-md md:px-10">
              
                            <div class="flex items-center justify-center max-w-lg mx-auto mt-56 mb-4 shadow-lg">
                                <form wire:submit.prevent="sendCommant" class="w-full max-w-xl px-4 pt-2 bg-white rounded-lg">
                                    <input type="hidden"  wire:model="idDoct" name='idDoct'  value="{{$doctorId}}">
                                    
                                    <div class="flex flex-wrap mb-6 -mx-3">
                                        <h2 class="px-4 pt-3 pb-2 text-lg text-gray-800">Add a new comment</h2>
                                        <div class="w-full px-3 mt-2 mb-2 md:w-full">
                                        {{$starCount}}
                                            <textarea wire:model="commant" 
                                                class="w-full h-20 px-3 py-2 font-medium leading-normal placeholder-gray-700 bg-gray-100 border border-gray-400 rounded resize-none focus:outline-none focus:bg-white"
                                                name="body" placeholder='Type Your Comment' required></textarea>
                                        </div>
                                        <div class="flex items-start w-full px-3 md:w-full">
                                            <div>
                                                <label for="rating" class="block mb-2 text-sm font-medium text-gray-900 ">Rating</label>
                                                <div class="flex items-center space-x-1">
                                                    @for ($i = 1; $i <= 5; $i++)
                                                        <input type="radio" id="star{{ $i }}" wire:model="starCount" value="{{ $i }}" class="hidden" />
                                                        <label for="star{{ $i }}" class="text-xl cursor-pointer starr hover:opacity-100 hover:text-3xl"
                                                            wire:click="handleStarClick({{ $i }})">⭐️</label>
                                                    @endfor
                                                </div>
                                                
                                            <div class="-mr-1">
                                                <button  wire:loading.attr="disabled"             class="px-4 py-1 mr-1 font-medium tracking-wide text-gray-700 bg-white border border-gray-400 rounded-lg hover:bg-gray-100" >
                                                     Send
                                                </button>
                                                
                                            </div>
                                        </div>
                                </form>
                            </div>

                            <div>
                                
                            </div>
                        </div>











                    </div>
                </div>
            </div>
        </div>
    @endif

</div>
@push('scripts')
    <script>
        Livewire.on('openEditModal', () => {
            $('#editMedicineModal').modal('show');
        });


        
    
</script>
    </script>
@endpush

