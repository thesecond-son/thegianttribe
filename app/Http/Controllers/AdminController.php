<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Partner;

class AdminController extends Controller
{
    // LOGOUT
    public function logout(Request $request)
    {
        $request->session()->forget('is_admin');
        return redirect('/admin/login');
    }

    // DELETE STUDENT
    public function deleteStudent($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();

        return back()->with('success', 'Student deleted successfully');
    }

    // DELETE PARTNER
    public function deletePartner($id)
    {
        $partner = Partner::findOrFail($id);
        $partner->delete();

        return back()->with('success', 'Partner deleted successfully');
    }

    // VIEW STUDENT
public function viewStudent($id)
{
    $student = Student::findOrFail($id);
    return view('admin.student-view', compact('student'));
}

// VIEW PARTNER
public function viewPartner($id)
{
    $partner = Partner::findOrFail($id);
    return view('admin.partner-view', compact('partner'));
}

public function dashboard(Request $request)
{
    // SEARCH INPUTS
    $studentSearch = $request->student_search;
    $partnerSearch = $request->partner_search;

    // STUDENTS QUERY
    $students = \App\Models\Student::when($studentSearch, function ($query) use ($studentSearch) {
        $query->where('full_name', 'like', "%$studentSearch%")
              ->orWhere('email', 'like', "%$studentSearch%");
    })->latest()->paginate(10)->withQueryString();

    // PARTNERS QUERY
    $partners = \App\Models\Partner::when($partnerSearch, function ($query) use ($partnerSearch) {
        $query->where('full_name', 'like', "%$partnerSearch%")
              ->orWhere('email', 'like', "%$partnerSearch%");
    })->latest()->paginate(10)->withQueryString();

    // COUNTS
    $studentCount = \App\Models\Student::count();
    $partnerCount = \App\Models\Partner::count();

    return view('admin.dashboard', compact(
        'students',
        'partners',
        'studentCount',
        'partnerCount'
    ));
}
}