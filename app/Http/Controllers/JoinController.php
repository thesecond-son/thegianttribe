<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Partner;

class JoinController extends Controller
{
    // STORE STUDENT
    public function storeStudent(Request $request)
    {
        $request->validate([
            'full_name' => 'required',
            'age' => 'required',
            'school' => 'required',
            'class_grade' => 'required',
            'phone' => 'required',
            'email' => 'required',
        ]);

        Student::create([
            'full_name' => $request->full_name,
            'age' => $request->age,
            'school' => $request->school,
            'class_grade' => $request->class_grade,
            'phone' => $request->phone,
            'email' => $request->email,
        ]);

        return back()->with('success', 'Student application submitted successfully!');
    }

    // STORE PARTNER
    public function storePartner(Request $request)
    {
        $request->validate([
            'full_name' => 'required',
            'organization_role' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'interest_area' => 'required',
        ]);

        Partner::create([
            'full_name' => $request->full_name,
            'organization_role' => $request->organization_role,
            'email' => $request->email,
            'phone' => $request->phone,
            'interest_area' => $request->interest_area,
        ]);

        return back()->with('success', 'Partner application submitted successfully!');
    }
}