<?php

namespace App\Http\Controllers;

use App\Models\Doctor;

class DoctorController extends Controller
{
    public function getDoctorData()
    {
        return view('tmp.sait.page.doctor.list', [
            'doctors' => Doctor::all()
        ]);
    }

    public function getDoctorShowData($doctor_alias)
    {
        $doctor = Doctor::where('doctor_alias', $doctor_alias)->first();
        return view('tmp.sait.page.doctor.show', ['doctor' => $doctor])->with('doctor_alias', $doctor_alias);
    }
}
