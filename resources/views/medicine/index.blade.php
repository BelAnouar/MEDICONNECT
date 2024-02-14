@extends('layouts.dashboard.app')
@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    @vite(['resources/css/style.css', 'resources/js/app.js', 'resources/css/app.css'])
@endsection
@section('content')
    <!-- SIDEBAR -->

    <!-- SIDEBAR -->



    <div id="content" class="col-span-9 p-6 rounded-lg bg-white/10">
        <section id="content">

            <main class="main">
                <div class="head-title">
                    <div class="left">

                    </div>
                    <button data-toggle="modal" data-target="#addMedicineModal" type="button"
                        class=" bg-[#0D9276] rounded-full px-2 py-1 ">
                        <span class="text-white text-semibold">Add New Medicine</span>
                    </button>

                </div>

                <div class="table-data">
                    <div class="order">
                        <div class="head">
                            <h3>Recent Medicines</h3>
                            <i class='bx bx-search'></i>
                            <i class='bx bx-filter'></i>
                        </div>


                        <livewire:medicine-component />

                        @livewireScripts

                    </div>


                    <div id="addMedicineModal" class="modal fade" tabindex="-1" aria-labelledby="addMedicineModalLabel"
                        aria-hidden="true" style="display: none;">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="flex justify-between modal-header">
                                    <h5 class="modal-title" id="addMedicineModalLabel">Add New Medicine</h5>
                                    <button type="button" class="btn-close" data-dismiss="modal"
                                        aria-label="Close">X</button>
                                </div>
                                <div class="modal-body">
                                    <form id="addMedicineForm" class="flex flex-col gap-4"
                                        action="{{ route('medicine.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="medicine_name">Medicine Image:</label>
                                            <input type="file"
                                                class="form-control border border-[#DBE7C9]  px-2 py-2 rounded-xl focus:outline-none"
                                                id="medicine_img" name="medicine_img" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="medicine_name">Medicine Name:</label>
                                            <input type="text"
                                                class="form-control border border-[#DBE7C9]  px-2 py-2 rounded-xl focus:outline-none"
                                                id="medicine_name" name="medicine_name" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="medicine_description">Medicine desc:</label>
                                            <input type="text"
                                                class="form-control border  border-[#DBE7C9] px-2 py-2 rounded-xl focus:outline-none"
                                                id="medicine_description" name="medicine_description" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="medicine_description">Medicine price:</label>
                                            <input type="text"
                                                class="form-control border  border-[#DBE7C9] px-2 py-2 rounded-xl focus:outline-none"
                                                id="medicine_price" name="medicine_price" required>
                                        </div>
                                        <select name="illness_id" id="illness_id">

                                            @foreach ($specialities as $ill)
                                                <option value="{{ $ill->id }}">{{ $ill->Name }}</option>
                                            @endforeach
                                        </select>
                                        <button type="submit"
                                            class="bg-[#99BC85] font-semibold text-white text-md px-3 py-1 rounded-full w-full max-w-sm">Add
                                            Medicine</button>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>




            </main>
        </section>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const modalToggles = document.querySelectorAll("[data-modal-toggle]");
            const modalCloses = document.querySelectorAll("[data-modal-hide]");

            modalToggles.forEach((toggle) => {
                toggle.addEventListener("click", () => {
                    const target = toggle.getAttribute("data-modal-target");
                    const modal = document.getElementById(target);
                    modal.classList.toggle("hidden");
                    modal.setAttribute("aria-hidden", modal.classList.contains("hidden"));
                });
            });

            modalCloses.forEach((close) => {
                close.addEventListener("click", () => {
                    const target = close.getAttribute("data-modal-hide");
                    const modal = document.getElementById(target);
                    modal.classList.add("hidden");
                    modal.setAttribute("aria-hidden", modal.classList.contains("hidden"));
                });
            });

        });

        function openEditModal(medicationId) {
            const modal = document.getElementById('editMedicineModal' + medicationId);
            modal.classList.remove('hidden');
            modal.setAttribute('aria-hidden', modal.classList.contains('hidden'));
        }

        const allSideMenu = document.querySelectorAll('#sidebar .side-menu.top li a');

        allSideMenu.forEach(item => {
            const li = item.parentElement;

            item.addEventListener('click', function() {
                allSideMenu.forEach(i => {
                    i.parentElement.classList.remove('active');
                })
                li.classList.add('active');
            })
        });




        // TOGGLE SIDEBAR
        const menuBar = document.querySelector('#content nav .bx.bx-menu');
        const sidebar = document.getElementById('sidebar');

        menuBar.addEventListener('click', function() {
            sidebar.classList.toggle('hide');
        })







        const searchButton = document.querySelector('#content nav form .form-input button');
        const searchButtonIcon = document.querySelector('#content nav form .form-input button .bx');
        const searchForm = document.querySelector('#content nav form');

        searchButton.addEventListener('click', function(e) {
            if (window.innerWidth < 576) {
                e.preventDefault();
                searchForm.classList.toggle('show');
                if (searchForm.classList.contains('show')) {
                    searchButtonIcon.classList.replace('bx-search', 'bx-x');
                } else {
                    searchButtonIcon.classList.replace('bx-x', 'bx-search');
                }
            }
        })





        if (window.innerWidth < 768) {
            sidebar.classList.add('hide');
        } else if (window.innerWidth > 576) {
            searchButtonIcon.classList.replace('bx-x', 'bx-search');
            searchForm.classList.remove('show');
        }


        window.addEventListener('resize', function() {
            if (this.innerWidth > 576) {
                searchButtonIcon.classList.replace('bx-x', 'bx-search');
                searchForm.classList.remove('show');
            }
        })



        const switchMode = document.getElementById('switch-mode');

        switchMode.addEventListener('change', function() {
            if (this.checked) {
                document.body.classList.add('dark');
            } else {
                document.body.classList.remove('dark');
            }
        })
    </script>
@endsection
