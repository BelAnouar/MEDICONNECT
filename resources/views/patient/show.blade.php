
@extends('layouts.dashboard.app')
@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    @vite(['resources/css/style.css', 'resources/js/app.js', 'resources/css/app.css'])
@endsection
@section('content')
 

    <div id="content" class="col-span-9 p-6 rounded-lg bg-white/10">
        <div class="max-w-md mx-auto">
            <form action="{{route('medical_certificates.store')}}"  method="POST" class="px-8 pt-6 pb-8 mb-4 bg-white rounded shadow-md">
                @csrf

                <!-- Patient ID -->
                <div class="mb-4">
                    <label class="block mb-2 text-sm font-bold text-gray-700" for="patient_id">
                       Name Patient 
                    </label>
                    <input disabled value="{{$patient->name}}" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="patient_name" name="patient_name" type="text" placeholder="Patient ID">
                </div>

              
                    <input class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" value="{{$patient->id}}" id="patient_id" name="patient_id" type="hidden" >
                

                <!-- Consultation Date -->
                <div class="mb-4">
                    <label class="block mb-2 text-sm font-bold text-gray-700" for="consultation_date">
                        Consultation Date
                    </label>
                    <input class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="consultation_date" name="consultation_date" type="date">
                </div>

                <!-- Number of Days Recommended -->
                <div class="mb-4">
                    <label class="block mb-2 text-sm font-bold text-gray-700" for="number_of_days_recommended">
                        Number of Days Recommended
                    </label>
                    <input class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="number_of_days_recommended" name="number_of_days_recommended" type="number" placeholder="Number of Days Recommended">
                </div>

                <!-- Submit Button -->
                <div class="flex items-center justify-between">
                    <button class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700 focus:outline-none focus:shadow-outline" type="submit">
                        Create Medical Certificate
                    </button>
                </div>
            </form>
        </div>
    </div>

   
@endsection
