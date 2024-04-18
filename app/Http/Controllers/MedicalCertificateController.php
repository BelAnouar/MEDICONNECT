<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\MedicalCertificate;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MedicalCertificateController extends Controller
{
    public function store(Request $request)
    {
        $Doctor_Id = Doctor::where('user_id', Auth::user()->id)->first();

        $medicalCertificate = new MedicalCertificate([
            'PatientID' => $request->input('patient_id'),
            'DoctorID' => $Doctor_Id->id,
            'ConsultationDate' => $request->input('consultation_date'),
            'NumberOfDaysRecomended' => $request->input('number_of_days_recommended'),
        ]);


        $medicalCertificate->save();

        return redirect()->back();
    }
    public function index()
    {


        $patientId = Auth::id();
        $Certaficat = MedicalCertificate::where('PatientID', $patientId)->with('doctor', 'doctor.user')

            ->get();

        return view("patient.certaficats", ['certaficats' => $Certaficat]);
    }

    public function showCerficat($id)
    {
        $patientId = Auth::id();
        $Certaficat = MedicalCertificate::where('PatientID', $patientId)
            ->where('id', $id)->with('patient')
            ->get();


        $pdf = Pdf::loadView('patient.showCertaficat', compact('Certaficat'));
        $pdf->download('showCertaficat.pdf');
        return redirect()->back();
    }
}
