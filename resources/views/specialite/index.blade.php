@extends('layouts.dashboard.app')

@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/style.css'])
@endsection


@section('content')
    <!-- SIDEBAR -->

    <!-- SIDEBAR -->



    <div id="content" class="col-span-9 p-6 rounded-lg bg-white/10">
        <form id="addMedicineForm" class="flex flex-col gap-4" action="{{ route('speciality.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="speciality_name">Speciatity Name:</label>
                <input type="text" class="form-control border border-[#DBE7C9]  px-2 py-2 rounded-xl focus:outline-none"
                    id="speciality_name" name="name" required>
            </div>


            <button type="submit"
                class="bg-[#99BC85] font-semibold text-white text-md px-3 py-1 rounded-full w-full max-w-sm">Add
                Speciatity</button>
        </form>
        <main class="main">
            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Recent Medicines</h3>
                        <i class='bx bx-search'></i>
                        <i class='bx bx-filter'></i>
                    </div>


                    <livewire:speciality-component />

                    @livewireScripts

                </div>
            </div>
        </main>
    </div>
@endsection
