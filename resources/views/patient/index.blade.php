


<!-- component -->

@extends('layouts.dashboard.app')
@section('script')
@vite(['resources/css/app.css', 'resources/js/app.js'])
@endsection
@section('content')
    <div id="content" class="col-span-9 p-6 rounded-lg bg-white/10">
       
        
        <div id="last-users">
            <h1 class="py-4 font-bold uppercase"> users</h1>
            <div class="overflow-x-scroll">
                <table class="w-full whitespace-nowrap">
                    <thead class="bg-black/60">
                        <th class="px-2 py-3 text-left rounded-l-lg">Name</th>
                        <th class="px-2 py-3 text-left">Email</th>
                        <th class="px-2 py-3 text-left">Group</th>
                        <th class="px-2 py-3 text-left">start_time</th>
                        <th class="px-2 py-3 text-left rounded-r-lg">end_time</th>
                        <th class="px-2 py-3 text-left rounded-r-lg">confirme</th>
                    </thead>@foreach ($patients as $patient)
                    <tr class="border-b border-gray-700">
                        
                            
                      
                        <td class="px-2 py-3 font-bold">
                            <div class="inline-flex items-center space-x-3">
                                <span><img class="w-8 h-8 rounded-full"
                                        src="https://images.generated.photos/tGiLEDiAbS6NdHAXAjCfpKoW05x2nq70NGmxjxzT5aU/rs:fit:256:256/czM6Ly9pY29uczgu/Z3Bob3Rvcy1wcm9k/LnBob3Rvcy92M18w/OTM4ODM1LmpwZw.jpg"
                                        alt=""></span>
                                <span>{{$patient->patient['name'] ?? "nul"}}</span>
                            </div>
                        </td>
                        <td class="px-2 py-3">{{$patient->patient['name'] ?? "nul"}}</td>
                        <td class="px-2 py-3">pattient</td>
                        <td class="px-2 py-3">{{$patient->start_time}}</td>
                        <td class="px-2 py-3">{{$patient->end_time}}</td>
                        <td class="px-2 py-3">
                            <a href="patient/{{$patient->patient['id']}}" title="certife" class="hover:text-white"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25M9 16.5v.75m3-3v3M15 12v5.25m-4.5-15H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                              </svg>
                              
                        </a></td>
                        
                        
                    </tr>
                   @endforeach


                </table>
            </div>
        </div>

    </div>
@endsection
