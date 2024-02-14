<div>
    
    <table>
        <thead>
            <tr>
                <th>Name</th>
            
                <th>Action</th> <!-- New column for actions -->
            </tr>
        </thead>
        <tbody>
            @foreach ( $specialities as  $specialitie)
                <tr>
                    <td>
                        <p class="text-sm text-gray-500">{{ $specialitie->Name }}</p>
                    </td>
           
                    <td>
                        <a wire:click="openEditModal({{ $specialitie->id }})"><i class='bx bx-edit'></i></a>


                        <!-- Courbeille icon for delete -->
                        <a href="#"
                            onclick="event.preventDefault(); if(confirm('Are you sure you want to delete this medicine?')) document.getElementById('deleteMedicineForm{{ $specialitie->id }}').submit();"><i
                                class='bx bxs-trash'></i></a>
                        <!-- Delete form -->
                        <form id="deleteMedicineForm{{ $specialitie->id }}"
                            action="{{ route('speciality.destroy', $specialitie->id) }}" method="POST"
                            style="display: none;">
                            @csrf
                            @method('DELETE')
                        </form>
                    </td>
                </tr>
               
            @endforeach
        </tbody>
    </table>



    @if ($specialityToEdit)
    <div wire:ignore.self class="modal fade" tabindex="-1" role="dialog" id="editMedicineModal">
        <div data-theme="light"
            class="fixed top-0 left-0 flex items-center justify-center w-full h-full py-10 bg-black bg-opacity-50 "
            id="modal">
            <div class="w-full max-w-xl max-h-full overflow-y-auto bg-white">
                <div class="w-full">

                    <div class="relative px-5 py-8 bg-white border border-gray-400 rounded shadow-md md:px-10">
                      
                        <form id="updateMedicineForm{{ $specialityToEdit->id }}"
                            action="{{ route('speciality.update', $specialityToEdit->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                          
                            <div class="form-group">
                                <label for="speciality_name">speciality Name:</label>
                                <input type="text"
                                    class="form-control border border-[#DBE7C9]  px-2 py-2 rounded-xl focus:outline-none"
                                    id="speciality_name" value=" {{$specialityToEdit->Name}}" name="name" required>
                            </div>
                         
                            <button type="submit">edit</button>
                        </form>
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
@endpush