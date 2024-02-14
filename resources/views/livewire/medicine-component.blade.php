<div>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Date Order</th>
                <th>Action</th> <!-- New column for actions -->
            </tr>
        </thead>
        <tbody>
            @foreach ($medicines as $medication)
                <tr>
                    <td>
                        <p class="text-sm text-gray-500">{{ $medication->name }}</p>
                    </td>
                    <td>

                        <p class="text-sm text-gray-500">{{ $medication->created_at->format('d-m-Y') }}
                        </p>
                    </td>
                    <td>
                        <a wire:click="openEditModal({{ $medication->id }})"><i class='bx bx-edit'></i></a>


                        <!-- Courbeille icon for delete -->
                        <a href="#"
                            onclick="event.preventDefault(); if(confirm('Are you sure you want to delete this medicine?')) document.getElementById('deleteMedicineForm{{ $medication->id }}').submit();"><i
                                class='bx bxs-trash'></i></a>
                        <!-- Delete form -->
                        <form id="deleteMedicineForm{{ $medication->id }}"
                            action="{{ route('medicine.destroy', $medication->id) }}" method="POST"
                            style="display: none;">
                            @csrf
                            @method('DELETE')
                        </form>
                    </td>
                </tr>
                <!-- Edit medicine Modal -->
            @endforeach
        </tbody>
    </table>
    @if ($medicineToEdit)
        <div wire:ignore.self class="modal fade" tabindex="-1" role="dialog" id="editMedicineModal">
            <div data-theme="light"
                class="fixed top-0 left-0 flex items-center justify-center w-full h-full py-10 bg-black bg-opacity-50 "
                id="modal">
                <div class="w-full max-w-xl max-h-full overflow-y-auto bg-white">
                    <div class="w-full">

                        <div class="relative px-5 py-8 bg-white border border-gray-400 rounded shadow-md md:px-10">
                          
                            <form id="updateMedicineForm{{ $medication->id }}"
                                action="{{ route('medicine.update', $medication->id) }}" method="POST">
                                @csrf
                                @method('PUT')

                              
                                <div class="form-group">
                                    <label for="medicine_name">Medicine Name:</label>
                                    <input type="text"
                                        class="form-control border border-[#DBE7C9]  px-2 py-2 rounded-xl focus:outline-none"
                                        id="medicine_name" value=" {{$medicineToEdit->name}}" name="edit_medicine_name" required>
                                </div>
                                <div class="form-group">
                                    <label for="medicine_description">Medicine desc:</label>
                                    <input type="text" value=" {{$medicineToEdit->desc}}"
                                        class="form-control border  border-[#DBE7C9] px-2 py-2 rounded-xl focus:outline-none"
                                        id="medicine_description" name="edit_medicine_description" required>
                                </div>
                                <div class="form-group">
                                    <label for="medicine_description">Medicine price:</label>
                                    <input type="text" value=" {{$medicineToEdit->price}}"
                                        class="form-control border  border-[#DBE7C9] px-2 py-2 rounded-xl focus:outline-none"
                                        id="medicine_price" name="edit_medicine_price" required>
                                </div>
                                <select name="edit_illness_id" id="illness_id">

                                    @foreach ($specialities as $ill)
                                        <option value="{{ $ill->id }}">{{ $ill->Name }}</option>
                                    @endforeach
                                </select>

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
